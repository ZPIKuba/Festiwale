<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Wrocławski festiwal chórów osiedlowych" />
    <meta name="author" content="Jakub Granieczny, Piotr Kościuszko, Krzysztof Kozicki, Ewa Skórska" />
    <meta name="keywords" content="festiwal, chór, choir, Wrocław, singing" />
    <title>Festiwale</title>
</head>
<body>
    <h2>Edytowanie festiwalu</h2>

    <?php
        $servername = "zpi.cfo9cor2abpq.us-east-1.rds.amazonaws.com";
        $username = "ZPIUser";
        $password = "ZPIPassword";
        $dbname = "festiwale";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT * FROM Festivals WHERE IdF = 29");
        $stmt->execute();

        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $stmt2 = $conn->prepare("SELECT IdO, Name, Surname FROM Organisers");
        $stmt2->execute();

        $result2 = $stmt2 -> fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
    }
    catch(PDOException $error)
    {
        die("ERROR: Could not connect. " . $error->getMessage());
    }
    ?>

    <form method="post" action="edit_festiwal.php">
        <h4>Dane szczegółowe:</h4>
        <p><label>Nazwa: <font color ="red">*</font> <input id = "nazwa" name = "nazwa" type = "text" size = "50" value= "<?php echo $result[0]['Name']; ?>" required autofocus></label></p>
        <p><label>Utwór wspólny: <font color ="red">*</font> <input id = "utwor" name = "utwor" type = "text" size = "40" value= "<?php echo $result[0]['CommonPiece']; ?>" required></label></p>
        <p>
            <label>
                Organizator: <font color ="red">*</font>
                <select name = "organizator" id = "organizator">
                    <?php
                    $i = 0;
                    while(!is_null($result2[$i]['Surname']) && !is_null($result2[$i]['Name']))
                    {
                        echo "<option value=\"".$result2[$i]['IdO']."\">".$result2[$i]['Surname']." ".$result2[$i]['Name']."</option>";
                        $i++;
                    }
                    ?>
                </select>
            </label>
        </p>
        <?php
        $start = new DateTime($result[0]['StartDate']);
        $koniec = new DateTime($result[0]['EndDate']);
        ?>
        <p><label>Początek: <font color ="red">*</font> <input id = "poczatek" name = "start" type = "date" value= "<?php echo $start -> format('Y-m-d'); ?>" required></label></p>
        <p><label>Koniec: <font color ="red">*</font> <input id = "koniec" name = "koniec" type = "date" value= "<?php echo $koniec -> format('Y-m-d'); ?>" required></label></p>
        <p class="wyjasnienie"><font color ="red">*</font> - pola wymagane</p>
        <p>
            <input type = "submit" value = "Zmień">
            <input type = "reset" value = "Wyczyść">
        </p>
    </form>
</body>
</html>