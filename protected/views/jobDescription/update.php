<?php
/* @var $this JobDescriptionController */
/* @var $model JobDescription */

$this->breadcrumbs=array(
	'Job Descriptions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobDescription', 'url'=>array('index')),
	array('label'=>'Create JobDescription', 'url'=>array('create')),
	array('label'=>'View JobDescription', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobDescription', 'url'=>array('admin')),
);
?>

<h1>Update JobDescription <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>