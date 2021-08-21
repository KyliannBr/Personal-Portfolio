<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>TITRE</title>
</head>

<script>
       function redirectConnexion() {
         window.location.href="../index.php";
       }

       function AvoidSpace(event) {
            var k = event ? event.which : window.event.keyCode;
            if (k == 32) return false;
        }


     </script>

<body>

    <form  class="wrapper" action="verificationInscription.php" method="POST">
        <div>
            <p>M'inscrire :</p>
        </div>
        <div style="border-top: solid #e76642 3px;">
            <div class="input1"><input type="text" name="pseudo" placeholder="Pseudo" onkeypress="return AvoidSpace(event)" required></div>
            <div class="input2"><input type="password" name="password" placeholder="Mot de Passe" onkeypress="return AvoidSpace(event)" required></div>
            <div class="input3"><input type="password" name="passwordRetape" placeholder="Retappez Mot de Passe" onkeypress="return AvoidSpace(event)" style="height: 25px;" required></div>
        </div>
        <footer>
            <button type="submit">M'inscrire</button>
            <button type="button" onClick="redirectConnexion()">Me Connecter</button>
        </footer>
</form>