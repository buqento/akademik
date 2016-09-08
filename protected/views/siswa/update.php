<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswas'=>array('index'),
	$model->nosis=>array('view','id'=>$model->nosis),
	'Update',
);

$this->menu=array(
	array('label'=>'List Siswa', 'url'=>array('index')),
	array('label'=>'Create Siswa', 'url'=>array('create')),
	array('label'=>'View Siswa', 'url'=>array('view', 'id'=>$model->nosis)),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);
?>

<h1>Update Siswa <?php echo $model->nosis; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>