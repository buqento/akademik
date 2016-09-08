<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
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
		<?php echo $form->textFieldRow($model,'nokw',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div>
		<?php echo $form->dropDownListRow(
                    $model,
                    'nosis',
                    CHtml::listData(Siswa::model()->findAll(),
                    'nosis','nama'),
                    array('empty' => '--Nama--'),
                    array('multiple'=>true));
        ?>	
	</div>

	<div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Tanggal Bayar *
    &nbsp;&nbsp;&nbsp;
		<?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'tgl_bayar',
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
		<?php echo $form->textFieldRow($model, 'jmlbayar', array('prepend'=>'Rp.','class'=>'input-small')); ?>
	</div>

	<div>
		<?php echo $form->textAreaRow($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Save', 'icon'=>'ok white')); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->