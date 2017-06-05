<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>O festiwalu</title>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
        h2.info{
            background-color: #FDD700;
            padding: 15px 0px 0px 20px;
            font-size: 20px;
            font: bold 36px/45px Helvetica, Sans-Serif;

        }
        h2.info:nth-of-type(1)
        {

            background-color: #FDD700;
        }
        h2.info:nth-of-type(2)
        {

            background-color: #0099CC;
        }
        h2.info:nth-of-type(3)
        {

            background-color: #aaaaaa;
        }
        a.info{
            font: bold 36px/45px Helvetica, Sans-Serif;

            font-style: normal;
            color: white;
            text-decoration: none;
        }
        a.info:nth-of-type(1)
        {
            padding: 5px 10px 10px 20px;

            background-color: #FDD700;
        }
        a.info:nth-of-type(2)
        {
            padding: 5px 10px 10px 5px;

            background-color: #0099CC;
        }
        a.info:nth-of-type(3)
        {
            padding: 5px 0px 0px 20px;

            background-color: #aaaaaa;
        }
    </style>
</head>
<body>
<?php
readfile('menu.html');
?>
<div style="display: flex">
    <div style="width: 10%;text-align: justify; position: fixed" ><a href="#kiedy" class="info">KIEDY</a>
        <br><a href="#gdzie" class="info">GDZIE</a>
        <br><a href="#co" class="info">CO</a></div>
<div style="width: 60%;text-align: justify;margin: 0% 15% auto; flex: 1;">
    <h2 class="info" id="kiedy">Kiedy?</h2>
        <span style=" color: black;
    font: bold 48px/55px Helvetica, Sans-Serif;
    letter-spacing: -1px;
    background: rgb(255,255,255); /* fallback color */
    background: rgba(255,255,255, 0.0);
    padding: 50px;
