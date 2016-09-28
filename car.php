<?php 

mysql_connect('localhost', '233apps', '233apps');
    
mysql_select_db('car_sales');
    
$sql="SELECT * FROM confirmed_reservation";

$records=mysql_query($sql);

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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
         
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
 
    <br>
    <br>
    <div class="container">
      <!-- Example row of columns -->
 <div class="row">
       <form action="#" method="post">
    <table class="table table-striped table-hover table-bordered datatable">
    <thead style="background: #00BFFF; color: White;">
    
    <tr>
    <th style="color: #3b3b3b;">Car Type</th> 
    <th style="color: #3b3b3b;">Trim</th>
    <th style="color: #3b3b3b;">Year made</th> 
    <th style="color: #3b3b3b;">km</th>
    <th style="color: #3b3b3b;">Exterior Colour</th>
    <th style="color: #3b3b3b;">options</th>
    <th style="color: #3b3b3b;">Cost After Duty </th>
    <th style="color: #3b3b3b;">reserver</th>    
        </tr>
        </thead>
<tbody>       
    <?php
    $result = mysql_query("SELECT * FROM confirmed_reservation");
    $count = mysql_num_rows($result);
echo "<b><center>Intellect Database Records</center></b><br><br>";

while($row=mysql_fetch_array($result)){
    ?>
     <tr>
         
    
           <td><input  type="" name="car_type[]" value="<?php echo $row['car_type'];?>"></label></td>
            <td><input type="" name="trim[]" value="<?php echo $row['trim'];?>"></label></td>
            <td><input style="width: 80px" type="" name="year_made[]" value="<?php echo $row['year_made'];?>"></label></td>
            <td><input style="width: 80px" type="" name="km[]" value="<?php echo $row['km'];?>"></label></td>
            <td><input style="width: 100px" type="" name="exterior_colour[]" value="<?php echo $row['exterior_colour'];?>"></label></td>
            <td><input type="" name="options[]" value="<?php echo $row['options'];?>"></label></td>
            <td><input style="width: 100px" type="" name="cost_after_duty[]" value="<?php echo $row['cost_after_duty'];?>"></label></td>
             
            <td><input type="" name="reserver[]" value="<?php echo $row['reserver'];?>"></label></td>
        </tr>
    <?php } //end of while loop ?>
    </tbody>
</table> 
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

