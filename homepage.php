<?php 
session_start(); 
$region_name = $_SESSION['region_name'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$mobile_number = $_SESSION['mobile_number'];
$agency = $_SESSION['agency'];

if ( isset($_SESSION['region_name']) ) {
    $region_name = $_SESSION['region_name'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $mobile_number = $_SESSION['mobile_number']; 
    $agency = $_SESSION['agency'];
    
 } else {
     // got a problem, deal with it here
 }
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

    <title>Intel Group</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.css">
      
    <link href="jumbotron.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
   <style type="text/css">
      /* sizes */
#main-wrap > div { min-height: 450px; }


#header,
#footer {
    min-height: 40px;
}

/* layout */
#main-wrap {
    /* overflow to handle inner floating block */
    overflow: auto;
}

#sidebar {
    padding-left: 15px;
	padding-right: 15px;
    float: left;
    width: 18%;
}

#content-wrap {
    float: right;
    width: 82%;
}
.container1{
    padding-left: 90px;
	float: left;
	  width: 20%;
}
.container2{
    padding-right: 90px;
	float: right;
	  width: 20%;
}
.navbar-brand {
	padding-left: 50px;
	float: left;
}
.line{
	border-left: 1px solid #ccc;
	overflow-x: hidden;
}
.row{
	padding-left: 10px;
}
 
