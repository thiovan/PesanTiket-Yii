<?php
/* @var $this TransactionsController */
/* @var $model Transactions */
/* @var $form CActiveForm */
?>

<div class="wide form box">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transactions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php
		$user = Yii::app()->user->name;
		$result = Yii::app()->db->createCommand()
				->select('*')
				->from('users')
				->where('username=:username', array(':username'=>$user))
				->queryRow();
		$nama_lengkap = $result['nama_lengkap'];
		$id_user = $result['id_user'];

	?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user',array('size'=>50,'maxlength'=>50, 'value'=>$nama_lengkap, 'readonly'=>true)); ?>
		<?php echo $form->hiddenField($model,'id_user',array('size'=>50,'maxlength'=>50, 'value'=>$id_user, 'readonly'=>true)); ?>
		<?php echo $form->error($model,'id_user'); ?>
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
		<?php echo $form->labelEx($model,'departure'); ?>
		<?php $this->widget(
			'zii.widgets.jui.CJuiDatePicker',
			array(
				'model'=>$model,
				'attribute'=>'departure',
				'value'=>$model->departure,
				'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					'showOn'=>'button',
					//'yearRange'=>'-60',
					'changeMonth'=>'true',
					'constrainInput'=>'false',
					'duration'=>'fast',
					'showAnim'=>'slide',
					),
				'htmlOptions'=>array('size'=>20,),
				)
			); ?>
		<?php echo $form->error($model,'departure'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_airline'); ?>
		<?php echo $form->dropDownList($model,'id_airline',Transactions::airline_list(),array('prompt'=>'= Pilih Maskapai =', 'style'=>'width:200px')); ?>
		<?php echo $form->error($model,'id_airline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adult'); ?>
		<?php echo $form->numberField($model,'adult',array('style'=>'width:50px')); ?>
		<?php echo $form->error($model,'adult'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'child'); ?>
		<?php echo $form->numberField($model,'child',array('style'=>'width:50px')); ?>
		<?php echo $form->error($model,'child'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'infant'); ?>
		<?php echo $form->numberField($model,'infant',array('style'=>'width:50px')); ?>
		<?php echo $form->error($model,'infant'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'id_cost',array('value'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Pesan' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->