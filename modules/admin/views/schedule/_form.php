<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\widgets\Menu;
use app\assets\AppAsset;
use yii\bootstrap\Modal;
use yii\bootstrap\Nav;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */
/* @var $groups app\models\Schedule */
/* @var $teachers app\models\Schedule */
/* @var $rooms app\models\Schedule */
/* @var $disciplines app\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">-->
<!--    Модальное окно-->
<!--</button>-->
<!---->
<?php
//$header = '<h4 class="modal-title" id="myModalLabel">Модальное окно</h4>';
//$footer = '<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
//<button type="button" class="btn btn-primary">Сохранитfdь</button>';
//
//$modal = Modal::begin(['id' => 'myModal', 'header' => $header, 'footer' => $footer]); ?>
<!---->
<!--<p>Здесь содержимое модального окна</p>-->
<!---->
<?php //$modal::end(); ?>



<?php
//
//echo Nav::widget([
//                     'items' => [
//                         [
//                             'label' => 'Home',
//                             'url' => ['site/index'],
//                         ],
//                         [
//                             'label' => 'Dropdown',
//                             'items' => [
//                                 ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
//                                 '<li class="divider"></li>',
//                                 '<li class="dropdown-header">Dropdown Header</li>',
//                                 ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
//                             ],
//                         ],
//                         [
//                             'label' => 'Login',
//                             'url' => ['site/login'],
//                             'visible' => Yii::$app->user->isGuest
//                         ],
//                     ],
//                     'options' => ['class' =>'nav-pills'], // set this to nav-tab to get tab-styled navigation
//                 ]);
//
//?>




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

    <?php $model->id = Yii::$app->user->id; ?>
    <?php $options = ['class' => 'general-schedule']; ?>

    <?php Pjax::begin() ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'for_the_day', ['options' => ['class' => 'day-schedule']])
             ->widget(DatePicker::classname(), ['options' => ['class' => 'form-control'], 'language' => 'ru',
                                                'dateFormat' => 'dd.MM.yyyy',])->label('День занятий') ?>

    <?= $form->field($model, 'for_the_group')
             ->dropDownList(ArrayHelper::map($groups, 'id', 'name'), ['class' => 'form-control group-schedule'])
             ->label('Группа'); ?>

    <?= $form->field($model, 'session_1_discipline', ['options' => $options])
             ->dropDownList(ArrayHelper::map($disciplines, 'id', 'name'))
             ->label('1-ая пара: дисциплина', ['class' => 'items-schedule discipline-schedule']); ?>

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

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?php Pjax::end() ?>

    <?php $this->registerCssFile('/web/css/schedule.css', ['depends' => [AppAsset::className()]]) ?>
</div>
