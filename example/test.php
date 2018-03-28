<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = [
        'id' => 'fluentd',
        'basePath' => __DIR__,
        'controllerNamespace' => 'app\commands',
        'components' => [
                'fluentd' => [
                        'class' => 'iamgold\yii2fluentd\Fluentd',
                        'endpoint' => 'http://localhost:8888'
                    ]
            ]
    ];

$application = new \yii\console\Application($config);
$exitCode = $application->run();
exit($exitCode);
