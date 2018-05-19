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

    <?= GridView::widget(['dataProvider' => $dataProvider, 'filterModel' => $searchModel, 'columns' => [


        ['attribute' => 'for_the_day', 'label' => 'День',
         'filter' => DatePicker::widget(['model' => $searchModel, 'value' => $searchModel->for_the_day,
                                         'attribute' => 'for_the_day', 'options' => ['class' => 'form-control'],
                                         'language' => 'ru', 'dateFormat' => 'yyyy-MM-dd',]),
         'format' => ['date', 'l yyyy-MM-dd'], 'options' => ['width' => '170']],


        ['attribute' => 'for_the_group', 'label' => 'Группа',
         'filter' => ArrayHelper::map(Groups::find()->all(), 'id', 'name'),
         'filterInputOptions' => ['class' => 'form-control form-control-sm'], 'value' => 'forTheGroup.name',
         'options' => ['width' => '130']],

        ['label' => '№ пары / Дисциплина / преподаватель / аудитория / время',
         'format' => 'raw', 'value' => function ($model)
        {
            $session_1 = '1 / ';
            $session_1 .= $model['session1Discipline']->name . ' / ';
            $session_1 .= $model['session1Teacher']->name . ' ' . mb_strimwidth($model['session1Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session1Teacher']->surname, 0, 1) . '. / ';
            $session_1 .= $model['session1Room']->name . ' (' . $model['session1Room']->type . ')<br>';

            $session_2 = '2 / ';
            $session_2 .= $model['session2Discipline']->name . ' / ';
            $session_2 .= $model['session2Teacher']->name . ' ' . mb_strimwidth($model['session2Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session2Teacher']->surname, 0, 1) . '. / ';
            $session_2 .= $model['session2Room']->name . ' (' . $model['session2Room']->type . ')<br>';

            $session_3 = '3 / ';
            $session_3 .= $model['session3Discipline']->name . ' / ';
            $session_3 .= $model['session3Teacher']->name . ' ' . mb_strimwidth($model['session3Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session3Teacher']->surname, 0, 1) . '. / ';
            $session_3 .= $model['session3Room']->name . ' (' . $model['session3Room']->type . ')<br>';

            $session_4 = '4 / ';
            $session_4 .= $model['session4Discipline']->name . ' / ';
            $session_4 .= $model['session4Teacher']->name . ' ' . mb_strimwidth($model['session4Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session4Teacher']->surname, 0, 1) . '. / ';
            $session_4 .= $model['session4Room']->name . ' (' . $model['session4Room']->type . ')<br>';

            $session_5 = '5 / ';
            $session_5 .= $model['session5Discipline']->name . ' / ';
            $session_5 .= $model['session5Teacher']->name . ' ' . mb_strimwidth($model['session5Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session5Teacher']->surname, 0, 1) . '. / ';
            $session_5 .= $model['session5Room']->name . ' (' . $model['session5Room']->type . ')<br>';

            $session_6 = '6 / ';
            $session_6 .= $model['session6Discipline']->name . ' / ';
            $session_6 .= $model['session6Teacher']->name . ' ' . mb_strimwidth($model['session6Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session6Teacher']->surname, 0, 1) . '. / ';
            $session_6 .= $model['session6Room']->name . ' (' . $model['session6Room']->type . ')<br>';

            $return = $session_1;
            $return .= $session_2;
            $return .= $session_3;
            $return .= $session_4;
            $return .= $session_5;
            $return .= $session_6;

            return $return;
        },],],]); ?>


    <!--    --><?php //Pjax::end(); ?>
</div>
