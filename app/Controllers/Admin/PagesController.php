<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PagesController extends BaseController
{
    public function login(): string
    {
        return view('admin/pages/login/index');
    }

    public function register(): string
    {
        return view('admin/pages/register/index');
    }
    
    public function forgot(): string
    {
        return view('admin/pages/forgot/index');
    }
    
    public function page404(): string
    {
        return view('admin/pages/page404/index');
    }

    public function blank(): string
    {
        return view('admin/pages/blank/index');
    }

}
