<?php

namespace App\Classes;

use Exception;
use Symfony\Component\CssSelector\Exception\ExceptionInterface;

/**
 * alphapharm - BaseException.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 14.06.16
 */

abstract class BaseException extends Exception implements ExceptionInterface
{
    private $_options;

    public function __construct ( $message, $code = 0, Exception $previous = null, $options = [] )
    {
        parent::__construct ( $message, $code, $previous );

        $this->_options = $options;
    }

    public function getOptions ( $key = null )
    {
        if (!is_null($key))
            return $this->_options[$key];

        return $this->_options;
    }
}