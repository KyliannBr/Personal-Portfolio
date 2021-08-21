<!<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../CSS/MonCompte.css" />
        <title>FastLocation - Mon Compte</title>
        
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

        
        <?php 
          session_start();
        ?>

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

      <div id="containerMega" class="container-fluid">

        <div class="login-box">
          <h2>M'inscrire</h2>
          <form action="verificationInscription.php" method="post">
            <div class="user-box">
              <input type="text" name="login" required>
              <label>Username</label>
            </div>
            <div class="user-box">
              <input type="password" name="password" required>
              <label>Password</label>
            </div>
            <div class="user-box">
              <input type="password" name="passwordRetape" required>
              <label>Confirm Password</label>
            </div>
            <button type="submit" style="display: flex; margin-left: auto; margin-right: auto; width: max-content;">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              M'inscrire
            </a>
            <button type="button" style="display: flex; margin-left: auto; margin-right: auto; width: max-content;" onClick="redirectConnexion();">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Me Connecter
              </a>
          </form>
        </div>
</div>

</div>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="//cdn.jsdelivr.net/npm/less" ></script>
      <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});
      </script>
    </body>
</html>