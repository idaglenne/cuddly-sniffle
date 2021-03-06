<?php
include "db_connect.php";
include "login_process.php";
//include "get_log.php";
//include "searchdb.php";

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

    header("Location: index.php");

}

?>

<html>
    <head>
    <title>mood log</title>
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


        <!--Sökruta för att filtrera loggen-->
        <form name="search_form" class="search_form" method="POST" action="">
            <div id="search_left">
            <label for="search_date">Sök på ett loggdatum</label>
            <br>
            <input id ="search_date" name="search_date" type="text" placeholder="Datum">
            <p>Skriv datum i formen YYYY-MM-DD</p>
            </div>
            <div id="search_right">
            <input type="submit" name="search_submit" id="search_submit" value="Sök">
            </div>

        </form>

        <div class="log_container">

            
           
           <!--Ruta med den sökta dagens mående-->
           <?php
           $search_date="";
           include "searchdb.php";
        
           if (!empty($search_date)){
               echo "Ifyllt mående för den valda dagen:";
               echo "<div class='log_container_left'>";
                if (!empty($show_log) && !empty($symptoms)){
                    while ($print_todays_log = $show_log->fetch_assoc()){

                        echo "<p id='todays_log_h'>"."Dagens rating:"."</p>";
                        echo "<p class='todays_log_rating'>".$print_todays_log["rating"]."</p>";
                        //echo "<br>";
                        echo "<p id='todays_log_h'>"."Din kommentar för dagen:"."</p>";
                        echo "<p class='todays_log_rating'>".$print_todays_log["comment"]."</p>";

                    }
                    ?>
                </div>

                <div class="log_container_right">
                    <?php

                    while($todays_symptoms = $symptoms->fetch_assoc()){
                        echo "<p id='todays_log_b'>"."Fysiska symptom:"."</p>";

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
            }
           }
           else{

               echo "<p id='info_text'>" ."Sök på ett datum för att se loggdetaljer". "</p>";


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
        <h2 class="modalText">Dagens meddelande</h2>
      </header>
      <div class="w3-container">
        <?php

            date_default_timezone_set('UTC');
            $date = date('Y-m-d');
            $mess_query = "SELECT * FROM Log WHERE clientID = '".$client_ID."' AND logDate = '".$date."'";
            $mess = $connection->query($mess_query);

            while ($mess_log = $mess->fetch_assoc()){
                if ($mess_log["rating"] < 2) {
                    echo "<br>";
                    echo "<p class='modalText'>"."Kanske känner du någon som mådde väldigt dåligt under en period men som nu mår bättre? Om du vill prata med någon ring till svenska kyrkans samtalsstöd på 031800650 eller ladda ner BlueCalls app och boka en tid med en samtalsterapeut. För dig som har tankar på att ta ditt liv ring självmordslinjen på 90101.". "</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                }
                if (($mess_log["rating"] > 1) && ($mess_log["rating"] < 4)) {
                    echo "<br>";
                    echo "<p class='modalText'>"."Känner du dig nere? Du vet väl att du kan vända dig till våra stödkontakter om du behöver prata med någon.". "<a href='contactSide.php'>". " Klicka här för att komma till dem. "."</a>". "Undrar du över några symptom ring till sjukvårdsrådgivningen på 1177.". "</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                }
                if (($mess_log["rating"] > 3) && ($mess_log["rating"] < 6)) {
                    echo "<br>";
                    echo "<p class='modalText'>"."Det verkar som att du mår ganska bra. Vad härligt!". "</p>";
                    echo "<p class='modalText'>"."Har du gjort något särskilt under de senaste dagarna som påverkat dig positivt?"."</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                }
                if (($mess_log["rating"] > 5) && ($mess_log["rating"] < 8)) {
                    echo "<br>";
                    echo "<p class='modalText'>"."Vad roligt att du skattar ditt mående högt idag! Försök att stanna upp och känna efter hur det känns.". "</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
            }
        }
                  
        ?>
      </div>
      <footer class="headerandfooter">
        <p class="modalText">:)</p>
      </footer>
    </div>
  </div>
</div>


            </body>
</html>
