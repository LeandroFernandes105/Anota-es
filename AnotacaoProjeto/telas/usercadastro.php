<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>
    <script src="../js/validate.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
   
</head>
<body>
<div class="cadastro">
    <form method="POST" action="usercadastro.php" >
         <h1>Sistema de anotações</h1>
         <h2>Cadastro de usuario</h2>

        <div class="nome">
                Nome:<input type="text"  id="nome" name="nome" placeholder="Digite seu nome" required> 
        </div>
        </br>
        <div class="email">
                Email:<input type="email" id="email" name="email"  placeholder="Digite seu email"required  >
        </div>
        </br>
        <div class="senha">

        Senha:<input id="pwd" name="senha"type="password"   placeholder="Digite sua senha" required>
        </div>
        </br>
     
        <div class="confirsenha">
                Confirme sua senha: <input id="pwd2" name="confirsenha"type="password"  placeholder="Digite sua senha" required>

        </div>
        </br>
                <input type="submit" class="botao" value="CADASTRAR">
        
        
    </form>
    </br>
        <div class="link"><a href="login.php">Voltar </a></div>

    <?php
  
    
    require '../actions/user_action.php';
    ?>
        
</body>
</html>