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
                            <input type='submit' class='submit' value='Skriv dagens logg'>
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

        <div class="chart_container">
            <canvas id="line_chart"></canvas>
        </div>


        <!-- javascript -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js" integrity="sha256-Xxq2X+KtazgaGuA2cWR1v3jJsuMJUozyIXDB3e793L8="
  crossorigin="anonymous"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/chart.js"></script>

        <!-- Grafen -->
       <script type="text/javascript">
            
       </script>

       <div class="log_container">

           <!--Ruta med dagens mående-->
           <div class="log_container">
           <?php
                while ($todays_log = $log->fetch_assoc()){

                    echo "<p class='todays_log_rating'>".$todays_log["logDate"]."</p>";
                    //echo "<br>";
                    echo "<p class='todays_log_rating'>".$todays_log["rating"]."</p>";
                    //echo "<br>";
                    echo "<p class='todays_log_rating'>"."Du skrev:" .$todays_log["comment"]."</p>";

                }

                while($todays_symptoms = $symptoms->fetch_assoc()){

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
    
    </body>
</html>
