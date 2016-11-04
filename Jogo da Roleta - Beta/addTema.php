<form id="frmCadastro" action="cadastrarTema.php" method="POST">
	<label for="txtNome">Nome:</label>
	<input type="text" name="txtNome"/> 
	<input type="submit" value="Salvar" id="btnSalvar" name="submit"/> 
</form>
<table id="tblListar">
	<caption>TEMAS</caption>
	<thead>
		<tr> 
			<th>ID</th> <th>Nome</th> 
		</tr>
	</thead>
	<tbody id="corpo">
		<?php
			require_once 'conexao.php';

			$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);

			$select = $conexao->executar('SELECT * FROM tw_tema');
			if($select){
				foreach ($select as $pessoa) {						
					echo "<td>".$pessoa['tm_codigo']."</td>";
					echo "<td>".$pessoa['tm_nome']."</td></tr>";
				}
			}
		?>		
				
	</tbody>
</table>

