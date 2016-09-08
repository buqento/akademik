<?php
/* @var $this KursusController */
/* @var $model Kursus */

$this->breadcrumbs=array(
	'Kursuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kursus', 'url'=>array('index')),
	array('label'=>'Create Kursus', 'url'=>array('create')),
	array('label'=>'View Kursus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kursus', 'url'=>array('admin')),
);
?>

<h1>Update Kursus <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>