<?php 


$conexao = mysqli_connect('localhost', 'root', '', 'casa_araruama') ;


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