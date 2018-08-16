<?php
/* @var $this DestinationsController */
/* @var $data Destinations */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_destination')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_destination), array('view', 'id'=>$data->id_destination)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('airport')); ?>:</b>
	<?php echo CHtml::encode($data->airport); ?>
	<br />


</div>