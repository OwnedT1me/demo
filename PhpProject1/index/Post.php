
<?php 
require_once 'sql/SQL_on.php';
$UID = $_POST['UID'] ?? '';
$pacient = $_POST['pacient'] ?? '';
$date_o = $_POST['date_o'] ?? '';
$date_c = $_POST['date_c'] ?? '';
$diagnoz = $_POST['diagnoz'] ?? '';

mysqli_query($link, "INSERT INTO `diagnoz` (`UID`, `pacient`, `diagnoz`, `date_o`, `date_c`) VALUES ('$UID', '$pacient', '$diagnoz', '$date_o', '$date_c')");
//header('Location: /PhpProject1/Change_Diagnoz.php');
//exit;
?>

