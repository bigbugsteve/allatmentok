-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Ápr 28. 10:27
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `mestervi_allatmentok`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `anonym` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `anonym`, `date`) VALUES
(12, 'Kovacs Adam', 'ado.kovacs@gmail.com', 'Ez egy teszt uzenet.', 'Vendég', '2022-04-28 10:15'),
(13, 'Kovacs Adam', 'ado.kovacs@gmail.com', 'Ez egy teszt uzenet. 2', 'Vendég', '2022-04-28 10:16'),
(14, 'Kovacs Adam', 'asd@asd.com', 'Ez egy teszt uzenet.', 'Felhasználó', '2022-04-28 10:16'),
(15, 'Kovacs Adam', 'asd@asd.com', 'Ez egy teszt uzenet. 2', 'Felhasználó', '2022-04-28 10:17');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `gender`, `email`, `password`) VALUES
(12, 'Ádám', 'Kovács', 'm', 'asd@asd.com', '123456'),
(13, 'Nagy', 'Gábor', 'm', 'asd1@asd.com', '123456');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
