<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Category;

class CatalogController extends BaseController
{
    public function index ( $category )
    {
        $result = Category::where ( 'alias', $category )
            ->with ( 'products' )
            ->limit(1)
            ->get ()->get(0)->toArray();

        return view('main.catalog.index', [
            'category' => $result['name'],
            'products' => $result['products']
        ]);
    }
}
