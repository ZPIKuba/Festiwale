
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
            height: 350px;
            display: block;
            margin: auto;

        }
    </style>
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
    <h2 style="font-size: 25px;margin-top: 10%; text-align: center">
        Festiwal Chórów Osiedlowych - galeria 2015 by Stanisław Stanisławowski
    </h2>

    <ul style="list-style-type: none">
        <li class="galeria"><img src="res/galeria/choirOne.jpg" class="obrazekGalerii"></li>
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


</body>
</html>
