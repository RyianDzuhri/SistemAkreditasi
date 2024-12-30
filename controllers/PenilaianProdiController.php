<?php

namespace app\controllers;

use app\models\PenilaianProdi;
use app\models\PenilaianProdiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenilaianProdiController implements the CRUD actions for PenilaianProdi model.
 */
class PenilaianProdiController extends Controller
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
     * Lists all PenilaianProdi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenilaianProdiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PenilaianProdi model.
     * @param int $id_penilaian Id Penilaian
     * @param int $id_prodi Id Prodi
     * @param int $id_indikator Id Indikator
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_penilaian, $id_prodi, $id_indikator)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_penilaian, $id_prodi, $id_indikator),
        ]);
    }

    /**
     * Creates a new PenilaianProdi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PenilaianProdi();

        // Ambil data untuk dropdown
        $listProdi = \app\models\Prodi::find()->select(['nama_prodi'])->indexBy('id_prodi')->column();
        $listIndikator = \app\models\Indikator::find()->select(['nama_indikator'])->indexBy('id_indikator')->column();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_penilaian' => $model->id_penilaian, 'id_prodi' => $model->id_prodi, 'id_indikator' => $model->id_indikator]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'listProdi' => $listProdi,
            'listIndikator' => $listIndikator,
        ]);
    }

    public function actionUpdate($id_penilaian, $id_prodi, $id_indikator)
    {
        $model = $this->findModel($id_penilaian, $id_prodi, $id_indikator);

        // Ambil data untuk dropdown
        $listProdi = \app\models\Prodi::find()->select(['nama_prodi'])->indexBy('id_prodi')->column();
        $listIndikator = \app\models\Indikator::find()->select(['nama_indikator'])->indexBy('id_indikator')->column();

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_penilaian' => $model->id_penilaian, 'id_prodi' => $model->id_prodi, 'id_indikator' => $model->id_indikator]);
        }

        return $this->render('update', [
            'model' => $model,
            'listProdi' => $listProdi,
            'listIndikator' => $listIndikator,
        ]);
    }

    public function actionDelete($id_penilaian, $id_prodi, $id_indikator)
    {
        $this->findModel($id_penilaian, $id_prodi, $id_indikator)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PenilaianProdi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_penilaian Id Penilaian
     * @param int $id_prodi Id Prodi
     * @param int $id_indikator Id Indikator
     * @return PenilaianProdi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_penilaian, $id_prodi, $id_indikator)
    {
        if (($model = PenilaianProdi::findOne(['id_penilaian' => $id_penilaian, 'id_prodi' => $id_prodi, 'id_indikator' => $id_indikator])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
