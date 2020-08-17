<?php 


$conexao=mysqli_connect("casa_araruama.mysql.dbaas.com.br", "casa_araruama", "carla240390d", "casa_araruama");
mysqli_set_charset($conexao, 'utf8');
  


foreach($_POST as $key => $value){

    if (strstr($key, 't')){

       	$x = str_replace('t','',$key);
       	$query ="UPDATE textos SET texto='$value' WHERE id='$x' ";
		mysqli_query ($conexao, $query);
		
    }
}




header('Location: casa-edit.php?r=1');
exit;


?>