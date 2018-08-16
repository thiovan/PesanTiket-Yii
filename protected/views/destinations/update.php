<?php
/* @var $this DestinationsController */
/* @var $model Destinations */

$this->breadcrumbs=array(
	'Destinations'=>array('index'),
	$model->id_destination=>array('view','id'=>$model->id_destination),
	'Update',
);

$this->menu=array(
	array('label'=>'List Destinations', 'url'=>array('index')),
	array('label'=>'Create Destinations', 'url'=>array('create')),
	array('label'=>'View Destinations', 'url'=>array('view', 'id'=>$model->id_destination)),
	array('label'=>'Manage Destinations', 'url'=>array('admin')),
);
?>

<h1>Update Destinations <?php echo $model->id_destination; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>