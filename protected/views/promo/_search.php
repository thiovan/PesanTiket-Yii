<?php
/* @var $this PromoController */
/* @var $model Promo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_promo'); ?>
		<?php echo $form->textField($model,'id_promo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'promo'); ?>
		<?php echo $form->textField($model,'promo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->