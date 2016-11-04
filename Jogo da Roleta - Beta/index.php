<!DOCTYPE html>
<html>
  <head>

    <link href="css/styles.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.js"></script>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta charset="utf-8">
    <link href="css/estilos_1.css" rel="stylesheet" type="text/css">	
  </head>
  <body>
  	<nav>
  		<a href="#" id="tema">Cadastrar Tema</a>
  		<a href="#" id="item">Cadastrar Item</a>
  	</nav>
	<div id="imagem">

	</div>
	<div id="nameTema">
		
	</div>
  	<div id="conteudo">
		<div id="roleta"><img src="roleta.png"></div>
		<div id="seta"><img src="seta.png"></div>
		<audio id="som">
  			<source src="audio/roletaSom.wav" type="audio/wav">
		</audio> 
		<button id="button">Aleatório</button>
	</div>
	<script>
		var tema;
		var graus;
		var giros;
		var mult;
		$("#button").on("click", function(){
			graus = 45;
			giros = Math.round(1* Math.random() * 8);

			if(giros < 5){
		  		mult = 6;
			}
			else{
		  		mult = 3;
			}

			var girarRoleta = (graus*giros) + (360*mult);
			$("#roleta").css({transition: "7s"});
			$("#roleta").css({transform: "rotate(" + girarRoleta + "deg)"});
			$("#imagem").load('getTemaAndItem.php', {acc:giros});
			var s = document.getElementById('som');
			s.play();
			$("#button").toggleClass("disable");
			
			setTimeout(reset, 8000);
		});

		function reset(){
			$("#roleta").css({transition: "0s"});
			$("#roleta").css({transform: "rotate(0deg)"});
			$("#button").toggleClass("disable");
			$("#imagem").html("<img src=" + js["it_imagem"] + "><br><h1 class='name'>" + js["it_nome"] + "</h1>");
			$("#nameTema").html("<h1>" + js["tm_nome"] + "</h1>");
			graus = 0;
			giros = 0;
			mult = 0;
	    }

	    $("#tema").on("click", function(){
	    	$("#conteudo").load("addTema.php");
	    });

	    $("#item").on("click", function(){
	    	$("#conteudo").load("addItem.php");
	    });
	</script>
  </body>
</html>		
