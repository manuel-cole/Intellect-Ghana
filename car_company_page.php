<?php 

$con=mysqli_connect("localhost","root","myspace4199","car_sales");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM confirmed_reservation";

$records=mysqli_query($con,$sql);

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

    <title>Intellect Group Ltd.</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.css">
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

   
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
 <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
	<script>

</script>
    <style>
    .container1{
	padding-left: 40px;
        padding-right: 40px;
	float: left;      
 }
 </style>
 <script>
$(document).ready(function() {
    $('#myModal').on('hidden.bs.modal', function () {
        $(this).removeData('bs.modal');
    });
 $('#myModal').click(function(){
        $('#myModal').modal({backdrop: 'static'});
    });
});
</script>
  </head>

  <body>
      
<div><nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">IG Homepage</a>
		</div>
		 <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
	<li class="dropdown">
              <a href="#" class="navbar-brand dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><font color="#FFFFFF">Reservation <span class="caret"></span></font></a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="general_reservation.php">General Reservation</a></li>
                  <li><a href="approved_reservation.php">Approved Reservation</a></li>
              </ul>
        </li>
        <li><a class="navbar-brand" href="displaySuppliedCars.php"><font color="#FFFFFF">Supplied Cars</font></a></li>
        <li><a class="navbar-brand" href="regional_reports.php"><font color="#FFFFFF">Reports</font></a></li>
    </ul>
          <form action="signin_up.php" class="navbar-form navbar-right">
           <a href="signin_up.php" target="_top" type="submit" class="btn btn-success">Sign Out</a>
          </form>
       
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <br>
    <br>
    <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="insertIntoSupplied.php" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
    <th style="width: 50px;"></th>
    <th style="color: #3b3b3b;">Car Type</th> 
    <th style="color: #3b3b3b;">Trim</th>
    <th style="color: #3b3b3b;">Year made</th> 
    <th style="color: #3b3b3b;">km</th>
    <th style="color: #3b3b3b;">Exterior Colour</th>
    <th style="color: #3b3b3b;">Options</th>
    <th style="color: #3b3b3b;">Quantity Of Car(s) Reserved </th>
    <th style="color: #3b3b3b;">Time</th>
    <th style="color: #3b3b3b;">Comments </th>  
    <th style="color: #3b3b3b;">Car Reserver</th>  
    
        </tr>
        </thead>
<tbody>       
    <?php
    $result = mysqli_query($con, "SELECT * FROM confirmed_reservation") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);
echo "<b><center><h3>Cars Confirmed by Ministry Head</h3></center></b><br><br>";

while($row=mysqli_fetch_array($result)){
    $confirm_id = $row['confirm_id'];
    ?>
    <tr>
	
         <td><center><input type="checkbox" name="check[<?php echo $row['confirm_id'];?>]" value="1" ></center> </td>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style="width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px" type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><p><strong>Name: </strong><?php echo $row['fname']?> <?php echo $row['lname']?></p>
                <a data-toggle="modal" href="confirm-profile.php?id=<?php echo $confirm_id;?>" data-target="#myModal" class="btn btn-link">Reserver's Profile</a></td>

      </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 
<!--Bootstrap Modal-->
<div class="modal fade" id="myModal">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <strong>Loading...</strong>
        </div>
    </div>
</div>

         <button type="submit" class="btn btn-hg btn-primary">Supplied</button>

      </form>
        </div>
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



