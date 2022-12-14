<?php
require '../config.php';

$nome =filter_input(INPUT_POST, 'nome');
$email =filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha =  filter_input(INPUT_POST, 'senha');

if ($nome &&    $email && $senha ) {
   
$statement= $db->prepare ('INSERT INTO  USUARIO ( nome_user, email_user, senha_user ) VALUES ( :nome, :email, :senha)');   


$statement->bindParam(':nome',$nome) ;
$statement->bindParam(':email',$email) ;
$statement->bindParam(':senha',$senha) ;


$statement->execute();


}
?>
