<!DOCTYPE html>
<?php /* @var $this Controller */ ?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/fawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Nova Square">
	<link href="//fonts.googleapis.com/css?family=Roboto:100italic,100,300italic,300,400italic,400,500italic,500,700italic,700,900italic,900"
		  rel="stylesheet" type="text/css">
	<?php Yii::app()->bootstrap->register(); ?>

	<!-- <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script> -->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/selectizecss/selectize.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/overrides.css" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" />

</head>

<body>

    
    
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-th-list"></span></a>
            <a href="/app/index.php" class="brand">PutForShare.com <span> on Beta </span></a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    
                    <?php
                    //$url =  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    /*
                    if( preg_match("/about/", $url)){
                            $active = ' active ';
                    }
                    else if( preg_match("/guidelines/", $url)){
                            $guideline = 'active';
                    }

                    else if( preg_match("/contact/", $url)){
                            $contact = ' active ';
                    }
                    else {
                            $home = ' active ';
                    }

                    */
                    if (!function_exists('echoSelectedClassIfRequestMatches'))
                    {
                            function echoSelectedClassIfRequestMatches($lnk)
                            {
                                //$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
                                $url =  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                //$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
                                if (preg_match("/$lnk/i",$url))
                                    echo ' class= "active" ';
                            }
                    }
                ?>
                    
                <li  <?php echoSelectedClassIfRequestMatches('index.php'); ?> id="home">
                    <a href="http://www.putforshare.com/app/index.php">Home</a>
                </li>
                <li <?php echoSelectedClassIfRequestMatches('about'); ?>>
                    <a href="<?php echo $this->createUrl('site/page', array('view' => 'about')) ?>">About</a>
                </li>
                <li <?php echoSelectedClassIfRequestMatches('partnerstbl'); ?>>
                    <a href="<?php echo $this->createUrl('PartnersTbl/') ?>">Pickup Centers</a>
                </li>
                <li <?php echoSelectedClassIfRequestMatches('guidelines');?>>
                    <a href="<?php echo $this->createUrl('site/page', array('view' => 'guidelines')) ?>">Guidelines</a>
                </li>
                <li  <?php echoSelectedClassIfRequestMatches('faq'); ?>	>
                    <a href="<?php echo $this->createUrl('site/page', array('view' => 'faq')) ?>">FAQ</a>
                </li>
                <li <?php echoSelectedClassIfRequestMatches('contact'); ?>>
                    <a href="<?php echo $this->createUrl('site/contact'); ?>" >Contact</a>
                </li>
                
                <?php if(Yii::app()->user->isGuest) { ?>
                    <li>
                        <a href="<?php echo $this->createUrl('user/signup'); ?>" class="btn btn-primary start-using">Start Using</a>
                    </li>
                <?php } ?>
                
                <?php if(!Yii::app()->user->isGuest && Yii::app()->user->name=="meetneps@gmail.com")	{ ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Manage<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $this->createUrl('user/admin') ?>">Manage Users</a></li>
                            <li><a href="<?php echo $this->createUrl('user/admin') ?>">Manage Posts</a></li>
                        </ul>
                    </li>
                <?php } ?>
                </ul>
                
                
<!--                <ul class="nav navbar-nav navbar-right pull-right ">
                    <?php if (!Yii::app()->user->isGuest) { ?>
                        <li> <a href="<?php echo $this->createUrl('userPostedAssets/listallview'); ?>" >Dashboard</a> </li>
                        <li class="dropdown" id="csslogout">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Welcome, <span id="logout">(<?php echo Yii::app()->user->name ?> )</span>
                                <i class="icon-cog"></i><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $this->createUrl('user/update', array('id' => Yii::app()->user->getState('userId'))); ?>">Edit Profile</a></li>
                                <li><a href="<?php echo $this->createUrl('user/changepassword', array('id' => Yii::app()->user->getState('userId'))); ?>">Change Password</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo $this->createUrl('site/logout'); ?>">Logout</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>-->
                
            </div>
        </div>
    </div>
</div>
    
<div class="container" id="page">


<?php

	$this->widget('bootstrap.widgets.TbMenu',array(
		'type'=>'tabs',
		'id'=>'secondary-menu',
	    'items'=>array(
	                array('label'=>'Browse All Items', 'url'=>array('/userPostedAssets/listallview'),'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'My Offerings','url'=>array('/userPostedAssets/myofferings'),'visible'=>!Yii::app()->user->isGuest),
					//array('label'=>'Groups', 'url'=>array('/group/index'), 'visible'=>!Yii::app()->user->isGuest),
					//array('url' => Yii::app()->getModule('message')->inboxUrl,'label' => 'Messages' .
	        		//		(Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()) ?
	            	//		' (' . Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()) . ')' : ''),
	    			//		'visible' => !Yii::app()->user->isGuest),
	                array('label'=>'Received Wishes', 'url'=>array('/wishes/received'),'visible'=>!Yii::app()->user->isGuest),
	                array('label'=>'Sent Wishes', 'url'=>array('/wishes/sent'),'visible'=>!Yii::app()->user->isGuest),
	        		array('label'=>'My Wishlist', 'url'=>array('/wishlistassets/MyWishlist'),'visible'=>!Yii::app()->user->isGuest),

	        	),
	));

?>
	<?php
	// Global - Flash Message Setup. To use: just do setflash whenever required.
	$this->widget('bootstrap.widgets.TbAlert', array(
        'block'=>true, // display a larger alert block?
        'fade'=>true, // use transitions?
        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
        'alerts'=>array( // configurations per alert type
            'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'),
            'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'),
            'warning'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'),
            'info'=>array('block'=>true, 'fade'=>true,'closeText'=>'&times;'),
        ),
    ));
	?>
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" class="span12">

		<div class="list-group-item">
			<ul class="nav nav-list  nav-stacked" >
				<li class="nav-header">PutForShare.COM</li>
				<li><a href="http://putforshare.com/app/index.php">Home</a></li>
				<li><a href="<?php echo $this->createUrl('site/page', array('view'=>'about'))?>">About</a></li>
				<li><a href="<?php echo $this->createUrl('site/contact');?>">Contact</a></li>
			</ul>
		</div>

		<div class="list-group-item">
				<ul class="nav nav-list  nav-stacked" >
				<li class="nav-header" >PRIVACY</li>
				<li><a href="<?php echo $this->createUrl('site/page', array('view'=>'termsofuse'));?>">Terms of Use</a></li>
				<li><a href="<?php echo $this->createUrl('site/page', array('view'=>'privacypolicy'));?>"> Privacy Policy</a></li>
			</ul>
		</div>
		<div class="list-group-item" id="footer-copyright">
			Copyright © 2014 - <?php echo date('Y'); ?> by <a href="http://putforshare.com/" target="_blank">PutForShare.com</a>&nbsp;Bangalore  All Rights Reserved.
		</div>
    </div><!-- footer -->

</div><!-- page -->
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/selectizejs/standalone/selectize.js"></script>
    <!-- <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/selectizejs/selectize.js"></script>-->
        <?php Yii::app()->clientScript->registerScriptFile('ckeditor.js'); ?>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/app.js"></script>
</body>
</html>
