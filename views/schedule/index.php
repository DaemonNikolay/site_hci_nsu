<?php

use yii\helpers\Html;


$this->title = 'Расписание';;
$this->params['breadcrumbs'][] = $this->title;

?>
    <h1><?= Html::encode($this->title) ?></h1>
    <tt><?= Html::encode('{сегодня: ' . date("d.m.Y") . '}') ?></tt>

<?php if (count($model)): ?>
    <?php foreach ($model as $item): ?>
        <div class="well">
            <!--            <pre>-->
            <!--            --><?php //var_dump($item) ?>
            <!--            </pre>-->
            <h3><?= $item->for_the_group ?></h3>
        </div>
    <?php endforeach ?>
<?php else: ?>
    <h2>Расписание отсутствует!</h2>
<?php endif; ?>