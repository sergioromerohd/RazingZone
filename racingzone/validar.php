<?php session_start();
include('database.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];



$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$contraseña'";
$resultado=mysqli_query($link,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    $_SESSION['usuario']=$usuario;
    echo "<script>window.location.href='welcome.php';</script>";
    exit;

}else{
    $message='<div class="bg-danger p-3 border-1 rounded-3 shadow">
                      <h6>Usuario o contraseña incorrectos, intentelo de nuevo</h6>
                      <p>si aun no tienes cuenta: <a href="./register.php" class="text-white">Registrate</a></p>
                    </div>';
    ?>
    <?php
    include("login.php");

  ?>
  
  <?php
}
mysqli_free_result($resultado);
mysqli_close($link);