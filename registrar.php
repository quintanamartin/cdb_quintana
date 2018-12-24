<?php
//Conecto a la base de datos
include 'conexion.php';

//Recibo y almaceno en variables
$usuario = $_POST["nombreusuario"];
$email = $_POST["email"];
$clave = $_POST["clave"];

//Consulto
$insertar = "INSERT INTO usuarios (nombreusuario, email,clave) VALUES ('$usuario', '$email', '$clave')";

//Ejecuto
$resultado = mysqli_query($conectar, $insertar);
if(!$resultado){
   echo 'Error al registrarse';
} else {
   echo 'Usuario registrado exitosamente';
}
//Cierro conexion
mysqli_close($conectar);

?>