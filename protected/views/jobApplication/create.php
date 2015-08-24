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

<div class="container">
    <div class="content">
        <h3><?php echo $job_description_model->job_title; ?></h3>
        <h4><?php echo Yii::app()->params['JOB_CATEGORY'][$job_description_model->job_category].' for '. Yii::app()->params['JOB_KIND'][$job_description_model->job_kind]; ?></h4>
    </div>
    <?php echo htmlspecialchars_decode($job_description_model->job_description_details); ?>
</div>
	  
<?php 
//$this->widget('zii.widgets.CDetailView', array(
//	'data'=>$job_description_model,
//	'attributes'=>array(
//		'id',
//		'job_title',
//		'job_kind',
//		'job_category',
//		'job_description_details',
//		'status',
//                array(
//                    'name'=>'update_on',
//                    'value'=>date("D j F Y h:i A", strtotime($job_description_model->update_on))
//                ),
//	),
//));
?>

<?php $this->renderPartial('_form', array('model'=>$model, 'job_id'=>$job_id)); ?>