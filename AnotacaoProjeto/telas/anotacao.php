<?php

require  "../actions/verifica.php";
require "../actions/anotacao_action.php";


if (isset($_SESSION['Id_user']) &&  !empty($_SESSION['Id_user']) ):?>
<?php else: header("Location: ../telas/login.php"); endif;   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Anotação</title>
</head>
<body>
<div class="anotacao">

 


<form method="POST" action="anotacao.php" >

         <h1>Sistema de anotações</h1>
         <?php echo "Usuario:" .$nomeuser ;?>

    <div class="titulo">
         </br>
        Titulo:<input type="text"  id="titulo" name="titulo"  placeholder="Escreva o titulo da anotação" required> 
    </div>
    </br>
    

    <div class="conteudo">
        Conteudo:<textarea id="conteudo" name="conteudo"  placeholder="Faça a sua anotação " required  ></textarea>
    </div>
    </br>
        <input type="submit" class="botao"  value="ANOTAR  ">
        

    </form>
    </br>
     <a href="../actions/logout.php">SAIR</a>
    </br>
<h2>Anotações</h2>

</body>
</html>
</div>

    <div class="tabela">
    <table >


        <?php foreach ($select as $i): ?>
  
            <tr>
                <th><?php echo $i["titulo"] . "</br>"; ?></th>
            </tr>
            <tr>
            <td><?php echo $i["conteudo"]. "</br>"; ?> </td> 
            </tr>
    <?php endforeach; ?>
    </table>





