-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Gép: localhost
-- Létrehozás ideje: 2018. Aug 03. 12:49
-- Kiszolgáló verziója: 5.7.11
-- PHP verzió: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `mete`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `cikkszam` int(11) NOT NULL,
  `cikknev` text COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(11) NOT NULL,
  `gyarto` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `kategoria` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `garancia` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `leiras` text COLLATE utf8_hungarian_ci NOT NULL,
  `kep` text COLLATE utf8_hungarian_ci NOT NULL,
  `tomeg` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `z` int(11) NOT NULL,
  `megjegyzes` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `test`
--

INSERT INTO `test` (`id`, `cikkszam`, `cikknev`, `ar`, `gyarto`, `kategoria`, `garancia`, `leiras`, `kep`, `tomeg`, `x`, `y`, `z`, `megjegyzes`) VALUES
(87, 21312, 'dsdsadsad', 3131231, 'SONY', 'Autóhifi', 'das', 'sadsa', 'dasdsadas', 432, 432, 432, 43, '2432'),
(88, 257011, 'ZALMAN ZM-K650WP - vízálló Gamer billentyűzet USB (Eng)', 6101, 'SONY', 'Autóhifi', '24 hónap saját', 'Csatoló felület : Vezetékes – PS/2; Vezetékes – USB; Kiosztás : Angol (US); Extrák : Gamer; Egérrel : Nem', 'http://www.computeremporium.hu/img/cache/1/83/zalman_zm_k650wp.jpeg', 3, 3, 3, 3, '3'),
(89, 257011, 'ZALMAN ZM-K650WP - vízálló Gamer billentyűzet USB (Eng)', 6101, 'SONY', 'Autóhifi', '24 hónap saját', 'Csatoló felület : Vezetékes – PS/2; Vezetékes – USB; Kiosztás : Angol (US); Extrák : Gamer; Egérrel : Nem', 'http://www.computeremporium.hu/img/cache/1/83/zalman_zm_k650wp.jpeg', 4, 4, 4, 4, '4');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
