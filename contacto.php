<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <title>CDB - Contacto</title>
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
               <form class="registro" method="post" action="enviar.php">
                    
                    <input type="text" name="nombre" placeholder="Ingresa tu nombre"   class="campo-form" aria-label="Ingresa tu nombre"required> <br>
                    
                    <input type="email" name="email" placeholder="Ingresa tu correo electronico" class="campo-form" aria-label="Ingresa tu correo electronico" required> <br>
                    
                    <textarea type="text" name="mensaje" placeholder="Ingresa tu mensaje" class="campo-form" aria-label="Ingresa tu mensaje" required> </textarea><br>
                    
                    <input type="submit" name="enviar" value="Enviar" required class="boton-form">

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