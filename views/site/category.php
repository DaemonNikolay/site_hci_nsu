<?php

/* @var $articles app\models\Articles */
/* @var $this yii\web\View */

/* @var $categories app\models\Category */

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Articles;
use app\models\Category;

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--main content start-->

<h1><?= Html::encode($this->title) ?></h1>
<div class="container">

    <?php foreach ($articles as $article): ?>
        <div class="post-content inox_shining_blue">
            <h2>
                <a href="<?= Url::toRoute(['site/view',
                                           'id' => $article->id]); ?>"><?= $article->title ?>
                </a>
            </h2>
            <h4 class="entry-description"><a href="<?= Url::toRoute(['site/view',
                                                                     'id' => $article->id]); ?>"><?= $article->description ?></a>
            </h4>
        </div>
    <?php endforeach; ?>
</div>

<!-- end main content-->