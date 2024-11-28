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
                'label' => 'ID Program Studi',
                'value' => $model->id_prodi,
            ],
            [
                'label' => 'ID Lembaga Akreditasi',
                'value' => $model->id_la,
            ],
            [
                'label' => 'Histori Akreditasi',
                'value' => $model->histori_akreditasi,
            ],
            [
                'label' => 'Tanggal Mulai',
                'value' => $model->tgl_mulai,
            ],
            [
                'label' => 'Tanggal Berakhir',
                'value' => $model->tgl_berakhir,
            ],
        ],
    ]) ?>


</div>
