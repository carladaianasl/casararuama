
document.getElementById('menu').innerHTML = 
		
		"<nav class='menu'>"+
		"	<ul>"+
		"		<li><a href='index.php' id='m1'>Início</a></li>"+
		"		<li><a href='casa.php' id='m2' >Conheça a casa</a></li>"+
		"		<li><a href='reservas.php' id='m3' >Pré-reservas</a></li>"+
		"		<li><a href='tarifa.php' id='m4' >Tarifas</a></li>"+
		"		<li><a href='regiao.html' id='m5' >Região dos Lagos</a></li>"+
		"		<li><a href='contato.php' id='m6' >Fale Conosco</a></li>"+
		"	</ul>"+
		"	</nav>"


 	var path = window.location.pathname;
	var page = path.split("/").pop();

	

	if (page === "index.html") {
		document.getElementById('m1').classList.add('active');
	}


	if (page === "casa.html") {
		document.getElementById('m2').classList.add('active');
	}


	if (page === "reservas.html") {
		document.getElementById('m3').classList.add('active');
	}

	if (page === "tarifa.html") {
		document.getElementById('m4').classList.add('active');
	}

	if (page === "promocao.html") {
		document.getElementById('m5').classList.add('active');
	}

	if (page === "contato.html") {
		document.getElementById('m6').classList.add('active');
	}
