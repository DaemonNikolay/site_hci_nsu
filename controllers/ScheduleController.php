<?php

namespace app\controllers;

use app\models\Groups;
use app\models\Schedule;

class ScheduleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Schedule::find()->all();





//        $groups = Groups::find()->all();


        echo '<pre>';
        foreach ($model as $item){
//            var_dump($item->for_the_group);
//            echo '<br /><br /><br /><br /><br />';

            $groups = Groups::find()->where(['id' => $item->for_the_group])->all();
            echo $groups[0]->name . ' | ';



        }
        echo '</pre>';

        exit();
        return $this->render('index', ['model' => $model, 'groups' => $groups]);
    }

}
