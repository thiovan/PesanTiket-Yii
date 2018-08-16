<?php
/* @var $this AirlinesController */
/* @var $model Airlines */

$this->breadcrumbs=array(
	'Airlines'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Airlines', 'url'=>array('index')),
	array('label'=>'Create Airlines', 'url'=>array('create')),
	array('label'=>'Update Airlines', 'url'=>array('update', 'id'=>$model->id_airline)),
	array('label'=>'Delete Airlines', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_airline),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Airlines', 'url'=>array('admin')),
);
?>

<h1>View Airlines #<?php echo $model->id_airline; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_airline',
		'name',
	),
)); ?>
