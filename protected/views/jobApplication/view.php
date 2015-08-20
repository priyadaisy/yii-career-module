<?php
/* @var $this JobApplicationController */
/* @var $model JobApplication */

$this->breadcrumbs=array(
	'Job Applications'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List JobApplication', 'url'=>array('index')),
	array('label'=>'Create JobApplication', 'url'=>array('create')),
	array('label'=>'Update JobApplication', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobApplication', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobApplication', 'url'=>array('admin')),
);
?>

<h1>View JobApplication #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'job_id',
		'name',
		'email',
		'mobile',
                'url_resume',
		'url_github',
		'url_behance',
		'description',
		'resume_path',
		'remark',
		'status',
                array(
                    'name'=>'applied_on',
                    'value'=>date("D j F Y h:i A", strtotime($model->applied_on))
                ),
	),
)); ?>
