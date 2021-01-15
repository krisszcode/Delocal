-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Jan 15. 12:20
-- Kiszolgáló verziója: 10.4.13-MariaDB
-- PHP verzió: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `falatozz`
--
CREATE DATABASE IF NOT EXISTS falatozz DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE falatozz;
-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone_number`, `address`) VALUES
(1, 'Nagy Erno', 'erno@gmail.com', '06301259463', '4325 Kiskunmajsa, Lapatos u. 23'),
(2, 'Bordely Bela', 'bela12@citromail.hu', '06702564113', '3611 Sajoszentpeter, Almas u. 11'),
(3, 'Üveges Peter', 'petuveg@freemail.hu', '06304574113', '2223 Komlo, Reti u. 23'),
(4, 'Monoczki Pal', 'palmono@gmail.com', '06307912623', '4235 Palota, Petofi u. 15'),
(5, 'Eber Abris', 'eberabris@freemail.hu', '06305239443', '1115 Arpadfalva, Szechenyi u. 44'),
(6, 'Olajos Lajos', 'olajoslajos@gmail.com', '06301115196', '7811 Kertesz, Legelo u. 98'),
(7, 'Benedek Domonkos', 'benedomo@gmail.com', '06304259461', '6121 Termelo, Arpad u. 14'),
(8, 'Demeter Erno', 'demerno@gmail.com', '06301197413', '3232 Baberos, Istvan u. 75'),
(9, 'Teszt Elek', 'teszte@gmail.com', '06204853232', '4612 Vak, Bela u. 26'),
(10, 'Nemeth Richard', 'nemethrichard@gmail.hu', '06204116453', '1515 Mezocsat, Peter u. 18');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
