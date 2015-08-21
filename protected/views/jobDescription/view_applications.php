<?php
/* @var $this JobDescriptionController */
/* @var $model JobDescription */

$this->breadcrumbs=array(
	'Job Descriptions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JobDescription', 'url'=>array('index')),
	array('label'=>'Create JobDescription', 'url'=>array('create')),
	array('label'=>'Update JobDescription', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobDescription', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobDescription', 'url'=>array('admin')),
);
?>

<h1>View JobDescription #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'job_title',
		'job_kind',
		'job_category',
		'job_description_details',
		'status',
		'update_on',
	),
)); ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'job-applications-grid',
	'dataProvider'=>$applications,
//	'filter'=>$applications,
	'columns'=>array(
//		'id',
//		'job_id',
		'name',
		'email',
		'mobile',
		'status',
		'url_github',
                array(
                    'name'=>'applied_on',
                    'value'=>'date("D j F Y h:i A", strtotime($data->applied_on))'
                ),
		/*
		'url_behance',
		'description',
		'resume_path',
		'remark',
		*/
//		array(
//			'class'=>'CButtonColumn',
//		),
	),
)); ?>