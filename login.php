<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Estilo customizado CSS-->
        <link rel="stylesheet"  type="text/css" href="./css2/estilo.css">

         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        
    <title>Login</title>
    <link rel="icon" href="./imgs/caveira.png">

</head>
<body>
     
    <main id="container">    
        <form id="login_form" action="testlogin.php" method="POST"> 
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Login</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>

            <!-- SOCIAL MEDIA -->
            <div id="social_media">
                <!-- FACEBOOK -->
                <a href="#">
                    <img src="./imgs/facebook.png" alt="">
                </a>

                <!-- GOOGLE -->
                <a href="#">
                    <img src="./imgs/google.png" alt="Google logo">
                </a>
                
                <!-- GITHUB -->
                <a href="#">
                    <img src="./imgs/github.png" alt="">
                </a>
            </div>

            <!-- INPUTS -->
            <div id="inputs">
               <!-- <div class="input-box">
                    <label for="name">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="name" name="nome">
                        </div>
                    </label>
                </div>-->
                
                <!-- EMAIL -->
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>
                
                <!-- Senha -->
                <div class="input-box">
                    <label for="password">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="password" name="password">
                            <!--<i class="bi bi-eye-fill" id="btn-senha" onclick="mostraSenha()" style="cursor: pointer;"></i>-->
                        </div>
                    </label>
                    
                    <!-- Esqueceu sua senha-->
                    <div id="forgot_password">
                        <a href="#">
                            Esqueceu sua senha ?
                        </a>
                    </div>
                </div>
            </div>

            <!-- LOGIN BUTTON -->
            <input type="submit" name="submit" value="Logar" id="login_button">
                

            <!-- BOTÃO DE CADASTRAR -->
            <div class="cadastro">    
                <a href="formulario.php" class="badge badge-">Cadastre-se</a>
                </div>

                
        </form>
        
    </main>

    <!-- JAVASCRIPT -->
    <script src="./js/script.js"></script>
    <script src="https://kit.fontawesome.com/aba6dc7277.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>