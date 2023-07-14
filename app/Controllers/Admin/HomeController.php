<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [];
        $dataLayout = [];
        $css = [];
        $js = [];
        $data = $this->loadMasterLayout($data, $dataLayout, 'Dashboard', 'home', $css, $js);

        return view('Admin/main', $data);
    }
}
