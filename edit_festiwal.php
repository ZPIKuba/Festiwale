<?php
$servername = "zpi.cfo9cor2abpq.us-east-1.rds.amazonaws.com";
$username = "ZPIUser";
$password = "ZPIPassword";
$dbname = "festiwale";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE Festivals
            SET StartDate = '".$_POST['start']."', EndDate = '".$_POST['koniec']."', CommonPiece = '".$_POST['utwor']."',
            Name = '".$_POST['nazwa']."', MainOrg = '".$_POST['organizator']."'
            WHERE IdF = 29";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    /*$stmt->bindParam(':start', $_REQUEST['start']);
    $stmt->bindParam(':koniec', $_REQUEST['koniec']);
    $stmt->bindParam(':utwor', $_REQUEST['utwor']);
    $stmt->bindParam(':nazwa', $_REQUEST['nazwa']);
    $stmt->bindParam(':org', $_REQUEST['organizator']);*/

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " record(s) updated successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>