-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2020 a las 23:01:14
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `t`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `festivales`
--

CREATE TABLE `festivales` (
  `idfestivales` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `foto 1` varchar(300) DEFAULT NULL,
  `foto 2` varchar(300) DEFAULT NULL,
  `foto 3` varchar(300) DEFAULT NULL,
  `idpaises` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospedaje`
--

CREATE TABLE `hospedaje` (
  `idhospedaje` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `foto1` varchar(45) DEFAULT NULL,
  `foto 2` varchar(45) DEFAULT NULL,
  `foto 3` varchar(45) DEFAULT NULL,
  `idpaises` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugaresturisticos`
--

CREATE TABLE `lugaresturisticos` (
  `idlugaresTuristicos` int(11) NOT NULL,
  `Nombre` varchar(300) DEFAULT NULL,
  `foto1` varchar(300) DEFAULT NULL,
  `foto 2` varchar(300) DEFAULT NULL,
  `foto 3` varchar(300) DEFAULT NULL,
  `foto 4` varchar(300) DEFAULT NULL,
  `idpaises` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `idpaises` int(11) NOT NULL,
  `icono` varchar(200) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(3000) DEFAULT NULL,
  `hospedaje` varchar(45) DEFAULT NULL,
  `naturaleza` varchar(45) DEFAULT NULL,
  `tribu` varchar(45) DEFAULT NULL,
  `festivales` varchar(45) DEFAULT NULL,
  `vehiculo` varchar(45) DEFAULT NULL,
  `lugaresTuristicos` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`idpaises`, `icono`, `nombre`, `descripcion`, `hospedaje`, `naturaleza`, `tribu`, `festivales`, `vehiculo`, `lugaresTuristicos`) VALUES
(1, '1', 'Angola', 'Situated in Central Africa, west of Zambia and north of Namibia, Angola is\r\nslowly realizing its potential as a tourist hotspot, after decades of civil war\r\nfollowing independence from Portugal in 1975.\r\nAfrica’s most untouched tribes, virgin ecosystems, unique cultural heritage, a\r\nstunning coastline strung with beautiful sandy beaches, and a mountainous\r\ninterior that gives way to deep gorges and tumbling waterfalls, Angola offers a\r\nwide array of opportunities for tourism to its visitors. Cultural diversity and\r\nnatural beauty aside, the country also boasts a rich gastronomy (fusion between\r\nAfrican, Portuguese and Brazilian cuisines) with delicious culinary specialties\r\nand a people that are known for their hospitality and friendliness.\r\nAs Angola is opening up to the rest of the world, more and more people are\r\ntaking advantage of the wonderful landscapes and unique tribal groups. To get\r\nthe most out of your trip, book with Middle-Africa. We have been operating\r\nsince 2014 and have pioneered the spots along the whole of Angola. We are\r\nconstantly adapting our styles to assist our guests in having the best possible\r\ntravel experience in Angola.', '1', '1', '1', '1', '1', '1'),
(2, '2', 'Cameroon', 'Travelling to Cameroon is like travelling around the entire African Continent. Cameroon’s\r\ngeographical situation, between Lake Chad and the Equatorial Forests, allows the traveller to\r\nadmire all kinds of flora, fauna, and cultural groups in one sole country. The size of France,\r\nCameroon offers diversity, security, and virginity. Middle-Africa is a travel agency specialised in\r\nCameroon travel and is based in Douala. Since 2005 we have been operating in Cameroon and\r\nneighbouring countries. Middle Africa has seen the great potentials of Cameroon as a travel\r\ndestination for tourists that appreciate countries that receive little tourism and can offer great\r\nexperiences.', '2', '2', '2', '2', '2', '2'),
(3, '3', 'Central African Republic', 'Dzanga-Ndoki National Park is the best place in Africa to observe Western Lowland Gorillas on\r\nthe wild, forest elephants, bongo antelopes, and grey parrots. We have become specialists in\r\norganizing trips from Yaoundé and Bangui to Dzanga-Ndoki since we first visited this National\r\nPark in 2007. We loved the conservation project, where the local population fully participates in\r\nthe protection of the flora and fauna of Dzanga-Ndoki, and we saw a great potential, since all\r\nanimal lovers will want to visit Dzanga-Ndoki sooner or later. We subscribe to National\r\nGeographic’s description of Dzanga-Ndoki Reserve as ‘Last Paradise on Earth’.\r\nDzanga-Ndoki National Park is a member of the Tri-National Sangha complex, currently in the\r\nprocess to become a UNESCO World Heritage Site. Roundtrips to the other National Parks\r\n(Lobeke in Cameroon and Nouabalé-Ndoki in Congo) can be organized with ease.', '3', '3', '3', '3', '3', '3'),
(4, '4', 'Chad', 'Middle-Africa is one of the few travel agencies specialised in organising trips to Chad. Travelling\r\nto Chad is not easy, but it is one of Africa’s most rewarding destinations. In the year 2011, Chad is\r\na virgin travel destination, and this is without doubt one of its main attractions. The traveller that\r\nvisits the amazing Ennedi desert, considered the Sahara’s most beautiful territories. In Middle-\r\nAfrica we propose 2 itineraries in Chad: a longer one to the Ennedi desert and a shorter one to Lake\r\nChad and the Kotoko adobe villages.', '4', '4', '4', '4', '4', '4'),
(5, '5', 'Democratic Republic of Congo', '--', '5', '5', '5', '5', '5', '5'),
(6, '6', 'Equatorial Guinea', '--', '6', '6', '6', '6', '6', '6'),
(7, '7', 'Gabon', 'Middle-Africa is a travel agency specialised in organising trips to Central and Western Africa.\r\nSince 2007 we have been organising trips to Gabon, a diverse and stable eco-tourisim destination.\r\nWe consider Gabon a great travel destination for nature lovers, and for those travellers looking for\r\nvirgin and unspoiled territories. Wildlife rich forests cover 80% of Gabon’s landmass (11%\r\ndeclared National Parks), its vast picturesque coastline is predominantly wild and unspoiled, and its\r\ninland and coastal waters teem with myriad species of fish, reptiles and marine mammals. Gabon is\r\na rare and exotic tropical gem, yet tourism here still remains relatively undeveloped. Get ready to\r\ntravel to Gabon with us!', '7', '7', '7', '7', '7', '7'),
(8, '8', 'Republic of Congo', 'Nouabalé-Ndoki National Park is situated in the north of the Republic of Congo\r\n(Congo-Brazzaville). Nouabalé-Ndoki National Park was created in 1993 to conserve,\r\nin its natural state, one of the last examples of an untouched wilderness in the world.\r\nCovering an area of just under 4,000 km2, nearly double the size of Luxembourg, the\r\nNouabalé-Ndoki National Park is one of the largest parks in the forested regions of\r\nCentral Africa. In 2007 we visited both Dzanga-Ndoki and Nouabalé-Ndoki National\r\nParks and we where thrilled to observe that there were enough infrastructures to offer\r\nthis wildlife destination to our clients. A unique place in Africa where humans can\r\neasily observe western lowland gorillas calmly eating in the same spot as forest\r\nelephants is the right image of how things should be in wild Africa. Hopefully,\r\nresponsible tourism practices will help on protecting jungle paradises such as Nouabalé-\r\nNdoki National Park.\r\nNouabalé-Ndoki National Park is a member of the Tri-National Sangha complex,\r\ncurrently in the process to become a UNESCO World Heritage Site. Roundtrips to the\r\nother National Parks (Lobeke in Cameroon and Dzanga-Ndoki in Central African\r\nRepublic) can be organized with ease.', '8', '8', '8', '8', '8', '8'),
(9, '9', 'Sao Tome & Principe Islands', 'Sao Tome Island, also known as ‘the Forgotten Island’, host the city of Sao Tomé, the\r\narchipelago’s capital. This young republic was a Portuguese colony till 1975 and has\r\nkept a specific charm due to the architecture, the mixing of Latin and African blood, the\r\ndiversity of its landscape from tropical beaches to high volcanic mountains. The main\r\ninterests there are cultural, bird life, humid mountain forests, fishing, diving and\r\ntrekking.\r\nPríncipe Island lies north-east of Sao Tomé. It’s a place where dense rainforests teem\r\nwith exotic birds, where whales sport playfully off unspoiled, deserted beaches, where\r\ncrystal-clear waterfalls cascade into the azure blue ocean, and where the people are,\r\nabove all, friendly and happy to meet you. Príncipe’s extraordinary landscape, an\r\nirregular scattering of soaring volcanic peaks, is 70% covered by primary forest where\r\nup to 20% of trees, orchids and birds are said to be endemic. It has still been barely\r\ntouched by the island’s 5,000 inhabitants or the outside world.', '9', '9', '9', '9', '9', '9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tribu`
--

CREATE TABLE `tribu` (
  `idtribu` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `foto 1` varchar(300) DEFAULT NULL,
  `foto 2` varchar(300) DEFAULT NULL,
  `foto 3` varchar(300) DEFAULT NULL,
  `idpaises` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `festivales`
--
ALTER TABLE `festivales`
  ADD PRIMARY KEY (`idfestivales`);

--
-- Indices de la tabla `hospedaje`
--
ALTER TABLE `hospedaje`
  ADD PRIMARY KEY (`idhospedaje`);

--
-- Indices de la tabla `lugaresturisticos`
--
ALTER TABLE `lugaresturisticos`
  ADD PRIMARY KEY (`idlugaresTuristicos`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`idpaises`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tribu`
--
ALTER TABLE `tribu`
  ADD PRIMARY KEY (`idtribu`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `festivales`
--
ALTER TABLE `festivales`
  MODIFY `idfestivales` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hospedaje`
--
ALTER TABLE `hospedaje`
  MODIFY `idhospedaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lugaresturisticos`
--
ALTER TABLE `lugaresturisticos`
  MODIFY `idlugaresTuristicos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `idpaises` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tribu`
--
ALTER TABLE `tribu`
  MODIFY `idtribu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
