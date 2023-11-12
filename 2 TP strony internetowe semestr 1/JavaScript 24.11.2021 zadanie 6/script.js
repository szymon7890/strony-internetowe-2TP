// Nasłuchiwanie na zdarzenie "DOMContentLoaded", które oznacza, że strona jest gotowa do interakcji
window.addEventListener('DOMContentLoaded', (event) => {
	// Pobranie referencji do elementów HTML za pomocą ich identyfikatorów
	const buttonWidth = document.querySelector('#widthInput');
	const buttonHeight = document.querySelector('#heightInput');
	const button = document.querySelector('#buttonClick');

	// Nasłuchiwanie na kliknięcie przycisku "Utwórz"
	button.addEventListener('click', event => {
		// Tworzenie nowego elementu <div>
		var div = document.createElement("div");

		// Ustawienie szerokości nowego elementu na wartość wprowadzoną w polu "widthInput"
		div.style.width = buttonWidth.value + "px";

		// Ustawienie wysokości nowego elementu na wartość wprowadzoną w polu "heightInput"
		div.style.height = buttonHeight.value + "px";

		// Ustawienie obramowania nowego elementu na "thin solid black" (cienka, czarna ramka)
		div.style.border = "thin solid black";

		// Ustawienie koloru tła nowego elementu na zielony
		div.style.backgroundColor = "#00FF00";

		// Wyświetlenie informacji o nowym elemencie w konsoli przeglądarki
		console.log(div);

		// Dodanie nowego elementu do ciała strony
		document.querySelector("body").appendChild(div);
	});
});