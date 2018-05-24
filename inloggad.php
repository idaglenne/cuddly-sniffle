<?php
include "db_connect.php";
include "login_process.php";

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

        if ($log->num_rows == 0){
            
            echo "<form id='todaysMoodLog' action='./moodForm.php'>
                            <input type='submit' class='submit' value='Skriv dagens logg'>
                        </form>";

        }
        else{
            
            echo "Du har fyllt i dagens logg!";     
            
        }


        //while ($hej = $log->fetch_assoc()){
        //    echo $hej["rating"];
       // }
        //if(!empty($log)){
        //    echo "hej";
       // }

            //7<!--Knapp till mood formuläret-->
            
        ?>

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
              <a href="#" target="_blank"><li>Hem</li></a>
              <a href="./OmOss.php" target="_blank"><li>Om oss</li></a>
              <a href="#" target="_blank"><li>Kontaktuppgifter</li></a>
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

    
    </body>
</html>
