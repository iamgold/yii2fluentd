<?php

namespace iamgold\yii2fluentd;

/**
 * This class is used to access response of Requests and must extending
 * ResponseInterface.
 *
 * @author Eric Huang <iamgold0105@gmail.com>
 * @version 1.0.0
 */
class Response implements ResponseInterface
{
    /**
     * @var Object $result
     */
    private $result;

    /**
     * construct
     *
     * @param Object $result
     */
    public function __construct($result)
    {
        $this->result = &$result;
    }

    /**
     * is success
     *
     * @return bool
     */
    public function isSuccess()
    {
        return $this->result->success;
    }

    /**
     * get status code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->result->status_code;
    }

    /**
     * get error message
     *
     * @return array
     */
    public function getErrorMessage()
    {
        return json_decode($this->result->body, true);
    }
}
