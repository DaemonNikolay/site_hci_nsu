<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm as Login;
use app\models\Signup;
use app\models\ContactForm;
use app\models\Articles;
use app\models\Category;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return ['access' => ['class' => AccessControl::className(),
                             'only' => ['logout'],
                             'rules' => [['actions' => ['logout'],
                                          'allow' => true,
                                          'roles' => ['@'],],],],
                'verbs' => ['class' => VerbFilter::className(),
                            'actions' => ['logout' => ['post'],],],];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return ['error' => ['class' => 'yii\web\ErrorAction',],
                'captcha' => ['class' => 'yii\captcha\CaptchaAction',
                              'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,],];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->getUser()->isGuest) {
            return $this->goHome();
        }

        $model = new Login();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', ['model' => $model,]);
        }
    }

    /**
     * Signup new user
     * @return string
     */
    public function actionSignup()
    {
        if (Yii::$app->user->id == 1) {
            $model = new Signup();
            if ($model->load(Yii::$app->getRequest()->post())) {
                if ($user = $model->signup()) {
                    return $this->goHome();
                }
            }

            return $this->render('signup', ['model' => $model,]);
        }

        throw new ForbiddenHttpException("Недостаточно прав");
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', ['model' => $model,]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCategories()
    {
        $data = Category::getArticlesByCategory();
        $categories = Category::find()->all();

        return $this->render('categories',[
            'articles'=>$data['articles'],
            'categories'=>$categories
        ]);
    }

    public function actionCategory($id)
    {
//        $data = Category::getArticlesByCategory();
        $articles = Articles::find()->where(['category'=>$id])->all();
        $categories = Category::find()->where(['id' => $id])->all();

        return $this->render('category',[
            'articles' => $articles,
            'categories' => $categories
        ]);
    }

    public function actionView($id)
    {
        $article = Articles::findOne($id);
        $categories = Category::find()->all();

        return $this->render('single',[
            'article'=>$article,
            'categories'=>$categories,
        ]);
    }
}
