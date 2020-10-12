<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <link href="CSS/css.css" rel="stylesheet" type="text/css"/> 
</head>
<body>    
<?php
require_once 'index/sql/SQL_on.php';
$drop = "SELECT * FROM diagnoz";
 $drop1 = mysqli_query($link,$drop) or die(mysqli_error($link));
 $diagnozuid = "SELECT * FROM diagnozuid";
 $diagnozuid1 = mysqli_query($link,$diagnozuid) or die(mysqli_error($link));
 ?>
    <p>Список пациентов</p>   
    <form>
 <select onchange="document.location=this.options[this.selectedIndex].value">    
     <?php
 while ($drop2= mysqli_fetch_assoc($drop1))
 {
 ?>            
            <option value="Change_Diagnoz.php"><?= $drop2['pacient'];?></option>            
    <?php
 }
    ?>
            </select>     
        </form>   
    <fieldset>
    <p>Форма внесения случая</p>
    <form action="index/Post.php" method="post">
        <p>uid</p>
        <input type="text" required name="UID" >    
        <p>Имя пициента</p>
        <input type="text" required name="pacient">
<!--        <p>Диагноз</p>
        <input type="text"  name="diagnoz">-->
        <p>Диагноз</p>  
        <select name="diagnoz">
        <?php       
 while ($drop3= mysqli_fetch_assoc($diagnozuid1))
 {
 ?>        
        <option><?= $drop3['R'];?></option>       
   <?php
 }
    ?>
        </select>
        <br>        
        <p>Дата открытия случая</p>
        <input  type="date" required name="date_o" >
        <p>Дата закрытия случая</p>
        <input type="date"  name="date_c"> 
        <button type="submit">Внести случай</button>
    </form>
    </fieldset>
    <br>
<button><a href="indexx.php">Вернуться на главную страницу</a></button>
 </body>
</html>
