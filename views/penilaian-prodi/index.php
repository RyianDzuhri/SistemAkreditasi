<?php

use app\models\PenilaianProdi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PenilaianProdiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Prodi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-prodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Lakukan Penilaian!', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        // ID Penilaian
        [
            'label' => 'ID Penilaian',
            'value' => function ($model) {
                return $model->id_penilaian;  // Menampilkan ID 
            },
        ],

        // Program Studi
        [
            'label' => 'Program Studi',
            'value' => function ($model) {
                return $model->prodi->nama_prodi;  // Menampilkan nama program studi 
            },
        ],

        // Indikator Penilaian 
        [
            'label' => 'Indikator Penilaian',
            'value' => function ($model) {
                return $model->indikator->nama_indikator;  // Menampilkan nama indikator 
            },
        ],
        [
            'label' => 'Elemen',
            'value' => function ($model) {
                // Pastikan `elemen` dimuat melalui relasi
                return $model->indikator->elemen->nama_elemen ?? '(Tidak tersedia)';
            },
        ],
        

        // Skor Penilaian
        [
            'label' => 'Skor Penilaian',
            'value' => function ($model) {
                return $model->skor_penilaian;  // Menampilkan skor penilaian 
            },
        ],

        // Tanggal Penilaian
        [
            'label' => 'Tanggal Penilaian',
            'value' => function ($model) {
                return Yii::$app->formatter->asDate($model->tgl_penilaian, 'long'); // Menggunakan formatter untuk format tanggal
            },
        ],

        // Kolom untuk actions (view, update, delete)
        [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, PenilaianProdi $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id_penilaian' => $model->id_penilaian, 'id_prodi' => $model->id_prodi, 'id_indikator' => $model->id_indikator]);
            }
        ],
    ],
]); ?>


</div>
