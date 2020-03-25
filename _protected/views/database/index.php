<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\Modal;
use kartik\grid\GridView;
use hoaaah\ajaxcrud\CrudAsset;
use hoaaah\ajaxcrud\BulkButtonWidget;
use kartik\select2\Select2;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DbBarcodeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Db Barcodes';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);


?>
<div class="db-barcode-index">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <div id="ajaxCrudDatatable">
        <?php $form = ActiveForm::begin(['id' => $model->formName()]); // 'action' => ['bulk-update'] ?>
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,
            'pjax' => false,
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [
                ['content'=>
                    Html::a('<i class="fas fa-plus"></i>', ['create'],
                    ['role'=>'modal-remote','title'=> 'Create new Db Barcodes','class'=>'btn btn-secondary']).
                    Html::a('<i class="fas fa-redo"></i>', [''],
                    ['data-pjax'=>1, 'class'=>'btn btn-secondary', 'title'=>'Reset Grid']).
                    '{toggleData}'.
                    '{export}'
                ],
            ],       
            'pager' => [
                'firstPageLabel' => 'Awal',
                'lastPageLabel'  => 'Akhir'
            ],
            'striped' => true,
            'condensed' => true,
            'responsive' => true,
            'panel' => [
                'type' => 'primary',
                'heading' => '<i class="fas fa-list-alt"></i> Db Barcodes listing',
                'before'=>'<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
                'after'=>
                    '<div class="row"><div class="col-md-3">'.
                    $form->field($model, 'kode_persediaan')->widget(Select2::classname(), [
                        'options' => ['placeholder' => 'Jenis Persediaan ...'],
                        'data' => $kodePersediaanList,
                        'pluginOptions' => [
                            'allowClear' => true,
                        ],
                    ])->label(false).
                    '</div><div class="col-md-3">'.
                    $form->field($model, 'satuan')->textInput(['placeholder' => 'Satuan'])->label(false).
                    '</div><div class="col-md-3">'.
                    $form->field($model, 'merk')->textInput(['placeholder' => 'Merek'])->label(false).
                    '</div><div class="col-md-3">'.
                    Html::submitButton( '<i class="glyphicon glyphicon-arrow-right"></i> Kirim Data', ['id' => 'batch-submit', 'class' => 'btn btn-warning', 'data-confirm' => "Yakin mengirim data? Data yang terkirim hanya dapat dimodifikasi di aplikasi Keuangan.",]).
                    '</div></div>'.
                    '<div class="clearfix"></div>',
            ]
        ])?>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "title" => '<h4 class="modal-title">Modal title</h4>',
    "footer"=>"",// always need it for jquery plugin
    'size' => 'modal-xl'
])?>
<?php Modal::end(); ?>