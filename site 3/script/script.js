function contacts(){
	document.getElementById("conteudo").innerHTML = "<br><div id='contatos'>"+
														"<br><h1 class='tituloContatos'>Contatos</h1><br>"+
														"<h2 class='tituloContatos'>Emails dos desenvol&shy;vedores</h2>"+
														"<h3 class='mail'>yadson20&shy;@gmail.com</h3>"+
														"<h3 class='mail'>obede.silva3&shy;@gmail.com</h3>"+
														"<h3 class='mail'>inacioars&shy;@gmail.com</h3>"+
														"<h3 class='mail'>alexandre&shy;henrique&shy;nascimento123&shy;@gmail.com</h3>"+
														"<h3 class='mail'>lenilsonvitorio&shy;@hotmail.com</h3>"+
														"<br><h2 class='tituloContatos'>Email The World Software</h2>"+
														"<h3 class='mail'>tws.ipi&shy;@gmail.com</h3>"+
													"</div><br>";
	var home = document.getElementById("h");
	var contatos = document.getElementById("c");
	var projetos = document.getElementById("p");

	home.style.color = "";
	home.style.fontSize = "";
	contatos.style.color = "yellow";
	contatos.style.fontSize = "19px";
	projetos.style.color = "";
	projetos.style.fontSize = "";
	document.getElementById("title").innerHTML = "TWS Contatos";
}
function projects(){
	document.getElementById("conteudo").innerHTML = "<br><div id='projetos'>"+
														"<br><h1 class='tiluloProjetos'>Projetos</h1><br>"+
														"<h1 class='tiluloProjetos'>Página em construção</h1>"+
														"<h2 class='tiluloProjetos'>A página será construída em breve, volte mais tarde.</h2>"+
													"</div><br>";

	var home = document.getElementById("h");
	var contatos = document.getElementById("c");
	var projetos = document.getElementById("p");

	home.style.color = "";
	home.style.fontSize = "";
	contatos.style.color = "";
	contatos.style.fontSize = "";
	projetos.style.color = "yellow";
	projetos.style.fontSize = "19px";
	document.getElementById("title").innerHTML = "TWS Projetos";
}
function home(){
	document.getElementById("conteudo").innerHTML = "<br><h1>The World Software</h1>"+
													"<h4>Fundadores</h4><br><br>"+
													"<div class='imgconteudo'>"+		
														"<figure class='fig'>"+
															"<span class='fotos'>"+
																"<img alt='Imagem de Inácio Neto' src='img/01.jpg'>"+
																"<p><strong>Inácio</strong></p>"+
															"</span>"+
															"<span class='fotos'>"+
																"<img alt='Imagem de Yadson Matheus' src='img/02.jpg'>"+
																"<p><strong>Yadson</strong></p>"+
															"</span>"+
															"<span class='fotos'>"+
																"<img alt='Imagem de Henrique' src='img/03.jpg'>"+
																"<p><strong>Henrique</strong></p>"+
															"</span>"+
															"<span class='fotos'>"+
																"<img alt='Imagem de Obede Oliveira' src='img/04.jpg'>"+
																"<p><strong>Obede</strong></p>"+
															"</span>"+
															"<span class='fotos'>"+
																"<img alt='Imagem de Lenilson Vitório' src='img/05.jpg'>"+
																"<p><strong>Lenilson</strong></p>"+
															"</span>"+
														"</figure>"+
														"</div>"+

														"<br><br>"+
														"<h4>Sobre Nós</h4>"+
														"<p class='us'>Somos jovens desenvolvedores estudantes do IFPE - Campus Igarassu, do curso de IPI (Informática para internet), este site foi desenvolvido para divulgar nossa empresa, a (The World Software) é uma empresa fictícia que foi criada para a disciplina de Projeto e prática, que tem como objetivo nos preparar para o futuro como desenvolvedores.</p>";
	var home = document.getElementById("h");
	var contatos = document.getElementById("c");
	var projetos = document.getElementById("p");

	home.style.color = "yellow";
	home.style.fontSize = "19px";
	contatos.style.color = "";
	contatos.style.fontSize = "";
	projetos.style.color = "";
	projetos.style.fontSize = "";
	document.getElementById("title").innerHTML = "TWS Home";
}