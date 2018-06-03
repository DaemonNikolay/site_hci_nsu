<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\Menu;
use app\assets\AppAsset;
use yii\bootstrap\Modal;
use yii\bootstrap\Nav;
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


<?= Menu::widget(['items' => [['label' => '+ преподавателя', 'url' => ['#'],
    'options' => ['href' => Url::to(['/admin/teachers/create']), 'target' => '_blank'],],
    ['label' => '+ группу', 'url' => ['#'],
        'options' => ['href' => Url::to(['/admin/groups/create']), 'target' => '_blank']],
    ['label' => '+ аудиторию', 'url' => ['#'],
        'options' => ['href' => Url::to(['/admin/rooms/create']), 'target' => '_blank']],
    ['label' => '+ дисциплину', 'url' => ['#'],
        'options' => ['href' => Url::to(['/admin/disciplines/create']), 'target' => '_blank']]

], 'options' => ['tag' => 'div', 'class' => 'list-group'],
                     'itemOptions' => ['tag' => 'a', 'class' => 'list-group-item'], 'linkTemplate' => '{label}']); ?>

<div class="schedule-form">


<!--    --><?php //$model->id = Yii::$app->user->id; ?>
    <?php $options = ['class' => 'general-schedule']; ?>

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'training_group')->textInput() ?>
    <?= $form->field($model, 'training_group')
             ->dropDownList(ArrayHelper::map($groups, 'id', 'name'), ['class' => 'form-control group-schedule'])
             ->label('Группа'); ?>

    <?= $form->field($model, 'day_of_week')->dropDownList([ 'Понедельник' => 'Понедельник', 'Вторник' => 'Вторник', 'Среда' => 'Среда', 'Четверг' => 'Четверг', 'Пятница' => 'Пятница', 'Суббота' => 'Суббота', ], ['class' => 'form-control group-schedule']) ?>

    <?= $form->field($model, 'status_week')->dropDownList([ 'Чётная' => 'Чётная', 'Нечётная' => 'Нечётная', ], ['class' => 'form-control group-schedule']) ?>


    <?= $form->field($model, 'session_1_discipline', ['options' => $options])
             ->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'))
             ->label('1-ая пара: дисциплина', ['class' => 'items-schedule discipline-schedule']); ?>
<!---->
    <?= $form->field($model, 'session_1_teacher', ['options' => $options])
             ->dropDownList(ArrayHelper::map($teachers, 'id', 'name'))
             ->label('1-ая пара: преподаватель', ['class' => 'items-schedule teacher-schedule']); ?>

    <?= $form->field($model, 'session_1_room', ['options' => $options])
             ->dropDownList(ArrayHelper::map($rooms, 'id', 'name'))
             ->label('1-ая пара: аудитория', ['class' => 'items-schedule room-schedule']) ?>

    <?= $form->field($model, 'session_2_discipline', ['options' => $options])
             ->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'))
             ->label('2-ая пара: дисциплина', ['class' => 'items-schedule discipline-schedule']) ?>

    <?= $form->field($model, 'session_2_teacher', ['options' => $options])
             ->dropDownList(ArrayHelper::map($teachers, 'id', 'name'))
             ->label('2-ая пара: преподаватель', ['class' => 'items-schedule teacher-schedule']) ?>

    <?= $form->field($model, 'session_2_room', ['options' => $options])
             ->dropDownList(ArrayHelper::map($rooms, 'id', 'name'))
             ->label('2-ая пара: аудитория', ['class' => 'items-schedule room-schedule']) ?>

    <?= $form->field($model, 'session_3_discipline', ['options' => $options])
             ->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'))
             ->label('3-ая пара: дисциплина', ['class' => 'items-schedule discipline-schedule']) ?>

    <?= $form->field($model, 'session_3_teacher', ['options' => $options])
             ->dropDownList(ArrayHelper::map($teachers, 'id', 'name'))
             ->label('3-ая пара: преподаватель', ['class' => 'items-schedule teacher-schedule']) ?>

    <?= $form->field($model, 'session_3_room', ['options' => $options])
             ->dropDownList(ArrayHelper::map($rooms, 'id', 'name'))
             ->label('3-ая пара: аудитория', ['class' => 'items-schedule room-schedule']) ?>

    <?= $form->field($model, 'session_4_discipline', ['options' => $options])
             ->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'))
             ->label('4-ая пара: дисциплина', ['class' => 'items-schedule discipline-schedule']) ?>

    <?= $form->field($model, 'session_4_teacher', ['options' => $options])
             ->dropDownList(ArrayHelper::map($teachers, 'id', 'name'))
             ->label('4-ая пара: преподаватель', ['class' => 'items-schedule teacher-schedule']) ?>

    <?= $form->field($model, 'session_4_room', ['options' => $options])
             ->dropDownList(ArrayHelper::map($rooms, 'id', 'name'))
             ->label('4-ая пара: аудитория', ['class' => 'items-schedule room-schedule']) ?>

    <?= $form->field($model, 'session_5_discipline', ['options' => $options])
             ->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'))
             ->label('5-ая пара: дисциплина', ['class' => 'items-schedule discipline-schedule']) ?>

    <?= $form->field($model, 'session_5_teacher', ['options' => $options])
             ->dropDownList(ArrayHelper::map($teachers, 'id', 'name'))
             ->label('5-ая пара: преподаватель', ['class' => 'items-schedule teacher-schedule']) ?>

    <?= $form->field($model, 'session_5_room', ['options' => $options])
             ->dropDownList(ArrayHelper::map($rooms, 'id', 'name'))
             ->label('5-ая пара: аудитория', ['class' => 'items-schedule room-schedule']) ?>

    <?= $form->field($model, 'session_6_discipline', ['options' => $options])
             ->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'))
             ->label('6-ая пара: дисциплина', ['class' => 'items-schedule discipline-schedule']) ?>

    <?= $form->field($model, 'session_6_teacher', ['options' => $options])
             ->dropDownList(ArrayHelper::map($teachers, 'id', 'name'))
             ->label('6-ая пара: преподаватель', ['class' => 'items-schedule teacher-schedule']) ?>

    <?= $form->field($model, 'session_6_room', ['options' => $options])
             ->dropDownList(ArrayHelper::map($rooms, 'id', 'name'))
             ->label('6-ая пара: аудитория', ['class' => 'items-schedule room-schedule']) ?>




<!--    --><?//= $form->field($model, 'session_1_discipline')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_1_teacher')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_1_room')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_2_discipline')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_2_teacher')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_2_room')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_3_discipline')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_3_teacher')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_3_room')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_4_discipline')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_4_teacher')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_4_room')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_5_discipline')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_5_teacher')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_5_room')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_6_discipline')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_6_teacher')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'session_6_room')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?php $this->registerCssFile('/web/css/schedule-create.css', ['depends' => [AppAsset::className()]]) ?>

</div>
