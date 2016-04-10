<html lang="en"> 
  <head> 
    <title>Blade Template</title> 
  {{ 
HTML::style(‘https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstr
ap.min.css’) }} 
</head> 
  <body> 
     <div class="container"> 
         <div class="jumbotron"> 
            <h1>Blade Template - Laravel</h1> 
            <p>@yield('content')</p> 
            <p><a href="#" class="btn btn-primary btn-lg" >Learn more 
&raquo;</a></p> 
          </div> 
      </div> 
  </body> 
</html>