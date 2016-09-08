<?php
/* @var $this KelasController */
/* @var $model Kelas */
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
		<?php echo $form->dropDownListRow(
                    $model,
                    'kd_paket',
                    CHtml::listData(Paket::model()->findAll(),
                    'kdpaket','nama'),
                    array('empty' => '--Paket--'),
                    array('multiple'=>true));
        ?>	
	</div>

	<div><?php echo $form->textFieldRow($model,'kdkelas'); ?></div>

	<div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Tanggal Mulai *
    &nbsp;&nbsp;&nbsp;
		<?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'tglmulai',
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
	<div class="row">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Tanggal Selesai *
    &nbsp;&nbsp;&nbsp;
		<?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'tglselesai',
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
		<?php echo $form->dropDownListRow($model, 'hari', 
				array('--Hari--', 
				'Senin, Kamis'=>'Senin, Kamis', 
				'Selasa,Jumat'=>'Selasa, Jumat',
				'Rabu, Sabtu'=>'Rabu, Sabtu',
				'Intensive'=>'Intensive'
				));
		?>
	</div>

	<div>
		<?php echo $form->dropDownListRow($model, 'waktu', 
				array('--Waktu--', 
				'09.00 - 11.00'=>'09.00 - 11.00', 
				'11.00 - 13.00'=>'11.00 - 13.00', 
				'14.00 - 16.00'=>'14.00 - 16.00', 
				'16.00 - 18.00'=>'16.00 - 18.00', 
				'18.00 - 20.00'=>'18.00 - 20.00', 
				));
		?>
	</div>

	<div><?php echo $form->textFieldRow($model,'pengajar'); ?></div>

    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Save', 'icon'=>'ok white')); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->