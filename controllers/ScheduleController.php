<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Schedule;

class ScheduleController extends Controller
{
    public function actionIndex()
    {
        $model = Schedule::find()->all();

        return $this->render('index', ['model' => $model]);
    }
}