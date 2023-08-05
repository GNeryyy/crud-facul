<?php


	if(isset($_POST['submit']))
    {
     

       include_once ('config.php');

       $email = $_POST['email'];
       $password = $_POST['password'];

       $result = mysqli_query($conexao, "INSERT INTO usuarios(email,senha) 
       VALUES ('$email','$password')");

       header('Location: login.php');
    }

	
?>

<!DOCTYPE

<html lang="pt-br">

<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">

<title>Cadastro</title>


<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap');

/** Variaveis - colors **/
:root {
    /* Light */
    --color-light-50: #f8fafc;

    /* Dark */
    --color-dark-50: #797984;
    --color-dark-100: #312d37;
    --color-dark-900: #000;

    /* Blue */
    --color-purple-50: #13237c;
    --color-purple-100: #3c95be;
    --color-purple-200: #000000;

    /* Gradient */
    --color-gradient: linear-gradient(90deg, var(--color-purple-50), var(--color-purple-100), var(--color-purple-200));
}

  body {
    margin: 0;
    padding: 0;
    background: var(--color-gradient);}
    .form-container {
			background-color: #fff;
			border-radius: 10px;
			padding: 20px;
			box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
			max-width: 500px;
			margin: auto;
			margin-top: 50px;
			position: relative;
		}
		
		.form-container h2 {
			text-align: center;
		}
		
		.form-group {
			position: relative;
			margin-bottom: 40px;
		}
		
		.form-group label {
			position: absolute;
			top: 0;
			left: 0;
			font-size: 16px;
			color: #999;
			transition: all 0.3s ease-out;
			pointer-events: none;
		}
		
		.form-group input {
			width: 100%;
			padding: 20px 0;
			border: none;
			border-bottom: 2px solid #ddd;
			background-color: transparent;
			font-size: 16px;
			color: #666;
		}
		
		.form-group input:focus {
			outline: none;
			border-bottom: 2px solid #1e90ff;
		}
		
		.form-group input:focus + label,
		.form-group input:valid + label {
			top: -20px;
			font-size: 14px;
			color: #1e90ff;
		}
		
		.form-group input:focus + label {
			color: #1e90ff;
		}
		
		.form-group input:focus + label + .bar:before,
		.form-group input:focus + label + .bar:after {
			width: 50%;
		}
		
		.form-group .bar {
			position: relative;
			display: block;
			width: 100%;
		}
		
		.form-group .bar:before,
		.form-group .bar:after {
			content: '';
			height: 2px;
			width: 0;
			bottom: 0;
			position: absolute;
			background-color: #1e90ff;
			transition: all 0.3s ease-out;
		}
		
		.form-group .bar:before {
			left: 50%;
		}
		
		.form-group .bar:after {
			right: 50%;
		}
		
		.btn {
			display: block;
			background-color: #1e90ff;
			color: #fff;
			text-align: center;
			padding: 10px 0;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			transition: all 0.3s ease-out;
			margin-top: 30px;
		}
		
		.btn:hover {
			background-color: #fff;
			color: #1e90ff;
			border: 2px solid #1e90ff;
		}

		.voltar {
			text-decoration: none;
			color: red;
			text-shadow: #13237c;
		}

		.butom {
			color: green;
		}



		
</style>
</head>
<body>

	<div class="row">
		<a href="login.php" class="nav-link">
		<input class="btn btn-success" type="button" value="Voltar">
		</a>
	</div>
		
<div class="form-container">
		<h2>Formulário de Cadastro</h2>
		<form action="formulario.php" method="post">
			<!--<div class="form-group">
				<input type="text" id="name" name="nome" required>
				<label for="nome">Nome</label>
				<div class="bar"></div>
			</div>-->
			<br>
			<div class="form-group">
				<input type="email" id="email" name="email" required>
				<label for="email">E-mail</label>
				<div class="bar"></div>
			</div>
			<div class="form-group">
				<input type="password" id="password" name="password" required>
				<label for="password">Senha</label>
				<div class="bar"></div>
			</div>
            <input type="submit" name="submit" value="Registrar" class="btn btn-primary btn-lg btn-block">	
        </form>
	</div>
	<script>
		document.querySelectorAll('.form-group input').forEach(input => {
			input.addEventListener('focus', () => {
				input.parentNode.querySelector('label').classList.add('active');
			});
			input.addEventListener('blur', () => {
				if (input.value.length === 0) {
					input.parentNode.querySelector('label').classList.remove('active');
				}
			});
			if (input.value.length > 0) {
				input.parentNode.querySelector('label').classList.add('active');
			}
		});
	</script>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>