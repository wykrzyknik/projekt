-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lis 2018, 07:00
-- Wersja serwera: 10.1.32-MariaDB
-- Wersja PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test2`
--

-- --------------------------------------------------------
--- Struktura tabeli dla tabeli 'uzytkownik'
---
CREATE TABLE `uzytkownik` (
  id int(11) NOT NULL,
  login text NOT NULL,
  haslo text NOT NULL,
  ranga int(11) NOT NULL,
  imie varchar(45) NOT NULL,
  nazwisko varchar(45) DEFAULT NULL,
  pesel varchar(11) DEFAULT NULL,
  miasto varchar(30) DEFAULT NULL,
  ulica varchar(30) DEFAULT NULL,
  numerdomu varchar(10) DEFAULT NULL,
  numerlokalu varchar(10) DEFAULT NULL,
  telefon varchar(12) DEFAULT NULL,
  email varchar(32) DEFAULT NULL
  
  
)  ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `uzytkownik` (`id`, `login`,`haslo`,`ranga`,`imie`,`nazwisko`,`pesel`,`miasto`,`ulica`,`numerdomu`,`numerlokalu`,`telefon`,`email`) VALUES
(1,'admin','21232f297a57a5a743894a0e4a801fc3',5,'damian','staskiewicz',NULL,'koło',NULL,NULL,NULL,NULL,NULL),
(2,'uczestnik','21232f297a57a5a743894a0e4a801fc3',1,'damian','staskiewicz',NULL,'koło',NULL,NULL,NULL,NULL,NULL);
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `uzytkownik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Struktura tabeli dla tabeli `jezyk`
--


CREATE TABLE `jezyk` (
  `id` int(11) NOT NULL,
  `NazwaJezyka` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `jezyk`
--

INSERT INTO `jezyk` (`id`, `NazwaJezyka`) VALUES
(1, 'polski'),
(2, 'angielski'),
(4, 'sss');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kurs`
--

CREATE TABLE `kurs` (
  `id` int(11) NOT NULL,
  `Idkursuoferta` int(11) NOT NULL,
  `Idlektora` int(11) NOT NULL,
  `Maksymalna_liczba_os` int(11) NOT NULL,
  `Nrsali` int(11) NOT NULL,
  `data_rozpoczecia` date NOT NULL,
  `data_zakonczenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kurs`
--

INSERT INTO `kurs` (`id`, `Idkursuoferta`, `Idlektora`, `Maksymalna_liczba_os`, `Nrsali`, `data_rozpoczecia`, `data_zakonczenia`) VALUES
(2, 3, 4, 4, 5, '2018-11-13', '0000-00-00'),
(5, 3, 4, 4, 5, '2018-11-13', '2018-04-13');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kursoferta`
--

CREATE TABLE `kursoferta` (
  `id` int(11) NOT NULL,
  `Idjezyka` int(11) NOT NULL,
  `Nazwaoferty` varchar(50) NOT NULL,
  `PoziomKursu` varchar(50) NOT NULL,
  `Cena` decimal(15,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kursoferta`
--

INSERT INTO `kursoferta` (`id`, `Idjezyka`, `Nazwaoferty`, `PoziomKursu`, `Cena`) VALUES
(3, 1, 'sta', 'sasa', '30.0000'),
(4, 3, '4', '1', '3.0000');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kursuczestnik`
--

CREATE TABLE `kursuczestnik` (
  `id` int(11) NOT NULL,
  `Idkursu` int(11) NOT NULL,
  `Iduczestnika` int(11) NOT NULL,
  `Opłacano` decimal(15,4) NOT NULL,
  `Opis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lektor`
--

CREATE TABLE `lektor` (
  `id` int(11) NOT NULL,
  `Nazwisko` varchar(50) NOT NULL,
  `Imie` varchar(50) NOT NULL,
  `Telefon` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Miasto` varchar(50) NOT NULL,
  `Ulica` varchar(50) DEFAULT NULL,
  `Numerdomu` varchar(8) DEFAULT NULL,
  `Numerlokalu` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `lektor`
--

INSERT INTO `lektor` (`id`, `Nazwisko`, `Imie`, `Telefon`, `Email`, `Miasto`, `Ulica`, `Numerdomu`, `Numerlokalu`) VALUES
(4, 'was', 'sa', '+48765751976', 'damians0413@gmail.com', 'sta', 'sta', '2', '3');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczestnik`
--

CREATE TABLE `uczestnik` (
  `id` int(11) NOT NULL,
  `Nazwisko` varchar(50) NOT NULL,
  `Imie` varchar(50) NOT NULL,
  `Data_ur` date NOT NULL,
  `PESEL` varchar(11) NOT NULL,
  `Kod_pocztowy` varchar(6) NOT NULL,
  `Miasto` varchar(50) NOT NULL,
  `Ulica` varchar(50) NOT NULL,
  `Numerlokalu` varchar(8) DEFAULT NULL,
  `Telefon` varchar(12) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uczestnik`
--

INSERT INTO `uczestnik` (`id`, `Nazwisko`, `Imie`, `Data_ur`, `PESEL`, `Kod_pocztowy`, `Miasto`, `Ulica`, `Numerlokalu`, `Telefon`, `Email`) VALUES
(3, 'was', 'sa', '2018-11-08', '95023222343', '23-600', 'sta', 'sta', '', '+48765751976', 'damians0413@gmail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `jezyk`
--
ALTER TABLE `jezyk`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Kurs_Idkursuoferta` (`Idkursuoferta`),
  ADD KEY `FK_Kurs_Idlektora` (`Idlektora`);

--
-- Indeksy dla tabeli `kursoferta`
--
ALTER TABLE `kursoferta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_KursOferta_Idjezyka` (`Idjezyka`);

--
-- Indeksy dla tabeli `kursuczestnik`
--
ALTER TABLE `kursuczestnik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_KursUczestnik_Idkursu` (`Idkursu`),
  ADD KEY `FK_KursUczestnik_Iduczestnika` (`Iduczestnika`);

--
-- Indeksy dla tabeli `lektor`
--
ALTER TABLE `lektor`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uczestnik`
--
ALTER TABLE `uczestnik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `jezyk`
--
ALTER TABLE `jezyk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `kurs`
--
ALTER TABLE `kurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `kursoferta`
--
ALTER TABLE `kursoferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `kursuczestnik`
--
ALTER TABLE `kursuczestnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `lektor`
--
ALTER TABLE `lektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `uczestnik`
--
ALTER TABLE `uczestnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
