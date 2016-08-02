<?php
/* @var $this KabupatenController */
/* @var $model Kabupaten */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kabupaten-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_provinsi'); ?>

			<?php
				$this->widget('ext.chosen.Chosen',array(
				   'name' => 'Kabupaten[id_provinsi]', // input name
				   'value' => $model->id_provinsi, // selection
				   'data' => array(''=>'Semua') + CHtml::listData(Provinsi::model()->findAll(),'id_provinsi','provinsi'),
				));
			?>
		<?php echo $form->error($model,'id_provinsi'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'kecamatan'); ?>
		<?php echo $form->textField($model,'kecamatan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'kecamatan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->