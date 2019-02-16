<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class timetable extends Model
{
    protected $table = 'timetable'; 
    protected $fillable = ['id', 'check_in', 'check_out' ,'employee_id'];
    public $timestamps = false;

    public function getTimetable()
    {
        $timetable = new timetable();
        return $timetable->all();
    }


    public function checkStatus($id)
    {
        $time = Carbon::now();  
    	$row  = timetable::where('employee_id',$id)->whereDate('check_in','=', $time)->whereNull('check_out')->first();
    	if($row != null)
            return true;
        else
            return false;
    }

    public function checkIn($request)
    {
        $timetable = timetable::create($request);
        return $timetable;
    }

    public function checkOut($employee_id)
    { 
    	$time = Carbon::now(); 
    	$row = timetable::where('employee_id',$employee_id)->orderBy('check_in', 'desc')->first()->update(['check_out'=> $time]); 
        return $row;	
    }
 
}
