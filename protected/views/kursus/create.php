<?php
/* @var $this KursusController */
/* @var $model Kursus */

$this->breadcrumbs=array(
	'Kursuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kursus', 'url'=>array('index')),
	array('label'=>'Manage Kursus', 'url'=>array('admin')),
);
?>
<a href="index.php?r=site/index" class="btn btn-small btn-success"><i class="icon-home icon-white"></i> HOME</a>
<a href="index.php?r=siswa/create" class="btn btn-small btn-success"><i class="icon-user icon-white"></i> Siswa Baru</a>
<a href="index.php?r=pembayaran/create" class="btn btn-small btn-success"><i class="icon-ok icon-white"></i> Kwitansi</a>

<h1>Create Kursus</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>