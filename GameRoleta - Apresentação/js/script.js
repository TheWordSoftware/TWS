var graus;
var giros;
var mult;

$("#button").on("click", function(){
	graus = 45;
	giros = Math.round(((1* Math.random()) * 8));
	if(giros < 5){
		mult = 6;
	}
	else{
		mult = 3;
	}

	var girarRoleta = (graus*giros) + (360*mult);
	$("#roleta").css({transition: "7s"});
	$("#roleta").css({transform: "rotate(" + girarRoleta + "deg)"});
	var s = document.getElementById('som');
	s.play();
	$("#button").attr("disabled", "disabled");
		
	setTimeout(function(){
		$("#conteudo").load("getTemaAndItem.php", {acc:giros});
		$("#roleta").css({transition: "0s"});
		$("#roleta").css({transform: "rotate(0deg)"});
		$("#button").removeAttr("disabled");
		graus = 0;
		giros = 0;
		mult = 0;
	}, 8000);
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
