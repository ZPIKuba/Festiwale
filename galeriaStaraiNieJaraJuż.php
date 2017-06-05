
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
            width:100px;
            height: 100px;


        }

        .preview img {
            border: 4px solid #444;
            padding: 1px;
            height: 300px;
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
    <h2 style="font-size: 25px;margin-top: 10%; text-align: center;border: rgba(42,100,42,0.62);border: solid">
        Festiwal Chórów Osiedlowych - galeria 2015 by Stanisław Stanisławowski
    </h2>
    <div class="preview" align="center">

        <img name="preview" src="res/galeria/choirOne.jpg">



    </div>
<div style="width:800px; margin:0 auto;">
    <ul style="list-style-type: none">
        <li class="galeria">
            <a href = "/res/galeria/choirOne.jpg">
                <img onmouseover="preview.src=img1.src" name="img1" src="res/galeria/choirOne.jpg" class="obrazekGalerii">
            </a>
        </li>
        <li class="galeria">
            <a href = "/res/galeria/choirTwo.jpg">
                <img onmouseover="preview.src=img2.src" name="img2" src="res/galeria/choirTwo.jpg" class="obrazekGalerii"
            </a>
        </li>
        <li class="galeria">
            <a href = "/res/galeria/choirThree.jpg">
                <img onmouseover="preview.src=img3.src" name="img3" src="res/galeria/choirThree.jpg" class="obrazekGalerii"
            </a>
        </li>
        <li class="galeria">
            <a href = "/res/galeria/choirNine.jpg">
                <img onmouseover="preview.src=img9.src" name="img9" src="res/galeria/choirNine.jpg" class="obrazekGalerii"
            </a>
        </li>
        <li class="galeria">
            <a href = "/res/galeria/choirFour.jpg">
                <img onmouseover="preview.src=img4.src" name="img4" src="res/galeria/choirFour.jpg" class="obrazekGalerii"
            </a>
        </li>
        <li class="galeria">
            <a href = "/res/galeria/choirFive.jpg">
                <img onmouseover="preview.src=img5.src" name="img5" src="res/galeria/choirFive.jpg" class="obrazekGalerii"
            </a>
        </li>
        <li class="galeria">
            <a href = "/res/galeria/choirSix.jpg">
                <img onmouseover="preview.src=img6.src" name="img6" src="res/galeria/choirSix.jpg" class="obrazekGalerii"
            </a>
        </li>
        <li class="galeria">
            <a href = "/res/galeria/choirSeven.jpg">
                <img onmouseover="preview.src=img7.src" name="img7" src="res/galeria/choirSeven.jpg" class="obrazekGalerii"
            </a>
        </li>
        <li class="galeria">
            <a href = "/res/galeria/choirEight.jpg">
                <img onmouseover="preview.src=img8.src" name="img8" src="res/galeria/choirEight.jpg" class="obrazekGalerii"
            </a>
        </li>
    </ul>
</div>
</div>

<?php
readfile('stopka.html');
?>
</body>
</html>
