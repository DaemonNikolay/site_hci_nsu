<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Schedule */
/* @var $groups app\models\Schedule */
/* @var $teachers app\models\Schedule */
/* @var $rooms app\models\Schedule */
/* @var $disciplines app\models\Schedule */

$this->title = 'Create Schedule';
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', ['groups' => $groups, 'model' => $model, 'teachers' => $teachers, 'rooms' => $rooms,
                                'disciplines' => $disciplines]) ?>

</div>
