<?php
return [

    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules'=>[
        'comment'=>[
            'class'=>'yii2mod\comments\Module',
            'userIdentityClass'=>'common\models\user'
        ],
    ],
    'components' => [
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages', // if advanced application, set @frontend/messages
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        //'main' => 'main.php',
                    ],
                ],
            ],
        ],   //加这一句默认语言
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        /*'session'=>[
            'class'=>'yii\web\CacheSession',
            'useCookies'=>false,
        ],*///这个是增加用session的缓存方式
       /* 'cache' =>[
            'useMemcached'=>true,
            'class'=>'yii\caching\MemCache',
            'servers'=>[
                'server01'=>[
                    'host'=>'127.0.0.1',
                    'port'=>'11211',
                    'weight'=>60,
                ]
            ],

        ],*///这个使用memcache缓存
        'urlManager'=>array(//url规则
            'showScriptName'=>false,//去掉index.php
            'enablePrettyUrl' => true,
            'rules'=>array(
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',//装换为controller/action模式
                'debug/<controller>/<action>' => 'debug/<controller>/<action>',//URL����
            )
        ),

        /*'urlManagerBackend'=>[
            'admin'=>"/site"

]*/

    ],

];
