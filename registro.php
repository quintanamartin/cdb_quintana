<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <title>CDB - Registro</title>
        <link rel="shortcut icon" href="img/favico.png">
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
           
            <div class="formulario">
                <form class="registro" method="post" action="registrar.php">
                    
                    <input type="text" name="nombreusuario" placeholder="Ingresa tu nombre de usuario"   class="campo-form" aria-label="Ingresa tu nombre"required> <br>
                    
                    <input type="email" name="email" placeholder="Ingresa tu correo electronico" class="campo-form" aria-label="Ingresa tu correo electronico" required> <br>
                    
                    <input type="password" name="clave" placeholder="Ingresa tu clave" class="campo-form" aria-label="Ingresa tu clave" required> <br>
                    
                    <input type="submit" name="registrarme" value="Registrarme" required class="boton-form">

                    <input type='reset' value='Reset' class="boton-form">
                </form>

            </div><!-- Cierra formulario  -->
         
            <!-- Abre footer -->
            <?php
            include('footer.php');
            ?>
            <!-- Cierra footer -->
        </div> <!--  cierra container -->
        

    </body>

</html>