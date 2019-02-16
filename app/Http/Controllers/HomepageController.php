<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

use App\employee;


class HomepageController extends Controller
{
    
    public function getInfo(Request $request)
    {
      //  $employees = employee::all();  
        $day	   = Carbon::now();  

        $content = [
          //  'employees' => $employees,
            'day' => $day->format('M D Y')
        ]; 

        return View::make('homepage')->with('content', $content);
    }

}
