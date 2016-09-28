<?php
$con=mysqli_connect("localhost","root","myspace4199","car_sales");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//Include database connection here
$reserver = $_GET["id"]; //escape the string if you like
$result = mysqli_query($con,"SELECT * FROM supplied_reservation WHERE supplied_id = '$reserver' ");
//$count = mysqli_num_rows($result); //Don't need to count the rows too
$row = mysqli_fetch_array($result); //Don't need the loop if you wana fetch only single row against id
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" onClick="window.location.reload()">&times;</button>
    <h4 class="modal-title"><center>Reserver</center></h4>
</div>
<div class="modal-body">
    <p ><strong>Name: </strong><?php echo $row['fname'];?>  <?php echo $row['lname'];?></p>
    <p ><strong>Mobile Number: </strong><?php echo $row['mobile_number'];?></p>
    <p ><strong>Region: </strong><?php echo $row['region_name'];?></p>
    <p ><strong>Agency: </strong><?php echo $row['agency'];?></p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.reload()">Close</button>
</div>