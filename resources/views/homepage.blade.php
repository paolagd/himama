@extends('master')
 

@section('content') 
 
    <section id="homepage">

	    <div class="container"> 

		   	<div class="row" style="height: 12vh"></div>

		   	<div class="row" style="background-color: #ADDDE8; height: 20vh"> 
		   		<div style="margin: auto;" class="text-center">
		   			<br>
		   			<h3  style="color:white;">HI, THERE!</h3> 
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
  function showTime() {
    var date = new Date(),
        utc = new Date(Date.UTC(
          date.getFullYear(),
          date.getMonth(),
          date.getDate(),
          date.getHours(),
          date.getMinutes(),
          date.getSeconds()
        ));

    document.getElementById('time').innerHTML = utc.toLocaleTimeString();
  }

  setInterval(showTime, 1000);
</script>


@endsection


