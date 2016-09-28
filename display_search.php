<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
if(isset($_POST['searchtext'])){

    $car_type = $_POST['car_type'];
    $car_year = $_POST['car_year'];

 //2012 cars
if($car_type == 'Toyota Corolla' && $car_year == '2012') 
{
	header('Location: 2012-corolla.php');
}
else if($car_type == 'Toyota Highlander' && $car_year == '2012')
{
        header('Location: 2012-toyota-highlander.php');
}
else if($car_type == 'Toyota Rav4' && $car_year == '2012')
{
        header('Location: 2012-toyota-rav4.php');
}
else if($car_type == 'Honda Civic' && $car_year == '2012')
{
        header('Location: 2012_Honda_civic.php');
}
else if($car_type == 'Nissan Altima' && $car_year == '2012')
{
        header('Location: 2012_NISSAN_ALTIMA.php');
}
else if($car_type == 'Toyota Camry' && $car_year == '2012')
{
        header('Location: 2012_toyota_camry.php');
}
else if($car_type == 'Mercedes Benz' && $car_year == '2012')
{
        header('Location: 2012_mercedes_benz.php');
}

//2013 cars
else if($car_type == 'Toyota Corolla' && $car_year == '2013')
{
        header('Location: 2013-Toyota_corolla.php');
}
else if($car_type == 'Toyota Highlander' && $car_year == '2013')
{
        header('Location: 2013-toyota-highlander.php');
}
else if($car_type == 'Toyota Rav4' && $car_year == '2013')
{
        header('Location: 2013-toyota-rav4.php');
}
else if($car_type == 'Honda Civic' && $car_year == '2013')
{
        header('Location: 2013_Honda_Civic.php');
}
else if($car_type == 'Nissan Altima' && $car_year == '2013')
{
        header('Location: 2013_Nissan_Altima.php');
}
else if($car_type == 'Toyota Hardtop Ambulance')
{
        header('Location: toyota_hardtop_ambulance.php');
}
else if($car_type == 'Toyota Hilux' && $car_year == '2013' )
{
        header('Location: 2013_toyota_hilux.php');
}
else if($car_type == 'Toyota Matrix' && $car_year == '2013' )
{
        header('Location: 2013_toyota_matrix.php');
}
//2014 cars
else if($car_type == 'Toyota Corolla' && $car_year == '2014')
{
        header('Location: 2014_Toyota_Corolla.php');
}
else if($car_type == 'Toyota Highlander' && $car_year == '2014')
{
        header('Location: 2014-toyota-highlander.php');
}
else if($car_type == 'Toyota Rav4' && $car_year == '2014')
{
        header('Location: 2014-toyota-rav4.php');
}
else if($car_type == 'Honda Civic-EX' && $car_year == '2014')
{
        header('Location: 2014 HONDA CIVIC-EX.php');
}
else if($car_type == 'Toyota Landcruiser' && $car_year == '2014')
{
        header('Location: 2014_toyota_landcruiser.php');
}
else if($car_type == 'Toyota Venza' && $car_year == '2014')
{
        header('Location: 2014_toyota_venza.php');
}
else if($car_type == 'Ford Explorer' && $car_year == '2014')
{
        header('Location: 2014_ford_explorer.php');
}
else if($car_type == 'Toyota Hilux' && $car_year == '2014')
{
        header('Location: 2014_toyota_hilux.php');
}
else if($car_type == 'Jeep Grand Cherokee' && $car_year == '2014')
{
        header('Location: 2014_jeep_grand.php');
}
else if($car_type == 'Toyota Prado' && $car_year == '2014')
{
        header('Location: 2014_toyota_prado.php');
}
//2015
else if($car_type == 'Toyota Corolla' && $car_year == '2015')
{
        header('Location: 2015_toyota_corolla.php');
}
else if($car_type == 'Toyota Landcruiser' && $car_year == '2015')
{
        header('Location: 2015_toyota_landcruiser.php');
}
//2016
else if($car_type == 'Toyota Avalon' && $car_year == '2016')
{
        header('Location: 2016_toyota_avalon.php');
}
else if($car_type == 'Ford Explorer' && $car_year == '2016')
{
        header('Location: 2016_ford_explorer.php');
}
else if($car_type == 'Toyota Camry' && $car_year == '2016')
{
        header('Location: 2016_toyota_camry.php');
}
else{ 
    ?>
        <script type="text/javascript">
            alert("Your Search Matches No Records");
            history.back();
	</script>
<?php
}
}
?>
				