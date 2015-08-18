<?php
/* @var $this JobApplicationController */
/* @var $model JobApplication */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-application-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php echo $form->hiddenField($model,'job_id',array('value'=>$job_id)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile'); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_github'); ?>
		<?php echo $form->textField($model,'url_github',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'url_github'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_behance'); ?>
		<?php echo $form->textField($model,'url_behance',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'url_behance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'JobApplication_description' );
        </script>

	<div class="row">
		<?php echo $form->labelEx($model,'resume_path'); ?>
		<?php echo $form->textField($model,'resume_path',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'resume_path'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Apply'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->