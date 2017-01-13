<?php

    $error = ""; $mensajeExito = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "Es obligatorio una dirección de email.<br>";
            
        }
        
        if (!$_POST["contenido"]) {
            
            $error .= "El contenido del mensaje es obligatorio.<br>";
            
        }
        
        if (!$_POST["asunto"]) {
            
            $error .= "El campo asunto del mensaje es obligatorio.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "Correo electrónico no válido.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>Hubo algún error en el formulario:</p>' . $error . '</div>';
            
        } else {
            
            $emailA ="fernandozdv@gmail.com";
            
            $asunto = $_POST["asunto"];
            
            $contenido = $_POST["contenido"];
            
            $cabeceras = "From: ".$_POST["email"];
            
            if (mail($emailA, $asunto, $contenido, $cabeceras)) {
                
                $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado con éxito, nos pondremos en contacto pronto!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>El mensaje no pudo ser enviado, por favor inténtalo más tarde</div>';
                
                
            }
            
        }
        
        
        
    }

?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
      <h1>¡Contacta con nosotros!</h1> 
      <div id="error"></div>
      <div id="errorcorreo"></div>
      <div>
        <? echo $error.$mensajeExito; ?>
      </div>
      <form method="post">
        <fieldset class="form-group">
          <label for="email">Correo electrónico</label>
          <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="example@example.com">
          <small id="emailHelp" class="form-text text-muted">Es seguro ingresar su correo electrónico.</small>
        </fieldset>
        <fieldset class="form-group">
          <label for="asunto">Asunto</label>
          <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto">
        </fieldset>
        <fieldset class="form-group">
          <label for="contenido">¿Qué desea enviar?</label>
          <textarea class="form-control" name="contenido" id="contenido" rows="5"></textarea>
        </fieldset>
        <button id="enviar" type="submit" class="btn btn-outline-primary">Enviar</button>
      </form>

    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <script type="text/javascript">

        
      $("form").submit(function(e){
        var texto=$("#email").val();
        var regex=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/;
        var resultado=texto.match(regex);
        var error="";
        var error2="";
        $("#errorcorreo").html("");
        if($("#email").val()=="")
        {
          error+="Campo email obligatorio.<br>";
        }
        else
        {
          if(resultado==null)
          {
            error2+="Email incorrecto.<br>";
          }
        }
        if($("#asunto").val()=="")
        {
          error+="Campo asunto obligatorio.<br>";
        }
        if($("#contenido").val()=="")
        {
          error+="Campo contenido obligatorio.<br>";
        }
        if(error!=""||error2!="")
        {
          if(error)
          {
            $("#error").html("<div class=\"alert alert-danger\" role=\"alert\"> <strong>"+error+"</strong></div>");
          }
          if(error2)
          {
            $("#errorcorreo").html("<div class=\"alert alert-warning\" role=\"alert\"> <strong>"+error2+"</strong></div>");
          }
          return false;
        }
        else
          return true;
      })
    </script>
  </body>
</html>
