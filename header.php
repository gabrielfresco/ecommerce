<!-- Top bar-->
<?php session_start();?>
<script src="js/request.js"></script>
<div class="top-bar">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-6 d-md-block d-none">
        <p><a href="#">Sucursales</a></p>
        <!-- stores.php -->
      </div>
      <div class="col-md-6">
        <div class="d-flex justify-content-md-end justify-content-between">
          <ul class="list-inline contact-info d-block d-md-none">
            <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
          </ul>
          
          <div class="login">
          <?php 
              if(isset($_SESSION["user_name"])) {
                echo '<a href="customer-account.php" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">' . $_SESSION["user_name"] .'</span></a>';
                echo '<a href="#" onclick="return cerrarSesion();" class="signup-btn"><i class="fa fa-sign-out"></i> Cerrar sesion</a>';
              } else {
                echo '<a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Iniciar Sesión</span></a>';
                echo '<a href="customer-register.php" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Registrarse</span></a>';
              } 
           ?>
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
          <div class="form-group">
            <input id="email" type="text" placeholder="email" class="form-control">
          </div>
          <div class="form-group">
            <input id="password" type="password" placeholder="password" class="form-control">
          </div>
          <p class="text-center">
            <button onclick="iniciarSesion();" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Iniciar Sesión</button>
          </p>
        <p class="text-center text-muted">No te registraste aún?</p>
        <p class="text-center text-muted"><a href="customer-register.php"><strong>Registrate ahora</strong></a>! Es facil y lo podes hacer en 1 minuto!
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Login modal end-->';