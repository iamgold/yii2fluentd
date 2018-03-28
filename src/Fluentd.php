<?php

namespace iamgold\yii2fluentd;

use Requests;
use yii\base\Component;

/**
 * This class is used to send request to fluentd.
 *
 * @author Eric Huang <iamgold0105@gmail.com>
 * @version 1.0.0
 */
class Fluentd extends Component
{
    /**
     * @var string $endpoint
     */
    public $endpoint;

    /**
     * init
     */
    public function init()
    {
        parent::init();

        $this->endpoint = trim($this->endpoint, '/');
    }

    /**
     * send
     *
     * @param string $tag
     * @param array $params
     * @return ResponseInterface
     */
    public function send(string $tag, array $params)
    {
        $uri = sprintf('%s/%s', $this->endpoint, $tag);
        return $this->sendRequest($uri, $params);
    }

    /**
     * send request by URI and $params
     *
     * @param string $uri
     * @param array $params
     * @return ResponseInterface
     */
    protected function sendRequest(string $uri, array $params, array $headers = null)
    {
        if ($headers===null)
            $headers = ['Content-Type'=>'application/json'];

        $data = json_encode($params);
        $result = Requests::post($uri, $headers, $data);
        return new Response($result);
    }
}
