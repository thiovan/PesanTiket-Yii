<?php
/* @var $this DestinationsController */
/* @var $model Destinations */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_destination'); ?>
		<?php echo $form->textField($model,'id_destination'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'airport'); ?>
		<?php echo $form->textField($model,'airport',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->