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
          <h1>2013 Toyota Matrix</h1>
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
				<li data-target="#carousel-example-generic" data-slide-to="7"></li>
				<li data-target="#carousel-example-generic" data-slide-to="8"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="11"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="12"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="13"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="14"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix1.png" alt="Toyota">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix2.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix3.png" alt="">
                                </div>
				<div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix4.png" alt="">
                                </div>
				<div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix5.png" alt="">
                                </div>
				<div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix6.png" alt="">
                                </div>
				<div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix7.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix8.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix9.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix0.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix11.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix12.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix13.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix14.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2013_toyota_matrix/matrix15.png" alt="">
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
                  <a href="img/2013_toyota_matrix/matrix1.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                  <img src="img/2013_toyota_matrix/matrix1.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
		  
                  <a href="img/2013_toyota_matrix/matrix2.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                      <img src="img/2013_toyota_matrix/matrix2.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
		  
                  <a href="img/2013_toyota_matrix/matrix3.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                      <img src="img/2013_toyota_matrix/matrix3.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
		  
                  <a href="img/2013_toyota_matrix/matrix4.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                      <img src="img/2013_toyota_matrix/matrix4.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
		  
                  <a href="img/2013_toyota_matrix/matrix5.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                      <img src="img/2013_toyota_matrix/matrix5.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
		  
                  <a href="img/2013_toyota_matrix/matrix6.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                      <img src="img/2013_toyota_matrix/matrix6.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
		   
                  <a href="img/2013_toyota_matrix/matrix7.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                  <img src="img/2013_toyota_matrix/matrix7.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
                  
                  <a href="img/2013_toyota_matrix/matrix8.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                  <img src="img/2013_toyota_matrix/matrix8.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
                  
                  <a href="img/2013_toyota_matrix/matrix9.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                  <img src="img/2013_toyota_matrix/matrix9.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
                  
                  <a href="img/2013_toyota_matrix/matrix0.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                  <img src="img/2013_toyota_matrix/matrix0.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
                  
                  <a href="img/2013_toyota_matrix/matrix11.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                  <img src="img/2013_toyota_matrix/matrix11.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
                  
                  <a href="img/2013_toyota_matrix/matrix12.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                  <img src="img/2013_toyota_matrix/matrix12.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
                  
                  <a href="img/2013_toyota_matrix/matrix13.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                  <img src="img/2013_toyota_matrix/matrix13.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
                  
                  <a href="img/2013_toyota_matrix/matrix14.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                  <img src="img/2013_toyota_matrix/matrix14.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>
		   
                  <a href="img/2013_toyota_matrix/matrix15.png" data-lightbox="image-1" data-title="Toyota Matrix 2013 " >
                  <img src="img/2013_toyota_matrix/matrix15.png"  height= "100" width="200" class="img-thumbnail" alt=""></a>

        </div>
		<br>
		<br>
                <div class="col-sm-3"> 
                    <form name="myform" id="form2" class="form-signin" onsubmit="return validateForm()" method='post' action="thankyou.php">
        <h2 class="list-group-item active">Specifications</h2>
            
		<div class="">
                  Car Type:   
        <input type="text" name="car_type" class="form-control  " value="Toyota Matrix" readonly>
        </div>
            
		<div class="">
                    Year: 
        <input type="text" name="year_made" class="form-control  " value="2013" readonly>
		</div>
		<div class="">
                    Trim: 
        <input type="text" name="trim" class="form-control  " value="S" readonly>
		</div>
		<div class="">
                     KM: 
        <input type="text" name="km" class="form-control  " value="23,661" readonly>
		</div>

		<div class="">
                    OPTIONSB(A/T):
				<textarea class="form-control" name="options" rows="1" value="BACK UP CAMERA, AWD" id="comment" readonly> BACK UP CAMERA, AWD</textarea>
            
		</div>
         <div class="">
            Exterior Colour: 
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
                   Quantity of Car To Be Reserved: 
        <input type="text" name="quantity" class="form-control  " placeholder="Enter quantity of car " required>
		</div>
        
        <div class="">
                    Comments:
                    <textarea name="comment" class="form-control  "></textarea>
		</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Reserve Car</button>
      </form>
                </div>
	</div>
	<div class="col-md-4">
    <footer>
        <p>&copy; Intellect Group Limited 2015.</p>
</footer>
</div>

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	    <script src="js/jquery.js"></script>
</body>
  </html>