<?php
/* @var $this TicketsController */
/* @var $model Tickets */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ticket'); ?>
		<?php echo $form->textField($model,'id_ticket'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dari'); ?>
		<?php echo $form->textField($model,'dari',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ke'); ?>
		<?php echo $form->textField($model,'ke',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maskapai'); ?>
		<?php echo $form->textField($model,'maskapai',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarif'); ?>
		<?php echo $form->textField($model,'tarif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->