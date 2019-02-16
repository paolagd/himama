
$( document ).on('change','#employee',function(e){
  	e.preventDefault();  
	if( $('#employee').val() && $('#password').val() ) {  
        getInformation($('#employee').val(), $('#password').val());
	}
	 
});
 
$( document ).on('keyup','#password',function(e){
  	e.preventDefault(); 
	if( $('#employee').val() && $('#password').val() ) { 
	   getInformation($('#employee').val(), $('#password').val());
	}
 
});

 function getInformation(id, pw) {
 

	$.ajax({
	   type: "GET",
	   url: 'employeeStatus/'+id+'/'+pw,
	   success: function(data){

	 	$('#clock_in').prop('disabled', true);
	 	$('#clock_out').prop('disabled', true);
		$('#action_type').val('');

	   	if(data['action_type'] == 'out'){
	 		$('#clock_out').prop('disabled', false);
	 		$('#action_type').val('check_out');
	   	}
	 	else if(data['action_type'] == 'in'){
	 		$('#clock_in').prop('disabled', false);
	 		$('#action_type').val('check_in');
	 	}

	   },
	   error: function(data){
	   		alert("Error, please try later.")
	   }
	});
	
}
