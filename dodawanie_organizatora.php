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
<h2>Dodawanie organizatora</h2>

<form method="post" action="add_organizator.php">
    <h4>Dane szczegółowe:</h4>
    <p><label>Imię: <font color ="red">*</font> <input id = "imie" name = "imie" type = "text" size = "50" placeholder = "Imię" required autofocus></label></p>
    <p><label>Nazwisko: <font color ="red">*</font> <input id = "nazwisko" name = "nazwisko" type = "text" size = "50" placeholder = "Nazwisko" required></label></p>
    <p>
        <label>
            Płeć: <font color ="red">*</font>
            <select name = "plec">
                <option value="M" selected>mężczyzna</option>
                <option value="K">kobieta</option>
            </select>
        </label>
    </p>
    <p><label>Numer telefonu: <input id = "telefon" name = "telefon" type = "tel" pattern="[0-9]{9,15}" size = "15" placeholder = "Telefon"></label></p>
    <p><label>Adres: <input id = "adres" name = "adres" type = "text" size = "100" placeholder = "Adres pocztowy"></label></p>
    <p><label>E-mail: <font color ="red">*</font> <input id = "email" name = "email" type = "email" size = "70" placeholder = "Adres e-mail" required></label></p>
    <p><label>Login: <font color ="red">*</font> <input id = "login" name = "login" type = "text" size = "30" placeholder = "Login" required></label></p>
    <p><label>Hasło: <font color ="red">*</font> <input id = "haslo" name = "haslo" type = "password" size = "50" required></label></p>
    <p><label>Stanowisko: <input id = "stanowisko" name = "stanowisko" type = "text" size = "50" placeholder = "Stanowisko"></label></p>

    <p class="wyjasnienie"><font color ="red">*</font> - pola wymagane</p>
    <p>
        <input type = "submit" value = "Dodaj">
        <input type = "reset" value = "Wyczyść">
    </p>
</form>
</body>
</html>