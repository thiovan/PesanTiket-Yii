<?php
/* @var $this CostsController */
/* @var $model Costs */

$this->breadcrumbs=array(
	'Costs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Costs', 'url'=>array('index')),
	array('label'=>'Manage Costs', 'url'=>array('admin')),
);
?>

<h1>Create Costs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>