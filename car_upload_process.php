<?php
ob_start();
session_start();
if(isset($_POST['upload'])){
$con=mysqli_connect("localhost","root","myspace4199","car_sales");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$car_uploads = "car_uploads";

// escape variables for security

$car_type = mysqli_real_escape_string($con, $_POST['car_type']);
//$company = mysqli_real_escape_string($con, $_POST['company']);
$car_year = mysqli_real_escape_string($con, $_POST['car_year']);
$car_trim = mysqli_real_escape_string($con, $_POST['car_trim']);
$car_km = mysqli_real_escape_string($con, $_POST['car_km']);
$exterior_colour = mysqli_real_escape_string($con, $_POST['exterior_colour']);
$car_options = mysqli_real_escape_string($con, $_POST['car_options']);
$car_cost = mysqli_real_escape_string($con, $_POST['car_cost']);
$cash_deposite = mysqli_real_escape_string($con, $_POST['cash_deposite']);
$fileToUpload = mysqli_real_escape_string($con, $_POST['fileToUpload']);
$fileToUpload2 = mysqli_real_escape_string($con, $_POST['fileToUpload2']);
$fileToUpload3 = mysqli_real_escape_string($con, $_POST['fileToUpload3']);
$fileToUpload4 = mysqli_real_escape_string($con, $_POST['fileToUpload4']);
$fileToUpload5 = mysqli_real_escape_string($con, $_POST['fileToUpload5']);
$fileToUpload6 = mysqli_real_escape_string($con, $_POST['fileToUpload6']);
$fileToUpload7 = mysqli_real_escape_string($con, $_POST['fileToUpload7']);
$fileToUpload8 = mysqli_real_escape_string($con, $_POST['fileToUpload8']);



$sql = " INSERT INTO car_uploads( car_type, car_year, car_trim, car_km, exterior_colour, car_options, car_cost, cash_deposite, fileToUpload, fileToUpload2, fileToUpload3, fileToUpload4, fileToUpload5, fileToUpload6, fileToUpload7, fileToUpload8 )
VALUES ( '$car_type','$car_year', '$car_trim', '$car_km', '$exterior_colour', '$car_options', '$car_cost', '$cash_deposite', '$fileToUpload', 'fileToUpload2', 'fileToUpload3', 'fileToUpload4', 'fileToUpload5', 'fileToUpload6', 'fileToUpload7', 'fileToUpload8' )";
header('Location: homepage.php');

if (!mysqli_query($con, $sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "";

mysqli_close($con);
}
?>


