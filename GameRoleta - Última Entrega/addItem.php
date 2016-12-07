<?php  
	require_once 'Conexao.php';
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de itens da roleta</title>
	<meta charset="utf-8">
    <script src="js/jquery-3.1.1.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.php" class="action">Home</a></li>
			<li><a href="game.php" class="action">Jogo</a></li>
			<li><a href="addTema.php" class="action">Cadastrar Tema</a></li>
			<li><a href="#" class="action">Cadastrar Item</a></li>
			<li><a href="#" class="action">Contacts</a></li>
		</ul>
	</nav>
	<div>
	<form class="formCadastro" enctype="multipart/form-data" action="cadastrarItem.php" method="POST">
		Nome do objeto em portugês:
		<input type="text" name="objetoPtNome" required alt="Nome do objeto em português" placeholder="Ex: Carro" class="text"/><br>
		Nome do objeto em inglês:
		<input type="text" name="objetoUsNome" required alt="Nome do objeto em inglês" placeholder="Ex: Car" class="text"/>
		<br>
		<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
		Áudio referente ao objeto:
		<input name="audio" type="file" required alt="Upload de áudio" class="file"/>
		<br>
		<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
		Imagem referente ao objeto:
		<input name="imagem" type="file" required alt="Upload de imagem" class="file"/><br>
		<div class="center">
			Tema referente ao objeto: 
			<select name="temaId" required>
				<?php
					$select = $conexao->executar('SELECT * FROM tw_tema');
					if($select){
						foreach ($select as $tema) {						
							echo "<option value='" . $tema['tm_codigo'] . "' alt='" . $tema['tm_nome'] . "'>" . $tema['tm_nome'] . "</option>";
						}
					}
				?>
			</select>
			<br>
		</div>
		<div class="center">
			<input type="submit" value="Salvar Objeto" class="btn action" name="submit" alt="Salvar objeto"/>
		</div> 
	</form>
	<script src="js/script.js"></script>
</body>
</html>