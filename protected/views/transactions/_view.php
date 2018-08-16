<?php
/* @var $this TransactionsController */
/* @var $data Transactions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_transaction')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_transaction), array('view', 'id'=>$data->id_transaction)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->id_User->nama_lengkap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('origin')); ?>:</b>
	<?php echo CHtml::encode($data->idOrigin->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destination')); ?>:</b>
	<?php echo CHtml::encode($data->idDestination->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departure')); ?>:</b>
	<?php echo CHtml::encode($data->departure); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('child')); ?>:</b>
	<?php echo CHtml::encode($data->child); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('infant')); ?>:</b>
	<?php echo CHtml::encode($data->infant); ?>
	<br />

	*/ ?>

</div>