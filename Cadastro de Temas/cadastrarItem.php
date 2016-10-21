
<?php
	require_once 'conexao.php';
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	$dados = array('it_nome' => $_POST["txtNome"], 'it_audio' => $_POST["txtAudio"], 'it_imagem' => $_POST["txtImagem"], 'it_tm_codigo' => $_POST["txtItTmCod"]);
	$insert = $conexao->insert('tw_item', $dados); 
	
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>
