-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3307
-- Timp de generare: ian. 10, 2023 la 10:32 PM
-- Versiune server: 10.4.27-MariaDB
-- Versiune PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `centrubiciclete1`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `angajati`
--

CREATE TABLE `angajati` (
  `angajatid` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `prenume` varchar(255) NOT NULL,
  `CNP` int(13) NOT NULL,
  `Adresa` varchar(255) NOT NULL,
  `Salariu` int(11) NOT NULL,
  `DataAngajarii` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `angajati`
--

INSERT INTO `angajati` (`angajatid`, `nume`, `prenume`, `CNP`, `Adresa`, `Salariu`, `DataAngajarii`) VALUES
(1, 'Rusu', 'Alisa', 1111111111, 'Aleea Corbu 33, Giulesti, Bucuresti', 3800, '2022-01-05'),
(2, 'Rotaru', 'Bogdanz Robert', 222222222, 'Aleea Independentei 23. Giulesti, Bucuresti', 5000, '2020-04-15'),
(3, 'Ursea', 'Cristian', 333333333, 'Primaverii, Bucuresti, Romania', 100000, '2020-01-01'),
(4, 'Andrei', 'Safira', 444444444, 'Aleea Lalelelor 33, Crangasi, Bucuresti', 4500, '2022-06-15'),
(5, 'Ageorghesei', 'Sebastian-Marius', 555555555, 'Aleea Alee 13, Pantelimon, Bucuresti ', 4500, '2020-04-23');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `biciclete`
--

CREATE TABLE `biciclete` (
  `inchiriata` int(255) NOT NULL,
  `bicicletaid` int(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `angajatid` int(13) NOT NULL,
  `numar_de_inmatriculare` varchar(225) NOT NULL,
  `capacitate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `biciclete`
--

INSERT INTO `biciclete` (`inchiriata`, `bicicletaid`, `id`, `angajatid`, `numar_de_inmatriculare`, `capacitate`) VALUES
(1, 1, '1', 4, 'AICI', 10),
(0, 2, '1', 4, 'mer', 100),
(1, 3, '1', 4, 'wqe', 4),
(0, 4, '1', 4, 'rir', 1),
(1, 5, '2', 4, 'dfg', 1),
(0, 6, '1', 5, 'hwp', 1),
(1, 7, '1', 5, 'qwe', 1),
(0, 8, '1', 5, 'ham', 2),
(1, 9, '2', 4, 'poi', 2);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `departament`
--

CREATE TABLE `departament` (
  `departamentid` int(13) NOT NULL,
  `nume_departament` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `departament`
--

INSERT INTO `departament` (`departamentid`, `nume_departament`) VALUES
(1, 'CIO'),
(2, 'Call Center'),
(3, 'Colectare'),
(4, 'Intretinere');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `departamentangajat`
--

CREATE TABLE `departamentangajat` (
  `angajatid` int(11) NOT NULL,
  `departamentid` int(11) NOT NULL,
  `ore_lucrate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `departamentangajat`
--

INSERT INTO `departamentangajat` (`angajatid`, `departamentid`, `ore_lucrate`) VALUES
(3, 1, 80),
(1, 2, 180),
(2, 3, 200),
(4, 4, 250),
(5, 4, 260);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `intretinuti`
--

CREATE TABLE `intretinuti` (
  `Nume` varchar(255) NOT NULL,
  `Prenume` varchar(255) NOT NULL,
  `intretinutid` int(11) NOT NULL,
  `varsta` int(13) NOT NULL,
  `angajatid` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `intretinuti`
--

INSERT INTO `intretinuti` (`Nume`, `Prenume`, `intretinutid`, `varsta`, `angajatid`) VALUES
('Ursea', 'Catalina', 1, 21, 3),
('Ursea ', 'Constantin', 2, 5, 3),
('Ursea', 'Minodora', 3, 3, 3),
('Rusu', 'Rares', 4, 30, 1),
('Safira', 'Diana', 5, 20, 4);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `id` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`name`, `firstname`, `password`, `user_name`, `id`) VALUES
('Shose', '', 'shoseee', 'shose', 1),
('Ursea Cristian', '', '202cb962ac59075b964b07152d234b70', 'ursea', 2),
('stanica', '', '202cb962ac59075b964b07152d234b70', 'stanica', 3),
('Tudor raileanu', '', '202cb962ac59075b964b07152d234b70', 'tudor', 4),
('Rotaru Bogdanel', '', '202cb962ac59075b964b07152d234b70', 'rota', 5),
('Shahin', '', '202cb962ac59075b964b07152d234b70', 'shahin', 6),
('Ion', '', '202cb962ac59075b964b07152d234b70', 'ion', 7),
('Maria Marin', '', '202cb962ac59075b964b07152d234b70', 'maria', 8),
('IrinaLepa', '', '202cb962ac59075b964b07152d234b70', 'irina', 9),
('Ursea Cristian iiii', '', '202cb962ac59075b964b07152d234b70', 'root', 10),
('Irina Lepa', '', '202cb962ac59075b964b07152d234b70', 'irinalepa', 11),
('ursea 2', '', '202cb962ac59075b964b07152d234b70', 'ursea2', 12),
('Ursea Cristian Lab 8', '', '202cb962ac59075b964b07152d234b70', 'laborator', 13);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `angajati`
--
ALTER TABLE `angajati`
  ADD PRIMARY KEY (`angajatid`);

--
-- Indexuri pentru tabele `biciclete`
--
ALTER TABLE `biciclete`
  ADD PRIMARY KEY (`bicicletaid`);

--
-- Indexuri pentru tabele `departament`
--
ALTER TABLE `departament`
  ADD PRIMARY KEY (`departamentid`);

--
-- Indexuri pentru tabele `departamentangajat`
--
ALTER TABLE `departamentangajat`
  ADD PRIMARY KEY (`ore_lucrate`);

--
-- Indexuri pentru tabele `intretinuti`
--
ALTER TABLE `intretinuti`
  ADD PRIMARY KEY (`intretinutid`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `biciclete`
--
ALTER TABLE `biciclete`
  MODIFY `bicicletaid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
