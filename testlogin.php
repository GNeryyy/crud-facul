<?php
session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        //Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];
    

       $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$password'";

       $result = $conexao->query($sql);


        if(mysqli_num_rows($result) < 1)
        {
             unset($_SESSION['email']);
             unset($_SESSION['password']);
            header('Location: login.php');
        }
        else 
        {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: sistema.php');
        }
    }
    else
    {
        //Não acessa
        header('Location: login.php');
    }

?>