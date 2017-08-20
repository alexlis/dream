<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    "timezone"  =>  "Asia/Shanghai",
    'controllerNamespace' => 'console\controllers',
    'modules' => [
        'blog' => [
            'class' => 'console\modules\blog\BlogModule'
        ],
        'report' => [
            'class' => 'console\modules\report\ReportModule'
        ],
        'emoticon' => [
            'class' => 'console\modules\emoticon\EmoticonModule'
        ],
		'weixin' => [
			'class' => 'console\modules\weixin\WeixinModule',
		],
		'market' => [
			'class' => 'console\modules\market\MarketModule',
		]
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        //"urlManager" => require (__DIR__ . '/router.php'),
        'errorHandler' => [
            'class' => 'console\controllers\ErrorController'
        ],
    ],

    'params' => $params,
];
