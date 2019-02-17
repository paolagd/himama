<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Carbon\Carbon; 

use App\employee;
use App\timetable;


class HomepageController extends Controller
{
    
    //Loads the employees and date for the homepage
    public function getInfo(Request $request)
    {
        $employees = new employee();  
        $day	   =  Carbon::now('America/Montreal');  
        
      	$employeesInfo = $employees->getEmployees(); 
        $content = [
            'employees' => $employeesInfo,
            'day' => $day->format('m-d-y')
        ]; 

        return View::make('homepage')->with('content', $content);
    }

    //Function to clock in and out
    public function clockAction(Request $request)
    {
        $timetable = new timetable();
        $time      =  Carbon::now('America/Montreal');
        $data = [ 
            "employee_id" => $request->employee_id,  
            "check_in"    => $time 
        ];

        if( $request->action_type == "check_in" ){
 
            $timetable = $timetable->checkIn($data);
        }
        else  if( $request->action_type == "check_out" ){ 
            $timetable = $timetable->checkOut($request->employee_id);
        }

        return redirect('/')->with('message', 'Thank you! Information updated.');
 
 
    }

    //Function check employee status in the timesheet by first checking credentials
    public function employeeStatus(Request $request, $id, $password)
    {
        $timetable = new timetable(); 
        $employee  = new employee();
       
        $checkPw = $employee->checkPassword($id, $password);

        if ($checkPw){
            $status = $timetable->checkStatus($id);

            if ($status) $action_type = 'out';
            else $action_type = 'in';

            return [ "action_type" => $action_type] ;
        }else
            return null;
 
    }

    //Loads the timetable
    public function getTimesheet(Request $request)
    {
        $timetable = new timetable();       
        $employee  = new employee();       
        $timetable = $timetable->getTimetable();
        foreach ($timetable as &$t) {
            $e =  $employee->getEmployeeById($t->employee_id);
            $t->name = $e->first_name . " ".  $e->last_name;

        }
 
        return View::make('timetable')->with('timetable',$timetable);
    }

}
