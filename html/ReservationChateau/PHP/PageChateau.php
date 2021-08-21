<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>TITRE</title>

    <link rel="stylesheet" type="text/css" href="../CSS/styleCalendar.css">
    <script type="text/javascript" src="../JS/script.js"></script>

</head>

<body onload="startTime()">

<?php 
    session_start();   
    error_reporting(0);

    include("mysqlinfo.php");
    
    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $myDB);
    
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 

/*

    $janvier = '01';
    $fevrier = '02';
    $mars = '03';
    $avril = '04';
    $mai = '05';
    $juin = '06';
    $juillet = '07';
    $aout = '08';
    $septembre = '09';
    $octobre = '10';
    $novembre = '11';
    $decembre = '12';
*/
    $annee = substr($_SESSION['DateReservation'], 0, 4);
    $mois = substr($_SESSION['DateReservation'],5,-3);
    $jour = substr($_SESSION['DateReservation'],8,8);

    #echo $annee."-- ".$mois."--".$jour."--".$jourreserve." ";
    #echo $_SESSION['DateReservation'];

    $jourreserve = $annee."-".$mois."-";
/*
    $fev29 = "2024" || "2028" || "2032"; 

    $posAnnee = strpos($_SESSION['DateReservation'], $fev29);

    $posJan = strpos($_SESSION['DateReservation'], $janvier);
    $posFev = strpos($_SESSION['DateReservation'], $fevrier);
    $posMar = strpos($_SESSION['DateReservation'], $mars);
    $posAvr = strpos($_SESSION['DateReservation'], $avril);
    $posMai = strpos($_SESSION['DateReservation'], $mai);
    $posJuin = strpos($_SESSION['DateReservation'], $juin);
    $posJuil = strpos($_SESSION['DateReservation'], $juillet);
    $posAou = strpos($_SESSION['DateReservation'], $aout);
    $posSep = strpos($_SESSION['DateReservation'], $septembre);
    $posOct = strpos($_SESSION['DateReservation'], $octobre);
    $posNov = strpos($_SESSION['DateReservation'], $novembre);
    $posDec = strpos($_SESSION['DateReservation'], $decembre);
*/
    $sql = "SELECT dateReservation FROM reservation";
    $sqlAile1 = "SELECT dateReservation FROM aile1"; 
    $sqlAile2 = "SELECT dateReservation FROM aile2";
    $sqlAile3 = "SELECT dateReservation FROM aile3";
    $sqlAile4 = "SELECT dateReservation FROM aile4";

    $query = $mysqli->query($sql);
    $queryAile1 = $mysqli->query($sqlAile1);
    $queryAile2 = $mysqli->query($sqlAile2);
    $queryAile3 = $mysqli->query($sqlAile3);
    $queryAile4 = $mysqli->query($sqlAile4);

    while($result = $query->fetch_assoc()){
        $jourEnregistre[] = $result['dateReservation'];
    }  

    while($resultAile1 = $queryAile1->fetch_assoc()){
      $dateReservationAile1[] = $result['dateReservation'];
    }  
    while($resultAile2 = $queryAile2->fetch_assoc()){
      $dateReservationAile2[] = $result['dateReservation'];
    } 
    while($resultAile3 = $queryAile3->fetch_assoc()){
      $dateReservationAile3[] = $result['dateReservation'];
    } 
    while($resultAile4 = $queryAile4->fetch_assoc()){
      $dateReservationAile4[] = $result['dateReservation'];
    } 

