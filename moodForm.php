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

    <form class="mood_form">
      <div class="question">
      <label>Hur mår du på en skala från ett till sju idag?</label>
      </div>
      <br>
      <div class="radioButtons">
        <div class="alternative">
          
      <input type="radio" class=mood id="alt_1" name="moodOneToSeven" value="1">
      <label for="alt_1">1</label>
      </div>
      <div class="alternative">
      <input type="radio" class=mood id="alt_2" name="moodOneToSeven" value="2">
      <label for="alt_2">2</label>
      </div>
      <div class="alternative">

      <input type="radio" class=mood id="alt_3" name="moodOneToSeven" value="3">
      <label for="alt_3">3</label>
      </div>
      <div class="alternative">
      <input type="radio" class=mood id="alt_4" name="moodOneToSeven" value="4">
      <label for="alt_4">4</label>
      </div>
      <div class="alternative">
      <input type="radio" class=mood id="alt_5" name="moodOneToSeven" value="5">
      <label for="alt_5">5</label>
      </div>
      <div class="alternative">
      <input type="radio" class=mood id="alt_6" name="moodOneToSeven" value="6">
      <label for="alt_6">6</label>
      </div>
      <div class="alternative">
      <input type="radio" class=mood id="alt_7" name="moodOneToSeven" value="7">
      <label for="alt_7">7</label>
      
      </div>
      </div>
      <br>
      <div class="question">
      <label>Har du upplevt några av följande symptom idag?</label>
      </div>
      <br/>
      <input type="checkbox" class="symptom" id="alt_tensionBack" name="tensionBack">
      <label for="alt_tensionBack">Spänd rygg och nacke</label>
      <br>
      <input type="checkbox" class="symptom" id="alt_stomachAche" name="stomachAche">
      <label for="alt_stomachAche">Ont i magen</label>
      <br>
      <input type="checkbox" class="symptom" id="alt_hyperventilation" name="hyperventilation">
      <label for="alt_hyperventilation">Hyperventilering</label>
      <br>
      <input type="checkbox" class="symptom" id="alt_chestPain" name="chestPain">
      <label for="alt_chestPain">Bröstsmärtor</label>
      <br>
      <input type="checkbox" class="symptom" id="alt_stomach" name="stomach">
      <label for="alt_stomach">Orolig mage/Illamående</label>
      <br>
      <input type="checkbox" class="symptom" id="alt_dizzy" name="dizzy">
      <label for="alt_dizzy">Yr/Svimfärdig</label>
      <br>
      <input type="checkbox" class="symptom" id="alt_heartRacing" name="heartRacing">
      <label for="alt_heartRacing">Hjärtklappning</label>
      <br>
      <input type="checkbox" class="symptom" id="alt_coldSweat" name="coldSweat">
      <label for="alt_coldSweat">Kallsvettningar</label>
      <br>
      <input type="checkbox" class="symptom" id="alt_concentration" name="concentration">
      <label for="alt_concentration">Koncentrationssvårigheter</label>
      <br>
      <input type="checkbox" class="symptom" id="alt_tired" name="tired">
      <label for="alt_tired">Trötthet/Sömnsvårigheter</label>
      <br>
      <label for="textarea">Kommentar</label>
      <br/>
      <textarea placeholder="Skriv en kommentar">Skriv en kommentar</textarea>
    </form>
    </body>

</html>
