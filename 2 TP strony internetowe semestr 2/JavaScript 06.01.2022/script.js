// Deklaracja zmiennej a i przypisanie jej wartości 4
var a = 4;

// Instrukcja switch sprawdzająca wartość zmiennej a
switch (a) {
    // Jeśli a jest równe 1, wykonaj ten blok kodu
    case 1:
         alert("a jest rowne 1");
         break;

    // Jeśli a jest równe 2, wykonaj ten blok kodu
    case 2:
        alert("a jest rowne 2");
        break;

    // Jeśli a jest równe 3, wykonaj ten blok kodu
    case 3:
        alert("a jest rowne 3");
        break;

    // Jeśli żaden z powyższych przypadków nie pasuje, wykonaj ten blok kodu (default)
    default:
        alert("zła wartość");
        break;
}