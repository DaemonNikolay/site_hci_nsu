<?php

use yii\helpers\Html;
use yii\bootstrap\Tabs;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use app\models\Groups;

/* @var $groups app\controllers\ScheduleController */
/* @var $model app\controllers\ScheduleController */
/* @var $searchModel app\models\ScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Расписание';
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?= Html::encode($this->title) ?></h1>

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
                                                                    'dateFormat' => 'yyyy-MM-dd',]),
                                 'format' => ['date',
                                     'l yyyy-MM-dd'],
                                 'options' => ['width' => '200']],


                             ['attribute' => 'for_the_group',
                                 'label' => 'Группа',
                                 'filter' => ArrayHelper::map(Groups::find()
                                                                    ->all(), 'id', 'name'),
                                 'filterInputOptions' => ['class' => 'form-control form-control-sm'],
                                 'value' => 'forTheGroup.name',
                                 'options' => ['width' => '130']],

                             ['label' => '№ пары / Дисциплина / преподаватель / аудитория / время',
                                 'format' => 'raw',
                                 'value' => function ($model)
                                 {
                                     $return = '';
                                     for ($i = 1; $i <= 6; $i++) {
                                         $temp = (string)$i . ' / ';
                                         $temp .= $model['session' . (string)$i . 'Discipline']->name . ' / ';
                                         $temp .= $model['session' . (string)$i . 'Room']->name . ' (' . $model['session' . (string)$i . 'Room']->type . ') /';
                                         $temp .= $model['session' . (string)$i . 'Teacher']->name . ' ' . mb_strimwidth($model['session' . (string)$i . 'Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session' . (string)$i . 'Teacher']->surname, 0, 1) . '. <br />';

                                         $return .= $temp;
                                     }

                                     return $return;
                                 },],],]); ?>

<?php $this->registerCssFile('/web/css/schedule-guest.css', ['depends' => [AppAsset::className()]]) ?>

