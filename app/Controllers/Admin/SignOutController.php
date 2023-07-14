<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class SignOutController extends BaseController
{
    public function index()
    {
        $data = [];
        $dataLayout = [];
        $data = [];
        $css = [];
        $js = [];
        $data = $this->loadMasterLayout($data, $dataLayout, 'Sign Out', 'signOut', $css, $js);

        return view('Admin/main', $data);
    }
}
