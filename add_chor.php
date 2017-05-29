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
    //dodawanie chóru
    $sql = 'INSERT INTO Choirs (NameCh, MembersNumber, Origin, Description)
     VALUES (:nazwa, :liczba_czlonkow, :pochodzenie, :opis)';
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nazwa', $_REQUEST['nazwa']);
    $stmt->bindParam(':liczba_czlonkow', $_REQUEST['liczba_czlonkow']);
    $stmt->bindParam(':pochodzenie', $_REQUEST['pochodzenie']);
    $stmt->bindParam(':opis', $_REQUEST['opis']);

    try {
        $stmt->execute();
        $id_choru = $conn->lastInsertId();
    }
    catch(PDOException $e) {
        die("Wystąpił błąd w procesie dodawania chóru!");
    }

    //dodawanie prezesa
    $sql = 'INSERT INTO Leaders (Name, Surname, Address, Phone, Email)
     VALUES (:imie_prezesa, :nazwisko_prezesa, :adres_prezesa, :telefon_prezesa, :email_prezesa)';
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':imie_prezesa', $_REQUEST['imie_prezesa']);
    $stmt->bindParam(':nazwisko_prezesa', $_REQUEST['nazwisko_prezesa']);
    $stmt->bindParam(':adres_prezesa', $_REQUEST['adres_prezesa']);
    $stmt->bindParam(':telefon_prezesa', $_REQUEST['telefon_prezesa']);
    $stmt->bindParam(':email_prezesa', $_REQUEST['email_prezesa']);

    try {
        $stmt->execute();
        $id_prezesa = $conn->lastInsertId();
    }
    catch(PDOException $e) {
        die("Wystąpił błąd w procesie dodawania prezesa!");
    }

    //dodawanie dyrygenta
    $sql = 'INSERT INTO Conductors (Name, Surname, Gender, Address, Phone, Email, Description)
     VALUES (:imie_dyrygenta, :nazwisko_dyrygenta, :plec_dyrygenta, :adres_dyrygenta, :telefon_dyrygenta, :email_dyrygenta, :opis_dyrygenta)';
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':imie_dyrygenta', $_REQUEST['imie_dyrygenta']);
    $stmt->bindParam(':nazwisko_dyrygenta', $_REQUEST['nazwisko_dyrygenta']);
    $stmt->bindParam(':plec_dyrygenta', $_REQUEST['plec_dyrygenta']);
    $stmt->bindParam(':adres_dyrygenta', $_REQUEST['adres_dyrygenta']);
    $stmt->bindParam(':telefon_dyrygenta', $_REQUEST['telefon_dyrygenta']);
    $stmt->bindParam(':email_dyrygenta', $_REQUEST['email_dyrygenta']);
    $stmt->bindParam(':opis_dyrygenta', $_REQUEST['opis_dyrygenta']);

    try {
        $stmt->execute();
        $id_dyrygenta = $conn->lastInsertId();
    }
    catch(PDOException $e) {
        die("Wystąpił błąd w procesie dodawania dyrygenta!");
    }

    //dodawanie do tabeli Prezesuje
    $sql = 'INSERT INTO Leads (Leader, Choir, CoronationDate)
     VALUES (:id_prezesa, :id_choru, :poczatek_prezesury)';
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id_prezesa', $id_prezesa);
    $stmt->bindParam(':id_choru', $id_choru);
    $stmt->bindParam(':poczatek_prezesury', $_REQUEST['poczatek_prezesury']);

    try {
        $stmt->execute();
    }
    catch(PDOException $e) {
        die("Wystąpił błąd - Leads!");
    }

    //dodawanie do tabeli Udział
    $sql = 'INSERT INTO TakePart (NameCh, Conductor, Festival)
     VALUES (:id_choru, :id_dyrygenta, 29)';
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id_choru', $id_choru);
    $stmt->bindParam(':id_dyrygenta', $id_dyrygenta);

    try {
        $stmt->execute();
    }
    catch(PDOException $e) {
        die("Wystąpił błąd - TakePart!");
    }
    echo "<img src=\"res/okIcon.png\", style=\"width: 5%; height: auto\">";
    echo "<h2>Dodano nowy chór!</h2>";
    echo "<button type=\"button\" style='width: 300px;
        margin: 4px 2px 4px 2px;' onclick=\"location.href='/adminPanel.php';\">Powrót do panelu administratora</button>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>