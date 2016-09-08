<?php
/* @var $this PaketController */
/* @var $model Paket */
/* @var $form CActiveForm */
?>

<div class="form">

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
)); ?>

        <div class="alert alert-info">
    	<h4>Info:</h4>
    	<p class="note">Semua fields wajib diisi.</p>
    	</div>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->textFieldRow($model,'kdpaket',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->textFieldRow($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div>
		<?php echo $form->textFieldRow($model, 'biaya', array('prepend'=>'Rp.','class'=>'input-small')); ?>
	</div>

    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Save', 'icon'=>'ok white')); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->