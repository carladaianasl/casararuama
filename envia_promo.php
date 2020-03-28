<?php 



$nome = $_POST["nome"];
$email = $_POST["email"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$comentario = $_POST["comentario"];


$conexao = mysqli_connect('localhost', 'root', '', 'casa_araruama') ;

$query ="insert into promocao_clientes (nome, email, mes, ano, comentario) values ('$nome','$email','$mes','$ano','$comentario')" ;

mysqli_query ($conexao, $query) ;

header('Location: promocao.php?r=1');
exit;


?>