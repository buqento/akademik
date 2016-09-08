<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	$model->nokw=>array('view','id'=>$model->nokw),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pembayaran', 'url'=>array('index')),
	array('label'=>'Create Pembayaran', 'url'=>array('create')),
	array('label'=>'View Pembayaran', 'url'=>array('view', 'id'=>$model->nokw)),
	array('label'=>'Manage Pembayaran', 'url'=>array('admin')),
);
?>

<h1>Update Pembayaran <?php echo $model->nokw; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>