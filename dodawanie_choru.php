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
<h2>Dodawanie chóru</h2>

<form method="post" action="add_chor.php">
    <h3>Dane szczegółowe:</h3>
    <p><label>Nazwa chóru: <font color ="red">*</font> <input id = "nazwa" name = "nazwa" type = "text" size = "60" placeholder = "Nazwa chóru" required autofocus></label></p>
    <p><label>Liczba członków: <font color ="red">*</font> <input id = "liczba_czlonkow" name = "liczba_czlonkow" type = "number" size = "3" required></label></p>
    <p><label>Pochodzenie: <font color ="red">*</font> <input id = "pochodzenie" name = "pochodzenie" placeholder="Nazwa miasta, osiedla..." type = "text" size = "100" required></label></p>
    <p><label>Opis: </label><textarea id = "opis" name = "opis" rows="5" cols="50"></textarea></p>
    <p><label>Obrazek: <input id = "obrazek" name = "obrazek" type = "file"></label></p>

    <h3>Dane prezesa chóru:</h3>
    <p><label>Imię: <font color ="red">*</font> <input id = "imie_prezesa" name = "imie_prezesa" type = "text" size = "50" placeholder = "Imię prezesa" required></label></p>
    <p><label>Nazwisko: <font color ="red">*</font> <input id = "nazwisko_prezesa" name = "nazwisko_prezesa" type = "text" size = "50" placeholder = "Nazwisko prezesa" required></label></p>
    <p><label>Numer telefonu: <input id = "telefon_prezesa" name = "telefon_prezesa" type = "tel" pattern="[0-9]{9,15}" size = "15" placeholder = "Telefon prezesa"></label></p>
    <p><label>Adres: <input id = "adres_prezesa" name = "adres_prezesa" type = "text" size = "100" placeholder = "Adres pocztowy prezesa"></label></p>
    <p><label>E-mail: <font color ="red">*</font> <input id = "email_prezesa" name = "email_prezesa" type = "email" size = "70" placeholder = "Adres e-mail prezesa" required></label></p>
    <p><label>Początek prezesury: <input id = "poczatek_prezesury" name = "poczatek_prezesury" type = "date" required min="1900-01-01"></label></p>

    <h3>Dane dyrygenta chóru:</h3>
    <p><label>Imię: <font color ="red">*</font> <input id = "imie_dyrygenta" name = "imie_dyrygenta" type = "text" size = "50" placeholder = "Imię dyrygenta" required></label></p>
    <p><label>Nazwisko: <font color ="red">*</font> <input id = "nazwisko_dyrygenta" name = "nazwisko_dyrygenta" type = "text" size = "50" placeholder = "Nazwisko dyrygenta" required></label></p>
    <p>
        <label>
            Płeć: <font color ="red">*</font>
            <select name = "plec_dyrygenta">
                <option value="M" selected>mężczyzna</option>
                <option value="K">kobieta</option>
            </select>
        </label>
    </p>
    <p><label>Numer telefonu: <input id = "telefon_dyrygenta" name = "telefon_dyrygenta" type = "tel" pattern="[0-9]{9,15}" size = "15" placeholder = "Telefon dyrygenta"></label></p>
    <p><label>Adres: <input id = "adres_dyrygenta" name = "adres_dyrygenta" type = "text" size = "100" placeholder = "Adres pocztowy dyrygenta"></label></p>
    <p><label>E-mail: <font color ="red">*</font> <input id = "email_dyrygenta" name = "email_dyrygenta" type = "email" size = "70" placeholder = "Adres e-mail dyrygenta" required></label></p>
    <p><label>Opis: </label><textarea id = "opis_dyrygenta" name = "opis_dyrygenta" rows="5" cols="50"></textarea></p>
    <p><label>Zdjęcie: <input id = "zdjecie_dyrygenta" name = "zdjecie_dyrygenta" type = "file"></label></p>

    <p class="wyjasnienie"><font color ="red">*</font> - pola wymagane</p>
    <p>
        <input type = "submit" value = "Dodaj">
        <input type = "reset" value = "Wyczyść">
        <input type = "button" value = "Anuluj" onclick="location.href='/adminPanel.php'">
    </p>
</form>
</body>
</html>