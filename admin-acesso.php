<?php

$conexao = mysqli_connect('localhost', 'root', '', 'casa_araruama') ;

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


       header('Location: admin.php?r=1');
       exit;
    }



?>