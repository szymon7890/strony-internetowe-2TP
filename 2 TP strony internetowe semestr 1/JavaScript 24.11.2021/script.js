window.addEventListener('DOMContentLoaded', (event) => {
    // Nasłuchuje zdarzenia "DOMContentLoaded" na etapie wczytywania strony

    document.querySelector('#submit').addEventListener("click", function() {
        // Nasłuchuje zdarzenia "click" na przycisku o identyfikatorze "submit"
        var input = document.querySelector('#yes').value;
        // Pobiera wartość wpisaną w elemencie o identyfikatorze "yes"
        checkString(input);
        // Wywołuje funkcję checkString, przekazując wprowadzony tekst jako argument
    });

    function checkString(input) {
        // Funkcja do analizy tekstu

        var string = ''; // Inicjalizacja pustego ciągu znaków, w którym zostaną umieszczone znaki "(" i ")"
        var letters = []; // Tablica do przechowywania unikalnych liter w tekście

        for (let i = 0; i < input.length; i++) {
            var letter = input[i]; // Pobranie kolejnej litery z tekstu
            var counter = 0; // Inicjalizacja licznika wystąpień danej litery

            // Pętla wewnętrzna sprawdza, ile razy litera występuje w tekście
            for (let j = 0; j < input.length; j++) {
                if (letter == input[j]) {
                    counter += 1; // Zliczanie wystąpień danej litery
                }
            }

            if (counter == 1) {
                string += "("; // Jeśli litera występuje tylko raz, dodaj "(" do ciągu wynikowego
            } else {
                if (letters.indexOf(input[i]) == -1) {
                    string += ")"; // Jeśli litera jest unikalna (po raz pierwszy widziana), dodaj ")"
                    letters.push(input[i]); // Dodaj literę do tablicy unikalnych liter
                }
            }
        }

        console.log(string); // Wyświetlenie wynikowego ciągu znaków w konsoli
    }
});