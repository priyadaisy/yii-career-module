<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!--
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>


<?php $this->endWidget(); ?>
-->
<div>
<div class="span12 span13-id" >

	<div id="myCarousel" class="carousel slide" data-interval="10000" data-ride="carousel">

	<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(

    			    array('image'=>Yii::app()->theme->baseUrl . '/css/home1.jpg',
        			'caption'=>'<div id="slider1" class="head-change"><p>The Most Precious Things In Life Carry No Price Tags.</p>
        						<h1>Neither Does PutForShare</h1>
        						<p>You got it right. PutForShare is Absolutely Free to use, and always will be. Excited ?</p>
        						<a href="'. $this->createUrl('site/login') .'" ><button class="btn btn-default" id="btn-width-browse1">Explore Now
        						</button></a></div>',

        		),
		        array('image'=>Yii::app()->theme->baseUrl . '/css/Home2.jpg',

		        	 'caption'=>'<div id="slider2" class="head-change">
        						<h1>No Strings Attached!</h1>
        						<p>PutForShare aims at making sharing as easy and fun as possible. One click is all that is required to get you started on this amazing, unique experience.</p><br/>
        						<a href="'. $this->createUrl('site/login') .'" >
        						<button class="btn btn-default" id="btn-width-browse1">Explore Now</button></a></div>',
        						),
		        array('image'=>Yii::app()->theme->baseUrl . '/css/Home3.jpg',

		         'caption'=>'<div id="slider3" class="head-change">
        						<h1>We CARE<br/> For Your Safety</h1>
        						<p>That’s why we put together our very own set of Golden Rules to help you make your PutForShare experience safe.</p><br/>
        						<a href="'. $this->createUrl('site/page',array('view'=>'guidelines')) .'" ><button class="btn btn-default" id="btn-width-browse1">Learn Guidelines
        						</button></a></div>'),

		        array('image'=>Yii::app()->theme->baseUrl . '/css/Home4.jpg',

		         'caption'=>'<div id="slider4" class="head-change">
        						<h1>Discover the joy<br/> of sharing</h1>
        						<p>That book you always wanted to read may be closer than you think. Ask your friends, or people in YOUR area!</p><br/>
        						<a href="'. $this->createUrl('site/login') .'" ><button class="btn btn-default" id="btn-width-browse1">Explore Now
        						</button></a></div>'),
			    ),
			)); ?>

	</div>
</div>
	<div class="span12 span12-id">
		<div class="main-page-column1" id="logo-image1">
		</div>

		<div class="main-page-column2">
			<h3>PutForShare - an innovative sharing platform</h3>
			<p>Do you have a Book, Novel, or Text Reference Material around the shelf that you don't always read/use? PutForShare enables people
			 like you to pass on or share your Books on PutForShare platform allowing people to find what you have to
			  offer.</p>

			  <span ><a href="<?php echo $this->createUrl('site/login');?>" id="anchor-text" >
			  	Explore Books in Your Area<i class="icon-arrow-right icon-decoration" id="icon-first"></i></a></span>

		</div>
	</div>

		<div class="span12 span12-id">
			<div class="main-page-column2">
				<h3>Get Started By Posting Few books</h3>
				<p>On PutForShare you can post books that you don't read or use.</p>
				<p>People on PutForShare can find it.</p>
				<p>Thats not the end ! You also can find lots of books that you were longing all these days.</p>
			   <span id="aa"><a href="<?php echo $this->createUrl('site/login');?>" id="anchor-text">Add Your Books Now
			   <i class="icon-arrow-right icon-decoration"></i></a></span>


			</div>
			<div class="main-page-column1" id="logo-image2">
			</div>
		</div>


</div>
