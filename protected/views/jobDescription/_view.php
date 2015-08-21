<?php
/* @var $this JobDescriptionController */
/* @var $data JobDescription */
?>

<div class="view span4 job-item">
    
    <h3 class="job-title pull-left">
        <?php echo CHtml::link(CHtml::encode($data->job_title), array('view', 'id'=>$data->id)); ?>
    </h3>
    
    <div class="pull-right">
        <p class="job_category"><?php echo CHtml::encode(Yii::app()->params['JOB_CATEGORY'][$data->job_category]); ?></p>
        <p class="job_kind">For <?php echo CHtml::encode(Yii::app()->params['JOB_KIND'][$data->job_kind]); ?></p>
    </div>
    
    <div class="clearfix"></div>

    <p>
    <?php    
    if(strlen(strip_tags($data->job_description_details)) > 250) {
        echo substr(htmlspecialchars_decode($data->job_description_details), 0, 250).'...';
    } else {
        echo htmlspecialchars_decode($data->job_description_details);
    }
    ?>
    </p>

    <span class="date"><?php echo CHtml::encode(date("j F Y", strtotime($data->created_on))); ?></span>
    
    <?php echo CHtml::link('view', array('view', 'id'=>$data->id), array('class' => 'btn btn-primary pull-right')); ?>
</div>