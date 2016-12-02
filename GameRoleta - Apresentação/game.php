<!DOCTYPE html>
<html>
<head>
	<title>Game</title>
    <meta charset="utf-8">
    <script src="js/jquery-3.1.1.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<nav>
		<a href='index.php' class='action'>Home</a>
		<a href='#' class='action'>Jogo</a>
		<a href="addTema.php" class='action'>Cadastrar Tema</a>
		<a href="addItem.php" class='action'>Cadastrar Item</a>
		<a href='#' class='action'>Contacts</a>
	</nav>
	<div id="conteudo">
		<div id="game">
			<div id="seta"><img src="imagens/roleta/seta1.png"></div>
			<div id="div-roleta"><img src="imagens/roleta/roleta.png" id="roleta"></div>
			<audio id="som">
	  			<source src="audios/roletaSom.wav" type="audio/wav">
			</audio> 
			<button id="button">Girar</button>
		</div>
		<?php  
			session_start();

			if(isset($_SESSION["rp"])){
				if($_SESSION["rp"] == true){
					echo "<script> $('#conteudo').load('resposta/acertou.php'); </script>";
					unset($_SESSION["rp"]);
				}
				else if($_SESSION["rp"] == false){
					echo "<script> $('#conteudo').load('resposta/errou.php'); </script>";
					unset($_SESSION["rp"]);
				}
			}
		?>
	<script src="js/script.js"></script>
	</div>
</body>	
</html>
