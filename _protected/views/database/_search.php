<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DbBarcodeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="db-barcode-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id')->textInput(
                ['class' => 'form-control input-sm pull-right','placeholder' => Yii::t('app', 'Id')])->label(false) ?>

    <?= $form->field($model, 'Kode_Item')->textInput(
                ['class' => 'form-control input-sm pull-right','placeholder' => Yii::t('app', 'Kode_Item')])->label(false) ?>

    <?= $form->field($model, 'Barcode')->textInput(
                ['class' => 'form-control input-sm pull-right','placeholder' => Yii::t('app', 'Barcode')])->label(false) ?>

    <?= $form->field($model, 'Nama_Item')->textInput(
                ['class' => 'form-control input-sm pull-right','placeholder' => Yii::t('app', 'Nama_Item')])->label(false) ?>

    <?= $form->field($model, 'Jenis')->textInput(
                ['class' => 'form-control input-sm pull-right','placeholder' => Yii::t('app', 'Jenis')])->label(false) ?>

    <?php // echo $form->field($model, 'Merek') ?>

    <?php // echo $form->field($model, 'Rak') ?>

    <?php // echo $form->field($model, 'Tipe_Item') ?>

    <?php // echo $form->field($model, 'Konversi') ?>

    <?php // echo $form->field($model, 'Satuan') ?>

    <?php // echo $form->field($model, 'Harga_Pokok') ?>

    <?php // echo $form->field($model, 'Harga_Jual') ?>

    <?php // echo $form->field($model, 'Keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
