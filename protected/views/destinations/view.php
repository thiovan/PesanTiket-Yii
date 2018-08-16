<?php
/* @var $this DestinationsController */
/* @var $model Destinations */

$this->breadcrumbs=array(
	'Destinations'=>array('index'),
	$model->id_destination,
);

$this->menu=array(
	array('label'=>'List Destinations', 'url'=>array('index')),
	array('label'=>'Create Destinations', 'url'=>array('create')),
	array('label'=>'Update Destinations', 'url'=>array('update', 'id'=>$model->id_destination)),
	array('label'=>'Delete Destinations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_destination),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Destinations', 'url'=>array('admin')),
);
?>

<h1>View Destinations #<?php echo $model->id_destination; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_destination',
		'city',
		'airport',
	),
)); ?>
