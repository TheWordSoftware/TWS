<?php 
	require_once 'conexao.php'; 
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD); 
	$id = $_POST['acc'];
	$select = $conexao->executar("SELECT tm_nome, it_nome, it_imagem FROM tw_tema, tw_item WHERE it_tm_codigo = $id ORDER BY RAND() LIMIT 1"); 
		if($select){ 
			foreach ($select as $pessoa){	
				$json = json_encode($pessoa);
				echo "<script> var js =" .  $json . "</script>";
			} 
		} 
?>