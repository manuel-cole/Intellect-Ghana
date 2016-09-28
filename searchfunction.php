<?php 
ob_start();
session_start();

$con=mysqli_connect("localhost","233apps","233apps","car_sales");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$vehicles = "vehicles";

2	  if(isset($_POST['vehicles'])){ 
3	  //do  something here in code 
4	  } 
5	  else{ 
6	  echo  "<p>Please enter a search query</p>"; 
7	  } 
8	?> 



<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd"> 
2	<html> 
3	  <head> 
4	    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 
5	    <title>Search  Contacts</title> 
6	  </head> 
7	  <p><body> 
8	    <h3>Search  Contacts Details</h3> 
9	    <p>You  may search either by first or last name</p> 
10	    <form  method="post" action="search.php?go"  id="searchform"> 
11	      <input  type="text" name="name"> 
12	      <input  type="submit" name="submit" value="Search"> 
13	    </form> 
14	  </body> 
15	</html> 
16	</p> 