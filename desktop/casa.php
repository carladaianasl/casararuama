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

	<div class="titulo4">Casa Lagoa de Araruama</div>
	<h5>

	<?php 

					$conexao = mysqli_connect('localhost', 'root', '', 'casa_araruama') ;
  
					  $query ="SELECT * FROM textos WHERE (status=2) ";   
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

	<br/><br/>
	<?php echo $texto[1]; ?>
	<br/><br/>

	<div class="titulo4"><font size="3px"><b><?php echo $texto[8]; ?></b></font></div>

	<br/>
	
	<?php echo "- ".$texto[2]; ?><br/>
	<?php echo "- ".$texto[3]; ?><br/>
	<?php echo "- ".$texto[4]; ?><br/>
	<?php echo "- ".$texto[5]; ?><br/>
	<?php echo "- ".$texto[6]; ?><br/>
	<?php echo "- ".$texto[7]; ?><br/>

	</b>
	<br/>
	<br/>

	<div class="titulo4"><font size="3px"><b><?php echo $texto[10]; ?></b></font></div>

	<br/>
	
	<?php echo "- ".$texto[11]; ?><br/>
	<?php echo "- ".$texto[12]; ?><br/>
	<?php echo "- ".$texto[13]; ?><br/>
	<?php echo "- ".$texto[14]; ?><br/>
	<?php echo "- ".$texto[15]; ?><br/>


	<br/>

	Saiba mais sobre as <a href="regras.php"><font color="darkblue"><u>regras da casa</u></font></a>.
	<br/>
	


	</h5>


	<div id="gallery"></div>

	<div id="bottom"></div>
	
</div>


<script src="js/gallery.js"></script>
<script src="js/menu.js"></script>
<script src="js/bottom.js"></script>

</body>
</html>