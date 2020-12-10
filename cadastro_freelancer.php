<?php
	include('conexao.php');
	$email = @$_SESSION['email'];
	$nome = @$_SESSION['nome_completo'];
	$experiencia = @$_SESSION['experiencia'];
	$nome_fantasia = @$_SESSION['nome_fantasia']; 
	$id_usuario = @$_SESSION['id_usuario'];

 ?>
	<?php	
		$queryTipoUsuario = "SELECT * FROM usuario where tipo_usuario = 'F' and id_usuario =  $id_usuario" ;
		$retornoTipoUsuario = mysqli_query($con, $queryTipoUsuario);

		if (mysqli_num_rows($retornoTipoUsuario) == 1) {
			if (@$_SESSION['id_usuario'] != "") { 	
		?>			
		<!DOCTYPE html>
		<html lang="pt-br">
			<head>
				<title>Cadastro Freelancer</title>
				<link rel="stylesheet" type="text/css" href="css/styleCadastroCliente.css" />
			</head>
			<body>
			<header>
			</header>
				<a href="index.php">Início</a>
				<section id="Corpo">	
					<div class = "MoveLado">
						<form action="cadastro_freelancer_bd.php" method="post" enctype="multipart/form-data" class="">
							<label for="nome">Nome Completo:</label><br>
							<input class='input_modifica' type="text" value="<?php echo $nome ?>"  name="nome" id="nome" maxlength="100" required><br><br>
			
							<label for="email">Email:</label><br>
							<input class='input_modifica' value="<?php echo $email ?>" type="text" name="email" id="email" maxlength="100" readonly><br><br>

							<label for="fotoPerfil">Foto de perfil</label><br>
							<input type="file" name="fotoPerfil"><br><br>

							<label for="fotoProfissional">Certificados: </label><br>
							<input type="file" name="fotoProfissional"><br><br>

							<label for="experiencia">Descreva suas experiências:</label><br>
							<textarea name="experiencia" rows="5" cols="33" placeholder="<?php echo $experiencia ?>" maxlength="254"></textarea>
							<br>
							<?php									
								$sql = "SELECT * FROM tipo_servico";
								//echo $sql;
								$retorno = mysqli_query($con, $sql);
								if(!$retorno) {
									echo mysqli_error($con);
								} else {
							?>

							<div>
								<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Area de atuação:</label><br>
								<select name="area_atuacao" id="area_atuacao" required >
									<option selected> Escolha </option>
									<?php 
										while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
									?>
										<option value="<?php echo $item['nome_servico']; ?>"><?php echo $item['nome_servico']; ?></option>
									<?php 
										}
									?>
								</select> <br><br> 
							</div>             			
							<?php 
								}
							?>			
							<label for="nome_fantasia">Nome Fantasia:</label><br>
							<input class='input_modifica' type="text" value="<?php echo $nome_fantasia ?>" name="nome_fantasia" maxlength="100"><br><br>

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
    }else{
        header('location:index.php?retorno=UsuarioNaoAutorizado');
   }    
    ?>

