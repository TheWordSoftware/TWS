<?php  
	session_start();
	$resposta;

	if(strcasecmp($_POST["resposta"], $_SESSION["resp"]) == 0){
		$_SESSION["rp"] = true;
	}
	else{
		$_SESSION["rp"] = false;
	}

	header("Location: game.php");
?>