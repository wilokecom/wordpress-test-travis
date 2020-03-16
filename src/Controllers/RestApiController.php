<?php

namespace WordPressTestTravis\Controllers;

/**
 * Class RestApiController
 * @package WordPressTestTravis\Controllers
 */
class RestApiController
{
    public function __construct()
    {
        add_action('rest_api_init', [$this, 'registerRouter']);
    }
    
    public function registerRouter()
    {
        register_rest_route(
            'wiloke/v1/',
            'sent-message',
            [
                'methods'  => 'POST',
                'callback' => [$this, 'handleSentMessage']
            ]
        );
    }
    
    /**
     * @return \WP_REST_Response
     */
    public function handleSentMessage()
    {
        return new \WP_REST_Response(
            [
                'hello' => 'world'
            ],
            200
        );
    }
}
