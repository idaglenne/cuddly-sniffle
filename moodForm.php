<?php
include "db_connect.php";

?>
<html>
    <head>
    <title>mood log</title>
    <link rel="stylesheet" href="./design.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="icon" type="image/png" href="./ikon.png">
    </head>

    <body>
      <div class="header">
      <h1>mood log</h1>
    </div>

    <form class=mood_form>
      <label>Hur mår du på en skala från ett till fem idag?</label>
      <br>
      <input type="radio" class=mood id="alt_1" name="moodOneToFive" value="1">
      <label for="alt_1">1</label>
      <input type="radio" class=mood id="alt_2" name="moodOneToFive" value="2">
      <label for="alt_1">2</label>
      <input type="radio" class=mood id="alt_3" name="moodOneToFive" value="3">
      <label for="alt_1">3</label>
      <input type="radio" class=mood id="alt_4" name="moodOneToFive" value="4">
      <label for="alt_1">4</label>
      <input type="radio" class=mood id="alt_5" name="moodOneToFive" value="5">
      <label for="alt_1">5</label>
      <br>
      <label>Har du upplevt några av följande symptom idag?</label>
      <br>
      <input type="checkbox" class=mood id="alt_tensionBack" name="symptom">
      <label for="alt_tensionBack">Spänd rygg och nacke</label>
      <br>
      <input type="checkbox" class=mood id="alt_stomachAche" name="symptom">
      <label for="alt_stomachAche">Ont i magen</label>
      <br>
      <input type="checkbox" class=mood id="alt_hyperventilation" name="symptom">
      <label for="alt_hyperventilation">Hyperventilering</label>
      <br>
    </form>
    </body>

</html>
