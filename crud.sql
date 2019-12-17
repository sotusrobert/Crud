-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2019. Dec 08. 13:26
-- Kiszolgáló verziója: 10.4.8-MariaDB
-- PHP verzió: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `crud`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `furniture`
--

CREATE TABLE `furniture` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `furniture_type_id` int(11) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_image` varchar(50) NOT NULL,
  `prod_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `furniture`
--

INSERT INTO `furniture` (`id`, `prod_name`, `furniture_type_id`, `prod_price`, `prod_image`, `prod_description`) VALUES
(1, 'MORI XL U ALAKÚ SAROKÜLŐ', 1, 203300, 'image/sarokulo1.jpg', 'Anyaga zsenilia, Ágyazható, Ágyneműtartós, Hátoldala is kárpitozott Jobbos vagy balos (Főképen jobbos állású)\r\nA terméket 3 darabban szállítjuk.\r\nSzélesség: 320 cm\r\nMélység: 188/149 cm\r\nMagasság: 85 cm\r\nFekvőmagasság körülbelül: 39 cm\r\nÜlőmagasság körülbelül: 39 cm\r\nFekvőfelület: 122x270 cm\r\nKivitel: Rugós'),
(2, 'FRAY U ALAKÚ SAROKÜLŐ', 1, 240600, 'image/sarokulo2.jpg', 'Anyaga zsenilia és textilbőr kombináció.\r\nÁgyazható, Ágyneműtartós\r\nAzonos méretű, így nem kell állás választani.\r\nA terméket több darabban szállítjuk.\r\nMagasság: 85 cm\r\nMélység: 154 cm\r\nSzélesség: 310 cm\r\nFekvőmagasság körülbelül: 47 cm\r\nÜlőmagasság körülbelül: 47 cm\r\nFekvőfelület: 277x120 cm\r\nKivitel: Hullám rugós'),
(3, 'LONDON U ALAKÚ SAROKÜLŐ', 1, 350700, 'image/sarokulo3.jpg', 'Anyaga zsenilia\r\nÁgyazható, Ágyneműtartós\r\nMindkét irányban összeszerelhető.\r\nA terméket több darabban szállítjuk.\r\nMagasság: 87 cm\r\nMélység: 217 cm\r\nSzélesség: 356 cm\r\nFekvőmagasság körülbelül: 40 cm\r\nÜlőmagasság körülbelül: 40 cm\r\nFekvőfelület: 329x126 cm\r\nKivitel: Hullám rugós'),
(4, 'CAYENE U ALAKÚ SAROKÜLŐ', 1, 323000, 'image/sarokulo4.jpg', 'Anyaga zsenilia\r\nÁgyazható, Ágyneműtartós\r\nAutomata kiemelő mechanikás.\r\nMindkét irányban összeállítható.\r\nA terméket több darabban szállítjuk.\r\nMagasság: 82 cm\r\nMélység: 208 cm\r\nSzélesség: 390 cm\r\nFekvőmagasság körülbelül: 40 cm\r\nÜlőmagasság körülbelül: 40 cm\r\nÜlőmélység párnával: 50 cm\r\nFekvőfelület: 340x138 cm\r\nKivitel: Hullám rugós és szivacsos'),
(5, 'OLGA U ALAKÚ SAROKÜLŐ', 1, 252200, 'image/sarokulo5.jpg', 'Anyaga zsenilia és textilbőr kombináció.\r\nÁgyazható,nem ágyneműtartós.\r\nJobbos és balos állásban készül.\r\nA terméket több darabban szállítjuk.\r\nMagasság: 69 cm\r\nMélység: 159/218 cm\r\nSzélesség: 325 cm\r\nFekvőmagasság körülbelül: 40 cm\r\nÜlőmagasság körülbelül: 40 cm\r\nFekvőfelület: 295x140 cm\r\nKivitel: Hullám rugós'),
(6, 'DONATA U ALAKÚ SAROKÜLŐ', 1, 350400, 'image/sarokulo6.jpg', 'Anyaga zsenilia\r\nÁgyazható\r\nÁgyneműtartós\r\nHátoldala is kárpitozott\r\nJobbos vagy balos (Főképen jobbos állású)\r\nA terméket 3 darabban szállítjuk.\r\nSzélesség: 315 cm\r\nMélység: 185/165 cm\r\nMagasság: 113 cm\r\nFekvőmagasság körülbelül: 45 cm\r\nÜlőmagasság körülbelül: 45 cm\r\nFekvőfelület: 124x200 cm\r\nKivitel: Rugós'),
(7, 'BERTA ELEGANT ÉTKEZŐ AMIGO ASZTALLAL (6 SZEMÉLYES)', 3, 109400, 'image/etkezo1.jpg', 'Összeállítás: 1 db asztal + 6 db szék Asztal: 32 mm-es laminált MDF lap festett él – pácolt lakkozott bükkfa láb Szék: Pácolt lakkozott bükkfa váz – szövet kárpit Az asztal lapra szerelve, csomagolva kerül szállításra. A szék csomagolva, készre szerelve kerül szállításra.\r\nAsztal hosszúság: 158 cm\r\nAsztal szélesség: 90 cm\r\nAsztal magasság: 75 cm\r\nBővíthetőség: Nem bővíthető\r\n\r\nSzék szélesség: 40 cm\r\nSzék mélység: 47 cm\r\nSzék magasság: 98 cm\r\nSzék ülőmagasság: 49 cm'),
(8, 'SOPHIA ÉTKEZŐ PIANO ASZTALLAL (6 SZEMÉLYES)', 3, 111100, 'image/etkezo2.jpg', 'Összeállítás: 1 db asztal + 6 db szék Asztal: Laminált asztallap – pácolt, lakkozott bükkfa láb Szék: Pácolt lakkozott bükkfa váz – szövet kárpit Az asztal lapra szerelve, csomagolva kerül szállításra. A szék csomagolva, készre szerelve kerül szállításra.\r\nAsztal hosszúság: 160 cm\r\nAsztal szélesség: 80 cm\r\nAsztal magasság: 76 cm\r\nBővíthetőség: 40 cm-rel\r\n\r\nSzék szélesség: 44 cm\r\nSzék mélység: 42 cm\r\nSzék magasság: 82 cm\r\nSzék ülőmagasság: 46 cm'),
(9, 'LONDON ÉTKEZŐ FÉLIX ASZTALLAL (6 SZEMÉLYES)', 3, 100700, 'image/etkezo3.jpg', 'Összeállítás: 1 db asztal + 6 db szék Asztal: 18 mm-es laminált bútorlap – 0,4 mm-es ABS élzárás Szék: Pácolt lakkozott bükkfa váz – szövet kárpit Az asztal lapra szerelve, csomagolva kerül szállításra. A szék csomagolva, készre szerelve kerül szállításra.\r\nAsztal hosszúság: 135 cm\r\nAsztal szélesség: 90 cm\r\nAsztal magasság: 75,5 cm\r\nBővíthetőség: 35 cm\r\n\r\nSzék szélesség: 43 cm\r\nSzék mélység: 40 cm\r\nSzék magasság: 96 cm\r\nSzék ülőmagasság: 46 cm'),
(10, 'BRILL ÉTKEZŐ DANTE ASZTALLAL (6 SZEMÉLYES)', 3, 175700, 'image/etkezo4.jpg', 'Összeállítás: 1 db asztal + 6 db szék Asztal: 32 mm-es laminált MDF lap festett él, pácolt lakkozott bükkfa láb Szék: Szövettel borított fém láb – szövet kárpit Az asztal lapra szerelve, csomagolva kerül szállításra. A szék csomagolva, készre szerelve kerül szállításra.\r\nAsztal hosszúság: 160 cm\r\nAsztal szélesség: 90 cm\r\nAsztal magasság: 74 cm\r\nBővíthetőség: 40 cm-rel\r\n\r\nSzék szélesség: teljes 50 cm, ülőszélesség 41 cm\r\nSzék mélység: 45 cm\r\nSzék magasság: 81 cm\r\nSzék ülőmagasság: 48 cm'),
(11, 'BERTA ÉTKEZŐ DANTE ASZTALLAL ( 6 SZEMÉLYES)', 3, 113900, 'image/etkezo5.jpg', 'Összeállítás: 1 db asztal + 6 db szék Asztal: 32 mm-es laminált MDF lap festett él – pácolt lakkozott bükkfa láb Szék: Pácolt lakkozott bükkfa váz – műbőr (textilbőr) vagy zsákszövet kárpit Az asztal lapra szerelve, csomagolva kerül szállításra. A szék csomagolva, készre szerelve kerül szállításra.\r\nAsztal hosszúság: 160 cm\r\nAsztal szélesség: 90 cm\r\nAsztal magasság: 74 cm\r\nBővíthetőség: 40 cm\r\n\r\nSzék szélesség: 46 cm\r\nSzék mélység: 42 cm\r\nSzék magasság: 101 cm\r\nSzék ülőmagasság: 48 cm'),
(12, 'EMMA ÉTKEZŐ COCKTAIL ASZTALLAL (4 SZEMÉLYES)', 3, 99000, 'image/etkezo6.jpg', 'Összeállítás: 1 db asztal + 4 db szék Asztal: 18 mm-es laminált bútorlap duplungolt (36 mm-es) kerettel – fém lábazat Szék: Krómozott fém váz – műbőr kárpit Az asztal lapra szerelve, csomagolva kerül szállításra. A szék csomagolva, több darabban kerül szállításra.\r\nAsztal hosszúság: 80 cm\r\nAsztal szélesség: 80 cm\r\nAsztal magasság: 74 cm\r\nBővíthetőség: Nem bővíthető\r\n\r\nSzék szélesség: 41 cm\r\nSzék mélység: 40 cm\r\nSzék magasság: 103 cm\r\nSzék ülőmagasság: 51 cm'),
(13, 'CAMILLA GARDRÓB (200 CM) ', 5, 103400, 'image/gardrob1.jpg', 'Mélyített fiókok\r\nSzínazonos fiókkáva\r\nABS elzárás\r\n18 mm-es bútorlap\r\n3cm-es színtezhető lábak\r\nHa kér magasítást, az +52 cm.\r\nA szekrényt 3 db elemenként, összeszerelve szállítjuk.\r\nA fogantyú nincs felszerelve (de tartozék).\r\nMagasság: 196 cm\r\nSzélesség: 200 cm\r\nMélység: 50,5 cm\r\n'),
(14, 'KÖLN GARDRÓB ( 160 CM )', 5, 70000, 'image/gardrob2.jpg', 'Korpusz:\r\n– 18 mm-es két oldalt laminált faforgácslap\r\n– műanyag élzáróval zárva.\r\nFront:\r\n– 18 mm-es két oldalt laminált faforgácslap\r\n– műanyag élzáróval zárva\r\n– az ajtók működését 96-fokban nyíló fém kivetőpántok segítik elő.	\r\nSzerkezeti összeépítés:\r\n– süllyesztett fejű faforgácslap csavarral összeszerelve\r\n– hátfal: 3mm HDF lemez – tűzőkapoccsal rögzítve\r\n– polcok fém polctartókkal vannak szerelve.\r\nFiók:\r\n-fém fiókcsúszóval szerelt.\r\nBelső kialakítás:\r\n– Bal oldali elem: akasztós.\r\n– Job'),
(15, 'MODENA GARDRÓB ( 225 CM )', 5, 107300, 'image/gardrob3.jpg', 'Korpusz:\r\n– 18 mm-es két oldalt laminált faforgácslap\r\n– műanyag élzáróval zárva.\r\nFront:\r\n– 18 mm-es két oldalt laminált faforgácslap\r\n– műanyag élzáróval zárva\r\n– az ajtók működését 96-fokban nyíló fém kivetőpántok segítik elő.\r\nSzerkezeti összeépítés:\r\n– süllyesztett fejű faforgácslap csavarral összeszerelve\r\n– hátfal: 3mm HDF lemez – tűzőkapoccsal rögzítve\r\n– polcok fém polctartókkal vannak szerelve.\r\nFiók:\r\n-fém fiókcsúszóval szerelt.\r\nBelső kialakítás:\r\n– Két szélső elem: akasztós, fiókos.'),
(16, 'ZEUS GARDRÓB (200 CM)', 5, 123400, 'image/gardrob4.jpg', 'Anyag: 18 mm-es laminált bútorlap.\r\nA terméket elemenként, készre szerelt állapotban szállítjuk.\r\nSzélesség: 200 cm\r\nMagasság: 197 cm\r\nMélység: 50,5 cm'),
(17, 'DIEGO TOLÓAJTÓS GARDRÓB (200 CM)', 5, 143800, 'image/gardrob5.jpg', '18mm-es laminált faforgácslap, ABS élfóliával zárva, süllyesztett fejű forgácslapcsavarral összeszerelve. A hátfal 3mm-es hdf lemez, tűzőkapoccsal rögzítve. A polcok fém polctartókkal rögzítettek.\r\nSzélesség: 200 cm\r\nMélység: 60 cm\r\nMagasság: 203\r\nKivitel: vállfás-polcos fiókkal\r\nAjtó: Tolóajtós\r\nMagasítás:\r\n200 x 60 x 60 cm (szélesség x mélység x magasság)'),
(18, 'NÁPOLY GARDRÓB (120 CM)', 5, 68600, 'image/gardrob6.jpg', 'Magasítható:Nem \r\nAjtó: Nyílóajtós \r\nVálfás:Igen \r\nPolcos:Igen \r\nFiókos:Igen \r\nSzállítási súly:117 kg\r\n\r\n\r\nA terméket több darabban összeszerelve szállítjuk.\r\nSzélesség:120 cm\r\nMélység:53 cm\r\nMagasság: 212 cm'),
(19, 'PRESIDENT ÜLŐGARNITÚRA (3+2+1)', 7, 19700, 'image/ulogarnitura1.jpg', 'Szivacsos, fabetétes\r\nA 2 -es elem csak dobozos változatban rendelhető\r\nA terméket több darabban, darabonként összeszerelt állapotban szállítjuk.\r\n3-as elem:\r\nMélység: 95 cm\r\nHosszúság: 180 cm\r\nMagasság: 90 cm\r\nFekvőfelület: 136 x 190 cm\r\n2-es elem:\r\nMélység: 95 cm\r\nHosszúság: 155 cm\r\nMagasság: 100 cm\r\nFotel:\r\nMélység: 95 cm\r\nHosszúság: 5 cm\r\nMagasság: 100 cm\r\nKivitel: Szivacsos'),
(20, 'RAFI ÜLŐGARNITÚRA (3+2+1)', 7, 398900, 'image/ulogarnitura2.jpg', 'A terméket több darabban, darabonként összeszerelt állapotban szállítjuk.\r\n3-as elem:\r\nMélység: 94 cm\r\nHosszúság: 220 cm\r\nMagasság:\r\nFekvőfelület: 138 x 190 cm\r\n2-es elem:\r\nMélység: 94 cm\r\nHosszúság: 145 cm\r\nMagasság:\r\nFotel:\r\nMélység: 94 cm\r\nHosszúság: 84 cm\r\nMagasság:\r\nKivitel: Bonell rugós'),
(21, 'PAULA ÜLŐGARNITÚRA (3+2+1)', 7, 200100, 'image/ulogarnitura3.jpg', 'A terméket több darabban, darabonként összeszerelt állapotban szállítjuk.\r\n3-as elem:\r\nMélység: 100 cm\r\nHosszúság: 175 cm\r\nMagasság: 95 cm\r\nFekvőfelület: 140 x 180 cm\r\n2-es elem:\r\nMélység: 100 cm\r\nHosszúság: 145 cm\r\nMagasság: 95 cm\r\nFotel:\r\nMélység: 100 cm\r\nHosszúság: 95 cm\r\nMagasság: 95 cm\r\nKivitel: Szivacsos'),
(22, 'WÉNUSZ ÜLŐGARNITÚRA (3+2+1)', 7, 393000, 'image/ulogarnitura4.jpg', 'A terméket több darabban, darabonként összeszerelt állapotban szállítjuk.\r\n3-as elem:\r\nMélység: 100 cm\r\nHosszúság: 245 cm\r\nMagasság: 80 cm\r\nFekvőfelület: 160 x 185 cm\r\n2-es:\r\nMélység: 100 cm\r\nHosszúság: 190 cm\r\nMagasság: 80 cm\r\nFotel:\r\nMélység: 100 cm\r\nHosszúság: 130 cm\r\nMagasság: 95 cm\r\nKivitel: Hullámrugós'),
(23, 'BENIAMIN ÜLŐGARNITÚRA (3+2+1)', 7, 285900, 'image/ulogarnitura5.jpg', 'Nem ágyazható, ágyneműtartó nélküli.\r\nA terméket több darabban, darabonként összeszerelt állapotban szállítjuk.\r\n3-as elem:\r\nMélység: 98 cm\r\nHosszúság: 221 cm\r\nMagasság: 90 cm\r\nNem ágyazható\r\n2-es elem:\r\nMélység: 98 cm\r\nHosszúság: 164 cm\r\nMagasság: 90 cm\r\nFotel:\r\nMélység: 92 cm\r\nHosszúság: 98 cm\r\nMagasság: 90 cm'),
(24, 'FERO ÜLŐGARNITÚRA (3+2+1)', 7, 253700, 'image/ulogarnitura6.jpg', 'A 2-es elem ágyneműtartós.\r\nA terméket több darabban, darabonként összeszerelt állapotban szállítjuk.\r\n3-as elem:\r\nMélység: 91 cm\r\nHosszúság: 230 cm\r\nMagasság: 90 cm\r\nÜlőmagasság: 45 cm\r\nFekvőfelület: 140 x 190 cm\r\n2-es elem:\r\nMélység: 91 cm\r\nHosszúság: 154 cm\r\nMagasság: 90 cm\r\nÜlőmagasság: 45 cm\r\nFotel:\r\nMélység: 91 cm\r\nHosszúság: 94 cm\r\nMagasság: 90 cm\r\nÜlőmagasság: 45 cm\r\nKivitel: Hullám rugós és szivacsos');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `furniture_type`
--

CREATE TABLE `furniture_type` (
  `id` int(11) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `furniture_type`
--

INSERT INTO `furniture_type` (`id`, `type`) VALUES
(1, 'U. alakú ülőgarnitúra'),
(3, 'Étkezőgarnitúra'),
(5, 'Gardróbszekrény'),
(7, '3-2-1 Ülőgarnitúra');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `furniture_type`
--
ALTER TABLE `furniture_type`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT a táblához `furniture_type`
--
ALTER TABLE `furniture_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
