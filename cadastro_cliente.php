<?php
	include('conexao.php');
	$email = @$_SESSION['email'];
    if (@$_SESSION['id_usuario'] != "") { 
         ?>
        <!DOCTYPE html>
		<html lang="pt-br">
			<head>
				<title>Cadastro Cliente</title>
				<link rel="stylesheet" type="text/css" href="css/styleCadastroCliente.css" />
			</head>
			<body>
			<header>
			<a class="Ativo" href="index.php">Início</a>
			</header>
				<section>	
					<div>
						<form action="cadastro-cliente-db.php" method="post" enctype="multipart/form-data" class="">
							<label for="nome">Nome Completo:</label><br>
							<input class='input_modifica' type="text" name="nome" id="nome" maxlength="20"><br>
			
							<label for="email">Email:</label><br>
							<input class='input_modifica' placeholder="<?php echo $email ?>" type="text" name="email" id="email" maxlength="100" readonly><br>

							<label for="senha">Senha:</label><br>
							<input class='input_modifica' type="password" name="senha" id="senha" minlength="8" maxlength="12"><br><br>

							<input class='input_botao' type="submit" value="Salvar">
						</form>
					</div>
				</section>
			</body>
		</html>
    <?php    
    } else { 
    	header("Location:index.php");   
    }
    ?>


