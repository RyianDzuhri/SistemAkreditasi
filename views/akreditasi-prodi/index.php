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

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => 'ID Akreditasi', // Mengubah label kolom
                'attribute' => 'id_akreditasi', // Nama atribut dari model
            ],
            [
                'label' => 'ID Program Studi', // Mengubah label kolom
                'attribute' => 'id_prodi', // Nama atribut dari model
            ],
            [
                'label' => 'ID Lembaga Akreditasi', // Mengubah label kolom sesuai penjelasan
                'attribute' => 'id_la', // Nama atribut dari model
            ],
            [
                'label' => 'Histori Akreditasi', // Mengubah label kolom
                'attribute' => 'histori_akreditasi', // Nama atribut dari model
            ],
            [
                'label' => 'Tanggal Mulai', // Mengubah label kolom
                'attribute' => 'tgl_mulai', // Nama atribut dari model
            ],
            [
                'label' => 'Tanggal Berakhir', // Mengubah label kolom
                'attribute' => 'tgl_berakhir', // Nama atribut dari model
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AkreditasiProdi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_akreditasi' => $model->id_akreditasi]);
                }
            ],
        ],
    ]); ?>


</div>
