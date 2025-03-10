-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sty 27, 2025 at 03:52 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handmadetree`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `hawajskie_palmy`
--

CREATE TABLE `hawajskie_palmy` (
  `id` int(11) NOT NULL,
  `options` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `provider` varchar(255) NOT NULL,
  `photo_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) DEFAULT NULL,
  `imie` varchar(255) DEFAULT NULL,
  `numer_telefonu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `hawajskie_palmy`
--

INSERT INTO `hawajskie_palmy` (`id`, `options`, `description`, `provider`, `photo_name`, `created_at`, `email`, `imie`, `numer_telefonu`) VALUES
(211, '[\"Rozmiar: \\u015brednie\",\"Material: aluminium\",\"Kolor lisci: niebieski\",\"Kolor pnia: czrany\",\"Ilo\\u015b\\u0107 palm: dwa\",\"Rodzaj doniczki: Doniczka Ceramiczna\",\"Rodzaj ozdoby: bursztyny\",\"Grawerowanie: Bez\"]', 'opis', 'hawajskiePalmy', '6777f34205f51_Screenshot from 2024-12-14 16-42-49.png', '2025-01-03 14:25:06', 'borowskisebastjan@gmail.com', 'Biały', 5364768),
(212, '[\"Rozmiar: ma\\u0142e\",\"Material: mied\\u017a\",\"Ilo\\u015b\\u0107 palm: jeden\",\"Rodzaj doniczki: Drewno\",\"Rodzaj ozdoby: bursztyny\",\"Grawerowanie: olcia\"]', 'Brak', 'hawajskiePalmy', NULL, '2025-01-03 14:27:54', 'borowskisebastjan@gmail.com', 'BiałyA', 53647689);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `newsletter`
--

CREATE TABLE `newsletter` (
  `idEmail` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`idEmail`, `email`) VALUES
(1, 'borowskisebastjan@gmail.com'),
(2, 'aleksandrakuklinska@gmal.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `hawajskie_palmy`
--
ALTER TABLE `hawajskie_palmy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`idEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hawajskie_palmy`
--
ALTER TABLE `hawajskie_palmy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `idEmail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
