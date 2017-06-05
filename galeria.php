
<!DOCTYPE html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <title>Galeria</title>
    <style>
        .galeria
        {
            list-style-type: none;
            margin-top: 4%;


        }
        .obrazekGalerii
        {

            display: block;
            margin-left: 3%;
            margin-top: 3%;
            float: left;
            object-fit: cover;
            width:230px;
            height: 230px;


        }
    </style>

    <script type="text/javascript" src="galeria.js">
        // <![CDATA[
        var galeria = new Galeria('galeria', new Array(
            new Array(src="res/galeria/choirTwo.jpg" class="obrazekGalerii", "res/galeria/choirTwo.jpg")
        ));
        // ]]>
    </script>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Zenek
 * Date: 29.05.2017
 * Time: 00:42
 */

readfile('menu.html');
?>


<div style="margin-left: 5%;width: 80%">
    <h2 style="font-size: 25px;margin-top: 10%; text-align: center;border: rgba(42,100,42,0.62);border: solid">
        Festiwal Chórów Osiedlowych - galeria 2015 by Stanisław Stanisławowski
    </h2>
<div style="width:800px; margin:0 auto;">
    <ul style="list-style-type: none">
        <li class="galeria">
            <a href = "/res/galeria/choirOne.jpg">
            <img src="res/galeria/choirOne.jpg" class="obrazekGalerii">
            </a>
        </li>
        <li class="galeria"><img src="res/galeria/choirTwo.jpg" class="obrazekGalerii" </li>
        <li class="galeria"><img src="res/galeria/choirThree.jpg" class="obrazekGalerii"</li>
        <li class="galeria"><img src="res/galeria/choirNine.jpg" class="obrazekGalerii"</li>
        <li class="galeria"><img src="res/galeria/choirFour.jpg" class="obrazekGalerii"</li>
        <li class="galeria"><img src="res/galeria/choirFive.jpg" class="obrazekGalerii"</li>
        <li class="galeria"><img src="res/galeria/choirSix.jpg" class="obrazekGalerii"</li>
        <li class="galeria"><img src="res/galeria/choirSeven.jpg" class="obrazekGalerii"</li>
        <li class="galeria"><img src="res/galeria/choirEight.jpg" class="obrazekGalerii"</li>
    </ul>
</div>
</div>

<?php
readfile('stopka.html');
?>
</body>
</html>