">
            20 - 25.05.2017</span>
    <h2 class="info" id="gdzie">Gdzie?</h2>
    <div id="map"></div>
    <script>
        function initMap() {

            var uluru = {lat: 53.713143, lng: 16.772538};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt1SSZ6H_jN5XQ9VMk8CjrSDu2qcSX84I&callback=initMap">
    </script>
    <h2 class="info" id="co">Co?</h2>
    <p style="text-align: justify">
        Silnik rakietowy na paliwo stałe – rodzaj silnika rakietowego, w którym spalaniu w komorze wewnętrznego spalania ulega zhomogenizowana mieszanka paliwa i utleniacza. Komora wewnętrznego spalania ma formę tuby zawierającej blok mieszanki paliwowej. Silniki tego rodzaju są najstarszymi i najprostszymi rodzajami napędu, stosowanymi już w średniowiecznych Chinach. W komorze wewnętrznego spalania następuje zapłon zmagazynowanej w niej mieszaniny napędowej, zaś rozprężające się gorące gazy odprowadzane są do dysz w celu uzyskania pożądanego ciągu.
        Krytyczną wartością tego rodzaju napędu jest powierzchnia płonącego gęstego paliwa, determinująca siłę produkowanego w ten sposób ciągu. W celu jej zwiększenia, w zgromadzonym paliwie wykonuje się nacięcia – rowki i szpary zwiększające powierzchnie paliwa podlegającego ekspozycji na działanie ognia. Wymaga to jednak dużej precyzji, gdyż zbyt wielka liczba nacięć – a co za tym idzie zbyt duża powierzchnia zapłonu – może doprowadzić do zbyt wielkiego ciśnienia wewnątrz komory spalania i eksplozji silnika.
        Zalety
        Podstawową zaletą silników na paliwo stałe jest duża stabilność oraz łatwość przechowywania przez długi czas. Paliwa stałe charakteryzują się dużą gęstością energii i szybkim czasem spalania, dość dobrze tolerują wstrząsy, wibracje i przyspieszenia. Nie wymagają też specjalnych pomp, co czyni pocisk mniej skomplikowanym.
        Słabości
        Podstawową słabością napędu na paliwo stałe jest niemożliwość jego zatrzymania i korekty ciągu. Po uruchomieniu zapłonu, całe zgromadzone w zbiorniku paliwo ulega wypaleniu bez możliwości zatrzymania, czy nawet korekty przebiegu tego procesu. W związku z koniecznością zachowania dużej precyzji nacięć paliwa stałego, jego produkcja jest stosunkowo droga.
        Silniki na paliwo stałe posiadają szerokie spektrum zastosowań, począwszy od lekkich pocisków przeciwpancernych, aż po długie na 45,46 metrów (3,7 m średnicy) rakiety dodatkowe na paliwo stałe (ang. Solid Rocket Booster – SRB) amerykańskich promów kosmicznych.
        Silnik rakietowy na paliwo stałe – rodzaj silnika rakietowego, w którym spalaniu w komorze wewnętrznego spalania ulega zhomogenizowana mieszanka paliwa i utleniacza. Komora wewnętrznego spalania ma formę tuby zawierającej blok mieszanki paliwowej. Silniki tego rodzaju są najstarszymi i najprostszymi rodzajami napędu, stosowanymi już w średniowiecznych Chinach. W komorze wewnętrznego spalania następuje zapłon zmagazynowanej w niej mieszaniny napędowej, zaś rozprężające się gorące gazy odprowadzane są do dysz w celu uzyskania pożądanego ciągu.
        Krytyczną wartością tego rodzaju napędu jest powierzchnia płonącego gęstego paliwa, determinująca siłę produkowanego w ten sposób ciągu. W celu jej zwiększenia, w zgromadzonym paliwie wykonuje się nacięcia – rowki i szpary zwiększające powierzchnie paliwa podlegającego ekspozycji na działanie ognia. Wymaga to jednak dużej precyzji, gdyż zbyt wielka liczba nacięć – a co za tym idzie zbyt duża powierzchnia zapłonu – może doprowadzić do zbyt wielkiego ciśnienia wewnątrz komory spalania i eksplozji silnika.
        Zalety
        Podstawową zaletą silników na paliwo stałe jest duża stabilność oraz łatwość przechowywania przez długi czas. Paliwa stałe charakteryzują się dużą gęstością energii i szybkim czasem spalania, dość dobrze tolerują wstrząsy, wibracje i przyspieszenia. Nie wymagają też specjalnych pomp, co czyni pocisk mniej skomplikowanym.
        Słabości
        Podstawową słabością napędu na paliwo stałe jest niemożliwość jego zatrzymania i korekty ciągu. Po uruchomieniu zapłonu, całe zgromadzone w zbiorniku paliwo ulega wypaleniu bez możliwości zatrzymania, czy nawet korekty przebiegu tego procesu. W związku z koniecznością zachowania dużej precyzji nacięć paliwa stałego, jego produkcja jest stosunkowo droga.
        Silniki na paliwo stałe posiadają szerokie spektrum zastosowań, począwszy od lekkich pocisków przeciwpancernych, aż po długie na 45,46 metrów (3,7 m średnicy) rakiety dodatkowe na paliwo stałe (ang. Solid Rocket Booster – SRB) amerykańskich promów kosmicznych.
        Silnik rakietowy na paliwo stałe – rodzaj silnika rakietowego, w którym spalaniu w komorze wewnętrznego spalania ulega zhomogenizowana mieszanka paliwa i utleniacza. Komora wewnętrznego spalania ma formę tuby zawierającej blok mieszanki paliwowej. Silniki tego rodzaju są najstarszymi i najprostszymi rodzajami napędu, stosowanymi już w średniowiecznych Chinach. W komorze wewnętrznego spalania następuje zapłon zmagazynowanej w niej mieszaniny napędowej, zaś rozprężające się gorące gazy odprowadzane są do dysz w celu uzyskania pożądanego ciągu.
        Krytyczną wartością tego rodzaju napędu jest powierzchnia płonącego gęstego paliwa, determinująca siłę produkowanego w ten sposób ciągu. W celu jej zwiększenia, w zgromadzonym paliwie wykonuje się nacięcia – rowki i szpary zwiększające powierzchnie paliwa podlegającego ekspozycji na działanie ognia. Wymaga to jednak dużej precyzji, gdyż zbyt wielka liczba nacięć – a co za tym idzie zbyt duża powierzchnia zapłonu – może doprowadzić do zbyt wielkiego ciśnienia wewnątrz komory spalania i eksplozji silnika.
        Zalety
        Podstawową zaletą silników na paliwo stałe jest duża stabilność oraz łatwość przechowywania przez długi czas. Paliwa stałe charakteryzują się dużą gęstością energii i szybkim czasem spalania, dość dobrze tolerują wstrząsy, wibracje i przyspieszenia. Nie wymagają też specjalnych pomp, co czyni pocisk mniej skomplikowanym.
        Słabości
        Podstawową słabością napędu na paliwo stałe jest niemożliwość jego zatrzymania i korekty ciągu. Po uruchomieniu zapłonu, całe zgromadzone w zbiorniku paliwo ulega wypaleniu bez możliwości zatrzymania, czy nawet korekty przebiegu tego procesu. W związku z koniecznością zachowania dużej precyzji nacięć paliwa stałego, jego produkcja jest stosunkowo droga.
        Silniki na paliwo stałe posiadają szerokie spektrum zastosowań, począwszy od lekkich pocisków przeciwpancernych, aż po długie na 45,46 metrów (3,7 m średnicy) rakiety dodatkowe na paliwo stałe (ang. Solid Rocket Booster – SRB) amerykańskich promów kosmicznych.
        Silnik rakietowy na paliwo stałe – rodzaj silnika rakietowego, w którym spalaniu w komorze wewnętrznego spalania ulega zhomogenizowana mieszanka paliwa i utleniacza. Komora wewnętrznego spalania ma formę tuby zawierającej blok mieszanki paliwowej. Silniki tego rodzaju są najstarszymi i najprostszymi rodzajami napędu, stosowanymi już w średniowiecznych Chinach. W komorze wewnętrznego spalania następuje zapłon zmagazynowanej w niej mieszaniny napędowej, zaś rozprężające się gorące gazy odprowadzane są do dysz w celu uzyskania pożądanego ciągu.
        Krytyczną wartością tego rodzaju napędu jest powierzchnia płonącego gęstego paliwa, determinująca siłę produkowanego w ten sposób ciągu. W celu jej zwiększenia, w zgromadzonym paliwie wykonuje się nacięcia – rowki i szpary zwiększające powierzchnie paliwa podlegającego ekspozycji na działanie ognia. Wymaga to jednak dużej precyzji, gdyż zbyt wielka liczba nacięć – a co za tym idzie zbyt duża powierzchnia zapłonu – może doprowadzić do zbyt wielkiego ciśnienia wewnątrz komory spalania i eksplozji silnika.
        Zalety
        Podstawową zaletą silników na paliwo stałe jest duża stabilność oraz łatwość przechowywania przez długi czas. Paliwa stałe charakteryzują się dużą gęstością energii i szybkim czasem spalania, dość dobrze tolerują wstrząsy, wibracje i przyspieszenia. Nie wymagają też specjalnych pomp, co czyni pocisk mniej skomplikowanym.
        Słabości
        Podstawową słabością napędu na paliwo stałe jest niemożliwość jego zatrzymania i korekty ciągu. Po uruchomieniu zapłonu, całe zgromadzone w zbiorniku paliwo ulega wypaleniu bez możliwości zatrzymania, czy nawet korekty przebiegu tego procesu. W związku z koniecznością zachowania dużej precyzji nacięć paliwa stałego, jego produkcja jest stosunkowo droga.
        Silniki na paliwo stałe posiadają szerokie spektrum zastosowań, począwszy od lekkich pocisków przeciwpancernych, aż po długie na 45,46 metrów (3,7 m średnicy) rakiety dodatkowe na paliwo stałe (ang. Solid Rocket Booster – SRB) amerykańskich promów kosmicznych.


    </p>

</div>
</div>
<?php
readfile('stopka.html');
?>
</body>
</html>