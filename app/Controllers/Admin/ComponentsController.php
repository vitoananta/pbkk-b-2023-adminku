<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ComponentsController extends BaseController
{
    public function buttons(): string
    {
        return view('admin/components/buttons/index');
    }

    public function cards(): string
    {
        return view('admin/components/cards/index');
    }
}
