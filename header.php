<?php ?>
<!-- Comienza el header -->
            <header class="encabezado">
           

                <nav class="navbar">
                    <div id="menuToggle">
                        <input type="checkbox" class="toggle-check">
                        <span></span>
                        <span></span>
                        <span></span>
                    <ul class="lista menu">
                    

                        <li><a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a></li>
                        <li class="lista-items"><a href="index.php">Plantilla</a></li>
                        <li class="lista-items"><a href="fixture.php">Fixture</a></li>
                        <li class="lista-items"><a href="estadisticas.php">Estadisticas</a></li>
                        <li class="lista-items"><a href="jugadas.php">Jugadas</a></li>
                        <li class="lista-items desplegable"><a href="#">Login</a>
                        <ul class="login">
                            <form action="validar.php" method="post">
                                <li>
                                    Usuario
                                    <input type="text" name="usuario" required>
                                </li>
                                <li>
                                    Contraseña
                                    <input type="password" name="clave" required>
                                </li>
                                <li>
                                    <input type="submit" value="Login" class="login-btn">
                                </li>
                          </form> 
                            <li><a href="olvido.php"> Olvidé mi contraseña </a></li>
                            <li><a href="registro.php"> Registrarme </a></li>
                        </ul>  <!-- cierra lista login   -->    
                        <li class="lista-items"><a href="contacto.php">Contacto</a></li>                                 
                    </ul><!--  cierra lista -->
</div> <!--Cierra toggle -->
                </nav><!--  cierra navbar -->
                
            </header> <!-- Cierra el header -->
            <?php ?>