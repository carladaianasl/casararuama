<!DOCTYPE html>
<html land="en">
<head>
	<meta charset="UTF-8">
	<title>Casa Lagoa de Araruama</title>
	<link rel="stylesheet" type="text/css" href="css/css.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,500|Raleway:400,700,800&display=swap" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
</head>
<body>

<div id="menu"></div>

	
	    
		

		<div id="box1">

				<div id="logo" class="logo"><img src="img/logo.png"></div>
				

				<div class="texto1">
					Está precisando de um local para curtir suas férias?
				</div>
				<div class="texto2">
					Conheça nosso espaço!
				</div>
				<a href="reservas.php" style="text-decoration: none; color:white;"><div class="button button1">RESERVE AGORA</div></a>
		<div class="texto3"><a href="casa.html" style="text-decoration: none; color: black;">SAIBA MAIS</a></div>
		</div>




<div id="box2">

		<div class="box2">
			<img src="img/pett.png">
			<p>PET FRIENDLY</p>
			<h1>Seus animais são muito bem vindos em sua estadia. Sabemos o quanto é difícil ficar sem a companhia deles, pois eles são parte da família e merecem total carinho e atenção! <br/><br/><b>Não cobramos taxas sobre pets.</b> </h1>
		</div>

		<div class="box2">
			<img src="img/local.png">
			<p>LOCALIZAÇÃO</p>
			<h1>Casa em ótima localização - em condomínio fechado - a 5 minutos do centro da cidade de carro. Bairro tranquilo com ruas asfaltadas. Além disso, é excelente para a prática de esportes ao ar livre.
 		</h1>
		</div>

		<div class="box2">
			<img src="img/pool.png">
			<p>PISCINA E CHURRASQUEIRA</p>
			<h1>A piscina e churrasqueira são <b>privativas dos hóspedes</b> e a mantemos limpa com a colocação periódica de produtos. Podendo curtir com a família e amigos um lindo pôr do sol. </h1>
		</div>

		<div class="box2">
			<img src="img/home.png">
			<p>CASA COMPLETA</p>
			<h1>Casa mobiliada entregue com limpeza e higienização em todos os ambientes. Disponibilizamos roupas de cama e banho para os hóspedes. </h1>
		</div>



		<?php

		$conexao = mysqli_connect('localhost', 'root', '', 'casa_araruama') ;

		$query ="SELECT * FROM promocao_clientes WHERE (aparecer='0') " ;		
		$result = mysqli_query ($conexao, $query) ;	
		while($row = $result->fetch_row()) {
		  $rows[]=$row;
		}

		$number = count($rows);

		if ($number >= 2){

		?>

		<div id="box3">
		<div class="titulo">Comentários de nossos hóspedes</div>	
		<div class="box3">
			<h2>"<?php echo $rows[0][5]; ?>"</h2>
			<h3><?php echo $rows[0][1]."  |  ".$rows[0][3]." / ".$rows[0][4]; ?></h3>
		</div>

		<div class="box3">
			<h2>"<?php echo $rows[1][5]; ?>"</h2>
			<h3><?php echo $rows[1][1]."  |  ".$rows[1][3]." / ".$rows[1][4]; ?></h3>
		</div>
		
		<?php
		} else {

		?>


		<div id="box3">
		<div class="titulo">Comentários de nossos hóspedes <br/><br/>[...] <br/><br/></div>	
		

		<?php
		}

		?>
		

		<div id="bottom"></div>
		

	</div>
</div>



<script src="js/menu.js"></script>
<script src="js/bottom.js"></script>
 <script src="js/index.js"></script>

</body>
</html>