<?php
/* @var $this KelasController */
/* @var $model Kelas */

$this->breadcrumbs=array(
	'Kelases'=>array('index'),
	$model->kdkelas=>array('view','id'=>$model->kdkelas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kelas', 'url'=>array('index')),
	array('label'=>'Create Kelas', 'url'=>array('create')),
	array('label'=>'View Kelas', 'url'=>array('view', 'id'=>$model->kdkelas)),
	array('label'=>'Manage Kelas', 'url'=>array('admin')),
);
?>

<h1>Update Kelas <?php echo $model->kdkelas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>