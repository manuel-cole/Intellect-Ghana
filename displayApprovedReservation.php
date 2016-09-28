<?php 
ob_start();
session_start();

if(isset($_GET['region_name'])){
    $region_name = $_GET['region_name'];
    
}
//$region_name = $_POST['region_name']; 
$con=mysqli_connect("localhost","root","myspace4199","car_sales");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM approved_reservation WHERE region_name = '$region_name'";

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
  

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
 <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.roww {
    float: center;
    text-align: right;
    width: 65%;
}

 .container{
	padding-left: 30px;
	float: left;      
 }

</style>
<script>
$( document ).ready(function() {
    $('#myModal').on('hidden.bs.modal', function () {
        $(this).removeData('bs.modal');
    });
	 $("#myBtn").click(function(){
        $("#myModal").modal({backdrop: "static"});
    });
});
</script>
  </head>

  <body>
       <script type="text/javascript">
    function submitForm(action)
    {
        document.getElementById('form1').action = action;
        document.getElementById('form1').submit();
    }
</script>
      
<div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
 
   
    <div class="container">
      <!-- Example row of columns -->
 <div class="row">
     <form id="form1" action="" method="post">
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
    <th style="width: 50px;"></th>
    <th style="color: #3b3b3b;">Car Type</th> 
    <th style="color: #3b3b3b;">Trim</th>
    <th style="color: #3b3b3b;">Year made</th> 
    <th style="color: #3b3b3b;">KM</th>
    <th style="color: #3b3b3b;">Exterior Colour</th>
    <th style="color: #3b3b3b;">Options</th>
    <th style="color: #3b3b3b;">Quantity Of Car(s) Reserved </th>
       
    <th style="color: #3b3b3b;">Time </th>
    <th style="color: #3b3b3b;">Comments </th>
     <th style="color: #3b3b3b;">Car Reserver</th>
    </tr>
        </thead>
		
<tbody>       
    <?php
        $region_name = $_GET['region_name'];
    $result = mysqli_query($con,"SELECT * FROM approved_reservation WHERE region_name = '$region_name'");
    $count = mysqli_num_rows($result);
echo "<h3><center>       Reservations From $region_name</center></h3><br><br>";

while($row=mysqli_fetch_array($result)){
    $approved_id = $row['approved_id'];
    ?>
	
    <tr>
         <td><center><input type="checkbox" name="check[<?php echo $row['approved_id'];?>]" value="1" ></center> </td>
    
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px"  type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
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

        <button onclick="submitForm('insertIntoConfirmedCars.php')" name="confirm" type="submit" class="btn btn-hg btn-primary"  >Approve Confirmation</button>
        <button onclick="submitForm('insertIntoUnconfirmed.php')" name="disconfirm" type="submit" class="btn btn-hg btn-primary"  >Disapprove Confirmation</button>
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
