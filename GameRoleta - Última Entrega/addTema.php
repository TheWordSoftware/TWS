<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de temas da roleta</title>
	<meta charset="utf-8">
    <script src="js/jquery-3.1.1.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.php" class="action">Home</a></li>
			<li><a href="game.php" class="action">Jogo</a></li>
			<li><a href="#" class="action">Cadastrar Tema</a></li>
			<li><a href="addItem.php" class="action">Cadastrar Item</a></li>
			<li><a href="#" class="action">Contacts</a></li>
		</ul>
	</nav>
	<form class="formCadastro" action="cadastrarTema.php" method="POST">
		Nome do tema:
		<input type="text" name="temaNome" required placeholder="Ex: Personal Objects" alt="Nome do tema" class="text"/><br> 
		<div class="center">
			<input type="submit" value="Salvar Tema" class="btn action" name="submit" alt="Salvar Tema"/>
		</div>
	</form>
	<script src="js/script.js"></script>
</body>
</html>


