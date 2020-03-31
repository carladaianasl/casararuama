<?php 

$conexao = mysqli_connect('localhost', 'root', '', 'casa_araruama') ;

$nome = $_POST["nome"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$pessoas = $_POST["pessoas"];
$pet = $_POST["pet"];
$tel = $_POST["telefone"];
$tel1 = $_POST["telefone1"];
$data_chegada = $_POST["chegada"];
$horario_chegada = $_POST["horario"];
$data_partida = $_POST["partida"];
$email = $_POST["email"];
$obs = $_POST["obs"];

$data_cheg = date("d/m/Y",strtotime($data_chegada));
$data_part = date("d/m/Y",strtotime($data_partida));

date_default_timezone_set('America/Sao_Paulo');
$datahoje = date("Y-m-d");

$resposta_email = $_POST["reserva_email"];
$resposta_whatsapp = $_POST["reserva_whatsapp"];

$query ="insert into reservas_site (nome, rg, cpf, pessoas, pet, tel1, tel2, email, data_chegada, horario_chegada, data_saida, data_recebida, obs) values   ('$nome','$rg','$cpf','$pessoas','$pet','$email','$tel','$tel1','$data_chegada','$horario_chegada','$data_partida', '$datahoje','$obs')" ;


mysqli_query ($conexao, $query) ;

	if ($resposta_email != ""){

		
		header('Location: reservas.php?r=1');
		exit;

	} else {

		header('Location: https://wa.me/5522991044764?text=DADOS+PARA+RESERVA%0D%0A%0D%0ANome%3A+'.$nome.'%0D%0AN%C2%BA+de+Pessoas%3A+'.$pessoas.'%0D%0APets%3A+'.$pet.'%0D%0ATelefone%3A+'.$tel.'%0D%0ACheck-in%3A+'.$data_cheg.'%0D%0AHorario+previsto+de+chegada%3A+'.$horario_chegada.'%0D%0ACheck-out%3A+'.$data_part.'%0D%0AE-mail%3A+'.$email.'%0D%0AObs%3A+'.$obs.'');
		exit;

	}




?>