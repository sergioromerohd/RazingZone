<?php session_start(); ?>
<?php require 'database.php';?>
<?php 

//query para sacar info del usuario
$post="SELECT * FROM usuarios WHERE usuario='$_GET[usuario]'";
$q_post=mysqli_query($link,$post);
$r_post= mysqli_fetch_array($q_post);
//sacar suma de post totales
$numpost_id=(int)$r_post["id"];
$numpost='SELECT COUNT(posts.cod_post)FROM posts,usuarios WHERE posts.cod_usuario=usuarios.id and posts.cod_usuario='.$numpost_id;
$q_numpost=mysqli_query($link,$numpost);
$r_numpost=mysqli_fetch_array($q_numpost);

if ($_POST['actualizar']) {
  
  $sql = "UPDATE usuarios SET usuario='$_POST[usuario]',email='$_POST[email]',telefono='$_POST[telefono]',bio='$_POST[bio]' where id='$r_post[id]'";
    if (mysqli_query($link,$sql)) {
      if($_FILES["imagen"]){
        //Recorre el array de los archivos a subir
        foreach($_FILES["imagen"]['tmp_name'] as $key => $tmp_name){
            //Si el archivo existe
            if($_FILES["imagen"]["name"][$key]){
                // Nombres de archivos de temporales
                $archivonombre = $_FILES["imagen"]["name"][$key]; 
                $fuente = $_FILES["imagen"]["tmp_name"][$key]; 
                $carpeta = './img/usuarios/'.$r_post['id']; //Carpeta donde guardamos los archivos
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
                    $sql_foto="UPDATE usuarios SET foto='$linkfoto' WHERE id='$r_post[id]'";
                    if (mysqli_query($link,$sql_foto)) {
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
      $_SESSION['usuario']=$_POST['usuario']; 
      echo "<script>alert('el perfil se ha actualizado correctamente')</script>";
      echo '<script type="text/javascript">
           setTimeout( function() { window.location.href = "./"; }, 0 );
          </script>';
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
    <link href="./css/usuario.css" rel="stylesheet">
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
    <!--Header fix-->
    <div class="container-fluid w-100 m-0 P-0 mt-0 bg-light border-bottom border-4 border-dark">
      <?php include'./H_F/header.txt'?>
    </div>
    <!-- baner con el logo y el nombre del usuario -->
    <div class="container-fluid baner m-0 P-0 w-100">
      <div class="row align-items-end">
        <div class="col-1 col-md-2"></div>
        <div class="col-4 col-md-2" >
          <img src="<?php echo $r_post["foto"]; ?>" class="img-fluid border border-dark rounded-3 shadow" alt="">
        </div>
        <div class="col-6 col-md-7">
          <div class="">
            <h1 class="nombreautor m-0 P-0"><?php echo $r_post["usuario"]; ?></h1>
          </div>
        </div>
        <div class="col-1 col-md-2"></div>
      </div>
    </div>
    <!--Cuerpo del ususario con sus datos-->
    <div class="container-fluid w-100 m-0 P-0 pt-5 pb-4 bg-dark">
      <div class="row">
        <?php 
        if ($_GET['usuario']==$_SESSION['usuario']) {
          echo'
          <div class="col-1 col-md-2 bg-dark"></div>
          <div class="col-10 col-md-4 border rounded-start shadow bg-light" >
            <div class="mt-1 mt-sm-3 mb-1 mb-sm-3">
              <h4>Usuario desde:</h4>
              <p class="ms-5 fs-6">'.$r_post["entrada"].'</p>
              <h4>Monedas:</h4>
              <p class="ms-5 fs-6">Proximamente</p>
              <h4>Email:</h4>
              <p class="ms-5 fs-6">'.$r_post["email"].'</p>
              <h4>Telefono:</h4>
              <p class="ms-5 fs-6">'.$r_post["telefono"].' </p>
              <h4>Rango:</h4>
              <p class="ms-5 fs-6">'.$r_post["rango"].'</p>
              <h4>Biografia:</h4>
              <p class="ms-5 fs-6">'.$r_post["bio"].'</p>
              <h4>Posts:</h4>
              <p class="ms-5 fs-6">'.$r_numpost[0].'</p>
            </div>
          </div>
          <div class="col-12 mt-md-0 mt-3 col-md-4 rounded-end border shadow bg-light">
            <form action="usuario.php?usuario='.$r_post["usuario"].'" method="POST" class=" m-2 p-1 text-center" enctype="multipart/form-data">
              <div class="mb-3 text-start">
                  <label class="form-label " for="exampleFormControlInput1">
                      Nombre de usuario
                  </label>
                  <input aria-label=".form-control-sm example" name="usuario" class="form-control form-control" placeholder="Su Usuario" value="'.$r_post["usuario"].'" type="text" required>
                  </input>
                  <label class="form-label " for="exampleFormControlInput1">
                      Email
                  </label>
                  <input aria-label=".form-control-sm example" name="email" class="form-control form-control" placeholder="Su Usuario" value="'.$r_post["email"].'" type="text" required>
                  </input>
                  <label class="form-label " for="exampleFormControlInput1">
                      Email
                  </label>
                  <input aria-label=".form-control-sm example" name="telefono" class="form-control form-control" placeholder="Su Usuario" value="'.$r_post["telefono"].'" type="text" required>
                  </input>
                  <label class="form-label " for="exampleFormControlInput1">
                      biografia
                  </label>
                  <textarea aria-label=".form-control-sm example" name="bio" class="form-control form-control"  type="text" required>'.$r_post["bio"].'</textarea>
                  <label class="form-label " for="exampleFormControlInput1">
                      Foto de Perfil
                  </label>
                  <input class="mt-3 w-100" type="file" name="imagen[]" accept=".jpg,.jpeg,.gif,.webp,.png"/>
              </div>
              <button class="btn btn-dark w-100"type="submit" name="actualizar" value="actualizar">actualizar</button>
            </form>
          </div>
          <div class="col-md-2 bg-dark"></div>
          ';
        }else{
        echo'
          <div class="col-1 col-md-2 bg-dark"></div>
          <div class="col-10 col-md-8 border border-dark shadow bg-light rounded-3">
            <h4 class="border-bottom">Usuario desde:</h4>
            <p class="ms-5 fs-6 ps-1 border-start">'.$r_post["entrada"].'</p>
            <h4 class="border-bottom">Monedas:</h4>
            <p class="ms-5 fs-6 ps-1 border-start">Proximamente</p>
            <h4 class="border-bottom">Email:</h4>
            <p class="ms-5 fs-6 ps-1 border-start">'.$r_post["email"].'</p>
            <h4 class="border-bottom">Telefono:</h4>
            <p class="ms-5 fs-6 ps-1 border-start">'.$r_post["telefono"].' </p>
            <h4 class="border-bottom">Rango:</h4>
            <p class="ms-5 fs-6 ps-1 border-start">'.$r_post["rango"].'</p>
            <h4 class="border-bottom">Biografia:</h4>
            <p class="ms-5 fs-6 ps-1 border-start">'.$r_post["bio"].'</p>
            <h4 class="border-bottom">Posts:</h4>
            <p class="ms-5 fs-6 ps-1 border-start">'.$r_numpost[0].'</p>
          </div>
          <div class="col-1 col-md-2 bg-dark"></div>
          ';}?>
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