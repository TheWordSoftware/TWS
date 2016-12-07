<?php
  require_once 'Conexao.php';
  
  $conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);

  $objetoPtNome =  $_POST["objetoPtNome"];
  $objetoUsNome =  $_POST["objetoUsNome"];
  /* Valores para áudio */
  $audio = $_FILES['audio']['tmp_name']; 
  $tamanhoAudio = $_FILES['audio']['size']; 
  $tipoAudio = $_FILES['audio']['type']; 
  $audioNome = $_FILES['audio']['name']; 
  /* Valores para imagem */
  $imagem = $_FILES['imagem']['tmp_name']; 
  $tamanhoImagem = $_FILES['imagem']['size']; 
  $tipoImagem = $_FILES['imagem']['type']; 
  $imagemNome = $_FILES['imagem']['name']; 
  /* -------------------- */
  $temaCodigo = $_POST["temaId"];

  $fpAudio = fopen($audio, "rb");
  $conteudoAudio = fread($fpAudio, $tamanhoAudio);
  $conteudoAudio = addslashes($conteudoAudio);
  $fpImagem = fopen($imagem, "rb");
  $conteudoImagem = fread($fpImagem, $tamanhoImagem);
  $conteudoImagem = addslashes($conteudoImagem);
  fclose($fpImagem);

  $queryInsercao = array('ob_nomePortugues'=>$objetoPtNome, 
                         'ob_nomeIngles'=>$objetoUsNome, 
                         'ob_nome_audio'=>$audioNome, 
                         'ob_tamanho_audio'=>$tamanhoAudio, 
                         'ob_tipo_audio'=>$tipoAudio, 
                         'ob_audio'=>$conteudoAudio, 
                         'ob_nome_imagem'=>$imagemNome, 
                         'ob_tamanho_imagem'=>$tamanhoImagem, 
                         'ob_tipo_imagem'=>$tipoImagem, 
                         'ob_imagem'=>$conteudoImagem, 
                         'ob_tm_codigo'=>$temaCodigo
                        );

  $insert = $conexao-> insert('tw_objeto', $queryInsercao); 
  
  header("Location: addItem.php");
?>
