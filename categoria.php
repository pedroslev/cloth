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
            <a class="navbar-brand" href="#">CLOTH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#Ofertas">OFERTAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#Categorias">CATEGORIAS</a>
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
                        <button type="button" class="btn btn btn-cart">Ordenar</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- OFERTAS -->

        <div class="container marketing">

            
            <div class="row justify-content-center m-5">
<h1 class="text-dark">Categorías</h1>
           
            </div>
            <hr class="featurette-divider">
            <div id="categoria" class="row featurette descrip-1">
                <div class="col-md-6">
                    <div class="card   shadow ">
                        <img src="img/Prueba/Pantalones.jpg" class="img-fluid  " alt="...">
                        <div class="card-body d-md-none">
                            <h5 class="card-title">Jeans Ultra</h5>
                            <h5>1200$</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. <a href="item.html" class="btn-see-more">Ver Más</a></p>

                            <a href="#" data-name="Jeans" data-price="80" class="add-to-cart btn line">Agregar al Carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="display-n">
                        <h5 class="card-title">Jeans Ultra</h5>
                        <h5>1200$</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. <a href="item.html" class="btn-see-more">Ver Más</a></p>

                        <a href="#" data-name="Jeans" data-price="80" class="add-to-cart btn line">Agregar al Carrito</a>

                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette descrip-2">
                <div class="col-md-6">
                    <div class="card   shadow ">
                        <img src="img/Prueba/Jeans1.jpg" class="img-fluid  " alt="...">
                        <div class="card-body gradient d-md-none">
                            <h5 class="card-title">Jean Slim Fit</h5>
                            <h5>1200$</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. <a href="item.html" class="btn-see-more">Ver Más</a></p>

                            <a href="#" data-name="Jeans" data-price="80" class="add-to-cart btn line">Agregar al Carrito</a>

                        </div>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="display-n">
                        <h5 class="card-title">Jean Slim Fit</h5>
                        <h5>1200$</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. <a href="item.html" class="btn-see-more">Ver Más</a></p>

                        <a href="#" data-name="Jeans" data-price="80" class="add-to-cart btn line">Agregar al Carrito</a>

                    </div>
                </div>
            </div>



            <hr class="featurette-divider">

            <div class="row featurette descrip-1">
                <div class="col-md-6">
                    <div class="card   shadow ">
                        <img src="img/Prueba/Jeans2.jpg" class="img-fluid  " alt="...">
                        <div class="card-body d-md-none">
                            <h5 class="card-title">Jean D+</h5>
                            <h5>1200$</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. <a href="item.html" class="btn-see-more">Ver Más</a></p>

                            <a href="#" data-name="Jeans" data-price="80" class="add-to-cart btn line">Agregar al Carrito</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="display-n">
                        <h5 class="card-title">Jean D+</h5>
                        <h5>1200$</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. <a href="item.html" class="btn-see-more">Ver Más</a></p>

                        <a href="#" data-name="Jeans" data-price="80" class="add-to-cart btn line">Agregar al Carrito</a>

                    </div>
                </div>







            </div>
            <!-- FIN OFERTAS -->

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
</body></html>
