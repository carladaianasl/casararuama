

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

	document.getElementById('rg').addEventListener('input', function (n) {
		validaRG();	  
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

	if(validaRG() == false){
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


function validaRG(){
	var rg = document.getElementById('rg').value

	if(rg === "" || rg.length <= 10) {
		document.getElementById("rg").style.border = "1px solid #E30011";
		document.getElementById("rg").style.boxShadow = "0px 0px 3px red";
		document.getElementById("resposta").innerHTML = "Por favor, preecha os campos demarcados !!";
		form.rg.focus();

		return false;
  	} else {
  		document.getElementById("rg").style.border = "";
		document.getElementById("rg").style.boxShadow = "";
		document.getElementById("resposta").innerHTML = "";
		return true;
	}
}


function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
	if (strCPF == "00000000000" 
		|| strCPF == "11111111111"
		|| strCPF == "22222222222"
		|| strCPF == "33333333333"
		|| strCPF == "44444444444"
		|| strCPF == "55555555555"
		|| strCPF == "66666666666"
		|| strCPF == "77777777777"
		|| strCPF == "88888888888"
		|| strCPF == "99999999999")

		return false;	 

	for (i=1; i<=9; i++) 
		Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
	Resto = (Soma * 10) % 11;
	if ((Resto == 10) || (Resto == 11))  
		Resto = 0;
	if (Resto != parseInt(strCPF.substring(9, 10)) ) 
		return false;	   
	Soma = 0;
    for (i = 1; i <= 10; i++) 
    	Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;   
    if ((Resto == 10) || (Resto == 11))  
    	Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) 
    	return false;
    return true;
}

function validaCPF(){
	var cpf = document.getElementById('cpf').value;
	x=cpf.replace(/-/g, '').replace(/\./g, '');
	console.log(TestaCPF(x));

	if(TestaCPF(x) === false) {
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

