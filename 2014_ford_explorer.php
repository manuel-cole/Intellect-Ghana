<?php
session_start(); 
$region_name = $_SESSION['region_name'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$mobile_number = $_SESSION['mobile_number'];

if ( isset($_SESSION['region_name']) ) {
    $region_name = $_SESSION['region_name'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $mobile_number = $_SESSION['mobile_number']; 
  
 } else {
     // got a problem, deal with it here
 }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Intel Group</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
	
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="css/shop-homepage.css" rel="stylesheet">
  </head>
  <body><nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="homepage.php">IG Homepage</a>
		  <a class="navbar-brand" href="homepage.php">Vehicles</a></li>
<!--		  <A class="navbar-brand" href="#">Reservations</a></li>
		  <a class="navbar-brand" href="#">Edit Profile</a></li>
    -->    </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form action="signin_up.php" class="navbar-form navbar-right">
			
           <button type="submit" class="btn btn-success">Sign Out</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
      <div class="row">
        <div class="col-md-1">
		</div>
		<div  class="col-md-7">
          <h1>2014 Ford Explorer</h1>
		  <br>
		                    
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				<li data-target="#carousel-example-generic" data-slide-to="5"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
								
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/2014_ford_explorer/ford1.jpeg" alt="Ford">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2014_ford_explorer/ford2.jpeg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2014_ford_explorer/ford3.jpeg" alt="">
                                </div>
				<div class="item">
                                    <img class="slide-image" src="img/2014_ford_explorer/ford4.jpeg" alt="">
                                </div>
				<div class="item">
                                    <img class="slide-image" src="img/2014_ford_explorer/ford5.jpeg" alt="">
                                </div>
				<div class="item">
                                    <img class="slide-image" src="img/2014_ford_explorer/ford6.jpeg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2014_ford_explorer/ford7.jpeg" alt="">
                                </div>
					
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
					
		  <hr>
		  <a href="img/2014_ford_explorer/ford1.jpeg" data-lightbox="image-1" data-title="Ford Explorer 2014 " >
		  <img src="img/2014_ford_explorer/ford1.jpeg"  height= "100" width="200" class="img-thumbnail" alt=""></a>
		  
		  <a href="img/2014_ford_explorer/ford2.jpeg" data-lightbox="image-1" data-title="Ford Explorer 2014 " >
		  <img src="img/2014_ford_explorer/ford2.jpeg"  height= "100" width="200" class="img-thumbnail" alt=""></a>
		  
		  <a href="img/2014_ford_explorer/ford3.jpeg" data-lightbox="image-1" data-title="Ford Explorer 2014" >
		  <img src="img/2014_ford_explorer/ford3.jpeg"  height= "100" width="200" class="img-thumbnail" alt=""></a>
		  
		  <a href="img/2014_ford_explorer/ford4.jpeg" data-lightbox="image-1" data-title="Ford Explorer 2014 " >
		  <img src="img/2014_ford_explorer/ford4.jpeg"  height= "100" width="200" class="img-thumbnail" alt=""></a>
		  
		  <a href="img/2014_ford_explorer/ford5.jpeg" data-lightbox="image-1" data-title="Ford Explorer 2014" >
		  <img src="img/2014_ford_explorer/ford5.jpeg"  height= "100" width="200" class="img-thumbnail" alt=""></a>

                  <a href="img/2014_ford_explorer/ford6.jpeg" data-lightbox="image-1" data-title="Ford Explorer 2014" >
		  <img src="img/2014_ford_explorer/ford6.jpeg"  height= "100" width="200" class="img-thumbnail" alt=""></a>
                  
                  <a href="img/2014_ford_explorer/ford7.jpeg" data-lightbox="image-1" data-title="Ford Explorer 2014" >
		  <img src="img/2014_ford_explorer/ford7.jpeg"  height= "100" width="200" class="img-thumbnail" alt=""></a>

                  
        </div>
		<br>
		<br>
	<div class="col-sm-3">
			 <form name="myform" id="form2" class="form-signin" onsubmit="return validateForm()" method='post' action="thankyou.php">
        <h2 class="list-group-item active">Specifications</h2>
            
		<div class="">
       Car type:   <input type="text" name="car_type" class="form-control  " value="Ford Explorer" readonly>
        </div>
            
		<div class="">
         Year: <input type="text" name="year_made" class="form-control  " value="2014" readonly>
		</div>
		<div class="">
        Trim:  <input type="text" name="trim" class="form-control  " value="" readonly>
		</div>
		<div class="">
        KM:  <input type="text" name="km" class="form-control  " value="" readonly>
		</div>

		<div class="">
 Options(A/T):   <textarea class="form-control" name="options" rows="1" value="" id="comment" readonly></textarea>
            
		</div>
        <div class="">
       Exterior colour:   
<select class="form-control" name="exterior_colour" id="exterior_colour" required >
            <option value="">Select your car color</option>
			<option value="AliceBlue ">AliceBlue </option>
			<option value="Black" >Black</option>
			<option value="Blue" >Blue</option>
			<option value="BlueViolet" >BlueViolet</option>
			<option value="Brown" >Brown</option>
			<option value="CadetBlue" >CadetBlue</option>
			<option value="Chocolate" >Chocolate</option>
			<option value="CornflowerBlue" >CornflowerBlue</option>
			<option value="DarkBlue" >DarkBlue</option>
			<option value="DarkCyan" >DarkCyan</option>
			<option value="DarkGray" >DarkGray</option>
			<option value="DarkGreen" >DarkGreen</option>
			<option value="DarkKhaki" >DarkKhaki</option>
			<option value="DarkRed" >DarkRed</option>
			<option value="DeepSkyBlue" >DeepSkyBlue</option>
			<option value="DimGray" >DimGray</option>
			<option value="FireBrick" >FireBrick</option>
			<option value="Gray" >Gray</option>
			<option value="Indigo" >Indigo</option>
			<option value="LightBlue" >LightBlue</option>
			<option value="MediumBlue" >MediumBlue</option>
			<option value="MidnightBlue" >MidnightBlue</option>
			<option value="Orange" >Orange</option>
			<option value="OrangeRed" >OrangeRed</option>
			<option value="Red" >Red</option>
			<option value="RoyalBlue" >RoyalBlue</option>
			<option value="SaddleBrown" >SaddleBrown</option>
			<option value="SeaGreen" >SeaGreen</option>
			<option value="Silver" >Silver</option>
			<option value="Violet" >Violet</option>
			<option value="Wheat" >Wheat</option>
			<option value="White" >White</option>
			<option value="Yellow" >Yellow</option>
        </select>        </div>
        
		<div class="">
         Quantity of Car To Be Reserved:<input type="text" name="quantity" class="form-control  " placeholder="Enter quantity of car " required>
		</div>
       
        <div class="">
            Comments: <textarea name="comment" class="form-control" ></textarea>  
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Reserve Car</button>
      </form>
        </div>
	</div>
<div class="row">
<div class="col-md-1">
    
</div>
    
    <div class="col-md-4">
    <footer>
        <p>&copy; Intellect Group Limited 2015.</p>
</footer>
</div>

</div>
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	    <script src="js/jquery.js"></script>
</body>
  <html>