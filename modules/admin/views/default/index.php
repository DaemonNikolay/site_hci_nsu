<?php

use yii\widgets\Menu;
use yii\helpers\Url;

$this->title = 'Админская';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="admin-default-index">
    <h1><?= $this->title ?></h1>

    <?= Menu::widget(['items' => [['label' => 'Преподаватели', 'url' => ['#'], 'options' => ['href' => Url::to(['#'])]],
                                  ['label' => 'Группы', 'url' => ['#'], 'options' => ['href' => Url::to(['#'])]],
                                  ['label' => 'Дисциплины', 'url' => ['#'], 'options' => ['href' => Url::to(['#'])]],
                                  ['label' => 'Аудитории', 'url' => ['#'], 'options' => ['href' => Url::to(['#'])],]

    ], 'options' => ['tag' => 'div', 'class' => 'list-group'], // обертка вместо <ul>
                      'itemOptions' => ['tag' => 'a', 'class' => 'list-group-item'], 'linkTemplate' => '{label}']); ?>

</div>
