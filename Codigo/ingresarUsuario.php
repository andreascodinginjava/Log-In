<html>
    <head>
        <title>Ingreso</title>
        <link href="css/Estilos.css" type="text/css" rel="stylesheet" media="">
        <meta charset="utf-8"> 
        <link rel="icon" href="Imagenes/Icono.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        <link href="https://fonts.googleapis.com/css?family=Anton|Dosis:400,800" rel="stylesheet"> 
    </head>

    <body>

        <div class="contenedorIngreso"> 
            <article class="col-12"> 
                <section>
                    <br>
                    <a href="Index.html" class="volver">ir Inicio</a>
                    <h2 class="lecture-title">Usuario</h2> 

                    <br><br><br>

                    <form class="contact_form" method="POST">
                        <label for="usser">Usuario:</label>
                        <input type="text" name="usser"/>
                
                        <br><br><br> <br><br>

                        <button class="submit" type="submit" name="ingresar">Ingresar</button>
                    </form>

                    <?php
                        include("Clases/cambioClave.php");
                    ?>

                </section>
            </article> 
        </div> 

        <footer class="site-footer">
            <h2 class="footer-title">&copy; Todos los derechos reservados - Colombia 2021</h2>
        </footer>
    </body>
</html>