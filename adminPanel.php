<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["login"]))
{
    echo "Błąd!";
    header('Location: /main.php');
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
            </form>
        </div>
        <div class="imagetext" align="center">
            <h2><span>Wrocławski Festiwal</span></h2>
            <h2><span>Chórów Osiedlowych</span></h2>
        </div>
    </div>
</nav>
<div class="container">
    <button type="button" class="btn btn-info" style='width: 250px;
        margin: 4px 2px 4px 2px;' onclick="location.href='/dodawanie_organizatora.php';">Dodawanie kolejnego organizatora</button>
    <button type="button" class="btn btn-info" style='width: 250px;
        margin: 4px 2px 4px 2px;' onclick="location.href='/dodawanie_choru.php';">Dodawanie chórów</button>
    <button type="button" class="btn btn-info" style='width: 250px;
        margin: 4px 2px 4px 2px;' onclick="location.href='/dodawanie_utworu.php';">Dodawanie utworów</button>
</div>
</body>
</html>