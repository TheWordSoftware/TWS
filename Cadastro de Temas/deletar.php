
<?php
	require_once 'conexao.php';
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	$conexao->delete('pessoa', 'cpf', $_GET["cpf"]); 
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>
