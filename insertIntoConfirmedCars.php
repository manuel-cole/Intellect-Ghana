<?php
ob_start();
session_start();

$con=mysqli_connect("localhost","root","myspace4199","car_sales");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//$disapproved_reservation = "disapproved_reservation";
$approved_reservation = "approved_reservation";

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


$result=mysqli_query($con, "SELECT * from approved_reservation");
$count=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)) {
		
	$approved_id=$row['approved_id'];

	if (array_key_exists($approved_id, $_POST["check"])) {
		$ischecked=$_POST["check"][$approved_id];
		/* See if this has a value of 1.  If it does, it means it has been checked */
		if ($ischecked==1) {
			/* It is checked, so now in this area you can finish the code to retrieve the data from the row and save it however you like 
			$sql="INSERT INTO disapproved_reservation(car_type, trim, cost_after_duty, year_made, exterior_colour, options, km, reserver)
			VALUES ( '$car_type', '$trim', '$cost_after_duty', '$year_made', '$exterior_colour', '$options', '$km', '$reserver' )";**/
			//$sql = "INSERT IGNORE INTO disapproved_reservation SELECT reservation_id, cost_after_duty, car_type, trim, year_made, exterior_colour, options, km, reserver FROM general_reservation";
			$sql = "INSERT INTO confirmed_reservation (confirm_id, comment, car_type, trim, year_made, exterior_colour, options, km, quantity, fname, lname, mobile_number, agency)
					SELECT approved_id, comment, car_type, trim, year_made, exterior_colour, options, km, quantity, fname, lname, mobile_number,agency
					FROM approved_reservation 
					WHERE approved_id = $approved_id";
			$sql2 = "DELETE FROM approved_reservation 
					WHERE approved_id = $approved_id";


			if (!mysqli_query($con,$sql)) {

				die('Error: ' . mysqli_error($con));
			}
			else if (!mysqli_query($con,$sql2)){
				
				die('Error: ' . mysqli_error($con));					
				
				}
			echo "";
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

    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.css">
    <link href="jumbotron.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <br><br><br>
    <br>
    <div class="container">
      <!-- Example row of columns -->
 <div class="row">
        <div class="">     
            <center><h2> Car Reservation Confirmed Successfully..</h2></center>
       <br>  
       <h4><center>Click <a target="_top" href="ministry_head_page.php">Here</a> to go back.</center></h4>
        </div>
        </div>
        
    </div> <!-- /container -->
  </body>
</html>