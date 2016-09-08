<?php
/* @var $this PaketController */
/* @var $model Paket */

$this->breadcrumbs=array(
	'Pakets'=>array('index'),
	$model->kdpaket=>array('view','id'=>$model->kdpaket),
	'Update',
);

$this->menu=array(
	array('label'=>'List Paket', 'url'=>array('index')),
	array('label'=>'Create Paket', 'url'=>array('create')),
	array('label'=>'View Paket', 'url'=>array('view', 'id'=>$model->kdpaket)),
	array('label'=>'Manage Paket', 'url'=>array('admin')),
);
?>

<h1>Update Paket <?php echo $model->kdpaket; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>