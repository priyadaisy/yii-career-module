<?php
/* @var $this JobApplicationController */
/* @var $model JobApplication */

$this->breadcrumbs=array(
	'Job Applications'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobApplication', 'url'=>array('index')),
	array('label'=>'Manage JobApplication', 'url'=>array('admin')),
);
?>

<h1>Create JobApplication</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'job_id'=>$job_id)); ?>