<?php 
    session_start();
    //MNIST Logika - (Makai Balázs)
    $_SESSION['kerdesekSzama'] = 10;
    $_SESSION['jóMegoldások'] = 0;

    // Ha nincs bejelentkezve
        //header("Location: /Project/login.php")
?>

<html>
    <head>
        <title>Főoldal</title>
    </head>
    <body>

        <!-- LOGIN RENDSZER (Linksch Balázs) -->  
    
        <!-- MNIST LOGIKA - (Makai Balázs)-->
        <a href="/Project/mnist.php">MNIST</a>

            <?php
             if(!empty($_SESSION['elozoJoMegoldasok'])) {
                  echo "<p>Legutolsó alkalommal ".$_SESSION['elozoJoMegoldasok']." jó megoldása volt</p>";
                 }
            ?> 

        <!-- PROFIL OLDAL - (Linksch Balázs) -->

        <!-- RANKLISTA KIÍRÁSA - (Galvács István) -->

    </body>
</html>
