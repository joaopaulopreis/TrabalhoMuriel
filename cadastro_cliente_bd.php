<?php 
    include('conexao.php');
?>
<?php 
    $nome     = $_POST['nome'];
    $email    = $_POST['email'];
    $senha   = $_POST['senha'];

    $sql = "UPDATE usuario
    SET CAMPO = "novo_valor"
    WHERE CONDIÇÃO"
    
    
    "INSERT INTO usuario VALUES (null, '$nome_completo', '$email', '$senha', null , null, null, null, null, null, )";
    
    $retorno = mysqli_query($con, $sql);
    if ($retorno) {
        header('location: cadastro_cliente.php?retorno=CadastroSucess');
    }else{
        echo 'Erro ao realizar o cadastro! Erro: ' .mysqli_error($con);
    };

?>