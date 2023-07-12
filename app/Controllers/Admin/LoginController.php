<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class LoginController extends BaseController
{
    public function index()
    {
        return view('Admin/Pages/auth');
    }
}
