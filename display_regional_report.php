<?php 
ob_start();
session_start();

if(isset($_GET['month'])){
    $month = $_GET['month'];
	$month_name = $_GET['month_name'];
}
//$region_name = $_POST['region_name']; 
$con=mysqli_connect("localhost","root","myspace4199","car_sales");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM reservation WHERE YEAR(time) = YEAR(CURRENT_DATE()) AND MONTH(time) = '$month' ";

$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Intellect Group Ltd.</title>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css">
 	<link rel="stylesheet" type="text/css" href="css/styles.css" />

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
 <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
	.roww {
    float: center;
    text-align: right;
    width: 65%;
}

 .container{
	padding-left: 30px;
	padding-bottom: 50px;
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

  <body id="target">
<script type="text/javascript">
    function submitForm(action)
    {
        document.getElementById('form1').action = action;
        document.getElementById('form1').submit();
    }
</script>

    <div class="container">
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
        $month = $_GET['month'];
		$month_name = $_GET['month_name'];
    $result = mysqli_query($con,"SELECT * FROM reservation WHERE YEAR(time) = YEAR(CURRENT_DATE()) AND MONTH(time) = '$month' ");
    $count = mysqli_num_rows($result);

echo "<h3><center> Reservations From $month_name</center></h3><br><br>";

while($row=mysqli_fetch_array($result)){
    $reservation_id = $row['reservation_id'];
	
	?>
	
    <tr>
	
	    <td><center><div ><?php echo ""?></div></center> </td> 
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 60px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" width: 85px;" type="" name=" exterior_colour[]" value="<?php echo $row['exterior_colour'];?>" readonly></label></td>
            <td><input type="" name="options[]" value="<?php echo $row['options'];?>" readonly></label></td>
            <td><input style="width: 65px" type="" name="quantity[]" value="<?php echo $row['quantity'];?>" readonly></label></td>
            <td><input style="width: 150px" type="" name="time[]" value="<?php echo $row['time'];?>" readonly></label></td>
            <td><textarea style="width: 180px"  type="" name="comment[]" value="<?php echo $row['comment'];?>" readonly><?php echo $row['comment'];?></textarea></td>
            <td><div style="width: 200px">
                    <strong>Name: </strong><?php echo $row['fname'];?> <?php echo $row['lname'];?></br>
                    <strong>Mobile Number: </strong> <?php echo $row['mobile_number'];?>
		</div>
            </td>

    </tr>
    
    <?php	} //end of while loop ?>
       	
    </tbody>
</table> 
    
      </form>
        </div>
	 <a class="btn btn-link btn-block" href="http://selectpdf.com/save-as-pdf">Save as Pdf</a> 
        <a class="btn btn-link btn-block" onclick="myFunction()">Print this page</a>	
    </div>
	
	
<script>
function myFunction() {
    window.print();
}
</script>
  
  <script src="js/main.js"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
