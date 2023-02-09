<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];



$consulta="SELECT*FROM usuarios where nombre='$usuario' and clave='$password'";




$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:main.html");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h2 class="bad">ERROR DE AUTENTIFICACION DEBE REGISTRARCE</h2>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
