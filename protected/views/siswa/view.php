<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswas'=>array('index'),
	$model->nosis,
);

$this->menu=array(
	array('label'=>'List Siswa', 'url'=>array('index')),
	array('label'=>'Create Siswa', 'url'=>array('create')),
	array('label'=>'Update Siswa', 'url'=>array('update', 'id'=>$model->nosis)),
	array('label'=>'Delete Siswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nosis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);
?>

<h1>View Siswa #<?php echo $model->nosis; ?></h1>

<?php 
echo '<a href="report/index.php?nosis='.$model->nosis.'">Cetak Biodata</a>';
?>

<div class="media">
    <a class="pull-left" href="#">
    <img class="img-polaroid" src="foto/<?php echo $model->foto;?>" width="200">
    </a>

    <div class="media-body">
		<?php $this->widget('bootstrap.widgets.TbDetailView', array(
            'type'=>'bordered',
            'data'=>$model,
            'attributes'=>array(
                'nosis',
                'nama',
                'jenkel',
                'tempat',
                'tgllahir',
                'alamat',
                'pendidikan',
                'instansi',
                'telepon',
            ),
        )); ?>
    </div>
</div>
<br />

<h4>Historis Pembayaran</h4>
<?php
$siswakursus = Siswa::model()->findByPk($model->nosis);
echo '<ol>';
$daftarsiswa = $siswakursus->kwitansi;
foreach($daftarsiswa as $siswa){
	echo '<li><a href="index.php?r=pembayaran/view&amp;id='.$siswa->nokw.'">'.$siswa->nokw.'</a> / '.$siswa->keterangan.'</li>';
	}
echo '</ol>';
?>

