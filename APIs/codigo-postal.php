<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style type="text/css">
      #msj{
        margin-top:30px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Localizador de códigos postales</h1>
      <br>
      <h2>Introduce una dirección de código postal.</h2>
      <form>
        <fieldset class="form-group">
          <label for="direccion">Dirección</label>
          <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Introduzca la dirección">
        </fieldset>
        <button id="enviar" class="btn btn-primary">Enviar</button>
      </form>
      <div id="msj"></div>
      
    </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
    <script type="text/javascript">
      $("#enviar").click(function(e){
        e.preventDefault();
        
        $.ajax({
          url:"https://maps.googleapis.com/maps/api/geocode/json?address="+encodeURIComponent($("#direccion").val())+"&key=AIzaSyC3Tlh595WARHWHwxpn874Y6QV8dZlym2E",
          type:"GET",
                success: function(datos)
                {
                    var bandera=false;
                    var vr="";
                    console.log(datos);
                    if (datos['status']!="OK")
                        {
                            bandera=false;
                        }
                    else{
                        $.each(datos['results'][0]['address_components'],function(clave,valor){
                            if (valor['types'][0]=="postal_code")
                            {
                                vr=valor["long_name"];
                                bandera=true;
                            }
                        })
                    }
                      if(bandera==false)
                      {
                        $("#msj").html('<div class="alert alert-danger" role="alert"><strong>¡Imposible obtener el código postal!</strong> Intente suministrar más información</div>');
                      }
                      if(bandera==true)
                      {
                        $("#msj").html('<div class="alert alert-success" role="alert"><strong>¡Código postal encontrado!</strong> El C.P. es '+vr+'</div>');
                      }
                }
            })

        })
    </script>
  </body>
</html>