</style>
  </head>

  <body>
   <div  id="header">  
	  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container1">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <img class="" href="#" src="newlogo.png" alt="" height="100" width="120">
        </div>
    </div>
	<div class="container2">
         <div id="navbar" class="navbar-collapse collapse">
          <form action="signin_up.php" class="navbar-form navbar-right">
			
           <button type="submit" class="btn btn-success">Sign Out</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
      
          </nav></div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
 
    
   
   
    <div scrolling="no" seamless="seamless" id="main-wrap">
        <div  id="sidebar"><div class="search"><h3>Make A Search</h3>
            <form  method="POST" action="display_search.php">
                    <div class="form-group">
			<label>Type of Vehicle</label>
			<select class="form-control"name="car_type" size="1" style="width:220px" onchange="javascript:selVal_(this.value)" required>
                            <option selected="selected" value="" >Vehicle Type</option>
                            <option value="Toyota Highlander" title="Toyota Highlander">Toyota Highlander</option>
                            <option value="Toyota Rav4" title="Toyota Rav4">Toyota Rav4</option>
                            <option value="Toyota Corolla" title="Toyota Corolla">Toyota Corolla</option>
                            <option value="Nissan Altima" title="Nissan Altima">Nissan Altima</option>
                            <option value="Honda Civic" title="Honda Civic">Honda Civic</option>
                            <option value="Honda Civic-EX" title="Honda Civic-EX">Honda Civic-EX</option>
                            <option value="Toyota Avalon" title="Toyota Avalon">Toyota Avalon</option>
                            <option value="Toyota Hardtop Ambulance" title="Toyota Hardtop Ambuloance">Toyota Hardtop Ambulance</option>
                            <option value="Toyota Hilux" title="Toyota Hilux">Toyota Hilux</option>
                            <option value="Toyota Venza" title="Toyota Venza">Toyota Venza</option>
                            <option value="Ford Explorer" title="Ford Explorer">Ford Explorer</option>
		            <option value="Toyota Landcruiser" title="Toyota Landcruiser">Toyota Landcruiser</option>
                            <option value="Toyota Camry" title="Toyota Camry">Toyota Camry</option>
                            <option value="Toyota Matrix" title="Toyota Matrix">Toyota Matrix</option>
                            <option value="Jeep Grand Cherokee" title="Jeep Grand Cherokee">Jeep Grand Cherokee</option>
                            <option value="Mercedes Benz" title="Mercedes Benz">Mercedes Benz</option>
                	</select>
                    </div>						
                    <div class="form-group">
			<label>Year Made</label>
			<select class="form-control" name="car_year" id="makeid" size="1" style="width:220px;" onchange="javascript:selVal_(this.value)" required>
                            <option value="" selected="selected">Car Year</option>
                            <option value="2011" title="2011">2011</option>
                            <option value="2012" title="2012">2012</option>
                            <option value="2013" title="2013">2013</option>
                            <option value="2014" title="2014">2014</option>
                            <option value="2015" title="2015">2015</option>
                            <option value="2016" title="2016">2016</option>
                        </select>			
                    </div>			
		
                    <div style="display: block;" name="searchbox" id="searchbox" class="searchbox">
                    <p><br>
                        <button style="width:120px;" name="searchtext" type="submit" class="btn btn-info">
			<span class="glyphicon glyphicon-search"></span> Search
			</button>
                    </p>
                    </div>
		<br><br><br><br>
            </form>	
        </div></div>
         <div class="line" id="content-wrap">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h3>TOYOTA HIGHLANDER 2012</h3>
            <a href="2012_toyota_highlander.jpg" data-lightbox="image-1" data-title="TOYOTA RAV4 2013" > <img src="2012_toyota_highlander.jpg" alt="TOYOTA HIGHLANDER 2012" height="200" width="300"></a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Highlander</td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: Spot</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2012-toyota-highlander.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
          
        </div>
        <div class="col-md-4">
            <h3>TOYOTA HIGHLANDER 2013</h3><br>
            <a href="2013_Toyota_Highlander.png" data-lightbox="image-1" data-title="TOYOTA RAV4 2013" >  <img src="2013_Toyota_Highlander.png" alt="TOYOTA HIGHLANDER 2013" height="180" width="360"></a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Highlander</td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: Sport</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2013-toyota-highlander.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
       </div>
        <div class="col-md-4">
            <h3>TOYOTA HIGHLANDER 2014</h3><br>
            <a href="2014_toyota_highlander.png" data-lightbox="image-1" data-title="TOYOTA RAV4 2013" >   <img src="2014_toyota_highlander.png" alt="TOYOTA HIGHLANDER 2014" height="180" width="370"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Highlander</td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim: limited</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2014-toyota-highlander.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
        
    <div class="row">
        
    <div class="col-md-4">
        <h3>TOYOTA RAV4 2012</h3>
        <a href="2012_toyota_Rav4.png" data-lightbox="image-1" data-title="TOYOTA RAV4 2013" >   <img src="2012_toyota_Rav4.png" alt="TOYOTA RAV4 2012" height="180" width="320"> </a><br><br>  
        <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Rav4</td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: Sport</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2012-toyota-rav4.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
        </table>
    </div>
        
    <div class="col-md-4">
        <h3>TOYOTA RAV4 2013</h3>
        <a href="2013_Toyota_Rav4.png" data-lightbox="image-1" data-title="TOYOTA RAV4 2013" > <img src="2013_Toyota_Rav4.png" alt="TOYOTA RAV4 2013" height="180" width="360"></a><br><br>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Rav4</td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: Sport</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2013-toyota-rav4.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
    </div>
        
    <div class="col-md-4">
    <h3>TOYOTA RAV4 2014</h3>
    <a href="img/2014 RAV4/rav1.png" data-lightbox="image-1" data-title="TOYOTA RAV4 2014" >   <img src="img/2014 RAV4/rav1.png" alt="TOYOTA RAV4 2014" height="200" width="330"></a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Rav4</td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim: Sport</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2014-toyota-rav4.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        
    </div>    

    <div class="row">
    <div class="col-md-4">
        <h3>TOYOTA COROLLA 2012</h3><br><br>
        <a href="2012_corolla.png" data-lightbox="image-1" data-title="TOYOTA COROLLA 2012" >    <img src="2012_corolla.png" alt="Toyota Corolla 2012" height="140" width="330"> </a>
        <br><br>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Corolla</td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: CE C PACKAGE</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2012-corolla.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="col-md-4">
    <h3>TOYOTA COROLLA 2013</h3>
            <a href="2013_toyota_corolla_angularfront.jpg" data-lightbox="image-1" data-title="TOYOTA COROLLA 2013" > <img src="2013_toyota_corolla_angularfront.jpg" alt="Toyota Corolla 2013" height="200" width="300"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Corolla</td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: CE</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2013-Toyota_corolla.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="col-md-4">
    <h3>TOYOTA COROLLA 2014</h3>
            <a href="img/2014_toyota_corolla/2014-toyota-corolla_red.jpg" data-lightbox="image-1" data-title="TOYOTA COROLLA 2014" > <img src="img/2014_toyota_corolla/2014-toyota-corolla_red.jpg" alt="Toyota Corolla 2014" height="200" width="300"></a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Corolla</td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim: S</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2014_Toyota_Corolla.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>    
        
        
        
    <div class="row">
         <div class="col-md-4">
    <h3>TOYOTA COROLLA 2015</h3>
    <a href="2015-toyota-corolla.jpg" data-lightbox="image-1" data-title="TOYOTA COROLLA 2015" > <img src="img/2015 toyota corolla/2015-toyota-corolla2.jpg" alt="Toyota Corolla 2015" height="200" width="300"></a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Corolla</td>
              </tr>
              <tr>
                <td>Year made: 2015</td>
              </tr>
                <tr>
                <td>Trim:  </td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2015_toyota_corolla.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>    
        
        
         <div class="col-md-4">
    <h3>TOYOTA AVALON 2016</h3>
    <a href="img/2016_toyota_avalon/toyota_avalon9.jpg" data-lightbox="image-1" data-title="TOYOTA COROLLA 2015" > <img src="img/2016_toyota_avalon/toyota_avalon9.jpg" alt="Toyota Corolla 2015" height="200" width="300"></a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Avalon</td>
              </tr>
              <tr>
                <td>Year made: 2016</td>
              </tr>
                <tr>
                <td>Trim: CVT 7 </td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2016_toyota_avalon.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>   
        
        
        <div class="col-md-4">
    <h3>NISSAN ALTIMA 2012</h3>
            <a href="2012_nissan_altima_2_5_winchester_va_99972002429894749.jpg" data-lightbox="image-1" data-title="Nissan Altima 2012" > <img src="2012_nissan_altima_2_5_winchester_va_99972002429894749.jpg" alt="Nissan Altima 2012" height="200" width="350"></a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Nissan Altima </td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: LE STANDARD PKG</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2012_NISSAN_ALTIMA.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        
        
       
        </div>    
        
        <div class="row">
            <div class="col-md-4">
    <h3>Nissan Altima 2013</h3><br>
            <a href="2013_Nissan_Altima.png" data-lightbox="image-1" data-title="Nissan Altima 2013" >     <img src="img/2013 Nissan Altima/2013_nissan_altima_sedan7.jpg" alt="Nissan Altima 2013" height="160" width="300"></a><br><br>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Nissan Altima</td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: STANDARD PKG</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2013_Nissan_Altima.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
            
             <div class="col-md-4">
    <h3>HONDA CIVIC-2012</h3>
            <a href="2012_honda_civic_cpe_angularfront.jpg" data-lightbox="image-1" data-title="HONDA CIVIC-2012" >  <img src="2012_honda_civic_cpe_angularfront.jpg" alt="HONDA CIVIC-2012" height="200" width="300"></a>
            <table class="table table-striped"> 
            <tbody>
              <tr>
                <td>Name: HONDA CIVIC</td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: STANDARD</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2012_Honda_civic.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
            
            
            <div class="col-md-4">
    <h3>HONDA CIVIC 2013</h3><br><br>
                <a href="2013.png" data-lightbox="image-1" data-title="HONDA CIVIC-2013 " > <img src="2013.png" alt="HONDA CIVIC-2013" height="140" width="320"> </a><br><br>
             <table class="table table-striped"> 
            <tbody>
              <tr>
                <td>Name: HONDA CIVIC</td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: STANDARD</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2013_Honda_Civic.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
            
           
            
        </div>
      <div class="row">
        <div class="col-md-4">
    <h3>HONDA CIVIC-EX 2014 </h3>
        <a href="2014-Honda-Civic-Sedan-LX-4dr-Sedan-Exterior-2.png" data-lightbox="image-1" data-title="Honda Civic-EX 2014 " >  <img src="2014-Honda-Civic-Sedan-LX-4dr-Sedan-Exterior-2.png"  alt="HONDA CIVIC- EX 2014" height="200" width="350"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: HONDA CIVIC-EX </td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim: STANDARD</td>
              </tr>
                <tr>
                <td><p><a class="btn btn-default" href="2014 HONDA CIVIC-EX.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
          <div class="col-md-4">
    <h3>Toyota Hardtop Ambulance </h3>
    <a href="img/hardtop_ambulance/hardtop_ambulance.jpg" data-lightbox="image-1" data-title="Toyota Hardtop Ambulance " >  <img src="img/hardtop_ambulance/hardtop_ambulance.jpg"  alt="Toyota Hardtop Ambulance" height="200" width="350"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Hardtop Ambulance </td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: </td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="toyota_hardtop_ambulance.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4">
    <h3>Toyota Hilux </h3>
    <a href="img/toyoto_hilux/hilux.jpg" data-lightbox="image-1" data-title="Toyota Hilux " >  <img src="img/toyoto_hilux/hilux.jpg"  alt="Toyota Hardtop Ambulance" height="200" width="350"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Hilux </td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim:</td>
              </tr>
                <tr>
                 <td><p><a class="btn btn-default" href="20133_toyota_hilux.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
      <div class="row">
         <div class="col-md-4">
    <h3>Toyota Hilux </h3>
    <a href="img/toyoto_hilux/2013_hilux.png" data-lightbox="image-1" data-title="Toyota Hilux " >  <img src="img/toyoto_hilux/2013_hilux.png"  alt="Toyota Hardtop Ambulance" height="200" width="350"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Hilux </td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim:</td>
              </tr>
                <tr>
                 <td><p><a class="btn btn-default" href="2013_toyota_hilux.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
          <div class="col-md-4">
    <h3>2014 Toyota Prado </h3>
    <a href="img/2014_toyota_prado/prado2.png" data-lightbox="image-1" data-title="Toyota Prado" >  <img src="img/2014_toyota_prado/prado2.png"  alt="Toyota Prado 2014" height="200" width="350"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Prado </td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim:</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2014_toyota_prado.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
          <div class="col-md-4">
    <h3>2014 Toyota Landcruiser</h3>
    <a href="img/2014_toyota_landcruiser/land1.png" data-lightbox="image-1" data-title="Toyota Landcruiser " >  <img src="img/2014_toyota_landcruiser/land1.png"  alt="Toyota Landcruiser" height="200" width="330"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Landcruiser</td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim: Sport</td>
              </tr>
                <tr>
                 <td><p><a class="btn btn-default" href="2014_toyota_landcruiser.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
          
          
          
      </div>
      <div class="row">
          <div class="col-md-4">
    <h3>2015 Toyota Landcruiser</h3>
    <a href="img/2015_toyota_landcruiser/cruiser1.png" data-lightbox="image-1" data-title="Toyota Landcruiser " >  <img src="img/2015_toyota_landcruiser/cruiser1.png"  alt="Toyota Landcruiser" height="220" width="350"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Landcruiser</td>
              </tr>
              <tr>
                <td>Year made: 2015</td> 
              </tr>
                <tr>
                <td>Trim:</td>
              </tr>
                <tr>
                 <td><p><a class="btn btn-default" href="2015_toyota_landcruiser.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
       <div class="col-md-4">
    <h3>2014 Toyota Venza</h3>
    <a href="img/2014_toyota_venza/ven.png" data-lightbox="image-1" data-title="Toyota Venza " >  <img src="img/2014_toyota_venza/ven.png"  alt="Toyota Venza" height="220" width="370"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Venza</td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim: XLE</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2014_toyota_venza.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4">
    <h3>2014 Ford Explorer </h3>
    <a href="img/2014_ford_explorer/ford1.jpeg" data-lightbox="image-1" data-title="Ford Explorer " >  <img src="img/2014_ford_explorer/ford1.jpeg"  alt="Ford Explorer" height="220" width="330"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Ford Explorer</td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim:</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2014_ford_explorer.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
          
      </div>
      <div class="row">
          <div class="col-md-4">
    <h3>2014 Ford Explorer </h3>
    <a href="img/2016_ford_explorer/ford1.jpg" data-lightbox="image-1" data-title="Ford Explorer " >  <img src="img/2016_ford_explorer/ford1.jpg"  alt="Ford Explorer" height="220" width="330"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Ford Explorer</td>
              </tr>
              <tr>
                <td>Year made: 2016</td>
              </tr>
                <tr>
                <td>Trim: Limited</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2016_ford_explorer.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4">
    <h3>2012 Toyota Camry </h3>
    <a href="img/2012_toyota_camry/camry1.jpg" data-lightbox="image-1" data-title="Toyota Camry " >  <img src="img/2012_toyota_camry/camry1.jpg"  alt="Ford Explorer" height="220" width="330"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Camry</td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: XLE</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2012_toyota_camry.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div> 
          <div class="col-md-4">
    <h3>2016 Toyota Camry </h3>
    <a href="img/2016_toyota_camry/camry1.png" data-lightbox="image-1" data-title="Toyota Camry " >  <img src="img/2016_toyota_camry/camry1.png"  alt="Ford Explorer" height="220" width="330"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Camry</td>
              </tr>
              <tr>
                <td>Year made: 2016</td>
              </tr>
                <tr>
                <td>Trim: XSE</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2016_toyota_camry.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
          
      </div>
      <div class="row">
          <div class="col-md-4">
    <h3>2013 Toyota Matrix </h3>
    <a href="img/2013_toyota_matrix/matrix1.png" data-lightbox="image-1" data-title="Toyota Matrix " >  <img src="img/2013_toyota_matrix/matrix1.png"  alt="Ford Explorer" height="220" width="330"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Matrix</td>
              </tr>
              <tr>
                <td>Year made: 2013</td>
              </tr>
                <tr>
                <td>Trim: S</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2013_toyota_matrix.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
          <div class="col-md-4">
    <h3>2014 Toyota Hilux </h3>
    <a href="img/2014_toyota_hilux/hilux1.jpg" data-lightbox="image-1" data-title="Toyota hilux " >  <img src="img/2014_toyota_hilux/hilux1.jpg"  alt="Ford Explorer" height="220" width="330"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Toyota Hilux</td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim: SR5</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2014_toyota_hilux.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
          <div class="col-md-4">
    <h3>2014 Jeep Grand Cherokee </h3>
    <a href="img/2014_jeep_grand/jeep1.jpg" data-lightbox="image-1" data-title="Jeep Grand Cherokee" >  <img src="img/2014_jeep_grand/jeep1.jpg"  alt="Jeep Grand Cherokee" height="220" width="330"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Jeep Grand Cherokee</td>
              </tr>
              <tr>
                <td>Year made: 2014</td>
              </tr>
                <tr>
                <td>Trim: SRT</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2014_jeep_grand.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
         <div class="col-md-4">
    <h3>2012 Mercedes Benz </h3>
    <a href="img/2012_mercedes_benz/benz1.png" data-lightbox="image-1" data-title="Mercedes Benz" >  <img src="img/2012_mercedes_benz/benz1.png"  alt="Mercedes Benz" height="220" width="330"> </a>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name: Mercedes Benz</td>
              </tr>
              <tr>
                <td>Year made: 2012</td>
              </tr>
                <tr>
                <td>Trim: C</td>
              </tr>
                <tr>
                    <td><p><a class="btn btn-default" href="2012_mercedes_benz.php" role="button">View more details/Reservation &raquo;</a></p></td>
              </tr>
            </tbody>
          </table>
        </div> 
      </div>
    </div>
    </div>
      <hr>
<div class="footer">
      <footer>
        <center><p>&copy; Intellect Group Limited. 2015</p></center>
      </footer>
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
