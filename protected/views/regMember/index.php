<?php
/* @var $this RegMemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reg Members',
);

$this->menu=array(
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Mengelola Data', 'url'=>array('admin')),
);
?>

<h1>Reg Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
