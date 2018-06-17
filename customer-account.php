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
            <h1 class="h2">My Account</h1>
          </div>
          <div class="col-md-5">
            <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">My Account</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row bar">
          <div id="customer-account" class="col-lg-9 clearfix">
            <p class="lead">Modifica tus datos personales o tu password desde aqui.</p>
            <!--<p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>-->
            <div class="box mt-5">
              <div class="heading">
                <h3 class="text-uppercase">Cambiar password</h3>
              </div>
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password_old">Antigua password</label>
                      <input id="password_old" type="password" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password_1">Nueva password</label>
                      <input id="password_1" type="password" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password_2">Reescribir password</label>
                      <input id="password_2" type="password" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-template-outlined"><i class="fa fa-save"></i> Guardar nueva password</button>
                </div>
              </form>
            </div>
            <div class="bo3">
              <div class="heading">
                <h3 class="text-uppercase">Detalles personales</h3>
              </div>
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstname">Nombre</label>
                      <input id="firstname" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastname">Apellido</label>
                      <input id="lastname" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="company">Compania</label>
                      <input id="company" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="street">Direccion</label>
                      <input id="street" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="city">Compania</label>
                      <input id="city" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="zip">CP</label>
                      <input id="zip" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="state">Estado</label>
                      <select id="state" class="form-control"></select>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                      <label for="country">Pais</label>
                      <select id="country" class="form-control"></select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Telefono</label>
                      <input id="phone" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email_account">Email</label>
                      <input id="email_account" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-save"></i> Guardar Cambios</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-3 mt-4 mt-lg-0">
            <!-- CUSTOMER MENU -->
            <div class="panel panel-default sidebar-menu">
              <div class="panel-heading">
                <h3 class="h4 panel-title">Secciones</h3>
              </div>
              <div class="panel-body">
                <ul class="nav nav-pills flex-column text-sm">
                  <li class="nav-item"><a href="customer-orders.html" class="nav-link"><i class="fa fa-list"></i> Mis ordenes</a></li>
                  <li class="nav-item"><a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> Mi Wishlist</a></li>
                  <li class="nav-item"><a href="customer-account.html" class="nav-link active"><i class="fa fa-user"></i> Mi cuenta</a></li>
                  <li class="nav-item"><a href="#" onclick="return cerrarSesion();" class="nav-link"><i class="fa fa-sign-out"></i> Cerrar sesion</a></li>
                </ul>
              </div>
            </div>
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