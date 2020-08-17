<?php 



$t[] = $_POST["t1"];
$t[] = $_POST["t2"];
$t[] = $_POST["t3"];
$t[] = $_POST["t4"];
$t[] = $_POST["t5"];
$t[] = $_POST["t6"];
$t[] = $_POST["t7"];
$t[] = $_POST["t8"];
$t[] = $_POST["t9"];
$t[] = $_POST["t10"];


$conexao=mysqli_connect("casa_araruama.mysql.dbaas.com.br", "casa_araruama", "carla240390d", "casa_araruama");
mysqli_set_charset($conexao, 'utf8');
  


for ($i=0;$i<10;$i++){
	
	$j=$i+1;

	$query ="UPDATE textos SET texto='$t[$i]' WHERE id='$j' ";
	mysqli_query ($conexao, $query);

}


header('Location: home-edit.php?r=1');
exit;


?>