<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--responsive design-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>TITRE</title>
</head>

<body>

<?php 
    session_start();
    
    
?>



    <div class="imgCentralTop">
        <p>Titre du site <br><span class="description">Description rapide du site</span></p>
    </div>

    <div class="wrapper2">
        <form>
            <h2>Merci pour votre réservation</h2>
            <br>
            
            <footer>
                <a href="donneesPDF.php"><button type="button">Télécharger votre billet de réservation</button></a>
                <a href="PageChateau.php"><button type="button">Acceuil</button></a>
            </footer>
        </form>
    </div>


</body>
</html>