<!DOCTYPE html>
<html lang="de">
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
  <title>bicyleGPS</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <meta name="theme-color" content="#81c784">
  <meta name="description" content="Seite zum Tracken meines Fahrrads"/>
</head>

<body>
  <?php include ('menu.php'); ?>

  <!--
  <div class="section no-pad-bot" id="index-banner"><div class="parallax-container">
  <div class="parallax"><img src="teaser.png"></div>
</div>-->

<div class="container">
  <h1 class="header grey-text text-darken-3" style='font-family:"Courier New"'>Track' dein Fahrrad!</h1>
  <!--<a class="waves-effect waves-light btn red darken-4" href="#"><i class="material-icons right">send</i>Videokonferenz</a>-->
  <h5 class="header col s12 light" style='font-family:"Courier New"'>bicycleGPS hilft dir, dein Fahrrad überall zu finden</h5>
</div>


<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m6 l6">
        <div class="icon-block">
          <h2 class="grey-text text-darken-3"><i class="material-icons medium">help</i></h2>
          <h5>Wie funktioniert das?</h5>
          <p class="light">SIM-Karte in den Tracker, Adresse konfigurieren, und schon kannst du starten. Ein Python-Skript empfängt die Position deines Trackers und packt sie in eine Datenbank. Gemeinsam mit ein wenig PHP und Javascript werden diese Informationen dann übersichtlich auf einer Karte dargestellt.</p>
          <p class="light">Den aktuellen Stand der Entwicklungsarbeit kannst du im <a class="green-text text-darken-4" href="/aktuell.php">Changelog</a> betrachten. Alternativ findest du nach der Anmeldung im <a class="green-text text-darken-4" href="dashboard.php">Dashboard</a> eine Übersicht über alle wichtigen Informationen zu deinem Tracker.</p>
        </div>
      </div>
      <div class="col s12 m6 l6">

      </div>
    </div>
  </div>
</div>


<?php include ('footer.php'); ?>
</body>
</html>
