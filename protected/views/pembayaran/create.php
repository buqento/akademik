<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pembayaran', 'url'=>array('index')),
	array('label'=>'Manage Pembayaran', 'url'=>array('admin')),
);
?>
<a href="index.php?r=site/index" class="btn btn-small btn-success"><i class="icon-home icon-white"></i> HOME</a>
<a href="index.php?r=siswa/create" class="btn btn-small btn-success"><i class="icon-user icon-white"></i> Siswa Baru</a>
<a href="index.php?r=kursus/create" class="btn btn-small btn-success"><i class="icon-list-alt icon-white"></i> Pilih Kelas</a>
<a href="index.php?r=pembayaran/admin" class="btn btn-small btn-inverse"><i class="icon-list-alt icon-white"></i> Lihat Kwitansi</a>

<h1>Create Pembayaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>