<?php
/* @var $this PaketController */
/* @var $model Paket */

$this->breadcrumbs=array(
	'Pakets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Paket', 'url'=>array('index')),
	array('label'=>'Create Paket', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#paket-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Paket</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'paket-grid',
    'type'=>'striped',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kdpaket',
		'nama',
		'biaya',
		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
