<?php
/* @var $this PaketController */
/* @var $model Paket */

$this->breadcrumbs=array(
	'Pakets'=>array('index'),
	$model->kdpaket,
);

$this->menu=array(
	array('label'=>'List Paket', 'url'=>array('index')),
	array('label'=>'Create Paket', 'url'=>array('create')),
	array('label'=>'Update Paket', 'url'=>array('update', 'id'=>$model->kdpaket)),
	array('label'=>'Delete Paket', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kdpaket),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paket', 'url'=>array('admin')),
);
?>

<h1>View Paket #<?php echo $model->kdpaket; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kdpaket',
		'nama',
		'biaya',
	),
)); ?>
