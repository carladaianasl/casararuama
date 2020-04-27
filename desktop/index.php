<!DOCTYPE html>
<html land="en">
<head>
	<meta charset="UTF-8">
	<title>Casa Lagoa de Araruama</title>
	<link rel="stylesheet" type="text/css" href="css/css.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,500|Raleway:400,700,800&display=swap" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	
</head>
<body>

<div id="topo">
	<div id="menu"></div>
</div>




<div id="logo" class="logo"><img src="img/logo.png"></div>

<div id="box1">
		<div class="texto1">
			
			<?php 

					$conexao = mysqli_connect('localhost', 'root', '', 'casa_araruama') ;
  
					  $query ="SELECT * FROM textos WHERE (status=1) ";   
					  $result = mysqli_query ($conexao, $query); 
					  $num_rows = mysqli_num_rows($result);
					    
					  $i="0";
					    while ($i < $num_rows) { 
					      $row = $result->fetch_row(); 
					      $texto[] = $row[1]; 
					      $i++;
					  }

					  echo $texto[0];
					?>

		</div>
		<div class="texto2">
			<?php echo $texto[1]; ?>
		</div>
		<div class="button button1"><a href="reservas.php" style="text-decoration: none; color:white;">RESERVE AGORA</a></div>
		<div class="texto3"><a href="casa.html" style="text-decoration: none; color: black;">SAIBA MAIS</a></div>
</div>

	
<div id="box2">

		<div class="box2">
			<img src="img/pet.png">
			<p> <?php echo $texto[2]; ?></p>
			<h1> <?php echo $texto[3]; ?> </h1>
		</div>

		<div class="box2">
			<img src="img/local.png">
			<p>	<?php echo $texto[4]; ?>
</p>
			<h1><?php echo $texto[5]; ?>
 		</h1>
		</div>

		<div class="box2">
			<img src="img/pool.png">
			<p><?php echo $texto[6]; ?></p>
			<h1> <?php echo $texto[7]; ?></h1>
		</div>

		<div class="box2">
			<img src="img/home.png">
			<p><?php echo $texto[8]; ?></p>
			<h1><?php echo $texto[9]; ?> </h1>
		</div>



		<?php

		$conexao = mysqli_connect('localhost', 'root', '', 'casa_araruama') ;

		$query ="SELECT * FROM promocao_clientes WHERE (aparecer='1') " ;		
		$result = mysqli_query ($conexao, $query) ;	
		while($row = $result->fetch_row()) {
		  $rows[]=$row;
		}

		$number = count($rows);

		if ($number == 3){

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


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="js/menu.js"></script>
<script src="js/bottom.js"></script>

</body>
</html>