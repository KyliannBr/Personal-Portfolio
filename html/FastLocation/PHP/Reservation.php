<!<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../CSS/Reservations.css" />
        <title>FastLocation - Reservation</title>

        <?php
          session_start(); 
          $_SESSION['voitureChoisie'] = $_GET['voitureChoisie'];

          include("mysqlinfo.php");
          
          // Create connection
          $mysqli = new mysqli($servername, $username, $password, $myDB);
          
          // Check connection
          if ($mysqli->connect_error) {
              die("Connection failed: " . $mysqli->connect_error);
          }
      
          $sql = "SELECT immatriculation, marque, modele, couleur, chevaux FROM voiture";
      
          $query = $mysqli->query($sql);
      
          $array = Array();
          while($result = $query->fetch_assoc()){
              $arrayImmatriculation[] =$result['immatriculation'];
              $arrayMarque[] =$result['marque'];
              $arrayModele[] = $result['modele'];
              $arrayCouleur[] = $result['couleur'];
              $arrayChevaux[] = $result['chevaux'];
          }
      
      if ($_SESSION['voitureChoisie'] == 'R8 V10 Decennium') {
        $marque = $arrayMarque[0];
        $modele = $arrayModele[0];
        $couleur = $arrayCouleur[0];
        $immatriculation = $arrayImmatriculation[0];
        $chevaux = $arrayChevaux[0]; 
      } else if ($_SESSION['voitureChoisie'] == 'RSQ8 ABT') {
        $marque = $arrayMarque[1];
        $modele = $arrayModele[1];
        $couleur = $arrayCouleur[1];
        $immatriculation = $arrayImmatriculation[1];
        $chevaux = $arrayChevaux[1]; 
      } else if ($_SESSION['voitureChoisie'] == 'RS7 Sportback') {
        $marque = $arrayMarque[2];
        $modele = $arrayModele[2];
        $couleur = $arrayCouleur[2];
        $immatriculation = $arrayImmatriculation[2];
        $chevaux = $arrayChevaux[2]; 
      } else if ($_SESSION['voitureChoisie'] == 'RS3 Sportback') {
        $marque = $arrayMarque[3];
        $modele = $arrayModele[3];
        $couleur = $arrayCouleur[3];
        $immatriculation = $arrayImmatriculation[3];
        $chevaux = $arrayChevaux[3]; 
      } else if ($_SESSION['voitureChoisie'] == 'TT RS Coupe') {
        $marque = $arrayMarque[4];
        $modele = $arrayModele[4];
        $couleur = $arrayCouleur[4];
        $immatriculation = $arrayImmatriculation[4];
        $chevaux = $arrayChevaux[4]; 
      } else if ($_SESSION['voitureChoisie'] == 'M8 Competition Coupe') {
        $marque = $arrayMarque[5];
        $modele = $arrayModele[5];
        $couleur = $arrayCouleur[5];
        $immatriculation = $arrayImmatriculation[5];
        $chevaux = $arrayChevaux[5]; 
      } else if ($_SESSION['voitureChoisie'] == 'X6 M Competition') {
        $marque = $arrayMarque[6];
        $modele = $arrayModele[6];
        $couleur = $arrayCouleur[6];
        $immatriculation = $arrayImmatriculation[6];
        $chevaux = $arrayChevaux[6]; 
      } else if ($_SESSION['voitureChoisie'] == 'M5 Competition') {
        $marque = $arrayMarque[7];
        $modele = $arrayModele[7];
        $couleur = $arrayCouleur[7];
        $immatriculation = $arrayImmatriculation[7];
        $chevaux = $arrayChevaux[7]; 
      } else if ($_SESSION['voitureChoisie'] == 'M4 Competition Coupe') {
        $marque = $arrayMarque[8];
        $modele = $arrayModele[8];
        $couleur = $arrayCouleur[8];
        $immatriculation = $arrayImmatriculation[8];
        $chevaux = $arrayChevaux[8]; 
      } else if ($_SESSION['voitureChoisie'] == 'M2 Competition') {
        $marque = $arrayMarque[9];
        $modele = $arrayModele[9];
        $couleur = $arrayCouleur[9];
        $immatriculation = $arrayImmatriculation[9];
        $chevaux = $arrayChevaux[9]; 
      } else if ($_SESSION['voitureChoisie'] == 'A45 S AMG') {
        $marque = $arrayMarque[10];
        $modele = $arrayModele[10];
        $couleur = $arrayCouleur[10];
        $immatriculation = $arrayImmatriculation[10];
        $chevaux = $arrayChevaux[10]; 
      } else if ($_SESSION['voitureChoisie'] == 'C63 S') {
        $marque = $arrayMarque[11];
        $modele = $arrayModele[11];
        $couleur = $arrayCouleur[11];
        $immatriculation = $arrayImmatriculation[11];
        $chevaux = $arrayChevaux[11]; 
      } else if ($_SESSION['voitureChoisie'] == 'G63 AMG') {
        $marque = $arrayMarque[12];
        $modele = $arrayModele[12];
        $couleur = $arrayCouleur[12];
        $immatriculation = $arrayImmatriculation[12];
        $chevaux = $arrayChevaux[12]; 
      } else if ($_SESSION['voitureChoisie'] == 'GT Coupe') {
        $marque = $arrayMarque[13];
        $modele = $arrayModele[13];
        $couleur = $arrayCouleur[13];
        $immatriculation = $arrayImmatriculation[13];
        $chevaux = $arrayChevaux[13]; 
      } else if ($_SESSION['voitureChoisie'] == 'Classe S Sedan') {
        $marque = $arrayMarque[14];
        $modele = $arrayModele[14];
        $couleur = $arrayCouleur[14];
        $immatriculation = $arrayImmatriculation[14];
        $chevaux = $arrayChevaux[14]; 
      } else if ($_SESSION['voitureChoisie'] == 'Model 3') {
        $marque = $arrayMarque[15];
        $modele = $arrayModele[15];
        $couleur = $arrayCouleur[15];
        $immatriculation = $arrayImmatriculation[15];
        $chevaux = $arrayChevaux[15]; 
      } else if ($_SESSION['voitureChoisie'] == 'Cybertruck') {
        $marque = $arrayMarque[16];
        $modele = $arrayModele[16];
        $couleur = $arrayCouleur[16];
        $immatriculation = $arrayImmatriculation[16];
        $chevaux = $arrayChevaux[16]; 
      } else if ($_SESSION['voitureChoisie'] == 'Model S') {
        $marque = $arrayMarque[17];
        $modele = $arrayModele[17];
        $couleur = $arrayCouleur[17];
        $immatriculation = $arrayImmatriculation[17];
        $chevaux = $arrayChevaux[17]; 
      } else if ($_SESSION['voitureChoisie'] == 'Model X') {
        $marque = $arrayMarque[18];
        $modele = $arrayModele[18];
        $couleur = $arrayCouleur[18];
        $immatriculation = $arrayImmatriculation[18];
        $chevaux = $arrayChevaux[18]; 
      } else if ($_SESSION['voitureChoisie'] == 'Model Y') {
        $marque = $arrayMarque[19];
        $modele = $arrayModele[19];
        $couleur = $arrayCouleur[19];
        $immatriculation = $arrayImmatriculation[19];
        $chevaux = $arrayChevaux[19]; 
      } else if ($_SESSION['voitureChoisie'] == 'Golf 8 R') {
        $marque = $arrayMarque[20];
        $modele = $arrayModele[20];
        $couleur = $arrayCouleur[20];
        $immatriculation = $arrayImmatriculation[20];
        $chevaux = $arrayChevaux[20]; 
      } else if ($_SESSION['voitureChoisie'] == 'T-ROC R') {
        $marque = $arrayMarque[21];
        $modele = $arrayModele[21];
        $couleur = $arrayCouleur[21];
        $immatriculation = $arrayImmatriculation[21];
        $chevaux = $arrayChevaux[21]; 
      } else if ($_SESSION['voitureChoisie'] == 'E-Golf') {
        $marque = $arrayMarque[22];
        $modele = $arrayModele[22];
        $couleur = $arrayCouleur[22];
        $immatriculation = $arrayImmatriculation[22];
        $chevaux = $arrayChevaux[22]; 
      } else if ($_SESSION['voitureChoisie'] == 'Tiguan R') {
        $marque = $arrayMarque[23];
        $modele = $arrayModele[23];
        $couleur = $arrayCouleur[23];
        $immatriculation = $arrayImmatriculation[23];
        $chevaux = $arrayChevaux[23]; 
      } else if ($_SESSION['voitureChoisie'] == 'Golf 8 GTI') {
        $marque = $arrayMarque[24];
        $modele = $arrayModele[24];
        $couleur = $arrayCouleur[24];
        $immatriculation = $arrayImmatriculation[24];
        $chevaux = $arrayChevaux[24]; 
      } else {
        header("Location: ../index.php");
      }


        ?>
        
        <script type="text/javascript">
          function DisplayNonConnecter() {
            document.getElementById('Reservation').style.display = "none";
            document.getElementById('MonCompteButtonNavBarre').style.display = "content";
            document.getElementById('MonCompteButton').style.display = "content";
            document.getElementById('dropdownSessionConnecterDeconnecter').style.display = "none";

          }

          function DisplayConnecter() {
            document.getElementById('Reservation').style.display = "none";
            document.getElementById('MonCompteButtonNavBarre').style.display = "none";
            document.getElementById('MonCompteButton').style.display = "none";
            document.getElementById('dropdownSessionConnecterDeconnecter').style.display = "content";
          }
          
          function ChoixVoitureNonConnecter() {
            window.location.href="PHP/MonCompte.php";
          }

          function ChoixVoitureConnecter() {
            window.location.href="PHP/Reservation.php";
          }

          function deconnexion() {
            window.location.href="deconnexion.php"
          }

        </script>

    </head>
    <body onload="<?php if(isset($_SESSION['connecter']) === false){echo 'DisplayNonConnecter()';}else{echo 'DisplayConnecter()';} ?>">

    <nav class="navbar-expand-lg navbar sticky-top navbar-dark bg-dark">
      <a class="navbar-brand" id="FP" href="../index.php"><i>FastLocation</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">                                 
              <a class="nav-link" href="../index.php">Accueil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="Catalogue.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catalogue
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Catalogue.php#audi">Audi</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Catalogue.php#bmw">BMW</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Catalogue.php#mercedes">Mercedes</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Catalogue.php#tesla">Tesla</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Catalogue.php#volkswagen">Volkswagen</a>
              </div>
            </li>
            <li class="nav-item" id="Reservation">                                 
              <a class="nav-link" href="Reservation.php">Reservation</a>
            </li>
            <li class="nav-item" id="MonCompteButtonNavBarre">                                 
              <a class="nav-link" href="MonCompte.php">Mon Compte</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0 mr-5">
            <a href="MonCompte.php" id="MonCompteButton"><button class="btn btn-outline-warning my-2 my-sm-0" type="button">Me Connecter</button></a>
            <div id="dropdownSessionConnecterDeconnecter">
            <li class="nav-item dropdown" style="list-style: none; text-align: right;">
              <button class="btn btn-outline-warning my-2 my-sm-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['login']; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" role="button" onClick="deconnexion();">Me déconnecter</a>
              </div>
            </li>
            <div>
          </form>
        </div>
    </nav>
      

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../CSS/un.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Normes écologiques</h5>
              <p>Tout nos véhicules sont équipés de filtres à particules et respectes les standards écologique.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../CSS/trois.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Autonomie redoutable</h5>
              <p>Certains véhicules de la gammes Tesla dispose d'une autonomie de 1000km.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../CSS/quatre.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Cliquez, et c'est réservé !</h5>
              <p>En un clic vous pouvez réserver le véhicule de votre choix.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../CSS/cinq.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Allons plus loin, tous ensemble</h5>
              <p>Nos clients les plus fidèles pourrons bénéficier d'une proposition de LOA.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div id="containerMega" class="container-fluid">
        <div id="containerSemi1" class="container1">
          <div id="contianerPresentation" class="container-fluid">
            <form action="donneesRecuperer.php" method="POST">
              <label for="Nom"> Nom 
                <input type="text" id="Nom" name="Nom" required />
              </label>
              <div class="dropdown-divider"></div>
              <label for="Prenom"> Prenom 
                <input type="text" id="Prenom" name="Prenom" required />
              </label>
              <div class="dropdown-divider"></div>
              <label for="DateNaissance"> Date de naissance  
                <input type="date" id="DateNaissance" name="DateNaissance" required />
              </label>
              <div class="dropdown-divider"></div>
              <label for="Login"> Connecter en tant que   
                <input type="text" id="Login" name="Login" required value="<?php echo $_SESSION['login']; ?>"/>
              </label>
              <div class="dropdown-divider"></div>
              <label for="VoitureChoisie"> Vous avez choisi notre    
                <input type="text" id="VoitureChoisie" name="voitureChoisie" required value="<?php echo $marque." ".$modele;?>"/>
              </label>
              <div class="dropdown-divider"></div>
              <label for="CouleurVoitureChoisie"> Coloris    
                <input type="text" id="CouleurVoitureChoisie" name="CouleurVoitureChoisie" required value="<?php echo $couleur; ?>"/>
              </label>
              <div class="dropdown-divider"></div>
              <label for="CouleurVoitureChoisie"> Immatriculé    
                <input type="text" id="CouleurVoitureChoisie" name="Immatriculation" required value="<?php echo $immatriculation; ?>"/>
              </label>
              <div class="dropdown-divider"></div>
              <label for="CouleurVoitureChoisie"> Avec une puissance de     
                <input type="text" id="CouleurVoitureChoisie" name="puissance" required value="<?php echo $chevaux.' Chevaux'; ?>"/>
              </label>
              <div class="dropdown-divider"></div>

              <button type="submit" style="display: flex; margin-left: auto; margin-right: auto; width: max-content;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Confirmer ma commande
          </button>
              


            </form>
          </div>
        </div>
      </div>

      <footer>
        <div id="footer" class="container-fluid">
          <div id="containerMdp" class="container-fluid">
            <h3 id="MDP" class="container-fluid">MOYENS DE PAIMENTS</h3>
          </div>
          <div id="containerImgMdp" class="container-fluid">
          <img class="imgMpd" src="../CSS/MoyensPaiement.png" alt="moyens de paiement" width="20%">
          </div>
        </div>
      </footer>


      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>