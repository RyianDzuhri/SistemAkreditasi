<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PenilaianProdi $model */

$this->title = 'Update Penilaian Prodi: ' . $model->id_penilaian;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Prodi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penilaian, 'url' => ['view', 'id_penilaian' => $model->id_penilaian, 'id_prodi' => $model->id_prodi, 'id_indikator' => $model->id_indikator]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-prodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
