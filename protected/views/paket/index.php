<?php
/* @var $this PaketController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pakets',
);

$this->menu=array(
	array('label'=>'Create Paket', 'url'=>array('create')),
	array('label'=>'Manage Paket', 'url'=>array('admin')),
);
?>

<h2>Paket Kursus</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
