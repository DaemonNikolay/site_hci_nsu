<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Schedule;
use app\models\ScheduleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Disciplines;
use app\models\Groups;
use app\models\Rooms;
use app\models\Teachers;

/**
 * ScheduleController implements the CRUD actions for Schedule model.
 */
class ScheduleController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Schedule models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScheduleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Schedule model.
     * @param integer $training_group
     * @param string $day_of_week
     * @param string $status_week
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($training_group, $day_of_week, $status_week)
    {
        return $this->render('view', [
            'model' => $this->findModel($training_group, $day_of_week, $status_week),
        ]);
    }

    /**
     * Creates a new Schedule model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Schedule();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'training_group' => $model->training_group, 'day_of_week' => $model->day_of_week, 'status_week' => $model->status_week]);
        }

        $groups = Groups::find()->all();
        $teachers = Teachers::find()->all();
        $rooms = Rooms::find()->all();
        $disciplines = Disciplines::find()->all();

        return $this->render('create', ['groups' => $groups,
            'model' => $model,
            'teachers' => $teachers,
            'rooms' => $rooms,
            'disciplines' => $disciplines
        ]);
    }

    /**
     * Updates an existing Schedule model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $training_group
     * @param string $day_of_week
     * @param string $status_week
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($training_group, $day_of_week, $status_week)
    {
        $model = $this->findModel($training_group, $day_of_week, $status_week);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'training_group' => $model->training_group, 'day_of_week' => $model->day_of_week, 'status_week' => $model->status_week]);
        }

        $groups = Groups::find()->all();
        $teachers = Teachers::find()->all();
        $rooms = Rooms::find()->all();
        $disciplines = Disciplines::find()->all();

        return $this->render('update', ['groups' => $groups,
            'model' => $model,
            'teachers' => $teachers,
            'rooms' => $rooms,
            'disciplines' => $disciplines
        ]);
    }

    /**
     * Deletes an existing Schedule model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $training_group
     * @param string $day_of_week
     * @param string $status_week
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($training_group, $day_of_week, $status_week)
    {
        $this->findModel($training_group, $day_of_week, $status_week)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Schedule model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $training_group
     * @param string $day_of_week
     * @param string $status_week
     * @return Schedule the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($training_group, $day_of_week, $status_week)
    {
        if (($model = Schedule::findOne(['training_group' => $training_group, 'day_of_week' => $day_of_week, 'status_week' => $status_week])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
