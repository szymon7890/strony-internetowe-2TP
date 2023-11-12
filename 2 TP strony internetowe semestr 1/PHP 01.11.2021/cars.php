<?php
// Początek bloku kodu PHP

	// Wyświetlenie zawartości tablicy $_POST
	print_r($_POST);

	// Tworzenie połączenia z bazą danych MySQL
	$conn = new mysqli("localhost", "root", "", "serwis");

	// Sprawdzenie, czy połączenie z bazą danych się udało
	if ($conn->connect_errno) {
		echo "Failed to connect to MySQL: " . $conn->connect_error;
		exit();
	}

	// Przykład kodu, który jest zakomentowany (nieaktywny) - próba wstawienia danych do bazy danych
	//$sql = "INSERT INTO `samochody`(`id_samochodu`, `marka_samochodu`, `model_samochodu`, `rocznik`, `uzywany`) VALUES ('1', '2', '3', '2021-10-06 12:00:00', '5')";

	// Wykonanie zapytania SQL (wstawienie danych do bazy danych)
	$result = $conn->query($sql);

// Koniec bloku kodu PHP
?>