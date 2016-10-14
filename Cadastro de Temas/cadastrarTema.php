
<?php
	require_once 'conexao.php';
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	$dados = array('tm_nome' => $_POST["txtNome"]);
	$insert = $conexao->insert('tw_tema', $dados); 
	
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>
