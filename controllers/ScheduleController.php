<?php

namespace app\controllers;
use app\models\Schedule;

class ScheduleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Schedule::find()->all();
        return $this->render('index', ['model' => $model]);
    }

}
