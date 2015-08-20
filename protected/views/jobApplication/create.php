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

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$job_description_model,
	'attributes'=>array(
		'id',
		'job_title',
		'job_kind',
		'job_category',
		'job_description_details',
		'status',
                array(
                    'name'=>'update_on',
                    'value'=>date("D j F Y h:i A", strtotime($job_description_model->update_on))
                ),
	),
)); ?>

<?php $this->renderPartial('_form', array('model'=>$model, 'job_id'=>$job_id)); ?>