<?php

namespace App\Services;


use App\Models\EmployeeModel;

class EmployeeService extends BaseServices
{
    private $employee;
    public function __construct()
    {
        parent::__construct();
        $this->employee = new EmployeeModel();
        $this->employee->protect(false);
    }

    //get all employee
    public function getAllEmployee()
    {
        return $this->employee->findAll();
    }
    public function insertEmployee($requestData)
    {

        $validate = $this->validateInput($requestData);
        try {
            $this->employee->insert($requestData->getPost());
            header('Location: https://quocchic.net/admin/employee');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function deleteEmployee($requestData)
    {
        $id = $requestData->getPost('id');
        try {
            $this->employee->delete($id);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    private function validateInput($requestData)
    {
        $rule = [
            'name' => 'required',
            'phone' => 'regex_match[/^[0-9]{10}$/]|is_unique[employee.phone]|required'
        ];

        $messages = [
            'name' => [
                'required' => 'Name is required'
            ],
            'phone' => [
                'required' => 'Phone is required',
                'valid_phone' => 'Phone is not valid',
                'is_unique' => 'Phone already exists'
            ]
        ];

        $this->validation->setRules($rule, $messages);
        $this->validation->withRequest($requestData)->run();

        return $requestData;
    }
}
