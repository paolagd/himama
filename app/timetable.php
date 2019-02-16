<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    	$row = timetable::where('employee_id',$id)->first();
        return $timetable->all();
    }

    public function checkIn($request)
    {
        $timetable = timetable::create($request);
        return $timetable;
    }

    public function checkOut($id)
    {
    	$row = timetable::where('employee_id',$id)->first();
    	/*$row->checkOut =  
        $row->save();*/

        return $row;	
    }
 
}
