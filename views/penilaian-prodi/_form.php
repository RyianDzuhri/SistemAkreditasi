<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PenilaianProdi $model */
/** @var yii\widgets\ActiveForm $form */
/** @var array $listProdi */
/** @var array $listIndikator */

?>

<div class="penilaian-prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_penilaian')->textInput(['maxlength' => true])->label('ID Penilaian') ?>

    <?= $form->field($model, 'id_prodi')->dropDownList(
        $listProdi,
        ['prompt' => 'Pilih Program Studi']
    )->label('Program Studi') ?>

    <?= $form->field($model, 'id_indikator')->dropDownList(
        $listIndikator,
        ['prompt' => 'Pilih Indikator Penilaian']
    )->label('Indikator Penilaian') ?>

    <?= $form->field($model, 'skor_penilaian')->textInput(['maxlength' => true])->label('Skor Penilaian') ?>

    <?= $form->field($model, 'tgl_penilaian')->input('date')->label('Tanggal Penilaian') ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

