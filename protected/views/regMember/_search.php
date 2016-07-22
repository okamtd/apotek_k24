<?php
/* @var $this RegMemberController */
/* @var $model RegMember */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_mem'); ?>
		<?php echo $form->textField($model,'id_mem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_mem'); ?>
		<?php echo $form->textField($model,'nama_mem',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_mem'); ?>
		<?php echo $form->textField($model,'alamat_mem',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgllahir_mem'); ?>
		<?php echo $form->textField($model,'tgllahir_mem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_mem'); ?>
		<?php echo $form->textField($model,'email_mem',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notelf_mem'); ?>
		<?php echo $form->textField($model,'notelf_mem',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->