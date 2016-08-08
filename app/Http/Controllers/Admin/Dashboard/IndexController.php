<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Admin\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        $this->setTitle('Главная');

        return view('admin.dashboard.main.index');
    }
}
