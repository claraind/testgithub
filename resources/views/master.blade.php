
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MargoFoodies | Restoran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="/margofoodies/public/css/mystyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">

   			 <div class="navbar-header">
     			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       				<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
      			 </button>
      			 <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive" alt="MargoFoodies" ></a>
   			 </div>

   			 <div class="collapse navbar-collapse" id="myNavbar">
      			<ul class="nav navbar-nav navbar-right">
        			<li><a href = "#myModal1" data-toggle="modal"  data-target="#myModal1"><span class="glyphicon glyphicon-user" ></span> Daftar</a></li>
        			<li><a data-toggle="modal"  data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
				</ul>
			 </div>

			 <!-- Modal content 1-->
   			 <div class="modal fade" id="myModal1" role="dialog">
    			<div class="modal-dialog">

      			<!-- Modal content 1-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
          					<h4 class="modal-title" >Daftar</h4>
       					</div>
        				<div class="modal-body">
							<form class="form-horizontal" role="form">
    						<div class="form-group">
     						 	<label class="control-label col-sm-2" for="email">Email:</label>
      							<div class="col-sm-10">
       							 	<input type="email" class="form-control" id="email" placeholder="Enter email">
      							</div>
    						</div>

    						<div class="form-group">
      							<label class="control-label col-sm-2" for="pwd">Password:</label>
      							<div class="col-sm-10">          
        							<input type="password" class="form-control" id="pwd" placeholder="Enter password">
      							</div>
    						</div>
    					
    						<div class="form-group">        
      							<div class="col-sm-offset-2 col-sm-10">
        							<div class="checkbox">
          								<label><input type="checkbox"> Remember me</label>
        							</div>
      							</div>
    						</div>

    						<div class="form-group">        
     							 <div class="col-sm-offset-2 col-sm-10">
      								 <button type="submit" class="btn btn-default">Submit</button>
      							 </div>
    						</div>
  							</form>
        				</div>
        				<div class="modal-footer">
         					<button type="button" class="btn btn-default" data-dismiss="modal">Daftar</button>
       					</div>
      				</div>
      
    			</div>
  			</div>
  
			<!-- Modal content 2-->
   			<div class="modal fade" id="myModal2" role="dialog">
    			<div class="modal-dialog">

      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
          					<h4 class="modal-title" >Masuk</h4>
        				</div>

        				<div class="modal-body">
							<form role="form">
								<div class="form-group">
									<label for="email">Username:</label>
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" id="pwd" placeholder="Enter password">
								</div>
		
							</form>
        				</div>
        				<div class="modal-footer">
          					<button type="button" class="btn btn-default" data-dismiss="modal">Masuk</button>
        				</div>
     				 </div>
      
    			</div>
  			</div>

  			 <div class="container" id="search">
				<div class="row">
        			<div class="col-sm-3 col-sm-offset-10">       
            			<div class="input-group stylish-input-group">
			                <input type="text" class="form-control"  placeholder="Search" >
			                <span class="input-group-addon">
			                    <button type="submit">
			                        <span class="glyphicon glyphicon-search"></span>
			                    </button> 
			                </span>                
			            </div>
        			</div>	
				</div>
			 </div>

  		</div>
	</nav>


  @yield('contents')

</body>
</html>
      