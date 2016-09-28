<html>
<head>
	<title>User Login Form</title>
</head>
<body>
<h1>User Login </h1>
<?php
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
	if ($result->num_rows == 1) {
		echo "<p>Logged in successfully</p>";
	} else {
		echo "<p>Invalid username/password combination</p>";
		// do stuffs
	}
}
?>		
</body>
</html>