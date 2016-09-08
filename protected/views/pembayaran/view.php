<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	$model->nokw,
);

$this->menu=array(
	array('label'=>'List Pembayaran', 'url'=>array('index')),
	array('label'=>'Create Pembayaran', 'url'=>array('create')),
	array('label'=>'Update Pembayaran', 'url'=>array('update', 'id'=>$model->nokw)),
	array('label'=>'Delete Pembayaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nokw),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pembayaran', 'url'=>array('admin')),
);
?>

<h1>View Pembayaran #<?php echo $model->nokw; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'type'=>'bordered',
	'data'=>$model,
	'attributes'=>array(
		'nokw',
		'nosis',
		'jmlbayar',
		'tgl_bayar',
		'keterangan',
	),
)); ?>
