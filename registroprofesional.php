<?php
include('db.php');
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$genero=$_POST['genero'];
$numero=$_POST['number'];
$email=$_POST['email'];
$contraseña=$_POST['password'];
$profesion=$_POST['profesion1'];
$experiencia=$_POST['experiencia'];
$descripcion=$_POST['descripcion'];

$insertar=" INSERT INTO trabajador (cedula, nombre, apellido, genero, numero, email, clave, profesion, experiencia, descripcion) VALUES ('$cedula', '$nombre', '$apellido', '$genero', '$numero', '$email', '$contraseña', '$profesion', '$experiencia', '$descripcion' )";

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


