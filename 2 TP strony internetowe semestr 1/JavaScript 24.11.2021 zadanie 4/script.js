// Nasłuchuje zdarzenia "DOMContentLoaded", które jest wyzwalane po załadowaniu całej struktury strony
window.addEventListener('DOMContentLoaded', (event) => {
	// Pobiera przyciski i div do zmiany rodziny czcionek
	const button1 = document.querySelector('#click1');
	const button2 = document.querySelector('#click2');
	const button3 = document.querySelector('#click3');
	const div = document.querySelector('#text');

	// Dodaje obsługę kliknięcia na przycisk 1
	button1.addEventListener('click', function() {
		// Zmienia rodzinę czcionek elementu div na "Fira Sans" lub czcionkę bezszeryfową, gdy przycisk 1 jest kliknięty
		div.style.fontFamily = 'Fira Sans, sans-serif';
	});

	// Dodaje obsługę kliknięcia na przycisk 2
	button2.addEventListener('click', function() {
		// Zmienia rodzinę czcionek elementu div na "Shadows Into Light" lub czcionkę o ręcznym charakterze, gdy przycisk 2 jest kliknięty
		div.style.fontFamily = 'Shadows Into Light, cursive';
	});

	// Dodaje obsługę kliknięcia na przycisk 3
	button3.addEventListener('click', function() {
		// Zmienia rodzinę czcionek elementu div na "Courgette" lub inny kursywowy font, gdy przycisk 3 jest kliknięty
		div.style.fontFamily = 'Courgette, cursive';
	});
});