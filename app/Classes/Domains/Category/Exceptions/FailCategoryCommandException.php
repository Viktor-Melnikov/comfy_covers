<?php

/**
 * covers.lc - FailCategoryCommandException.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 19.07.16
 */

namespace App\Classes\Domains\Category\Exceptions;

use App\Classes\BaseException;
use Exception;

class FailCategoryCommandException extends BaseException
{
    public function __construct(Exception $e, $json = false)
    {
        parent::__construct ( $e->getMessage (), $e->getCode (), $e, [
            'link' => admin_url ( 'category' ),
            'json' => $json
        ] );
    }
}