@extends('master')
 

@section('content') 
 
    <section id="homepage">

	    <div class="container"> 
		
		   	<div class="row" style="height: 10vh"></div>

		   	<div class="row" style="background-color: #ADDDE8; height: 22vh"> 
		   		<div style="margin: auto;" class="text-center">
		   			<br>
		   			<h4>HI, THERE!</h5> 
					<h2> {{$content['day']}} </h2>
					<h1 id="time"> </h1>
		   		</div>			 
		    </div>
		    <div class="row" style="background-color: #ADDDE8; height: 50vh"> 
		    	<br>
	         	<div style="margin: auto;" class="text-center col-md-8">
	         		<form class="" action="clock" method="post" id="formClock">
			   			<br>
						<select id="employee" name="employee_id" class="search__form-control search__form-control--select form-control js-in-select"> 
							<option value="">Select</option>
							@foreach($content['employees'] as $employee)
							<option value="{{$employee->id}}">{{$employee->first_name}} {{$employee->last_name}}</option>
							@endforeach 
						</select>
						<br>

						<div class="input-group input-group-sm mb-3">
							<div class="input-group">
								<span class="input-group-addon">Password</span>  
								<input id="password" type="Password" class="form-control" name="password" required>
							</div>
						</div> 
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
						<input type="hidden" name="action_type" id="action_type">
						<button type="submit" id="clock_in" class="btn btn-warning" disabled="true">CLOCK IN</button>
						<button type="submit" id="clock_out"  class="btn btn-warning" disabled="true">CLOCK OUT</button>
					</form>

					<br>

					<a id="timesheet" href="timesheet" >Timesheet</a>
 
		   		</div>		
		    </div>  

		   	<div class="row" style="height: 10vh">		   		
		   	    <img src="/images/childcare5.png" style="width: 232px; margin: auto;" >
		   	</div>
		</div> 
    </section>


<script type="text/javascript">

	//  Displays current time
	function showTime(){

	    var date = new Date();
	    var h = date.getHours(); // 0 - 23
	    var m = date.getMinutes(); // 0 - 59
	    var s = date.getSeconds(); // 0 - 59
	    var session = "AM";
	    
	    if(h == 0){
	        h = 12;
	    }
	    
	    if(h > 12){
	        h = h - 12;
	        session = "PM";
	    }
	    
	    h = (h < 10) ? "0" + h : h;
	    m = (m < 10) ? "0" + m : m;
	    s = (s < 10) ? "0" + s : s;
	    
	    var time = h + ":" + m + ":" + s + " " + session;
	    document.getElementById("time").innerText = time;
	    document.getElementById("time").textContent = time;
	    
	    setTimeout(showTime, 1000);
	    
	}

	showTime();


</script>


@endsection


