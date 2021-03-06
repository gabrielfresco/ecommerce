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
            <h1 class="h2">Lavarropas Samsung - 9kg</h1>
          </div>
          <div class="col-md-5">
            <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="shop-category.html">Hogar</a></li>
              <li class="breadcrumb-item"><a href="shop-category.html">Lavarropas</a></li>
              <li class="breadcrumb-item active">Lavarropas Samsung - 9kg</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row bar">
          <!-- LEFT COLUMN _________________________________________________________-->
          <div class="col-lg-9">
            <p class="lead">Descripcion del producto</p>
            <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scollear para ver mas informacion del producto</a></p>
            <div id="productMain" class="row">
              <div class="col-sm-6">
                <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                  <div> <img src="img/product1.jpg" alt="" class="img-fluid"></div>
                  <div> <img src="img/product1.jpg" alt="" class="img-fluid"></div>
                  <div> <img src="img/product1.jpg" alt="" class="img-fluid"></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="box">
                  <form>
                    <!--
                    <div class="sizes">
                      <h3>Tamanos Disponibles</h3>
                      
                      <select class="bs-select">
                          <option value="small">6KG</option>
                          <option value="medium">7KG</option>
                          <option value="large">8KG</option>
                          <option value="x-large">9KG</option>
                        </select>
                     
                    </div>
                     -->
                    <p class="price">$124.00</p>
                    <p class="text-center">
                      <button type="submit" class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i> Agregar al carrito</button>
                      <button type="submit" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="btn btn-default"><i class="fa fa-heart-o"></i></button>
                    </p>
                  </form>
                </div>
                <div data-slider-id="1" class="owl-thumbs">
                  <button class="owl-thumb-item"><img src="img/product1.jpg" alt="" class="img-fluid"></button>
                  <button class="owl-thumb-item"><img src="img/product1.jpg" alt="" class="img-fluid"></button>
                  <button class="owl-thumb-item"><img src="img/product1.jpg" alt="" class="img-fluid"></button>
                </div>
              </div>
            </div>
            <div id="details" class="box mb-4 mt-4">
              <p></p>
              <h4>Detalles del producto</h4>
              <p>Tiene 7 funciones, con eco lavado..</p>
              <h4>Materiales</h4>
              <ul>
                <li>Acero inoxidable</li>
                <li>Motor 3.0</li>
              </ul>
              <h4>Tamano</h4>
              <ul>
                <li>60x60</li>
              </ul>
             <!-- <blockquote class="blockquote">
                <p class="mb-0"><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
              </blockquote>
            -->
            </div>
            <div id="product-social" class="box social text-center mb-5 mt-5">
              <h4 class="heading-light">Compartir</h4>
              <ul class="social list-inline">
                <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></li>
              </ul>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="box text-uppercase mt-0 mb-small">
                  <h3>Tal vez te guste alguno de estos productos</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="product">
                  <div class="image"><a href="#"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                  <div class="text">
                    <h3 class="h5"><a href="shop-detail.html">Lavarropas</a></h3>
                    <p class="price">$143</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="product">
                  <div class="image"><a href="#"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                  <div class="text">
                    <h3 class="h5"><a href="shop-detail.html">Lavarropas</a></h3>
                    <p class="price">$143</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="product">
                  <div class="image"><a href="#"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                  <div class="text">
                    <h3 class="h5"><a href="shop-detail.html">Lavarropas</a></h3>
                    <p class="price">$143</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="box text-uppercase mt-0 mb-small">
                  <h3>Productos vistos recientemente.</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="product">
                  <div class="image"><a href="#"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                  <div class="text">
                    <h3 class="h5"><a href="shop-detail.html">Lavarropas</a></h3>
                    <p class="price">$143</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="product">
                  <div class="image"><a href="#"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                  <div class="text">
                    <h3 class="h5"><a href="shop-detail.html">Lavarropas</a></h3>
                    <p class="price">$143</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="product">
                  <div class="image"><a href="#"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                  <div class="text">
                    <h3 class="h5"><a href="shop-detail.html">Lavarropas</a></h3>
                    <p class="price">$143</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <!-- MENUS AND FILTERS-->
            <div class="panel panel-default sidebar-menu">
              <div class="panel-heading">
                <h3 class="h4 panel-title">Categorias</h3>
              </div>
              <div class="panel-body">
                <ul class="nav nav-pills flex-column text-sm category-menu">
                  <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Hogar </span><span class="badge badge-secondary">42</span></a>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="#" class="nav-link">Heladera</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Microondas</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Lavarropas</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Television</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Aire libre  </span><span class="badge badge-light">123</span></a>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="#" class="nav-link">Sillas</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Resposeras</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Mesa</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Camping</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Tecnologia  </span><span class="badge badge-secondary">11</span></a>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="#" class="nav-link">Celulares</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Drones</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Monitores de tv</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Perifericos</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="panel panel-default sidebar-menu">
              <div class="panel-heading d-flex align-items-center justify-content-between">
                <h3 class="h4 panel-title">Marcas</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Limpiar</span></a>
              </div>
              <div class="panel-body">
                  <form>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> LG  (10)
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Samsung  (12)
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Phillips  (15)
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Sony  (14)
                          </label>
                        </div>
                      </div>
                      <button class="btn btn-sm btn-template-outlined"><i class="fa fa-pencil"></i> Aplicar</button>
                    </form>
              </div>
            </div>
            <!--
            <div class="panel panel-default sidebar-menu">
              <div class="panel-heading d-flex align-items-center justify-content-between">
                <h3 class="h4 panel-titlen">Colours</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Clear</span></a>
              </div>
              <div class="panel-body">
                <form>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                          <input type="checkbox"><span class="colour white"></span> White (14)
                        </label>
                    </div>
                    <div class="checkbox">
                      <label>
                          <input type="checkbox"><span class="colour blue"></span> Blue (10)
                        </label>
                    </div>
                    <div class="checkbox">
                      <label>
                          <input type="checkbox"><span class="colour green"></span>  Green (20)
                        </label>
                    </div>
                    <div class="checkbox">
                      <label>
                          <input type="checkbox"><span class="colour yellow"></span>  Yellow (13)
                        </label>
                    </div>
                    <div class="checkbox">
                      <label>
                          <input type="checkbox"><span class="colour red"></span>  Red (10)
                        </label>
                    </div>
                  </div>
                  <button class="btn btn-sm btn-template-outlined"><i class="fa fa-pencil"></i> Apply</button>
                </form>
              </div>
            </div>
            
            <div class="banner"><a href="shop-category.html"><img src="img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
          -->
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