?>


    <div class="imgCentralTop">
        <p>Titre du site <br><span class="description">Description rapide du site</span></p>
    </div>

    <div class="wrapper2">
        <form enctype = "multipart/form-data" method="POST" style="display: <?php if(isset($_POST["typeReservation"])){echo "none;";} else {echo 'content;';}?>">
            <h2><?php if($_SESSION['reservationPrise'] == 'ok') {echo "Telecharger Votre Billet";} else {echo "Formulaire de Réservation";} ?></h2>

            <div class="typeReservation">
                <label for="typeReservation" style="display: <?php if($_SESSION['reservationPrise'] == 'ok') {echo "none";} else {echo "content";} ?>">Type de réservation : </label>
                  <div style="display: <?php if($_SESSION['reservationPrise'] == 'ok') {echo "none";} else {echo "content";} ?>">
                    <label for="famille">Famille</label>
                    <input type="radio" id="famille" name="typeReservation" value="famille" checked>
                  </div>

                  <div style="display: <?php if($_SESSION['reservationPrise'] == 'ok') {echo "none";} else {echo "content";} ?>">
                    <label for="couple">Couple</label>
                    <input type="radio" id="couple" name="typeReservation" value="couple">
                  </div>

                  <div style="display: <?php if($_SESSION['reservationPrise'] == 'ok') {echo "none";} else {echo "content";} ?>">
                    <label for="individuel">Individuel</label>
                    <input type="radio" id="individuel" name="typeReservation" value="individuel">
                  </div>
                  
                  <footer>
                <button type="submit" style="display: <?php if($_SESSION['reservationPrise'] == 'ok') {echo "none";} else {echo "content";} ?>">Envoyer</button>
                <a href="donneesPDF.php"><button type="button" style="display: <?php if($_SESSION['reservationPrise'] == 'ok') {echo "content";} else {echo "none";} ?>">Télécharger mon billet de réservation</button></a>
                <a href="deconnexion.php"><button type="button">Déconnexion</button></a>
                </footer>
            </div>
            </form>

            <nav style="display: <?php if(isset($_POST["typeReservation"])){echo "content;"; $_SESSION["typeReservation"] = $_POST["typeReservation"];} else {echo "none;";} ?>">
          <form action="verificationReservations.php" method="POST">
            <div class="login">
                <label for="login">Login :</label>
                <input type="text" name="Login" value="<?php echo $_SESSION['login'];?>" required>
            </div>
            
            <div class="dateReservation">
                <label for="dateReservation">Date de réservation :</label>
                <input type="date" name="dateReservation" required>
            </div>
            <div class="nombrePersonnes">
                <label for="nombrePersonnesInvitees">Nombre de personnes invitées :</label>
                <input type="number" name="nombrePersonnesInvitees" class="inputNbrPersonnesInvitees" value="<?php if($_POST["typeReservation"] == 'couple'){echo 2;} else if($_POST["typeReservation"] == 'individuel'){echo 1;} else {echo 0;} ?>">
            </div>
            
            <footer>
                <button type="submit">Envoyer</button>
                <a href="donneesPDF.php"><button type="button" style="display: <?php if($_SESSION['reservationPrise'] == 'ok') {echo "content";} else {echo "none";} ?>">Télécharger mon billet de réservation</button></a>
                <a href="deconnexion.php"><button type="button">Déconnexion</button></a>
            </footer>
        </form>

    <form>
    <div class="container" id="moisCalendar" style="display:content">
      <div class="card">
        <div class="front">
          <div class="contentfront">
            <div class="month">
              <table>
                  <center style="margin-bottom: 5px; color: white; font-family: system-ui; border-bottom: 2px solid white; padding-bottom: 5px;"><?php if($posJan === true){
        echo "Janvier";
    } else if ($posFev === true){
        echo "Fevrier";
    } else if ($posMar === true){
        echo "Mars";
    } else if ($posAvr === true){
        echo "Avril";
    } else if ($posMai === true){
        echo "Mai";
    } else if ($posJuin === true){
        echo "Juin";
    } else if ($posJuil === true){
        echo "Juillet";
    } else if ($posAou === true){
        echo "Aout";
    } else if ($posSep === true){
        echo "Septembre";
    } else if ($posOct === true){
        echo "Octobre";
    } else if ($posNov === true){
        echo "Novembre";
    } else if ($posDec === true){
        echo "Decembre";
    } else {
        echo "Dates Réservées ";
    }?></center>
                <tr class="whiteTr">
                  <th style="color:<?php if(in_array($jourreserve."01", $jourEnregistre)){echo "red";}else{echo "white";} ?>">1</th>
                  <th style="color:<?php if(in_array($jourreserve."02", $jourEnregistre)){echo "red";}else{echo "white";} ?>">2</th>
                  <th style="color:<?php if(in_array($jourreserve."03", $jourEnregistre)){echo "red";}else{echo "white";} ?>">3</th>
                  <th style="color:<?php if(in_array($jourreserve."04", $jourEnregistre)){echo "red";}else{echo "white";} ?>">4</th>
                  <th style="color:<?php if(in_array($jourreserve."05", $jourEnregistre)){echo "red";}else{echo "white";} ?>">5</th>
                  <th style="color:<?php if(in_array($jourreserve."06", $jourEnregistre)){echo "red";}else{echo "white";} ?>">6</th>
                  <th style="color:<?php if(in_array($jourreserve."07", $jourEnregistre)){echo "red";}else{echo "white";} ?>">7</th>
                </tr>
                <tr class="whiteTr">
                  <th style="color:<?php if(in_array($jourreserve."08", $jourEnregistre)){echo "red";}else{echo "white";} ?>">8</th>
                  <th style="color:<?php if(in_array($jourreserve."09", $jourEnregistre)){echo "red";}else{echo "white";} ?>">9</th>
                  <th style="color:<?php if(in_array($jourreserve."10", $jourEnregistre)){echo "red";}else{echo "white";} ?>">10</th>
                  <th style="color:<?php if(in_array($jourreserve."11", $jourEnregistre)){echo "red";}else{echo "white";} ?>">11</th>
                  <th style="color:<?php if(in_array($jourreserve."12", $jourEnregistre)){echo "red";}else{echo "white";} ?>">12</th>
                  <th style="color:<?php if(in_array($jourreserve."13", $jourEnregistre)){echo "red";}else{echo "white";} ?>">13</th>
                  <th style="color:<?php if(in_array($jourreserve."14", $jourEnregistre)){echo "red";}else{echo "white";} ?>">14</th>
                </tr>
                <tr class="whiteTr">
                  <th style="color:<?php if(in_array($jourreserve."15", $jourEnregistre)){echo "red";}else{echo "white";} ?>">15</th>
                  <th style="color:<?php if(in_array($jourreserve."16", $jourEnregistre)){echo "red";}else{echo "white";} ?>">16</th>
                  <th style="color:<?php if(in_array($jourreserve."17", $jourEnregistre)){echo "red";}else{echo "white";} ?>">17</th>
                  <th style="color:<?php if(in_array($jourreserve."18", $jourEnregistre)){echo "red";}else{echo "white";} ?>">18</th>
                  <th style="color:<?php if(in_array($jourreserve."19", $jourEnregistre)){echo "red";}else{echo "white";} ?>">19</th>
                  <th style="color:<?php if(in_array($jourreserve."20", $jourEnregistre)){echo "red";}else{echo "white";} ?>">20</th>
                  <th style="color:<?php if(in_array($jourreserve."21", $jourEnregistre)){echo "red";}else{echo "white";} ?>">21</th>
                </tr>
                <tr class="whiteTr">
                  <th style="color:<?php if(in_array($jourreserve."22", $jourEnregistre)){echo "red";}else{echo "white";} ?>">22</th>
                  <th style="color:<?php if(in_array($jourreserve."23", $jourEnregistre)){echo "red";}else{echo "white";} ?>">23</th>
                  <th style="color:<?php if(in_array($jourreserve."24", $jourEnregistre)){echo "red";}else{echo "white";} ?>">24</th>
                  <th style="color:<?php if(in_array($jourreserve."25", $jourEnregistre)){echo "red";}else{echo "white";} ?>">25</th>
                  <th style="color:<?php if(in_array($jourreserve."26", $jourEnregistre)){echo "red";}else{echo "white";} ?>">26</th>
                  <th style="color:<?php if(in_array($jourreserve."27", $jourEnregistre)){echo "red";}else{echo "white";} ?>">27</th>
                  <th style="color:<?php if(in_array($jourreserve."28", $jourEnregistre)){echo "red";}else{echo "white";} ?>">28</th>
                </tr>
                </tr>
                <tr class="whiteTr">
                  <th style="color:<?php if(in_array($jourreserve."29", $jourEnregistre)){echo "red";}else{echo "white";} ?>">29</th>
                  <th style="color:<?php if(in_array($jourreserve."30", $jourEnregistre)){echo "red";}else{echo "white";} ?>">30</th>
                  <th style="color:<?php if(in_array($jourreserve."31", $jourEnregistre)){echo "red";}else{echo "white";} ?>">31</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </table>
            </div>
            <div class="date">
              <div class="datecont">
                <div id="date"></div>
                <div id="day"></div>
                <div id="month"></div>
                <i class="fa fa-pencil edit" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="back">
          <div class="contentback">
            <div class="backcontainer">
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    </nav>

</body>
</html>
