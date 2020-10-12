<!DOCTYPE HTML>
<html>
    <head>
<?php
require_once "index/sql/SQL_on.php";
require_once "index/sql/SQL_pacients.php";
?>
        <meta charset="utf-8">
  <link href="CSS/css.css" rel="stylesheet" type="text/css"/>
   </head>  
   <body> 
        <table>
            <tr id="hide"><th>id</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Пол</th><th>Дата рождения</th><th>Дата смерти</th></tr>
<?php
$query = "SELECT * FROM users";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
 while ($userss = mysqli_fetch_assoc($result))
   {
      ?>
       
           <tr>
        <td>  
    <?php echo $userss['id'];?>     
        </td>    
     <td> 
    <?php echo $userss['2ndname'];?>    
        </td>    
        <td>
    <?php echo $userss['1stname'];?> 
        </td>   
        <td>      
    <?php echo $userss['3thname'];?>      
        </td>
        <td>     
    <?php echo $userss['pol_mj'];?> 
        </td>
           <td>     
    <?php echo $userss['date_b'];?> 
        </td>
           <td>     
    <?php echo $userss['date_d'];?> 
        </td>
          </tr>
       
       <?php
   }
   ?>          
          </table>
       <br>
        <button><a href="indexx.php">Вернуться на главную страницу</a></button>
   </body>
       </html>