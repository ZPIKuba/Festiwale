<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "baza";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE Festiwale
            SET DataStart=':start', DataKoniec=':koniec', UtworWspolny=':utwor', Nazwa=':nazwa', GlownyOrg=':organizator',
            WHERE Nazwa=''";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':start', $_REQUEST['start']);
    $stmt->bindParam(':koniec', $_REQUEST['koniec']);
    $stmt->bindParam(':utwor', $_REQUEST['utwor']);
    $stmt->bindParam(':nazwa', $_REQUEST['nazwa']);
    $stmt->bindParam(':org', $_REQUEST['organizator']);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>