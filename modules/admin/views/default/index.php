<?php

use yii\widgets\Menu;
use yii\helpers\Url;

$this->title = 'Админская';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="admin-default-index">
    <h1><?= $this->title ?></h1>

    <div class="jumbotron">
        <img class="logo" src="/web/images/background/background.png">
    </div>


    <div class="table-responsive">
        <table class="table">
            <caption>Понедельник (чётная)</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Дисциплина</th>
                <th>Аудитория</th>
                <th>Преподаватель</th>
                <th>Время</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Высшая математика</td>
                <td>102</td>
                <td>Сорокин М.В.</td>
                <td>09:00 - 10:35</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Системное программирование</td>
                <td>313</td>
                <td>Шумаков А.Н.</td>
                <td>10:45 - 12:20</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Администрирование баз данных</td>
                <td>310</td>
                <td>Иваньчева Х.З.</td>
                <td>12:45 - 14:20</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Основы компьютерной безопасности</td>
                <td>105</td>
                <td>Родионова Х.З.</td>
                <td>14:30 - 16:05</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Физкультура</td>
                <td>Физ. зал</td>
                <td>Поломошников Х.З.</td>
                <td>16:15 - 17:50</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Прикладное программирование</td>
                <td>202</td>
                <td>Мерзляков Х.З.</td>
                <td>18:00 - 19:35</td>
            </tr>
            </tbody>
        </table>
    </div>


</div>
