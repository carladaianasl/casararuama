<!DOCTYPE html>
<html land="en">
<head>
	<meta charset="UTF-8">
	<title>Casa Lagoa de Araruama</title>
	<link rel="stylesheet" type="text/css" href="css/css.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,500|Raleway:400,700,800&display=swap" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	
</head>
<body>

	<?php 

		
		if(isset($_GET["r"]) and $_GET["r"] === "1"){		
			?>

			<script type="text/javascript">
				swal("Obrigado pelo contato!", "Sua mensagem foi recebida e responderemos em breve.", "success");
			</script>

			<?php


			} 	
				

	?>


<div id="topo2">
	<div id="menu"></div>
</div>

<div class="titulo3">Fale conosco</div>

<div id="meio">

	<div id="form-bg">

		<div id="formulario">
		
		<form name="form" action="envia_contato.php" method="POST">

		<small id='resposta'></small>

		<label for="nome">Seu nome *</label> 
		<input type="text" id="nome" name="nome" placeholder=""/>		

		<label for="telefone">Telefones para contato *</label>
		<input type="tel" id="telefone" name="telefone" maxlength="15" placeholder="(00) 00000-0000" />
		<input type="text" id="telefone1" name="telefone1" maxlength="15" placeholder="(00) 0000-0000"/>

		<label for="email">Seu e-mail *</label>
		<input type="text" id="email" name="email"/>

		<label for="nome">Mensagem</label>
		<textarea id="obs" name="obs" placeholder="Se quiser adicionar detalhes, dúvidas e/ou pedidos"></textarea>
		<br/>
	
		<input type="submit" onclick="return enviar();" value="Enviar" name="contato"/>
	</form>
	</div>
	
	<div class="subtitulo">

		<h2>Para mais informações</h2>
		<h2><b>(22) 99104-4764 | casararuama7@gmail.com</b></h2>


	</div>

		<div id="bottom"></div>
</div>
</div>



<script src="js/formulario-contato.js"></script>
<script src="js/menu.js"></script>
<script src="js/bottom.js"></script>
<script src="js/index.js"></script>

</body>
</html>