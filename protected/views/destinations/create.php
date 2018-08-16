<?php
/* @var $this DestinationsController */
/* @var $model Destinations */

$this->breadcrumbs=array(
	'Destinations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Destinations', 'url'=>array('index')),
	array('label'=>'Manage Destinations', 'url'=>array('admin')),
);
?>

<h1>Create Destinations</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>