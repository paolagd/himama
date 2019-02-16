<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee';

    public function getEmployees()
    {
        $employee = new employee();
        return $employee->all();
    }
}
