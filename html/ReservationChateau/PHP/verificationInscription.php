<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>TITRE</title>
</head>

<body>
<?php

    session_start();

    include("mysqlinfo.php");
    
    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $myDB);
    
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 
    
    date_default_timezone_set('Europe/Paris');
    $date = date('Y-m-j H:i:s');

    $login = $_POST["pseudo"];
    $MDP = $_POST["password"];
    $MDPRetape = $_POST["passwordRetape"];
    $moisAujourdhui = $_POST["moisToday"];

    $sql = "INSERT INTO inscription (login, password, dateInscription, Verified) VALUES ('$login', '$MDP', '$date', 'false')";
    
    
    ///     Verification Login      ///     

    $sql2 = "SELECT login, password FROM inscription";
    $sql3 = "INSERT INTO connexions (Pseudo, MDP, dateHeure) VALUES ('$login', '$MDP', '$date')";

    $query = $mysqli->query($sql2);

    $arraylogin = Array();
    while($result = $query->fetch_assoc()){
        $arraylogin[] =$result['login'];
        $arraypassword[] =$result['password'];
    }


    if (strcmp($MDP, $MDPRetape) != 0) {
        echo '<meta http-equiv="refresh" content=0;URL="inscription.php">';
        echo '<body onLoad="alert(\'Les Mot de passe ne correspondent pas\')">';
    }
    else if (in_array($MDP, $arraypassword) && in_array($login, $arraylogin)){
        echo '<meta http-equiv="refresh" content=0;URL="../index.php">';
        echo '<body onLoad="alert(\'Ce compte existe deja\')">'; 
    } else if (in_array($login, $arraylogin)){
        echo '<meta http-equiv="refresh" content=0;URL="inscription.php">';
        echo '<body onLoad="alert(\'Ce login existe deja\')">'; 
    } else if ((strcmp($MDP, $MDPRetape) == 0) && (in_array($login, $arraylogin) === false)){
        $_SESSION['login'] = $login;
        $_SESSION['MDP'] = $MDP;
        $_SESSION['date'] = $dateMois;
        header("Location: PageAttente.php");
        $query3 = $mysqli->query($sql);
        $query2 = $mysqli->query($sql3);
    }









?>

</body>
</html>