<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class UtilitiesController extends BaseController
{
    public function colors(): string
    {
        return view('admin/utilities/colors/index');
    }

    public function borders(): string
    {
        return view('admin/utilities/borders/index');
    }

    public function animations(): string
    {
        return view('admin/utilities/animations/index');
    }

    public function other(): string
    {
        return view('admin/utilities/other/index');
    }
}
