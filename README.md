# Fluentd Client for Yii2
This is a lightweight client library of fluentd. It be a component in Yii2.

## Config setting
Injected the code belows into config file of web.php or console.php

```php
    'fluentd' => [
        'class' => 'iamgold\yii2fluentd\Fluentd',
        'endpoint' => [endpoint of fluentd http server]
    ]
```

## Usage
```php
    Yii::$app->fluentd->send($tag, $params);
```

## Methods
```
    /**
     * send message
     *
     * @param string $tag
     * @param array $params
     * @return ResponseInterface
     */
    public function send(string $tag, array $params)
```

## ResponseInterface Methods
```php
    /**
     * is success
     *
     * @return bool
     */
    public function isSuccess();

    /**
     * get status code
     *
     * @return int
     */
    public function getStatusCode();

    /**
     * get error message
     *
     * @return string
     */
    public function getErrorMessage();
```


