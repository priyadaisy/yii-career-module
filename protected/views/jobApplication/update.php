<?php
/* @var $this JobApplicationController */
/* @var $model JobApplication */

$this->breadcrumbs=array(
	'Job Applications'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobApplication', 'url'=>array('index')),
	array('label'=>'Create JobApplication', 'url'=>array('create')),
	array('label'=>'View JobApplication', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobApplication', 'url'=>array('admin')),
);
?>

<h1>Update JobApplication <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>