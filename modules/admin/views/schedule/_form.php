<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */
/* @var $groups app\models\Schedule */
/* @var $teachers app\models\Schedule */
/* @var $rooms app\models\Schedule */
/* @var $disciplines app\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">


    <?php $model->id = Yii::$app->user->id; ?>
    <?php $options = ['class' => 'form-control myattr'];?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'for_the_day')->widget(DatePicker::classname(), ['options' => ['class' => 'form-control',],
                                                                              'language' => 'ru',
                                                                              'dateFormat' => 'dd.MM.yyyy',]) ?>

    <?= $form->field($model, 'for_the_group')->dropDownList(ArrayHelper::map($groups, 'id', 'name'), $options)
             ->label('Группа'); ?>


    <?= $form->field($model, 'session_1_discipline')->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'), $options)
             ->label('1-ая пара: дисциплина'); ?>

    <?= $form->field($model, 'session_1_teacher')->dropDownList(ArrayHelper::map($teachers, 'id', 'name'), $options)
             ->label('1-ая пара: преподаватель'); ?>

    <?= $form->field($model, 'session_1_room')->dropDownList(ArrayHelper::map($rooms, 'id', 'name'), $options)
             ->label('1-ая пара: аудитория') ?>

    <?= $form->field($model, 'session_2_discipline')->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'), $options)
             ->label('2-ая пара: дисциплина') ?>

    <?= $form->field($model, 'session_2_teacher')->dropDownList(ArrayHelper::map($teachers, 'id', 'name'), $options)
             ->label('2-ая пара: преподаватель') ?>

    <?= $form->field($model, 'session_2_room')->dropDownList(ArrayHelper::map($rooms, 'id', 'name'), $options)
             ->label('2-ая пара: аудитория') ?>

    <?= $form->field($model, 'session_3_discipline')->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'), $options)
             ->label('3-ая пара: дисциплина') ?>

    <?= $form->field($model, 'session_3_teacher')->dropDownList(ArrayHelper::map($teachers, 'id', 'name'), $options)
             ->label('3-ая пара: преподаватель') ?>

    <?= $form->field($model, 'session_3_room')->dropDownList(ArrayHelper::map($rooms, 'id', 'name'), $options)
             ->label('3-ая пара: аудитория') ?>

    <?= $form->field($model, 'session_4_discipline')->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'), $options)
             ->label('4-ая пара: дисциплина') ?>

    <?= $form->field($model, 'session_4_teacher')->dropDownList(ArrayHelper::map($teachers, 'id', 'name'), $options)
             ->label('4-ая пара: преподаватель') ?>

    <?= $form->field($model, 'session_4_room')->dropDownList(ArrayHelper::map($rooms, 'id', 'name'), $options)
             ->label('4-ая пара: аудитория') ?>

    <?= $form->field($model, 'session_5_discipline')->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'), $options)
             ->label('5-ая пара: дисциплина') ?>

    <?= $form->field($model, 'session_5_teacher')->dropDownList(ArrayHelper::map($teachers, 'id', 'name'), $options)
             ->label('5-ая пара: преподаватель') ?>

    <?= $form->field($model, 'session_5_room')->dropDownList(ArrayHelper::map($rooms, 'id', 'name'), $options)
             ->label('5-ая пара: аудитория') ?>

    <?= $form->field($model, 'session_6_discipline')->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'), $options)
             ->label('6-ая пара: дисциплина') ?>

    <?= $form->field($model, 'session_6_teacher')->dropDownList(ArrayHelper::map($teachers, 'id', 'name'), $options)
             ->label('6-ая пара: преподаватель') ?>

    <?= $form->field($model, 'session_6_room')->dropDownList(ArrayHelper::map($rooms, 'id', 'name'), $options)
             ->label('6-ая пара: аудитория') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
