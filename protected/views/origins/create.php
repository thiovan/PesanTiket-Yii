<?php
/* @var $this OriginsController */
/* @var $model Origins */

$this->breadcrumbs=array(
	'Origins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Origins', 'url'=>array('index')),
	array('label'=>'Manage Origins', 'url'=>array('admin')),
);
?>

<h1>Create Origins</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>