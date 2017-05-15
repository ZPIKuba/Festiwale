<?php
$servername = "zpi.cfo9cor2abpq.us-east-1.rds.amazonaws.com";
$username = "ZPIUser";
$password = "ZPIPassword";
$dbname = "festiwale";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $error){
    die("ERROR: Could not connect. " . $error->getMessage());
}

try {
    $sql = 'INSERT INTO Festivals (StartDate, EndDate, CommonPiece, Name, MainOrg)
     VALUES (:start, :koniec, :utwor, :nazwa, :org)';
    $stmt = $conn->prepare($sql);

    // bind parameters to statement
    $stmt->bindParam(':start', $_REQUEST['start']);
    $stmt->bindParam(':koniec', $_REQUEST['koniec']);
    $stmt->bindParam(':utwor', $_REQUEST['utwor']);
    $stmt->bindParam(':nazwa', $_REQUEST['nazwa']);
    $stmt->bindParam(':org', $_REQUEST['organizator']);

    // execute the prepared statement
    $stmt->execute();
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>