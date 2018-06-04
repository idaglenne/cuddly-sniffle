<?php
include "db_connect.php";
include "admin_login_process.php";




if (isset($_SESSION["adminID"]))
{
    
    $admin_ID =  $_SESSION["adminID"];
    $name_query = "SELECT adminName, adminID FROM Admin";
    $name = $connection->query($name_query);
    
    while ($row = $name->fetch_assoc()){

        if ($row["adminID"] == $admin_ID){

            echo "<div class=welcome>"."Välkommen admin " .$row["adminName"]."</div>";
        }
        
    }

}
else{

    header("Location: admin_inlog.php");

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
    <p id="logout"><a href="logout_admin.php">Logga ut</a></p>  
    <h1>mood log</h1>
    <h2>Adminsida</h2>
    <?php 

        
           function delcli($fields){
                $this->db->where('UID', $fields);
                $this->db->delete('clients');
        }

        $clients_query = "SELECT clientID, clientName FROM Clients";
        $clients = $connection->query($clients_query);

        //Funktion som visar clients+delete buttons
        function clist() { 
        $fields = $clients;
        $data = array();
        $data['fields'] = $fields;
        $this->load->view('clientlist', $data);
        if ($_POST['del'] == 1) { 
        $fields = $_POST['fields'];
        delcli($fields);
        }
    }

    echo "<p class='header_text'>Radera kunder</p>";
   echo "<div id='delete_clients'>";

        //Raderingsformulär klienter
        foreach($clients as $field){
            ?>
                 

                 <?php echo $field['clientID'];?>
                 <?php echo $field['clientName']; ?>
                 
                <form action="delete_client.php" method="post"> 
                <input type="hidden" name="fields" value="<?php echo $field['clientID']?>">
                <button class= "delete_submit" name="del" type="submit" value="1">Radera kund</button>
                </form>
                
                
                <?php
                }
                ?>
                </div>
   </body>
</html>

