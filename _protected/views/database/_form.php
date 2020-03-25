<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DbBarcode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="db-barcode-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kode_Item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Barcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama_Item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Merek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tipe_Item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Konversi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Harga_Pokok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Harga_Jual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
