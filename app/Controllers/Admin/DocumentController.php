<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class DocumentController extends BaseController
{
    public function index()
    {
        $data=[];
        $data = $this->loadMasterLayout($data,'Document','document');

        return view('Admin/main',$data);
    }
}
