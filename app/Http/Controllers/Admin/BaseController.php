<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Traits\Response;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;

/**
 * @property bool status
 */
class BaseController extends Controller
{
    use Response;

    private $data = [];

    public function __construct()
    {
        View::share('title', '');
    }

    public function setTitle($title = '')
    {
        View::share('title', $title);
    }

    /**
     * @param $name
     *
     * @return null
     */
    public function __get( $name )
    {
        if ( array_key_exists( $name, $this->data ) ) {
            return $this->data[ $name ];
        }

        return null;
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set( $name, $value )
    {
        $this->data[ $name ] = $value;
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public function __isset( $name )
    {
        return isset( $this->data[ $name ] );
    }
}
