<!DOCTYPE html>
<html land="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,500|Raleway:400,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css-admin.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
<?php

$conexao = mysqli_connect('localhost', 'root', '', 'casa_araruama') ;

/*$login = $_GET["l"];
$senha = $_GET["s"];


  $query ="SELECT * FROM admin WHERE (login='$login') and (senha='$senha') ";   

    $result = mysqli_query ($conexao, $query);    
    $numLinhas=mysqli_num_rows($result);

    if ($numLinhas == 1){

*/



    $query ="SELECT * FROM reservas_site WHERE (status=0) ";   

    $result = mysqli_query ($conexao, $query);    
    $reservas_site=mysqli_num_rows($result);


    $query ="SELECT * FROM contato_site WHERE (status=0) ";   

    $result = mysqli_query ($conexao, $query);    
    $mensagens_site=mysqli_num_rows($result);


      $query ="SELECT * FROM promocao_clientes WHERE (aparecer=0) ";   

    $result = mysqli_query ($conexao, $query);    
    $comentarios_site=mysqli_num_rows($result);




?>

<div id="menu-vertical">
        <nav>
            <ul>
                <li><div class="foto"><img src="face.png" style="width: 13%;" /><br/>Carla Magalhães</div></li>
                <li><a href="entrou.php" class="active">Home</a></li>
                <li><a href="entrou-reserva.php">Pré-reservas</a></li>
                <li><a href="entrou-opiniao.php">Comentários</a></li>
                <li><a href="entrou-opiniao.php">Mensagens</a></li>

                <li><div class="mod"></div></li>
                <li><a href="entrou.php" class="active">Editar - Home</a></li>
                <li><a href="entrou-reserva.php">Editar - Inf. Casa</a></li>
                <li><a href="entrou-opiniao.php">Editar - Tarifas</a></li>
                <li><div class="mod"></div></li>
                <li><a href="entrou-opiniao.php">Logout</a></li>

            </ul>
        </nav>
    </div>


<div id="wrap">

    <div id="menu">
        <nav>
            <ul>
                <li class="logo"><b>PORTAL ADMIN</b></li>
                <li><a href="entrou.php" class="active">Home</a></li>
                <li><a href="entrou-reserva.php">Pré-reservas</a></li>
                <li><a href="entrou-opiniao.php">Opiniões</a></li>
                <li><a href="entrou-mensagem.php">Mensagens</a></li>
                <li class="right"><a href="admin.php">Logout</a></li>
            </ul>
        </nav>
    </div>

    


    <div id="geral">

    

      <div class="box">
        <a href="entrou-reserva.php">  
        <div class="box-interno">
          <h1><?php echo $reservas_site; ?></h1><h3> Novas pré-reservas</h3>
        </div>
        </a>
      </div>


        <div class="box">
        <a href="entrou-reserva.php">  
        <div class="box-interno">
          <h1><?php echo $reservas_site; ?></h1><h3> Novas pré-reservas</h3>
        </div>
        </a>
      </div>
     
       <div class="box">
        <a href="entrou-reserva.php">  
        <div class="box-interno">
          <h1><?php echo $reservas_site; ?></h1><h3> Novas pré-reservas</h3>
        </div>
        </a>
      </div>

      <div class="box">
        <a href="entrou-reserva.php">  
        <div class="box-interno">
          <h1><?php echo $reservas_site; ?></h1><h3> Novas pré-reservas</h3>
        </div>
        </a>
      </div>

      <div class="side">
      <h5>x acessos</h5>
      
    </div>



    </div>

</div>

</body>
</html>