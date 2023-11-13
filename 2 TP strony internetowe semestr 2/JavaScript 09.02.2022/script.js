// Dodanie obsługi zdarzenia kliknięcia na przycisk o identyfikatorze "przycisk"
document.querySelector('#przycisk').addEventListener('click', function(){
    // Wypisanie wartości z pola liczbowego o identyfikatorze "formularz1" w konsoli
    console.log(document.querySelector('#formularz1').value)
    
    // Utworzenie nowego elementu td
    var novaTabela = document.createElement("td");

    // Wypisanie informacji o nowej tabeli w konsoli
    console.log('novaTabela')

    // Dodanie nowego elementu td do pierwszego wiersza tabeli
    document.querySelector("table tr").appendChild(novaTabela);

});