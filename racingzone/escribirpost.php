<?php session_start(); ?>
<?php
 
if(!isset($_SESSION['usuario'])){
    $_SESSION['mensaje']="Necesitas iniciar sesion para publicar en el foro";
    header('Location: login.php');
    exit;
} 
  require 'database.php';

  $message = '';

  

  if (!empty($_POST['titulo']) && !empty($_POST['cuerpo'])) {
    //le damos el valor nuevo al cod post, este sera 1+ que el cod post mas alto
    $maxid="SELECT max(cod_post) FROM posts";
    $q_maxid=mysqli_query($link,$maxid);
    $r_maxid=mysqli_fetch_array($q_maxid);
    $new_cod_post=(int)$r_maxid[0];
    $new_cod_post+=1;
    $usuario=$_SESSION['usuario'];
    $nombrexid="SELECT id FROM usuarios WHERE usuarios.usuario='$usuario'";
    $q_nombrexid=mysqli_query($link,$nombrexid);
    $r_nombrexid=mysqli_fetch_array($q_nombrexid);
    $sql = "INSERT INTO posts (cod_post,titulo, cuerpo,cod_usuario) VALUES (:cod_post, :titulo, :cuerpo, :cod_usuario)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cod_post', $new_cod_post);
    $stmt->bindParam(':titulo', $_POST['titulo']);
    $cuerpo=nl2br($_POST['cuerpo']);
    $stmt->bindParam(":cuerpo",$cuerpo);
    $stmt->bindParam(":cod_usuario", $r_nombrexid[0]);
    if ($stmt->execute()) {
      if($_FILES["imagen"]){
        //Recorre el array de los archivos a subir
        foreach($_FILES["imagen"]['tmp_name'] as $key => $tmp_name){
            //Si el archivo existe
            if($_FILES["imagen"]["name"][$key]){
                // Nombres de archivos de temporales
                $archivonombre = $_FILES["imagen"]["name"][$key]; 
                $fuente = $_FILES["imagen"]["tmp_name"][$key]; 
                $carpeta = './img/posts/'.$_POST['titulo']; //Carpeta donde guardamos los archivos
                //Si no existe la carpeta
                if(!file_exists($carpeta)){
                    //Se crea o se genera un error.
                    mkdir($carpeta, 0777) or die("Hubo un error al crear la carpeta");  
                }
                //Abrimos la conexion con la carpeta destino
                $dir=opendir($carpeta);
                $linkfoto=$carpeta.'/'.$archivonombre;
                //Verificamos si el archivo se ha subido
                if(move_uploaded_file($fuente, $carpeta.'/'.$archivonombre)){ 
                    echo "El archivo $archivonombre se ha cargado de forma correcta.<br>";
                    $sql_foto="INSERT INTO fotos (cod_post,foto) VALUES (:cod_post, :foto)";
                    $stmt2 = $conn->prepare($sql_foto);
                    $stmt2->bindParam(':cod_post', $new_cod_post);
                    $stmt2->bindParam(":foto", $linkfoto);
                    if ($stmt2->execute()) {
                      echo "Se ha creado la tupla en la tabla fotos correctamente";
                    }
                }else{  
                    echo "Se ha producido un error, intentelo de nuevo.<br>";
                }
                //Cerramos la conexion con la carpeta destino
                closedir($dir); 
            }
        }
    }
      
      echo '<script type="text/javascript">
           setTimeout( function() { window.location.href = "./proyectos.php"; }, 1000 );
          </script>';
    } else {
      $message = 'Error al crear el post ';
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
    <link href="./css/escribirpost.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/navbar.css">
    <title>Esciba aqui su post</title>
  </head>
  <body>

    <!--Header-->
    <div class="container-fluid w-100 m-0 P-0 mt-0 fixed-top bg-light border-bottom border-4 border-dark">
      <?php include'./H_F/header.txt'?>
    </div>
    <div class="container-fluid m-0 p-0 w-100 vh-100 pt-5 pb-5 bg-dark">
      <div class="row m-0 p-0 justify-content-center align-items-center  pt-5 pb-5">
        <div class="col">
          <form class="ps-sm-4 pe-sm-4 text-center" action="escribirpost.php" method="POST" enctype="multipart/form-data" class="m-2 p-1 ">
            <div class="mb-3">
                <label class="form-label fs-3 text-white" for="exampleFormControlInput1">
                    titulo del Post
                </label>
                <input required aria-label=".form-control-sm example" name="titulo" class="form-control form-control" placeholder="Introduzca aqui su titulo" type="text" required>
                    <label class="form-label fs-3 text-white" for="exampleFormControlInput1">
                        post
                    </label>
                    <textarea name="cuerpo" class="form-control border-3" id="exampleFormControlTextarea1" rows="7" placeholder="Introduce aqui tu Post" required></textarea>
                    <input required class="mt-3 text-white" type="file" name="imagen[]" accept=".jpg,.jpeg,.gif,.webp,.png" multiple/>
                </input>
            </div>
            <button type="submit" name="publicar" value="publicar" class="btn-light btn-outline-dark">Subir mi post al foro</button>
        </form>
        </div>
      </div>
    </div>

  </body>
  </html>
