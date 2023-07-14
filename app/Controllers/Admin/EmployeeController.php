<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EmployeeModel;
use App\Services\EmployeeService;

class EmployeeController extends BaseController
{
    /**
     * @var Service
     */

    private $service;

    public function __construct()
    {
        $this->service = new EmployeeService();
    }

    public function index()
    {
        $data = [];
        $dataLayout['employees'] = $this->service->getAllEmployee();
        $css = [];
        $js = [
            'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">',

            base_url() . 'public/assests/Admin/js/employee.js'
        ];
        $data = $this->loadMasterLayout($data, $dataLayout, 'Employee', 'employee', $css, $js);

        return view('Admin/main', $data);
    }
    public function addEmployee()
    {
        $data = [];
        $dataLayout['employees'] = $this->service->getAllEmployee();
        $css = [];
        $js = [
            'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">',

            base_url() . 'public/assests/Admin/js/employee.js'
        ];
        $data = $this->loadMasterLayout($data, $dataLayout, 'Add Employee', 'addEmployee', $css, $js);

        return view('Admin/main', $data);
    }
    public function insertEmployee()
    {
        $result = $this->service->insertEmployee($this->request);
    }
    public function deleteEmployee()
    {
        $result = $this->service->deleteEmployee($this->request);
        return redirect()->to('/admin/employee');
    }
}
