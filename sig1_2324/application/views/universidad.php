<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Mapa UTC</title>
    <style>
      #mapa1 {
        width: 100%;
        height: 500px;
        border: 2px solid black;
      }
    </style>
  </head>
  <body>
    <h1>DIRECCION DE LA UTC</h1>
    <div id="mapa1"></div>
    <script>
      function initMap() {
        // CREACION DE UNA COORDENADA
        var coordenadaCentral = new google.maps.LatLng(-0.9176406079089564, -78.63289995820571);
        var miMapa = new google.maps.Map(
          document.getElementById('mapa1'), {
            center: coordenadaCentral,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          }
        );

        // Puedes agregar marcador si lo deseas
        var marcador = new google.maps.Marker({
          position: coordenadaCentral,
          map: miMapa,
          title: 'Ubicación de la UTC'
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnmsSyDZxWMEWWFjwMlnKBobI9ZpiWKU0&callback=initMap" async defer></script>
  </body>
</html>
