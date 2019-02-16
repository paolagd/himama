<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee'; 
    protected $fillable = ['id', 'first_name', 'last_name' ,'password'];
    public $timestamps = false;

    public function getEmployees()
    {
        $employee = new employee();
        return $employee->all();
    }
}
