<?php
/* @var $this PromoController */
/* @var $model Promo */

$this->breadcrumbs=array(
	'Promos'=>array('index'),
	$model->id_promo,
);

$this->menu=array(
	array('label'=>'List Promo', 'url'=>array('index')),
	array('label'=>'Create Promo', 'url'=>array('create')),
	array('label'=>'Update Promo', 'url'=>array('update', 'id'=>$model->id_promo)),
	array('label'=>'Delete Promo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_promo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Promo', 'url'=>array('admin')),
);
?>

<h1>View Promo #<?php echo $model->id_promo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_promo',
		'promo',
		'status',
	),
)); ?>
