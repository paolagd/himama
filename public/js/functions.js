
$( document ).on('click','.getHotelUsers',function(e){
    getHtml('#hotelBoard','superAdmin/getAdminUsers/Hotel');
    $('.sidebar-nav li a.active').removeClass('active');
    $(this).addClass('active');
});

     
$( document ).on('change','#employee',function(e){
  	e.preventDefault(); 
	alert("asd");
 
});
 