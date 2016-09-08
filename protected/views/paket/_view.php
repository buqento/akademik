<?php
/* @var $this PaketController */
/* @var $data Paket */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kdpaket')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kdpaket), array('view', 'id'=>$data->kdpaket)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya')); ?>:</b>
	<?php echo CHtml::encode($data->biaya); ?>
	<hr />


</div>