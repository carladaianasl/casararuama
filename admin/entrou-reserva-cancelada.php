<!DOCTYPE html>
<html land="en">
<head>
  <meta charset="UTF-8">
  <title>ADMIN</title>
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css-admin.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,500|Raleway:400,700,800&display=swap" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Gotu&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">


</head>
<body>

<script type="text/javascript">
  
  $(function(){
        $(".btn-toggle").click(function(e){
            e.preventDefault();
            el = $(this).data('element');
            $(el).toggle();
        });
    });

</script>

<?php


$conexao = mysqli_connect('localhost', 'root', '', 'casa_araruama') ;


    $query ="SELECT * FROM reservas_site WHERE (status=0) ";   

    $result = mysqli_query ($conexao, $query);    
    $reservas_site=mysqli_num_rows($result);


    $query ="SELECT * FROM contato_site WHERE (status=0) ";   

    $result = mysqli_query ($conexao, $query);    
    $mensagens_site=mysqli_num_rows($result);


      $query ="SELECT * FROM promocao_clientes WHERE (aparecer=0) ";   

    $result = mysqli_query ($conexao, $query);    
    $comentarios_site=mysqli_num_rows($result);

    

if($_GET != null){
    $r = $_GET["r"];
    $id = $_GET["id"];

    if ($r == 1){

      
      $query ="UPDATE reservas_site SET status='1' WHERE id='$id'";;  
      mysqli_query ($conexao, $query);    

    }
    if ($r == 2){

          
      $query ="UPDATE reservas_site SET status='2' WHERE id='$id'";;  
      mysqli_query ($conexao, $query);    


    }

    if ($r == 3){

          
      $query ="UPDATE reservas_site SET status='3' WHERE id='$id'";;  
      mysqli_query ($conexao, $query);    

    }

}
?>

<div id="menu-vertical">
        <nav>
            <ul>
                <li><div class="foto"><img src="face.png" style="width: 13%;" /><br/>Carla Magalhães</div></li>
                <li><a href="entrou.php" class="active">Home</a></li>
                <li><a href="entrou-reserva.php">Pré-reservas</a></li>
                <li><a href="entrou-opiniao.php">Comentários</a></li>
                <li><a href="entrou-faleconosco.php">Mensagens</a></li>

                <li><div class="mod"></div></li>
                <li><a href="home-edit.php" class="active">Editar - Home</a></li>
                <li><a href="casa-edit.php">Editar - Inf. Casa</a></li>
                <li><a href="tarifa-edit.php">Editar - Tarifas</a></li>
                <li><div class="mod"></div></li>
                <li><a href="admin.php">Logout</a></li>

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
                <li><a href="entrou-faleconosco.php">Mensagens</a></li>
                <li class="right"><a href="admin.php">Logout</a></li>
            </ul>
        </nav>
    </div>

    


    <div id="geral">

    

          <h2>Reservas canceladas</h2>


            <?php
              
              $query ="SELECT * FROM reservas_site WHERE (status=3) ";   

              $result = mysqli_query ($conexao, $query);    
              $reservas_site=mysqli_num_rows($result);
             if ($reservas_site == 0) {

                echo "-";
              } else {

                  $i="0";
                  while ($i < $reservas_site) {
                  $row = $result->fetch_row();  

                  $datacheckin = $row[9];

            ?>
            <div id="box-reserva">
                <div class="minhaDiv0"> Check-in: <?php echo date("d/m/Y", strtotime($datacheckin)); ?> | Nome do Cliente:  <?php echo $row[1]; ?>
                  <div class="minhaDivbutton"> 
                    <button type="button" class="btn-toggle" data-element="#minhaDiv<?php echo $i; ?>">Mostrar</button>
                    <button type="button">Ligar</button>
                    <button type="button">Whatsapp</button>
                  </div>
                </div> 
               
                
                <div  id="minhaDiv<?php echo $i; ?>" class="minhaDiv">
                    
                    <div class="line">RG: <?php echo $row[2]; ?></div>
                    <div class="line">CPF: <?php echo $row[3]; ?></div>
                    <div class="line">Nº de hóspedes: <?php echo $row[4]; ?></div>
                    <div class="line">PET: <?php echo $row[5]; ?></div>
                    <div class="line">Tel: <?php echo $row[6]." | ".$row[7]; ?></div>
                    <div class="line">E-mail: <?php echo $row[8]; ?></div>
                    <div class="line2">Check-in: <?php echo date("d/m/Y", strtotime($row[9]))." às ".$row[10]; ?></div>
                    <div class="line2">Check-Out: <?php echo date("d/m/Y", strtotime($row[11])); ?></div>
                    <div class="line">OBS: <?php echo $row[13]; ?></div>
                    <p>
                    <div class="line3">Data da solicitação da pré-reserva no site: <?php echo date("d/m/Y", strtotime($row[12])) ?></div>

                    <div class="minhaDivbutton"> 
                    <a href="entrou-reserva-cancelada.php?r=2&id=<?php echo $row[0]; ?>"><button type="button" name="done">Reserva concluída</button></a>
                    <a href="entrou-reserva-cancelada.php?r=1&id=<?php echo $row[0]; ?>"><button type="button" name="wait">Reserva em andamento</button></a>
                    </div>
                </div>
            </div>

            <?php
                 $i++;
               }
              }
            ?>



            <div id="opcoes">
              <a href="entrou-reserva.php"><button value="andamento"> Pré-reservas em andamento </button></a>
              <a href="entrou-reserva-concluida.php"><button value="concluida"> Pré-reservas concluídas </button></a>
              <br/><br/>
            </div>


    </div>

</div>

</body>
</html>