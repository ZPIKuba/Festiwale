<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Wrocławski festiwal chórów osiedlowych" />
    <meta name="author" content="Jakub Granieczny, Piotr Kościuszko, Krzysztof Kozicki, Ewa Skórska" />
    <meta name="keywords" content="festiwal, chór, choir, Wrocław, singing" />
    <title>Festiwale</title>
</head>
<body>
<h2>Dodawanie utworu</h2>
<?php
$servername = "zpi.cfo9cor2abpq.us-east-1.rds.amazonaws.com";
$username = "ZPIUser";
$password = "ZPIPassword";
$dbname = "festiwale";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn -> query ('SET NAMES utf8');

    $stmt = $conn->prepare("SELECT IdComp, Name, Surname FROM Composers");
    $stmt->execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    $stmt = $conn->prepare("SELECT IdCh, NameCh FROM Choirs");
    $stmt->execute();
    $result2 = $stmt -> fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $error)
{
    die("ERROR: Could not connect. " . $error->getMessage());
}
?>
<form method="post" action="add_utwor.php">
    <h4>Dane szczegółowe:</h4>
    <p><label>Tytuł: <font color ="red">*</font> <input id = "tytul" name = "tytul" type = "text" size = "150" placeholder = "Tytuł utworu" required autofocus></label></p>
    <p>
        <label>
            Kompozytor: <font color ="red">*</font>
            <select name = "kompozytor">
                <?php
                $i = 0;
                while(!is_null($result[$i]['Surname']) && !is_null($result[$i]['Name']))
                {
                    echo "<option value=\"".$result[$i]['IdComp']."\">".$result[$i]['Surname']." ".$result[$i]['Name']."</option>";
                    $i++;
                }
                ?>
            </select>
        </label>
    </p>
    <p><label>Chcę dodać kompozytora: <input id="nowy" name="nowy" type="checkbox" onclick="
           if(this.checked) {
            document.getElementById('kompozytor').style.display = 'inline';
            document.getElementById('imie_kompozytora').required = true;
            document.getElementById('nazwisko_kompozytora').required = true;
            }
           else {
            document.getElementById('kompozytor').style.display = 'none'
            document.getElementById('imie_kompozytora').required = false;
            document.getElementById('nazwisko_kompozytora').required = false;
            }"></label></p>
    <div id="kompozytor" style="display: none">
        <p><label>Imię: <font color ="red">*</font> <input id = "imie_kompozytora" name = "imie_kompozytora" type = "text" size = "50" placeholder = "Imię kompozytora"></label></p>
        <p><label>Nazwisko: <font color ="red">*</font> <input id = "nazwisko_kompozytora" name = "nazwisko_kompozytora" type = "text" size = "50" placeholder = "Nazwisko kompozytora"></label></p>
        <p><label>Opis: </label><textarea id = "opis_kompozytora" name = "opis_kompozytora" rows="5" cols="50" placeholder = "Opis kompozytora"></textarea></p>
    </div>
    <p><label>Rok powstania: <input id = "rok" name = "rok" type = "number" max="2017"></label></p>
    <p><label>Czas trwania (hh:mm:ss): <font color ="red">*</font> <input id = "czas" name = "czas" type = "time" step="1"></label></p>
    <p>
        <label>
            Chór: <font color ="red">*</font>
            <select name = "chor">
                <?php
                $i = 0;
                while(!is_null($result2[$i]['NameCh']))
                {
                    echo "<option value=\"".$result2[$i]['IdCh']."\">".$result2[$i]['NameCh']."</option>";
                    $i++;
                }
                ?>
            </select>
        </label>
    </p>

    <p class="wyjasnienie"><font color ="red">*</font> - pola wymagane</p>
    <p>
        <input type = "submit" value = "Dodaj">
        <input type = "reset" value = "Wyczyść">
    </p>
</form>
</body>
</html>