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
                        <div class="col-md-8 col-lg-4"> 

                        <img src="img/bailarina.jpg" alt="foto bailarina">

                            <hr> 
                                 
                        </div> 
                        
                        <div class="col-md-4 col-lg-8"> 
                    
                            <?php 
                            include 'includes/Principal.php';
                            ?>
                        </div> 
                    </div> 
                </section> 
                <hr>

               
                <?php 
                 include 'includes/Pie.php';
                ?>

            </div>


    
                <?php 
                 include 'includes/Pie2.php';
                ?>
    </body>
</html>