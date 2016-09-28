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
$sql="SELECT * FROM reservation ";

$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intellect Group Ltd</title>

    <!-- Bootstrap -->
    <link href="wExport/bootstrap.css" rel="stylesheet">
    <link href="wExport/font-awesome.css" rel="stylesheet">
    <style type="text/css">
    .word-icon {
        font-family:"Helvetica", sans-serif;
        font-size: 24px;
        font-weight: bold;
        background-color: #0054a6;
        color: white;
        padding: 2px 5px;
        vertical-align: middle;
    }
    </style>
</head>

<body>
    <div class="container">
       
        <div class="row">
            <div class="col-xs-7">
                <div id="page-content" class="panel panel-default" style="width:1300px">
                    <div class="panel-body">
                        
                        <p> <div class="container">
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
    //    $month = $_GET['month'];
	//	$month_name = $_GET['month_name'];
    $result = mysqli_query($con,"SELECT * FROM reservation  ");
    $count = mysqli_num_rows($result);

echo "<h3><center> Reservations From </center></h3><br><br>";

while($row=mysqli_fetch_array($result)){
    $reservation_id = $row['reservation_id'];
	
	?>
	
    <tr>
	
	    <td><center><div ><?php echo ""?></div></center> </td> 
            <td><input type="" name="car_type[]" value="<?php echo $row['car_type'];?>" readonly></label></td>
            <td><input style="width: 100px" type="" name="trim[]" value="<?php echo $row['trim'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>" readonly></label></td>
            <td><input style="width: 80px" type="" name="km[]" value="<?php echo $row['km'];?>" readonly></label></td>
            <td><input style=" background-color:<?php echo $row['exterior_colour'];?>; width: 55px;" type="" name=" exterior_colour[]" value="" readonly></label></td>
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
	
		<button class="btn btn-primary btn-block" onclick="myFunction()">Print this page</button>
		 <a class="btn btn-primary btn-block jquery-word-export" href="javascript:void(0)">
                    <span class="word-icon">W</span>
                    Export document
                </a>
				<a href="http://selectpdf.com/save-as-pdf">Save as Pdf</a> 
				<a href="http://selectpdf.com/save-as-pdf/?page_size=Letter&page_orientation=Landscape">pdf</a>
		</div></p>
                    </div>
                </div>
            </div>
            <!-- /.blog-main -->
            
            <!-- /.blog-sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="wExport/jquery-1.js"></script>
    <!-- FileSaver.js (necessary for saving the word document!) -->
    <script src="wExport/FileSaver.js"></script>
    <!-- jQuery-Word-Export plugin -->
    <script src="wExport/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="wExport/bootstrap.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $("a.jquery-word-export").click(function(event) {
            $("#page-content").wordExport();
        });
    });
    </script>



</body></html>