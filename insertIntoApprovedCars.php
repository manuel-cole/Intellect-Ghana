<?php
ob_start();
session_start();

$con=mysqli_connect("localhost","root","myspace4199","car_sales");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//$disapproved_reservation = "disapproved_reservation";
$general_reservation = "general_reservation";

// escape variables for security



$car_type = $_POST['car_type'];
//$company = mysqli_real_escape_string($con, $_POST['company']);
$trim = $_POST['trim'];
$comment = $_POST['comment'];
$year_made = $_POST['year_made'];
$exterior_colour = $_POST['exterior_colour'];
$options = $_POST['options'];
$km = $_POST['km'];
$quantity = $_POST['quantity'];


$result=mysqli_query($con, "SELECT * from general_reservation");
$count=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)) {
		
	$reservation_id=$row['reservation_id'];

	if (array_key_exists($reservation_id, $_POST["check"])) {
		$ischecked=$_POST["check"][$reservation_id];
		/* See if this has a value of 1.  If it does, it means it has been checked */
		if ($ischecked==1) {
			/* It is checked, so now in this area you can finish the code to retrieve the data from the row and save it however you like 
			$sql="INSERT INTO disapproved_reservation(car_type, trim, cost_after_duty, year_made, exterior_colour, options, km, reserver)
			VALUES ( '$car_type', '$trim', '$cost_after_duty', '$year_made', '$exterior_colour', '$options', '$km', '$reserver' )";**/
			//$sql = "INSERT IGNORE INTO disapproved_reservation SELECT reservation_id, cost_after_duty, car_type, trim, year_made, exterior_colour, options, km, reserver FROM general_reservation";
			$sql = "INSERT INTO approved_reservation (approved_id, comment, car_type, trim, year_made, exterior_colour, options, km, region_name,quantity, fname, lname, mobile_number, agency)
					SELECT reservation_id, comment, car_type, trim, year_made, exterior_colour, options, km, region_name,quantity, fname, lname, mobile_number, agency
					FROM general_reservation 
					WHERE reservation_id = $reservation_id";
			$sql2 = "DELETE FROM general_reservation 
					WHERE reservation_id = $reservation_id";


			if (!mysqli_query($con,$sql)) {

				die('Error: ' . mysqli_error($con));
			}
			else if (!mysqli_query($con,$sql2)){
				
				die('Error: ' . mysqli_error($con));					
				
				}
			echo "1 record added";
		}
	}
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

    <title>Intellect Group</title>

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
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <img src="newlogo.png" alt="" height="100" width="120">

        </div>
       <div id="navbar" class="navbar-collapse collapse">
          <form action="signin_up.php" class="navbar-form navbar-right">
			
           <button type="submit" class="btn btn-success">Sign Out</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav> 

    <!-- Main jumbotron for a primary marketing message or call to action -->
 
    <br><br><br><br>
    <br>
    <div class="container">
      <!-- Example row of columns -->
 <div class="row">
        <div class="">     
            <h2> <center>Car Reservation Approved Successfully.</center></h2>
       <br>  
       <h4><center>Click <a href="regional_head_page.php">Here</a> to go back.</center></h4>
        </div>
        </div>
        
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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