<?php
/* @var $this RegMemberController */
/* @var $model RegMember */

$this->breadcrumbs=array(
	'Reg Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'View Member', 'url'=>array('index')),
	array('label'=>'Mengelola Data', 'url'=>array('admin')),
	
);
?>

<h1>Daftar Member</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

