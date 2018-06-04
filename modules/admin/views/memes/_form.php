<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Memes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="memes-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'url')->fileInput() ?>
<!--    <button>Загрузить</button>-->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
