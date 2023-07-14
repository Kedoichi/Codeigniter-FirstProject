<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class HomeController extends BaseController
{
    public function index()
    {
        $data=[];
        $data = $this->loadMasterLayout($data,'Dashboard','home');

        return view('Admin/main',$data);
    }
}
