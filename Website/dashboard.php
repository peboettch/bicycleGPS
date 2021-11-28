<!DOCTYPE html>
<html lang="de">
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
  <title>bicycleGPS - Dashboard</title>
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
      <h1 class="header grey-text text-darken-3" style='font-family:"Courier New"'>Dashboard</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s12 m6">
        <div class="card medium green lighten-2 ">
          <div class="card-image">
            <img src="https://api.mapbox.com/styles/v1/mapbox/light-v10/static/pin-s+555555(11.977125,51.488605)/11.977125,51.488605,15/500x250@2x?access_token=<?php include ('mapbox_public_token'); ?>" alt="Letzte Position deines Trackers">
            <span class="card-title grey-text text-darken-4">Letzte Position</span>
          </div>
          <div class="card-content white-text">
            <p>Standort: Luisenstraße 14, 06108 Halle (Saale)</br>Zuletzt aktualisiert vor: 5 Minuten</p>
          </div>
          <div class="card-action">
            <a href="tracking.php" class="green-text text-darken-4">Zur interaktiven Karte</a>
            <a href="tracking-history.php" class="green-text text-darken-4">Verlauf anzeigen</a>
          </div>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="card medium">
          <div class="card-content">
            <span class="card-title green-text">Status: Aktiv</span>
            <div>
              <table class="highlight responsive-table">
                <tbody>
                  <tr>
                    <td>Letzte Aktualisierung</td>
                    <td>22.11.2021 12:31</td>
                  </tr>
                  <tr>
                    <td>Akku verbleibend</td>
                    <td>80%</td>
                  </tr>
                  <tr>
                    <td>Koordinaten</td>
                    <td>11.977125, 51.488605</td>
                  </tr>
                  <tr>
                    <td>Adresse</td>
                    <td>Luisenstraße 14, 06108 Halle (Saale)</td>
                  </tr>
                  <tr>
                    <td>Genauigkeit</td>
                    <td>20 Meter</td>
                  </tr>
                  <tr>
                    <td>Methode</td>
                    <td>Mobilfunkortung</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="card medium">
          <div class="card-content">
            <span class="card-title">Allgemeine Informationen</span>
            <div>
              <table class="highlight responsive-table">
                <tbody>
                  <tr>
                    <td>IMEI</td>
                    <td>359339077094355</td>
                  </tr>
                  <tr>
                    <td>Aktiv seit</td>
                    <td>09.11.2021 07:28</td>
                  </tr>
                  <tr>
                    <td>Gesammelte Datenpunkte</td>
                    <td>37</td>
                  </tr>
                  <tr>
                    <td>Aktualisierungsintervall</td>
                    <td>8 Minuten</td>
                  </tr>
                  <tr>
                    <td>Fahrrad</td>
                    <td>Peters Rad</td>
                  </tr>
                  <tr>
                    <td>Rahmennummer</td>
                    <td>86530782004626777312</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="card medium">
          <div class="card-content">
            <span class="card-title">Letzte 5 Ortungspunkte</span>
            <div>
              <table class="highlight responsive-table">
                <thead>
                  <tr>
                    <th>Zeit</th>
                    <th>Koordinaten</th>
                    <th>Genauigkeit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>20.11. 21:41</td>
                    <td>51.4874323, 11.9728687</td>
                    <td>1077m</td>
                  </tr>
                  <tr>
                    <td>20.11. 19:55</td>
                    <td>51.4887183, 11.976693</td>
                    <td>1m</td>
                  </tr>
                  <tr>
                    <td>20.11. 19:30</td>
                    <td>51.488905, 11.9760077</td>
                    <td>219m</td>
                  </tr>
                  <tr>
                    <td>20.11. 19:30</td>
                    <td>51.488965, 11.9765116</td>
                    <td>108m</td>
                  </tr>
                  <tr>
                    <td>20.11. 19:28</td>
                    <td>51.48903, 11.97640666</td>
                    <td>114m</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include ('footer.php'); ?>
</body>
</html>
