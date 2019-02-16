@extends('master')
 

@section('content') 
 
    <section id="homepage">

	    <div class="container"> 

		   	<div class="row" style="height: 12vh"></div>

		   	<div class="row" style="background-color: #ADDDE8; height: 22vh"> 
		   		<div style="margin: auto;" class="text-center">
		   			<br>
		   			<h4  style="color:white;">HI, THERE!</h5> 
					<h1 style="color:white;"> {{$content['day']}} </h1>
					<h1 id="time" style="color:white;"> </h1>

		   		</div>
			 
		    </div>


		    <div class="row" style="background-color: #ADDDE8; height: 50vh">
		        <div class="col-md-6  ">
		            <div class="center-block">1 center-block</div>
		        </div>
		        <div class="col-md-6  ">
		            <div class="center-block">2 center-block</div>
		        </div>
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


