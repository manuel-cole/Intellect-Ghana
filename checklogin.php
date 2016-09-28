<?php
ob_start();
session_start();
if(isset($_POST['signin'])){
$email = $_POST['eemail'];
$password = $_POST['district_pass'];

//$access_level = $_POST['access_level'];
     
$conn = mysqli_connect('localhost', 'root', 'myspace4199', 'car_sales');
     
$email = mysqli_real_escape_string($conn, $email);
//$access_level = mysqli_real_escape_string($conn, $access_level);
$query = "SELECT *
FROM user_signup
WHERE eemail = '$email';";




     
$result = mysqli_query($conn, $query);
     
if(mysqli_num_rows($result) == 0) // User not found. So, redirect to login_form again.
{
	?>
		<script type="text/javascript">
			alert("The email address or password is invalid.");
			history.back();
		</script>
	<?php
}
    $_SESSION['region_name'] = $region_name;
$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['mobile_number'] = $mobile_number;
$_SESSION['agency'] = $agency;

$userData = mysqli_fetch_array($result, MYSQL_ASSOC);

$_SESSION['region_name'] = $region_name = $userData['region_name'];
$_SESSION['fname'] = $fname = $userData['fname'];
$_SESSION['lname'] = $lname = $userData['lname'];
$_SESSION['mobile_number'] = $mobile_number = $userData['mobile_number'];
$_SESSION['agency'] = $agency = $userData['agency'];

//Check to see if user is an employee or just a member
$generaluserCheck = mysqli_query($conn, "SELECT * FROM user_signup WHERE (eemail = '$email') AND (access_level = 'general_user')");
$ministryheadCheck = mysqli_query($conn, "SELECT * FROM user_signup WHERE (eemail = '$email') AND (access_level = 'ministry_head')");
$regionalheadCheck = mysqli_query($conn, "SELECT * FROM user_signup WHERE (eemail = '$email') AND (access_level = 'regional_head')");
$carcompanyCheck = mysqli_query($conn, "SELECT * FROM user_signup WHERE (eemail = '$email') AND (access_level = 'car_company')");
$adminCheck = mysqli_query($conn, "SELECT * FROM user_signup WHERE (eemail = '$email') AND (access_level = 'admin')");
 
if($password == $userData['district_pass'] && mysqli_num_rows($generaluserCheck) == 1) // Incorrect password. So, redirect to login_form again.
{
$_SESSION['region_name'] = $region_name;
$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['mobile_number'] = $mobile_number;
$_SESSION['agency'] = $agency;
	header('Location: homepage.php');
}
	
else if($password == $userData['district_pass'] && mysqli_num_rows($ministryheadCheck) == 1){
	header('Location: ministry_head_page.php');
}
else if($password == $userData['district_pass'] && mysqli_num_rows($regionalheadCheck) == 1){
	header('Location: regional_head_page.php');
     //header('Location: regional_head_page.php?region_name='.$region_name);
}
else if($password == $userData['district_pass'] && mysqli_num_rows($carcompanyCheck) == 1){
	header('Location: car_company_page.php');
}	
else if($password == $userData['district_pass'] && mysqli_num_rows($adminCheck) == 1){
	header('Location: adminHome.php');
}
else {
		?>
		<script type="text/javascript">
			alert("The email address or password is invalid.");
			history.back();
		</script>
	<?php
}
}
?>
