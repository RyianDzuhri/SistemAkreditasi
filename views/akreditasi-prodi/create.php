<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdi $model */

$this->title = 'Form Akreditasi';
$this->params['breadcrumbs'][] = ['label' => 'Akreditasi Prodi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akreditasi-prodi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
