<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Admin\Employees;

class EmployeeController extends BaseController
{
    public function index()
    {
        $this->setTitle('Сотрудники');

        return view('admin.dashboard.users.index');
    }

    public function view($user_id)
    {
        dd(Employees::find($user_id));
    }
}
