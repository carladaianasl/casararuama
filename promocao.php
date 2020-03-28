<!DOCTYPE html>
<html land="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,500|Raleway:400,700,800&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<link rel="stylesheet" href="style-admin.css">

</head>
<body>
	
	<?php include("conecta.php"); 

		
		if(isset($_GET["r"]) and $_GET["r"] === "1"){		
			?>

			<script type="text/javascript">
				swal("Parabéns!", "Verifique seu e-mail e em até 24h você receberá um brinde.", "success");
			</script>

			<?php
			} 	

	?>

	<div id="logo">
		<img src="logo_promo.png"/>
	</div>


	<div id="texto">
	A <b>Casa Lagoa de Araruama</b> está oferecendo um <b>brinde</b> para todas as famílias que já se hospedaram em nossas acomodações.
	<p>
	Para participar: <br/>
	1º) Clique no botão desta página;<br/>
	2º) Preencha o formulário e nos conte sobre sua experiência aqui;<br/>
	3º) Pronto! Você receberá em até 24h um brinde em sua caixa de e-mail.
	<p>
	Ficamos muito felizes em tê-los conosco e esperamos que voltem em breve!
	
	
	<p>
		<div id="alignBtn">
			<br/>
		<button id="modalBtn" class="button">
			PARTICIPAR DA PROMOÇÃO
		</button>
		<p><p><br/>
		</div>

		<div id="texto2">
			Promoção válida enquanto a página permanecer disponível.
		</div>

	</div>


	<div id="simpleModal" class="modal">
		
		<div class="modal-content">
			
			<div class="modal-header">

					<span class="closeBtn">&times;</span>
					<h2>Participe: Comentou, ganhou!</h2>

			</div>

			<div class="modal-body">
			
			<form action="envia_promo.php" method="POST">
					

			    <label>Seu nome:</label>
			    <input type="text" id="nome" name="nome" onkeyup="verificar()">   

			    <label>Mês / Ano que ficou hospedado:</label>
			    <select id="mes" name="mes" onchange="verificar()">
			    	<option value="-">-</option>
			     	 <option value="Janeiro">JANEIRO</option>
			     	 <option value="Fevereiro">FEVEREIRO</option>
			      	 <option value="Março">MARÇO</option>
			      	 <option value="Abril">ABRIL</option>
			     	 <option value="Maio">MAIO</option>
			      	 <option value="Junho">JUNHO</option>
			      	 <option value="Julho">JULHO</option>
			     	 <option value="Agosto">AGOSTO</option>
			      	 <option value="Setembro">SETEMBRO</option>
			      	 <option value="Outubro">OUTUBRO</option>
			      	 <option value="Novembro">NOVEMBRO</option>
			      	 <option value="Dezembro">DEZEMBRO</option>
			    </select>

			    <select id="ano" name="ano" onchange="verificar()"> 
			    	<option value="-">-</option>
			     	 <option value="2017">2017</option>
			     	 <option value="2018">2018</option>
			      	 <option value="2019">2019</option>
			      	 <option value="2020">2020</option>
			    </select>

				<label><b>Conte-nos sua experiência na casa lagoa de Araruama:</b></label>
			     <textarea id="comentario" name="comentario" onkeyup="verificar()"></textarea>

			      <label>Seu e-mail para receber o brinde:</label>
			    <input type="text" id="email" name="email" onkeyup="verificar()">
			  	<P><span id="resposta"></span></P>
			    <input type="submit" value="RECEBER MEU BRINDE" onclick="return verificar();">
			</form>
		

			</div>
			
		</div>
	</div>
	

	




	<script src="main.js"></script>


</body>
</html>