
<?php
require_once "index/sql/SQL_on.php";
$diagnoz_uid = $_GET['id'];
$diagnoz = mysqli_query($link, "SELECT * FROM diagnoz WHERE uid= $diagnoz_uid");
$diagnoz = mysqli_fetch_assoc($diagnoz);


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="CSS/css.css" rel="stylesheet" type="text/css"/> 
        <title>Change</title>        
    </head>
    <body>       
         <form action="index/change1.php" method="post">            
        <input type="hidden" name="pacient" value="<?=$diagnoz['pacient']?>" >      
        <input type="hidden" name="UID" value="<?=$diagnoz['UID']?>" >
        <p>Диагноз</p>
        <input type="text" required name="diagnoz"  value="<?=$diagnoz['diagnoz']?>">        
        <input  type="hidden"  name="date_o" value="<?=$diagnoz ['date_o']?>">
        <p>Дата открытия</p>
        <input type="date" required name="date_c" <?=$diagnoz['date_c']?>>     
        <button type="submit">Подтвердить изменения</button>        
    </form>      
    </body> 
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

