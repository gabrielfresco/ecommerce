<?php
   include(dirname(__FILE__) . "/requestsAdmin.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Panel de Administrador - eCommerce</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">
      <!-- Bootstrap CSS-->
      <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome CSS-->
      <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
      <!-- Custom Font Icons CSS-->
      <link rel="stylesheet" href="css/font.css">
      <!-- Google fonts - Muli-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
      <!-- theme stylesheet-->
      <link rel="stylesheet" href="css/style.pink.css" id="theme-stylesheet">
      <!-- Custom stylesheet - for your changes-->
      <link rel="stylesheet" href="css/custom.css">
      <!-- Favicon-->
      <link rel="shortcut icon" href="img/favicon.ico">
      <!-- Tweaks for older IEs--><!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <body>
      <header class="header">
         <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flex align-items-center justify-content-between">
               <div class="navbar-header">
                  <a href="index.html" class="navbar-brand">
                     <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Panel</strong><strong>Admininistrador</strong></div>
                     <div class="brand-text brand-sm"><strong class="text-primary">A</strong><strong>D</strong><strong class="text-primary">M</strong></div>
                  </a>
                  <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
               </div>
               <ul class="right-menu list-inline no-margin-bottom">
                  <!--<li class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></li>-->
                  <li class="list-inline-item dropdown">
                     <a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
                     <ul aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
                        <li>
                           <a href="#" class="dropdown-item message d-flex align-items-center">
                              <div class="profile">
                                 <img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                                 <div class="status online"></div>
                              </div>
                              <div class="content">   <strong class="d-block">Notificacion 1</strong><span class="d-block">descripcion</span><small class="date d-block">9:30am</small></div>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="dropdown-item message d-flex align-items-center">
                              <div class="profile">
                                 <img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                                 <div class="status away"></div>
                              </div>
                              <div class="content">   <strong class="d-block">Notificacion 2</strong><span class="d-block">descripcion</span><small class="date d-block">7:40am</small></div>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="dropdown-item message d-flex align-items-center">
                              <div class="profile">
                                 <img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                                 <div class="status busy"></div>
                              </div>
                              <div class="content">   <strong class="d-block">Notificacion 3</strong><span class="d-block">descripcion</span><small class="date d-block">6:55am</small></div>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="dropdown-item message d-flex align-items-center">
                              <div class="profile">
                                 <img src="img/avatar-5.jpg" alt="..." class="img-fluid">
                                 <div class="status offline"></div>
                              </div>
                              <div class="content">   <strong class="d-block">Notificacion 4</strong><span class="d-block">descripcion</span><small class="date d-block">10:30pm</small></div>
                           </a>
                        </li>
                        <li><a href="#" class="dropdown-item text-center message"> <strong>Ver todas las notificaciones <i class="fa fa-angle-right"></i></strong></a></li>
                     </ul>
                  </li>
                  <li class="list-inline-item logout">                   <a id="logout" href="login.html" class="nav-link">Cerrar Sesion <i class="icon-logout"></i></a></li>
               </ul>
            </div>
         </nav>
      </header>
      <div class="d-flex align-items-stretch">
         <nav id="sidebar">
            <div class="sidebar-header d-flex align-items-center">
               <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
               <div class="title">
                  <h1 class="h5">Fernando Rodriguez</h1>
                  <p>Gerente</p>
               </div>
            </div>
            <span class="heading">MENU</span>
            <ul class="list-unstyled">
               <li><a href="index.php"><i class="icon-home"></i>Inicio</a></li>
               <li>
                  <a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i>Productos </a>
                  <ul id="dashvariants" class="collapse list-unstyled">
                     <li><a href="#">Cargar Productos</a></li>
                     <li><a href="#">Listar Productos</a></li>
                  </ul>
               </li>
               <li> <a href="users.php"> <i class="fa fa-user"></i>Usuarios</a></li>
               <li>  <a href="statistics.php"> <i class="fa fa-bar-chart"></i>Estadisticas</a></li>
               <li class="active"> <a href="#"> <i class="icon-padnote"></i>Sucursales</a></li>
               <li> <a href="login.php"> <i class="icon-writing-whiteboard"></i>Pedidos</a></li>
               <li> <a href="login.php"> <i class="fa fa-window-maximize"></i>Cupones y descuentos</a></li>
               <li>
                  <a href="#dashsite" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-university"></i>Sitio</a>
                  <ul id="dashsite" class="collapse list-unstyled">
                     <li><a href="#">Cargar/Ver Paises</a></li>
                     <li><a href="cities.php">Cargar/Ver Ciudades</a></li>
                     <li><a href="locations.php">Cargar/Ver Localidades</a></li>
                  </ul>
               </li>
            </ul>
         </nav>
         <div class="page-content">
            <div class="page-header">
               <div class="container-fluid">
                  <h2 class="h5 no-margin-bottom">Sitio</h2>
               </div>
            </div>
            <section class="no-padding-top no-padding-bottom">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col">
                        <div class="block">
                           <div class="title"><strong class="d-block">Nueva Sucursal</strong><span class="d-block"></span></div>
                           <div class="block-body">
                           <div class="form-group">
                                    <label class="form-control-label">Nombre de sucursal</label>
                                    <input type="text" placeholder="Nombre" id="nombre" class="form-control">
                                  </div>
                                  <div class="form-group">       
                                    <label class="form-control-label">Localidad</label>
                                    <select class="form-control" id="codigoLocation">
                                      <?php
                                          $localidades = locationListar();
                                          foreach ($localidades as $localidad)
                                          {
                                      ?>
                                      <option value="<?php echo $localidad["idLocation"];?>"><?php echo $localidad["name"]; ?></option>
                                          <?php } ?>
                                    </select>
                                  </div>
                                  <div class="form-group">       
                                    <label class="form-control-label">Direccion</label>
                                    <input type="text" placeholder="Direccion" id="address" class="form-control">
                                  </div>
                                  <div class="form-group">       
                                        <label class="form-control-label">Codigo Postal</label>
                                        <input type="text" placeholder="Codigo Postal" id="postalCode" class="form-control">
                                    </div>
                                      <div class="form-group">       
                                            <label class="form-control-label">Telefono</label>
                                            <input type="text" placeholder="Telefono" id="telephone" class="form-control">
                                    </div>
                                    <div class="form-group">       
                                            <label class="form-control-label">Disponibilidad Horaria</label>
                                            <input type="text" placeholder="De L a V de 14 a 18" id="available" class="form-control">
                                    </div>
                                    <div class="form-group">       
                                            <label class="form-control-label">Email</label>
                                            <input type="email" placeholder="Email" id="email" class="form-control">
                                    </div>
                              <div class="form-group">       
                                 <input type="submit" value="Agregar" onclick="insertStore()" class="btn btn-primary">
                              </div>
                              <div class="form-group">
                                 <div id="message"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="table-stores">
                        <div class="col">
                           <div class="block margin-bottom-sm">
                              <div class="title"><strong>Lista de ciudades</strong></div>
                              <table class="table">
                                 <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Localidad</th>
                                        <th>Direccion</th>
                                        <th>Codigo Postal</th>
                                        <th>Telefono</th>
                                        <th>Disponibilidad</th>
                                        <th>Email</th>
                                        <th>Acciones</th>
                                 </thead>
                                 <tbody>
                                 <?php
                                          $stores = storeListar();
                                          $count = 1;
                                          foreach ($stores as $store)
                                          {
                                          ?>
                                          <tr>
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td><?php echo $store["name"]; ?></td>
                                            <td>
                                                <?php 
                                                $address = new Address();
                                                $address->findAddressById($store["idAddress"]);
                                                $location = new Location();
                                                $location->findLocationById($address->idLocation);
                                                echo $location->name;
                                                ?>
                                            </td>
                                            <td><?php echo $address->dir; ?></td>
                                            <td><?php echo $address->postalCode; ?></td>
                                            <td><?php echo $store["telephone"]; ?></td>
                                            <td><?php echo $store["available"]; ?></td>
                                            <td><?php echo $store["email"]; ?></td>
                                            <td><input type="submit" value="Modificar" class="btn btn-primary"> <input type="submit" value="Eliminar" onclick="eliminarStore(<?php echo $store["idStore"]; ?>)" class="btn btn-primary"></td>
                                          </tr>
                                          <?php
                                            $count++;
                                            }
                                          ?>
                                 </tbody>
                              </table>
                              <div id="messageListar"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <footer class="footer">
               <div class="footer__block block no-margin-bottom">
                  <div class="container-fluid text-center">
                     <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                     <p class="no-margin-bottom">2018 &copy; eCommerce.</p>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <!-- Javascript files-->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
      <script src="vendor/chart.js/Chart.min.js"></script>
      <script src="js/charts-home.js"></script>
      <script src="js/front.js"></script>
      <script src="js/requestsAdmin.js"></script>
   </body>
</html>