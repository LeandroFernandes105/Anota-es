<?php

session_start();
  $user = "root";
  $password = "admin";
 
  

$db = new PDO('mysql:host=localhost;dbname=anotacao',$user,$password);


?>
