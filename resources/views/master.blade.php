<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ProgQuest - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->  
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"> 

        <style>
            html, body { 
                font-family: 'Nunito', sans-serif;
                font-weight: 400; 
            } 
        </style>

    </head>

    <body>
        <div class="flex-center position-ref full-height">
       	  @yield('content')
        </div>

    
	    <!-- Footer -->
	    <footer class="footer">
		     
	    </footer>
    </body> 


	<script type="text/javascript" src="{{url('js/jquery-3.3.1.min.js')}}"></script> 
	<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
</html>
