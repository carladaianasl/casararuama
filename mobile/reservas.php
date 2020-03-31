<!DOCTYPE html>
<html land="en">
<head>
	<meta charset="UTF-8">
	<title>Casa Lagoa de Araruama</title>
	<link rel="stylesheet" type="text/css" href="css/css.css" />
	<link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,500|Raleway:400,700,800&display=swap" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	
</head>
<body>

<script type="text/javascript">
			function fMasc(objeto,mascara) {
				obj=objeto
				masc=mascara
				setTimeout("fMascEx()",1)
			}
			function fMascEx() {
				obj.value=masc(obj.value)
			}
			function mTel(tel) {
				tel=tel.replace(/\D/g,"")
				tel=tel.replace(/^(\d)/,"($1")
				tel=tel.replace(/(.{3})(\d)/,"$1)$2")
				if(tel.length == 9) {
					tel=tel.replace(/(.{1})$/,"-$1")
				} else if (tel.length == 10) {
					tel=tel.replace(/(.{2})$/,"-$1")
				} else if (tel.length == 11) {
					tel=tel.replace(/(.{3})$/,"-$1")
				} else if (tel.length == 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				} else if (tel.length > 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				}
				return tel;
			}
			function mCNPJ(cnpj){
				cnpj=cnpj.replace(/\D/g,"")
				cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
				cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
				cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
				cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
				return cnpj
			}
			function mCPF(cpf){
				cpf=cpf.replace(/\D/g,"")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
				return cpf
			}

			function mRG(rg){
				rg=rg.replace(/\D/g,"")
				rg=rg.replace(/(\d{2})(\d)/,"$1.$2")
				rg=rg.replace(/(\d{3})(\d)/,"$1.$2")
				rg=rg.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
				return rg
			}

			function mCEP(cep){
				cep=cep.replace(/\D/g,"")
				cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
				cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
				return cep
			}
			function mNum(num){
				num=num.replace(/\D/g,"")
				return num
			}



		</script>

	<?php 

		
		if(isset($_GET["r"]) and $_GET["r"] === "1"){		
			?>

			<script type="text/javascript">
				swal("Solicitação enviada!", "Em até 24h entraremos em contato com você!", "success");
			</script>

			<?php


			} 	
				

	?>


<div id="topo2">
	<div id="menu"></div>
</div>

<div class="titulo3">Preencha o formulário</div>

<div id="meio">

	<div id="form-bg">

		<div id="formulario">
		
		<form name="form" action="envia_reserva.php" method="POST">

		<small id='resposta'></small>

		<label for="nome">Seu nome *</label> 
		<input type="text" id="nome" name="nome"/>		
		
		<label for="rg">RG*</label> 
		<input type="text" id="rg" name="rg" onkeydown="fMasc( this, mRG );" maxlength="11" placeholder="00.000.000-0"/>	

		<label for="cpf">CPF*</label> 
		<input type="text" id="cpf" name="cpf" onkeydown="fMasc( this, mCPF );" maxlength="14" placeholder="000.000.000-00"/>	

		<label for="pessoas">Quantas pessoas ficarão hospedadas? *</label>
		<select type="text" id="pessoas" name="pessoas">
			<option value="">-</option>
			<option value="até 4">até 4</option>
			<option value="até 7">até 7</option>
			<option value="até 10">até 10</option>
		</select>

	
		<label for="pet">Vai levar seu(s) Pet(s)?</label>
		<select type="text" id="pet" name="pet">
			<option value="não">Não</option>
			<option value="sim">Sim</option>
		</select>

		<label for="telefone">Telefones para contato *</label>
		<input type="text" id="telefone" name="telefone" maxlength="15" placeholder="(00) 00000-0000" />
		<input type="text" id="telefone1" name="telefone" maxlength="15" placeholder="(00) 0000-0000"/>

		<label for="email">Seu e-mail *</label>
		<input type="text" id="email" name="email"/>

		<label for="chegada">Data e horário de check-in *</label>
		<input type="date" id="chegada" name="chegada" />
		<select type="text" id="horario" name="horario">
			<option value="">-</option>
			<option value="12h">12:00</option>
			<option value="13h">13:00</option>
			<option value="14h">14:00</option>
			<option value="15h">15:00</option>
			<option value="16h">16:00</option>
			<option value="17h">17:00</option>
			<option value="18h">18:00</option>
			<option value="19h">19:00</option>
			<option value="20h">20:00</option>
			<option value="21h">21:00</option>
			<option value="22h">22:00</option>
			<option value="23h">23:00</option>
			<option value="00h">00:00</option>

		</select>

		<label for="data">Data de check-out *</label>
		<input type="date" id="partida" name="partida"/>

		<label for="nome">Observações</label>
		<textarea id="obs" name="obs" placeholder="Se quiser adicionar detalhes, dúvidas e/ou pedidos"></textarea>
		<br/>
	
		<input type="submit" onclick="return enviar();" value="Aguarde nossa ligação" name="reserva_email"/>
		<input type="submit" value="Solitação por WhatsApp" name="reserva_whatsapp" onclick="return enviar();"/>
	</form>
	</div>
	

		<div id="bottom"></div>
</div>
</div>



<script src="js/formulario.js"></script>
<script src="js/menu.js"></script>
<script src="js/bottom.js"></script>
<script src="js/index.js"></script>

</body>
</html>