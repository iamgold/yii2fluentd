<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        $tag = 'line.dmp';
        $params = [
                'channel_id' => 123456789,
                'message' => 'test'
            ];
        $res = Yii::$app->fluentd->send($tag, $params);
        var_dump($res);
    }
}
