<?php
/* @var $this JobDescriptionController */
/* @var $model JobDescription */

$this->breadcrumbs=array(
	'Job Descriptions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JobDescription', 'url'=>array('index')),
	array('label'=>'Create JobDescription', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#job-description-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Job Descriptions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'job-description-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'job_title',
		'job_kind',
            array(
                'name'=>'update_on',
                'value'=>'date("D j F Y h:i A", strtotime($data->update_on))'
            ),
            
            array(
                'header'=>'Applications',
                'value'=> 'JobApplication::model()->countByAttributes(array("job_id" => $data->id))'
            ),
            
//		'update_on',
//		'job_category',
//		'job_description_details',
//		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
