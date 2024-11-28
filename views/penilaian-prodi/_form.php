<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PenilaianProdi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- Ubah label untuk id_penilaian menjadi 'ID Penilaian' -->
    <?= $form->field($model, 'id_penilaian')->textInput(['maxlength' => true])->label('ID Penilaian') ?>

    <!-- Ubah label untuk id_prodi menjadi 'Program Studi' -->
    <?= $form->field($model, 'id_prodi')->textInput(['maxlength' => true])->label('ID Program Studi') ?>

    <!-- Ubah label untuk id_indikator menjadi 'Indikator Penilaian' -->
    <?= $form->field($model, 'id_indikator')->textInput(['maxlength' => true])->label('ID Indikator Penilaian') ?>

    <!-- Ubah label untuk skor_penilaian menjadi 'Skor Penilaian' -->
    <?= $form->field($model, 'skor_penilaian')->textInput(['maxlength' => true])->label('Skor Penilaian') ?>

    <!-- Ubah label untuk tgl_penilaian menjadi 'Tanggal Penilaian' dan pastikan input menggunakan type 'date' -->
    <?= $form->field($model, 'tgl_penilaian')->input('date')->label('Tanggal Penilaian') ?>

    <?php ActiveForm::end(); ?>


</div>
