<?php

namespace app\controllers;

use app\models\Groups;
use app\models\Schedule;
use app\models\ScheduleSearch;
use Yii;

class ScheduleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $schedule = Schedule::find()->asArray()->all();
        $groups = Groups::find()->all();
        $searchModel = new ScheduleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', ['schedule' => $schedule, 'groups' => $groups, 'dataProvider' => $dataProvider,
                                       'searchModel' => $searchModel,]);
    }

}
