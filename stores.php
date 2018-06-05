<?php
   include(dirname(__FILE__) . "/admin/requestsAdmin.php");
?>

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
  <link href="css/full-slider.css" rel="stylesheet">
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
    <!-- Top bar-->
    <div class="top-bar">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 d-md-block d-none">
            <p><a href="#">Sucursales</a></p>
            <!-- stores.html -->
          </div>
          <div class="col-md-6">
            <div class="d-flex justify-content-md-end justify-content-between">
              <ul class="list-inline contact-info d-block d-md-none">
                <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
              </ul>
              <div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Iniciar Sesión</span></a>
                <a href="customer-register.html" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Registrarse</span></a>
              </div>
              <ul class="social-custom list-inline">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top bar end-->
    <!-- Login Modal-->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="login-modalLabel" class="modal-title">Login de Cliente</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form action="customer-orders.html" method="post">
              <div class="form-group">
                <input id="email_modal" type="text" placeholder="email" class="form-control">
              </div>
              <div class="form-group">
                <input id="password_modal" type="password" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Iniciar Sesión</button>
              </p>
            </form>
            <p class="text-center text-muted">No te registraste aún?</p>
            <p class="text-center text-muted"><a href="customer-register.html"><strong>Registrate ahora</strong></a>! Es facil y lo podes hacer en 1 minuto!
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Login modal end-->
    <!-- Navbar Start-->
    <header class="nav-holder make-sticky">
      <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
        <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/logo.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
          <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
          <div id="navigation" class="navbar-collapse collapse">
            <ul class="nav navbar-nav ml-auto">
              <!-- <li class="nav-item dropdown active"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Home <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="index.html" class="nav-link">Option 1: Default Page</a></li>
                    <li class="dropdown-item"><a href="index2.html" class="nav-link">Option 2: Application</a></li>
                    <li class="dropdown-item"><a href="index3.html" class="nav-link">Option 3: Startup</a></li>
                    <li class="dropdown-item"><a href="index4.html" class="nav-link">Option 4: Agency</a></li>
                    <li class="dropdown-item"><a href="index5.html" class="nav-link">Option 5: Portfolio</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="img/template-easy-customize.png" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Shortcodes</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="template-accordions.html" class="nav-link">Accordions</a></li>
                            <li class="nav-item"><a href="template-alerts.html" class="nav-link">Alerts</a></li>
                            <li class="nav-item"><a href="template-buttons.html" class="nav-link">Buttons</a></li>
                            <li class="nav-item"><a href="template-content-boxes.html" class="nav-link">Content boxes</a></li>
                            <li class="nav-item"><a href="template-blocks.html" class="nav-link">Horizontal blocks</a></li>
                            <li class="nav-item"><a href="template-pagination.html" class="nav-link">Pagination</a></li>
                            <li class="nav-item"><a href="template-tabs.html" class="nav-link">Tabs</a></li>
                            <li class="nav-item"><a href="template-typography.html" class="nav-link">Typography</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Header variations</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="template-header-default.html" class="nav-link">Default sticky header</a></li>
                            <li class="nav-item"><a href="template-header-nosticky.html" class="nav-link">No sticky header</a></li>
                            <li class="nav-item"><a href="template-header-light.html" class="nav-link">Light header</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li> 
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Portfolio <b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-lg-6"><img src="img/template-homepage.png" alt="" class="img-fluid d-none d-lg-block"></div>
                      <div class="col-lg-3 col-md-6">
                        <h5>Portfolio</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                          <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                          <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3 col-md-6">
                        <h5>About</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
                          <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                          <li class="nav-item"><a href="team-member.html" class="nav-link">Team member</a></li>
                          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                        </ul>
                        <h5>Marketing</h5>
                        <ul class="list-unstyled">
                          <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>-->
              <li class="nav-item"><a href="shop-category-left.html" class="nav-link">Productos</a></li>
              <!-- ========== FULL WIDTH MEGAMENU ==================-->
              <!-- <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle">All Pages <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-md-6 col-lg-3">
                          <h5>Home</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="index.html" class="nav-link">Option 1: Default Page</a></li>
                            <li class="nav-item"><a href="index2.html" class="nav-link">Option 2: Application</a></li>
                            <li class="nav-item"><a href="index3.html" class="nav-link">Option 3: Startup</a></li>
                            <li class="nav-item"><a href="index4.html" class="nav-link">Option 4: Agency</a></li>
                            <li class="nav-item"><a href="index5.html" class="nav-link">Option 5: Portfolio</a></li>
                          </ul>
                          <h5>About</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
                            <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                            <li class="nav-item"><a href="team-member.html" class="nav-link">Team member</a></li>
                            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                          </ul>
                          <h5>Marketing</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Portfolio</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                            <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                          </ul>
                          <h5>User pages</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="customer-register.html" class="nav-link">Register / login</a></li>
                            <li class="nav-item"><a href="customer-orders.html" class="nav-link">Orders history</a></li>
                            <li class="nav-item"><a href="customer-order.html" class="nav-link">Order history detail</a></li>
                            <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Wishlist</a></li>
                            <li class="nav-item"><a href="customer-account.html" class="nav-link">Customer account / change password</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Shop</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="shop-category.html" class="nav-link">Category - sidebar right</a></li>
                            <li class="nav-item"><a href="shop-category-left.html" class="nav-link">Category - sidebar left</a></li>
                            <li class="nav-item"><a href="shop-category-full.html" class="nav-link">Category - full width</a></li>
                            <li class="nav-item"><a href="shop-detail.html" class="nav-link">Product detail</a></li>
                          </ul>
                          <h5>Shop - order process</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="shop-basket.html" class="nav-link">Shopping cart</a></li>
                            <li class="nav-item"><a href="shop-checkout1.html" class="nav-link">Checkout - step 1</a></li>
                            <li class="nav-item"><a href="shop-checkout2.html" class="nav-link">Checkout - step 2</a></li>
                            <li class="nav-item"><a href="shop-checkout3.html" class="nav-link">Checkout - step 3</a></li>
                            <li class="nav-item"><a href="shop-checkout4.html" class="nav-link">Checkout - step 4</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Contact</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                            <li class="nav-item"><a href="contact2.html" class="nav-link">Contact - version 2</a></li>
                            <li class="nav-item"><a href="contact3.html" class="nav-link">Contact - version 3</a></li>
                          </ul>
                          <h5>Pages</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="text.html" class="nav-link">Text page</a></li>
                            <li class="nav-item"><a href="text-left.html" class="nav-link">Text page - left sidebar</a></li>
                            <li class="nav-item"><a href="text-full.html" class="nav-link">Text page - full width</a></li>
                            <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                            <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                          </ul>
                          <h5>Blog</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="blog.html" class="nav-link">Blog listing big</a></li>
                            <li class="nav-item"><a href="blog-medium.html" class="nav-link">Blog listing medium</a></li>
                            <li class="nav-item"><a href="blog-small.html" class="nav-link">Blog listing small</a></li>
                            <li class="nav-item"><a href="blog-post.html" class="nav-link">Blog Post</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li> -->
              <!-- ========== FULL WIDTH MEGAMENU END ==================-->
              <li class="nav-item"><a href="shop-basket.html" class="nav-link">Carrito</a></li>
              <!-- ========== Contact dropdown ==================-->
              <!-- <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Contact <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="contact.html" class="nav-link">Contact option 1</a></li>
                  <li class="dropdown-item"><a href="contact2.html" class="nav-link">Contact option 2</a></li>
                  <li class="dropdown-item"><a href="contact3.html" class="nav-link">Contact option 3</a></li>
                </ul>
              </li> -->
              <li class="nav-item"><a href="contact.html" class="nav-link">Contacto</a></li>
              <!-- ========== Contact dropdown end ==================-->
            </ul>
          </div>
          <div id="search" class="clearfix">
            <form role="search" class="navbar-form">
              <div class="input-group">
                <input type="text" placeholder="Buscar" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
    <!-- Navbar End-->

    <section class="bar background-white">
      <div class="container text-center">
        <div class="title-category heading text-center">
          <h2>Sucursales</h2>
        </div>
        <div class="row">
        <?php
            $stores = storeListar();
            foreach ($stores as $store)
            {
                $address = new Address();
                $address->findAddressById($store["idAddress"]);
                $location = new Location();
                $location->findLocationById($address->idLocation);
        ?>
            <a href="mailto:<?php echo $store["email"]; ?>">
            <div class="col-lg-12 col-md-6">
                <div class="box-stores box-simple">
                <i class="fa fa-newspaper-o fa-6" style="color: #fff;"></i>
            

                <h4><?php echo $store["name"]; ?></h4>
                <h5><strong>Localidad: </strong><?php echo $location->name; ?></h5>
                <h5><strong>Direccion: </strong><?php echo $address->dir; ?></h5>
                <h5><strong>CP: </strong><?php echo $address->postalCode; ?></h5>
                <h5><strong>Disponibilidad: </strong><?php echo $store["available"]; ?></h5>
                <h5><strong>Telefono: </strong><?php echo $store["telephone"]; ?></h5>
                <h5><strong>Email: </strong><?php echo $store["email"]; ?></h5>
                

                </div>
            </div>
            </a>
          <?php
            }
        ?>
        </div>
      </div>
    </section>
    <!-- Carousel Start-->
    <!--
    <section class="bar background-pentagon no-mb text-md-center">
      <div class="container">
        <div class="heading text-center">
          <h2>Testimonials</h2>
        </div>
        <p class="lead">We have worked with many clients and we always like to hear they come out from the cooperation happy and satisfied.
          Have a look what our clients said about us.</p>
        <ul class="owl-carousel testimonials list-unstyled equal-height">
          <li class="item">
            <div class="testimonial d-flex flex-wrap">
              <div class="text">
                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a
                  horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown
                  belly, slightly domed and divided by arches into stiff sections.</p>
              </div>
              <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="testimonial-info d-flex">
                  <div class="title">
                    <h5>John McIntyre</h5>
                    <p>CEO, TransTech</p>
                  </div>
                  <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial d-flex flex-wrap">
              <div class="text">
                <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully
                  thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to
                  me? " he thought. It wasn't a dream.</p>
              </div>
              <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="testimonial-info d-flex">
                  <div class="title">
                    <h5>John McIntyre</h5>
                    <p>CEO, TransTech</p>
                  </div>
                  <div class="avatar"><img alt="" src="img/person-2.jpg" class="img-fluid"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial d-flex flex-wrap">
              <div class="text">
                <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
                <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above
                  it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded
                  frame.
                </p>
              </div>
              <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="testimonial-info d-flex">
                  <div class="title">
                    <h5>John McIntyre</h5>
                    <p>CEO, TransTech</p>
                  </div>
                  <div class="avatar"><img alt="" src="img/person-3.png" class="img-fluid"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial d-flex flex-wrap">
              <div class="text">
                <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered
                  the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.
                  Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
              </div>
              <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="testimonial-info d-flex">
                  <div class="title">
                    <h5>John McIntyre</h5>
                    <p>CEO, TransTech</p>
                  </div>
                  <div class="avatar"><img alt="" src="img/person-4.jpg" class="img-fluid"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial d-flex flex-wrap">
              <div class="text">
                <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered
                  the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.
                  Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look
                  out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel
                  quite sad.</p>
              </div>
              <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="testimonial-info d-flex">
                  <div class="title">
                    <h5>John McIntyre</h5>
                    <p>CEO, TransTech</p>
                  </div>
                  <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
	-->
   
    <!--
    <section class="bg-white bar">
      <div class="container">
        <div class="heading text-center">
          <h2>From the blog</h2>
        </div>
        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam,
          feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
          mi vitae est. Mauris placerat eleifend leo. <a href="blog.html">Check our blog</a></p>
        <div class="row">
          <div class="col-lg-3">
            <div class="home-blog-post">
              <div class="image"><img src="img/portfolio-4.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
              </div>
              <div class="text">
                <h4><a href="#">Fashion Now </a></h4>
                <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life
                  us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="home-blog-post">
              <div class="image"><img src="img/portfolio-3.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
              </div>
              <div class="text">
                <h4><a href="#">What to do</a></h4>
                <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life
                  us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="home-blog-post">
              <div class="image"><img src="img/portfolio-5.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
              </div>
              <div class="text">
                <h4><a href="#">5 ways to look awesome</a></h4>
                <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life
                  us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="home-blog-post">
              <div class="image"><img src="img/portfolio-6.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
              </div>
              <div class="text">
                <h4><a href="#">Fashion Now </a></h4>
                <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life
                  us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	-->
    <!--
    <section class="bar bg-gray">
      <div class="container">
        <div class="heading text-center">
          <h2>Our Clients</h2>
        </div>
        <ul class="list-unstyled owl-carousel customers no-mb">
          <li class="item"><img src="img/customer-1.png" alt="" class="img-fluid"></li>
          <li class="item"><img src="img/customer-2.png" alt="" class="img-fluid"></li>
          <li class="item"><img src="img/customer-3.png" alt="" class="img-fluid"></li>
          <li class="item"><img src="img/customer-4.png" alt="" class="img-fluid"></li>
          <li class="item"><img src="img/customer-5.png" alt="" class="img-fluid"></li>
          <li class="item"><img src="img/customer-6.png" alt="" class="img-fluid"></li>
        </ul>
      </div>
    </section>
	-->
    <!-- GET IT-->
    <!--
    <div class="get-it">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 text-center p-3">
            <h3>Do you want cool website like this one?</h3>
          </div>
          <div class="col-lg-4 text-center p-3"> <a href="#" class="btn btn-template-outlined-white">Buy this template now</a></div>
        </div>
      </div>
    </div>
	-->
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