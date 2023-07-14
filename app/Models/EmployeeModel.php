<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType = 'array'; 

    protected $allowedFields = ['name', 'phone', 'address', 'hired_date', 'dob']; 

    protected $useTimestamps = false;
}
