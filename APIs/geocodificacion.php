<html>
<head><title>Geocodificación de una dirección</title></head>
<body></body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $.ajax({
        url: "https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyC3Tlh595WARHWHwxpn874Y6QV8dZlym2E",
        type:"GET",
        success:function(datos)
        {
            //utilizamos un iterador
            $.each(datos['results'][0]['address_components'], function(clave,valor)
            {
                if (valor['types'][0]=='country')
                    {
                        alert(valor['long_name']);
                    }
            })
        }
    })
</script>
</html>