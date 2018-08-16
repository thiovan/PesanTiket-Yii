<?php
/* @var $this CostsController */
/* @var $model Costs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'costs-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_airline'); ?>
		<?php echo $form->dropDownList($model,'id_airline',Transactions::airline_list(),array('prompt'=>'= Pilih Maskapai =', 'style'=>'width:200px')); ?>
		<?php echo $form->error($model,'id_airline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_origin'); ?>
		<?php echo $form->dropDownList($model,'id_origin',Transactions::origins_list(),array('prompt'=>'= Pilih Kota Asal =', 'style'=>'width:200px')); ?>
		<?php echo $form->error($model,'id_origin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_destination'); ?>
		<?php echo $form->dropDownList($model,'id_destination',Transactions::destinations_list(),array('prompt'=>'= Pilih Kota Tujuan =', 'style'=>'width:200px')); ?>
		<?php echo $form->error($model,'id_destination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adult'); ?>
		<?php echo $form->textField($model,'adult'); ?>
		<?php echo $form->error($model,'adult'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'child'); ?>
		<?php echo $form->textField($model,'child'); ?>
		<?php echo $form->error($model,'child'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'infant'); ?>
		<?php echo $form->textField($model,'infant'); ?>
		<?php echo $form->error($model,'infant'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->