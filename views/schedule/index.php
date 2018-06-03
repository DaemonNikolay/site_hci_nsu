<?php

use yii\helpers\Html;
use yii\bootstrap\Tabs;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use app\models\Groups;
use app\models\Disciplines;
use app\models\Rooms;
use app\models\Teachers;

/* @var $groups app\controllers\ScheduleController */
/* @var $schedule app\controllers\ScheduleController */
/* @var $searchModel app\models\ScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Расписание';
$this->params['breadcrumbs'][] = $this->title;

$date = new DateTime();


?>
    <h1><?= Html::encode($this->title) ?></h1>
    <code><?= 'Сегодня: ' . $date->format('d-m-Y') . ', ' . translateDayToRus($date->format('w')) . ', ' . whatWeek($date->format('W')); ?></code>
    <!--    <code>--><? //= 'Сегодня: ' . $date->format('d-m-Y') . ', ' . $date->format('w') . ', ' . whatWeek($date->format('W')); ?><!--</code>-->
<?php

$filter_schedule = array(['label' => 'Расписание',
                          'content' => '<h2>Догадываешься ли, что ждёт тебя?</h2>',
                          'active' => true]);

$study_time = array('09:00 - 10:35',
                    '10:45 - 12:20',
                    '12:45 - 14:20',
                    '14:30 - 16:05',
                    '16:15 - 17:50',
                    '18:00 - 19:35');
$tables = array();

foreach ($schedule as $element) {
    $table = "<table class=\"table table-hover\">";
    $table .= "<caption>" . $element['day_of_week'] . " (" . mb_strtolower($element['status_week']) . ") <code> изменялось: " . date('d-m-Y', strtotime($element['updated_at'])) . "</code></caption>";
    $table .= "<thead>";
    $table .= "<tr class='bg-primary'>";
    $table .= "<th>#</th>";
    $table .= "<th>Дисциплина</th>";
    $table .= "<th>Аудитория</th>";
    $table .= "<th>Преподаватель</th>";
    $table .= "<th>Время</th>";
    $table .= "</tr>";
    $table .= "</thead>";
    $table .= "<tbody>";

    for ($i = 1; $i <= 6; $i++) {
        $table .= "<tr>";
        $table .= "<th scope=\"row\">" . $i . "</th>";
        $table .= "<td>" . Disciplines::find()
                                      ->select('name')
                                      ->where(['id' => $element['session_' . $i . '_discipline']])
                                      ->one()->name . "</td>";
        $table .= "<td>" . Rooms::find()
                                ->select('name')
                                ->where(['id' => $element['session_' . $i . '_room']])
                                ->one()->name . "</td>" . "</td>";
        $table .= "<td>" . Teachers::find()
                                   ->select('name')
                                   ->where(['id' => $element['session_' . $i . '_teacher']])
                                   ->one()->name . "</td>" . "</td>";
        $table .= "<td>" . $study_time[$i - 1] . "</td>";
        $table .= "</tr>";
    }

    $table .= "<tbody>";
    $table .= "</table>";

    $number_group = Groups::find()->select('name')->where(['id' => $element['training_group']])->one()->name;

    $tables[$number_group][] = $table;
}


foreach ($tables as $key => $value) {

    $tables_to_string = "";
    foreach ($value as $element) {
        $tables_to_string .= $element;
    }

    $temp = ['label' => $key,
             'content' => $tables_to_string];

    array_push($filter_schedule, $temp);
}

?>

<?= Tabs::widget(['items' => $filter_schedule]); ?>

<?php $this->registerCssFile('/web/css/schedule-guest.css', ['depends' => [AppAsset::className()]]) ?>

<?php

function notFound()
{
    return 'Отсутствует';
}

function translateDayToRus($i)
{
    $days = array('Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота');

    return $days[$i];
}

function whatWeek($number_week)
{
    if ($number_week % 2 == 0) {
        return 'Чётная неделя';
    }

    return 'Нечётная неделя';
}

?>