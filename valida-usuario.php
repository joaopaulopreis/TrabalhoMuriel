<?php
	
	include('conexao.php');

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$queryTipoUsuario = "SELECT * FROM usuario where primeiro_login = 0 and tipo_usuario = 'F' and email = '$email' and senha = '$senha'" ;
	$retornoTipoUsuario = mysqli_query($con, $queryTipoUsuario);

	if (mysqli_num_rows($retornoTipoUsuario) != 1) {
		
		$queryLogin = "SELECT * FROM usuario where email = '$email' and senha = '$senha'";
		$retornoLogin = mysqli_query($con, $queryLogin);

		if (mysqli_num_rows($retornoLogin) == 1){
			while ($row = mysqli_fetch_array($retornoLogin)){
			$_SESSION['id_usuario'] = $row['id_usuario'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['experiencia'] = $row['experiencia'];
			$_SESSION['nome_fantasia'] = $row['nome_fantasia'];
			$_SESSION['tipoUsuario'] = $row['tipoUsuario'];
			$_SESSION['nome_completo'] = $row['nome_completo'];
			}
			header("Location:index.php");
		} else {		
			header("Location:login.php?retorno=erro");
		}
	} else {
				
		$queryLogin = "SELECT * FROM usuario where email = '$email' and senha = '$senha'";
		$retornoLogin = mysqli_query($con, $queryLogin);

		if (mysqli_num_rows($retornoLogin) == 1){
			while ($row = mysqli_fetch_array($retornoLogin)){
			$_SESSION['id_usuario'] = $row['id_usuario'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['nome_completo'] = $row['nome_completo'];
			}
			header("Location:cadastro_freelancer.php");
		} else {		
			header("Location:login.php?retorno=erro");
		}
	}	


	
?>