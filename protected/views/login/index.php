<?php
/* @var $this LoginController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Logins',
);

$this->menu=array(
	array('label'=>'Tambah Admin', 'url'=>array('create')),
	array('label'=>'View', 'url'=>array('admin')),
);
?>

<h1>Logins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
