<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdi $model */

$this->title = 'Update Akreditasi Prodi: ' . $model->id_akreditasi;
$this->params['breadcrumbs'][] = ['label' => 'Akreditasi Prodi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_akreditasi, 'url' => ['view', 'id_akreditasi' => $model->id_akreditasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akreditasi-prodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
