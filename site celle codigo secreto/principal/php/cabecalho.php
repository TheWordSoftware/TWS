<?php
ob_start();
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <!-- <title>Sobre</title> -->
    <meta charset="utf-8">
    <script src="../javaScript/jquery-1.12.0.min.js"></script>
    <link rel="shortcut icon" href="../Imagens/logoIFPE.png"/>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" media="all">
    <link rel="stylesheet" type="text/css" href="../css/estilo_quiz.css" media="all">
    <link rel="stylesheet" type="text/css" href="../css/style_cadastro.css" media="all">
    <link rel="stylesheet" type="text/css" href="../css/kickstart-buttons.css" media="all">
    <script src="../javaScript/javaScript.js"></script>
</head>
<body>
    <header>
        <div id="logo">
            <?php

            // Checa se não existe usuário salvo na sessão (Só vai exibir os campos para login se não existir)
            if(!isset($_SESSION['usuario'])){
            ?>
            <!-- formulário de login -->
                <div class="login">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <table id="login" cellspacing="5">
                            <tr>
                                <td><span class="log">Usuário</span></td>
                                <td><input type="text" placeholder="nome" name="usuario" required></td>
                            </tr>
                            <tr>
                                <td><span class="log">Senha</span></td>
                                <td><input type="password" placeholder="senha" name="senha" required></td>
                                <td><input class="large" type="submit" name="enviar" Value="Login"></td>
                            </tr>
                            <tr>
                                <td>
                                </td> 
                                <td >
                                <a href="cadastro.php" style="width: 80%;"><small>Cadastre-se aqui</small></a>
                                </td>   
                            </tr>
                            
                        </table>
                        
                    </form>
                </div>
                <?php
            }
            // Se existir usuário salvo na sessão, exibe uma mensagem de boas vindas e o botão para logout
            else {
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <input class="submit logout" style="margin-right: 15%; margin-top: 52px;" type="submit" name="logout" value="Logout">
                </form>
                <?php
                echo "<span class='boas_vindas'>Bem vindo(a), <b>" . $_SESSION['usuario'] . "</b>!! </span>";
            }
            // Se o botão para 'logout' for clicado, tira o usuário da sessão e redireciona para página home.php
            if(isset($_POST['logout'])) {
                unset($_SESSION['usuario']);
                header("location: home.php");
            }
            ?>
            <div class="banner">
                <div id="logo-reitoria">
                    <img src="../imagens/logo.png" widht="300px" height="90px">
                    <a class="acesso-reitoria"></a>
                </div>
            </div>
        </div>  
        <nav id="menu">
            <ul class="menu">        
                <li><a href="home.php" class="botaoMenu" id="home.php">Home</a></li>
                <li><a href="sobre.php" class="botaoMenu" id="sobre.php">Sobre</a></li>
                <li><a href="noticias.php" class="botaoMenu" id="noticias.php">Notícias</a></li>
                <li><a href="#" id="#">Mídia</a>
                    <ul>
                        <li><a href="videos.php" class="botaoMenu" id="videos.php">Vídeos</a></li>
                        <li><a href="audios.php" class="botaoMenu" id="audios.php">Áudios</a></li>
                    </ul>
                </li>
                <li><a href="#" id="#">Atividades</a>
                    <ul>
        <li><a href="quiz.php" class="botaoMenu">Quiz 1</a></li>
        <li><a href="quiz_2.php" class="botaoMenu">Quiz 2</a></li>
                    </ul>
                </li>
                <li><a href="#" id="#">Conteúdos</a>
                    <ul>
                        <li><a href="paises_nacionalidades.php" class="botaoMenu" id="paises_nacionalidades.php">Países e Nacionalidades</a></li>
                        <li><a href="expressoes_termos.php" class="botaoMenu" id="expressoes_termos.php">Expressões e Termos</a></li>
            <li><a href="numerais.php" class="botaoMenu" id="numerais.php">Numerais</a></li>
    <li><a href="medidas.php" class="botaoMenu" id="medidas.php">Medidas</a></li>
                    </ul>    
                </li>
                <li><a href="arquivos.php" class="botaoMenu" id="arquivos.php">Envio</a></li>
                <li><a href="sites_relacionados.php" class="botaoMenu" id="sites_relacionados.php">Sites Relacionados</a></li>        
                <li><a href="contatos.php" class="botaoMenu" id="CONTATOS.php">Contato</a></li>
            </ul>
            <br><br>
        </nav>
    </header>
    <?php

    // validação do usuário para login

    if(isset($_POST['enviar'])) {
        $user = $_POST['usuario'];      // Salva o conteúdo do input name="usuario" do form de login na variável $user
        $pass = md5($_POST['senha']);   // Salva o conteúdo do input name="senha" do form de login na variável $pass
        
        // Salva os dados do servidor, usuario, senha e nome do banco de dados para fazer a conexão

        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "site_celle";

        $link = mysqli_connect ($server, $username, $password, $dbname);    // Faz a conexão com o banco de dados
        
        // consulta para puxar do banco usuario e senha que sejam iguais aos digitados no form de login

        $query = "SELECT senha, usuario FROM usuarios WHERE usuario='$user' AND senha='$pass'";
        $result = mysqli_query($link, $query);      // Executa a query e salva o resultado
        
        // Checa se houve resultado da consulta
        if($result){
            $arr = mysqli_fetch_assoc($result);     // Transforma o resultado da consulta em um array associativo (os índices são as colunas da tabela 'usuarios')
            $row = mysqli_num_rows($result);        // Recebe o número de linhas retornadas da consulta ao banco

            // Checa se o usuário e senha digitados no form de login são iguais aos que estão salvos no banco de dados
            if($user == $arr['usuario'] && $pass == $arr['senha']){
                // Se verdadeiro, salva o usuário na sessão
                $_SESSION['usuario'] = $user;
            }

            // Checa se o número de linhas retornadas da consulta é diferente de zero. Se verdadeiro, redireciona para a página "home.php"
            if($row != 0) {
                header("location: home.php");
            }

            // Senão, exibe um alerta para o usuário
            else {
                echo "<script>
                alert('Usuário ou senha incorretos!!');
                </script>";
            }
        }
        // Encerra a conexão com o banco de dados
        mysqli_close($link);
    }
    ob_end_flush();
    ?>