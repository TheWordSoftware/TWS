<?php  
	session_start();
	require_once 'Conexao.php';
  
  	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	
	$id = $_POST["acc"];
	$sth = $conexao->executar("SELECT tm_nome, ob_nomePortugues, ob_nomeIngles, ob_audio, ob_imagem 
							   FROM tw_tema, tw_objeto 
							   WHERE tm_codigo = $id AND ob_tm_codigo = tm_codigo ORDER BY RAND() LIMIT 1"
							 ); 
	if($sth){ 
		foreach ($sth as $dados){
			$_SESSION["resp"] = $dados["ob_nomeIngles"];
			echo "<div class='tema-item'>
					<h1 class='tema'>Tema: ". $dados["tm_nome"] . "</h1>
					<div class='imagem-game'>
						<div class='sub-tema'>
							<h2 class='objeto'>Nome em português: " . $dados["ob_nomePortugues"] . "</h2>
						</div>
						<div class='img-audio'>
							<img src='data:image/jpeg;base64," . base64_encode($dados["ob_imagem"]) ."' class='imagem'/>
							<br>
							<audio controls>
								<source src='data:audio/mpeg;base64," . base64_encode($dados["ob_audio"]) . "' type='audio/wav'>
							</audio>
						</div>
					</div>
					<form class='formResposta' action='resposta.php' method='POST'>
						<h3>Escreva o nome em inglês, do item mostrado acima:</h3>
						<input type='text' required placeholder='Sua Resposta' name='resposta' alt='Escreva o nome em inglês do item mostrado acima' class='resposta'>
						<div class='center'>
							<input type='submit' value='Responder' class='action btn-responder' alt='Responder'>
						</div>
					</form>
				  	<script src='js/script.js'></script>
				  </div>";
		} 
	} 						  
?>