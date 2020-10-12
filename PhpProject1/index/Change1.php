
<?php
require_once "sql/SQL_on.php";
$UID = $_POST['UID'];
$pacient = $_POST['pacient'];
$date_o = $_POST['date_o'];
$date_c = $_POST['date_c'];
$diagnoz = $_POST['diagnoz'];
//$UID = $_POST['UID'];

mysqli_query($link, "UPDATE `diagnoz` SET `pacient` = '$pacient', `diagnoz` = '$diagnoz', `date_o` = '$date_o', `date_c` = '$date_c' WHERE `diagnoz`.`UID` = $UID" );
header('Location: /PhpProject1/Change_Diagnoz.php');
exit;
?>
