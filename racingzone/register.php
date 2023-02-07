<?php session_start(); ?>
<?php require 'database.php';?>
<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $stmt->bindParam(":password", $_POST['password']);
    if ($stmt->execute()) {
      $message = 'Usuario creado correctamente';
      echo '<script type="text/javascript">
           setTimeout( function() { window.location.href = "./"; }, 1500 );
          </script>';
    } else {
      $message = 'Error al crear la cuenta  ';
    }
  }
?>



<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/register.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="icon" type="image/png" href="./img/navlogo.jpg" />
    <title>Register</title>
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
    <section id="sect1" class="sect">
    <video src="./videos/registercar.mp4" autoplay="true" muted="true" loop="true"></video>
        <div class="container-fluid m-0 p-0 w-100 pt-5 pb-5">
            <div class="row m-0 p-0 justify-content-center align-items-center  pt-5 pb-5">
              <div class="col-1 hide"></div>
                <div class="col-5 hide">
                    <h1 class="m-0 text-white text-center fs-titulo">
                        Registrate Gratis para acceder a todo el
                        <font style="color:rgb(224, 221, 170)">
                            Contenido.
                        </font>
                    </h1>
                    <p class="m-0 text-white-50 text-center mt-4">
                        contenido en stream, tutoriales y acceso a videos explicativos y informativos acerca de nuestros talleres y grandes proyectos
                    </p>
                    <div class="container-fluid  w-100 m-0 p-0 mt-4">
                        <div class="row w-100 p-0 m-0">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="container-fluid w-100 m-0 p-0">
                                <div class="row m-0 p-0 w-100 h-50">
                                    <div class="col-8">
                                        <h4 class="card-title font-weight-bold">
                                            Registrate aqui
                                        </h4>
                                        <p>
                                            formulario seguro!
                                        </p>
                                        <?php if(!empty($message)): ?>
                                            <h3 class="text-success"> <?= $message ?></h3>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <form action="register.php" method="POST" class="m-2 p-1 text-center">
                                <div class="mb-3 text-start">
                                    <label class="form-label " for="exampleFormControlInput1">
                                        Usuario
                                    </label>
                                    <input aria-label=".form-control-sm example" name="usuario" class="form-control form-control" placeholder="Su Usuario" type="text" required>
                                        <label class="form-label" for="exampleFormControlInput1">
                                            Contraseña
                                        </label>
                                        <input class="form-control" name="password" type="password" placeholder="Enter your password" required>
                                        </input>
                                    </input>
                                </div>
                                <button class="btn btn-dark w-100"type="submit" name="register" value="register">Register</button>
                            </form>
                            <p class="text-muted text-center">need help?<a href="#" class="text-dark link"> visit our help ceter <font class="text-muted">></font></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
  <section id="sect2" class="sect">
    <!--FOOTERS-->
    <div class="container-fluid w-100 p-0 m-0">
      <?php include'./H_F/footer.txt' ?>
    </div>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>