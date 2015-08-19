<?php
/* @var $this JobDescriptionController */
/* @var $data JobDescription */
?>

<div class="view">
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('job_title')); ?>:</b>
    <?php echo CHtml::encode($data->job_title); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('job_kind')); ?>:</b>
    <?php echo CHtml::encode($data->job_kind); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('job_description_details')); ?>:</b>
    <?php echo CHtml::encode($data->job_description_details); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('update_on')); ?>:</b>
    <?php echo CHtml::encode(date("D j F Y h:i A", strtotime($data->update_on))); ?>
    <br />
    
    <?php echo CHtml::link('view', array('view', 'id'=>$data->id)); ?>

</div>