<?php
$servername = "zpi.cfo9cor2abpq.us-east-1.rds.amazonaws.com";
$username = "ZPIUser";
$password = "ZPIPassword";
$dbname = "festiwale";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $error){
    die("ERROR: Could not connect. " . $error->getMessage());
}

if(isset($_REQUEST['nowy']))
{
    $sql = 'INSERT INTO Composers (Name, Surname, Description)
     VALUES (:imie_kompozytora, :nazwisko_kompozytora, :opis_kompozytora)';
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':imie_kompozytora', $_REQUEST['imie_kompozytora']);
    $stmt->bindParam(':nazwisko_kompozytora', $_REQUEST['nazwisko_kompozytora']);
    $stmt->bindParam(':opis_kompozytora', $_REQUEST['opis_kompozytora']);

    try {
        $stmt->execute();
        $id_kompozytora = $conn->lastInsertId();
    }
    catch(PDOException $e) {
        die("Wystąpił błąd w procesie dodawania kompozytora!");
    }
    echo "New composer created successfully";
}

try {
    $sql = 'INSERT INTO Pieces (Title, Composer, CreationYear, Duration)
     VALUES (:tytul, :kompozytor, :rok, :czas)';
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':tytul', $_REQUEST['tytul']);
    if(isset($_REQUEST['nowy']))
        $stmt->bindParam(':kompozytor', $id_kompozytora);
    else
        $stmt->bindParam(':kompozytor', $_REQUEST['kompozytor']);
    $stmt->bindParam(':rok', $_REQUEST['rok']);
    $stmt->bindParam(':czas', $_REQUEST['czas']);

    try {
        $stmt->execute();
        $id_utworu = $conn->lastInsertId();
    }
    catch(PDOException $e) {
        die("Wystąpił błąd w procesie dodawania utworu! ".$e->getMessage());
    }
    echo "New piece created successfully";

    $sql = 'INSERT INTO Performs (Participant, Title)
     VALUES (:chor, :utwor)';
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':chor', $_REQUEST['chor']);
    $stmt->bindParam(':utwor', $id_utworu);

    try {
        $stmt->execute();
    }
    catch(PDOException $e) {
        die("Wystąpił błąd - Performs!");
    }
    echo "Succeeded!";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>