<!DOCTYPE html>
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
    $stmt = $conn->prepare("SELECT Name, Surname FROM Organisers WHERE Login = '".$login."'");
    $stmt->execute();

    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $error)
{
    die("ERROR: Could not connect. " . $error->getMessage());
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Festiwale</title>
    <link href="menu.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<nav>
    <div class="image" align="center">
        <img src="res/logo.png" alt="" height="120px" style="float: left; margin: 25px 0px 15px 15px;" />
        <div align="right">
            <form method="post" action="Logout.php">
                <input style='margin: 10px 2px 4px 2px;' type="submit" value="Wyloguj">
                <p>Zalogowany jako: <?php echo $result[0]['Name']; ?> <?php echo $result[0]['Surname']; ?></p>
            </form>
        </div>
        <div class="imagetext" align="center">
            <h2><span>Wrocławski Festiwal</span></h2>
            <h2><span>Chórów Osiedlowych</span></h2>
        </div>
    </div>
</nav>
<div class="container">
    <h2>Panel organizatora</h2>
    <img src="res/add_org.png" alt="Dodaj organizatora" style='margin: 4px 8px 4px 4px;'>
    <img src="res/add_choir.png" alt="Dodaj chór" style='margin: 4px 8px 4px 4px;'>
    <img src="res/add_song.png" alt="Dodaj utwór" style='margin: 4px 8px 4px 4px;'>
    <img src="res/edit_user.png" alt="Edytuj swoje dane" style='margin: 4px 8px 4px 4px;'>
    <button type="button" class="btn btn-info" style='width: 256px;
        margin: 4px 8px 4px 4px;' onclick="location.href='/dodawanie_organizatora.php';">Dodawanie kolejnego organizatora</button>
    <button type="button" class="btn btn-info" style='width: 256px;
        margin: 4px 8px 4px 4px;' onclick="location.href='/dodawanie_choru.php';">Dodawanie chórów</button>
    <button type="button" class="btn btn-info" style='width: 256px;
        margin: 4px 8px 4px 4px;' onclick="location.href='/dodawanie_utworu.php';">Dodawanie utworów</button>
    <button type="button" class="btn btn-info" style='width: 256px;
        margin: 4px 8px 4px 4px;' onclick="location.href='/edycja_organizatora.php';">Edytuj swoje dane</button>
</div>
</body>
</html>