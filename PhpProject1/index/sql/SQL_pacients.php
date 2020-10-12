<?php
  
function get_users($link) {
    $sql = "SELECT * FROM users";
    $result = mysqli_query($link, $sql);
    // echo '<pre>';
     $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
     //var_dump($result);
    // echo '</pre>';
     return $users;
}
$users = get_users($link);


