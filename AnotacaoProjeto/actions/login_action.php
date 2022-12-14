<?php	
require '../config.php';
require 'usuario.class.php';

$email =filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha =  filter_input(INPUT_POST, 'senha');




if ($email && $senha){



  $u =new Usuario();
    


    
    if($u->login($email,$senha) == true){
        
      if(isset($_SESSION['Id_user'])){
        header("Location: ../telas/anotacao.php");
       
      } else{
       header("Location: ../telas/login.php");
      }

    } else{
   header("Location: ../telas/login.php");

    };



   
    

} 


?>
