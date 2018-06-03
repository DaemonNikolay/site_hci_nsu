<?php

/* @var $article app\models\Articles */
/* @var $this yii\web\View */

/* @var $categories app\models\Category */

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Articles;
use app\models\Category;

$this->title = $article['title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--main content start-->

<h1><?= Html::encode($this->title) ?></h1>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <article class="post">
                <div class="post-content">
                    <div class="entry-content">
                        <?= $article->content ?>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

<!-- end main content-->