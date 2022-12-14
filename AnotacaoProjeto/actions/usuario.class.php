<?php
class Usuario{
public function login ($email,$senha){
 global $db;
 $sql= "SELECT  * FROM  usuario  where email_user=:email  AND senha_user= :senha "; 
 $sql = $db->prepare($sql);
 $sql->bindValue(':email',$email) ;
 $sql->bindValue(':senha',$senha) ;
 $sql->execute();

  if ($sql->rowCount()>0) {
    $dado= $sql->fetch();
    echo $dado['Id_user'];
    $_SESSION['Id_user'] = $dado['Id_user'];
    return true;
  
  }else {
    return false;
  }
}
public  function logged($id){
global $db;
$array =array();
$sql = "SELECT   nome_user FROM usuario WHERE  Id_user =:Id_user";
$sql = $db->prepare($sql);
$sql->bindValue(':Id_user', $id);
$sql->execute();
if ($sql->rowCount() >0){
    $array= $sql->fetch(); 

}
 return $array;
}

}
?>