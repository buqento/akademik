<?php
/* @var $this KursusController */
/* @var $model Kursus */

$this->breadcrumbs=array(
	'Kursuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kursus', 'url'=>array('index')),
	array('label'=>'Create Kursus', 'url'=>array('create')),
	array('label'=>'Update Kursus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kursus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kursus', 'url'=>array('admin')),
);
?>

<h1>View Kursus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nosis',
		'kd_kelas',
		'kd_paket',
	),
)); ?>