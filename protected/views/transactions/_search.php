<?php
/* @var $this TransactionsController */
/* @var $model Transactions */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_transaction'); ?>
		<?php echo $form->textField($model,'id_transaction'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_origin'); ?>
		<?php echo $form->textField($model,'id_origin',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_destination'); ?>
		<?php echo $form->textField($model,'id_destination',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departure'); ?>
		<?php echo $form->textField($model,'departure'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adult'); ?>
		<?php echo $form->textField($model,'adult'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'child'); ?>
		<?php echo $form->textField($model,'child'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'infant'); ?>
		<?php echo $form->textField($model,'infant'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->