<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <section id="error-page">
        <div class="error-page-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <div class="bg-404">
                                <div class="error-image">
                                    <img class="img-responsive" src="/web/assets_main/images/404.png" alt="">
                                </div>
                            </div>
                            <h2>Страница не найдена</h2>
                            <p>Oooops...</p>
                            <a href="/" class="btn btn-error">Вернуться на главную</a>
                            <div class="social-link">
                                <span><a href="#"><i class="fa fa-vk"></i></a></span>
                                <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                                <span><a href="#"><i class="fa fa-youtube"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
