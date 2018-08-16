<?php
/* @var $this CostsController */
/* @var $data Costs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cost')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cost), array('view', 'id'=>$data->id_cost)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_airline')); ?>:</b>
	<?php echo CHtml::encode($data->id_airline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_origin')); ?>:</b>
	<?php echo CHtml::encode($data->id_origin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_destination')); ?>:</b>
	<?php echo CHtml::encode($data->id_destination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adult')); ?>:</b>
	<?php echo CHtml::encode($data->adult); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('child')); ?>:</b>
	<?php echo CHtml::encode($data->child); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('infant')); ?>:</b>
	<?php echo CHtml::encode($data->infant); ?>
	<br />


</div>