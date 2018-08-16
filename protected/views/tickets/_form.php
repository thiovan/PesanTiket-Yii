<?php
/* @var $this TicketsController */
/* @var $model Tickets */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tickets-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dari'); ?>
		<?php echo $form->textField($model,'dari',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ke'); ?>
		<?php echo $form->textField($model,'ke',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ke'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maskapai'); ?>
		<?php echo $form->textField($model,'maskapai',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'maskapai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarif'); ?>
		<?php echo $form->textField($model,'tarif'); ?>
		<?php echo $form->error($model,'tarif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->