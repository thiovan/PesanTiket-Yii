<?php
/* @var $this CostsController */
/* @var $model Costs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cost'); ?>
		<?php echo $form->textField($model,'id_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_airline'); ?>
		<?php echo $form->textField($model,'id_airline'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_origin'); ?>
		<?php echo $form->textField($model,'id_origin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_destination'); ?>
		<?php echo $form->textField($model,'id_destination'); ?>
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