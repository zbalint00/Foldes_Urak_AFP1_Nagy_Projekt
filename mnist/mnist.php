<?php
    // MNIST LOGIKA (Makai Balázs) 
    session_start();
    $_SESSION['elozoJoMegoldasok'];
    $_SESSION['imageSrc'] = "\Project\images\num_1977_[3].png";

    // Ha nincs bejelentkezve
        //header("Location: /Project/login.php")

    if($_SESSION['kerdesekSzama'] <= 0) {
        $_SESSION['elozoJoMegoldasok'] = $_SESSION['jóMegoldások'];

        //Dobja fel adatbázisba az eredményt

        header("Location: /Project/index.php");
    }

    if(!empty($_GET["number"])){
        $ertek = intval($_GET["number"]);
        if($ertek == $_SESSION['helyesErtek']) {
            $_SESSION["jóMegoldások"] = $_SESSION["jóMegoldások"] + 1;
            $_SESSION["kerdesekSzama"] = $_SESSION["kerdesekSzama"] - 1;
            header("Location: /Project/mnist.php");
        }
        else {
            $_SESSION["kerdesekSzama"] = $_SESSION["kerdesekSzama"] - 1;
            header("Location: /Project/mnist.php");
        }
    }

    function getRandomImage() {                     // Egyenlőre csak egy képet tud megmutatni
        $index = rand(0, 2000);

        $fileNameStart = "num_".$index."_"; 
        $path = '/Project/images/';
        /*$files = glob(".".$path."*.{png}");       // Valamiért semmiképpen sem működik a glob()


        if(count($files) > 0) {
            foreach($files as $file) {
                $info = pathinfo($file);
                $filename = $info["filename"];
                $temp = explode("[", $filename);
                $_SESSION['helyesErtek'] = $temp[1].substr(0, -1); 

                return $filename;
            }
        } else { */
            $_SESSION['helyesErtek'] = 9;
            return "num_418_[9]";
        // } 

    }
?>

<html>
    <head>
        <link rel="stylesheet" href="./Resources/button.css">
        <script>

        // SZÁMBILLENTYŰZET (Galvács István)

        function input(e) {
            var tbInput = document.getElementById("tbInput");
            tbInput.value = e.value;
        }

        function del() {
            var tbInput = document.getElementById("tbInput");
            tbInput.value = tbInput.value.
            substr(0, tbInput.value.length - 1);
        }

        </script>
        <title>Mnist</title>
    </head>
    <body>

        <!-- MNIST LOGIKA (Makai Balázs) -->

            <!-- <img src="\Project\images\num_1977_[3].png"> -->
            <img src="\Project\images\<?php echo getRandomImage(); ?>.png">

            <p> <?php echo $_SESSION["jóMegoldások"] ?> </p>
            <p> <?php echo $_SESSION["kerdesekSzama"] ?> </p>


            <form>
                <label for  = "number">Number:</label>
                <input type = "number" id ="tbInput" name ="number" min="0" max = "9" step = "1">
                <input type = "submit" value="Submit">
            </form>

        <!-- SZÁMBILLENTYŰZET (Galvács István) -->
        
        <div id="VirtualKey">
            <input class="button"id="btn1" type="button" value="1" onclick="input(this);" />
            <input class="button"id="btn2" type="button" value="2" onclick="input(this);"/>
            <input class="button"id="btn3" type="button"value="3" onclick="input(this);" />
            <br />
            <input class="button"id="btn4" type="button"value="4" onclick="input(this);" />
            <input class="button"id="btn5" type="button"value="5" onclick="input(this);" />
            <input class="button"id="btn6" type="button"value="6" onclick="input(this);" />
            <br />
            <input class="button"id="btn7" type="button"value="7" onclick="input(this);" />
            <input class="button"id="btn8" type="button"value="8" onclick="input(this);" />
            <input class="button"id="btn9" type="button"value="9" onclick="input(this);" />
            <br />
            <input class="button"id="btn0" type="button"value="0" onclick="input(this)" />
            <input class="button"id="btnDel" type="button" value="Töröl " onclick="del();"style="width:65px" />
        </div>
    </body>
</html>
