<?php
/* @var $this JobDescriptionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Descriptions',
);

$this->menu=array(
	array('label'=>'Create JobDescription', 'url'=>array('create')),
	array('label'=>'Manage JobDescription', 'url'=>array('admin')),
);
?>

<h1>Job Descriptions</h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
