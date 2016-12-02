<?php
	require_once 'Conexao.php';

	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);

	$temaNome = $_POST["temaNome"];
	
	$queryInsercao = array('tm_nome' => $temaNome);
	$insert = $conexao->insert('tw_tema', $queryInsercao); 
	
	
	header("Location: addTema.php");
	exit;
?>
