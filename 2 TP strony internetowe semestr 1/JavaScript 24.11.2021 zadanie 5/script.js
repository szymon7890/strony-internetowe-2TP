// Nasłuchuj zdarzenia 'DOMContentLoaded' na oknie przeglądarki
window.addEventListener('DOMContentLoaded', (event) => {

	// Znajdź element o identyfikatorze 'input1' i przypisz go do zmiennej 'input'
	const input = document.querySelector('#input1');
  
	// Znajdź element o identyfikatorze 'click1' i przypisz go do zmiennej 'click'
	const click = document.querySelector('#click1');
  
	// Dodaj obsługę zdarzenia 'click' na elemencie 'click'
	click.addEventListener('click', function() {
	  // Deklaruj zmienną 'mcSzymon' i przypisz jej wartość z pola wejściowego 'input'
	  var mcSzymon = input.value;
  
	  // Rozpocznij pętlę, która działa od 1 do wartości 'mcSzymon'
	  for (var i = 1; i <= mcSzymon; i++) {
  
		// Sprawdź, czy aktualna wartość 'i' jest liczbą nieparzystą (reszta z dzielenia przez 2 równa 1)
		if (i % 2 == 1) {
		  // Jeśli tak, wypisz wartość 'i' w konsoli przeglądarki
		  console.log(i);
		}
	  }
	})
  })