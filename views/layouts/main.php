<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\MainAsset;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/web/images/favicon.ico" type="image/png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php

    $menuItems = [

        Yii::$app->user->isGuest ? ('') : (['label' => 'Админская', 'url' => ['/admin/default/index']]),

        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Расписание', 'url' => ['/schedule/index']],

        Yii::$app->user->isGuest ? (['label' => 'Войти',
            'url' => ['/site/login']
        ]) : ('<li>' . Html::beginForm(['/site/logout'], 'post') . Html::submitButton('Выйти (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']) . Html::endForm() . '</li>')
    ];

    NavBar::begin(['brandLabel' => Yii::$app->name,
                      'brandUrl' => Yii::$app->homeUrl,
                      'options' => ['class' => 'navbar-inverse navbar-fixed-top',
                      ],
                  ]);

    echo Nav::widget(['options' => ['class' => 'navbar-nav navbar-right'],
                         'items' => $menuItems,
                     ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

    </div>
</div>


<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="/web/assets_main/images/home/under2.png" class="img-responsive inline" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="testimonial bottom">
                    <h2>Лучший текст</h2>
                    <div class="media">
                        <div class="media-body">
                            <h3>У нас учится хорошо!</h3>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h3>У нас учится просто класс!</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="contact-info bottom">
                    <h2>Контакты</h2>
                    <address>
                        E-mail: <a href="mailto:someone@example.com">examle@hci.nsu.ru</a> <br>
                        Phone: +7 (888) 888-88-88 <br>
                    </address>

                    <h2>Адрес</h2>
                    <address>
                        Новосибирск<br>
                        Академгородок<br>
                        Русская, 35<br>
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="contact-form bottom">
                    <h2>Связаться с нами</h2>
                    <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required"
                                   placeholder="Email Id">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"
                                      placeholder="Your text here"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; ВКИ НГУ (студенческая версия) <?= date('Y') ?></p>
                    <p><?= Html::a("Разработано студией Nikulux", "http://nikulux.ru", ['target' => '_blank',
                            'class' => 'developed'
                        ]); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
