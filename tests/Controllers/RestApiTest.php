<?php

namespace WordPressTestTravisTest\Controllers;

/**
 * Class RestApiTest
 * @package WordPressTestTravisTest\Controllers
 */
class RestApiTest extends \WP_UnitTestCase
{
    protected $server;
    
    public function setUp()
    {
        parent::setUp();
        global $wp_rest_server;
        $this->server   = new \WP_REST_Server;
        $wp_rest_server = $this->server;
        
//        $this->administrator = $this->factory->user->create(
//            [
//                'role' => 'administrator',
//            ]
//        );
//        
//        wp_set_current_user($this->administrator);
        do_action('rest_api_init');
    }
    
    public function testInvalidMessage()
    {
        $request = new \WP_REST_Request('POST', '/wiloke/post-message');
        $request->set_body_params(
            [
                'username' => 'X'
            ]
        );
        
        /**
         * @var $response \WP_REST_Response
         */
        $response = $this->server->dispatch($request);
        $this->assertEquals('world', $response->get_data()['hello']);
    }
    
    public function tearDown()
    {
        parent::tearDown();
        global $wp_rest_server;
        $wp_rest_server = null;
    }
}
