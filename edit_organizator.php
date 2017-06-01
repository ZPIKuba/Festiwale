<?php
session_start();
if(!isset($_SESSION["login"]))
{
    echo "Błąd!";
    header('Location: /main.php');
}

$servername = "zpi.cfo9cor2abpq.us-east-1.rds.amazonaws.com";
$username = "ZPIUser";
$password = "ZPIPassword";
$dbname = "festiwale";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn -> query ('SET NAMES utf8');

    $login = $_SESSION["login"];
    $sql = "UPDATE Organisers
            SET Name = '".$_POST['imie']."', Surname = '".$_POST['nazwisko']."', Phone = '".$_POST['telefon']."',
            Address = '".$_POST['adres']."', Email = '".$_POST['email']."', Login = '".$_POST['login']."',
            Password = '".$_POST['haslo']."', Position = '".$_POST['stanowisko']."'
            WHERE Login = '".$login."'";

    $stmt = $conn->prepare($sql);
    try {
        $stmt->execute();
    }
    catch(PDOException $e) {
        die("Wystąpił błąd w procesie aktualizacji danych organizatora!");
    }
    echo "<img src=\"res/okIcon.png\", style=\"width: 5%; height: auto\">";
    echo "<h2>Zaktualizowano dane!</h2>";
    echo "<button type=\"button\" style='width: 300px;
        margin: 4px 2px 4px 2px;' onclick=\"location.href='/adminPanel.php';\">Powrót do panelu administratora</button>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>