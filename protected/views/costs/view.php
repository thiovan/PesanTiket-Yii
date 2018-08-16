<?php
/* @var $this CostsController */
/* @var $model Costs */

$this->breadcrumbs=array(
	'Costs'=>array('index'),
	$model->id_cost,
);

$this->menu=array(
	array('label'=>'List Costs', 'url'=>array('index')),
	array('label'=>'Create Costs', 'url'=>array('create')),
	array('label'=>'Update Costs', 'url'=>array('update', 'id'=>$model->id_cost)),
	array('label'=>'Delete Costs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cost),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Costs', 'url'=>array('admin')),
);
?>

<h1>View Costs #<?php echo $model->id_cost; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cost',
		'id_airline',
		'id_origin',
		'id_destination',
		'adult',
		'child',
		'infant',
	),
)); ?>
