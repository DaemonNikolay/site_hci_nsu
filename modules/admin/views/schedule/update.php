<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */
/* @var $groups app\models\Schedule */
/* @var $teachers app\models\Schedule */
/* @var $rooms app\models\Schedule */
/* @var $disciplines app\models\Schedule */

$this->title = 'Update Schedule: ' . $model->training_group;
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->training_group, 'url' => ['view', 'training_group' => $model->training_group, 'day_of_week' => $model->day_of_week, 'status_week' => $model->status_week]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="schedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', ['groups' => $groups,
        'model' => $model, 'teachers' => $teachers, 'rooms' => $rooms,
        'disciplines' => $disciplines]) ?>

</div>
