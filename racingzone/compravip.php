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
    <link href="" rel="stylesheet">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/compravip.css">
    <title>Comprar Vip</title>
  </head>
  <body class="bg-dark">
    <!--Header-->
    <div class="container-fluid w-100 m-0 P-0 mt-0 fixed-top bg-light border-bottom border-4 border-dark">
      <?php include'./H_F/header.txt'?>
    </div>
      <div class="container-fluid p-5">
        <div class="row justify-content-center align-items-center text-center movil-largo vh-50">
          <div class="col-12">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <span class="price">8P</span><br>/minimo 10 dias registrado 
                  <br>
                  <h2 class="card-title">Basic</h2>
                  <small>Individual</small>
                </div>
                <div class="flip-card-back ">
                 <ul class="list-group list-group-flush">
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg>Nuevo Rango: Aprendiz</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg>Color de rango: gris</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg>imagen de perfil unica</li>
                </ul>
                <button class="btn btn-outline-success btn-lg">comprar</button>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div class="row vh-100 justify-content-center align-items-center text-center">
          <div class="col-6 col-md-4 movil-hide">
            <div class=" flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                 
                  <span class="price">8P</span><br>/minimo 10 dias registrado  
                  <br>
                  <h2 class="card-title">Basic</h2>
                  <small>Individual</small>
                </div>
                <div class="flip-card-back">
                 <ul class="list-group list-group-flush">
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg>Nuevo Rango: Aprendiz</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg>Color de rango: gris</li>
                  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                  </svg>imagen de perfil unica</li>
                </ul>
                <button class="my-5 btn btn-outline-success btn-lg">comprar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-4">
          <div class="h-100 flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
               
                <span class="price">20P</span><br>/minimo 50 dias registrado 
                <br>
                <h2 class="card-title">Standard</h2>
                <small>Small Business</small>
              </div>
              <div class="flip-card-back">
               <ul class="list-group list-group-flush">
                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                </svg> Cras justo odio</li>
                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                </svg> Dapibus ac facilisis in</li>
                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                </svg> Vestibulum at eros</li>
              </ul>
              <button class="my-5 btn btn-outline-success btn-lg">comprar</button>
            </div>
          </div>
        </div>
      </div>


      <div class="col-6 col-md-4">
        <div class="h-100 flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
             
              <span class="price">40P</span><br>/minimo 100 dias registrado  
              <br>
              <h2 class="card-title">Premium</h2>
              <small>Large Company</small>
            </div>
            <div class="flip-card-back">
             <ul class="list-group list-group-flush">
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
              </svg> Cras justo odio</li>
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
              </svg> Dapibus ac facilisis in</li>
              <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
              </svg> Vestibulum at eros</li>
            </ul>
            <button class="my-5 btn btn-outline-success btn-lg">Comprar</button>
          </div>
        </div>
      </div>
    </div>






    </div>    
    </div>
    <!--FOOTERS-->
    <div class="container-fluid w-100 p-0 m-0 footercolor d-block">
      <?php include'./H_F/footer.txt' ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>