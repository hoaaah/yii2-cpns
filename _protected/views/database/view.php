<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DbBarcode */
?>
<div class="db-barcode-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'Kode_Item',
            'Barcode',
            'Nama_Item',
            'Jenis',
            'Merek',
            'Rak',
            'Tipe_Item',
            'Konversi',
            'Satuan',
            'Harga_Pokok',
            'Harga_Jual',
            'Keterangan',
        ],
    ]) ?>

</div>
