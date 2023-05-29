-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gép: mysql.omega:3306
-- Létrehozás ideje: 2023. Máj 28. 13:59
-- Kiszolgáló verziója: 5.7.40-log
-- PHP verzió: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `jatekgyujtdb`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(10) UNSIGNED NOT NULL,
  `csaladi_nev` varchar(45) COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT '',
  `uto_nev` varchar(45) COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT '',
  `bejelentkezes` varchar(12) COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT '',
  `jelszo` varchar(40) COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `csaladi_nev`, `uto_nev`, `bejelentkezes`, `jelszo`) VALUES
(1, 'ba', 'ba', 'baba', 'b78b647728101ba462182b4c7e5b2ca57b9f5a99'),
(2, 'na', 'na', 'nana', '893a6a6789d8aef157ac0615ac3855587daaac07');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `uzenetek`
--

CREATE TABLE `uzenetek` (
  `uzenetID` int(11) NOT NULL,
  `felhasznalo` varchar(16) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `iras` text COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `uzenetek`
--

INSERT INTO `uzenetek` (`uzenetID`, `felhasznalo`, `datum`, `iras`) VALUES
(1, 'vendeg', '0000-00-00 00:00:00', 'bababab'),
(2, 'vendeg', '0000-00-00 00:00:00', 'bababab'),
(3, 'vendeg', '0000-00-00 00:00:00', 'bababab'),
(4, 'vendeg', '0000-00-00 00:00:00', 'bababab'),
(5, 'vendeg', '0000-00-00 00:00:00', 'chgíydghc'),
(6, 'vendeg', '0000-00-00 00:00:00', 'chgíydghc'),
(7, 'baba', '0000-00-00 00:00:00', 'sfghsfgsf'),
(8, 'baba', '2023-05-18 10:28:02', 'asdfasd'),
(9, 'baba', '2023-05-18 12:40:12', 'sdfghdf'),
(10, 'vendeg', '2023-05-18 12:47:29', 'uzenet'),
(11, 'baba', '2023-05-20 04:29:42', 'dhagdsf'),
(12, 'vendeg', '2023-05-20 04:49:28', '');

-- --------------------------------------------------------

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `uzenetek`
--
ALTER TABLE `uzenetek`
  ADD PRIMARY KEY (`uzenetID`);

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `uzenetek`
--
ALTER TABLE `uzenetek`
  MODIFY `uzenetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
