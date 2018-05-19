<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Groups;
use app\models\Schedule;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Расписание';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="schedule-index">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Добавить расписание', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget(['dataProvider' => $dataProvider,
                                 'filterModel' => $searchModel,
                                 'columns' => [['class' => 'yii\grid\SerialColumn'],

                                     ['attribute' => 'for_the_day',
                                         'label' => 'День',
                                         'filter' => DatePicker::widget(['model' => $searchModel,
                                                                            'value' => $searchModel->for_the_day,
                                                                            'attribute' => 'for_the_day',
                                                                            'options' => ['class' => 'form-control'],
                                                                            'language' => 'ru',
                                                                            'dateFormat' => 'yyyy-MM-dd',
                                                                        ]),
                                         'format' => ['date', 'l yyyy-MM-dd'],
                                         'options' => ['width' => '200']
                                     ],
                                     ['attribute' => 'for_the_group',
                                         'label' => 'Группа',
                                         'filter' => ArrayHelper::map(Groups::find()->all(), 'id', 'name'),
                                         'filterInputOptions' => ['class' => 'form-control form-control-sm'],
                                         'value' => 'forTheGroup.name',
                                         'options' => ['width' => '130']
                                     ],

                                     ['label' => '№ пары / Дисциплина / преподаватель / аудитория / время',
                                         'format' => 'raw',
                                         'value' => function ($model)
                                         {
                                             $return = '';
                                             for ($i = 1; $i <= 6; $i++) {
                                                 $temp = (string)$i . ' / ';
                                                 if (count($model['session' . (string)$i . 'Discipline']->name) == 0) {
                                                     $temp .= notFound() . ' / ';
                                                     $temp .= notFound() . ' / ';
                                                     $temp .= notFound() . '<br />';
                                                 } else {
                                                     $temp .= $model['session' . (string)$i . 'Discipline']->name . ' / ';
                                                     $temp .= $model['session' . (string)$i . 'Room']->name . ' (' . $model['session' . (string)$i . 'Room']->type . ') / ';
                                                     $temp .= $model['session' . (string)$i . 'Teacher']->name . ' ' . mb_strimwidth($model['session' . (string)$i . 'Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session' . (string)$i . 'Teacher']->surname, 0, 1) . '. <br />';
                                                 }
                                                 $return .= $temp;
                                             }

                                             return $return;
                                         },
                                     ],
                                     ['class' => 'yii\grid\ActionColumn'],
                                 ],
                             ]); ?>


        <!--    --><?php //Pjax::end(); ?>
    </div>

<?php
function notFound()
{
    return 'Отсутствует';
}

?>