<?php
include "db_connect.php";
?>
<html>
    <head>
    <title>Bakgrund</title>
    <link rel="stylesheet" href="./design.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="icon" type="image/png" href="./cloud.png">
    </head>
    <body>

        <h1>om mood log</h1>
                <h2>Loggen som ger dig överblick över ditt mående</h2>

                <div id="text">
                    <p>Vill du bli lite mer medveten om hur ditt mående förändras över tid? Eller vill du ha ett hjälpmedel för att i detalj kunna beskriva ditt mående för andra? Då är Mood log för dig!</p>
                    <p>Dagarna flyter lätt ihop och man glömmer enkelt hur man mått i samband med specifika dagar. Därför skapade vi Mood log där du enkelt kan kartlägga ditt välmående från dag till dag. Inte bara efter ditt humör men även efter fysiska påfrestningar du upplever och övriga kommentarer du har om dagen. Detta resulterar sedan i en graf som på ett enkelt visuellt sätt ger dig överblick över ditt välmående.</p><p>För att få en större förståelse för ditt mående, börja logga idag!</p>
                </div>
        
        <form action:"./inloggad.php">
        <input type="submit" class="submit" value="Tillbaka" name="submit">
 </form>
    </body>
</html>
