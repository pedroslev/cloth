<?php 

if (empty($_GET['ID']))
{
header("Location: index.php");
    exit();
}
else{
$IDProducto=$_GET['ID'];

            
include './Server/database.php';

session_start();

    //MOSTRADOR DE PRODUCTOS EN OFERTA            
    $sql ="SELECT * FROM ".$DBN."_Productos WHERE ID=".$IDProducto." ";
    $result= $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
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
            <a class="navbar-brand" href="#">CLOTH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#Ofertas">OFERTAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#Categorias">CATEGORIAS</a>
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

<div class="container marketing">
        <div class="row">
        <div class="col-md-12">
         <h1><?php echo $row["Nombre"]; ?></h1>
        <h6 class="mb-3 mt-4">Colores</h6>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Flame Red</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Indigo Blue</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
  <label class="form-check-label" for="inlineRadio3">Just Jean</label>
</div>
        </div>
        
        <div class="col-md-12 mt-4">
         <h6 class="mb-3">Talles</h6>

       
	<div class="switch-field">
		<input type="radio" id="radio-three" name="switch-two" value="yes" checked/>
		<label for="radio-three">S</label>
		<input type="radio" id="radio-four" name="switch-two" value="maybe" />
		<label for="radio-four">M</label>
		<input type="radio" id="radio-five" name="switch-two" value="no" />
		<label for="radio-five">L</label>
	</div>

       
        </div>
        </div>
        
        <hr class="divider">
        
         <!-- Informacion De Envio -->
        <p>
            Informacion De Envio
            <a class="btn btn-light ml-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            +
            </a>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
        </div>
        <!-- Fin Informacion De Envio -->
<hr class="divider">
           <!-- Metodos de Pago -->
        <p>
            Metodos de Pago
            <a class="btn btn-light ml-3" data-toggle="collapse" href="#PAGO" role="button" aria-expanded="false" aria-controls="PAGO">
            +
            </a>
        </p>
        <div class="collapse" id="PAGO">
            <div class="card card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
        </div>
        <!-- Fin Metodos de Pago -->
        
         <hr class="divider">
             <a href="#" data-name="Jeans" data-price="80" class="add-to-cart btn line">Agregar al Carrito</a>
             <hr class="divider">
        </div>
        
       

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
<?php   } } }; ?>