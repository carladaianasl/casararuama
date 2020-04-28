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





$conexao = mysqli_connect('localhost', 'root', '', 'casa_araruama') ;


for ($i=0;$i<=29;$i++){
	
	$j=$i+21;

	$query ="UPDATE textos SET texto='$t[$i]' WHERE id='$j' ";
	mysqli_query ($conexao, $query);

}


header('Location: tarifa-edit.php?r=1');
exit;


?>