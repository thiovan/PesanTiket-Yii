<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-index-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_lengkap'); ?>
		<?php echo $form->textField($model,'nama_lengkap'); ?>
		<?php echo $form->error($model,'nama_lengkap'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
		<?php echo $form->dropDownList($model,'jenis_kelamin',Users::jenis_kelamin(),array('prompt'=>'= Pilihan =','style'=>'width: 170px')); ?>
		<?php echo $form->error($model,'jenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<div class="hint">Password maximum 10 character</div>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textField($model,'password'); ?>
		<div class="hint">Password maximum 16 character</div>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->