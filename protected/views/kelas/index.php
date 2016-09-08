<?php
/* @var $this KelasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kelases',
);

$this->menu=array(
	array('label'=>'Create Kelas', 'url'=>array('create')),
	array('label'=>'Manage Kelas', 'url'=>array('admin')),
);
?>

<h2>Kelas Berjalan</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
