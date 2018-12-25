<?php
//1-CONECTO A BD
$link = 'mysql:host=localhost;dbname=estadisticas';
$usuario = 'root';
$pass = '';

try{
   //2-INTENTA ESTO
   $pdo = new PDO($link, $usuario, $pass); 

  //3-SINO TE TIRA ERROR EN PANTALLA
} catch (PDOException $e) {
   print "¡Error!: " . $e->getMessage() . "<br/>";
   die();
}
//VARIABLE que va a leer la sentencia de la SQL
$sql_porris = 'SELECT AVG(puntos) AS prom_puntos, AVG(rebotes) AS prom_rebotes,AVG(asistencias) AS prom_asistencias, AVG(tapas) AS prom_tapas, AVG(perdidas) AS prom_perdidas,AVG(minutos) AS prom_minutos 
   FROM partidos 
   JOIN jugadores 
   USING(id_jugador) 
   WHERE apellido 
   LIKE "Porris"';

$sql_gomez = 'SELECT AVG(puntos) AS prom_puntos, AVG(rebotes) AS prom_rebotes,AVG(asistencias) AS prom_asistencias, AVG(tapas) AS prom_tapas, AVG(perdidas) AS prom_perdidas,AVG(minutos) AS prom_minutos 
   FROM partidos 
   JOIN jugadores 
   USING(id_jugador) 
   WHERE apellido 
   LIKE "Gomez"';
//Creamos variable
$gsent = $pdo->prepare($sql_porris);
$gsent->execute();
$resultado = $gsent->fetchAll();


$gomez = $pdo->prepare($sql_gomez);
$gomez->execute();
$resultadogomez = $gomez->fetchAll();


?>


<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <title>Coach de basquet</title>
        <link rel="shortcut icon" href="img/favico.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            <!-- Comienza Header -->
            <?php 
            include('header.php');
            ?>
            <!-- Cierra header -->
            <div class="banner">
                <img src="img/banner2.jpg">
                <div class="texto-banner">
                    <img src="img/michael.png">
                    
                </div> <!-- Cierra texto-banner -->
            </div> <!-- Cierra banner --> 
            
            
            <div class="contenido">
                <div class="nombre-equipo">
                    <h1> ESTADISTICAS DE LA TEMPORADA </h1>
                    <img src="img/dsc.png" class="logodelequipo">    
                </div>
                <div class="plantilla">
                    <div class="tarjeta">
                        <img src="http://www.a-b-a.com.ar/img/img_2018-07-28_14_12_48.jpg" class="img_estadistica">
                        <div class="tarjeta-datos">
                           <h1>Agustin Porris</h1>
                           <table>
                           <tr>
                              <td>
                                 Puntos por partido:
                              </td>
                              <td>
                                 <?php
                                    echo round($resultado[0]["prom_puntos"]);
                                 ?>
                              </td>
                           <tr>
                           <tr>
                              <td>
                                 Rebotes por partido:
                              </td>
                              <td>
                                 <?php
                                    echo round($resultado[0]["prom_rebotes"]);
                                 ?>
                              </td>
                           <tr>
                           <tr>
                              <td>
                                 Asistencias por partido:
                              </td>
                              <td>
                                 <?php
                                    echo round($resultado[0]["prom_asistencias"]);
                                 ?>
                              </td>
                           <tr>
                           <tr>
                              <td>
                                 Perdidas por partido:
                              </td>
                              <td>
                                 <?php
                                    echo round($resultado[0]["prom_perdidas"]);
                                 ?> 
                              </td>
                           <tr>
                           <tr>
                              <td>
                                 Minutos jugados por partido:
                              </td>
                              <td>
                                 <?php
                                    echo round($resultado[0]["prom_minutos"]);
                                 ?>
                              </td>
                           <tr>
                           </table>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <img src="http://www.a-b-a.com.ar/img/img_2018-07-28_14_13_38.jpg" class="img_estadistica">
                        <div class="tarjeta-datos">
                           <h1>Ezequiel Gomez</h1>
                           <table>
                           <tr>
                              <td>
                                 Puntos por partido:
                              </td>
                              <td>
                                 <?php
                                    echo round($resultadogomez[0]["prom_puntos"]);
                                 ?>
                              </td>
                           <tr>
                           <tr>
                              <td>
                                 Rebotes por partido:
                              </td>
                              <td>
                                 <?php
                                    echo round($resultadogomez[0]["prom_rebotes"]);
                                 ?>
                              </td>
                           <tr>
                           <tr>
                              <td>
                                 Asistencias por partido:
                              </td>
                              <td>
                                 <?php
                                    echo round($resultadogomez[0]["prom_asistencias"]);
                                 ?>
                              </td>
                           <tr>
                           <tr>
                              <td>
                                 Perdidas por partido:
                              </td>
                              <td>
                                 <?php
                                    echo round($resultadogomez[0]["prom_perdidas"]);
                                 ?> 
                              </td>
                           <tr>
                           <tr>
                              <td>
                                 Minutos jugados por partido:
                              </td>
                              <td>
                                 <?php
                                    echo round($resultadogomez[0]["prom_minutos"]);
                                 ?>
                              </td>
                           <tr>
                           </table>
                        </div>
                    </div>
                                
                    
                   

                            

                            
                    
              


                </div>
            </div><!-- Cierra contenido -->
            <!-- Abre footer -->
            <?php
            include('footer.php');
            ?>
            <!-- Cierra footer -->
        </div> <!--  cierra container -->
        

    </body>

</html>