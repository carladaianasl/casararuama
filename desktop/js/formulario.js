

	document.getElementById('telefone').addEventListener('input', function (e) {

		var tel = document.getElementById('telefone').value;
		var x;
		
		if (tel.length>=15){
			x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);  		
	  	} else {
			x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,4})(\d{0,4})/); 
	  	}
	  	e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');

		validaTelefone();
  
	});


	document.getElementById('telefone1').addEventListener('input', function (e) {

		var tel = document.getElementById('telefone1').value;
		var x;
		
		if (tel.length>=15){
			x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);  		
	  	} else {
			x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,4})(\d{0,4})/); 
	  	}
	  	e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');

  
	});

function enviar(){

	document.getElementById('nome').addEventListener('input', function (n) {
		validaNome();	  
	});

	document.getElementById('cpf').addEventListener('input', function (n) {
		validaCPF();	  
	});

	document.getElementById('pessoas').addEventListener('input', function (n) {
		validaPessoas();	  
	});

	document.getElementById('email').addEventListener('input', function (n) {
		validaEmail();	  
	});

	document.getElementById('chegada').addEventListener('input', function (n) {
		validaEmail();	  
	});


	document.getElementById('partida').addEventListener('input', function (n) {
		validaEmail();	  
	});

	
	if (isValido()){
		//var nome = document.getElementById("nome");
		//var primeiro = nome.value.split(" ")[0]
		//alert('Obrigado Sr(a) ' + primeiro + '. Sua solitação foi enviada com sucesso e em até 24h entraremos em contato pelo telefone informado.')
		
		return true;
	}
		return false;
}




function isValido(){

	var valido = true;

	if(validaPartida() == false ){
		valido = false;
	} 

	if(validaChegada() == false ){
		valido = false;
	} 

	
	if(validaEmail() == false){
		valido = false;
	}

	if(validaTelefone() == false){
		valido = false;
	}

	if(validaPessoas() == false){
		valido = false;
	}

	if(validaCPF() == false){
		valido = false;
	}

	if(validaNome() == false ){
		valido = false;
	} 
	
	return valido;
}




function validaNome(){
	var nome = document.getElementById('nome').value

	if(nome === "") {
		document.getElementById("nome").style.border = "1px solid #E30011";
		document.getElementById("nome").style.boxShadow = "0px 0px 3px red";
		document.getElementById("resposta").innerHTML = "Por favor, preecha os campos demarcados !!";
		form.nome.focus();

		return false;
  	} else {
  		document.getElementById("nome").style.border = "";
		document.getElementById("nome").style.boxShadow = "";
		document.getElementById("resposta").innerHTML = "";
		return true;
	}
}



function validaCPF(){
	var cpf = document.getElementById('cpf').value


	if(cpf === "") {
		document.getElementById("cpf").style.border = "1px solid #E30011";
		document.getElementById("cpf").style.boxShadow = "0px 0px 3px red";
		document.getElementById("resposta").innerHTML = "Por favor, preecha os campos demarcados !!";
		form.cpf.focus();

		return false;
  	} else {
  		document.getElementById("cpf").style.border = "";
		document.getElementById("cpf").style.boxShadow = "";
		document.getElementById("resposta").innerHTML = "";
		return true;
	}
}









function validaPessoas(){
	var pessoas = document.getElementById('pessoas')

	if(pessoas.value === "") {
		pessoas.style.border = "1px solid #E30011";
		pessoas.style.boxShadow = "0px 0px 3px red";
		document.getElementById("resposta").innerHTML = "Por favor, preecha os campos demarcados !!";
		form.pessoas.focus();

		return false;
  	} else {
  		pessoas.style.border = "";
		pessoas.style.boxShadow = "";
		document.getElementById("resposta").innerHTML = "";
		return true;
	}
}




function validaTelefone(){
	var tel = document.getElementById('telefone').value

	if (tel.length<=13){
  		document.getElementById("telefone").style.border = "1px solid #E30011";
		document.getElementById("telefone").style.boxShadow = "0px 0px 3px red";
		document.getElementById("resposta").innerHTML = "Por favor, preecha os campos demarcados !!";
		return false;
  	} else {
  		document.getElementById("telefone").style.boxShadow = "0px 0px 3px blue";
  		document.getElementById("telefone").style.border = "0px solid #E30011";
  		document.getElementById("resposta").innerHTML = "";
		return true;
	}
}






function validaEmail(){
	var email = document.getElementById('email').value

	if (email === ""){
  		document.getElementById("email").style.border = "1px solid #E30011";
		document.getElementById("email").style.boxShadow = "0px 0px 3px red";
		document.getElementById("resposta").innerHTML = "Por favor, preecha os campos demarcados !!";
		form.email.focus();
		return false;
  	} else {
  		document.getElementById("email").style.boxShadow = "0px 0px 3px blue";
  		document.getElementById("email").style.border = "0px solid #E30011";
  		document.getElementById("resposta").innerHTML = "";
		return true;
	}
}



function validaChegada(){
	var chegada = document.getElementById('chegada').value

	if (chegada === ""){
  		document.getElementById("chegada").style.border = "1px solid #E30011";
		document.getElementById("chegada").style.boxShadow = "0px 0px 3px red";
		document.getElementById("resposta").innerHTML = "Por favor, preecha os campos demarcados !!";
		form.chegada.focus();
		return false;
  	} else {
  		document.getElementById("chegada").style.boxShadow = "0px 0px 3px blue";
  		document.getElementById("chegada").style.border = "0px solid #E30011";
  		document.getElementById("resposta").innerHTML = "";
  				return true;
	}
}


function validaPartida(){
	var partida = document.getElementById('partida').value

	if (partida === ""){
  		document.getElementById("partida").style.border = "1px solid #E30011";
		document.getElementById("partida").style.boxShadow = "0px 0px 3px red";
		document.getElementById("resposta").innerHTML = "Por favor, preecha os campos demarcados !!";
		form.partida.focus();
		return false;
  	} else {
  		document.getElementById("partida").style.boxShadow = "0px 0px 3px blue";
  		document.getElementById("partida").style.border = "0px solid #E30011";
  		document.getElementById("resposta").innerHTML = "";
		return true;
	}
}

