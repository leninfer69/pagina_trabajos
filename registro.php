<?php
include('db.php');
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$genero=$_POST['genero'];
$numero=$_POST['number'];
$email=$_POST['email'];
$contraseña=$_POST['password'];

$insertar=" INSERT INTO usuarios (cedula, nombre, apellido, genero, numero, email, clave) VALUES ('$cedula', '$nombre', '$apellido', '$genero', '$numero', '$email', '$contraseña' )";

$resultado=mysqli_query($conexion,$insertar);


if($resultado){
  
    header("location:index.html");

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


