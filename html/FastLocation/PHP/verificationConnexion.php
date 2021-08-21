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

    $login = $_POST["login"];
    $password = $_POST["password"];

    date_default_timezone_set('Europe/Paris');
    $date = date('d-m-Y H:i:s');

    $sql = "SELECT login, password FROM inscription";
    $sql2 = "INSERT INTO connexion(dateConnexion, passwordConnexion, loginConnexion) VALUES ('$date', '$password', '$login')";

    $query = $mysqli->query($sql);

    $array = Array();
    while($result = $query->fetch_assoc()){
        $arraylogin[] =$result['login'];
        $arraypassword[] =$result['password'];
    }



    if (in_array($login, $arraylogin) && in_array($password, $arraypassword)){
        $querysql2 = $mysqli->query($sql2);
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $MDP;
        $_SESSION['connecter'] = 1;
        header("Location: ../index.php");  
    } else {
        echo '<meta http-equiv="refresh" content=0;URL="MonCompte.php">';
        echo '<body onLoad="alert(\'Login ou Mot de Passe incorrect\')">';
    }

    if (($login == "admin" || $login == "root") && ($MDP == "admin" || $MDP == "root")){
        header("Location: PageAdmin.php");
    }

?>

</body>
</html>