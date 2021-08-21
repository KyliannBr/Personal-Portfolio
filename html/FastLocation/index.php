<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/index.css" />
        <title>FastLocation - Accueil</title>

        <?php session_start(); ?>

        <script type="text/javascript">

          function DisplayNonConnecter() {
            document.getElementById('Reservation').style.display = "none";
            document.getElementById('MonCompteButtonNavBarre').style.display = "content";
            document.getElementById('MonCompteButton').style.display = "content";
            document.getElementById('dropdownSessionConnecterDeconnecter').style.display = "none";
          }

          function CarsNonConnecter() {
            document.getElementById('1').href = "PHP/MonCompte.php";
            document.getElementById('2').href = "PHP/MonCompte.php";
            document.getElementById('3').href = "PHP/MonCompte.php";
            document.getElementById('4').href = "PHP/MonCompte.php";
          }

          function CarsConnecter() {
            document.getElementById('1').href = "PHP/Reservation.php?voitureChoisie=R8 V10 Decennium";
            document.getElementById('2').href = "PHP/Reservation.php?voitureChoisie=M8 Competition Coupe";
            document.getElementById('3').href = "PHP/Reservation.php?voitureChoisie=Model X";
            document.getElementById('4').href = "PHP/Reservation.php?voitureChoisie=GT Coupe";
          }

          function DisplayConnecter() {
            document.getElementById('Reservation').style.display = "none";
            document.getElementById('MonCompteButtonNavBarre').style.display = "none";
            document.getElementById('MonCompteButton').style.display = "none";
            document.getElementById('dropdownSessionConnecterDeconnecter').style.display = "content";
          }

          function DisplayConnecter2() {
            R8V10Decennium();
            M8CompetitionCoupe();
            ModelX();
            GTCoupe();
          }

          function deconnexion() {
            window.location.href="PHP/deconnexion.php"
          }

        </script>
        
    </head>

    <body onload="<?php if(empty($_SESSION['connecter']) === true){echo 'DisplayNonConnecter()';}else{echo 'DisplayConnecter()';} ?>">

          <!-- --------------------------------------------------------------- NAVBARRE ---------------------------------------------------------------  -->

      <nav class="navbar-expand-lg navbar sticky-top navbar-dark bg-dark">
        <a class="navbar-brand" id="FP" href="index.php"><i>FastLocation</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <li class="nav-item">                                 
              <a class="nav-link active" href="index.php">Accueil</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="Catalogue.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalogue</a>
              
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="PHP/Catalogue.php#audi">Audi</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="PHP/Catalogue.php#bmw">BMW</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="PHP/Catalogue.php#mercedes">Mercedes</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="PHP/Catalogue.php#tesla">Tesla</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="PHP/Catalogue.php#volkswagen">Volkswagen</a>
              </div>

            </li>

            <li class="nav-item" id="Reservation">                                 
              <a class="nav-link" href="PHP/Reservation.php">Reservation</a>
            </li>

            <li class="nav-item" id="MonCompteButtonNavBarre">                                 
              <a class="nav-link" href="PHP/MonCompte.php">Mon Compte</a>
            </li> 

          </ul>

          <form class="form-inline my-2 my-lg-0 mr-5">

            <a href="PHP/MonCompte.php" id="MonCompteButton">
              <button class="btn btn-outline-warning my-2 my-sm-0" type="button">Me Connecter</button>
            </a>

            <div id="dropdownSessionConnecterDeconnecter">

            <li class="nav-item dropdown" style="list-style: none; text-align: right;">
              <button class="btn btn-outline-warning my-2 my-sm-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['login']; ?>
              </button>
              
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" role="button" onClick="deconnexion();">Me déconnecter</a>
              </div>
            </li>

          </form>
        </div>
      
      </nav>
      
      <!-- --------------------------------------------------------------- Images Défilantes ---------------------------------------------------------------  -->

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="CSS/un.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>Normes écologiques</h5>
              <p>Tout nos véhicules sont équipés de filtres à particules et respectes les standards écologique.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="CSS/trois.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Autonomie redoutable</h5>
              <p>Certains véhicules de la gammes Tesla dispose d'une autonomie de 1000km.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="CSS/quatre.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Cliquez, et c'est réservé !</h5>
              <p>En un clic vous pouvez réserver le véhicule de votre choix.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="CSS/cinq.jpg" class="d-block w-100" alt="...">
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

      <!-- --------------------------------------------------------------- Container 1 ---------------------------------------------------------------  -->

      <div id="containerMega" class="container-fluid">
        <div id="containerSemi1" class="container1">
          <div id="contianerPresentation" class="container-fluid">
            <p><i>FastLocation</i> est une entreprise de location de voitures de luxe qui propose a ses clients une large gamme de vehicules premium.
              <br>
              Ce site web a été créer par une équipe de 4 jeunes étudiants : <br>
              &nbsp;&nbsp;&nbsp; - Arbouche Selim
              &nbsp;&nbsp;&nbsp; - Brisson Kyliann
              &nbsp;&nbsp;&nbsp; - Guenerin Yann
              &nbsp;&nbsp;&nbsp; - Polonia Damien
            </p>
          </div>
        </div>
      </div>

      <!-- --------------------------------------------------------------- Container 2 ---------------------------------------------------------------  -->

      <div id="containerMega" class="container-fluid">

        <div id="containerSemi1" class="container1">
          <a id="1" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container1Audi" class="container-fluid"><p>R8 V10 Decennium</p></div></a>
          <a id="2" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container2BMW" class="container-fluid"><p>M8 Competition Coupé</p></div></a>
          <a id="3" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container3Tesla" class="container-fluid"><p>Model X</p></div></a>
          <a id="4" onClick ="<?php if(empty($_SESSION['connecter']) === true){echo 'CarsNonConnecter();';}else{echo 'CarsConnecter();';} ?>"><div id="container4Mercedes" class="container-fluid"><p>GT Coupé</p></div></a>
        </div>
      </div>

      <!-- --------------------------------------------------------------- Moyens de paiments ---------------------------------------------------------------  -->

      <footer>
        <div id="footer" class="container-fluid">
          <div id="containerMdp" class="container-fluid">
            <h3 id="MDP" class="container-fluid">MOYENS DE PAIMENTS</h3>
          </div>
          
          <div id="containerImgMdp" class="container-fluid">
            <img class="imgMpd" src="CSS/MoyensPaiement.png" alt="moyens de paiement" width="20%">
          </div>
        </div>
      </footer>


      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>