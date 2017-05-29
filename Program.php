<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Festiwale</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
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
                  echo     "<div style=\"width:800px; margin: 0 auto; \"> <button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\"  data-target=\"#demo".$x."\" style='width: 500px;     margin: 4px 2px 4px 2px;'>
".$choirs[$x]['NameCh']."</button>
    <div id=\"demo".$x."\" class=\"collapse\" >
                 <table width='500'>
   <tr>
   <th>Utwor</th>
   <th>Dlugosc</th>
</tr>";

                  for ($y = 0; $y < count($songs[$choirs[$x]['NameCh']]); $y++) {
                      $tmp = $songs[$choirs[$x]['NameCh']][$y]['Title'];
                      $creationYear = $songs[$choirs[$x]['NameCh']][$y]['CreationYear'];
                      $duration = $songs[$choirs[$x]['NameCh']][$y]['Duration'];
                      $composerId=$songs[$choirs[$x]['NameCh']][$y]['Composer'];
                  //    $stmt = $conn->prepare("SELECT * FROM Composers WHERE IdComp=".$composerId);
                  //   $stmt->execute();
                //     $composer = $stmt->fetchAll(PDO::FETCH_ASSOC);




                      echo "<tr>
<td><a href='#' id=\"myBtn\" onclick=\"f1('".$tmp."','".$creationYear."','".$duration."','".$composerId."')\">".$tmp."</a>
  </td>
<td>".(empty($duration) ? ('--') : ($duration)) ."</td>

<!-- The Modal -->
<div id=\"myModal\" class=\"modal\">

  <!-- Modal content -->
  <div class=\"modal-content\">
    <span class=\"close\" onclick='f2()'>&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>


</tr>";

                  }


                     echo" </table>
    </div> </div>";
                  echo "<br>";

    }

    ?>

</div>





<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    function f1(str, str2, str3, str4) {
        modal.style.display = "block";
        modal.innerHTML="<div class=\"modal-content\"> <span class=\"close\" " +
            "onclick=\"f2()\">&times;</span> <p>"+
            "<b>Utwor:</b> "+str+"<br>"+
            "<b>Rok powstania: </b>"+str2+"<br>"+
            "<b>Czas trwania: </b>"+str3+"<br>"+
            "<b>Kompozytor: </b>"+str4+"<br>"+


            "</p> </div>";
    }

   function f2() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>