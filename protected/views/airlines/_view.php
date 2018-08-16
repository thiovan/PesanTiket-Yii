<?php
/* @var $this AirlinesController */
/* @var $data Airlines */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_airline')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_airline), array('view', 'id'=>$data->id_airline)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>