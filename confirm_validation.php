<?php
ob_start();
session_start();
if(isset($_POST['signup'])){
$region_name = $_POST['region_name']; 
$fname = $_POST['fname']; 
$lname = $_POST['lname'];
$mobile_number = $_POST['mobile_number'];
$agency = $_POST['agency'];
$con=mysqli_connect("localhost","root","myspace4199","car_sales");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$user_signup = "user_signup";

// escape variables for security

$fname = mysqli_real_escape_string($con, $_POST['fname']);
//$company = mysqli_real_escape_string($con, $_POST['company']);
$mname = mysqli_real_escape_string($con, $_POST['mname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$access_level = mysqli_real_escape_string($con, $_POST['access_level']);
$mobile_number = mysqli_real_escape_string($con, $_POST['mobile_number']);
$region_name = mysqli_real_escape_string($con, $_POST['region_name']);
$district_name = mysqli_real_escape_string($con, $_POST['district_name']);
$agency = mysqli_real_escape_string($con, $_POST['agency']);
$district_pass = mysqli_real_escape_string($con, $_POST['district_pass']);
$pass_con = mysqli_real_escape_string($con, $_POST['pass_con']);

$eemail = mysqli_real_escape_string($con, $_POST['eemail']);

// checks if the email address is alredy registered
$emailcheck = $_POST['eemail'];
$check = mysqli_query($con, "SELECT eemail FROM $user_signup WHERE eemail = '$emailcheck'") or
die(mysqli_error($con));
$check2 = mysqli_num_rows($check);

//if the name exists it gives an error
if ($check2 != 0) 
{
	?>
		<script type="text/javascript">
			alert("The email address <?php echo $_POST['eemail']; ?> is already registered.");
			history.back();
		</script>
	<?php
}
$_SESSION['region_name'] = $region_name;
$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['mobile_number'] = $mobile_number;
$_SESSION['agency'] = $agency;
/**Hashes the password, so that you dont see the user 

$district_pass = sha1('district_pass');
$pass_con = sha1('pass_con');
**/
//Check if username exists
//$userExistsSql = mysqli_query($con, "SELECT * FROM user_signup WHERE (eemail = '$eemail')") or die(mysqli_error($con));

    
   // if(mysqli_num_rows($userExistsSql) == 0){ //if user doesn't already exist
		//if ($district_pass == $pass_con) { //if passwords match
            //SQL Statements to insert user to databases
			
			//$sql="INSERT INTO user_signup (eemail,mobile_number,fname,mname,lname,access_level,region_name,district_name,agency,district_pass,pass_con) 
			//VALUES ('$eemail','$mobile_number','$fname','$mname','$lname','$access_level','$region_name','$district_name','$agency','$district_pass','$pass_con')";
           
		   //If user is a ministry head
			if($access_level == 'ministry_head'){
				$sql="INSERT INTO user_signup (eemail,mobile_number,fname,mname,lname,access_level,region_name,district_name,agency,district_pass,pass_con) VALUES ('$eemail','$mobile_number','$fname','$mname','$lname','$access_level','$region_name','$district_name','$agency','$district_pass','$pass_con')";
				$_SESSION['eemail'] = $eemail;
				header('Location: ministry_head_page.php');
			}
			//If user is a regional head
			else if($access_level == 'regional_head'){
				$sql="INSERT INTO user_signup (eemail,mobile_number,fname,mname,lname,access_level,region_name,district_name,agency,district_pass,pass_con) VALUES ('$eemail','$mobile_number','$fname','$mname','$lname','$access_level','$region_name','$district_name','$agency','$district_pass','$pass_con')";
				$_SESSION['eemail'] = $eemail; 
				header('Location: regional_head_page.php');
			}
			//if user is general user
			else if($access_level == 'general_user'){
				$sql="INSERT INTO user_signup (eemail,mobile_number,fname,mname,lname,access_level,region_name,district_name,agency,district_pass,pass_con) VALUES ('$eemail','$mobile_number','$fname','$mname','$lname','$access_level','$region_name','$district_name','$agency','$district_pass','$pass_con')";
                                $_SESSION['eemail'] = $eemail;
                                header('Location: homepage.php');
			}
			//if user is car company
			else if ($access_level == 'car_company'){
				$sql="INSERT INTO user_signup (eemail,mobile_number,fname,mname,lname,access_level,region_name,district_name,agency,district_pass,pass_con) VALUES ('$eemail','$mobile_number','$fname','$mname','$lname','$access_level','$region_name','$district_name','$agency','$district_pass','$pass_con')";
                                $_SESSION['eemail'] = $eemail;
                                header('Location: car_company_page.php');
			}
	    
     // }

       // else
             //echo "Passwords didn't match";
    //} 
    ////else
        //echo "User already exists";	  

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

echo "";

mysqli_close($con);
}
?>