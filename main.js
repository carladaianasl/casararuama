var modal = document.getElementById('simpleModal');
var modalBtn = document.getElementById('modalBtn');
var closeBtn = document.getElementsByClassName('closeBtn')[0];

modalBtn.addEventListener('click', openModal);

closeBtn.addEventListener('click', closeModal);


function openModal(){
	modal.style.display ='block';
}


function closeModal(){
	modal.style.display ='none';
}




function verificar() {
  
	var nome = document.getElementById('nome').value
	var mes = document.getElementById('mes').value
	var ano = document.getElementById('ano').value
	var comentario = document.getElementById('comentario').value
	var email = document.getElementById('email').value



	var valido = true;
	if(nome === "") {
		document.getElementById("nome").style.border = "1px solid #E30011";
		document.getElementById("nome").style.boxShadow = "0px 0px 3px red";
		valido = false
		} else {
		document.getElementById("nome").style.boxShadow = "0px 0px 3px blue";
  		document.getElementById("nome").style.border = "0px solid #E30011";
	}

	if(mes === "-") {
		document.getElementById("mes").style.border = "1px solid #E30011";
		document.getElementById("mes").style.boxShadow = "0px 0px 3px red";
		valido = false
		} else {
		document.getElementById("mes").style.boxShadow = "0px 0px 3px blue";
  		document.getElementById("mes").style.border = "0px solid #E30011";
	}

	if(ano === "-") {
		document.getElementById("ano").style.border = "1px solid #E30011";
		document.getElementById("ano").style.boxShadow = "0px 0px 3px red";
		valido = false
		} else {
		document.getElementById("ano").style.boxShadow = "0px 0px 3px blue";
  		document.getElementById("ano").style.border = "0px solid #E30011";
	}

	if(comentario === "") {
		document.getElementById("comentario").style.border = "1px solid #E30011";
		document.getElementById("comentario").style.boxShadow = "0px 0px 3px red";
		valido = false
		} else {
		document.getElementById("comentario").style.boxShadow = "0px 0px 3px blue";
  		document.getElementById("comentario").style.border = "0px solid #E30011";
	}

	if(email === "") {
		document.getElementById("email").style.border = "1px solid #E30011";
		document.getElementById("email").style.boxShadow = "0px 0px 3px red";
		valido = false
		} else {
		document.getElementById("email").style.boxShadow = "0px 0px 3px blue";
  		document.getElementById("email").style.border = "0px solid #E30011";
	}

	if (valido){
			document.getElementById("resposta").innerHTML = "";
			return true;
		} else {
			document.getElementById("resposta").innerHTML = "Preecha os campos destacados!";
			return false;
	}

}
