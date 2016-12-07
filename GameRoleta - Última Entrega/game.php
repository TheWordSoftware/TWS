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
		<ul>
			<li><a href="index.php" class="action">Home</a></li>
			<li><a href="#" class="action">Jogo</a></li>
			<li><a href="addTema.php" class="action">Cadastrar Tema</a></li>
			<li><a href="addItem.php" class="action">Cadastrar Item</a></li>
			<li><a href="#" class="action">Contacts</a></li>
		</ul>
	</nav>
	<div id="conteudo">
		<div id="game">
			<div id="seta">
				<img src="imagens/roleta/seta1.png">
			</div>
			<div id="div-roleta">
				<img src="imagens/roleta/roleta.png" id="roleta">
			</div>
			<audio id="som">
	  			<source src="audios/roletaSom.wav" type="audio/wav">
			</audio> 
			<button id="button" autofocus>Girar</button>
			<script src="js/script.js"></script>
		</div>
	</div>
</body>	
</html>
