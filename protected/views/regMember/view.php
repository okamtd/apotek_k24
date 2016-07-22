<?php
/* @var $this RegMemberController */
/* @var $model RegMember */

$this->breadcrumbs=array(
	'Reg Members'=>array('index'),
	$model->id_mem,
);

$this->menu=array(
	array('label'=>'View Member', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Update ', 'url'=>array('update', 'id'=>$model->id_mem)),
	array('label'=>'Delete ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mem),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Mengelola Data', 'url'=>array('admin')),
);
?>

<h1>View RegMember #<?php echo $model->id_mem; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mem',
		'nama_mem',
		'alamat_mem',
		'tgllahir_mem',
		'email_mem',
		'notelf_mem',
	),
)); ?>
