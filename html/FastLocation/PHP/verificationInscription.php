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

    $login = $_POST["login"];
    $password = $_POST["password"];
    $passwordRetape = $_POST["passwordRetape"];

    $sql = "INSERT INTO inscription (login, password, dateInscription) VALUES ('$login', '$password', '$date')";
    
    
    ///     Verification Login      ///     

    $sql2 = "SELECT login, password FROM inscription";
    $sql3 = "INSERT INTO connexion (dateConnexion, passwordConnexion, loginConnexion) VALUES ('$date', '$password', '$login')";

    $query = $mysqli->query($sql2);

    $arraylogin = Array();
    while($result = $query->fetch_assoc()){
        $arraylogin[] =$result['login'];
        $arraypassword[] =$result['password'];
    }


    if (strcmp($password, $passwordRetape) != 0) {
        echo '<meta http-equiv="refresh" content=0;URL="Minscrire.php">';
        echo '<body onLoad="alert(\'Les Mot de passe ne correspondent pas\')">';
    }
    else if (in_array($password, $arraypassword) && in_array($login, $arraylogin)){
        echo '<meta http-equiv="refresh" content=0;URL="Moncompte.php">';
        echo '<body onLoad="alert(\'Ce compte existe deja\')">'; 
    } else if (in_array($login, $arraylogin)){
        echo '<meta http-equiv="refresh" content=0;URL="Minscrire.php">';
        echo '<body onLoad="alert(\'Ce login existe deja\')">'; 
    } else if ((strcmp($password, $passwordRetape) == 0) && (in_array($login, $arraylogin) === false)){
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        $_SESSION['connecter'] = 1;
        header("Location: ../index.php");
        $query3 = $mysqli->query($sql);
        $query2 = $mysqli->query($sql3);
    }









?>

</body>
</html>