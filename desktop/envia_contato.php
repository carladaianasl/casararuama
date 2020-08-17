<?php 

$conexao=mysqli_connect("casa_araruama.mysql.dbaas.com.br", "casa_araruama", "carla240390d", "casa_araruama");
mysqli_set_charset($conexao, 'utf8');

$nome = $_POST["nome"];
$tel = $_POST["telefone"];
$tel1 = $_POST["telefone1"];
$email = $_POST["email"];
$mensagem = $_POST["obs"];

date_default_timezone_set('America/Sao_Paulo');
$datahoje = date("Y-m-d");

$query ="insert into contato_site (nome, tel1, tel2, email, mensagem, data_recebida) values   ('$nome','$tel','$tel1','$email','$mensagem','$datahoje')" ;

mysqli_query ($conexao, $query) ;
header('Location: contato.php?r=1');
exit;


	


?>