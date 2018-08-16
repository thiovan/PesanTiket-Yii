<?php
/* @var $this PromoController */
/* @var $data Promo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_promo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_promo), array('view', 'id'=>$data->id_promo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promo')); ?>:</b>
	<?php echo CHtml::encode($data->promo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>