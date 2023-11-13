<?php
    //5 zmiennych kazdego typu

    $szkola = "chodzenie do szkoly";

    $tablica[0] = "Wpis numer 0";

    $liczba = 3;

    $przcinkowa = 4.99;

    //cos pustego to jest null
    $specjalna = null;

    //Napisz funkcje ktora zwroci sume 2 podanych liczb jako parametry

    function funkcja() {
        echo "Funkcja 1";
    }

    funkcja();

    function Matematyka ($suma1, $suma2) {
        $sum = $suma1 + $suma2;
        echo "dodawanie sumy: $sum";
    }

    Matematyka(20, 20);

    //Napisz funkcje ktora obliczy pole kola na podstawie wprowadzonego parametru

    function kolo ($parametr) {
        echo 3.14 * ($parametr*$parametr);
    }

    kolo(3);

    //Napisz funkcje ktora po przyjeciu parametrow wyswietli obliczone pole trapezu

    function trapez ($a, $b, $h) {
        echo (($a + $b) * $h) / 2;
    }

    trapez(10, 14, 2);

    //Napisz fukcje która zwróci wynik mnożenia

    function phpFunkcja($number){
        return $number * $number;
    }

    echo phpfunkcja(2);

    //Napisz funkcje ktora obliczy obwod protokata na podstwie wprowadzonej parametrow

    
?>