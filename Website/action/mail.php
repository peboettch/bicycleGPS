<?php
 
// Konfiguration:
 
$mailTo = 'team@bicylce-gps.de';
$mailFrom = '"' . htmlspecialchars($_POST["Name"]) . '" <' . htmlspecialchars($_POST["Mail"]) . '>';
$mailSubject    = 'Kontaktform: ' . htmlspecialchars($_POST["Betreff"]);
$returnPage = '../contact.php?sent=true';
$returnErrorPage = '../contact.php?sent=false';
$mailText = "Guten Tag.\nDie folgende e-Mail wurde soeben über das Kontaktformular von bicylceGPS an Sie gesendet:\n\n";
 
// Text der Mail aus den Formularfeldern erstellen:
if($_POST["Name"] == "" or $_POST["Mail"] == "" or $_POST["Inhalt"] == "")
{
    header("Location: " . $returnErrorPage);
}

else
{
// Wenn Daten mit method="post" versendet wurden:
if(isset($_POST)) {
   // alle Formularfelder der Reihe nach durchgehen:
   foreach($_POST as $name => $value) {
      // Wenn der Feldwert aus mehreren Werten besteht:
      // (z.B. <select multiple>)
      if(is_array($value)) {
          // "Feldname:" und Zeilenumbruch dem Mailtext hinzufügen
          $mailText .= $name . ":\n\t";
          // alle Werte des Feldes abarbeiten
          foreach($valueArray as $entry) {
             // Einrückungsleerzeichen, Wert und Zeilenumbruch
             // dem Mailtext hinzufügen
             $mailText .= "   " . $value . "\n\n";
          } // ENDE: foreach
      } // ENDE: if
      // Wenn der Feldwert ein einzelner Feldwert ist:
      else {
          // "Feldname:", Wert und Zeilenumbruch dem Mailtext hinzufügen
          $mailText .= $name . ": " . $value . "\n";
      } // ENDE: else
   } // ENDE: foreach
} // if

 
// Korrekturen vor dem Mailversand
 
// Wenn PHP "Magic Quotes" vor Apostrophzeichen einfügt:
 if(get_magic_quotes_gpc()) {
     // eventuell eingefügte Backslashes entfernen
     $mailtext = stripslashes($mailtext);
 }
 
// Mailversand
 
// Mail versenden und Versanderfolg merken
$mailSent = @mail($mailTo, $mailSubject, $mailText, "From: ".$mailFrom);
 
// Return-Seite an den Browser senden
 
// Wenn der Mailversand erfolgreich war:
if($mailSent == TRUE) {
   // Seite "Formular verarbeitet" senden:
   header("Location: " . $returnPage);
}
// Wenn die Mail nicht versendet werden konnte:
else {
   // Seite "Fehler aufgetreten" senden:
   header("Location: " . $returnErrorPage);
}
}
 
exit();
 
?>
