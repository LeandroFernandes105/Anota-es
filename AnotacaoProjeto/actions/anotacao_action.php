<?php

$titulo =filter_input(INPUT_POST, 'titulo');
$conteudo =filter_input(INPUT_POST, 'conteudo');
$id= $_SESSION['Id_user'];


if ($titulo &&    $conteudo) {
   
$statement= $db->prepare ('INSERT INTO  anotacao ( Id_user, titulo, conteudo ) VALUES (  :id, :titulo, :conteudo)');   

$statement->bindParam(':id',$id) ;
$statement->bindParam(':titulo',$titulo) ;
$statement->bindParam(':conteudo',$conteudo) ;


$statement->execute();
}

$statement = $db->prepare("SELECT    titulo,conteudo FROM anotacao WHERE  Id_user =:Id_user");
$statement->bindValue(':Id_user', $id);
$statement->execute();
$select = $statement->fetchAll(PDO::FETCH_ASSOC);






 
?>
