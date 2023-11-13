<?php

	// Komentarze dla poniższych linii są zakomentowane, ponieważ te zmienne są obecnie zakomentowane
	// $host = 'localhost';
	// $username = 'root';
	// $password = '';
	// $dbName = 'komis';

	// $conn = mysqli_connect($host, $username, $password, $dbName);

	// if(!$con) {
	//    echo "ERROR MySQL: Connect to Server\n";
	//    exit;
	// }

	// $sql = "INSERT INTO samochody (id, marka, model, rok, kolor)
	// VALUES (NULL, '$marka', '$model', '$rok', '$kolor')";

	# 2. Podłączamy się do określonej bazy danych.
	// $db = 'komis';
	// @mysql_select_db($db, $con);
	// mysql_close($con);

	// Wypisz wartości przesłane z formularza POST
	print_r($_POST['kolor']);
	print_r($_POST['marka']);
	print_r($_POST['model']);
	print_r($_POST['rok']);

	// Przypisz wartości do zmiennych
	$marka = $_POST['marka'];
	$model = $_POST['model'];
	$rok = $_POST['rok'];
	$kolor = $_POST['kolor'];

	// Utwórz połączenie z bazą danych MySQL
	$conn = new mysqli("localhost", "root", "", "komis");

	// Sprawdź, czy połączenie się udało
	if ($conn->connect_errno) {
		echo "Failed to connect to MySQL: " . $conn->connect_error;
		exit();
	}

	// Przygotuj zapytanie SQL do wstawienia danych do tabeli 'samochody'
	$sql = "INSERT INTO samochody (id, marka, model, rok, kolor)
	VALUES (NULL, '$marka', '$model', '$rok', '$kolor')";

	// Wykonaj zapytanie SQL
	$result = $conn->query($sql);

	// Zamknij połączenie z bazą danych
	$conn->close();

?>