<?php

use yii\helpers\Html;
use yii\bootstrap\Tabs;
use app\assets\AppAsset;

/* @var $groups app\controllers\ScheduleController */
/* @var $model app\controllers\ScheduleController */

$this->title = 'Расписание';;
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?= Html::encode($this->title) ?></h1>
<kbd><?= Html::encode('{сегодня: ' . date("d.m.Y") . '}') ?></kbd>


<?php

$items = array();
foreach ($groups as $group) {
    $temp = array('label' => $group->name, 'content' => 'test ' . $group->name);
    $items[] = $temp;
}


echo Tabs::widget(['items' => $items, 'options' => ['class' => 'schedule-for-guest']]);

//echo Tabs::widget([
//                      'items' => [
//                          [
//                              'label' => 'Заголовок вкладки 1',
//                              'content' => 'Вкладка 1',
//                              'active' => true // указывает на активность вкладки
//                          ],
//                          [
//                              'label' => 'Заголовок вкладки 2',
//                              'content' => 'Вкладка 2'
//                          ],
//                          [
//                              'label' => 'Заголовок вкладки 3',
//                              'content' => 'Вкладка 3',
//                              'headerOptions' => [
//                                  'id' => 'someId'
//                              ]
//                          ],
//                          [
//                              'label' => 'Таб с указанием URL',
//                              'url' => 'http://www.somesite.com',
//                          ],
//                          [
//                              'label' => 'Dropdown',
//                              'items' => [
//                                  [
//                                      'label' => '1',
//                                      'content' => 'Выпадашка 1'
//                                  ],
//                                  [
//                                      'label' => '2',
//                                      'content' => 'Выпадашка 2'
//                                  ],
//                                  [
//                                      'label' => '3',
//                                      'content' => 'Выпадашка 3'
//                                  ],
//                              ]
//                          ]
//                      ]
//                  ]);
?>

<?php $this->registerCssFile('/web/css/schedule-guest.css', ['depends' => [AppAsset::className()]]) ?>

