<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\PenilaianProdi $model */

$this->title = $model->id_penilaian;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Prodi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-prodi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_penilaian' => $model->id_penilaian, 'id_prodi' => $model->id_prodi, 'id_indikator' => $model->id_indikator], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_penilaian' => $model->id_penilaian, 'id_prodi' => $model->id_prodi, 'id_indikator' => $model->id_indikator], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'ID Penilaian',
                'value' => $model->id_penilaian,
            ],
            [
                'label' => 'Program Studi',
                'value' => $model->prodi ? $model->prodi->nama_prodi : '(Tidak Ditemukan)', // Ambil data dari relasi
            ],
            [
                'label' => 'Indikator Penilaian',
                'value' => $model->indikator ? $model->indikator->nama_indikator : '(Tidak Ditemukan)', // Ambil data dari relasi
            ],
            [
                'label' => 'Elemen Penilaian',
                'value' => $model->indikator && $model->indikator->elemen 
                    ? $model->indikator->elemen->nama_elemen 
                    : '(Tidak Ditemukan)', // Ambil elemen melalui relasi indikator
            ],
            [
                'label' => 'Skor Penilaian',
                'value' => $model->skor_penilaian,
            ],
            [
                'label' => 'Tanggal Penilaian',
                'value' => Yii::$app->formatter->asDate($model->tgl_penilaian), // Format tanggal
            ],
        ],
    ]) ?>

</div>
