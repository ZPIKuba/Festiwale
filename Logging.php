<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>logging</title>
    <?php
    if (empty($_POST["login"])) {
    }
    else
    {

    $servername = "zpi.cfo9cor2abpq.us-east-1.rds.amazonaws.com";
    $username = "ZPIUser";
    $password = "ZPIPassword";
    $dbname = "festiwale";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT * FROM Organisers WHERE Login='".$_POST["login"]."'");
        $stmt->execute();

        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
        if (!empty($_POST["pass"])&&count($result)>0)
        {
            if(!strcmp($_POST["pass"],$result[0]['Password']))
            {
                echo "asdawdasdawdasaw";
                $_SESSION["login"] = test_input($_POST["login"]);

                header('Location: /adminPanel.php');
                die();


            }
            else
                echo "wrong password";
        }
    }
    catch(PDOException $error)
    {
        die("ERROR: Could not connect. " . $error->getMessage());
    }
        header('Location: /festivalInfo.php');


    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if( isset($_SESSION["login"])  )
    {
        echo "<br> you are logged in as ".$_SESSION["login"]." <br>";
        echo "<a href=\"logout.php\">Logout</a><br>";
        die("<a href='form2.php'>b</a></head></html>");

    }
    ?>
</head>
