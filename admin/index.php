<!DOCTYPE html>
<html land="en">
<head>
	<meta charset="UTF-8">
	<title>Casa Lagoa de Araruama</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css-admin.css" />
      <link href="https://fonts.googleapis.com/css2?family=Gotu&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
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

<div id="login">

  <form action="admin-acesso.php" method="POST">
      <label class="login1">Login</label>
      <input type="text" id="nome" class="login2" name="nome"/>
      <label class="login1">Senha</label>
      <input type="password" id="senha" class="login2" name="senha"/>
      <p>
      <input type="submit" value="Entrar" class="login3"/>
  </form>

</div>



</body>
</html>