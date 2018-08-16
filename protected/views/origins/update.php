<?php
/* @var $this OriginsController */
/* @var $model Origins */

$this->breadcrumbs=array(
	'Origins'=>array('index'),
	$model->id_origin=>array('view','id'=>$model->id_origin),
	'Update',
);

$this->menu=array(
	array('label'=>'List Origins', 'url'=>array('index')),
	array('label'=>'Create Origins', 'url'=>array('create')),
	array('label'=>'View Origins', 'url'=>array('view', 'id'=>$model->id_origin)),
	array('label'=>'Manage Origins', 'url'=>array('admin')),
);
?>

<h1>Update Origins <?php echo $model->id_origin; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>