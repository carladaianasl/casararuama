<!DOCTYPE html>
<html land="en">
<head>
	<meta charset="UTF-8">
	<title>Casa Lagoa de Araruama</title>
	<link rel="stylesheet" type="text/css" href="css/css.css" />
	<link rel="stylesheet" type="text/css" href="css/gallery.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,500|Raleway:400,700,800&display=swap" rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/jquery.js"></script>
	
	
</head>
<body>

<div id="topo2">
	<div id="menu"></div>
</div>


<div id="corpo_meio">

	<div class="titulo4">Comentários de nossos hóspedes</div>
	<div id="box3">
	
<?php 

		$conexao=mysqli_connect("casa_araruama.mysql.dbaas.com.br", "casa_araruama", "carla240390d", "casa_araruama");
		mysqli_set_charset($conexao, 'utf8');

		$query ="SELECT * FROM promocao_clientes" ;		
		$result = mysqli_query ($conexao, $query) ;	
		while($row = $result->fetch_row()) {		

			?>

				<div class="box3">
					<h2>"<?php echo $row[5]; ?>"</h2>
					<h3><?php echo $row[1]."  |  ".$row[3]." / ".$row[4]; ?></h3>
				</div>

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