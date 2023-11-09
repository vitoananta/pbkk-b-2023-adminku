<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class TablesController extends BaseController
{
    public function index(): string
    {
        return view('admin/tables/index');
    }
}
