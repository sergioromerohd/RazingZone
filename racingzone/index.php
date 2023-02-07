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
    <link href="./css/inicio.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/png" href="./img/navlogo.jpg" />
    <title>RazingZone</title>
  </head>
  <body>
    <!--Header-->
    <div class="container-fluid w-100 m-0 P-0 mt-0 fixed-top bg-light border-bottom border-4 border-dark">
      <?php include'./H_F/header.txt'?>
    </div>
    <!--cuerpo1-->
    <div class="w-100 m-0 p-0 imgfondo">
    <div class="container-fluid  m-0 p-0">
      <div class="row w-100 m-0 p-0 justify-content-center align-items-center vh-100">
        <div class="col text-center">
          <h1 class="text-white titfoto m-0">Razing Zone</h1>
          <p class="text-white-50 m-0 p-0">your trusted workshop</p>
        </div>
      </div>
    </div>

    <!--contenido primera diapositiva-->

    <div class="fondoslide w-100 m-0 p-0 pb-5 ps-1 pe-1 ps-md-5 pe-md-5">
      <div class="m-0 p-0 row justify-content-center align-items-center text-center pb-5 ps-1 pe-1 ms-3 me-3 opacityfix">
        <div class="col-12 col-md-4 mt-5 pt-5 " data-aos="fade-up" data-aos-offset="250">
          <img src="./img/repair.svg" class="img-fluid border border-2 border-dark rounded-circle w-25 p-1" alt="">
          <h3 class="mt-5">Reparaciones</h3>
          <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut corporis excepturi provident minus consequatur atque id tenetur nemo delectus porro hic quis facere ipsam harum, quidem ea dolore debitis, quia.</p>
        </div>
        <div class="col-12 col-md-4 mt-5 pt-5" data-aos="fade-up" data-aos-offset="250">
          <img src="./img/paleta.svg" class="img-fluid border border-2 border-dark rounded-circle w-25 p-1" alt="">
          <h3 class="mt-5">Pintura y vinilado</h3>
          <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut corporis excepturi provident minus consequatur atque id tenetur nemo delectus porro hic quis facere ipsam harum, quidem ea dolore debitis, quia.</p>
        </div>
        <div class="col-12 col-md-4  mt-5 pt-5 " data-aos="fade-up" data-aos-offset="250">
          <img src="./img/racecar.svg" class="img-fluid border border-2 border-dark rounded-circle w-25 p-1" alt="">
          <h3 class="mt-5">Modificaciones</h3>
          <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut corporis excepturi provident minus consequatur atque id tenetur nemo delectus porro hic quis facere ipsam harum, quidem ea dolore debitis, quia.</p>
        </div>
      </div>
    </div>
    </div>

    <!--cuerpo2-->
    <div class=" w-100 m-0 p-0 imgfondobajo">
      <div class="container-fluid w-100 m-0 p-0 vh-100">
        <div class="row w-100 m-0 p-0 justify-content-center align-items-center vh-100">
         <div class="col text-center">
            <h1 class="border-text-white">Razing Zone nació para ser el taller de los reyes, y se ha convertido en el rey de los talleres.</h1>
          </div>
        </div>
      </div>
      <div class="container-fluid w-100 m-0 p-0 fondoslidebajo ">
        <div class="row justify-content-center align-items-center h-100 w-100 p-0 m-0">
          <div class="col text-center h-100 mt-3">
            <h1 class="text-white">Conocenos</h1>
          </div>
        </div>
        <div class="row m-0 p-0 mx-auto mt-3">
          <div id="fadecar" class="carousel slide carousel-fade m-0 p-0" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./img/yaris.jpg" class="d-block w-100 bn-oscuro" alt="...">
                <div class="carousel-caption">
                  <h2>first slide label</h2>
                  <h5 class="hide-movil">Some representative placeholder content for the second slide.</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./img/taller1.webp" class="d-block w-100 bn-oscuro" alt="...">
                <div class="carousel-caption">
                  <h2>Second slide label</h2>
                  <h5 class="hide-movil">Some representative placeholder content for the second slide.</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./img/yaris.jpg" class="d-block w-100 bn-oscuro" alt="...">
                <div class="carousel-caption">
                  <h2>Thirds slide label</h2>
                  <h5 class="hide-movil">Some representative placeholder content for the second slide.</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#fadecar" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#fadecar" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="fondoslide w-100 m-0 p-0 p-2">
      <div class="m-0 p-0 row justify-content-center align-items-center text-center opacityfix">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid w-100 p-0 m-0">
                <div class="row w-100 p-0 m-0">
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/porsche.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/ford.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/mitshu.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/subaru.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col hide">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/lotus.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid w-100 p-0 m-0">
                <div class="row w-100 p-0 m-0">
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/porsche.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/porsche.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/porsche.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/porsche.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col hide">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/porsche.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid w-100 p-0 m-0">
                <div class="row w-100 p-0 m-0">
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/porsche.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/porsche.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/porsche.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/porsche.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                  <div class="col hide">
                    <a href="" class="imagenmarcas img-fluid bn">
                      <img src="./img/porsche.png" alt="" class="imagenmarcas img-fluid">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--FOOTERS-->
    <div class="container-fluid w-100 p-0 m-0">
      <?php include'./H_F/footer.txt' ?>
    </div>
	<!--Script de bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
     AOS.init();
    </script>
  </body>
</html>