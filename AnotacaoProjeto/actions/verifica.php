<?php
require '../config.php';

if (isset($_SESSION['Id_user']) &&  !empty($_SESSION['Id_user']) ){

     require_once "usuario.class.php";
     $u= new Usuario();
     $listLogged = $u  ->logged($_SESSION['Id_user']);
     $nomeuser= $listLogged['nome_user'] ;
   

}
