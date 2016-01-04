<?php 
// echo "<pre>";
// echo Yii::app()->params['TEXT_ACTIVE'];
// 	var_dump($model); exit;
?>


<?php
/* @var $this JobDescriptionController */
/* @var $model JobDescription */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-description-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>TRUE,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'job_title'); ?>
		<?php echo $form->textField($model,'job_title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'job_title'); ?>
	</div>


    <div class="row">
        <?php echo $form->labelEx($model, 'job_kind'); ?>
        <?php echo $form->radioButtonList($model, 'job_kind', Yii::app()->params['JOB_KIND']); ?>
        <?php echo $form->error($model, 'job_kind'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_category'); ?>
        <?php echo $form->radioButtonList($model, 'job_category', Yii::app()->params['JOB_CATEGORY']); ?>
		<?php echo $form->error($model,'job_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_description_details'); ?>
		<?php echo $form->textArea($model,'job_description_details',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'job_description_details'); ?>
	</div>

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'JobDescription_job_description_details' );
    </script>

	<div class="row buttons">
            <?php echo CHtml::submitButton('Publish', array('name' => 'publish')); ?>
            <?php echo CHtml::submitButton('Save As Draft', array('name' => 'save-draft')); ?>
            <?php echo CHtml::Button('Cancel Edit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->