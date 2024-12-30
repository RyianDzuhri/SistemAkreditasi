<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PenilaianProdi $model */

$this->title = 'Form Penilaian';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Prodi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-prodi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    'listProdi' => $listProdi,
    'listIndikator' => $listIndikator,
    ]) ?>


</div>
