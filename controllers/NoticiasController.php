<?php

namespace app\controllers;

use Yii;
use app\models\Noticias;
use app\models\NoticiasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

/**
 * NoticiasController implements the CRUD actions for Noticias model.
 */
class NoticiasController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
//                'only' => ['logout'],
                'rules' => [
                    [
//                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionFacebookApp() {

        if ($data = \Yii::$app->request->post()) {
            $appid = "195029971766811";
            $appsecret = "4caa1a10a7e5ce2dcb6ee3fa17ad9544";
            $pageAccessToken = "EAACxYPQwDhsBAKsjYLglk0fCfdUbtJr8yZBTeTiXFHMcmt0PxOy943a9ZBx9gU6sbcdKyvqZCCCsLrGlNIyvd2v1UkcbVdLcZCGEWHZCJ2ZAZB6PGM19RFMwaasjsXBp7dUbScwNnasgp8Smlqdnd1ZAKVLH2vBa3OIiutFu1o4gyKRfABMcrxdnBomXMudP9b4ZD";
            $pageFeed = "/me/feed";

            $pagTitulo = $data['post'];
            $pagURL = $data['basic-url'];

            $fb = new Facebook([
                'app_id' => $appid,
                'app_secret' => $appsecret
            ]);
            $linkData = [
                'link' => $pagURL,
                'message' => $pagTitulo
            ];
            try {
                $response = $fb->post($pageFeed, $linkData, $pageAccessToken);
            } catch (FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch (FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
//            $graphNode = $response->getGraphNode();
        }

        return $this->render('facebookPublicar');
    }

    public function actionPublicarFacebook($id) {
        $model = Noticias::findOne($id);
        $appid = "195029971766811";
        $appsecret = "4caa1a10a7e5ce2dcb6ee3fa17ad9544";
        $pageAccessToken = "EAACxYPQwDhsBAKsjYLglk0fCfdUbtJr8yZBTeTiXFHMcmt0PxOy943a9ZBx9gU6sbcdKyvqZCCCsLrGlNIyvd2v1UkcbVdLcZCGEWHZCJ2ZAZB6PGM19RFMwaasjsXBp7dUbScwNnasgp8Smlqdnd1ZAKVLH2vBa3OIiutFu1o4gyKRfABMcrxdnBomXMudP9b4ZD";
        $pageFeed = "/me/feed";

        $pagTitulo = "Dale Boca !!!!!!";
        $pagURL = \yii\helpers\Url::base(TRUE).\yii\helpers\Url::to(['news-view','id'=>$id]);

        $fb = new Facebook([
            'app_id' => $appid,
            'app_secret' => $appsecret
        ]);
        $linkData = [
            'link' => $pagURL,
            'message' => "$model->titulo_noticia \n $model->body_noticia",
        ];
        try {
            $response = $fb->post($pageFeed, $linkData, $pageAccessToken);
        } catch (FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        $graphNode = $response->getGraphNode();
        return $this->redirect(['index']);
    }

    /**
     * Lists all Noticias models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new NoticiasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Noticias model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Noticias model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Noticias();

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload() && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_noticias]);
            }
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Noticias model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload() && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_noticias]);
            }
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Noticias model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Noticias model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Noticias the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Noticias::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    function actionCambiarRanking() {
        if ($data = Yii::$app->request->post()) {
            $id_noticia = $data['id'];
            $rank = $data['rank'];




            $noticiaVieja = \app\models\NoticiasPrincipales::findOne(['ranking' => $rank]);
            $id_noticia_vieja = $noticiaVieja->noticia_id;
            $noticiaVieja->noticia_id = $id_noticia;

            $noticiaNueva = \app\models\NoticiasPrincipales::findOne(['noticia_id' => $id_noticia]);
            if ($noticiaNueva != null) {
                $noticiaNueva->noticia_id = $id_noticia_vieja;
                $noticiaNueva->save();
            }

            $noticiaVieja->save();
        }
        return $this->redirect(['index']);
    }

    function actionNewsView($id = 1) {
        $noticia = Noticias::findOne($id);
        return $this->render('fe_view', ['noticia' => $noticia]);
    }

}
