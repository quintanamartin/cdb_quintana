<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <title>CDB - Contraseña</title>
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
                <form class="registro" method="POST" action="">
                    
                    <input type="email" placeholder="Ingresa tu correo electronico" class="campo-form" aria-label="Ingresa tu correo electronico" required> <br>

                    <input type="submit" value="Recuperar clave" required class="boton-form">

                    
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