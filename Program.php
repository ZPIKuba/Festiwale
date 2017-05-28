<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Festiwale</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
readfile('menu.html');
?>

<div class="container">
    <h2>Program</h2>
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
        $stmt = $conn->prepare("SELECT NameCh, IdCh FROM Choirs");
        $stmt->execute();

        $choirs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
         for ($x = 0; $x < count($choirs); $x++) {
             $stmt = $conn->prepare("SELECT * FROM Pieces WHERE IdPiece IN (
                      SELECT Title FROM Performs INNER JOIN Choirs ON Performs.Participant=".$choirs[$x]['IdCh'].")");
             $stmt->execute();
             $songs[$choirs[$x]['NameCh']]=$stmt->fetchAll(PDO::FETCH_ASSOC);
         }


        //print_r($result);
    }
    catch(PDOException $error)
    {
        die("ERROR: Could not connect. " . $error->getMessage());
    }
    ?>
    <?php
              for ($x = 0; $x < count($choirs); $x++) {
                  if(count($songs[$choirs[$x]['NameCh']])==0)
                      continue;
                  echo     "<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\"  data-target=\"#demo".$x."\" style='width: 250px;     margin: 4px 2px 4px 2px;'>
".$choirs[$x]['NameCh']."</button>
    <div id=\"demo".$x."\" class=\"collapse\">
                 <table>
   <tr>
   <th>Utwor</th>
   <th>Dlugosc</th>
</tr>";

                  for ($y = 0; $y < count($songs[$choirs[$x]['NameCh']]); $y++) {
                      echo "<tr>
<td>".$songs[$choirs[$x]['NameCh']][$y]['Title']."</td>
<td>".$songs[$choirs[$x]['NameCh']][$y]['Duration']."</td>


</tr>";

                  }


                     echo" </table>
    </div>";
                  echo "<br>";

    }

    ?>

</div>






</body>
</html>