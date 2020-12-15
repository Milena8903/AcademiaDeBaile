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
        
        <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="carousel slide" id="miSlider" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#miSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#miSlider" data-slide-to="1"></li>
                    <li data-target="#miSlider" data-slide-to="2"></li>
                </ol>
        
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/galeria1.jpg" alt="Imagen1">
                    <div class="carousel-caption">
                        <p>Nuestras Instalaciones</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/galeria2.jpg" alt="Imagen2">
                </div>

                <div class="item">
                    <img src="img/galeria3.jpg" alt="Imagen3">
                </div>
            </div>
            </div>
        </div>    
        </div>
 
    
    </section>


                <?php 
                 include 'includes/Pie.php';
                ?>

    </div>
         
        
            <script>
                $(document).ready(function(){
                $('.myCarousel').carousel()
                    });
            </script>



                <?php 
                 include 'includes/Pie2.php';
                ?>
    </body>
</html>
