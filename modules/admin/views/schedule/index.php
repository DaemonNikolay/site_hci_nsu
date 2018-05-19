<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\jui\DatePicker;

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

    <!--    --><? //= GridView::widget(['dataProvider' => $dataProvider, 'filterModel' => $searchModel,
    //                          'columns' => [['class' => 'yii\grid\SerialColumn'],
    //
    //                                        'id', 'for_the_day',
    //
    //                                        ['attribute' => 'for_the_group', 'label' => 'Группы',
    //                                         'value' => 'forTheGroup.name',],
    //
    //                                        //            'for_the_group',
    //
    //
    //
    //                                        'session_1_discipline',
    //                                        'session_1_teacher',
    //                                        'session_1_room',
    ////                                        'session_2_discipline',
    ////                                        'session_2_teacher',
    ////                                        'session_2_room',
    ////                                        'session_3_discipline',
    ////                                        'session_3_teacher',
    ////                                        'session_3_room',
    ////                                        'session_4_discipline',
    ////                                        'session_4_teacher',
    ////                                        'session_4_room',
    ////                                        'session_5_discipline',
    ////                                        'session_5_teacher',
    ////                                        'session_5_room',
    ////                                        'session_6_discipline',
    ////                                        'session_6_teacher',
    ////                                        'session_6_room',
    ////                                        'updated_at',
    //
    //                                        ['class' => 'yii\grid\ActionColumn'],],]); ?>

    <?= GridView::widget(['dataProvider' => $dataProvider, 'filterModel' => $searchModel, 'columns' => [

        ['attribute' => 'for_the_day',
         'filter' => DatePicker::widget(['model' => $searchModel, 'value' => $searchModel->for_the_day,
                                         'attribute' => 'for_the_day', 'options' => ['class' => 'form-control'],
                                         'language' => 'ru', 'dateFormat' => 'yyyy-MM-dd',]),],

        //        ['attribute' => 'for_the_day', 'label' => 'День', 'value' => 'for_the_day'],
        ['attribute' => 'for_the_group', 'label' => 'Группы', 'value' => 'forTheGroup.name',],

        [//'header' => 'title', // тут нада как то сказать что отображаем в хедере title & name и позволить сортировку по ним
         'label' => '№ пары / Дисциплина / преподаватель / аудитория / время',
         // так показывает label и сортировку только по name, если не указать, то хедер пустой
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
