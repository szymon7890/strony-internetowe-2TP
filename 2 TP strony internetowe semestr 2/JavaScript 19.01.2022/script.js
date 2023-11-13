/*
// Obsługa zdarzenia keyup na całym dokumencie
document.onkeyup = function (event) {

        // Sprawdzenie, czy naciśnięty klawisz to strzałka w lewo
        if (event.keyCode == 37) {
            console.log("Kliknąłem strzałkę w lewo");
    
            // Pobranie wszystkich elementów o klasie 'green'
            var element = document.querySelectorAll('.green');
    
            // Usunięcie klasy 'green' z pierwszego znalezionego elementu
            element[0].classList.remove("green");
    
            // Pobranie liczby z id aktualnego elementu i zmniejszenie jej o 1
            var number = ((element[0].id).substr(1, 1)) - 1;
    
            // Utworzenie identyfikatora nowego elementu
            var el = document.querySelector('#' + (element[0].id).substr(0, 1) + String(number) + (element[0].id).substr(2, 4));
    
            // Dodanie klasy 'green' do nowego elementu
            console.log(el.classList.add('green'));
        }
    
        // Sprawdzenie, czy naciśnięty klawisz to strzałka w górę
        if (event.keyCode == 38) {
            console.log("Kliknąłem strzałkę w górę");
    
            var element = document.querySelectorAll('.green');
    
            element[0].classList.remove("green");
    
            var number = ((element[0].id).substr(4, 4)) - 1;
    
            console.log('#' + (element[0].id).substr(0, 4) + String(number) + (element[0].id).substr(4, 4));
    
            var el = document.querySelector('#' + (element[0].id).substr(0, 4) + String(number));
    
            console.log(el.classList.add('green'));
        }
    
        // Sprawdzenie, czy naciśnięty klawisz to strzałka w prawo
        if (event.keyCode == 39) {
            console.log("Kliknąłem strzałkę w prawo");
    
            var element = document.querySelectorAll('.green');
    
            element[0].classList.remove("green");
    
            var number = ((element[0].id).substr(1, 1)) - 1;
    
            console.log('#' + (element[0].id).substr(0, 4) + String(number) + (element[0].id).substr(4, 4));
    
            var el = document.querySelector('#' + (element[0].id).substr(0, 4) + String(number));
    
            console.log(el.classList.add('green'));
        }
    
        // Sprawdzenie, czy naciśnięty klawisz to strzałka w dół
        if (event.keyCode == 40) {
            console.log("Kliknąłem strzałkę w dół");
    
            var element = document.querySelectorAll('.green');
    
            element[0].classList.remove("green");
    
            var number = ((element[0].id).substr(1, 1)) - 1;
    
            console.log('#' + (element[0].id).substr(0, 4) + String(number) + (element[0].id).substr(4, 4));
    
            var el = document.querySelector('#' + (element[0].id).substr(0, 4) + String(number));
    
            console.log(el.classList.add('green'));
    
        }
};
*/


