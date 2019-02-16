<?php

Route::post('clock','HomepageController@clockAction');  
Route::get('employeeStatus/{id}/{password}','HomepageController@employeeStatus');  
Route::get('timesheet','HomepageController@getTimesheet');  