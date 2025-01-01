<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdi $model */

$this->title = $model->id_akreditasi;
$this->params['breadcrumbs'][] = ['label' => 'Akreditasi Prodi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="akreditasi-prodi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_akreditasi' => $model->id_akreditasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_akreditasi' => $model->id_akreditasi], [
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
                'label' => 'ID Akreditasi',
                'value' => $model->id_akreditasi,
            ],
            [
                'label' => 'Program Studi',
                'value' => $model->prodi ? $model->prodi->nama_prodi : '(Tidak Ditemukan)',
            ],
            [
                'label' => 'Lembaga Akreditasi',
                'value' => $model->la ? $model->la->nama_la : 'N/A', // Menampilkan nama Lembaga Akreditasi berdasarkan relasi
            ],
            [
               'label' => 'Histori Akreditasi',
                'value' => function ($model) {
                    $descriptions = [
                        'A' => 'A (Baik Sekali)',
                        'B' => 'B (Baik)',
                        'C' => 'C (Cukup)',
                        'D' => 'D (Kurang)',
                        'Belum Terakreditasi' => 'Belum Terakreditasi',
                    ];
                    return Html::encode($descriptions[$model->histori_akreditasi] ?? 'Tidak Diketahui');
                },
            ],
            [
                'label' => 'Tanggal Mulai',
                'value' => Yii::$app->formatter->asDate($model->tgl_mulai),
            ],
            [
                'label' => 'Tanggal Berakhir',
                'value' => Yii::$app->formatter->asDate($model->tgl_berakhir),
            ],
        ],
    ]) ?>

</div>
