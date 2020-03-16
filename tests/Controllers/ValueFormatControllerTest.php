<?php

namespace WordPressTestTravisTest\Controllers;

use PHPUnit\Framework\TestCase;
use WordPressTestTravis\Controllers\ValueFormatController;

/**
 * Class ValueFormatControllerTest
 * @package WordPressTestTravisTest\Controllers
 */
class ValueFormatControllerTest extends TestCase
{
    /**
     * @return array
     */
    public function testIsTrue()
    {
        $oInit = new ValueFormatController();
        $this->assertTrue($oInit->returnBoolean());
        
        return ['passed'];
    }
    
    /**
     * @depends testIsTrue
     */
    public function testIsArray(array $stack)
    {
        array_push($stack, 'foo');
        
        $this->assertIsArray(1);
    }
}
