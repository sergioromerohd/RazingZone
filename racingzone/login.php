<?php session_start() ?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="" rel="stylesheet">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
  </head>
  <body>
    <!--Header-->
    <div class="container-fluid w-100 m-0 P-0 mt-0 fixed-top bg-light border-bottom border-4 border-dark">
      <?php include'./H_F/header.txt'?>
    </div>
    <!--Header fix-->
    <div class="container-fluid w-100 m-0 P-0 mt-0 bg-light border-bottom border-4 border-dark">
      <?php include'./H_F/header.txt'?>
    </div>
    <div class="sidenav bg-dark">
         <div class="login-main-text">
            <h2>Aplicacion de<br>Inicio de sesion.</h2>
            <p>Inicia sesion en tu cuenta de Razing Zone, si aun no tienes cuenta: <a href="./register.php" class="text-white">Registrate</a></p>
         </div>
      </div>
      <div class="main text-center text-white">
         <section id="sect1" class="sect">
          <video src="./videos/registercar.mp4" autoplay="true" muted="true" loop="true"></video>
            <div class="login-form mx-auto">
               <form method="post" action="./validar.php">
                  <div class="form-group ms-2 me-2">
                    <?php echo $message; ?>   
                    <?
                    if(!isset($_SESSION['mensaje'])){
                     echo "<h3>Introduzca sus datos de inicio de sesion</h3>";
                    }else{
                     echo "<h3>".$_SESSION['mensaje']."</h3>";
                     unset($_SESSION['mensaje']);
                    }
                    
                    ?>

                     <label>User Name</label>
                     <input type="text" class="form-control " placeholder="Usuario" name="usuario">
                  </div>
                  <div class="form-group ms-2 me-2">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="password">
                  </div>
                  <button type="submit" class="btn btn-light mt-1" name="login" value="login">Login</button>
               </form>
            </div>
         </div>
        </section>
         
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>