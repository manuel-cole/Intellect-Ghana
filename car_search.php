<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>

<title>Search A Car</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-language" content="en">
<meta http-equiv="cache-control" content="max-age=600">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="">

<link rel="stylesheet" href="css/lightbox.css">
<link href="jumbotron.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/search_style.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript" src="car_search_files/jquery_002.js"></script>
<script src="car_search_files/pubads_impl_66.js" type="text/javascript" async=""></script>
<style type="text/css">
#searchbox {
	text-align: right;
}
.colo {
	color: #00F;
}
#searchtext {
    text-align: center;
}

</style>
</head>

<body>
	
    <div class="wrapper"><!--wrapper start-->
	<!-- <nav class="navbar navbar-inverse navbar-fixed-top ">
      <div class="container">
       <div class="navbar-header">
            <h4 class="navbar-brand" >Intellect Group Limited</h4>
        </div>
       <div id="navbar" class="navbar-collapse collapse">
          <form action="signin_up.php" class="navbar-form navbar-right">
           <a href="signin_up.php" target="_top" type="submit" class="btn btn-success">Sign Out</a>
          </form>
        </div><!--/.nav-collapse --
      </div> 
	  
    </nav> -->		<br><br><br><br>				
				<!--search-->
				<div class="search"><h1>Make A Search For Car Type And Year</h1>
				<form  method="POST" action="display_search.php">
					<div class="search_lft">
						<div class="form-group">
						<label>Type of Vehicle</label>
						<select name="car_type" size="1" style="width:280px" onchange="javascript:selVal_(this.value)" >
						<option selected="selected" value="min" >Vehicle Type</option>
						<option value="Toyota Highlander" title="Toyota Highlander">Toyota Highlander</option>
						<option value="Toyota Rav4" title="Toyota Rav4">Toyota Rav4</option>
						<option value="Toyota Corolla" title="Toyota Corolla">Toyota Corolla</option>
						<option value="Nissan Altima" title="Nissan Altima">Nissan Altima</option>
						<option value="Honda Civic" title="Honda Civic">Honda Civic</option>
						<option value="Honda Civic-EX" title="Honda Civic-EX">Honda Civic-EX</option>
                                                <option value="Toyota Avalon" title="Toyota Avalon">Toyota Avalon</option>
                                                <option value="Toyota Hardtop Ambulance" title="Toyota Hardtop Ambuloance">Toyota Hardtop Ambulance</option>
                                                <option value="Toyota Hilux" title="Toyota Hilux">Toyota Hilux</option>
                                                <option value="Toyota Hilux" title="Toyota Hilux">Toyota Landcruiser</option>
						</select>
						</div>			
					</div>
					<div class="search_mid">			
                                            <div class="model">
							<label>Year Made</label>
							<select name="car_year" id="makeid" size="1" style="width:280px;" onchange="javascript:selVal_(this.value)">
                                                            <option value="min" selected="selected">Car Year</option><option value="2011" title="2011">2011</option><option value="2012" title="2012">2012</option><option value="2013" title="2013">2013</option><option value="2014" title="2014">2014</option><option value="2015" title="2015">2015</option><option value="2016" title="2016">2016</option></select>
						
					</div>
                 
					</div>
					
					<div class="search_right">
                		<div style="display: block;" name="searchbox" id="searchbox" class="searchbox">
					    <p>
                                                <br><button style="width:120px;" name="searchtext" type="submit" class="btn btn-info">
								<span class="glyphicon glyphicon-search"></span> Search
							</button>
						</p>
				</div>

                                   
					</div><br><br><br><br>
				
				
				</form>	
                                </div><br>
				
					

				</div>
			<!--<input align="right" value="SEARCH" class="search_btn" type="submit"></div>		-->				
        
       <!--container-->
	
</body></html>