var graus;
var giros;
var mult;
var botao = document.querySelector("#button");
var sound = document.getElementById('som');
var json;

if(botao !== null){
	botao.addEventListener('click', girar, false);
	botao.addEventListener('keypress', girar, false);
}

function girar(e){
	sound.play();
	if((e.keyCode == 13 || e.keyCode == 32) || (e.type == "click")){
		graus = 45;
		giros = Math.round((((1* Math.random()) * 7) + 1));
		if(giros < 5){
			mult = 6;
		}
		else{
			mult = 3;
		}
		$.ajax({
			type: 'POST',
			url: "getTemaAndItem.php", 
			data: {
				acc:giros
			},
			success: function(data) {
				json = JSON.parse(data);
			},
			async: true
		});

		var girarRoleta = (graus*giros) + (360*mult);
		$("#roleta").css({transition: "7s"});
		$("#roleta").css({transform: "rotate(" + girarRoleta + "deg)"});
		$("#button").attr("disabled", "disabled");
			
		setTimeout(function(){
			$("#game").remove();

			$("#conteudo").append("<div class='tema-item'></div>");
			$(".tema-item").append("<h1 class='tema'>" + json["tema"] + "</h1>");
			$(".tema-item").append("<div class='imagem-game'></div>");
			$(".imagem-game").append("<div class='sub-tema'></div>");
			$(".sub-tema").append("<h2 class='objeto'>" + json["nomePortugues"] + "</h2>");
			$(".imagem-game").append("<div class='img-audio'></div>");
			$(".img-audio").append("<img class='imagem' src='data:image/jpeg;base64, " + json["imagem"] + "'/><br>");
			$(".img-audio").append("<audio controls></audio>");
			$("audio").append("<source src='data:audio/mpeg;base64, " + json["audio"] + "' type='audio/wav'></source>");
			$(".tema-item").append("<div class='formResposta'></div>");
			$(".formResposta").append("<h3>Escreva o nome em inglês, do item mostrado acima:</h3>");
			$(".formResposta").append("<input type='text' required placeholder='Sua Resposta' name='resposta' alt='Escreva o nome em inglês do item mostrado acima' class='resposta' id='resposta'>");
			$(".formResposta").append("<div class='center'><input type='submit' class='action btn-responder' id='responder' alt='Responder' value='Responder'><div>");
			$(".tema-item").append("<script src='js/script.js'></script>");
			
			$("#roleta").css({transition: "0s"});
			$("#roleta").css({transform: "rotate(0deg)"});
			$("#button").removeAttr("disabled");
			graus = 0;
			giros = 0;
			mult = 0;
		}, 8000);
	}
};


$("#responder").click(function(){
	if($("#resposta").val() !== ""){
		var valor = $("#resposta").val();
		var nomeIngles = json["nomeIngles"];
		$(".tema-item").remove();
		
		if(valor.toLowerCase() === nomeIngles.toLowerCase()){
			$("#conteudo").append("<div class='div-resp'></div>");
			$(".div-resp").append("<h1>Parabéns!</h1><h1>Você Acertou.</h1>");
			$(".div-resp").append("<div class='center'><a href='game.php' class='btn action'>Retornar</a></div>");
			$(".div-resp").append("<script src='js/script.js'></script>");
		}
		else{
			$("#conteudo").append("<div class='div-resp'></div>");
			$(".div-resp").append("<h1>Sinto Muito...</h1><h1>Você Errou.</h1>");
			$(".div-resp").append("<div class='center'><a href='game.php' class='btn action'>Retornar</a></div>");
			$(".div-resp").append("<script src='js/script.js'></script>");
		}
	}
	else{
		alert("Digite sua resposta.");
	}
});

$(".action").on("mouseover", function(){
	$(this).css("color", "#4682B4");
	$(this).css("background-color", "white");
});
$(".action").on("mouseout", function(){
	$(this).css("color", "white");
	$(this).css("background-color", "#4682B4");
});
$("#button").on("mouseover", function(){
	$(this).css("color", "#4682B4");
	$(this).css("background-color", "white");
});
$("#button").on("mouseout", function(){
	$(this).css("color", "white");
	$(this).css("background-color", "#4682B4");
});
