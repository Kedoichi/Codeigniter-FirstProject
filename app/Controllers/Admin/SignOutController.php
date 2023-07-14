<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class SignOutController extends BaseController
{
    public function index()
    {
        $data=[];
        $data = $this->loadMasterLayout($data,'Sign Out','signOut');

        return view('Admin/main',$data);
    }
}
