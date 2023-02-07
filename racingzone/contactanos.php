<?php session_start(); ?>
<?php require 'database.php';?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/contacto.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/navbar.css">
    <title>Contactanos</title>
  </head>
  <body>
    <!--Header-->
    <div class="container-fluid w-100 m-0 P-0 mt-0 fixed-top bg-light border-bottom border-4 border-dark">
      <?php include'./H_F/header.txt'?>
    </div>
    <!-- body -->
    <div class="container-fluid w-100 m-0 P-0 bg-dark">
      <div class="row m-0 p-0 w-100 vh-100 justify-content-center align-items-center pt-5">
        <div class="col-md-1"></div>
        <div class="col-12 col-md-6 text-white">
          <div class=" text-center ">
            <div class=" text-white-50">
              <h6>
              contactanos, respuesta personalizada en menos de 24H  
            </h6>
            </div>
            <form action="https://formsubmit.co/support@razingzone.es" method="POST">
              <h1 class=" mx-auto">No seas timido</h1>
              <div class="mb-3">
                <input type="email" class="form-control border-3 text-white" placeholder="name@example.com" name="email">
              </div>
              <div class="mb-3">
                <textarea name="mensaje" class="form-control border-3" id="exampleFormControlTextarea1" rows="5" placeholder="Introduce aqui tu mensaje"></textarea>
              </div>
              <button type="submit" class="btn btn-light">Enviar formulario</button>
            </div>
            <div class="text-muted mt-3 text-center">
              para mantener la privacidad evitar introducir datos como contraseñas o telefonos.
            </div>
          </form>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4 col-12 mapa text-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8737.912762722382!2d-3.9858177935299337!3d40.453971616757926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1648028465245!5m2!1ses!2ses" width="95%" height="95%" allowfullscreen="" loading="lazy" style="border: 3px solid white; border-radius: 15px;"></iframe>
        </div>
      </div>
      
    </div>
    <!--FOOTERS-->
    <div class="bg-light container-fluid w-100 p-0 m-0 ">
      <?php include'./H_F/footer.txt' ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>