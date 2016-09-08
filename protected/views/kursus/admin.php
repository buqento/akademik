<?php
/* @var $this KursusController */
/* @var $model Kursus */

$this->breadcrumbs=array(
	'Kursuses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Kursus', 'url'=>array('index')),
	array('label'=>'Create Kursus', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kursus-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Manage Kursus</h2>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'kursus-grid',
    'type'=>'striped',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nosis',
		'kd_kelas',
		'kd_paket',
		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
