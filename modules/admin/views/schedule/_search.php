<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScheduleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'training_group') ?>

    <?= $form->field($model, 'day_of_week') ?>

    <?= $form->field($model, 'status_week') ?>

    <?= $form->field($model, 'session_1_discipline') ?>

    <?= $form->field($model, 'session_1_teacher') ?>

    <?php // echo $form->field($model, 'session_1_room') ?>

    <?php // echo $form->field($model, 'session_2_discipline') ?>

    <?php // echo $form->field($model, 'session_2_teacher') ?>

    <?php // echo $form->field($model, 'session_2_room') ?>

    <?php // echo $form->field($model, 'session_3_discipline') ?>

    <?php // echo $form->field($model, 'session_3_teacher') ?>

    <?php // echo $form->field($model, 'session_3_room') ?>

    <?php // echo $form->field($model, 'session_4_discipline') ?>

    <?php // echo $form->field($model, 'session_4_teacher') ?>

    <?php // echo $form->field($model, 'session_4_room') ?>

    <?php // echo $form->field($model, 'session_5_discipline') ?>

    <?php // echo $form->field($model, 'session_5_teacher') ?>

    <?php // echo $form->field($model, 'session_5_room') ?>

    <?php // echo $form->field($model, 'session_6_discipline') ?>

    <?php // echo $form->field($model, 'session_6_teacher') ?>

    <?php // echo $form->field($model, 'session_6_room') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
