 <?php
ob_start();
session_start();

if ( isset($_SESSION['region_name']) ) {
    $region_name = $_SESSION['region_name'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $mobile_number = $_SESSION['mobile_number']; 
    $agency = $_SESSION['agency'];
    
 } else {
     // got a problem, deal with it here
 }
 
$con=mysqli_connect("localhost","root","myspace4199","car_sales");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$general_reservation = "general_reservation";

// escape variables for security

$car_type = mysqli_real_escape_string($con, $_POST['car_type']);
//$company = mysqli_real_escape_string($con, $_POST['company']);
$year_made = mysqli_real_escape_string($con, $_POST['year_made']);
$trim = mysqli_real_escape_string($con, $_POST['trim']);
$km = mysqli_real_escape_string($con, $_POST['km']);
$exterior_colour = mysqli_real_escape_string($con, $_POST['exterior_colour']);
$options = mysqli_real_escape_string($con, $_POST['options']);
$comment = mysqli_real_escape_string($con, $_POST['comment']);
//$region_name = mysqli_real_escape_string($con, $_POST['region_name']);
$quantity = mysqli_real_escape_string($con, $_POST['quantity']);
//$reserver = mysqli_real_escape_string($con, $_POST['reserver']);


$sql1 = " INSERT INTO general_reservation(car_type, year_made, trim, km, exterior_colour, options, comment, region_name, quantity, fname, lname, mobile_number,agency )
VALUES ('$car_type','$year_made', '$trim', '$km', '$exterior_colour', '$options', '$comment', '$region_name', '$quantity', '$fname', '$lname', '$mobile_number', '$agency' )";

$sql2 = " INSERT INTO reservation(car_type, year_made, trim, km, exterior_colour, options, comment, region_name, quantity, fname, lname, mobile_number,agency )
VALUES ('$car_type','$year_made', '$trim', '$km', '$exterior_colour', '$options', '$comment', '$region_name', '$quantity', '$fname', '$lname', '$mobile_number', '$agency')";

if (!mysqli_query($con, $sql1)) {
  die('Error: ' . mysqli_error($con));
}
echo "";
if (!mysqli_query($con, $sql2)) {
  die('Error: ' . mysqli_error($con));
}
echo "";

mysqli_close($con);
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
    <nav class="navbar navbar-inverse navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="homepage.php">Intellect Group Limited</a>
        <!-- <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
			Name of Person
            <button type="submit" class="btn btn-success">Sign Out</button>
          </form>
        </div> -->
          <!--/.navbar-collapse -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form action="signin_up.php" class="navbar-form navbar-right">
			
           <button type="submit" class="btn btn-success">Sign Out</button>
          </form>
        </div><!--/.nav-collapse -->
      </div> 
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
 
    <br><br><br>
    <br>
    <div class="container">
      <!-- Example row of columns -->
 <div class="row">
             
            <h2><center> Reservation was made successfully. Thank you.</center></h2>
            <br>
            <h4><center>Click <a href="homepage.php"><u>here</u></a> to go back.</center></h4>
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
