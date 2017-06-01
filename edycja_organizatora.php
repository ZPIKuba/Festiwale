<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["login"]))
{
    echo "Błąd!";
    header('Location: /main.php');
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Wrocławski festiwal chórów osiedlowych" />
    <meta name="author" content="Jakub Granieczny, Piotr Kościuszko, Krzysztof Kozicki, Ewa Skórska" />
    <meta name="keywords" content="festiwal, chór, choir, Wrocław, singing" />
    <title>Festiwale</title>
</head>
<body>
<h2>Edytowanie danych organizatora</h2>

<?php
$servername = "zpi.cfo9cor2abpq.us-east-1.rds.amazonaws.com";
$username = "ZPIUser";
$password = "ZPIPassword";
$dbname = "festiwale";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn -> query ('SET NAMES utf8');

    $login = $_SESSION["login"];
    $stmt = $conn->prepare("SELECT * FROM Organisers WHERE Login = '".$login."'");
    $stmt->execute();

    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $error)
{
    die("ERROR: Could not connect. " . $error->getMessage());
}
?>

<form method="post" action="edit_organizator.php">
    <h4>Dane szczegółowe:</h4>
    <p><label>Imię: <font color ="red">*</font> <input id = "imie" name = "imie" type = "text" size = "50" value= "<?php echo $result[0]['Name']; ?>" required autofocus></label></p>
    <p><label>Nazwisko: <font color ="red">*</font> <input id = "nazwisko" name = "nazwisko" type = "text" size = "50" value= "<?php echo $result[0]['Surname']; ?>" required></label></p>
    <p><label>Numer telefonu: <input id = "telefon" name = "telefon" type = "tel" pattern="[0-9]{9,15}" size = "15" value= "<?php echo $result[0]['Phone']; ?>"></label></p>
    <p><label>Adres: <input id = "adres" name = "adres" type = "text" size = "100" value= "<?php echo $result[0]['Address']; ?>"></label></p>
    <p><label>E-mail: <font color ="red">*</font> <input id = "email" name = "email" type = "email" size = "70" value= "<?php echo $result[0]['Email']; ?>" required></label></p>
    <p><label>Login: <font color ="red">*</font> <input id = "login" name = "login" type = "text" size = "30" value= "<?php echo $result[0]['Login']; ?>" required></label></p>
    <p><label>Hasło: <font color ="red">*</font> <input id = "haslo" name = "haslo" type = "password" size = "50" value= "<?php echo $result[0]['Password']; ?>" required></label></p>
    <p><label>Stanowisko: <input id = "stanowisko" name = "stanowisko" type = "text" size = "50" value= "<?php echo $result[0]['Position']; ?>"></label></p>
    <p>
        <input type = "submit" value = "Zmień">
        <input type = "reset" value = "Wyczyść">
    </p>
</form>
</body>
</html>