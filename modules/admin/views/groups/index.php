<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Группы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить группу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget(['dataProvider' => $dataProvider, 'filterModel' => $searchModel,
                          'columns' => [['class' => 'yii\grid\SerialColumn'],

                                        ['attribute' => 'name', 'label' => 'Группы', 'value' => 'name',],
                                        ['attribute' => 'updated_at', 'label' => 'Последнее изменение было...',
                                         'value' => 'updated_at',],

                                        ['class' => 'yii\grid\ActionColumn'],],]); ?>
</div>
