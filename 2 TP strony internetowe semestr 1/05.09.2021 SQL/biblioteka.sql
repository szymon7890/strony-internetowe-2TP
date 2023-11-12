-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Wrz 2021, 10:36
-- Wersja serwera: 10.4.18-MariaDB
-- Wersja PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(11) NOT NULL,
  `imie` varchar(25) DEFAULT NULL,
  `nazwisko` varchar(25) DEFAULT NULL,
  `plec` int(11) DEFAULT NULL,
  `pesel` varchar(11) DEFAULT NULL,
  `telefon` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `imie`, `nazwisko`, `plec`, `pesel`, `telefon`) VALUES
(1, 'kamil', 'kowalski', 0, '00000000001', '482255010'),
(2, 'Kacper', 'Michalski', 0, '00000000002', '555783968'),
(3, 'Agata', 'Michalska', 0, '00000000003', '802324376 '),
(4, 'Nikola', 'Jankowska', 0, '00000000004', '9729729923'),
(5, 'Wojtek', 'Jankowski', 0, '00000000005', '9729409923'),
(6, 'Tomek', 'Kowalski', 0, '00000000006', '839820294'),
(7, 'Kamil', 'Kowalski', 0, '00000000007', '839823294');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `id_ksiazki` int(11) NOT NULL,
  `tytul` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `cena` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`id_ksiazki`, `tytul`, `autor`, `cena`) VALUES
(1, 'Rusz glowa SQL', 'Lynn Beighley', '99.00'),
(2, 'Język C++. Szkoła programowania. Wydanie VI', 'Stephen Prata', '99.00'),
(3, 'Czysty kod. Podręcznik dobrego programisty', 'Robert C. Martin', '69.00'),
(4, 'Czysta architektura. Struktura i design oprogramow', 'Robert C. Martin', '67.00'),
(5, 'HTML i CSS. Zaprojektuj i zbuduj witrynę WWW. Podr', 'Jon Duckett', '89.00'),
(6, 'Gotowanie', 'Mikołaj Madejski', '100.00'),
(7, 'Roblox Przygody', 'Mikołaj Madejski', '30.00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id_zamowienia` int(11) NOT NULL,
  `id_ksiazki` int(11) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `ilosc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id_zamowienia`, `id_ksiazki`, `id_klienta`, `data`, `ilosc`) VALUES
(1, 1, 1, '2021-01-03', 2),
(2, 2, 2, '2021-03-04', 1),
(3, 3, 3, '2021-05-06', 5),
(4, 4, 4, '2021-05-06', 5),
(5, 5, 5, '2021-07-18', 2),
(6, 6, 1, '2021-09-01', 2),
(7, 7, 3, '2021-08-20', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`);

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`id_ksiazki`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id_zamowienia`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `id_ksiazki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id_zamowienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
