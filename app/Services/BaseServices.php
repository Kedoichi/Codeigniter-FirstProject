<?php

namespace App\Services;

class BaseServices
{
    public $validation;
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }
}
