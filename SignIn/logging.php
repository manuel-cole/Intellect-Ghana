<html>
<head>
	<title>User Login Form</title>
</head>
<body>
<h1>User Login Form</h1>
<?php
 ob_start();
    session_start();
if (!isset($_POST['submit'])){
?>
<!-- The HTML login form -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		Username: <input type="text" name="eemail" /><br />
		Password: <input type="password" name="district_pass" /><br />

		<input type="submit" name="submit" value="Login" />
	</form>
<?php
} else {
	$mysqli = new mysqli("localhost", "root", "myspace4199", "car_sales");
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}

	$eemail = $_POST['eemail'];
	$district_pass = $_POST['district_pass'];

	$sql = "SELECT * from user_signup WHERE eemail LIKE '{$eemail}' AND district_pass LIKE '{$district_pass}' LIMIT 1";
	$result = $mysqli->query($sql);
	 if (!$result->num_rows == 1) {
		echo "<p>Invalid username/password combination</p>";
	} else {
	session_regenerate_id();
    $_SESSION['sess_user_id'] = $userData['user_id'];
    $_SESSION['sess_eemail'] = $userData['eemail'];
    session_write_close();
    header('Location: index.html');
		echo "<p>Logged in successfully</p>";
		// do stuffs
	}
}
?>		
</body>
</html>