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
            <h1 class="h2">Carrito de Compras</h1>
          </div>
          <div class="col-md-5">
            <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Carrito</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row bar">
          <div class="col-lg-12">
            <p class="text-muted lead">Cuentas con tres (2) productos en tu carrito.</p>
          </div>
          <div id="basket" class="col-lg-9">
            <div class="box mt-0 pb-0 no-horizontal-padding">
              <form method="post" action="shop-checkout1.html">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th colspan="2">Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Descuento</th>
                        <th colspan="2">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#"><img src="img/detailsquare.jpg" alt="Television" class="img-fluid"></a></td>
                        <td><a href="#">Tv Full HD - LG</a></td>
                        <td>
                          <input type="number" value="2" class="form-control">
                        </td>
                        <td>$123.00</td>
                        <td>$0.00</td>
                        <td>$246.00</td>
                        <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                      </tr>
                      <tr>
                        <td><a href="#"><img src="img/basketsquare.jpg" alt="Lavarropas" class="img-fluid"></a></td>
                        <td><a href="#">Lavarropas 6 funciones - Next</a></td>
                        <td>
                          <input type="number" value="1" class="form-control">
                        </td>
                        <td>$200.00</td>
                        <td>$0.00</td>
                        <td>$200.00</td>
                        <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="5">Total</th>
                        <th colspan="2">$446.00</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="box-footer d-flex justify-content-between align-items-center">
                  <div class="left-col"><a href="shop-category.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i> Seguir comprando</a></div>
                  <div class="right-col">
                    <button class="btn btn-secondary"><i class="fa fa-refresh"></i> Actualizar carrito</button>
                    <button type="submit" class="btn btn-template-outlined">Siguiente paso <i class="fa fa-chevron-right"></i></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="box text-uppercase mt-0 mb-2">
                  <h3>Productos que quizá te interesen</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="product">
                  <div class="image"><a href="shop-detail.html"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                  <div class="text">
                    <h3 class="h5"><a href="shop-detail.html">Lavarropas x234gf - Samsung</a></h3>
                    <p class="price">$143</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="product">
                  <div class="image"><a href="shop-detail.html"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                  <div class="text">
                    <h3 class="h5"><a href="shop-detail.html">Lavarropas 34xfds - LG</a></h3>
                    <p class="price">$143</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="product">
                  <div class="image"><a href="shop-detail.html"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                  <div class="text">
                    <h3 class="h5"><a href="shop-detail.html">Lavarropas 30kg - Samsung</a></h3>
                    <p class="price">$143</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div id="order-summary" class="box mt-0 mb-4 p-0">
              <div class="box-header mt-0">
                <h3>Resumen de Pedido</h3>
              </div>
              <p class="text-muted">Envío y costos adicionales se calculan basados en los valores ingresados.</p>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Subtotal</td>
                      <th>$446.00</th>
                    </tr>
                    <tr>
                      <td>Envío y Entrega</td>
                      <th>$10.00</th>
                    </tr>
                    <tr>
                      <td>Impuestos</td>
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
    <!--
    <div class="get-it">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 text-center p-3">
            <h3>Regístrate para obtener descuentos únicos !</h3>
          </div>
          <div class="col-lg-4 text-center p-3"> <a href="#" class="btn btn-template-outlined-white">Registrarse ahora</a></div>
        </div>
      </div>
    </div>
    -->
    <!-- FOOTER -->
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
      <!-- Javascript files-->
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
