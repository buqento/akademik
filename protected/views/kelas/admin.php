<?php
/* @var $this KelasController */
/* @var $model Kelas */

$this->breadcrumbs=array(
	'Kelases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Kelas', 'url'=>array('index')),
	array('label'=>'Create Kelas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kelas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Manage Kelas</h2>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'kelas-grid',
    'type'=>'striped',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kdkelas',
		'tglmulai',
		'tglselesai',
		'hari',
		'waktu',
		'pengajar',
		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
