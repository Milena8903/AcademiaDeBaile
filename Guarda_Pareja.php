<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
       <?php 
            include 'Includes/Meta.php';
        ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
    <div class="container">
      
     <?php 
        include 'Includes/Encabezado.php';
        include 'Includes/Menu.php';
    ?>  
    
        

    <section>

      
                    <?php 
                        include 'conexion.php';

                        // Recibo los datos introducidos 
                        $nombre1=$_POST['nombre1'];
                        $nombre2=$_POST['nombre2'];
                        $categoria=$_POST['categoria'];
                        $color=$_POST['color'];

                        //Armo la consulta
                        $query="INSERT INTO Pareja (Nombre_Pareja1, Nombre_Pareja2, Categoria, Color_Vestido) 
                        VALUES ('$nombre1','$nombre2','$categoria','$color')";
                        
                        // Ejecuto la consulta
                        $resultado=$mysqli->query($query);

                        // si la consulta falla, muestro error, de lo contrario confirmo y re envio .
                        if ($resultado>0) {
                            echo 'Pareja Creada con éxito';
                        } else {
                            echo 'Ha ocurrido un error, revise los datos';
                        }                       

                     ?>


                    <!-- Devolvemos al inicio -->
                    <p></p> 
                    
                    <a class="btn btn-default btn-large" href="index.php">Regresar</a>                          


    </section>


                <?php 
                 include 'Includes/Pie.php';
                ?>

    </div>
   
                <?php 
                 include 'Includes/Pie2.php';
                ?>
    </body>
</html>