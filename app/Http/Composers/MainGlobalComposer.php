<?php
/**
 * covers.lc - MainGlobalComposer.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 29.05.16
 */

namespace App\Http\Composers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class MainGlobalComposer {


    public function __construct()
    {
        //
    }

    public function compose(View $view)
    {
        $view->with('categories', Category::all());
    }
}