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

	<div class="titulo4">Regras da Casa</div>
<h5>	
<?php 

					$query ="SELECT * FROM promocao_clientes" ;		
		$result = mysqli_query ($conexao, $query) ;	
		while($row = $result->fetch_row()) {
		  $rows[]=$row;
		}

		$number=0;
		if (is_array($rows)){
			$number=count($rows);
		}

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
		<div class="box3">
			<h2>"<?php echo $rows[2][5]; ?>"</h2>
			<h3><?php echo $rows[2][1]."  |  ".$rows[2][3]." / ".$rows[2][4]; ?></h3>
		</div>

	<br/><br/>


	</h5>



	<div id="bottom"></div>
	
</div>


<script src="js/menu.js"></script>
<script src="js/bottom.js"></script>
<script src="js/index.js"></script>

</body>
</html>