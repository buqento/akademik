<?php
/* @var $this KursusController */
/* @var $data Kursus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nosis')); ?>:</b>
	<?php echo CHtml::encode($data->nosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->kd_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_paket')); ?>:</b>
	<?php echo CHtml::encode($data->kd_paket); ?>
	<hr />


</div>