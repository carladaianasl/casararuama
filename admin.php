<!DOCTYPE html>
<html land="en">
<head>
	<meta charset="UTF-8">
	<title>Casa Lagoa de Araruama</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
</head>
<body>
<?php include("conecta.php"); 

    
    if(isset($_GET["r"]) and $_GET["r"] === "1"){   
      ?>

      <script type="text/javascript">
        swal("Atenção!", "Login e/ou senha incorretos.", "error");
      </script>

      <?php
      }   

  ?>


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>


  <form action="admin-acesso.php" method="POST">
      <label>LOGIN:</label>
      <input type="text" id="nome" name="nome"/>
      <label>SENHA:</label>
      <input type="password" id="senha" name="senha"/>
      <input type="submit" value="Entrar"/>
  </form>




</body>
</html>