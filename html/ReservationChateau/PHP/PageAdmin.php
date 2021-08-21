<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/styleAdmin.css" />
    <title>TITRE</title>

    <?php 

    error_reporting(0);

    include("mysqlinfo.php");
    
    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $myDB);
    
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 

    $str1 = " à réservé le ";
    $str2 = " avec ";
    $str3 = " invité(s) ";

    $sql = "SELECT * FROM aile1;";
    $sqlA2 = "SELECT * FROM aile2;";
    $sqlA3 = "SELECT * FROM aile3;";
    $sqlA4 = "SELECT * FROM aile4;";

    $sql2 = "SELECT login, Verified FROM inscription WHERE Verified = 'false';";

    

    $query = $mysqli->query($sql);
    $queryA2 = $mysqli->query($sqlA2);
    $queryA3 = $mysqli->query($sqlA3);
    $queryA4 = $mysqli->query($sqlA4);

    $query2 = $mysqli->query($sql2);

    $array = Array();

    while($result2 = $query2->fetch_assoc()){
        $arrayloginInscription[] =$result2['login'];
        $arrayVerified[] = $result2['Verified'];
    }

    ?>
    </head>

    

    <body>

    <div>
        <h2>Verification de Compte</h2>
        <p>
                <?php 

                    foreach($arrayloginInscription as $value){
                                $sql3 = "INSERT INTO `inscription`(`Verified`) VALUES ('true') WHERE `login` = $value;";
                                echo '<p>Le compte "'.$value.'" n\'est pas vérifié</p><a href="verifiedInscription.php?verified=true&value='.$value.'">Verifier ce compte</a></br><a href="verifiedInscription.php?verified=false&value='.$value.'">Supprimer ce compte</a>';
                            }
                ?>
            </p>

    </div>
        <div>
            <h2>Dates de réservations prises dans l'aile 1</h2>
            <p>
                <?php 
                    while($result = $query->fetch_assoc()){
                        $arraylogin[] =$result['Login'];
                        $arrayDate[] =$result['dateReservation'];
                        $arrayNbrInvite[] =$result['NbrInvite'];

                        echo nl2br($result['Login'].$str1.$result['dateReservation'].$str2.$result['NbrInvite'].$str3. "\n");
                    }
                ?>
            </p>
            <h2>Dates de réservations prises dans l'aile 2</h2>
            <p>
                <?php 
                    while($resultA2 = $queryA2->fetch_assoc()){
                        $arraylogin[] =$resultA2['Login'];
                        $arrayDate[] =$resultA2['dateReservation'];
                        $arrayNbrInvite[] =$resultA2['NbrInvite'];

                        echo nl2br($resultA2['Login'].$str1.$resultA2['dateReservation'].$str2.$resultA2['NbrInvite'].$str3. "\n");
                    }
                ?>
            </p>
            <h2>Dates de réservations prises dans l'aile 3</h2>
            <p>
                <?php 
                    while($resultA3 = $queryA3->fetch_assoc()){
                        $arraylogin[] =$resultA3['Login'];
                        $arrayDate[] =$resultA3['dateReservation'];
                        $arrayNbrInvite[] =$resultA3['NbrInvite'];

                        echo nl2br($resultA3['Login'].$str1.$resultA3['dateReservation'].$str2.$resultA3['NbrInvite'].$str3. "\n");
                    }
                ?>
            </p>
            <h2>Dates de réservations prises dans l'aile 4</h2>
            <p>
                <?php 
                    while($resultA4 = $queryA4->fetch_assoc()){
                        $arraylogin[] =$resultA4['Login'];
                        $arrayDate[] =$resultA4['dateReservation'];
                        $arrayNbrInvite[] =$resultA4['NbrInvite'];

                        echo nl2br($resultA4['Login'].$str1.$resultA4['dateReservation'].$str2.$resultA4['NbrInvite'].$str3. "\n");
                    }
                ?>
            </p>
        </div>    
    </body>
</html>