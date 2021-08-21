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
    session_destroy();

    echo '<meta http-equiv="refresh" content=0;URL="../index.php">'

?>

</html>