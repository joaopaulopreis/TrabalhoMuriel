
<?php 
    include('conexao.php');

    $nome_completo     = $_POST['nome_completo'];
    $email    = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo_usuario = $_POST['tipoUsuario'];
    $data = date('Y-m-d');

    $sql = "INSERT INTO usuario VALUES (null, '$nome_completo', '$email', '$senha', null , null, null, null, '$tipo_usuario', null, '$data', '0')";
    
    $retorno = mysqli_query($con, $sql);
    if ($retorno) {
        header('location: login.php?retorno=CadastroSucess');
    }else{
        echo 'Cliente não foi cadastrado! Erro: ' .mysqli_error($con);
    };

?>