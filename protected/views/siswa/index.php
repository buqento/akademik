<?php
/* @var $this SiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Siswas',
);

$this->menu=array(
	array('label'=>'Create Siswa', 'url'=>array('create')),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);
?>

<h2>Daftar Siswa Kursus</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
