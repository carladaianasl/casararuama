<?php 



$nome = $_POST["nome"];
$email = $_POST["email"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$comentario = $_POST["comentario"];


$conexao=mysqli_connect("casa_araruama.mysql.dbaas.com.br", "casa_araruama", "carla240390d", "casa_araruama");
mysqli_set_charset($conexao, 'utf8');
  

$query ="insert into promocao_clientes (nome, email, mes, ano, comentario) values ('$nome','$email','$mes','$ano','$comentario')" ;

mysqli_query ($conexao, $query) ;

header('Location: index.php?r=1');
exit;


?>