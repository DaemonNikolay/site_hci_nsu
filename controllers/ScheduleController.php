<?php

namespace app\controllers;

use app\models\Groups;
use app\models\Schedule;

class ScheduleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Schedule::find()->all();
        $groups = Groups::find()->select('name')->all();

        return $this->render('index', ['model' => $model, 'groups' => $groups]);
    }

}
