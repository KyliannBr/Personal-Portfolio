<!DOCTYPE html>
<html lang="fr" class="attente">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>TITRE</title>

    <?php

        session_start();

        include("mysqlinfo.php");
    
        // Create connection
        $mysqli = new mysqli($servername, $username, $password, $myDB);

        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        $to      = 'kyliann177@gmail.com';
        $subject = 'le sujet';
        $message = 'Bonjour !';
        $headers = 'From: webmaster@example.com' . "\r\n" .'Reply-To: webmaster@example.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();

        $login = $_SESSION['login'];

        $sql = "SELECT login, Verified FROM inscription WHERE login = '$login';";
    
        $query = $mysqli->query($sql);

        $array = Array();
        while($result = $query->fetch_assoc()){
            $arrayVerified[] = $result['Verified'];
        }

?>

</head>

<body>

<?php

if (in_array('true',$arrayVerified)) {
    header("Location: PageChateau.php");
} else if (in_array('false',$arrayVerified)) {
    #mail($to , $subject, $message, $headers);
    echo "<div><p>Merci d'attendre la validation de votre compte.<br> Un mail a été envoyé au propriétaire</p></div>"; 
}

?>



</body>

</html>