<?php
/* @var $this KelasController */
/* @var $model Kelas */

$this->breadcrumbs=array(
	'Kelases'=>array('index'),
	$model->kdkelas,
);

$this->menu=array(
	array('label'=>'List Kelas', 'url'=>array('index')),
	array('label'=>'Create Kelas', 'url'=>array('create')),
	array('label'=>'Update Kelas', 'url'=>array('update', 'id'=>$model->kdkelas)),
	array('label'=>'Delete Kelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kdkelas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kelas', 'url'=>array('admin')),
);
?>

<h2>View Kelas #<?php echo $model->kdkelas; ?></h2>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
     'type'=>'bordered',
	'data'=>$model,
	'attributes'=>array(
		'kdkelas',
		'tglmulai',
		'tglselesai',
		'hari',
		'waktu',
		'pengajar',
	),
)); ?>

<h4>Daftar Siswa</h4>
<?php
$siswakursus = Kelas::model()->findByPk($model->kdkelas);
echo '<ol>';
$daftarsiswa = $siswakursus->siswa;
foreach($daftarsiswa as $siswa){
	$datasiswa = Siswa::model()->findByPk($siswa->nosis);
	echo '<li><a href="index.php?r=siswa/view&amp;id='.$siswa->nosis.'">'.$siswa->nosis.'</a> / '.$datasiswa->nama.'</li>';
	}
echo '</ol>';
?>
