<?php 
	require_once 'conexao.php'; 
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD); 
	$id = $_POST['acc'];
	$select = $conexao->executar("SELECT tm_nome FROM tw_tema WHERE tm_codigo= $id"); 
		if($select){ 
			foreach ($select as $pessoa){	
				echo '<span>'.$pessoa['tm_nome'].'</span>'; 
			} 
		} 
?>