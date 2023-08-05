<?php 
    require 'config.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM usuarios");
    if($sql->rowCount() > 0){
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/256c835a82.js" crossorigin="anonymous"></script>

    <title>Pagina de Usuarios</title>
    <link rel="icon" href="./imgs/caveira.png">
    <style>
        h1 {
            text-align: center;
            padding: 10px;
            background-color: black;
            color: aquamarine;
        }

        body {
           background-image: url(./imagens/tela-fundo2.png);
            }

        .nav-link {
            color:black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 17px;
        }    
    </style>

</head>
<body>

    <h1>Lista de usuarios</h1>
        <div class="table-reponsive mt-3">
    <table class="table table-striped table-bordered table-dark">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Açoes</th>
    </tr>

    <?php foreach($lista as $usuarios): ?> 

        <tr>
            <td><?=$usuarios['id'];?></td>
            <td><?=$usuarios['email'];?></td>
            <td><?=$usuarios['senha'];?></td>
            <td>
                <a href="editar.php?id=<?=$usuarios['id'];?>" class="ml-3">
                <i class="fa-solid fa-pencil fa-lg" style="color: #04dc57;"></i>
                </a>
                <a href="excluir.php?id=<?=$usuarios['id'];?>" class="ml-4">
                <i class="fa-solid fa-trash fa-lg" style="color: #ff0000;"></i>
                </a>
            </td>
        </tr>


    <?php endforeach; ?>

</table>

</>
    <button class="btn btn-info btn-sm" type="button">
    <a href="formulario.php" class="nav-link">Cadastra-se</a>
    </button>

</body>