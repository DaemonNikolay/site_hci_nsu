<?php

use yii\helpers\Html;
use yii\bootstrap\Tabs;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use app\models\Groups;

/* @var $groups app\controllers\ScheduleController */
/* @var $model app\controllers\ScheduleController */
/* @var $searchModel app\models\ScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Расписание';
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?= Html::encode($this->title) ?></h1>
<?php

//echo '<pre>';
//foreach ($model as $item){
//    var_dump( $item->for_the_group);
////    $groups->id = $item->for_the_group;
//
//}
//echo '</pre>';




//echo DatePicker::widget(['options' => ['class' => 'form-control'], 'language' => 'ru', 'dateFormat' => 'dd-MM-yyyy',
//                         'value' => date("d.m.Y")]);



//$items = array();
//foreach ($groups as $group) {
//    $temp = array('label' => $group->name, 'content' => 'test ' . $group->name);
//    $items[] = $temp;
//}
//
//echo Tabs::widget(['items' => $items, 'options' => ['class' => 'schedule-for-guest']]);
//
//echo '<br /><br /><br /><br />';
//foreach ($model as $items) {
//    echo $items->for_the_day;
//}


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


<?= GridView::widget(['dataProvider' => $dataProvider, 'filterModel' => $searchModel, 'columns' => [


    ['attribute' => 'for_the_day', 'label' => 'День',
     'filter' => DatePicker::widget(['model' => $searchModel, 'value' => $searchModel->for_the_day,
                                     'attribute' => 'for_the_day', 'options' => ['class' => 'form-control'],
                                     'language' => 'ru', 'dateFormat' => 'yyyy-MM-dd',]),
     'format' => ['date', 'l yyyy-MM-dd'], 'options' => ['width' => '170']],


    ['attribute' => 'for_the_group', 'label' => 'Группа',
     'filter' => ArrayHelper::map(Groups::find()->all(), 'id', 'name'),
     'filterInputOptions' => ['class' => 'form-control form-control-sm'], 'value' => 'forTheGroup.name',
     'options' => ['width' => '130']],

    ['label' => '№ пары / Дисциплина / преподаватель / аудитория / время',
     'format' => 'raw', 'value' => function ($model)
    {
        $session_1 = '1 / ';
        $session_1 .= $model['session1Discipline']->name . ' / ';
        $session_1 .= $model['session1Teacher']->name . ' ' . mb_strimwidth($model['session1Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session1Teacher']->surname, 0, 1) . '. / ';
        $session_1 .= $model['session1Room']->name . ' (' . $model['session1Room']->type . ')<br>';

        $session_2 = '2 / ';
        $session_2 .= $model['session2Discipline']->name . ' / ';
        $session_2 .= $model['session2Teacher']->name . ' ' . mb_strimwidth($model['session2Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session2Teacher']->surname, 0, 1) . '. / ';
        $session_2 .= $model['session2Room']->name . ' (' . $model['session2Room']->type . ')<br>';

        $session_3 = '3 / ';
        $session_3 .= $model['session3Discipline']->name . ' / ';
        $session_3 .= $model['session3Teacher']->name . ' ' . mb_strimwidth($model['session3Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session3Teacher']->surname, 0, 1) . '. / ';
        $session_3 .= $model['session3Room']->name . ' (' . $model['session3Room']->type . ')<br>';

        $session_4 = '4 / ';
        $session_4 .= $model['session4Discipline']->name . ' / ';
        $session_4 .= $model['session4Teacher']->name . ' ' . mb_strimwidth($model['session4Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session4Teacher']->surname, 0, 1) . '. / ';
        $session_4 .= $model['session4Room']->name . ' (' . $model['session4Room']->type . ')<br>';

        $session_5 = '5 / ';
        $session_5 .= $model['session5Discipline']->name . ' / ';
        $session_5 .= $model['session5Teacher']->name . ' ' . mb_strimwidth($model['session5Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session5Teacher']->surname, 0, 1) . '. / ';
        $session_5 .= $model['session5Room']->name . ' (' . $model['session5Room']->type . ')<br>';

        $session_6 = '6 / ';
        $session_6 .= $model['session6Discipline']->name . ' / ';
        $session_6 .= $model['session6Teacher']->name . ' ' . mb_strimwidth($model['session6Teacher']->patronymic, 0, 1) . '. ' . mb_strimwidth($model['session6Teacher']->surname, 0, 1) . '. / ';
        $session_6 .= $model['session6Room']->name . ' (' . $model['session6Room']->type . ')<br>';

        $return = $session_1;
        $return .= $session_2;
        $return .= $session_3;
        $return .= $session_4;
        $return .= $session_5;
        $return .= $session_6;

        return $return;
    },],],]); ?>

<?php $this->registerCssFile('/web/css/schedule-guest.css', ['depends' => [AppAsset::className()]]) ?>

