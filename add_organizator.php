<?php
$servername = "zpi.cfo9cor2abpq.us-east-1.rds.amazonaws.com";
$username = "ZPIUser";
$password = "ZPIPassword";
$dbname = "festiwale";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn -> query ('SET NAMES utf8');
}
catch(PDOException $error){
    die("ERROR: Could not connect. " . $error->getMessage());
}

try {
    $sql = 'INSERT INTO Organisers (Name, Surname, Gender, Phone, Address, Email, Login, Password, Position)
     VALUES (:imie, :nazwisko, :plec, :telefon, :adres, :email, :login, :haslo, :stanowisko)';
    $stmt = $conn->prepare($sql);

    // bind parameters to statement

    $stmt->bindParam(':imie', $_REQUEST['imie']);
    $stmt->bindParam(':nazwisko', $_REQUEST['nazwisko']);
    $stmt->bindParam(':plec', $_REQUEST['plec']);
    $stmt->bindParam(':telefon', $_REQUEST['telefon']);
    $stmt->bindParam(':adres', $_REQUEST['adres']);
    $stmt->bindParam(':email', $_REQUEST['email']);
    $stmt->bindParam(':login', $_REQUEST['login']);
    $stmt->bindParam(':haslo', $_REQUEST['haslo']);
    $stmt->bindParam(':stanowisko', $_REQUEST['stanowisko']);

    // execute the prepared statement
    try {
        $stmt->execute();
    }
    catch(PDOException $e) {
        die("Prawdopodobnie taki login już istnieje, spróbuj ponownie");
    }
    echo "New organiser created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>