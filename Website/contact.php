<!DOCTYPE html>
<html lang="de">
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
  <title>bicycleGPS - Kontakt</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <meta name="theme-color" content="#81c784">
  <meta name="description" content="Auf dieser Seite können Sie die bicycleGPS kontaktieren"/>
  <meta name="keywords" content="fahrrad, bicycleGPS, bicycle-gps, tracking, kontakt, contact, nachricht"/>
</head>

<body>
  <?php include ('menu.php'); ?>

  <div class="container">
    <h1 class="grey-text text-darken-3" style='font-family:"Courier New"'>Kontakt</h1>
    <h5 class="header col s12 light" style='font-family:"Courier New"'>Kontaktmöglichkeit für alle möglichen Fragen und Anregungen</h5>
  </div>


  <div class="container">
    <div class="section">

      <?php
      if($_GET["sent"] == "true")echo '<div class="row"><div class="col s12"><div class="card-panel green darken-3 hoverable"><span class="white-text">Ihre Anfrage wurde erfolgreich versendet. Sie wird schnellstmöglich bearbeitet.</span></div></div></div>';
      if($_GET["sent"] == "false") echo '<div class="row"><div class="col s12"><div class="card-panel red darken-2 hoverable"><span class="white-text">Fehler beim Senden. Schreiben Sie bitte selbst eine Nachricht an team@bicycle-gps.de oder versuchen Sie es später erneut.</span></div></div></div>';
      else false;
      ?>

      <!-- Inhalt -->
      <form  class="col s12" action="action/mail.php" method="post">
        <div class="row">
          <div class="input-field col s6"><i class="material-icons prefix">account_circle</i><input id="name" type="text" class="validate" name="Name"><label for="name">Name</label></div>
          <div class="input-field col s6"><i class="material-icons prefix">email</i><input id="email" type="email" class="validate" name="Mail"><label for="email" data-error="falsch" data-success="richtig">E-Mail</label></div>
        </div>
        <div class="row">
          <div class="input-field col s12"><i class="material-icons prefix">textsms</i><input id="betreff" type="text" class="validate" name="Betreff"><label for="betreff">Betreff</label></div>
        </div>
        <div class="row">
          <div class="input-field col s12"><i class="material-icons prefix">mode_edit</i><textarea id="text" class="materialize-textarea validate" name="Inhalt"></textarea><label for="text">Inhalt</label></div>
        </div>
        <button class="btn waves-effect waves-dark green darken-3 z-depth-5" type="submit">Senden<i class="material-icons right">send</i></button>
      </form>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <?php include ('footer.php'); ?>
</body>
</html>
