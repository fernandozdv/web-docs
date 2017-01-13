<?php
  include(HTML_DIR.'overall/header.php');
?>
<body>
<?php 
  include(HTML_DIR.'overall/nav.php');
 ?>

<div class="modal fade" id="Login" role="dialog">
   <div class="modal-dialog">

     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Iniciar Sesión</h4>
       </div>
       <div class="modal-body">
         <div role="form">
           <div class="form-group">
             <label for="usrname_or_email"><span class="glyphicon glyphicon-user"></span> Usuario o Email</label>
             <input type="text" class="form-control" id="user_login" placeholder="Introducir Email">
           </div>
           <div class="form-group">
             <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
             <input type="text" class="form-control" id="pass_login" placeholder="Introducir Contraseña">
           </div>
           <div class="checkbox">
             <label><input type="checkbox" value="1" id="session_login" checked>Recordarme</label>
           </div>
           <button type="button" class="btn btn-default btn-success btn-block" id="iniciar_sesion"><span class="glyphicon glyphicon-off"></span> Iniciar Sesión</button>
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
         <p>¿No estás registrado? <a data-toggle="modal" data-target="#Registro">¡Regístrate!</a></p>
         <p>¿Contraseña <a data-toggle="modal" data-target="#Lostpass">perdida?</a></p>
       </div>
     </div>
   </div>
 </div>

<div class="modal fade" id="Registro" role="dialog">
   <div class="modal-dialog">

     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
       </div>
       <div class="modal-body">
         <form role="form">
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
             <input type="text" class="form-control" id="user_reg" placeholder="Introduce un nombre de usuario">
           </div>
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Email</label>
             <input type="email" class="form-control" id="email_reg" placeholder="Introduce tu correo electrónico">
           </div>
           <div class="form-group">
             <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
             <input type="text" class="form-control" id="pass_reg" placeholder="Introduce tu contraseña">
           </div>
           <div class="form-group">
             <label for="psw_two"><span class="glyphicon glyphicon-eye-open"></span> Repite tu Contraseña</label>
             <input type="text" class="form-control" id="pass_reg_dos" placeholder="Introduce tu contraseña de nuevo">
           </div>
           <div class="checkbox">
             <label><input type="checkbox" id="tyc_reg" value="1" checked>Acepto los TyC</label>
           </div>
           <button type="button" id="registrarme" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Regístrarme</button>
         </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
       </div>
     </div>
   </div>
 </div>

 <div class="modal fade" id="Lostpass" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Recuperar Contraseña</h4>
        </div>
        <div class="modal-body">
          <div role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-enveloper"></span> Email</label>
              <input type="email" class="form-control" id="email_lostpass" placeholder="Enter email">
            </div>
            <button type="button" class="btn btn-default btn-success btn-block" id="recuperar_passs"><span class="glyphicon glyphicon-off"></span> Recuperar</button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div>
      </div>
    </div>
  </div>

<section class="mbr-section mbr-after-navbar" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
            <p>
              Texto de relleno
            </p>
          </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-after-navbar" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
            <p>
              Texto de relleno
            </p>
          </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-after-navbar" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
            <p>
              Texto de relleno  
            </p>
          </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons2-13" style="background-color: rgb(240, 240, 240);">
    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">SÍGUENOS</h3>
            </div>
            <div class="mbr-social-icons mbr-social-icons--style-1 col-sm-8">
              <a class="mbr-social-icons__icon socicon-bg-twitter" title="Twitter" target="_blank" href="#"><i class="socicon socicon-twitter"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-facebook" title="Facebook" target="_blank" href="#"><i class="socicon socicon-facebook"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-googleplus" title="Google+" target="_blank" href="#"><i class="socicon socicon-googleplus"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-youtube" title="YouTube" target="_blank" href="#"><i class="socicon socicon-youtube"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-instagram" title="Instagram" target="_blank" href="#"><i class="socicon socicon-instagram"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-pinterest" title="Pinterest" target="_blank" href="#"><i class="socicon socicon-pinterest"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-github" title="GitHub" target="_blank" href="#"><i class="socicon socicon-github"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-behance" title="Behance" target="_blank" href="#"><i class="socicon socicon-behance"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-tumblr" title="Tumblr" target="_blank" href="#"><i class="socicon socicon-tumblr"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-linkedin" title="LinkedIn" target="_blank" href="#"><i class="socicon socicon-linkedin"></i></a>
          </div>
    </div>
</section>
<?php 
  include(HTML_DIR.'overall/footer.php');
 ?>

</body>
</html>
