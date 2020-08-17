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


$(function(){
        $(".btn-toggle2").click(function(e){
            e.preventDefault();
            el = $(this).data('element');
            $(el).toggle();
        });
    });
</script>

<?php


$conexao=mysqli_connect("casa_araruama.mysql.dbaas.com.br", "casa_araruama", "carla240390d", "casa_araruama");
mysqli_set_charset($conexao, 'utf8');
  


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

    $query ="SELECT * FROM promocao_clientes WHERE (aparecer=1) ";   

    $result = mysqli_query ($conexao, $query);    
    $comentarios_site=mysqli_num_rows($result);

    if ($comentarios_site <= 2){

      if ($r == 1){

        
        $query ="UPDATE promocao_clientes SET aparecer='1' WHERE id='$id'";;  
        mysqli_query ($conexao, $query);    

      }

    }


      if ($r == 0){

        $query ="UPDATE promocao_clientes SET aparecer='0' WHERE id='$id'";;  
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
                <li><a href="index.php">Logout</a></li>

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
                <li class="right"><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </div>

    


    <div id="geral">

    

          <h2>ONLINE</h2>


            <?php
              
              $query ="SELECT * FROM promocao_clientes WHERE (aparecer=1) ";   

              $result = mysqli_query ($conexao, $query);    
              $reservas_site=mysqli_num_rows($result);
             if ($reservas_site == 0) {

                echo "-";
              } else {

                  $i="0";
                  while ($i < $reservas_site) {
                  $row = $result->fetch_row();  

            ?>
            <div id="box-reserva">
                <div class="minhaDiv0"> Nome do Cliente:  <?php echo $row[1]; ?>
                  <div class="minhaDivbutton"> 
                    <button type="button" class="btn-toggle" data-element="#minhaDiv<?php echo $i; ?>">Mostrar</button>
                  </div>
                </div> 
               
                
                <div  id="minhaDiv<?php echo $i; ?>" class="minhaDiv">
                    
                    <div class="line2">Experiência: <?php echo $row[5]; ?></div>
                    <div class="line">Hospedou-se em: <?php echo $row[3]." / ".$row[4]; ?></div>
                    <div class="line">E-mail <?php echo $row[2]; ?></div>
                   

                    <div class="minhaDivbutton"> 
                    <a href="entrou-opiniao.php?r=0&id=<?php echo $row[0]; ?>"><button type="button" name="exit">Retirar do site</button></a>
                   
                    </div>
                </div>
            </div>

            <?php
                 $i++;
               }
              }
            ?>


          <br/><br/>
          <h2>OFFLINE</h2>    

        

              <?php
              
              $query ="SELECT * FROM promocao_clientes WHERE (aparecer=0) ";   

              $result = mysqli_query ($conexao, $query);    
              $reservas_site=mysqli_num_rows($result);

              if ($reservas_site == 0) {

                echo "-";
              } else {

                  $i="0";
                  while ($i < $reservas_site) {
                  $row = $result->fetch_row();  

                 

            ?>
            <div id="box-reserva">
                <div class="minhaDiv0"> Nome do Cliente:  <?php echo $row[1]; ?>
                  <div class="minhaDivbutton"> 
                    <button type="button" class="btn-toggle2" data-element="#segundaDiv<?php echo $i; ?>">Mostrar</button>
                  </div>
                </div> 
               
                
                <div  id="segundaDiv<?php echo $i; ?>" class="minhaDiv">
                    
                   
                    <div class="line2">Experiência: <?php echo $row[5]; ?></div>
                    <div class="line">Hospedou-se em: <?php echo $row[3]." / ".$row[4]; ?></div>
                    <div class="line">E-mail <?php echo $row[2]; ?></div>
                    
                
                  <div class="minhaDivbutton"> 
                    <a href="entrou-opiniao.php?r=1&id=<?php echo $row[0]; ?>"><button type="button" name="done">Mostrar no site</button></a>
                    </div>
                </div>
            </div>

            <?php
                   $i++;
                 } 
              }

            ?>

<br/><br/><br/>


    </div>

</div>

</body>
</html>