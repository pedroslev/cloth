<?php 

include './Server/database.php';

session_start();

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="HAZEinc.">
    <link rel="icon" href="img/favicon.png">

    <title>CLOTH</title>

    <!-- Bootstrap core CSS -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/Style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="row fixed-bottom mb-3 mr-1">
        <div class="col">
            <div class="float-right">
                <div class="float-right">
                    <button type="button" class="btn btn-cart" data-toggle="modal" data-target="#cart"><img src="img/Icons/carrito.svg" alt="carrito"><span class="total-count m-2"></span></button>
                </div>

                <div class="d-none">
                    <button class="clear-cart btn btn-danger">Clear Cart</button></div>
            </div>
        </div>
    </div>


    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-orange shadow">
            <a class="navbar-brand" href="index.php">CLOTH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Ofertas">OFERTAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Categorias">CATEGORIAS</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Busca en la tienda" aria-label="Search">
                    <button class="btn btn-search my-2 my-sm-0" type="submit"><img src="img/Icons/lupa.svg" alt=""></button>
                </form>
            </div>
        </nav>
    </header>

    <main role="main">

        <!-- Modal -->
        <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Carrito</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="show-cart table">

                        </table>
                        <div>Precio total: $<span class="total-cart"></span></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn btn-cart"> <a href="checkouts.html">Ordenar</a></button>
                    </div>
                </div>
            </div>
        </div>



        <!-- CAROUSEL-->
        <div id="myCarousel" class="carousel slide shadow" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item bk-cloth active">
                    <div class="container">
                        <div class="carousel-caption text-center text-dark">
                            <p>ROPA PARA JOVENES.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item bk-slide">
                   <figure>
                    <img class="second-slide" src="img/Prueba/Remeras.jpg" alt="Second slide">
                    </figure>
                       <div class="container">
                        <div class="carousel-caption center-text">
                            <h1>Ofertas</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-cart" href="#" role="button">Ver Más</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item bk-slide">
                   <figure>
                    <img class="third-slide" src="img/Prueba/Pantalones.jpg" alt="Second slide">
                    </figure>
                    <div class="container">
                        <div class="carousel-caption center-text">
                            <h1>Remeras</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                            <p><a class="btn btn-cart" href="#" role="button">Ver Más</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev shadow" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only shadow">Next</span>
            </a>
        </div>
        <!-- Fin Carousel -->


       
               <div id="Ofertas" class="container marketing">

            <!-- OFERTAS -->
            <div class="row justify-content-center">
<h1 class="text-dark"> <span class="btn-search">O</span>N <span class="sale">SALE</span></h1>
           
            </div>
            <hr class="featurette-divider">
            <?php 
                //MOSTRADOR DE PRODUCTOS EN OFERTA            
                $sql ="SELECT * FROM ".$DBN."_Productos WHERE Oferta!='0' ";
                $result= $conn->query($sql);
                if ($result->num_rows > 0) {
                // Contador clase
                $cont=2;
                $clase=null;
                while($row = $result->fetch_assoc()) { 
                $aux=(intval($cont/2))*2;// hace al valor entero
                 if ($aux=$cont) {$clase=1;}else{$clase=2;};// Compara si es positivo o negativo
            ?>
            <div class="row featurette descrip-<?php echo $clase; ?>">
                <div class="col-md-6">
                    <div class="card   shadow ">
                        <img src="<?php echo $row["Foto"]; ?>" class="img-fluid  " alt="...">
                        <div class="card-body d-md-none">
                            <h5 class="card-title"><?php echo $row["Nombre"]; ?></h5>
                            <h5>$<?php echo $row["PrecioML"]; ?></h5>
                            <p class="card-text"><?php echo $row["Descripcion"]; ?><a href="item.php?ID=<?php echo $row["ID"]; ?>" class="btn-see-more">Ver Más</a></p>

                            <a href="#" data-name="<?php echo $row["Nombre"]; ?>" data-id="<?php echo $row["ID"]; ?>" data-price="<?php echo $row["PrecioML"]; ?>" class="add-to-cart btn line">Agregar al Carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="display-n">
                        <h5 class="card-title"><?php echo $row["Nombre"]; ?></h5>
                        <h5>$<?php echo $row["PrecioML"]; ?></h5>
                        <p class="card-text"><?php echo $row["Descripcion"]; ?><a href="item.php?ID=<?php echo $row["ID"]; ?>" class="btn-see-more">Ver Más</a></p>

                        <a href="#" data-name="<?php echo $row["Nombre"]; ?>" data-id="<?php echo $row["ID"]; ?>" data-price="<?php echo $row["PrecioML"]; ?>" class="add-to-cart btn line">Agregar al Carrito</a>

                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

            <?php  $cont++; }  } else { //deberia mostrarlo mas lindo ?>

            NO HAY OFERTAS
         
            <?php }  ?> 
  



           <!-- CATEGORIAS -->
           <div id="Categorias" class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle shadow" src="img/Icons/pantalones.svg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Jeans</h2>
                    <p><a class="btn btn-secondary" href="categoria.php?Categoria=Pantalones" role="button">Ver Más &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle shadow" src="img/Icons/t-shirt.svg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Remeras</h2>
                    <p><a class="btn btn-secondary" href="categoria.php?Categoria=Remeras" role="button">Ver Más &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle shadow" src="img/Icons/sweater.svg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Camisas</h2>
                    <p><a class="btn btn-secondary" href="categoria.php?Categoria=Camisas" role="button">Ver Más &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div>
             <div id="Categorias" class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle shadow" src="img/Icons/zapatillas.svg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Calzado</h2>
                    <p><a class="btn btn-secondary" href="categoria.php?Categoria=Calzado" role="button">Ver Más &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle shadow" src="img/Icons/campera.svg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Abrigo</h2>
                    <p><a class="btn btn-secondary" href="categoria.php?Categoria=Abrigo" role="button">Ver Más &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

        </div><!-- /.container -->


        <hr class="featurette-divider">

        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p class="float-left">&copy; 2018-2021 CLOTH indumentaria &middot;</p>
            <p> Powered & Designed by<a href="https://hazear.com/">HAZEinc.</a></p>
        </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
</body></html>
