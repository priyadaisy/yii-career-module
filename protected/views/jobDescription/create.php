<?php
/* @var $this JobDescriptionController */
/* @var $model JobDescription */

$this->breadcrumbs=array(
	'Job Descriptions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobDescription', 'url'=>array('index')),
	array('label'=>'Manage JobDescription', 'url'=>array('admin')),
);
?>

<h1>Create JobDescription</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>