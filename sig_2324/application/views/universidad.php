<br>
<h1>DIRECCION DE LA UTC</h1>
<br>
<div id="mapa1" style="width:100%; height:500px: border:2px solid black;">


  </div>
  <script type="text/javascript">
  function initMap(){

    var coordenadaCentral= new google.maps.latLng(-0.9176406125746793, -78.63239571992726);
    var miMapa = new google.maps.Map(document.getElementById('mapa1'),
      {
        center: coordenadaCentral,
        zoom:15,
        mapType: google.maps.MapTypeId.ROADMAP
      }
    );
  }
  
  </script>
