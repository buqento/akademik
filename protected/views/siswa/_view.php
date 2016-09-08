<?php
/* @var $this SiswaController */
/* @var $data Siswa */
?>

<div class="media">
    <a class="pull-left">
    <img class="img-polaroid" src="foto/<?php echo $data->foto;?>" width="70">
    </a>

    <div class="media-body">


	<b><?php echo CHtml::encode($data->getAttributeLabel('nosis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nosis), array('view', 'id'=>$data->nosis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenkel')); ?>:</b>
	<?php echo CHtml::encode($data->jenkel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat')); ?>:</b>
	<?php echo CHtml::encode($data->tempat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgllahir')); ?>:</b>
	<?php echo CHtml::encode($data->tgllahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<hr />


	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pendidikan')); ?>:</b>
	<?php echo CHtml::encode($data->pendidikan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instansi')); ?>:</b>
	<?php echo CHtml::encode($data->instansi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telepon')); ?>:</b>
	<?php echo CHtml::encode($data->telepon); ?>
	<br />

	*/ ?>

</div>
</div>