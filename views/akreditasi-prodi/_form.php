<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="akreditasi-prodi-form">

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'id_akreditasi')->textInput()->label('ID Akreditasi') ?>

<?= $form->field($model, 'id_prodi')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Prodi::find()->all(), 'id_prodi', 'nama_prodi'),
    ['prompt' => 'Pilih Program Studi']
)->label('Program Studi') ?>

<?= $form->field($model, 'id_la')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\LembagaAkreditasi::find()->all(), 'id_la', 'nama_la'),
    ['prompt' => 'Pilih Lembaga Akreditasi']
)->label('Lembaga Akreditasi') ?>

<?= $form->field($model, 'histori_akreditasi')->textInput(['maxlength' => true])->label('Histori Akreditasi') ?>

<?= $form->field($model, 'tgl_mulai')->input('date')->label('Tanggal Mulai') ?>

<?= $form->field($model, 'tgl_berakhir')->input('date')->label('Tanggal Berakhir') ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>


</div>
