<?php

/* @var $articles app\models\Articles */
/* @var $this yii\web\View */

/* @var $categories app\models\Category */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Пуликации';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--main content start-->
<!--<div class="main-content">-->
<h1><?= Html::encode($this->title) ?></h1>
<div class="container">
    <?php foreach ($categories as $category): ?>
        <a href="<?= Url::toRoute(['site/category',
                                   'id' => $category->id]); ?>">
            <div class="post-content inox_shining_blue">
                <h2><?= $category->title ?></h2>
            </div>
        </a>
    <?php endforeach; ?>
</div>

<!-- end main content-->