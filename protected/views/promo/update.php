<?php
/* @var $this PromoController */
/* @var $model Promo */

$this->breadcrumbs=array(
	'Promos'=>array('index'),
	$model->id_promo=>array('view','id'=>$model->id_promo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Promo', 'url'=>array('index')),
	array('label'=>'Create Promo', 'url'=>array('create')),
	array('label'=>'View Promo', 'url'=>array('view', 'id'=>$model->id_promo)),
	array('label'=>'Manage Promo', 'url'=>array('admin')),
);
?>

<h1>Update Promo <?php echo $model->id_promo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>