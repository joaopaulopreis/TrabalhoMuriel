<?php
    include('conexao.php');
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM projetos WHERE id_projetos = $id";
	
	$retorno = mysqli_query($con, $sql);
	if (!$retorno) {
		header('Location: listar_projetos_cliente.php?erro=1&msg=' . mysqli_error($con));
		//echo 'Cliente não foi excluído! Erro: ' . mysqli_error($con);
	} else {
		header('Location: listar_projetos_cliente.php?sucesso=1&msg=' . $id);
		//echo 'Cliente excluído com sucesso! Cliente código: ' . $id;
	}
	mysqli_close($con);
?>