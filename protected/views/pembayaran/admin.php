<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pembayaran', 'url'=>array('index')),
	array('label'=>'Create Pembayaran', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pembayaran-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Manage Pembayaran</h2>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'pembayaran-grid',
    'type'=>'striped',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nokw',
		'nosis',
		'jmlbayar',
		'tgl_bayar',
		'keterangan',
		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
