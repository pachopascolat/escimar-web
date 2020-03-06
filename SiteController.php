<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;

class SiteController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionEntry() {
        $model = new EntryForm;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // validar los datos recibidos en el modelo
            // aquí haz algo significativo con el modelo ...

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // la página es mostrada inicialmente o hay algún error de validación
            return $this->render('entry', ['model' => $model]);
        }
    }

    public function actionSayHello($message = "hola") {
        return $this->render('say', ['mensaje' => $message]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        $carousels = \app\models\InicioCarousel::find()->all();
        $noticias = \app\models\NoticiasPrincipales::find()->orderBy('ranking')->limit(4)->all();

        return $this->render('index', [
                    'carousels' => $carousels,
                    'noticias' => $noticias,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
                    'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

    public function actionPreinscripcion() {
        return $this->render('preinscripcion');
    }

    public function actionBiologia() {
        return $this->render('biologia');
    }

    public function actionCalendario() {
        return $this->render('calendario');
    }

    public function actionConstruccion() {
        return $this->render('/layouts/construccion');
    }

    public function actionInstitucional() {
        return $this->render('institucional');
    }

    public function actionBienestar() {
        return $this->render('/layouts/construccion');
    }
    public function actionBiblioteca() {
        return $this->render('/layouts/construccion');
    }
    public function actionAcademica() {
        return $this->render('  academica');
    }
    public function actionExtension() {
        return $this->render('/layouts/construccion');
    }
    public function actionPosgrado() {
        return $this->render('/layouts/construccion');
    }
    public function actionNivelacion() {
        return $this->render('/layouts/construccion');
    }
    public function actionInvestigacion() {
        return $this->render('/layouts/construccion');
    }
    public function actionAlumnos() {
        return $this->render('/layouts/construccion');
    }
    public function actionNovedades() {
        return $this->render('/layouts/construccion');
    }

    public function actionProduccionPesquera() {
        return $this->render('produccionPesquera');
    }
    

}
