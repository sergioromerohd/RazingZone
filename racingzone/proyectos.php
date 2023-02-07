<?php session_start(); ?>
<?php require 'database.php';?>
<?php  
  if (isset($_GET["pagina"])) {
    if ($_GET["pagina"]>998) {
      $_GET["pagina"]=998;
    }
    $x=(int)$_GET["pagina"];
    $x=$x-1;
    $x=$x*5;
    $x++;
  }else{
    $x=1;
  }
  $xi=$x+4;
  if (isset($_GET["ordenarpor"])) {
    $orden=$_GET["ordenarpor"];
  }else{
    $orden="fecha";
  }


  function darlike($link,$post){
    $darlike="UPDATE posts set likes=likes+1 where cod_post=$post";
    $q_darlike=mysqli_query($link,$darlike);
  }
  $postlike="likes".$_GET['likepost'];
  if (isset($_GET["like"])&& !isset($_SESSION[$postlike])) {
    darlike($link,$_GET['likepost']);
    $_SESSION[$postlike]=true;
  }else if (isset($_GET["like"])&&isset($_SESSION[$postlike])) {
     echo '<script language="javascript">alert("ha superado el limite de likes de este post");</script>';
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
    <link href="./css/proyectos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="icon" type="image/png" href="./img/navlogo.jpg" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <title>Foro</title>
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
    <div class="container-fluid  m-0 p-0 proye-tit pt-2">
      <div class="row w-100 m-0 p-0 justify-content-center align-items-end">
        <div class="col text-center">
          <h1 class="text-white m-0">Razing Zone Foro</h1>
          <p class="text-white-50 m-0 p-0 mb-2">aqui encontraras proyectos de nuestro taller y de usuarios como tú</p>
        </div>
      </div>
    </div>
    <div class="container-fluid w-100 P-0 proye-nav bg-dark border-top border-1 border-light pb-1">
      <div class="row w-100 p-0 m">
        <div class="col-6 m-0 mt-2 mb-2">
          <?
          $pag=(int)$_GET['pagina'];
          $sigpag=(int)($_GET["pagina"]);
          $sigpag+=1;
          $sigpagar=(string)$sigpag;
          $sigpag2=$sigpag+1;
          $antpag=(int)$_GET["pagina"];
          $antpag-=1;
          if (($_GET["pagina"])==null ||($_GET["pagina"])==2) {
            if (($_GET["pagina"])==2) {
            $colorpagina2="text-white-50";
            }
            if (($_GET["pagina"])==null or ($_GET["pagina"])==1) {
            $colorpagina="text-white-50";
            }
            echo '<a class="td-none ps-2 text-white '.$colorpagina.'" href="./proyectos.php">1</a>
            <a class="td-none ps-2 text-white '.$colorpagina2.'" href="./proyectos.php?pagina=2">2</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php?pagina=3">3</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php?pagina=4">4</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php?pagina='.$sigpag.'">&gt</a>';
          }else{
            echo '<a class="td-none ps-2 text-white" href="./proyectos.php?pagina='.$antpag.'">&lt</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php">1..</a>
            <a class="td-none ps-2 text-white text-white-50" href="./proyectos.php?pagina='.$pag.'">'.$pag.'</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php?pagina='.$sigpag.'">'.$sigpag.'</a>';
            $sigpag2=$sigpag+1;
            echo '<a class="td-none ps-2 text-white" href="./proyectos.php?pagina='.$sigpag2.'">'.$sigpag2.'</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php?pagina='.$sigpag.'">&gt</a>';
            
            
          } 
          ?>
          <div class="container-fluid m-0 p-0 w-100">
            <div class="row m-0 p-0">
              <div class="col ">
                <div class="dropdown text-center">
                  <button class="btn btn-light dropdown-toggle ps-4 ps-sm-5 pe-4 pe-sm-5 pt-1 pb-1 my-auto d-block mt-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $orden; ?>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="./proyectos.php?ordenarpor=fecha">fecha</a></li>
                    <li><a class="dropdown-item" href="./proyectos.php?ordenarpor=titulo">titulo</a></li>
                    <li><a class="dropdown-item" href="./proyectos.php?ordenarpor=likes DESC">likes</a></li>
                  </ul>
                </div>
              </div>
              <div class="col">
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 text-end mt-2 mb-2 " style="display: block !important; margin: auto 0 !important;">
            <a href="./escribirpost.php" class="td-none bg-light ps-2 ps-sm-5 pe-2 pe-sm-5 pt-3 pb-3 text-dark border-1 rounded-2 ">Redactar</a>
        </div>
      </div>
    </div>
    <hr class="text-danger m-0 p-0 bg-white">

    <!-- cuerpo de los posts -->
    <div class="container-fluid bg-dark pb-md-4 pb-2 pt-md-4 pt-2 ">
      <!-- estructura de un post -->
      <?php 

      $post="SELECT * FROM posts, usuarios WHERE posts.cod_usuario=usuarios.id ORDER BY $orden";
      $q_post=mysqli_query($link,$post);
      $validar=mysqli_num_rows($q_post);
      $contador=1;
      while ($r_post= mysqli_fetch_array($q_post)) {
        $numpost_id=(int)$r_post["id"];
        $numpost='SELECT COUNT(posts.cod_post)FROM posts,usuarios WHERE posts.cod_usuario=usuarios.id and posts.cod_usuario='.$numpost_id;
        $q_numpost=mysqli_query($link,$numpost);
        $r_numpost=mysqli_fetch_array($q_numpost);
        //sacar informacion de las fotos de cada post
        $fotos="SELECT * FROM posts,fotos WHERE posts.cod_post=$r_post[cod_post] AND posts.cod_post=fotos.cod_post";
        $q_fotos=mysqli_query($link,$fotos);
        $r_fotos= mysqli_fetch_array($q_fotos);
        //echo "<h1>$r_post[titulo] $r_post[usuario]</h1>
        //<img src='$r_fotos[foto]'>";
          if ($contador<=$xi&&$contador>=$x) {
            echo'<div class="row post border-1 rounded-2 bg-light mx-auto mt-3 shadow" data-aos="fade-up" data-aos-offset="200">
        <div class="m-0 p-0 border-bottom border-3 text-center align-content-center">
          <h3 class="align-middle m-0 mt-2 mb-2">'.$r_post["titulo"].'</h3>
        </div>
          <div class="col">
            <div class="container-fluid w-100 p-0">
              <div class="row">
                <div class="col-12 col-sm-3 border-end border-bottom border-2 pt-2">
                  <div class="w-100 border-2 rounded-2 bg-dark text-center">
                    <h6><a href="./usuario.php?usuario='.$r_post["usuario"].'" class="text-white">'.$r_post["usuario"].'</a></h6>
                  </div>
                  <!-- imagen del autor -->
                  <img class="img-fluid b-3 autor mx-auto d-block shadow-sm  w-50" src="'.$r_post["foto"].'" alt="imagen del autor">
                  <h6 class="mt-2 mt-sm-5">Rango: '.$r_post["rango"].'</h6>
                  <h6>Desde: '.$r_post["entrada"].'</h6>
                  <h6>Posts: '.$r_numpost[0].'</h6>

                </div>
                <div class="col-12 col-sm-9 d-inline-block partepost">
                  <div class="align-content-center mt-4 mb-5">

                    <p>'.$r_post["cuerpo"].'</p>
                    <h5>'.$r_post["fecha"].'</h5>
                    <div id="Imagen'.$r_post["cod_post"].'" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner shadow">
                        <div class="carousel-item active">
                          <img src="'.$r_fotos["foto"].'" class="d-block w-100" alt="...">
                        </div>';
                        while($row = mysqli_fetch_assoc($q_fotos)) {
                          $foto = $row['foto'];
                          echo '<div class="carousel-item">
                          <img class="d-block w-100 " src="'.$foto.'"  >
                          </div>';
                          }
                          echo'
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#Imagen'.$r_post["cod_post"].'" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#Imagen'.$r_post["cod_post"].'" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="container-fluid w-100 m-0 mt-1 mt-sm-3">
        <div class="row w-100" >
          <div class="align-content-end w-100 text-center" >
          <a class="td-none border-0 bg-dark text-white" href="./proyectos.php?ordenarpor='.$orden.'&like=true&likepost='.$r_post["cod_post"].'">
                <h6 class="">Likes 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
                </svg> '.$r_post["likes"].'
              </h6>
            </a>
          </div>
        </div>
      </div>';
      
          }
        $contador++;
      }
      /*for ($i=$x; $i <$xi ; $i++) { 
        $post="SELECT * FROM posts, usuarios WHERE cod_post=$i AND posts.cod_usuario=usuarios.id";
        $q_post=mysqli_query($link,$post);
        $validar=mysqli_num_rows($q_post);
        $r_post= mysqli_fetch_array($q_post);
        //saber cuantos post tiene el autor
        $numpost_id=(int)$r_post["id"];
        $numpost='SELECT COUNT(posts.cod_post)FROM posts,usuarios WHERE posts.cod_usuario=usuarios.id and posts.cod_usuario='.$numpost_id;
        $q_numpost=mysqli_query($link,$numpost);
        $r_numpost=mysqli_fetch_array($q_numpost);
        //sacar informacion de las fotos de cada post
        $fotos="SELECT * FROM posts,fotos WHERE posts.cod_post=$i AND posts.cod_post=fotos.cod_post";
        $q_fotos=mysqli_query($link,$fotos);
        $r_fotos= mysqli_fetch_array($q_fotos);


        //esto nunca se va a ejecutar pero es codigo borrador
        if ($validar=null) {
        echo'<div class="row post border-1 rounded-2 bg-light mx-auto mt-3 shadow">
        <div class="m-0 p-0 border-bottom border-3 text-center align-content-center">
          <h3 class="align-middle m-0">'.$r_post["titulo"].'</h3>
        </div>
          <div class="col">
            <div class="container-fluid w-100 p-0">
              <div class="row">
                <div class="col-12 col-sm-3 border-end border-bottom border-2 pt-2">
                  <div class="w-100 border-2 rounded-2 bg-dark text-center">
                    <h6><a href="" class="text-white">'.$r_post["usuario"].'</a></h6>
                  </div>
                  <!-- imagen del autor -->
                  <img class="img-fluid b-3 w-75 mx-auto d-block shadow-sm  " src="'.$r_post["foto"].'" alt="imagen del autor">
                  <h6 class="mt-2 mt-sm-5">Rango: '.$r_post["rango"].'</h6>
                  <h6>Desde: '.$r_post["entrada"].'</h6>
                  <h6>Posts: '.$r_numpost[0].'</h6>

                </div>
                <div class="col-12 col-sm-9 d-inline-block partepost">
                  <div class="align-content-center mt-4 mb-5">
                    <p>'.$r_post["cuerpo"].'</p>
                    <div id="Imagen'.$r_post["cod_post"].'" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner shadow">
                        <div class="carousel-item active">
                          <img src="'.$r_fotos["foto"].'" class="d-block w-100" alt="...">
                        </div>';
                        while($row = mysqli_fetch_assoc($q_fotos)) {
                          $foto = $row['foto'];
                          echo '<div class="carousel-item">
                          <img class="d-block w-100" src="'.$foto.'"  >
                          </div>';
                          }
                          echo'
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#Imagen'.$r_post["cod_post"].'" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#Imagen'.$r_post["cod_post"].'" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                     
                  </div>
                  <div class="align-content-end likesbar" ><h6>Likes <3 '.$r_post["likes"].'</h6></div>
                </div>
              </div>
            </div>
          </div>
      </div>';
      }
    }*/
    /*pruebas
    $posible=True;
    $posts=0;
    $max_post="SELECT max(cod_post) FROM posts";
    $prueba=mysqli_query($link,$max_post);
    $row = mysqli_fetch_array($prueba);
    while ($posible=="true") {
      echo $r_fotos["foto"];
      $posts++;

      if ($posts==4) {
        $posible=false;
      }
    } */?>
    </div>
    <div class="container-fluid w-100 P-0 proye-nav bg-dark border-top border-1 border-light">
      <div class="row w-100 p-0 m">
        <div class="col-6 col-sm-8 mt-2 mb-2">
          <a href="./escribirpost.php" class="td-none bg-light ps-2 ps-sm-5 pe-2 pe-sm-5 pt-1 pb-1 text-dark border-1 rounded-2">Escibe tu Post</a>
        </div>
        <div class="col-6 col-sm-4 m-0 mt-2 mb-2 text-end">
          <?
          $pag=(int)$_GET['pagina'];
          $sigpag=(int)($_GET["pagina"]);
          $sigpag+=1;
          $sigpagar=(string)$sigpag;
          $antpag=(int)$_GET["pagina"];
          $antpag-=1;
          if (($_GET["pagina"])==null ||($_GET["pagina"])==2) {
            echo '
            <a class="td-none ps-2 text-white '.$colorpagina.'" href="./proyectos.php">1</a>
            <a class="td-none ps-2 text-white '.$colorpagina2.'" href="./proyectos.php?pagina=2">2</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php?pagina=3">3</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php?pagina=4">4</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php?pagina='.$sigpag.'">&gt</a>';
          }else{
            echo '<a class="td-none ps-2 text-white" href="./proyectos.php?pagina='.$antpag.'">&lt</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php">1..</a>
            <a class="td-none ps-2 text-white text-white-50" href="./proyectos.php?pagina='.$pag.'">'.$pag.'</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php?pagina='.$sigpag.'">'.$sigpag.'</a>';
            echo '<a class="td-none ps-2 text-white" href="./proyectos.php?pagina='.$sigpag2.'">'.$sigpag2.'</a>
            <a class="td-none ps-2 text-white" href="./proyectos.php?pagina='.$sigpag.'">&gt</a>
            ';
            
            
          } 
          ?>
        </div>
      </div>
    </div>
    <!--FOOTERS-->
    <div class="container-fluid w-100 p-0 m-0 footercolor">
      <?php include'./H_F/footer.txt' ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
     AOS.init();
    </script>
  </body>
</html>