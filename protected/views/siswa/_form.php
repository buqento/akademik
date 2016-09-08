<?php
/* @var $this SiswaController */
/* @var $model Siswa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

        <div class="alert alert-info">
    	<h4>Info:</h4>
    	<p class="note">Semua fields wajib diisi.</p>
    	</div>


	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->textFieldRow($model,'nosis',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div>
		<?php echo $form->textFieldRow($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div>
		<?php echo $form->dropDownListRow($model, 'jenkel', 
				array('Jenis Kelamin', 'L'=>'Laki-laki', 'P'=>'Perempuan')); ?>
	</div>

	<div>
		<?php echo $form->textFieldRow($model,'tempat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Tanggal Lahir *
    &nbsp;&nbsp;&nbsp;
		<?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'tgllahir',
			'model'=>$model,
			// additional javascript options for the date picker plugin
			'options'=>array(
			'showAnim'=>'fold',
			'dateFormat'=>'yy-mm-dd',
			'changeYear'=>true,
			//'changeMonth'=>true
			),
			'htmlOptions'=>array(
			'style'=>'height:20px',
			'size'=>'20',
        ),
        )); 
        
        ?>
	</div>
<br />

	<div>
		<?php echo $form->textFieldRow($model,'alamat',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div>
		<?php echo $form->textFieldRow($model,'pendidikan',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div>
		<?php echo $form->textFieldRow($model,'instansi',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div>
		<?php echo $form->textFieldRow($model,'telepon',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div>
		<?php echo $form->fileFieldRow($model,'foto',array('size'=>50,'maxlength'=>50)); ?>
	</div>

    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Save', 'icon'=>'ok white')); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->