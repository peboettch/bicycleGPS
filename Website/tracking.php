<!DOCTYPE html>
<html lang="de">
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
  <title>bicycleGPS - Tracking</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="theme-color" content="#81c784">
  <meta name="description" content="Eine Übersicht über die Vortragstermine der Neuland-Konferenz"/>
  <meta name="keywords" content="fahrrad, bicycleGPS, bicycle-gps, tracking"/>
</head>

<body>
  <?php include ('menu.php'); ?>
  <div class="container">
    <div class="section">
      <h1 class="header grey-text text-darken-3" style='font-family:"Courier New"'>Tracking</h1>
    </div>
  </div>


  <div class="container">
    <div class="section" id="map" style="height: 900px;">
      <script>

      var mymap = L.map('map').setView([51.48, 11.97], 14);

      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicGJvZXR0Y2giLCJhIjoiY2t3OGk3Z3ZzMTl3aTJ4cWxpdG03dTdjeiJ9.SlUREhOt-hx76jHgNEGS0Q', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
      }).addTo(mymap);

      L.marker([51.488605, 11.977125]).addTo(mymap)
      .bindPopup("<b>Startpunkt</b>");
      L.marker([51.497146666666666, 11.983171666666667]).addTo(mymap)
      .bindPopup("<b>Endpunkt</b>");


      L.polyline([
        [51.488605, 11.977125],
        [51.488706666666666, 11.98269],
        [51.49007666666667, 11.990462777777777],
        [51.489745, 11.991553333333334],
        [+51.4916722, +11.982928],
        [51.49377833333333, 11.988238333333333],
        [51.494791666666664, 11.985351666666666],
        [51.497146666666666, 11.983171666666667]
      ],{
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0
      }).addTo(mymap).bindPopup("I am a polyline.");

      L.circle([51.488605, 11.977125], 250, {
        color: 'blue',
        fillColor: '#00f',
        fillOpacity: 0.1
      }).addTo(mymap).bindPopup("51.488605	11.977125");
      L.circle([51.488706666666666, 11.98269], 90, {
        color: 'blue',
        fillColor: '#00f',
        fillOpacity: 0.1
      }).addTo(mymap).bindPopup("51.488605	11.977125");
      L.circle([51.49007666666667, 11.990462777777777], 0, {
        color: 'blue',
        fillColor: '#00f',
        fillOpacity: 0.1
      }).addTo(mymap).bindPopup("51.488605	11.977125");
      L.circle([51.489745, 11.991553333333334], 0, {
        color: 'blue',
        fillColor: '#00f',
        fillOpacity: 0.1
      }).addTo(mymap).bindPopup("51.488605	11.977125");
      L.circle([+51.4916722, +11.982928], 1420, {
        color: 'blue',
        fillColor: '#00f',
        fillOpacity: 0.1
      }).addTo(mymap).bindPopup("51.488605	11.977125");
      L.circle([51.49377833333333, 11.988238333333333], 0, {
        color: 'blue',
        fillColor: '#00f',
        fillOpacity: 0.1
      }).addTo(mymap).bindPopup("51.488605	11.977125");
      L.circle([51.494791666666664, 11.985351666666666], 0, {
        color: 'blue',
        fillColor: '#00f',
        fillOpacity: 0.1
      }).addTo(mymap).bindPopup("51.488605	11.977125");
      L.circle([51.497146666666666, 11.983171666666667], 267, {
        color: 'blue',
        fillColor: '#00f',
        fillOpacity: 0.1
      }).addTo(mymap).bindPopup("51.488605	11.977125");

      var popup = L.popup();

      function onMapClick(e) {
        popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
      }

      mymap.on('click', onMapClick);

    </script>
  </div>
</div>

<?php include ('footer.php'); ?>
</body>
</html>
