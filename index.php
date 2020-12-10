<?php
    include('conexao.php');
    if (@$_SESSION['id_usuario'] == "") { 
         ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Otter Site</title>
            <link rel="stylesheet" type="text/css" href="css/styleIndex.css" />
        </head>
        <body>
            <header id="Cabeçalho">
                <nav id="Navegador">
                    <a class="Ativo" href="index.php">Início</a>
                    <a href="login.php">Login</a> 
                    <a href="cadastro.php">Cadastre-se</a>
                </nav>
            </header>
        </body>
        </html>
    <?php    
    } else { 
        ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Otter Site</title>
            <link rel="stylesheet" type="text/css" href="css/styleIndex.css" />
        </head>
        <body>
            <header id="Cabeçalho">
                <nav id="Navegador">
                    <a class="Ativo" href="index.php">Início</a>
                    <a class="Ativo" href="cadastro_freelancer.php">Cadastro Freelancer</a>
                    <a class="Ativo" href="cadastro_cliente.php">Cadastro Cliente</a>
                    <a class="Ativo" href="cadastro_portifolio.php">Cadastro Potifolio</a>
                    <a class="Ativo" href="cadastro_projeto.php">Cadastro Projeto</a>
                    <a class="Ativo" href="batepapo.php">Batepapo</a>
                    <a href="login.php?acao=sair">Sair</a>
                </nav>
            </header>
        </body>
        </html>
    <?php    
    }
    ?>
