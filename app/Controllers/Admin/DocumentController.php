<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DocumentController extends BaseController
{
    public function index()
    {
        $data = [];
        $dataLayout = [];
        $css = [];
        $js = [];
        $data = $this->loadMasterLayout($data, $dataLayout, 'Document', 'document', $css, $js);

        return view('Admin/main', $data);
    }
}
