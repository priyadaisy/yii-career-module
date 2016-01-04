<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h3>Login</h3>

<p>Please provide your login credentials:</p>
<div class="row">
<div class="form span4 pull-left">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array(
        'class'=>'well',
		
    )
)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->textFieldRow($model,'useremail',array(
        'hint'=>'eg. xyz@abc.com',
    )); ?>

	<?php echo $form->passwordFieldRow($model,'password'); ?>

	<?php echo $form->checkBoxRow($model,'rememberMe'); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Login',
        )); ?>
	</div>
	
	<?php $this->endWidget(); ?>

</div><!-- form -->

<div class="form span6 pull-left">
	<div class="service-box">
		<h3> Or Simply Use </h3>
		<?php $this->widget('ext.eauth.EAuthWidget');?>
	</div><!-- .service-box ends -->
</div>
</div><!-- div row ends -->
