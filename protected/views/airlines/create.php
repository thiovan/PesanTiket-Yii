<?php
/* @var $this AirlinesController */
/* @var $model Airlines */

$this->breadcrumbs=array(
	'Airlines'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Airlines', 'url'=>array('index')),
	array('label'=>'Manage Airlines', 'url'=>array('admin')),
);
?>

<h1>Create Airlines</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>