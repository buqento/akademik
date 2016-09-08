<?php
/* @var $this KursusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kursuses',
);

$this->menu=array(
	array('label'=>'Create Kursus', 'url'=>array('create')),
	array('label'=>'Manage Kursus', 'url'=>array('admin')),
);
?>

<h2>Pendaftaran Kursus</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
