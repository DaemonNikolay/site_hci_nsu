<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Memes */

$this->title = 'Create Memes';
$this->params['breadcrumbs'][] = ['label' => 'Memes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="memes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
