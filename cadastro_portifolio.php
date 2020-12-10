<?php
    include('conexao.php');
    
    $id_usuario = @$_SESSION['id_usuario'];
    
    $queryTipoUsuario = "SELECT * FROM usuario where tipo_usuario = 'F' and id_usuario =  $id_usuario" ;
    $retornoTipoUsuario = mysqli_query($con, $queryTipoUsuario);

    if (mysqli_num_rows($retornoTipoUsuario) == 1) {
        if (@$_SESSION['id_usuario'] != "") { 
            ?>
            <!DOCTYPE html>
            <html lang="pt-br">
                <head>
                    <title>Cadastro Portifólio</title>
                    <link rel="stylesheet" type="text/css" href="css/styleCadastroCliente.css" />
                </head>
                <body>
                <header>
                </header>
                    <a href="index.php">Início</a>
                    <section id="Corpo">	
                        <div class = "MoveLado">
                            <form action="cadastro_portifolio_bd.php" method="post" enctype="multipart/form-data" class="">
                                <label for="nome">Nome Projeto:</label><br>
                                <input class='input_modifica' type="text" name="nome" id="nome" maxlength="20"><br>

                                <label for="descricao">Descrição do Projeto:</label><br>
                                <textarea class='input_modifica' type="text" name="descricao" id="descricao"></textarea><br>
                
                                <label for="dataInicio">Data início:</label><br>
                                <input class='input_modifica' type="date" name="dataInicio" id="dataInicio" maxlength="20"><br>
                
                                <label for="dataTermino">Data término:</label><br>
                                <input class='input_modifica' type="date" name="dataTermino" id="dataTermino" minlength="8" maxlength="12"><br>
                
                                <label for="foto">Foto Projeto</label><br>
                                <input type="file" name="foto"><br><br>
                
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

