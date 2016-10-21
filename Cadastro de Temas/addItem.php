<!DOCTYPE html> 
<html>
	<head>
		<title>HTML5 Storage com JSON</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link href="estilos_1.css" rel="stylesheet" type="text/css">				
	</head>
	<body>
		<form id="frmCadastro" action="cadastrarItem.php" method="POST">
			<label for="txtNome">Nome item:</label>
				<input type="text" name="txtNome"/> 
			<label for="txtAudio">Audio:</label>
				<input type="text" name="txtAudio"/> 
			<label for="txtImagem">Imagem:</label>
				<input type="text" name="txtImagem"/> 
			<label for="txtItTmCod">Id tema - referente ao item:</label>
				<input type="text" name="txtItTmCod"/> 
			<input type="submit" value="Salvar" id="btnSalvar" name="submit"/> 
		</form>
		
		<table id="tblListar">
			<caption>ITENS</caption>
			<thead>
				<tr> 
					<th>Nome</th> <th>Id</th> <th>Audio</th> <th>Imagem</th>  <th>Id do tema ao qual faz parte</th>
				</tr>
			</thead>
			<tbody id="corpo">
				<?php
					require_once 'conexao.php';

					$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);

					$select = $conexao->executar('SELECT * FROM tw_item');
					if($select){
						foreach ($select as $pessoa) {						
							echo "<td>".$pessoa['it_nome']."</td>";
							echo "<td>".$pessoa['it_id']."</td>";
							echo "<td>".$pessoa['it_audio']."</td>";
							echo "<td>".$pessoa['it_imagem']."</td>";
							echo "<td>".$pessoa['it_tm_codigo']."</td></tr>";
							
						}
					}
				?>		
				
				
			</tbody>
		</table>
	</body>
</html>
