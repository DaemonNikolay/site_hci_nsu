<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Schedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'for_the_day',
            'for_the_group',
            'session_1_discipline',
            'session_1_teacher',
            //'session_2_discipline',
            //'session_2_teacher',
            //'session_3_discipline',
            //'session_3_teacher',
            //'session_4_discipline',
            //'session_4_teacher',
            //'session_5_discipline',
            //'session_5_teacher',
            //'session_6_discipline',
            //'session_6_teacher',
            //'name_room',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
