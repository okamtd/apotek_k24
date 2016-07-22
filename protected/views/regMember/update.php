<?php
/* @var $this RegMemberController */
/* @var $model RegMember */

$this->breadcrumbs=array(
	'Reg Members'=>array('index'),
	$model->id_mem=>array('view','id'=>$model->id_mem),
	'Update',
);


?>

<h1>Update RegMember <?php echo $model->id_mem; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>