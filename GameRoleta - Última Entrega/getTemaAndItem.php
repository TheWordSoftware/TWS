<?php  
	require_once 'Conexao.php';
  
  	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	
	$id = (int) $_POST["acc"];
	$sth = $conexao->executar("SELECT tm_nome, ob_nomePortugues, ob_nomeIngles, ob_audio, ob_imagem 
							   FROM tw_tema, tw_objeto 
							   WHERE tm_codigo = $id AND ob_tm_codigo = tm_codigo ORDER BY RAND() LIMIT 1"
							 ); 
	if($sth){ 
		$json = array();
		foreach ($sth as $dados){
			$json = array(
				"tema" => $dados["tm_nome"],
				"nomePortugues" => $dados["ob_nomePortugues"],
				"nomeIngles" => $dados["ob_nomeIngles"],
				"audio" => base64_encode($dados["ob_audio"]),
				"imagem" => base64_encode($dados["ob_imagem"])
			);
		} 
		echo json_encode($json);
	} 						  
?>