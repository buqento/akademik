<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Siswa', 'url'=>array('index')),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);
?>
<a href="index.php?r=site/index" class="btn btn-small btn-success"><i class="icon-home icon-white"></i> HOME</a>
<a href="index.php?r=kursus/create" class="btn btn-small btn-success"><i class="icon-list-alt icon-white"></i> Pilih Kelas</a>
<a href="index.php?r=pembayaran/create" class="btn btn-small btn-success"><i class="icon-ok icon-white"></i> Kwitansi</a>
<a href="index.php?r=siswa/admin" class="btn btn-small btn-inverse"><i class="icon-list-alt icon-white"></i> Lihat Siswa</a>
<a href="index.php?r=siswa/index" class="btn btn-small btn-inverse"><i class="icon-list-alt icon-white"></i> Biodata Siswa</a>

<h1>Create Siswa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>