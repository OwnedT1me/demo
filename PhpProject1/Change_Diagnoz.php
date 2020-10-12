<!DOCTYPE HTML>
<html>
 <head>
     
  <meta charset="utf-8">
  <link href="CSS/css.css" rel="stylesheet" type="text/css"/>
  
  <title>Пациент</title>
 </head>
 <body> 
    
<?php
require_once "index/sql/SQL_on.php";
require_once "index/Post.php";

if(isset($_GET['del'])){
         $id = $_GET['del'];
         $query = "DELETE FROM diagnoz WHERE UID=$id";
           
     $result2 = mysqli_query($link, $query) or die(mysqli_error($link));
     
}

 $query1 = "SELECT * FROM diagnoz";
 $result3 = mysqli_query($link,$query1) or die(mysqli_error($link));
 //$result2 = mysqli_query($link, "SELECT * FROM diagnoz"); 
                 
 ?>
     <form action="droplist.php" method="post">
     <button >Создание записи</button>
     </form>
<table border ="1">
    <tr id="hide"><th>UID</th><th>Пациент</th><th>Диагноз</th><th>Дата открытия</th><th>Дата закрытия</th></tr>    
<?php
while ($sql10= mysqli_fetch_assoc($result3))
   {      
   ?>
    <tr>
        <td>  
    <a href="droplist.php"> <?php echo $sql10['UID'];?> </a>       
        </td>    
        <td> 
    <?php echo $sql10['pacient'];?>    
        </td>    
        <td>
    <?php echo $sql10['diagnoz'];?> 
        </td>   
        <td>      
    <?php echo $sql10['date_o'];?>      
        </td>
        <td>     
    <?php echo $sql10['date_c'];?>   
        </td> 
        <td><a href="Change_Diagnoz.php?del=<?php echo $sql10['UID']?>">Удалить</a></td>
        <td><a href="change.php?id=<?= $sql10['UID']?>">Изменить</a></td>
    </tr>       
      <?php  
   }
?>   
     </table>  
     <br>
        <button><a href="indexx.php">Вернуться на главную страницу</a></button>
 </body>
</html>