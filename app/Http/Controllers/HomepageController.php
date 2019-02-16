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
        /*$employees = employee::all(); 
        $time	   = Carbon::now();
		$time      = new Carbon();

        $content = [
            'employees' => $employees,
            'time' => $time
        ];*/

        return View::make('homepage');//->with('content', $content);
    }

}
