<?php
/* @var $this PembayaranController */
/* @var $data Pembayaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nokw')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nokw), array('view', 'id'=>$data->nokw)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nosis')); ?>:</b>
	<?php echo CHtml::encode($data->nosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jmlbayar')); ?>:</b>
	<?php echo CHtml::encode($data->jmlbayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_bayar')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_bayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>