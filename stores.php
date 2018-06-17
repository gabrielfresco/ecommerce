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
    <?php include "header.php";?>
    <?php include "navbar.php";?>

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