<?php 
if(isset($_GET['agency'])){
    $agency = $_GET['agency'];  
}
$con=mysqli_connect("localhost","root","myspace4199","car_sales");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM approved_reservation WHERE agency = '$agency' ";

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
    <link rel="stylesheet" type="text/css" href="css/style.css" />  
    <!-- Custom styles for this template -->
   
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
 <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
	<script>

</script>
    <style>
    .container1{
	padding-left: 5px;
        padding-right: 90px;
	float: left;      
 }
 </style>
 <script>
$( document ).ready(function() {
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
 
    <?php echo "<b><center><h3>Aproved Reservations From $agency</h3></center></b><br>";
?>
 
    <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="btn-group-vertical btn-block">
                <h4 class="panel-title ">
                    <center><a style="width: 1133px" class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Greater Accra Region</a></center>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    
    <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
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
    $result = mysqli_query($con, "SELECT * FROM approved_reservation WHERE agency = '$agency' AND region_name = 'Greater Accra Region' ") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);

while($row=mysqli_fetch_array($result)){
    $approved_id = $row['approved_id'];
    ?>
    <tr>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px" type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><p><strong>Name: </strong><?php echo $row['fname']?> <?php echo $row['lname']?></p>
            <a  data-toggle="modal" href="approve-profile.php?id=<?php echo $approved_id;?>" data-target="#myModal" class="btn btn-link">Reserver's Profile</a></td>

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
      </form>
        </div>
    </div>               
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="btn-group-vertical btn-block">
                <h4 class="panel-title">
                    <center><a style="width: 1133px" class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Eastern Region</a></center>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
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
    $result = mysqli_query($con, "SELECT * FROM approved_reservation WHERE agency = '$agency' AND region_name = 'Eastern Region' ") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);

while($row=mysqli_fetch_array($result)){
    $approved_id = $row['approved_id'];
    ?>
    <tr>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px" type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><p><strong>Name: </strong><?php echo $row['fname']?> <?php echo $row['lname']?></p>
            <a  data-toggle="modal" href="approve-profile.php?id=<?php echo $approved_id;?>" data-target="#myModal1" class="btn btn-link">Reserver's Profile</a></td>

      </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 
<!--Bootstrap Modal-->
<div class="modal fade" id="myModal1">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <strong>Loading...</strong>
        </div>
    </div>
</div>
      </form>
        </div>
    </div>    
                    
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="btn-group-vertical btn-block">
                <h4 class="panel-title">
                    <center><a style="width: 1133px" class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Western Region</a></center>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                   <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
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
    $result = mysqli_query($con, "SELECT * FROM approved_reservation WHERE agency = '$agency' AND region_name = 'Western Region' ") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);

while($row=mysqli_fetch_array($result)){
    $approved_id = $row['approved_id'];
    ?>
    <tr>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px" type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><p><strong>Name: </strong><?php echo $row['fname']?> <?php echo $row['lname']?></p>
            <a  data-toggle="modal" href="approve-profile.php?id=<?php echo $approved_id;?>" data-target="#myModal2" class="btn btn-link">Reserver's Profile</a></td>

      </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 
<!--Bootstrap Modal-->
<div class="modal fade" id="myModal2">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <strong>Loading...</strong>
        </div>
    </div>
</div>
      </form>
        </div>
    </div>  
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="btn-group-vertical btn-block">
                <h4 class="panel-title">
                    <center><a style="width: 1133px" class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapse4">Central Region</a></center>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
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
    $result = mysqli_query($con, "SELECT * FROM approved_reservation WHERE agency = '$agency' AND region_name = 'Central Region' ") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);

while($row=mysqli_fetch_array($result)){
    $approved_id = $row['approved_id'];
    ?>
    <tr>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px" type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><p><strong>Name: </strong><?php echo $row['fname']?> <?php echo $row['lname']?></p>
            <a  data-toggle="modal" href="approve-profile.php?id=<?php echo $approved_id;?>" data-target="#myModal3" class="btn btn-link">Reserver's Profile</a></td>

      </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 
<!--Bootstrap Modal-->
<div class="modal fade" id="myModal3">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <strong>Loading...</strong>
        </div>
    </div>
</div>
      </form>
        </div>
    </div>  
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="btn-group-vertical btn-block">
                <h4 class="panel-title">
                    <center><a style="width: 1133px" class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapse5">Ashanti Region</a></center>
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
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
    $result = mysqli_query($con, "SELECT * FROM approved_reservation WHERE agency = '$agency' AND region_name = 'Ashanti Region' ") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);

while($row=mysqli_fetch_array($result)){
    $approved_id = $row['approved_id'];
    ?>
    <tr>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px" type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><p><strong>Name: </strong><?php echo $row['fname']?> <?php echo $row['lname']?></p>
            <a  data-toggle="modal" href="approve-profile.php?id=<?php echo $approved_id;?>" data-target="#myModal4" class="btn btn-link">Reserver's Profile</a></td>

      </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 
<!--Bootstrap Modal-->
<div class="modal fade" id="myModal4">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <strong>Loading...</strong>
        </div>
    </div>
</div>
      </form>
        </div>
    </div>  
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="btn-group-vertical btn-block">
                <h4 class="panel-title">
                    <center><a style="width: 1133px" class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapse6">Volta Region</a></center>
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
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
    $result = mysqli_query($con, "SELECT * FROM approved_reservation WHERE agency = '$agency' AND region_name = 'Volta Region' ") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);

while($row=mysqli_fetch_array($result)){
    $approved_id = $row['approved_id'];
    ?>
    <tr>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px" type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><p><strong>Name: </strong><?php echo $row['fname']?> <?php echo $row['lname']?></p>
            <a  data-toggle="modal" href="approve-profile.php?id=<?php echo $approved_id;?>" data-target="#myModal5" class="btn btn-link">Reserver's Profile</a></td>

      </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 
<!--Bootstrap Modal-->
<div class="modal fade" id="myModal5">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <strong>Loading...</strong>
        </div>
    </div>
</div>
      </form>
        </div>
    </div>  
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="btn-group-vertical btn-block">
                <h4 class="panel-title">
                    <center><a style="width: 1133px" class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapse7">Brong Ahafo Region</a></center>
                </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
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
    $result = mysqli_query($con, "SELECT * FROM approved_reservation WHERE agency = '$agency' AND region_name = 'Brong Ahafo Region' ") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);

while($row=mysqli_fetch_array($result)){
    $approved_id = $row['approved_id'];
    ?>
    <tr>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px" type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><p><strong>Name: </strong><?php echo $row['fname']?> <?php echo $row['lname']?></p>
            <a  data-toggle="modal" href="approve-profile.php?id=<?php echo $approved_id;?>" data-target="#myModal6" class="btn btn-link">Reserver's Profile</a></td>

      </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 
<!--Bootstrap Modal-->
<div class="modal fade" id="myModal6">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <strong>Loading...</strong>
        </div>
    </div>
</div>
      </form>
        </div>
    </div>  
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="btn-group-vertical btn-block">
                <h4 class="panel-title">
                    <center><a style="width: 1133px" class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapse8">Northern Region</a></center>
                </h4>
            </div>
            <div id="collapse8" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
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
    $result = mysqli_query($con, "SELECT * FROM approved_reservation WHERE agency = '$agency' AND region_name = 'Northern Region' ") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);

while($row=mysqli_fetch_array($result)){
    $approved_id = $row['approved_id'];
    ?>
    <tr>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px" type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><p><strong>Name: </strong><?php echo $row['fname']?> <?php echo $row['lname']?></p>
            <a  data-toggle="modal" href="approve-profile.php?id=<?php echo $approved_id;?>" data-target="#myModal7" class="btn btn-link">Reserver's Profile</a></td>

      </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 
<!--Bootstrap Modal-->
<div class="modal fade" id="myModal7">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <strong>Loading...</strong>
        </div>
    </div>
</div>
      </form>
        </div>
    </div>  
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="btn-group-vertical btn-block">
                <h4 class="panel-title">
                    <center><a style="width: 1133px" class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapse9">Upper East Region</a></center>
                </h4>
            </div>
            <div id="collapse9" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
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
    $result = mysqli_query($con, "SELECT * FROM approved_reservation WHERE agency = '$agency' AND region_name = 'Upper East Region' ") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);

while($row=mysqli_fetch_array($result)){
    $approved_id = $row['approved_id'];
    ?>
    <tr>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px" type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><p><strong>Name: </strong><?php echo $row['fname']?> <?php echo $row['lname']?></p>
            <a  data-toggle="modal" href="approve-profile.php?id=<?php echo $approved_id;?>" data-target="#myModal8" class="btn btn-link">Reserver's Profile</a></td>

      </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 
<!--Bootstrap Modal-->
<div class="modal fade" id="myModal8">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <strong>Loading...</strong>
        </div>
    </div>
</div>
      </form>
        </div>
    </div>  
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="btn-group-vertical btn-block">
                <h4 class="panel-title">
                    <center><a style="width: 1133px" class="btn btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapse10">Upper West Region</a></center>
                </h4>
            </div>
            <div id="collapse10" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="container1">
      <!-- Example row of columns -->
 <div class="row">
     <form action="" method="post"> 
	 <!-- <form action="insertIntoConfirmedCars.php" method="post"> -->
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
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
    $result = mysqli_query($con, "SELECT * FROM approved_reservation WHERE agency = '$agency' AND region_name = 'Upper West Region' ") or die(mysqli_error($con));
    $count = mysqli_num_rows($result);

while($row=mysqli_fetch_array($result)){
    $approved_id = $row['approved_id'];
    ?>
    <tr>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px" type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><p><strong>Name: </strong><?php echo $row['fname']?> <?php echo $row['lname']?></p>
            <a  data-toggle="modal" href="approve-profile.php?id=<?php echo $approved_id;?>" data-target="#myModal9" class="btn btn-link">Reserver's Profile</a></td>

      </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 
<!--Bootstrap Modal-->
<div class="modal fade" id="myModal9">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <strong>Loading...</strong>
        </div>
    </div>
</div>
     </form>
        </div>
    </div>  
                </div>
            </div>
        </div>
    </div>
      </div>
    
    
    
     <!-- /container -->
	

    

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
