<?php
/* @var $this AirlinesController */
/* @var $model Airlines */

$this->breadcrumbs=array(
	'Airlines'=>array('index'),
	$model->name=>array('view','id'=>$model->id_airline),
	'Update',
);

$this->menu=array(
	array('label'=>'List Airlines', 'url'=>array('index')),
	array('label'=>'Create Airlines', 'url'=>array('create')),
	array('label'=>'View Airlines', 'url'=>array('view', 'id'=>$model->id_airline)),
	array('label'=>'Manage Airlines', 'url'=>array('admin')),
);
?>

<h1>Update Airlines <?php echo $model->id_airline; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>