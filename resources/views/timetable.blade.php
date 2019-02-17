@extends('master')
 

@section('content') 
 
    <section id="timesheet">

	    <div class="container"> 
	    	<br>
	    	<a type="button" class="btn btn-warning" href="/">Home</a>
		   	<div class="row" style="height: 12vh"></div>

		   	<div class="row" style="height: 60vh; overflow-y:scroll;"> 
		   	 	<table class="table">
				  <thead>
				    <tr> 
				      <th scope="col">Check In</th>
				      <th scope="col">Check Out</th>
				      <th scope="col">Employee</th>
				    </tr>
				  </thead>
				  <tbody> 
		
				    
				    @if (!$timetable->isEmpty())

						@foreach($timetable as $t)
							<tr> 
								<td>{{$t->check_in}}</td>
								<td>{{$t->check_out}}</td>
								<td>{{$t->name}}</td> 
							</tr>

						@endforeach
					@else
					<div class="text-center">
					  <i class="zmdi zmdi-alert-circle  zmdi-hc-4x"></i>
					  <h4 class="listing__empty-title">No results.</h4>
					</div>
					@endif
			    
				  </tbody>
				</table>	 
		    </div>

 

		</div> 
    </section>
 


@endsection


