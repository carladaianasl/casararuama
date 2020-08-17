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

	<div class="titulo4">Tarifas</div>
	<div class="titulo4"><font size="4px" ><b>Diárias da casa para acomodar até 7 pessoas</b></font></div>
</br>
	<div class="table">
		<div class="col1">

			<?php

					$conexao=mysqli_connect("casa_araruama.mysql.dbaas.com.br", "casa_araruama", "carla240390d", "casa_araruama");
					mysqli_set_charset($conexao, 'utf8');
  
					  $query ="SELECT * FROM textos WHERE (status=3) ";   
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
		<div class="col2"> <?php echo $texto[1]; ?> </div>
			
			<div class="line"></div>

		<div class="col1"><?php echo $texto[2]; ?></div>
		<div class="col2"><?php echo $texto[3]; ?></div>

			<div class="line"></div>

		<div class="col1"><?php echo $texto[4]; ?></div>
		<div class="col2"><?php echo $texto[5]; ?></div>

			<div class="line"></div>
			
		<div class="col1"><?php echo $texto[6]; ?></div>
		<div class="col2"><?php echo $texto[7]; ?></div>
	</div>



</br>
	<div class="titulo5">
		<?php echo $texto[8]; ?>
	
	</div>




	<div id="bottom"></div>
	
	
</div>


<script src="js/gallery.js"></script>
<script src="js/menu.js"></script>
<script src="js/bottom.js"></script>

</body>
</html>