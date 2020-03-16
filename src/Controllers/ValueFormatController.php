<?php

namespace WordPressTestTravis\Controllers;

/**
 * Class ValueFormatController
 * @package WordPressTestTravis\Controllers
 */
class ValueFormatController
{
    /**
     * @return bool
     */
    public function returnBoolean()
    {
        return true;
    }
    
    /**
     * @return array
     */
    public function returnArray()
    {
        return [1, 2, 3];
    }
    
    /**
     * @return string
     */
    public function returnEmpty()
    {
        return '';
    }
}
