<?php

$conexao=mysqli_connect("casa_araruama.mysql.dbaas.com.br", "casa_araruama", "carla240390d", "casa_araruama");
mysqli_set_charset($conexao, 'utf8');
  

$nome = $_POST["nome"];
$senha = $_POST["senha"];


  $query ="SELECT * FROM admin WHERE (login='$nome') and (senha='$senha') ";   

    $result = mysqli_query ($conexao, $query);    
    $numLinhas=mysqli_num_rows($result);

    /*for ($i = 1; $i <= $numLinhas; $i++) {
      $row = $result->fetch_row();
      echo $row[5].$row[4].$row[3][0];
    }
    */

    if ($numLinhas == 1){

      header('Location: entrou.php?l='.$nome.'&s='.$senha);
      exit;

    } else {


       header('Location: index.php?r=1');
       exit;
    }



?>