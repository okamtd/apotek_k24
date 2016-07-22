<?php
/* @var $this RegMemberController */
/* @var $data RegMember */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mem')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mem), array('view', 'id'=>$data->id_mem)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_mem')); ?>:</b>
	<?php echo CHtml::encode($data->nama_mem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_mem')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_mem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgllahir_mem')); ?>:</b>
	<?php echo CHtml::encode($data->tgllahir_mem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_mem')); ?>:</b>
	<?php echo CHtml::encode($data->email_mem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notelf_mem')); ?>:</b>
	<?php echo CHtml::encode($data->notelf_mem); ?>
	<br />


</div>