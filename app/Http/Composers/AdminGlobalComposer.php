<?php
/**
 * covers.lc - AdminGlobalComposer.php
 * 
 * Initial version by: Viktor Melnikov
 * Initial version created on: 22.05.16
 */

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class AdminGlobalComposer {


    public function __construct()
    {
        //
    }

    public function compose(View $view)
    {
        $view->with('user', auth()->user());
    }
}