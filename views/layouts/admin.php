<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use mdm\admin\components\Helper;
use pceuropa\menu\Menu;

AppAsset::register($this);
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
        ['label' => 'Админская', 'url' => ['/admin/default/index']],
        ['label' => 'Главная', 'url' => ['/site/index/']],
        ['label' => 'Контент', 'url' => ['#'], 'items'=>[
            ['label' => 'Посты', 'url' => ['/admin/articles']],
            ['label' => 'Категории', 'url' => ['/admin/category']],
        ]],
        ['label' => 'Диспетчерская', 'url' => ['#'], 'items'=>[
            ['label' => 'Расписание', 'url' => ['/admin/schedule']],
            ['label' => 'Преподаватели', 'url' => ['/admin/teachers']],
            ['label' => 'Дисциплины', 'url' => ['/admin/disciplines']],
            ['label' => 'Аудитории', 'url' => ['/admin/rooms']],
            ['label' => 'Группы', 'url' => ['/admin/groups']],
        ]],
        ['label' => 'Роли', 'url' => ['/rbac/default/index']],

        Yii::$app->user->id == 1 ? (['label' => 'Регистрация', 'url' => ['/site/signup']]) : (''),

        ['label' => 'Выйти (' . \Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'],
         'linkOptions' => ['data-method' => 'post']],];

    NavBar::begin(['brandLabel' => Yii::$app->name, 'brandUrl' => Yii::$app->homeUrl,
                   'options' => ['class' => 'navbar-inverse navbar-fixed-top',],]);

    echo Nav::widget(['options' => ['class' => 'navbar-nav navbar-right'], 'items' => Helper::filter($menuItems),]);
    NavBar::end();


    ?>

    <div class="container">
        <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; ВКИ НГУ (студенческая версия) <?= date('Y') ?></p>
        <p class="pull-right"><?= Html::a("Разработано Nikulux", "http://nikulux.ru", ['target' => '_blank',
                                                                                        'class' => 'developed']); ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
