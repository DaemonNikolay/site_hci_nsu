<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'for_the_day')->textInput() ?>

    <?= $form->field($model, 'for_the_group')->textInput() ?>

    <?= $form->field($model, 'session_1_discipline')->textInput() ?>

    <?= $form->field($model, 'session_1_teacher')->textInput() ?>

    <?= $form->field($model, 'session_1_room')->textInput() ?>

    <?= $form->field($model, 'session_2_discipline')->textInput() ?>

    <?= $form->field($model, 'session_2_teacher')->textInput() ?>

    <?= $form->field($model, 'session_2_room')->textInput() ?>

    <?= $form->field($model, 'session_3_discipline')->textInput() ?>

    <?= $form->field($model, 'session_3_teacher')->textInput() ?>

    <?= $form->field($model, 'session_3_room')->textInput() ?>

    <?= $form->field($model, 'session_4_discipline')->textInput() ?>

    <?= $form->field($model, 'session_4_teacher')->textInput() ?>

    <?= $form->field($model, 'session_4_room')->textInput() ?>

    <?= $form->field($model, 'session_5_discipline')->textInput() ?>

    <?= $form->field($model, 'session_5_teacher')->textInput() ?>

    <?= $form->field($model, 'session_5_room')->textInput() ?>

    <?= $form->field($model, 'session_6_discipline')->textInput() ?>

    <?= $form->field($model, 'session_6_teacher')->textInput() ?>

    <?= $form->field($model, 'session_6_room')->textInput() ?>

    <?= $form->field($model, 'updated_ad')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
