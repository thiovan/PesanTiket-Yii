<?php
/* @var $this AirlinesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Airlines',
);

$this->menu=array(
	array('label'=>'Create Airlines', 'url'=>array('create')),
	array('label'=>'Manage Airlines', 'url'=>array('admin')),
);
?>

<h1>Airlines</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
