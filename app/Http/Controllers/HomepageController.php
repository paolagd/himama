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
        $day	   = Carbon::now();  

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
        $time      = Carbon::now();  

        // clock_in  = 0
        // clock_out = 1;
        $data = [ 
            "employee_id" => $request->employee_id,  
            "check_in"    => $time
        ];

        if( $request->action_type == 0 )
            $timetable = $timetable->checkIn($data);

        else  if( $request->action_type == 1 )


        dd($request);

    /*    $requestUser = [
            "email" => $request->email,
            "password" => $request->password,
            "identidad" => $request->rif,
            "tipo" => "entidad"
        ];

        $respuesta['regSuccess'] = "true";
        $respuesta['loginSelected'] = "toggled";
        $respuesta['regSelected'] = "";


        $entidad->createNew($requestEntidad);
        $userAdmin->createNew($requestUser);*/
    }

}
