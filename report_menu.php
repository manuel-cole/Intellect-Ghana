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
    <link rel="stylesheet" type="text/css" href="css/styles.css" />  
    
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>

  <body>
      


    <div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="">
            <h3 class=""><center>Reservation Reports</center></h3>
	</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Yearly Report</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="container">
                    
                <form name="reportYear" class="form-inline" role="form" method="POST" action="display_year_report.php" target="main">
					
					<div class="form-group">
						<label for="year">Year:</label>
						<select name="reportYear" style="width: 240px" class="form-control" required>
							<option value="">Select Year</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
						</select>
					</div>
					<button  style="float: right;" type="submit" class="btn btn-info">Generate</button>
				</form>
                    
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Monthly Report</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="display_regional_report.php?month=01 & month_name=January" value="" class="btn btn-info" target="main"><center>January</center></a>
                     </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block"> 
                        <a href="display_regional_report.php?month=02 & month_name=February" type="submit" class="btn btn-info" target="main"><center>February</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="display_regional_report.php?month=03 & month_name=March" type="submit" class="btn btn-info" target="main"><center>March</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="display_regional_report.php?month=04 & month_name=April" type="submit" class="btn btn-info" target="main"><center>April</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="display_regional_report.php?month=05 & month_name=May" type="submit" class="btn btn-info" target="main"><center>May</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="display_regional_report.php?month=06 & month_name=June" type="submit" class="btn btn-info" target="main"><center>June</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="display_regional_report.php?month=07 & month_name=July" type="submit" class="btn btn-info" target="main"><center>July</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="display_regional_report.php?month=08 & month_name=August" type="submit" class="btn btn-info" target="main"><center>August</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="display_regional_report.php?month=09 & month_name=September" type="submit" class="btn btn-info" target="main"><center>September</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="display_regional_report.php?month=10 & month_name=October" type="submit" class="btn btn-info" target="main"><center>October</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="display_regional_report.php?month=11 & month_name=November" type="submit" class="btn btn-info" target="main"><center>November</center></a>
                    </form>
                    <form name="month" method="POST" class="btn-group-vertical btn-block">
                        <a href="display_regional_report.php?month=12 & month_name=December" type="submit" class="btn btn-info" target="main"><center>December</center></a>
                    </form>
                </div>
            </div>
        </div>
     
 <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Daily Report</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
					<a href="display_daily_report.php" target="main">Generate Today's report</a>
                </div>
            </div>
        </div>
    </div>
        <a target="_top" href="car_company_page.php" class="btn btn-block">Go Back</a>
      </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
