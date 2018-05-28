<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\redactor\widgets\Redactor;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <!--    --><? //= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= Redactor::widget(['model' => $model,
                             'attribute' => 'content',
                             'clientOptions' => ['imageManagerJson' => ['/web/content/images/'],
                                 'imageUpload' => ['/web/content/images/'],
                                 'fileUpload' => ['/web/content/files'],
                                 'lang' => 'ru',
                                 'plugins' => ['clips', 'fontcolor', 'imagemanager']
                             ]
                         ]) ?>

    <?= $form->field($model, 'category')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
