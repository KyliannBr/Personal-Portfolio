<?php
include("mysqlinfo.php");
    
// Create connection
$mysqli = new mysqli($servername, $username, $password, $myDB);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 


    $verified = $_GET["verified"];
    $value = $_GET["value"];


    $sql = "SELECT login, Verified FROM inscription WHERE Verified = 'false';";
    $sql2 = "UPDATE inscription SET Verified = REPLACE(Verified, 'false', 'true') WHERE `login` = '$value';";
    $sql3 = "DELETE FROM `inscription` WHERE `login` = '$value';";
    
    

    $query = $mysqli->query($sql);

    $array = Array();

    while($result = $query->fetch_assoc()){
        $arrayloginInscription[] =$result['login'];
        $arrayVerified[] = $result['Verified'];
    }


    

    if ($verified == 'true') {
        $query2 = $mysqli->query($sql2);
        header("Location: PageAdmin.php");
    } else if ($verified == 'false') {
        $query3 = $mysqli->query($sql3);
        echo '<meta http-equiv="refresh" content=0;URL="PageAdmin.php">';
        echo '<body onLoad="alert(\'Ce compte a bien été supprimé de notre base de donnée\')">'; 
    }

?>