<?php
/* @var $this JobApplicationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Applications',
);

$this->menu=array(
	array('label'=>'Create JobApplication', 'url'=>array('create')),
	array('label'=>'Manage JobApplication', 'url'=>array('admin')),
);
?>

<h1>Job Applications</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
