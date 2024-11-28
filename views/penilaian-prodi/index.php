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

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id_penilaian',
                'label' => 'ID Penilaian', // Mengubah label kolom
            ],
            [
                'attribute' => 'id_prodi',
                'label' => 'ID Program Studi', // Mengubah label kolom
            ],
            [
                'attribute' => 'id_indikator',
                'label' => 'ID Indikator Penilaian', // Mengubah label kolom
            ],
            [
                'attribute' => 'skor_penilaian',
                'label' => 'Skor Penilaian', // Mengubah label kolom
            ],
            [
                'attribute' => 'tgl_penilaian',
                'label' => 'Tanggal Penilaian', // Mengubah label kolom
                'format' => ['date', 'php:d-m-Y'], // Mengubah format tanggal
            ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianProdi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_penilaian' => $model->id_penilaian, 'id_prodi' => $model->id_prodi, 'id_indikator' => $model->id_indikator]);
                }
            ],
        ],
    ]); ?>



</div>
