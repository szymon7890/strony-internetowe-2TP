<?php
// Początek kodu PHP.

//kod sql który dodaj do phpmyadmin

//CREATE DAABASE komis;

/*

	CREATE TABLE samochody (
		id INT NOT NULL PRIMARY KEY(id),
		marka VACHRAR(50),
		model VARCHAR(50),
		rok VARCHAR(25),
		kolor VARCHAR(50)
	);

*/

if(isset($_POST['kolor']) && isset($_POST['marka']) && isset($_POST['model']) && isset($_POST['rok'])) {
    // Wszystkie pola formularza istnieją, więc możemy je przypisać do zmiennych.
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $rok = $_POST['rok'];
    $kolor = $_POST['kolor'];

	// Wyświetla zawartość pola o nazwie 'kolor' w tablicy POST.
	print_r($_POST['kolor']);
	// Wyświetla zawartość pola o nazwie 'marka' w tablicy POST.
	print_r($_POST['marka']);
	// Wyświetla zawartość pola o nazwie 'model' w tablicy POST.
	print_r($_POST['model']);
	// Wyświetla zawartość pola o nazwie 'rok' w tablicy POST.
	print_r($_POST['rok']);

	// Tworzenie połączenia z bazą danych MySQL.
	$conn = new mysqli("localhost", "root", "", "komis");

	// Sprawdzenie, czy wystąpił błąd podczas łączenia z bazą danych.
	if ($conn->connect_errno) {
		echo "Failed to connect to MySQL: " . $conn->connect_error;
		exit();
	}

	// Tworzenie zapytania SQL do wstawienia danych do tabeli 'samochody'.
	$sql = "INSERT INTO samochody (id, marka, model, rok, kolor)
			VALUES (NULL, '$marka', '$model', '$rok', '$kolor')";

	// Wykonanie zapytania SQL i zapisanie wyniku w zmiennej $result.
	$result = $conn->query($sql);

}

?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Ustawienie kodowania znaków na UTF-8 -->
        <meta charset="UTF-8">
        <!-- Tytuł strony -->
        <title>Komis samochodowy</title>
    </head>
    <body>

        <!-- Formularz wysyłający dane do pliku "index.php" za pomocą metody POST -->
        <form method="POST" action="index.php">
            <!-- Pole dla wprowadzenia marki samochodu -->
            <label>marka:</label> <input type="text" name="marka"> <br>

            <!-- Pole dla wprowadzenia modelu samochodu -->
            <label>model:</label> <input type="text" name="model"> <br>

            <!-- Pole dla wprowadzenia roku produkcji samochodu -->
            <label>rok produkcji:</label> <input type="year" name="rok"> <br>

            <!-- Pole dla wprowadzenia koloru samochodu -->
            <label>kolor:</label> <input type="text" name="kolor"> <br>

            <!-- Przycisk submit do wysłania formularza -->
            <input type="submit">
        </form>
    </body>
</html>
