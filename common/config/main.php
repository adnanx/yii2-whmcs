<?php
return [
	'language' => 'en',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		
		'i18n' => [
			'translations' => [
				'*' => [
					'class' => 'yii\i18n\PhpMessageSource',
					//'basePath' => '@app/messages',
					'basePath' => '@app/messages',
					//'sourceLanguage' => 'en-US',
					'sourceLanguage' => 'en',
					/*'fileMap' => [
						'app' => 'app.php',
						'app/error' => 'error.php',
					],*/
					'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation']
				],
			],
		],
    ],
];
