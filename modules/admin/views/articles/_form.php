<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\redactor\widgets\Redactor;
use yii\helpers\ArrayHelper;
use app\models\Category;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */
/* @var $category app\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->dropDownList(ArrayHelper::map($category, 'id', 'title')); ?>

    <?= Redactor::widget(['model' => $model,
                          'attribute' => 'content',
                          'clientOptions' => ['imageManagerJson' => ['/web/content/images/'],
                                              'imageUpload' => ['/web/content/images/'],
                                              'fileUpload' => ['/web/content/files'],
                                              'lang' => 'ru',
                                              'plugins' => ['clips', 'fontcolor', 'imagemanager']]]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
