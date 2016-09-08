<?php
/* @var $this KursusController */
/* @var $model Kursus */
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
                    'nosis',
                    CHtml::listData(Siswa::model()->findAll(),
                    'nosis','nama'),
                    array('empty' => '--Nama--'),
                    array('multiple'=>true));
        ?>	
	</div>

	<div>
		<?php echo $form->dropDownListRow(
                    $model,
                    'kd_kelas',
                    CHtml::listData(Kelas::model()->findAll(),
                    'kdkelas','kdkelas'),
                    array('empty' => '--Kode Kelas--'),
                    array('multiple'=>true));
        ?>	
	</div>

	<div>
		<?php echo $form->dropDownListRow(
                    $model,
                    'kd_paket',
                    CHtml::listData(Paket::model()->findAll(),
                    'kdpaket','nama'),
                    array('empty' => '--Kode Paket--'),
                    array('multiple'=>true));
        ?>	
		<?php echo $form->error($model,'kd_paket'); ?>
	</div>

    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Save', 'icon'=>'ok white')); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->