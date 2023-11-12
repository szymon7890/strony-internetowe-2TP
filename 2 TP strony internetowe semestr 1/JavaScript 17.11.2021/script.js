// Nasłuchuje zdarzenia "DOMContentLoaded", które oznacza, że ​​strona została załadowana w przeglądarce.
window.addEventListener('DOMContentLoaded', (event) => {
	// Pobiera element reklamy o identyfikatorze "advertisement" i przypisuje go do zmiennej "advertisement".
	const advertisement = document.querySelector('#advertisement');

	// Dodaje nasłuchiwanie na zdarzenie kliknięcia do elementu reklamy.
	advertisement.addEventListener('click', (event) => {
		// Po kliknięciu wyświetla komunikat "Kliknąłem" w konsoli przeglądarki.
		console.log('Kliknąłem');

		// Usuwa element reklamy ze strony.
		advertisement.remove();
	});
});