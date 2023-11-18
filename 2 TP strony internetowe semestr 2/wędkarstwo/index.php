<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>wędkarstwo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div id="container">
            <header>
                <h1 id="titleWelcome">Zgłoszenie na kartę wędkarską</h1>
            </header>
            <nav>
                <div id="articleWelcome">
                    <!-- Formularz zgłoszenia na kartę wędkarską -->
                    <p>Formularz - karta wędkarska</p>
                    <form method="POST" action="index.php">
                        <!-- Pola do wprowadzenia danych -->
                        <label>imię:</label><br><input type="text" name="name"><br>
                        <label>nazwisko:</label><br><input type="text" name="lastName"><br>
                        <label>adres:</label><br><input type="text" name="adres"><br>
                        <!-- Przyciski do obsługi formularza -->
                        <input type="reset" value="CZYŚĆ">
                        <input type="submit" value="ZAPISZ" >
                    </form>
                </div>
            </nav>
            <footer>
                <!-- Stopka strony zawierająca informacje o typach łowisk -->
                <p id="footerText">Typy łowisk</p>
                <ul>
                    <li>Zalewy</li>
                    <li>Stawy</li>
                    <li>Jeziora</li>
                    <li>Rzeki</li>
                </ul>
                <!-- Obrazek przedstawiający łowienie -->
                <img id="obrazekLowienia" src="Screenshot 2022-05-23 at 17.04.58.PNG">
                <!-- Informacja o autorze strony -->
                <p id="autorStrony">Stronę przygotował: Szymon Kalinowski</p>
                <!-- Link w stopce prowadzący do karty wędkarskiej na YouTube -->
                <span id="linkFooter">
                    <a href="https://youtube.com">Karta wędkarska</a>
                </span>
            </footer>
        </div>
    </body>
</html>
<?php

    /*
        //Tworzenie bazy danych o nazwie kartaWedkarska
        CREATE DATABASE kartawedkarska;

        //Stworzenie tabeli o nazwie uczestnicy 
        CREATE TABLE uczestnicy (
            id int not null AUTO_INCREMENT,
            imie VARCHAR(50),
            nazwisko VARCHAR(50),
            adres VARCHAR(100),
            PRIMARY KEY(id)
        );
    
    */
    
    // Informacje dotyczące bazy danych
    $servername = "localhost";  // Nazwa serwera (lokalny)
    $username = "root";         // Nazwa użytkownika bazy danych
    $password = "";             // Hasło użytkownika (puste w przypadku domyślnego użytkownika root)
    $dbName = "kartawedkarska"; // Nazwa bazy danych

    // Nawiązanie połączenia z bazą danych
    $conn = new mysqli($servername, $username, $password, $dbName);

    // Sprawdzenie czy połączenie zostało poprawnie nawiązane
    if ($conn->connect_error) {
        // W przypadku błędu w połączeniu, skrypt zostanie zakończony, a komunikat błędu zostanie wyświetlony.
        die("Nie połączono się z bazą danych: " . $conn->connect_error);
    }

    // Sprawdzenie, czy dane potrzebne do dodania rekordu zostały przesłane z formularza
    if (isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['adres'])) {
        // Pobranie danych z formularza
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $adres = $_POST['adres'];

        // Przygotowanie zapytania SQL do dodania rekordu
        $sqlquery = "INSERT INTO `uczestnicy`(`id`, `imie`, `nazwisko`, `adres`) VALUES (NULL, '$name', '$lastName', '$adres');";
        
        // Wykonanie zapytania SQL i sprawdzenie wyniku
        if ($conn->query($sqlquery) === TRUE) {
            // Jeśli zapytanie zakończy się sukcesem, wyświetl komunikat
            echo "Rekord został pomyślnie dodany";
        } else {
            // W przypadku błędu wyświetl komunikat z informacją o błędzie
            echo "Błąd: " . $sqlquery . "<br>" . $conn->error;
        }
    }

?>
