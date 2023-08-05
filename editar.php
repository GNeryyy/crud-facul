<?php
require 'config.php';

$usuarios = [];
$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id',$id);
    $sql->execute();

    if($sql->rowCount() > 0){
    $usuarios = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: usuarios.php");
        exit;
    }
}else{
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Estilo customizado CSS-->
        <link rel="stylesheet"  type="text/css" href="./css2/style2.css">

         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="css/bootstrap.min.css">

         <!-- Fontes CDN -->
         <link href="https://fonts.cdnfonts.com/css/universal-serif" rel="stylesheet">

    
    <title>Editar Cadastro</title>
   
</head>



<div class="container">
    <h1> Editar Cadastro</h1>

    <form class="form-group" method="POST" action="editar_action.php">
        <input type="hidden" name="id" value="<?=$usuarios['id'];?>" >
    <div class="user">
        <label class="email">
        Email: <input class="form-control form-check" type="text" name="email" value="<?=$usuarios['email'];?>" placeholder="Digite seu email">
        </label>
    </div>
    <br>
    <div class="pass">
        <label class="senha">
         Senha: <input class="form-control form-check" type="password" name="senha" value="<?=$usuarios['senha'];?>" placeholder="Digite sua senha">
        </label>
    </div>
  <button type="submit">
        Atualizar
    </button>
    
</form>

</div>
</html>