<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

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


        'for_the_day',

        ['attribute' => 'for_the_group', 'label' => 'Группы', 'value' => 'forTheGroup.name',],


        [//'header' => 'title', // тут нада как то сказать что отображаем в хедере title & name и позволить сортировку по ним
         'label' => '№ пары / Дисциплина / преподаватель / аудитория',
         // так показывает label и сортировку только по name, если не указать, то хедер пустой
         'format' => 'raw', 'value' => function ($model)
        {
            $return = '1 / ';
            $return .= $model['session1Discipline']->name . ' / ';

            $teacher = mb_strimwidth($model['session1Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session1Teacher']->surname, 0, 1) . '. ';
            $return .= $model['session1Teacher']->name . ' ' . $teacher . ' / ';

            if ($model['session1Room']->type == 'classic') {
                $room = $model['session1Room']->name . ' (стандартная)';
            } elseif ($model['session1Room']->type == 'computer') {
                $room = $model['session1Room']->name . ' (компьютерная)';
            } elseif ($model['session1Room']->type == 'lecture') {
                $room = $model['session1Room']->name . ' (лекционная)';
            } else {
                $room = $model['session1Room']->name;
            }
            $return .= $room . '<br>';
            
            return $return;
        },],


        //                                        'session_1_discipline',
        //                                        'session_1_teacher',
        //                                        'session_1_room',


    ],]); ?>


    <!--    --><?php //Pjax::end(); ?>
</div>
