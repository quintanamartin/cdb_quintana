<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//conecto a la bd
$conectar = mysqli_connect(
   "localhost",
   "id7065118_coachdebasquet",
   "1531315439",
   "id7065118_registro"
);

$consulta="SELECT * FROM usuarios WHERE nombreusuario='$usuario' and clave='$clave'";

$resultado=mysqli_query($conectar, $consulta);

$datos=mysqli_num_rows($resultado);
if ($datos>0){
   header("location:index.php");
} else {
   echo "Error de validacion";
}
// mysqli_free_result($resultado);
// mysqli_close($conexion);

?>