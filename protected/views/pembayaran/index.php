<?php
/* @var $this PembayaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pembayarans',
);

$this->menu=array(
	array('label'=>'Create Pembayaran', 'url'=>array('create')),
	array('label'=>'Manage Pembayaran', 'url'=>array('admin')),
);
?>

<h1>Pembayarans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
