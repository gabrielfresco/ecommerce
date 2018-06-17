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

    <div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
      <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Contacto</h1>
          </div>
          <div class="col-md-5">
            <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Contacto</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div id="contact" class="container">
        <section class="bar">
          <div class="row">
            <div class="col-md-12">
              <div class="heading">
                <h2>Estamos para ayudarte</h2>
              </div>
              <p class="lead">Necesitas ayuda con tus entregas? Has tenido algún tipo de problema con nuestros productos? Puedes contactarte con nosotros
                en el momento que quieras y por múltiples plataformas. Tenemos soluciones para usted. Estamos
                a su disposición. Contacte con la sucursal más cercana.</p>
              <p class="text-sm">Por favor contáctanos, nuestro servicio al consumidor funciona 24/7.</p>
            </div>
          </div>
        </section>
        <section>
          <div class="row text-center">
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-map-marker"></i></div>
                <h3 class="h4">Ubicación</h3>
                <p>Mitre 777<br> Avellaneda<br> Buenos Aires, <strong>Argentina</strong></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-phone"></i></div>
                <h3 class="h4">Call center</h3>
                <p>Número disponible desde cualquier parte de Argentina. En caso de no poder comunicarse, le recomendamos que nos contacte de manera electrónica.</p>
                <p><strong>+33 555 444 333</strong></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-envelope"></i></div>
                <h3 class="h4">Soporte Electrónico</h3>
                <p>Sientase libre de enviarnos un email o usar nuestro sistema de tickets electrónicos.</p>
                <ul class="list-unstyled text-sm">
                  <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
               
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section class="bar pt-0">
          <div class="row">
            <div class="col-md-12">
              <div class="heading text-center">
                <h2>Contacto - Formulario</h2>
              </div>
            </div>
            <div class="col-md-8 mx-auto">
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="firstname">Nombre</label>
                      <input id="firstname" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="lastname">Apellido</label>
                      <input id="lastname" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="subject">Asunto</label>
                      <input id="subject" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="message">Mensaje</label>
                      <textarea id="message" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i> Envíenos su mensaje</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
      <!--<div id="map"></div>-->
    </div>
    <!-- GET IT-->
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
  <script src="js/gmaps.js"></script>
  <script src="js/gmaps.init.js"></script>
  <script src="js/front.js"></script>
</body>

</html>