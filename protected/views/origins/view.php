<?php
/* @var $this OriginsController */
/* @var $model Origins */

$this->breadcrumbs=array(
	'Origins'=>array('index'),
	$model->id_origin,
);

$this->menu=array(
	array('label'=>'List Origins', 'url'=>array('index')),
	array('label'=>'Create Origins', 'url'=>array('create')),
	array('label'=>'Update Origins', 'url'=>array('update', 'id'=>$model->id_origin)),
	array('label'=>'Delete Origins', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_origin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Origins', 'url'=>array('admin')),
);
?>

<h1>View Origins #<?php echo $model->id_origin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_origin',
		'city',
		'airport',
	),
)); ?>
