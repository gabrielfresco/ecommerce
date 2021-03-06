<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>eCommerce</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- Google fonts - Roboto-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
  <!-- Bootstrap Select-->
  <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
  <!-- owl carousel-->
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon and apple touch icons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <div id="all">
    <?php include "header.php";?>
    <?php include "navbar.php";?>

    <div id="heading-breadcrumbs">
      <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Checkout - Detalle del pedido</h1>
          </div>
          <div class="col-md-5">
            <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Checkout - Detalle del pedido</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row">
          <div id="checkout" class="col-lg-9">
            <div class="box">
              <form method="post" action="shop-checkout4.html">
                <form method="post" action="shop-checkout4.html">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a href="shop-checkout1.html" class="nav-link"> <i class="fa fa-map-marker"></i><br>Direccion</a></li>
                    <li class="nav-item"><a href="shop-checkout2.html" class="nav-link"><i class="fa fa-truck"></i><br>Metodo de entrega</a></li>
                    <li class="nav-item"><a href="shop-checkout3.html" class="nav-link"><i class="fa fa-money"></i><br>Metodo de pago</a></li>
                    <li class="nav-item"><a href="shop-checkout4.html" class="nav-link active"><i class="fa fa-eye"></i><br>Detalle del pedido</a></li>
                  </ul>
                </form>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Producto</th>
                          <th>Cantidad</th>
                          <th>Precio por unidad</th>
                          <th>Descuento</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#"><img src="img/detailsquare.jpg" alt="Tv Full HD - LG"></a></td>
                          <td><a href="#">Tv Full HD - LG</a></td>
                          <td>2</td>
                          <td>$123.00</td>
                          <td>$0.00</td>
                          <td>$246.00</td>
                        </tr>
                        <tr>
                          <td><a href="#"><img src="img/basketsquare.jpg" alt="Lavarropas 6 funciones - Next"></a></td>
                          <td><a href="#">Lavarropas 6 funciones - Next</a></td>
                          <td>1</td>
                          <td>$200.00</td>
                          <td>$0.00</td>
                          <td>$200.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th>$446.00</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                  <div class="left-col"><a href="shop-checkout3.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Volver al metodo de pago</a></div>
                  <div class="right-col">
                    <button type="submit" class="btn btn-template-main">Finalizar la orden<i class="fa fa-chevron-right"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-3">
            <div id="order-summary" class="box mb-4 p-0">
              <div class="box-header mt-0">
                <h3></h3>
              </div>
              <p class="text-muted text-small">Envío y costos adicionales se calculan basados en los valores ingresados.</p>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Subtotal</td>
                      <th>$446.00</th>
                    </tr>
                    <tr>
                      <td>Envio y entrega</td>
                      <th>$10.00</th>
                    </tr>
                    <tr>
                      <td>Impuesto</td>
                      <th>$0.00</th>
                    </tr>
                    <tr class="total">
                      <td>Total</td>
                      <th>$456.00</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
              <div class="box-header mt-0">
                <h4>Código de Cupón</h4>
              </div>
              <p class="text-muted">Si tienes un cupón de descuento, por favor ingresalo.</p>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control"><span class="input-group-btn">
                      <button type="button" class="btn btn-template-main"><i class="fa fa-gift"></i></button></span>
                </div>
              </form>

          </div>
        </div>
      </div>
    </div>
     <!-- GET IT-->
    <!-- FOOTER -->
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h4 class="h6">Acerca de nosotros</h4>
            <p>Nos encargamos de entregar los mejores productos a la alcanze de la mano.</p>
            <hr>
            <h4 class="h6">Recibi las ultimas novedades</h4>
            <form>
              <div class="input-group">
                <input type="text" class="form-control">
                <div class="input-group-append">
                  <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
                </div>
              </div>
            </form>
            <hr class="d-block d-lg-none">
          </div>
    <!--	
          <div class="col-lg-3" >
            <h4 class="h6">Blog</h4>
            <ul class="list-unstyled footer-blog-list">
              <li class="d-flex align-items-center">
                <div class="image"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></div>
                <div class="text">
                  <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
                </div>
              </li>
            </ul>
            <hr class="d-block d-lg-none">
          </div>
    -->
    
          <div class="col-lg-3">
            <h4 class="h6">Contacto</h4>
            <p class="text-uppercase"><strong>Casa Central.</strong><br>Bartolome Mitre <br> 750 <br> Provincia de Buenos Aires <br><strong>Argentina - Avellaneda</strong></p>
            <a href="contact.html" class="btn btn-template-main">Pagina de contacto</a>
            <hr class="d-block d-lg-none">
          </div>
    <!--
          <div class="col-lg-3">
            <ul class="list-inline photo-stream">
              <li class="list-inline-item"><a href="#"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
              <li class="list-inline-item"><a href="#"><img src="img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
              <li class="list-inline-item"><a href="#"><img src="img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
              <li class="list-inline-item"><a href="#"><img src="img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
              <li class="list-inline-item"><a href="#"><img src="img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
              <li class="list-inline-item"><a href="#"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
            </ul>
          </div>
    -->
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 text-center-md">
              <p>&copy; 2018. e-commerce</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js">

  </script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js">

  </script>
  <script src="vendor/waypoints/lib/jquery.waypoints.min.js">

  </script>
  <script src="vendor/jquery.counterup/jquery.counterup.min.js">

  </script>
  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
  <script src="js/front.js"></script>
</body>

</html>
