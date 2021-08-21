<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>TITRE</title>
    <script type="text/javascript">
      function startTime() {
    var weekday = new Array();
    weekday[0] =  "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";

    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var d = today.getDate();
    var y = today.getFullYear();
    var wd = weekday[today.getDay()];
    var mt = month[today.getMonth()];
  
    m = checkTime(m);
    s = checkTime(s);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
  
    </script>
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

    $login = $_POST["pseudo"];
    $MDP = $_POST["password"];

    date_default_timezone_set('Europe/Paris');
    $date = date('d-m-Y H:i:s');

    $year = date('Y');
    $month = date('m');
    $day = date('d');

    $sql = "SELECT login, password FROM inscription";
    $sql2 = "INSERT INTO connexions (Pseudo, MDP, dateHeure) VALUES ('$login', '$MDP', '$date')";

    $query = $mysqli->query($sql);

    $array = Array();
    while($result = $query->fetch_assoc()){
        $arraylogin[] =$result['login'];
        $arraypassword[] =$result['password'];
    }



    if (in_array($login, $arraylogin) && in_array($MDP, $arraypassword)){
        $_SESSION['login'] = $login;
        $_SESSION['MDP'] = $MDP;
        $_SESSION['DateReservation'] = $year."-".$month."-".$day;
        header("Location: PageAttente.php");
        $query2 = $mysqli->query($sql2);
        
    } else {
        echo '<meta http-equiv="refresh" content=0;URL="../index.php">';
        echo '<body onLoad="alert(\'Login ou Mot de Passe incorrect\')">';
    }

    if (($login == "admin" || $login == "root") && ($MDP == "admin" || $MDP == "root")){
        header("Location: PageAdmin.php");
    }

?>

</body>
</html>