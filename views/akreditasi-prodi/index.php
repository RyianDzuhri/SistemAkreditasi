<?php

use app\models\AkreditasiProdi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Akreditasi Prodi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akreditasi-prodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Lakukan Akreditasi!', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // Menampilkan ID Akreditasi tanpa link
            [
                'label' => 'ID Akreditasi',
                'value' => function ($model) {
                    return Html::encode($model->id_akreditasi);  // Menggunakan Html::encode untuk memastikan tampil sebagai teks biasa
                },
            ],

            // Program Studi
            [
                'label' => 'Program Studi',
                'value' => function ($model) {
                    return $model->prodi->nama_prodi;
                },
            ],

            // Lembaga Akreditasi
            [
                'label' => 'Lembaga Akreditasi',
                'value' => function ($model) {
                    return $model->la->nama_la;
                },
            ],

            // Menampilkan Histori Akreditasi sebagai teks biasa
            [
                'label' => 'Histori Akreditasi',
                'value' => function ($model) {
                    return Html::encode($model->histori_akreditasi); // Menggunakan Html::encode
                },
            ],

            // Menampilkan Tanggal Mulai sebagai teks biasa
            [
                'label' => 'Tanggal Mulai',
                'value' => function ($model) {
                    return Yii::$app->formatter->asDate($model->tgl_mulai, 'long'); // Menggunakan formatter untuk format tanggal
                },
            ],

            // Menampilkan Tanggal Berakhir sebagai teks biasa
            [
                'label' => 'Tanggal Berakhir',
                'value' => function ($model) {
                    return Yii::$app->formatter->asDate($model->tgl_berakhir, 'long'); // Menggunakan formatter untuk format tanggal
                },
            ],

            // Kolom untuk actions (view, update, delete)
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AkreditasiProdi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_akreditasi' => $model->id_akreditasi]);
                },
            ],
        ],
    ]); ?>
</div>
