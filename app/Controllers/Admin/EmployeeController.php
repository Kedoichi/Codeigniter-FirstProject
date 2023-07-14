<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class EmployeeController extends BaseController
{
    public function index()
    {
        $data=[];
        $data = $this->loadMasterLayout($data,'Employee','employee');

        return view('Admin/main',$data);
    }
}
