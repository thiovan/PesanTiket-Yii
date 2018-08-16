<?php
/* @var $this CostsController */
/* @var $model Costs */

$this->breadcrumbs=array(
	'Costs'=>array('index'),
	$model->id_cost=>array('view','id'=>$model->id_cost),
	'Update',
);

$this->menu=array(
	array('label'=>'List Costs', 'url'=>array('index')),
	array('label'=>'Create Costs', 'url'=>array('create')),
	array('label'=>'View Costs', 'url'=>array('view', 'id'=>$model->id_cost)),
	array('label'=>'Manage Costs', 'url'=>array('admin')),
);
?>

<h1>Update Costs <?php echo $model->id_cost; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>