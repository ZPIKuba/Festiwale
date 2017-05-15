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
    <h2>Dodawanie festiwalu</h2>
    <?php
    $servername = "zpi.cfo9cor2abpq.us-east-1.rds.amazonaws.com";
    $username = "ZPIUser";
    $password = "ZPIPassword";
    $dbname = "festiwale";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT Name, Surname FROM Organisers");
        $stmt->execute();

        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
    }
    catch(PDOException $error)
    {
        die("ERROR: Could not connect. " . $error->getMessage());
    }
    ?>
    <form method="post" action="insert.php">
        <h4>Dane szczegółowe:</h4>
        <p><label>Nazwa: <font color ="red">*</font> <input id = "nazwa" name = "nazwa" type = "text" size = "50" placeholder = "Nazwa festiwalu" required autofocus></label></p>
        <p><label>Utwór wspólny: <font color ="red">*</font> <input id = "utwor" name = "utwor" type = "text" size = "40" placeholder = "Utwór wspólny dla wszystkich zespołów" required></label></p>
        <p>
            <label>
                Organizator: <font color ="red">*</font>
                <select name = "organizator">
                    <?php
                    $i = 0;
                    while(!is_null($result[$i]['Surname']) && !is_null($result[$i]['Name']))
                    {
                        echo "<option>".$result[$i]['Surname']." ".$result[$i]['Name']."</option>";
                        $i++;
                    }
                    ?>
                </select>
            </label>
        </p>
        <p><label>Początek: <font color ="red">*</font> <input id = "poczatek" name = "start" type = "date" required min="2017-05-16"></label></p>
        <p><label>Koniec: <font color ="red">*</font> <input id = "koniec" name = "koniec" type = "date" required min="2017-05-17"></label></p>
        <p class="wyjasnienie"><font color ="red">*</font> - pola wymagane</p>
        <p>
            <input type = "submit" value = "Dodaj">
            <input type = "reset" value = "Wyczyść">
        </p>
    </form>
</body>
</html>