<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'for_the_day',
            'for_the_group',
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
            'updated_ad',
        ],
    ]) ?>

</div>
