<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

        <h1>CRUD - Create Read Update Delete</h1>

        <!-- Formularz Rejestracji Użytkownika (Create) -->
        <p>Rejestracja Użytkownika</p>
        <form action="index.php" method="POST">
            <label>user</label><input type="text" name="user"><br>
            <label>password</label><input type="password" name="passwordCreate"><br>
            <label>age</label><input type="text" name="age"><br>
            <input type="submit" value="submit">
        </form><br>

        <!-- Formularz Wyświetlania Danych (Read) -->
        <p>Wyświetlanie Danych</p>
        <form action="index.php"method="POST">
            <label>Show date</label><input type="submit" name="showData">
        </form>

        <!-- Formularz Aktualizacji Danych (Update) -->
        <p>Aktualizacja Danych</p>
        <form action="index.php" method="POST">
            <label>id</label><input type="text" name="idUpdate"><br>
            <label>user</label><input type="text" name="userUpdate"><br>
            <label>password</label><input type="password" name="passwordUpdate"><br>
            <label>age</label><input type="text" name="ageUpdate"><br>
            <input type="submit" value="update">
        </form><br>

        <!-- Formularz Usuwania Konta (Delete) -->
        <p>Usuwania Konta</p>
        <form action="index.php" method="POST">
            <label>delete account write id</label><input type="text" name="deleteAccount"><br>
            <input type="submit" value="deleteAccountSubmit">
        </form>

    </body>
</html>
<?php

    /*
    
    -- Tworzenie bazy danych o nazwie "CRUD"
    CREATE DATABASE CRUD;
  
    Tworzenie tabeli "crud" z kolumnami:
    - id: Liczba całkowita, nie może być pusta, autoinkrementowana, klucz główny.
    - user: Łańcuch znaków o maksymalnej długości 50.
    - password: Łańcuch znaków o maksymalnej długości 255.
    - age: Liczba całkowita.

    CREATE TABLE crud (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        user VARCHAR(50),
        password VARCHAR(255),
        age INT
    );
    
    */

    // Informacje dotyczące bazy danych
    $servername = "localhost";  // Nazwa serwera (lokalny)
    $username = "root";         // Nazwa użytkownika bazy danych
    $password = "";             // Hasło użytkownika (puste w przypadku domyślnego użytkownika root)
    $dbName = "CRUD";           // Nazwa bazy danych

    // Nawiązanie połączenia z bazą danych
    $conn = new mysqli($servername, $username, $password, $dbName);

    // Sprawdzenie czy połączenie zostało poprawnie nawiązane
    if ($conn->connect_error) {
        // W przypadku błędu w połączeniu, skrypt zostanie zakończony, a komunikat błędu zostanie wyświetlony.
        die("Nie połączono się z bazą danych: " . $conn->connect_error);
    }
    
    // Sprawdzenie, czy dane potrzebne do dodania rekordu zostały przesłane z formularza
    if (isset($_POST['user']) && isset($_POST['passwordCreate']) && isset($_POST['age'])) {
        // Pobranie danych z formularza
        $user = $_POST['user'];
        $passwordCreate = $_POST['passwordCreate'];
        $age = $_POST['age'];

        // Przygotowanie zapytania SQL do dodania rekordu
        $sqlquery = "INSERT INTO `crud` (`id`, `user`, `password`, `age`) VALUES (NULL, '$user', '$passwordCreate', '$age')";

        // Wykonanie zapytania SQL i sprawdzenie wyniku
        if ($conn->query($sqlquery) === TRUE) {
            // Jeśli zapytanie zakończy się sukcesem, wyświetl komunikat
            echo "Rekord został pomyślnie dodany";
        } else {
            // W przypadku błędu wyświetl komunikat z informacją o błędzie
            echo "Błąd: " . $sqlquery . "<br>" . $conn->error;
        }
    }

    // Sprawdzenie, czy przycisk "showData" został naciśnięty
    if (isset($_POST['showData'])) {
        // Pobranie wartości przesłanej w formularzu (może być dowolna, ponieważ tylko obecność jest sprawdzana)
        $showData = $_POST['showData'];

        // Zapytanie SQL do pobrania wszystkich rekordów z tabeli 'crud'
        $sqlShowRecord = "SELECT * FROM crud";
        
        // Wykonanie zapytania SQL
        $result = $conn->query($sqlShowRecord);

        // Sprawdzenie, czy zapytanie zwróciło wyniki
        if ($result->num_rows > 0) {
            // Iteracja przez wyniki i wyświetlenie informacji o każdym rekordzie
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . " - user: " . $row["user"] . " - password: " . $row["password"] . " - age: " . $row["age"] . "<br>";
            }
        } else {
            // Komunikat, gdy nie ma żadnych wyników
            echo "0 result";
        }
    }

    // Sprawdzenie, czy przekazano wszystkie niezbędne dane do aktualizacji rekordu
    if (isset($_POST["idUpdate"]) && isset($_POST["userUpdate"]) && isset($_POST["passwordUpdate"]) && isset($_POST["ageUpdate"])) {
        // Pobranie danych z formularza
        $idUpdate = $_POST["idUpdate"];
        $userUpdate = $_POST["userUpdate"];
        $passwordUpdate = $_POST["passwordUpdate"];
        $ageUpdate = $_POST["ageUpdate"];

        // Przygotowanie zapytania SQL do aktualizacji rekordu w tabeli 'crud'
        $sqlUpdate = "UPDATE `crud` SET `id`='$idUpdate', `user`='$userUpdate', `password`='$passwordUpdate', `age`='$ageUpdate' WHERE 1";

        // Wykonanie zapytania SQL i sprawdzenie wyniku
        if ($conn->query($sqlUpdate) === TRUE) {
            // Jeśli zapytanie zakończy się sukcesem, wyświetl komunikat potwierdzający
            echo "Zaaktualizowano dane w bazie danych";
        } else {
            // W przypadku błędu wyświetl komunikat z informacją o błędzie
            echo "ERROR: " . $sqlUpdate . "<br>" . $conn->error;
        }
    }

    // Sprawdzenie, czy przekazano identyfikator do usunięcia
    if (isset($_POST["deleteAccount"])) {
        // Pobranie identyfikatora z formularza
        $deleteAccount = $_POST["deleteAccount"];

        // Przygotowanie zapytania SQL do usunięcia rekordu z tabeli 'crud' na podstawie identyfikatora
        $sqlDelete = "DELETE FROM `crud` WHERE $deleteAccount";

        // Wykonanie zapytania SQL i sprawdzenie wyniku
        if ($conn->query($sqlDelete) == TRUE) {
            // Jeśli zapytanie zakończy się sukcesem, wyświetl komunikat potwierdzający
            echo "Usunięto użytkownika o podanym identyfikatorze: " . $deleteAccount;
        } else {
            // W przypadku błędu wyświetl komunikat z informacją o błędzie
            echo "ERROR: " . $sqlDelete . "<br>" . $conn->error;
        }
    }

    // Zamknięcie połączenia z bazą danych
    $conn->close();

?>