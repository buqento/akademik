<?php
/* @var $this PaketController */
/* @var $model Paket */

$this->breadcrumbs=array(
	'Pakets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Paket', 'url'=>array('index')),
	array('label'=>'Manage Paket', 'url'=>array('admin')),
);
?>

<h1>Create Paket</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>