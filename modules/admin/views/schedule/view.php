<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */

$this->title = $model->training_group;
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'training_group' => $model->training_group, 'day_of_week' => $model->day_of_week, 'status_week' => $model->status_week], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'training_group' => $model->training_group, 'day_of_week' => $model->day_of_week, 'status_week' => $model->status_week], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'training_group',
            'day_of_week',
            'status_week',
            'session_1_discipline',
            'session_1_teacher',
            'session_1_room',
            'session_2_discipline',
            'session_2_teacher',
            'session_2_room',
            'session_3_discipline',
            'session_3_teacher',
            'session_3_room',
            'session_4_discipline',
            'session_4_teacher',
            'session_4_room',
            'session_5_discipline',
            'session_5_teacher',
            'session_5_room',
            'session_6_discipline',
            'session_6_teacher',
            'session_6_room',
            'updated_at',
        ],
    ]) ?>

</div>
