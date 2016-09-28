<?php

session_start();

if(isset($_POST['signin'])){
//connect to database
$mysqli = NEW MySQLi("localhost","root","myspace4199","car_sales");

	// Get the login credentials from user
	$eemail = $_POST['eemail'];
	$district_pass = $_POST['district_pass'];	
	
	// Secure the credentials
	$eemail = $mysqli->real_escape_string($_POST['eemail']);
	$district_pass = $mysqli->real_escape_string($_POST['district_pass']);

	// Check the users input against the DB.
$result = $mysqli->query = ("SELECT COUNT(`eemail`) AS `eemail` FROM `user_signup` WHERE `eemail` = '$eemail' AND `password` = '$district_pass'")or die ("Unable to verify user because " . mysqli_error());
	
	$rows = mysqli_fetch_assoc('eemail');
	
	if ($rows['eemail'] == 1)
	{
		$_SESSION['loggedIn'] = "true";
		header("Location: http://auto.courtesyvending.com/inspection/menu.html");
	}}
	else
	{
		$_SESSION['loggedIn'] = "false";
		echo "<p>Login failed, username or password incorrect.</p>";
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

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.css">
      
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
 
      
<div>  <img src="newlogo.png" alt="" height="100" width="220"></div>
    <nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Intellect Group Limited</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
           <ul class="nav navbar-nav">
             
          </ul>

        </div><!--/.nav-collapse -->
          
          
          <!--<div id="navbar" class="navbar-collapse collapse navbar-right">  
            <button type="submit" class="btn btn-success">Sign in</button>
        </div><!--/.navbar-collapse -->
      </div>
      
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
 
    <br>
    <br>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h3>TOYOTA HIGHLANDER 2012</h3>
            <a href="2012_toyota_highlander.jpg" data-lightbox="image-1" data-title="TOYOTA RAV4 2013" > <img src="2012_toyota_highlander.jpg" alt="TOYOTA HIGHLANDER 2012" height="200" width="280"></a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: Toyota Highlander</td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: Spot</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="#" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
          
        </div>
        <div class="col-md-4">
          <h3>TOYOTA HIGHLANDER 2013</h3>
            <a href="2013_Toyota_Highlander.png" data-lightbox="image-1" data-title="TOYOTA RAV4 2013" >  <img src="2013_Toyota_Highlander.png" alt="TOYOTA HIGHLANDER 2013" height="200" width="320"></a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: Toyota Highlander</td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: Sport</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2013-toyota-highlander.html" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
       </div>
        <div class="col-md-4">
         <h3>TOYOTA HIGHLANDER 2014</h3>
            <a href="2014_toyota_highlander.png" data-lightbox="image-1" data-title="TOYOTA RAV4 2013" >   <img src="2014_toyota_highlander.png" alt="TOYOTA HIGHLANDER 2014" height="200" width="320"> </a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: Toyota Highlander</td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim: limited</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2014-toyota-highlander.html" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
        
    <div class="row">
        
    <div class="col-md-4">
        <h3>TOYOTA RAV4 2012</h3>
        <a href="2012_toyota_Rav4.pngoyota_Rav4.png" data-lightbox="image-1" data-title="TOYOTA RAV4 2013" >   <img src="2012_toyota_Rav4.png" alt="TOYOTA RAV4 2012" height="200" width="320"> </a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: Toyota Rav4</td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: Sport</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2012-toyota-rav4.html" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
    </div>
        
    <div class="col-md-4">
        <h3>TOYOTA RAV4 2013</h3>
        <a href="2013_Toyota_Rav4.png" data-lightbox="image-1" data-title="TOYOTA RAV4 2013" > <img src="2013_Toyota_Rav4.png" alt="TOYOTA RAV4 2013" height="200" width="320"></a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: Toyota Rav4</td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: Sport</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2013-toyota-rav4.html" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
    </div>
        
    <div class="col-md-4">
    <h3>TOYOTA RAV4 2014</h3>
        <a href="toyota-rav4-2014-white.jpg" data-lightbox="image-1" data-title="TOYOTA RAV4 2014" >   <img src="toyota-rav4-2014-white.jpg" alt="TOYOTA RAV4 2014" height="200" width="370"></a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: Toyota Rav4</td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim: UPGRADE PKG</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2014-toyota-rav4.html" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        
    </div>    

    <div class="row">
    <div class="col-md-4">
    <h3>TOYOTA COROLLA 2012</h3>
        <a href="2012_corolla.png" data-lightbox="image-1" data-title="TOYOTA COROLLA 2012" >    <img src="2012_corolla.png" alt="Toyota Corolla 2012" height="200" width="330"> </a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: Toyota Corolla</td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: CE C PACKAGE</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="#" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="col-md-4">
    <h3>TOYOTA COROLLA 2013</h3>
            <a href="2013_toyota_corolla_angularfront.jpg" data-lightbox="image-1" data-title="TOYOTA COROLLA 2013" > <img src="2013_toyota_corolla_angularfront.jpg" alt="Toyota Corolla 2013" height="200" width="300"> </a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: Toyota Corolla</td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: CE</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="#" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="col-md-4">
    <h3>TOYOTA COROLLA 2014</h3>
            <a href="2014_TCS.jpeg.jpg" data-lightbox="image-1" data-title="TOYOTA COROLLA 2014" > <img src="2014_TCS.jpeg" alt="Toyota Corolla 2014" height="200" width="300"></a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: Toyota Corolla</td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim: S</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2014_Toyota_Corolla.html" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>    
        
        
        
    <div class="row">
        <div class="col-md-4">
    <h3>NISSAN ALTIMA 2012</h3>
            <a href="2012_nissan_altima_2_5_winchester_va_99972002429894749.jpg" data-lightbox="image-1" data-title="Nissan Altima 2012" > <img src="2012_nissan_altima_2_5_winchester_va_99972002429894749.jpg" alt="Nissan Altima 2012" height="200" width="350"></a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: Nissan Altima </td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: LE STANDARD PKG</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2012_NISSAN_ALTIMA.html" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="col-md-4">
    <h3>Nissan Altima 2013</h3>
            <a href="2013_Nissan_Altima.png" data-lightbox="image-1" data-title="Nissan Altima 2013" >     <img src="2013_Nissan_Altima.png" alt="Nissan Altima 2013" height="200" width="300"></a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: Nissan Altima</td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: STANDARD PKG</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2013_Nissan_Altima.html" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="col-md-4">
    <h3>HONDA CIVIC-2012</h3>
            <a href="2012_honda_civic_cpe_angularfront.jpg" data-lightbox="image-1" data-title="HONDA CIVIC-2012" >  <img src="2012_honda_civic_cpe_angularfront.jpg" alt="HONDA CIVIC-2012" height="200" width="300"></a>
            <table class="table"> 
            <tbody>
              <tr>
                <td>Name: HONDA CIVIC</td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: STANDARD</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2012_Honda_civic.html" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>    
        
        <div class="row">
            <div class="col-md-4">
    <h3>HONDA CIVIC 2013</h3>
                <a href="2013.png" data-lightbox="image-1" data-title="HONDA CIVIC-2013 " > <img src="2013.png" alt="HONDA CIVIC-2013" height="200" width="320"> </a>
             <table class="table"> 
            <tbody>
              <tr>
                <td>Name: HONDA CIVIC</td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: STANDARD</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2013_Honda_Civic.html" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
            
             <div class="col-md-4">
    <h3>HONDA CIVIC-EX 2014 </h3>
        <a href="2014-Honda-Civic-Sedan-LX-4dr-Sedan-Exterior-2.png" data-lightbox="image-1" data-title="Honda Civic-EX 2014 " >  <img src="2014-Honda-Civic-Sedan-LX-4dr-Sedan-Exterior-2.png"  alt="HONDA CIVIC- EX 2014" height="200" width="350"> </a>
          <table class="table">
            <tbody>
              <tr>
                <td>Name: HONDA CIVIC-EX </td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: STANDARD</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2014 HONDA CIVIC-EX.html" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
            
        </div>
        
      <hr>

      <footer>
        <p>&copy; Intellect Group Limited. 2015</p>
      </footer>
    </div> <!-- /container -->
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>