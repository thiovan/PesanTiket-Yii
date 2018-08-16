<?php
/* @var $this OriginsController */
/* @var $data Origins */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_origin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_origin), array('view', 'id'=>$data->id_origin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('airport')); ?>:</b>
	<?php echo CHtml::encode($data->airport); ?>
	<br />


</div>