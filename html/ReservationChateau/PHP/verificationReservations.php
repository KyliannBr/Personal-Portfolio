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

    $login = $_POST["Login"];
    $dateReservation = $_POST["dateReservation"];
    $nbrInvite = $_POST["nombrePersonnesInvitees"];
    $typeReservation = $_SESSION["typeReservation"];

    include("mysqlinfo.php");
    
    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $myDB);
    
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 

    $sql = "INSERT INTO reservation(loginLoueur, dateReservation, nombreInvites, type) VALUES ('$login', '$dateReservation', '$nbrInvite','$typeReservation')";
    $sql2 = "SELECT dateReservation FROM reservation";
    $query2 = $mysqli->query($sql2);

    $array = Array();
    while($result = $query2->fetch_assoc()){
        $arrayDateReservationReservation[] =$result['dateReservation'];
    }



    $sqlAile1 = "SELECT dateReservation FROM aile1";
    $sqlAile2 = "SELECT dateReservation FROM aile2";
    $sqlAile3 = "SELECT dateReservation FROM aile3";
    $sqlAile4 = "SELECT dateReservation FROM aile4";
    
    $queryAile1 = $mysqli->query($sqlAile1);
    $queryAile2 = $mysqli->query($sqlAile2);
    $queryAile3 = $mysqli->query($sqlAile3);
    $queryAile4 = $mysqli->query($sqlAile4);

    while($resultAile1 = $queryAile1->fetch_assoc()){
      $Aile1DR[] = $resultAile1['dateReservation'];
    }

    while($resultAile2 = $queryAile2->fetch_assoc()){
        $Aile2DR[] = $resultAile2['dateReservation'];
    }

    while($resultAile3 = $queryAile3->fetch_assoc()){
      $Aile3DR[] = $resultAile3['dateReservation'];
    }

    while($resultAile4 = $queryAile4->fetch_assoc()){
        $Aile4DR[] = $resultAile4['dateReservation'];
    }

  $sqlAile1Insert = "INSERT INTO aile1(Login, dateReservation, NbrInvite, type) VALUES ('$login', '$dateReservation', '$nbrInvite','$typeReservation')";
  $sqlAile2Insert = "INSERT INTO aile2(Login, dateReservation, NbrInvite, type) VALUES ('$login', '$dateReservation', '$nbrInvite','$typeReservation')";
  $sqlAile3Insert = "INSERT INTO aile3(Login, dateReservation, NbrInvite, type) VALUES ('$login', '$dateReservation', '$nbrInvite','$typeReservation')";
  $sqlAile4Insert = "INSERT INTO aile4(Login, dateReservation, NbrInvite, type) VALUES ('$login', '$dateReservation', '$nbrInvite','$typeReservation')";   

/*
if (!in_array($dateReservation, $Aile1DR)) {
    $queryAile1Insert = $mysqli->query($sqlAile1Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
} else if (in_array($dateReservation, $Aile1DR) && !in_array($dateReservation, $Aile2DR)) {
    $queryAile2Insert = $mysqli->query($sqlAile2Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
} else if (in_array($dateReservation, $Aile1DR) && in_array($dateReservation, $Aile2DR) && !in_array($dateReservation, $Aile3DR)){
    $queryAile3Insert = $mysqli->query($sqlAile3Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
} else if (in_array($dateReservation, $Aile1DR) && in_array($dateReservation, $Aile2DR) && in_array($dateReservation, $Aile3DR) && !in_array($dateReservation, $Aile4DR)){
    $queryAile4Insert = $mysqli->query($sqlAile4Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
} else if (in_array($dateReservation, $Aile1DR) && in_array($dateReservation, $Aile2DR) && in_array($dateReservation, $Aile3DR) && in_array($dateReservation, $Aile4DR)){
    $query = $mysqli->query($sql);
    $_SESSION['DateReservation'] = $dateReservation;
    $_SESSION['login'] = $login;
    echo '<meta http-equiv="refresh" content=1;URL="PageChateau.php">';
    echo '<body onLoad="alert(\'Date de réservation deja prise\')">';
}
*/
/*
if (in_array($dateReservation, $Aile1DR) && in_array($dateReservation, $Aile2DR) && in_array($dateReservation, $Aile3DR) && in_array($dateReservation, $Aile4DR)){
    $query = $mysqli->query($sql);
    $_SESSION['DateReservation'] = $dateReservation;
    $_SESSION['login'] = $login;
    echo '<meta http-equiv="refresh" content=1;URL="PageChateau.php">';
    echo '<body onLoad="alert(\'Date de réservation deja prise\')">';
} 

if (in_array($dateReservation, $Aile1DR) && in_array($dateReservation, $Aile2DR) && in_array($dateReservation, $Aile3DR) && !in_array($dateReservation, $Aile4DR)){
    $queryAile4Insert = $mysqli->query($sqlAile4Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
}

if (in_array($dateReservation, $Aile1DR) && in_array($dateReservation, $Aile2DR) && !in_array($dateReservation, $Aile3DR)){
    $queryAile3Insert = $mysqli->query($sqlAile3Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
}

if (in_array($dateReservation, $Aile1DR) && !in_array($dateReservation, $Aile2DR)) {
    $queryAile2Insert = $mysqli->query($sqlAile2Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
}

if (!in_array($dateReservation, $Aile1DR)) {
    $queryAile1Insert = $mysqli->query($sqlAile1Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
}
*/

#print_r($Aile1DR);print_r($Aile2DR);print_r($Aile3DR);print_r($Aile4DR);





if (!in_array($dateReservation, $Aile1DR)){
    $queryAile1Insert = $mysqli->query($sqlAile1Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
} else if (!in_array($dateReservation, $Aile2DR)){
    $queryAile2Insert = $mysqli->query($sqlAile2Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
} else if (!in_array($dateReservation, $Aile3DR)){
    $queryAile3Insert = $mysqli->query($sqlAile3Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
} else if (!in_array($dateReservation, $Aile4DR) ){
    $queryAile4Insert = $mysqli->query($sqlAile4Insert);$_SESSION["reservationPrise"] = "ok";$_SESSION["loginReservation"] = $login;$_SESSION["dateReservation"] = $dateReservation;$_SESSION["nombrePersonnesInvitees"] = $nbrInvite;header("Location: PageRemerciements.php");
    $query = $mysqli->query($sql);
} else {
    $_SESSION['DateReservation'] = $dateReservation;
    $_SESSION['login'] = $login;
    echo '<meta http-equiv="refresh" content=1;URL="PageChateau.php">';
    echo '<body onLoad="alert(\'Date de réservation deja prise\')">';
}







    
/*
    if (in_array($dateReservation, $arrayDateReservationReservation)){
        $_SESSION['DateReservation'] = $dateReservation;
        $_SESSION['login'] = $login;
        echo '<meta http-equiv="refresh" content=1;URL="PageChateau.php">';
        echo '<body onLoad="alert(\'Date de réservation deja prise\')">';

    }else{
        $query = $mysqli->query($sql);
        $_SESSION["reservationPrise"] = "ok";
        $_SESSION["loginReservation"] = $login;
        $_SESSION["dateReservation"] = $dateReservation;
        $_SESSION["nombrePersonnesInvitees"] = $nbrInvite;
        header("Location: PageRemerciements.php");
    }
    */

?>