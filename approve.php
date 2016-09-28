<?php
// Your database info
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'myspace4199';
$db_name = 'car_sales';

if (!isset($_GET['id']))
{
    echo 'No ID was given...';
    exit;
}

$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($con->connect_error)
{
    die('Connect Error (' . $con->connect_errno . ') ' . $con->connect_error);
}

$sql = "INSERT INTO approved_reservation SELECT * FROM reservation WHERE reservation_id = 'reservation_id'";
$sql = "DELETE FROM reservation WHERE reservation_id= ?";


if (!$result = $con->prepare($sql))
{
    die('Query failed: (' . $con->errno . ') ' . $con->error);
}

if (!$result->bind_param('i', $_GET['id']))
{
    die('Binding parameters failed: (' . $result->errno . ') ' . $result->error);
}

if (!$result->execute())
{
    die('Execute failed: (' . $result->errno . ') ' . $result->error);
}

if ($result->affected_rows > 0)
{
   header('Location: regional_head_page.php');
}
else
{
    echo "Couldn't approve the reservation.";
}
$result->close();
$con->close();
?>