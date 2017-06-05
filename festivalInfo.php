<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>O festiwalu</title>
    <style>
        #map {
            height: 400px;
            width: 50%;
            float: left;
        }
        #place{
            height: 400px;
            width: 50%;
            float: right;
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
    padding: 50px;">
            11.06.2017</span>
    <span style=" color: black;
    font: bold 30px/40px Helvetica, Sans-Serif;
    letter-spacing: -1px;
    background: rgb(255,255,255); /* fallback color */
    background: rgba(255,255,255, 0.0);
    padding: 50px;">
            Godzina 12:00</span>
    <h2 class="info" id="gdzie">Gdzie?</h2>
    <div style="display: flex;">
        <div id="place">
            <h2>Miejsce realizacji Festiwalu:</h2>
            <h3>Dom Kultury Bakara we Wrocławiu, ul. Różana 4</h3>
            <h2>Dojazd komunikacją miejską:</h2>
            <h3>- przystanek: Bzowa (Centrum Zajezdnia)</h3>
            <h3>- linie: 4, 5, 11, 14, 24, 126, 134</h3>
        </div>
        <div id="map" style="flex: 1;"></div>
    </div>
    <script>
        function initMap() {

            var uluru = {lat: 51.0961937, lng: 16.9941827};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
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

    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
    150%'><b><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman",serif'>Założenia
    i cele festiwalu:</span></b></p>

    <ul style='margin-top:0cm' type=disc>
        <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
     150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman",serif'>prezentacja
     i konfrontacja osiągnięć artystycznych wrocławskich zespołów amatorskich,</span></li>
        <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
     150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman",serif'>pobudzanie
     aktywności chórów amatorskich i dostarczanie im inspiracji do podnoszenia
     poziomu artystycznego,</span></li>
        <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
     150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman",serif'>rozbudzanie
     zamiłowania do śpiewu chóralnego i jego propagowanie jako najbardziej
     naturalnej formy aktywności muzycznej,</span></li>
        <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
     150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman",serif'>prezentacja
     i promowanie literatury chóralnej,</span></li>
        <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
     150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman",serif'>nawiązanie
     współpracy między wrocławskimi chórami osiedlowymi,</span></li>
        <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
     150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman",serif'>nawiązanie
     współpracy międzypokoleniowej w zespołach,</span></li>
        <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
     150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman",serif'>dobra
     zabawa w miłej rodzinnej atmosferze.</span></li>
    </ul>

    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
150%'><b><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman",serif'>Postanowienia
ogólne</span></b></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif;color:black'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif;color:black'>Organizatorzy zastrzegają sobie możliwość
nieodpłatnego dysponowania materiałem z prezentacji festiwalowych na dostępnych
nośnikach audiowizualnych.</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif;color:black'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif;color:black'>Organizatorzy przewidują część
nieoficjalną po zakończeniu występu chórów oraz poczęstunek dla wszystkich
zespołów.</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif;color:black'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif;color:black'>Chór musi zgłosić gotowość do wejścia na
scenę najpóźniej na 45 minut przed planowanym występem (zdarza się, że z
powodów losowych któryś zespół może nie dotrzeć i powstaje luka).</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif;color:black'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif;color:black'>Wszystkie kwestie nie ujęte w regulaminie rozstrzyga Organizator.</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif;color:black'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif;color:black'>Organizator zastrzega sobie prawo do zmian
w regulaminie.</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:-18.0pt;
line-height:150%'><b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><span style='font-size:12.0pt;line-height:150%;font-family:
"Times New Roman",serif;color:black'>Nadesłanie zgłoszenia jest równoznaczne z
przyjęciem warunków niniejszego Regulaminu.</span></p>

    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%'><b><span style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman",serif'>Życzymy Wszystkim uczestnikom  owocnych
przygotowań do Festiwalu i niezapomnianych wrażeń muzycznych!</span></b></p>

</div>
</div>
<?php
readfile('stopka.html');
?>
</body>
</html>