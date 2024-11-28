<?php

namespace app\controllers;

use app\models\AkreditasiProdi;
use app\models\AkreditasiProdiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AkreditasiProdiController implements the CRUD actions for AkreditasiProdi model.
 */
class AkreditasiProdiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all AkreditasiProdi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AkreditasiProdiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AkreditasiProdi model.
     * @param int $id_akreditasi Id Akreditasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_akreditasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_akreditasi),
        ]);
    }

    /**
     * Creates a new AkreditasiProdi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AkreditasiProdi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_akreditasi' => $model->id_akreditasi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AkreditasiProdi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_akreditasi Id Akreditasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_akreditasi)
    {
        $model = $this->findModel($id_akreditasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_akreditasi' => $model->id_akreditasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AkreditasiProdi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_akreditasi Id Akreditasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_akreditasi)
    {
        $this->findModel($id_akreditasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AkreditasiProdi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_akreditasi Id Akreditasi
     * @return AkreditasiProdi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_akreditasi)
    {
        if (($model = AkreditasiProdi::findOne(['id_akreditasi' => $id_akreditasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
