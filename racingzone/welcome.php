<?php session_start();?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bienvenido</title>
  <link rel="stylesheet" media="all" href="./css/welcome.css" />
</head>
<body>
  <script type="text/javascript">
   setTimeout( function() { window.location.href = "./"; }, 6000 );
  </script>
<div>Bienvenido <?php echo $_SESSION['usuario']; ?>.</div> 
<div> 
  <span>¡A RAZINGZONE!</span>
</div>

<p>Acabas de entrar en un autovan sin limite de velocidad</p>
</body>
</html>