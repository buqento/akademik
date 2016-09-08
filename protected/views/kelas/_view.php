<?php
/* @var $this KelasController */
/* @var $data Kelas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kdkelas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kdkelas), array('view', 'id'=>$data->kdkelas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglmulai')); ?>:</b>
	<?php echo CHtml::encode($data->tglmulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglselesai')); ?>:</b>
	<?php echo CHtml::encode($data->tglselesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hari')); ?>:</b>
	<?php echo CHtml::encode($data->hari); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu')); ?>:</b>
	<?php echo CHtml::encode($data->waktu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pengajar')); ?>:</b>
	<?php echo CHtml::encode($data->pengajar); ?>
	<hr />


</div>