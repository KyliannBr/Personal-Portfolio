<!<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../CSS/Catalogue.css" />
        <title>FastLocation - Catalogue</title>

        <?php session_start(); ?>        

        <script type="text/javascript">
          function DisplayNonConnecter() {
            document.getElementById('MonCompteButtonNavBarre').style.display = "content";
            document.getElementById('MonCompteButton').style.display = "content";
            document.getElementById('dropdownSessionConnecterDeconnecter').style.display = "none";
          }

          function DisplayConnecter() {
            document.getElementById('MonCompteButtonNavBarre').style.display = "none";
            document.getElementById('MonCompteButton').style.display = "content";
            document.getElementById('dropdownSessionConnecterDeconnecter').style.display = "content";
          }

          function CarsConnecter() {
            document.getElementById('1').href = "Reservation.php?voitureChoisie=R8 V10 Decennium";
            document.getElementById('2').href = "Reservation.php?voitureChoisie=RSQ8 ABT";
            document.getElementById('3').href = "Reservation.php?voitureChoisie=RS7 Sportback";
            document.getElementById('4').href = "Reservation.php?voitureChoisie=RS3 Sportback";
            document.getElementById('5').href = "Reservation.php?voitureChoisie=TT RS Coupe";

            document.getElementById('6').href = "Reservation.php?voitureChoisie=M8 Competition Coupe";
            document.getElementById('7').href = "Reservation.php?voitureChoisie=X6 M Competition";
            document.getElementById('8').href = "Reservation.php?voitureChoisie=M5 Competition";
            document.getElementById('9').href = "Reservation.php?voitureChoisie=M4 Competition Coupe";
            document.getElementById('10').href = "Reservation.php?voitureChoisie=M2 Competition";

            document.getElementById('11').href = "Reservation.php?voitureChoisie=A45 S AMG";
            document.getElementById('12').href = "Reservation.php?voitureChoisie=C63 S";
            document.getElementById('13').href = "Reservation.php?voitureChoisie=G63 AMG";
            document.getElementById('14').href = "Reservation.php?voitureChoisie=GT Coupe";
            document.getElementById('15').href = "Reservation.php?voitureChoisie=Classe S Sedan";

            document.getElementById('16').href = "Reservation.php?voitureChoisie=Model 3";
            document.getElementById('17').href = "Reservation.php?voitureChoisie=Cybertruck ";
            document.getElementById('18').href = "Reservation.php?voitureChoisie=Model S";
            document.getElementById('19').href = "Reservation.php?voitureChoisie=Model X";
            document.getElementById('20').href = "Reservation.php?voitureChoisie=Model Y";

            document.getElementById('21').href = "Reservation.php?voitureChoisie=Golf 8 R";
            document.getElementById('22').href = "Reservation.php?voitureChoisie=T-ROC R";
            document.getElementById('23').href = "Reservation.php?voitureChoisie=E-Golf";
            document.getElementById('24').href = "Reservation.php?voitureChoisie=Tiguan R";
            document.getElementById('25').href = "Reservation.php?voitureChoisie=Golf 8 GTI";
          }

          function CarsNonConnecter() {
            document.getElementById('1').href = "MonCompte.php";
            document.getElementById('2').href = "MonCompte.php";
            document.getElementById('3').href = "MonCompte.php";
            document.getElementById('4').href = "MonCompte.php";
            document.getElementById('5').href = "MonCompte.php";
            document.getElementById('6').href = "MonCompte.php";
            document.getElementById('7').href = "MonCompte.php";
            document.getElementById('8').href = "MonCompte.php";
            document.getElementById('9').href = "MonCompte.php";
            document.getElementById('10').href = "MonCompte.php";
            document.getElementById('11').href = "MonCompte.php";
            document.getElementById('12').href = "MonCompte.php";
            document.getElementById('13').href = "MonCompte.php";
            document.getElementById('14').href = "MonCompte.php";
            document.getElementById('15').href = "MonCompte.php";
            document.getElementById('16').href = "MonCompte.php";
            document.getElementById('17').href = "MonCompte.php";
            document.getElementById('18').href = "MonCompte.php";
            document.getElementById('19').href = "MonCompte.php";
            document.getElementById('20').href = "MonCompte.php";
            document.getElementById('21').href = "MonCompte.php";
            document.getElementById('22').href = "MonCompte.php";
            document.getElementById('23').href = "MonCompte.php";
            document.getElementById('24').href = "MonCompte.php";
            document.getElementById('25').href = "MonCompte.php";
          }

          function deconnexion() {
            window.location.href="deconnexion.php"
          }

          </script> 


    </head>

    <body onload="<?php if(empty($_SESSION['connecter']) === true){echo 'DisplayNonConnecter();';}else{echo 'DisplayConnecter();';} ?>">
 
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
              <a class="nav-link dropdown-toggle active" href="Catalogue.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catalogue
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#audi">Audi</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#bmw">BMW</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#mercedes">Mercedes</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#tesla">Tesla</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#volkswagen">Volkswagen</a>
              </div>
            </li>
            <li class="nav-item" id="MonCompteButtonNavBarre">                                 
              <a class="nav-link" href="MonCompte.php">Mon Compte</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0 mr-5">
          <a href="MonCompte.php" style="<?php if(empty($_SESSION['connecter']) === true){echo 'display: content;';}else{echo 'display: none;';} ?>"><button class="btn btn-outline-warning my-2 my-sm-0" type="button">Me Connecter</button></a></div>
            <div id="dropdownSessionConnecterDeconnecter">
            <li class="nav-item dropdown mr-5" style="list-style: none; text-align: right;">
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

          <div id="containerCenter"><p id="audi">Audi</p></div>

            <a id="1" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container1" class="container-fluid"><p>R8 V10 Decennium</p></div></a>
            <a id="2" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container2" class="container-fluid"><p>RSQ8 ABT</p></div></a>
            <a id="3" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container3" class="container-fluid"><p>RS7 Sportback</p></div></a>
            <a id="4" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container4" class="container-fluid"><p>RS3 Sportback</p></div></a>
            <a id="5" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container5" class="container-fluid"><p>TT RS Plus Coupé</p></div></a>
          
          <div id="containerCenter"><p id="bmw">BMW</p></div>

            <a id="6" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container6" class="container-fluid"><p>M8 Competition Coupé</p></div></a>
            <a id="7" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container7" class="container-fluid"><p>X6 M Competition</p></div></a>
            <a id="8" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container8" class="container-fluid"><p>M5 Competition</p></div></a>
            <a id="9" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container9" class="container-fluid"><p>M4 Competition Coupé</p></div></a>
            <a id="10" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container10" class="container-fluid"><p>M2 Competition</p></div></a>

          <div id="containerCenter"><p id="mercedes">Mercedes</p></div>

            <a id="11" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container11" class="container-fluid"><p>A45 S AMG</p></div></a>
            <a id="12" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container12" class="container-fluid"><p>C63 S</p></div></a>
            <a id="13" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container13" class="container-fluid"><p>G63 AMG</p></div></a>
            <a id="14" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container14" class="container-fluid"><p>GT Coupé</p></div></a>
            <a id="15" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container15" class="container-fluid"><p>Classe S Sedan</p></div></a>

          <div id="containerCenter"><p id="tesla">Tesla</p></div>

            <a id="16" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container16" class="container-fluid"><p>Model 3</p></div></a>
            <a id="17" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container17" class="container-fluid"><p>Cybertruck</p></div></a>
            <a id="18" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container18" class="container-fluid"><p>Model S</p></div></a>
            <a id="19" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container19" class="container-fluid"><p>Model X</p></div></a>
            <a id="20" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container20" class="container-fluid"><p>Model Y</p></div></a>

          <div id="containerCenter"><p id="volkswagen">Volkswagen</p></div>

            <a id="21" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container21" class="container-fluid"><p>Golf 8 R</p></div></a>
            <a id="22" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container22" class="container-fluid"><p>T-ROC R</p></div></a>
            <a id="23" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container23" class="container-fluid"><p>E-Golf</p></div></a>
            <a id="24" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container24" class="container-fluid"><p>Tiguan R</p></div></a>
            <a id="25" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container25" class="container-fluid"><p>Golf 8 GTI</p></div></a>

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