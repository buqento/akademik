<?php
/* @var $this KelasController */
/* @var $model Kelas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kdkelas'); ?>
		<?php echo $form->textField($model,'kdkelas',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglmulai'); ?>
		<?php echo $form->textField($model,'tglmulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglselesai'); ?>
		<?php echo $form->textField($model,'tglselesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hari'); ?>
		<?php echo $form->textField($model,'hari',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktu'); ?>
		<?php echo $form->textField($model,'waktu',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pengajar'); ?>
		<?php echo $form->textField($model,'pengajar',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->