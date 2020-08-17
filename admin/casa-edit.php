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
  


    $query ="SELECT * FROM textos WHERE (status=2) ";   

    $result = mysqli_query ($conexao, $query); 
    $num_rows = mysqli_num_rows($result);
    $i="0";
    while ($i < $num_rows) { 
      $row = $result->fetch_row(); 
      $texto[] = $row[1];
      $ids[] = $row[0];
      $i++;
    }

    
/*

if($_GET != null){
    $r = $_GET["r"];
    $id = $_GET["id"];

      if ($r == 1){

        
        $query ="UPDATE contato_site SET status='1' WHERE id='$id'";;  
        mysqli_query ($conexao, $query);    

      }


      if ($r == 0){

        $query ="UPDATE contato_site SET status='0' WHERE id='$id'";;  
        mysqli_query ($conexao, $query);    

      }

}

*/


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

    

          <h2>EDITAR SOBRE A CASA</h2>


          <div id="box-reserva-form">

                <form action="casa-enviar.php" method="POST">
                      
                      <label class="t1">Textos Sobre a Casa:</label>
                      <textarea type="text" class="t1" name="<?php echo "t".$ids[0]; ?>"><?php echo $texto[0]; ?></textarea><p>
                      <textarea type="text" class="t1" name="<?php echo "t".$ids[1]; ?>"><?php echo $texto[1]; ?></textarea><p>
                      <br/>
                      <input type="text" class="t1" name="<?php echo "t".$ids[8]; ?>"value="<?php echo $texto[8]; ?>"> <p>
                      <br/>
                      <input type="text" class="t1" name="<?php echo "t".$ids[2]; ?>" value="<?php echo $texto[2]; ?>"> <p>
                      <input type="text" class="t1" name="<?php echo "t".$ids[3]; ?>" value="<?php echo $texto[3]; ?>"> <p>
                      <input type="text" class="t1" name="<?php echo "t".$ids[4]; ?>" value="<?php echo $texto[4]; ?>"> <p>
                      <input type="text" class="t1" name="<?php echo "t".$ids[5]; ?>" value="<?php echo $texto[5]; ?>"> <p>
                      <input type="text" class="t1" name="<?php echo "t".$ids[6]; ?>" value="<?php echo $texto[6]; ?>"> <p>
                      <input type="text" class="t1" name="<?php echo "t".$ids[7]; ?>" value="<?php echo $texto[7]; ?>"> <p>
                      <br/><br/>
                      <input type="text" class="t1" name="<?php echo "t".$ids[10]; ?>" value="<?php echo $texto[10]; ?>"> <p>
                      <br/>
                      <input type="text" class="t1" name="<?php echo "t".$ids[11]; ?>" value="<?php echo $texto[11]; ?>"> <p>
                      <input type="text" class="t1" name="<?php echo "t".$ids[12]; ?>" value="<?php echo $texto[12]; ?>"> <p>
                      <input type="text" class="t1" name="<?php echo "t".$ids[13]; ?>" value="<?php echo $texto[13]; ?>"> <p>
                      <input type="text" class="t1" name="<?php echo "t".$ids[14]; ?>" value="<?php echo $texto[14]; ?>"> <p>
                      <input type="text" class="t1" name="<?php echo "t".$ids[15]; ?>" value="<?php echo $texto[15]; ?>"> <p>
                      <label class="t1">Regras da Casa:</label>
                      <textarea type="text" class="t1" name="<?php echo "t".$ids[9]; ?>"><?php echo $texto[9]; ?></textarea><p>

                      <button name="done">ATUALIZAR</button>
                  </form>

          </div>

           


<br/><br/><br/>


    </div>

</div>

</body>
</html>