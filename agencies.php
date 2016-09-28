<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Intel Group</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <style>
    </style>
  </head>
  <body>
     
     <div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="">
            <h3 class=""><center>Agencies</center></h3>
	<div class="">
          <ul class="nav nav-sidebar">
            <li class="" ><a href="display_general.php?agency=Ghana Health Services" target="main">Ghana Health Services <span class="sr-only">(current)</span></a></li>
            <li><a href="display_general.php?agency=National Health Insurance Authority" target="main">National Health Insurance Authority</a></li>
            <li><a href="display_general.php?agency=National Ambulance Service" target="main">National Ambulance Service</a></li>
            <li><a href="display_general.php?agency=Foods and Drug Authority" target="main">Foods and Drug Authority</a></li>
            <li><a href="display_general.php?agency=Ghana Medical and Dental Council" target="main">Ghana Medical and Dental Council</a></li>
            <li><a href="display_general.php?agency=Pharmacy Council Ghana" target="main">Pharmacy Council Ghana</a></li>
            <li><a href="display_general.php?agency=Christian Health Association of Ghana" target="main">Christian Health Association of Ghana </a></li>
            <li><a href="display_general.php?agency=Ghana Registered Nurses and Midwives" target="main">Ghana Registered Nurses and Midwives</a></li>
            <li><a href="display_general.php?agency=Ghana National Drugs Programme" target="main">Ghana National Drugs Programme</a></li>
            <li><a href="display_general.php?agency=Private Hospitals and Maternity Homes Board" target="main">Private Hospitals and Maternity Homes Board</a></li>
            <li><a href="display_general.php?agency=Others" target="main">Others</a></li>
          </ul>
        </div>
     
 
    </div>
    </div>
     <script>
$(function(){
     $('.nav-sidebar').click(function()
    {
        $('a').removeClass('active');
        $('.nav_' + $(this).attr('href').replace('#', '')).addClass('active');
    });
 });
     </script>
  </body>
</html>