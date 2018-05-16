<?php
include "db_connect.php";
include "login_process.php";

if (isset($_SESSION["clientName"]))
{
    $client_name =  $_SESSION["clientName"];
    echo "<div class=welcome>"."Välkommen $client_name"."</div>";

}

?>
<html>
    <head>
    <title>inloggad</title>
    <link rel="stylesheet" href="./design.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="icon" type="image/png" href="./cloud.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    </head>
    <body>


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
              <a href="#" target="_blank"><li>Min profil</li></a>
              <a href="./OmOss.php" target="_blank"><li>Om oss</li></a>
              <a href="#" target="_blank"><li>Kontakt</li></a>
                <a href="#" target="_blank"><li>Inställningar</li></a>
                <a href="./logout.php"><li>Logga ut</li></a>
              </ul>
        </div>
        </nav>

        <div class="graph" style= "float: right; height:15vh; width:40vw">
            <canvas id="grafen"></canvas>
            <script>
                var ctx = document.getElementById("grafen").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                        datasets: [{

                            label: '# of Votes',
                            data:  [12, 19, 3, 5, 2, 3],

                            label: 'Din måendekurva',
                            data: [12, 19, 3, 5, 2, 3],

                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            </script>
        </div>

    </body>
</html>
