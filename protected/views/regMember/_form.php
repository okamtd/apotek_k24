<?php
/* @var $this RegMemberController */
/* @var $model RegMember */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reg-member-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama Lengkap:'); ?>
		<?php echo $form->textField($model,'nama_mem',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_mem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Alamat Member :'); ?>
		<?php echo $form->textField($model,'alamat_mem',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'alamat_mem'); ?>
	</div>

	<div class='row'>
         <?php
            echo $form->labelEx($model, 'Tanggal Lahir : ');
            $this->widget('zii.widgets.jui.CJuiDatePicker', array('attribute' =>'tgllahir_mem',
				
                'model' => $model,
                'options' => array(
                'dateFormat' => 'yy-mm-d',
                'showAnim' => 'fold',
				'changeYear' => true,           
        		'changeMonth' => true,
				'yearRange' => '1950:2099',     
        		'yearRange' => '1950:'.date('Y'),
				'maxDate' => date('Y-m-d')),
                'htmlOptions' => array('size' => 30, 'class' => 'date')
               )
            );
            echo $form->error($model, 'tgllahir_mem');
            ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email :'); ?>
		<?php echo $form->emailField($model,'email_mem',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email_mem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'No Telfon'); ?>
		<?php echo $form->textField($model,'notelf_mem',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'notelf_mem'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->