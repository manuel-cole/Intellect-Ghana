// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
<?php
session_start();
if(!session_is_registered(myusername)){
header("location:localhost/c2/signin_up.html");
}
?>

<html>
<body>
Login Successful
</body>
</html>