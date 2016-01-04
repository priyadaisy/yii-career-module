<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

Yii::app()->params['JOB_KIND'] = array(
    'full-time-employment' => 'Full-time employment',
    'short-term-contract' => 'Short-term contract',
    'internship' => 'Internship',
    'freelance-or-consulting' => 'Freelance or consulting',
    'volunteer-contributor' => 'Volunteer contributor',
    'partner-for-a-venture' => 'Partner for a venture',
);

Yii::app()->params['JOB_CATEGORY'] = array(
    'coder' => 'Coder',
    'interaction-designer' => 'Interaction Designer',
    'graphic-designer' => 'Graphic Designer',
    'ui-ux' => 'UI UX Guy',
    'qa-engineer' => 'Qa Engineer',
    'system-administration' => 'System Administration',
    'business-management' => 'Marketing / Biz. Dev',
    'writer-editor' => 'Writer/Editor',
    'customer-support' => 'Customer Support',
    'mobile' => 'Mobile (iPhone, Android, other)',
    'office-administrator' => 'Office Administrator',
);

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'XYZ.com Website',
    //'theme'=>'bootstrap', // requires you to copy the theme under your themes directory

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),


	'modules'=>array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'putforshare',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
    ),

	// application components
	'components'=>array(

		'user'=>array(
					// enable cookie-based authentication
					'allowAutoLogin'=>true,
		 ),      

         'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
         ),


		'clientScript'=>array(
            // 'coreScriptPosition'=>CClientScript::POS_END,
            'scriptMap' => array(
                'ckeditor.js' => '//cdn.ckeditor.com/4.5.2/basic/ckeditor.js',
                'jquery.js' => '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
                'jquery-ui.min.js' => '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js',
                'jquery-ui.css' => '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css',
                'bootstrap.min.js' => '//netdna.bootstrapcdn.com/bootstrap/2.2.2/js/bootstrap.min.js',
            ),
        ),

		'user'=>array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),

		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/

		// database settings are configured in database.php
		//'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
		// 'db'=>require(dirname(__FILE__).'/database.php'),

		'db'=>array(
	            'connectionString' => 'mysql:host=localhost;dbname=grand_app_career',
	            'emulatePrepare' => true,
	            'username' => 'root',
	            'password' => '',
	            'charset' => 'utf8',
	            'tablePrefix' => '',
	    ),

	'errorHandler'=>array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),

        'log'=>array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),

);
