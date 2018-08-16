<?php
/* @var $this TicketsController */
/* @var $data Tickets */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ticket')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ticket), array('view', 'id'=>$data->id_ticket)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dari')); ?>:</b>
	<?php echo CHtml::encode($data->dari); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ke')); ?>:</b>
	<?php echo CHtml::encode($data->ke); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maskapai')); ?>:</b>
	<?php echo CHtml::encode($data->maskapai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarif')); ?>:</b>
	<?php echo CHtml::encode($data->tarif); ?>
	<br />


</div>