<?php
include "db_connect.php";
include "login_process.php";
include "get_log.php";

if (isset($_SESSION["clientID"]))
{
    
    $client_ID =  $_SESSION["clientID"];
    $name_query = "SELECT clientName, clientID FROM Clients";
    $name = $connection->query($name_query);
    
    while ($row = $name->fetch_assoc()){

        if ($row["clientID"] == $client_ID){

            echo "<div class=welcome>"."Välkommen " .$row["clientName"]."</div>";
        }
        
    }

}
else{

    header("Refresh: 0; URL=index.php");

}

?>

<html>
    <head>
    <title>inloggad</title>
    <link rel="stylesheet" href="./design.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="icon" type="image/png" href="./cloud.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>
    <body>

    <?php 

        date_default_timezone_set('UTC');
        $date = date('Y-m-d');
        $todayslog_query = "SELECT * FROM Log WHERE clientID = '".$client_ID."' AND logDate = '".$date."'";
        $log = $connection->query($todayslog_query);

        //Knapp till mood-formuläret
        if ($log->num_rows == 0){
            
            echo "<form id='todaysMoodLog' action='./moodForm.php'>
                            <input type='submit' id='moodform_button' value='Fyll i dagens logg'>
                        </form>";

        }
        else{
            
            echo "<div class='header_text'>" ."Du har fyllt i dagens logg!". "</div>";     
            
        }

        ?>

        <!--Hamburgermenyn-->
        <nav role="navigation">
        <div id="menuToggle">
            <!--
            A fake / hidden checkbox is used as click reciever,
            so you can use the :checked selector on it.
            -->
            <input type="checkbox" />

            <!--
            Some spans to act as a hamburger.

            They are acting like a real hamburger,
            not that McDonalds stuff.
            -->
            <span></span>
            <span></span>
            <span></span>

            <!--
            Too bad the menu has to be inside of the button
            but hey, it's pure CSS magic. target="_blank" öppnar länkarna i en ny flik
            -->
            <ul id="menu">
              <a href="#"><li>Hem</li></a>
              <a href="./OmOss.php"><li>Om oss</li></a>
              <a href="./contactSide.php"><li>Kontaktuppgifter</li></a>
                <a href="./logout.php"><li>Logga ut</li></a>
              </ul>
        </div>
        </nav>

        <!-- Grafen -->
        <div class="chart_container">
            <canvas id="line_chart"></canvas>
        </div>

        <!-- javascript -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js" integrity="sha256-Xxq2X+KtazgaGuA2cWR1v3jJsuMJUozyIXDB3e793L8="
  crossorigin="anonymous"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/chart.js"></script>



 <div class="log_container">
     <p>Här är dagens ifyllda mående:</p>
           <div class="log_container_left">
           <!--Ruta med dagens mående-->
           <?php
                while ($todays_log = $log->fetch_assoc()){

                    echo "<p id='todays_log_h'>"."Dagens rating:"."</p>";
                    echo "<p class='todays_log_rating'>".$todays_log["rating"]."</p>";
                    //echo "<br>";
                    echo "<p id='todays_log_h'>"."Din kommentar för dagen:"."</p>";
                    echo "<p class='todays_log_rating'>".$todays_log["comment"]."</p>";

                }
                ?>
            </div>

            <div class="log_container_right">
                <?php

               
                while($todays_symptoms = $symptoms->fetch_assoc()){
                     echo "<p class='todays_log'>"."Fysiska symptom:"."</p>";

                    if ($todays_symptoms["symptom1"]==1){
                        echo "<p class='todays_log'>"."Spänd rygg och nacke"."</p>";

                    }
                    if ($todays_symptoms["symptom2"]==1){
                        echo"<p class='todays_log'>". "Ont i magen"."</p>";
                        
                    }
                    if ($todays_symptoms["symptom3"]==1){
                        echo"<p class='todays_log'>". "Hyperventilering"."</p>";

                    }
                    if ($todays_symptoms["symptom4"]==1){
                        echo "<p class='todays_log'>"."Bröstsmärtor"."</p>";

                    }
                    if ($todays_symptoms["symptom5"]==1){
                        echo "<p class='todays_log'>"."Orolig mage/illamående"."</p>";

                    }
                    if ($todays_symptoms["symptom6"]==1){
                        echo "<p class='todays_log'>"."Yr/Svimfärdig"."</p>";

                    }
                    if ($todays_symptoms["symptom7"]==1){
                        echo "<p class='todays_log'>"."Hjärtklappning"."</p>";

                    }
                    if ($todays_symptoms["symptom8"]==1){
                        echo "<p class='todays_log'>"."Kallsvettningar"."</p>";
                        echo "<br>";

                    }
                    if ($todays_symptoms["symptom9"]==1){
                        echo "<p class='todays_log'>"."Koncentrationssvårigheter"."</p>";

                    }
                    if ($todays_symptoms["symptom10"]==1){
                        echo "<p class='todays_log'>"."Trötthet/Sömnsvårigheter"."</p>";

                    }

            }

           ?>

           </div>
 </div>

<div class="w3-container">
  <button onclick="document.getElementById('id01').style.display='block'" class="mButton">Se dagens meddelande</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="headerandfooter"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2 id="modalText">Dagens meddelande</h2>
      </header>
      <div class="w3-container">
        <p id="modalText">här vill vi echo:a ut php</p>
        <p id="modalText">baserat på senaste ratingen</p>
      </div>
      <footer class="headerandfooter">
        <p id="modalText">:)</p>
      </footer>
    </div>
  </div>
</div>

            </body>
</html>
