<?php

namespace iamgold\yii2fluentd;

interface ResponseInterface
{
    /**
     * is success
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
}
