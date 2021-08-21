<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
    <link rel="stylesheet" href="CSS/style.css" />
    <title>TITRE</title>
</head>



<script>
       function redirectInscription() {
         window.location.href="PHP/inscription.php";
       }

       function AvoidSpace(event) {
            var k = event ? event.which : window.event.keyCode;
            if (k == 32) return false;
        }

     </script>

<body>

    <form  class="wrapper" action="PHP/verificationConnexion.php" method="POST">
        <div>
            <p>Connexion</p>
        </div>
        <div style="border-top: solid #e76642 3px;">
            <div class="input1"><input type="text" name="pseudo" placeholder="Pseudo" onkeypress="return AvoidSpace(event)"></div>
            <div class="input2"><input type="password" name="password" placeholder="Mot de Passe" onkeypress="return AvoidSpace(event)"></div>
        </div>
        <footer>
            <button type="submit">Me connecter</button>
            <button type="button" onClick="redirectInscription()">M'inscrire</button>
        </footer>
</form>

</body>
</html>