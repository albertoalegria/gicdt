-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Servidor: db554358807.db.1and1.com
-- Tiempo de generación: 17-03-2015 a las 13:20:35
-- Versión del servidor: 5.1.73-log
-- Versión de PHP: 5.4.36-0+deb7u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db554358807`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adscripcion`
--

CREATE TABLE IF NOT EXISTS `adscripcion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_organizacion` int(10) unsigned DEFAULT NULL,
  `nivel` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fec_ini` date NOT NULL,
  `fec_final` date NOT NULL,
  `nombramiento` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_user` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adscripcion_user` (`id_user`),
  KEY `fk_adscripcion_organizacion` (`id_organizacion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `lugar` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `descr` text COLLATE latin1_spanish_ci NOT NULL,
  `fechas` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(10) unsigned DEFAULT NULL,
  `cupo` tinyint(4) NOT NULL,
  `temario` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL,
  `logo` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tipo` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL,
  `nombramiento` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `keywords` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `couta` decimal(6,2) DEFAULT NULL,
  `status` enum('0','1','2','3') COLLATE latin1_spanish_ci DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fk_user_curso` (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `lugar`, `descr`, `fechas`, `fecha_registro`, `id_user`, `cupo`, `temario`, `logo`, `tipo`, `nombramiento`, `keywords`, `couta`, `status`, `updated_at`, `created_at`) VALUES
(3, 'PHP', '<p>laravel</p>', '<p>jojojojojoooooooooooooooooooooooooooooooooooo</p><iframe width="560" height="315" src="//www.youtube.com/embed/biTHxpo1YJo" frameborder="0" allowfullscreen=""></iframe>', '12/03/2014 1:10 PM,12/24/2014 2:41 AM', '2015-01-08 05:00:00', 5, 40, 'tRF4nMzbKY_FCO990908DP2_0000000072.pdf', 's5rGHiLg5I_k.jpg', 'Curso', 'asistencia', 'laravel,css,js', '100.00', '0', '2015-01-09 04:23:59', '2014-12-08 18:53:51'),
(14, 'Web Design', '<p>ITTG</p>', '<p>estibulum ut orci urna. Morbi blandit enim eget risus posuere dapibus. Vestibulum velit nisi, tempus in placerat non, auctor eu purus. Morbi suscipit porta libero, ac tempus tellus consectetur non. Praesent eget consectetur nunc. Aliquam erat volutpat. Suspendisse ultrices eros eros, consectetur facilisis urna posuere id.</p>', '01/12/2015 5:27 PM,01/13/2015 5:27 PM', '2015-01-12 05:00:00', 9, 25, 'nbNr5daiaT_temario.pdf', 'l8Pe5qERse_images.jpg', 'Diplomado', 'curricular', 'laravel,css,js,WEB,Html', '100.00', '0', '2015-01-12 22:27:36', '2015-01-12 22:27:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distinciones`
--

CREATE TABLE IF NOT EXISTS `distinciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `id_pais` int(10) unsigned DEFAULT NULL,
  `otorgante` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `institucion` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `descripcion` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_user` int(10) unsigned DEFAULT NULL,
  `doc` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_distincion_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_identidad`
--

CREATE TABLE IF NOT EXISTS `doc_identidad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pais` int(10) unsigned DEFAULT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `doc_principal` tinyint(1) DEFAULT NULL,
  `clave_doc` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_usr` int(10) unsigned DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fk_docs_user` (`id_usr`),
  KEY `fk_doc_pais` (`id_pais`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `doc_identidad`
--

INSERT INTO `doc_identidad` (`id`, `id_pais`, `descripcion`, `doc_principal`, `clave_doc`, `id_usr`, `updated_at`, `created_at`) VALUES
(1, 60, 'CURP', 0, 'TORW720508HCSRBL00', 10, '2014-12-10 22:25:47', '2014-12-10 22:25:47'),
(2, 60, 'CEDULA PROFESIONAL', 1, '5115396', 10, '2014-12-10 22:26:55', '2014-12-10 22:26:55'),
(3, 60, 'RFC', 0, 'TORW720508RD5', 10, '2014-12-10 22:28:19', '2014-12-10 22:28:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `abrev` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_pais` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pais_estado` (`id_pais`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `abrev`, `id_pais`) VALUES
(1, 'Aguascalientes', 'Ags.', 60),
(2, 'Baja California', 'BC', 60),
(3, 'Baja California Sur', 'BCS', 60),
(4, 'Campeche', 'Camp.', 60),
(5, 'Coahuila de Zaragoza', 'Coah.', 60),
(6, 'Colima', 'Col.', 60),
(7, 'Chiapas', 'Chis.', 60),
(8, 'Chihuahua', 'Chih.', 60),
(9, 'Distrito Federal', 'DF', 60),
(10, 'Durango', 'Dgo.', 60),
(11, 'Guanajuato', 'Gto.', 60),
(12, 'Guerrero', 'Gro.', 60),
(13, 'Hidalgo', 'Hgo.', 60),
(14, 'Jalisco', 'Jal.', 60),
(15, 'México', 'Mex.', 60),
(16, 'Michoacán de Ocampo', 'Mich.', 60),
(17, 'Morelos', 'Mor.', 60),
(18, 'Nayarit', 'Nay.', 60),
(19, 'Nuevo León', 'NL', 60),
(20, 'Oaxaca', 'Oax.', 60),
(21, 'Puebla', 'Pue.', 60),
(22, 'Querétaro', 'Qro.', 60),
(23, 'Quintana Roo', 'Q. Roo', 60),
(24, 'San Luis Potosí', 'SLP', 60),
(25, 'Sinaloa', 'Sin.', 60),
(26, 'Sonora', 'Son.', 60),
(27, 'Tabasco', 'Tab.', 60),
(28, 'Tamaulipas', 'Tamps.', 60),
(29, 'Tlaxcala', 'Tlax.', 60),
(30, 'Veracruz de Ignacio ', 'Ver.', 60),
(31, 'Yucatán', 'Yuc.', 60),
(32, 'Zacatecas', 'Zac.', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nombre` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE latin1_spanish_ci,
  `img` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `lugar` varchar(400) COLLATE latin1_spanish_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identidad`
--

CREATE TABLE IF NOT EXISTS `identidad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned DEFAULT NULL,
  `fec_nac` date DEFAULT NULL,
  `nacionalidad` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `sexo` enum('M','F') COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_pais` int(10) unsigned DEFAULT NULL,
  `estado_nacimiento` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_identi_pais_` (`id_pais`),
  KEY `fk_identi_user` (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `identidad`
--

INSERT INTO `identidad` (`id`, `id_user`, `fec_nac`, `nacionalidad`, `sexo`, `id_pais`, `estado_nacimiento`) VALUES
(1, 9, '2015-01-28', 'mexicana', 'M', 60, 'Chiapas'),
(2, 10, '1972-05-08', 'MEXICANA', 'M', 60, 'Chiapas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `content` text COLLATE latin1_spanish_ci,
  `id_user` int(10) unsigned DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fk_notas_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificiones`
--

CREATE TABLE IF NOT EXISTS `notificiones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subjet` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `content` text COLLATE latin1_spanish_ci,
  `files` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `para` varchar(2000) COLLATE latin1_spanish_ci DEFAULT NULL,
  `de` int(10) unsigned DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fk_user_envia` (`de`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion`
--

CREATE TABLE IF NOT EXISTS `organizacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE latin1_spanish_ci NOT NULL,
  `id_sector` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sector_organizacion` (`id_sector`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=110 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'Afghanistan'),
(2, 'Algeria'),
(3, 'American Samoa'),
(4, 'Angola'),
(5, 'Anguilla'),
(6, 'Argentina'),
(7, 'Armenia'),
(8, 'Australia'),
(9, 'Austria'),
(10, 'Azerbaijan'),
(11, 'Bahrain'),
(12, 'Bangladesh'),
(13, 'Belarus'),
(14, 'Bolivia'),
(15, 'Brazil'),
(16, 'Brunei'),
(17, 'Bulgaria'),
(18, 'Cambodia'),
(19, 'Cameroon'),
(20, 'Canada'),
(21, 'Chad'),
(22, 'Chile'),
(23, 'China'),
(24, 'Colombia'),
(25, 'Congo, The Democratic Republic'),
(26, 'Czech Republic'),
(27, 'Dominican Republic'),
(28, 'Ecuador'),
(29, 'Egypt'),
(30, 'Estonia'),
(31, 'Ethiopia'),
(32, 'Faroe Islands'),
(33, 'Finland'),
(34, 'France'),
(35, 'French Guiana'),
(36, 'French Polynesia'),
(37, 'Gambia'),
(38, 'Germany'),
(39, 'Greece'),
(40, 'Greenland'),
(41, 'Holy See (Vatican City State)'),
(42, 'Hong Kong'),
(43, 'Hungary'),
(44, 'India'),
(45, 'Indonesia'),
(46, 'Iran'),
(47, 'Iraq'),
(48, 'Israel'),
(49, 'Italy'),
(50, 'Japan'),
(51, 'Kazakstan'),
(52, 'Kenya'),
(53, 'Kuwait'),
(54, 'Latvia'),
(55, 'Liechtenstein'),
(56, 'Lithuania'),
(57, 'Madagascar'),
(58, 'Malawi'),
(59, 'Malaysia'),
(60, 'Mexico'),
(61, 'Moldova'),
(62, 'Morocco'),
(63, 'Mozambique'),
(64, 'Myanmar'),
(65, 'Nauru'),
(66, 'Nepal'),
(67, 'Netherlands'),
(68, 'New Zealand'),
(69, 'Nigeria'),
(70, 'North Korea'),
(71, 'Oman'),
(72, 'Pakistan'),
(73, 'Paraguay'),
(74, 'Peru'),
(75, 'Philippines'),
(76, 'Poland'),
(77, 'Puerto Rico'),
(78, 'Romania'),
(79, 'Runion'),
(80, 'Russian Federation'),
(81, 'Saint Vincent and the Grenadin'),
(82, 'Saudi Arabia'),
(83, 'Senegal'),
(84, 'Slovakia'),
(85, 'South Africa'),
(86, 'South Korea'),
(87, 'Spain'),
(88, 'Sri Lanka'),
(89, 'Sudan'),
(90, 'Sweden'),
(91, 'Switzerland'),
(92, 'Taiwan'),
(93, 'Tanzania'),
(94, 'Thailand'),
(95, 'Tonga'),
(96, 'Tunisia'),
(97, 'Turkey'),
(98, 'Turkmenistan'),
(99, 'Tuvalu'),
(100, 'Ukraine'),
(101, 'United Arab Emirates'),
(102, 'United Kingdom'),
(103, 'United States'),
(104, 'Venezuela'),
(105, 'Vietnam'),
(106, 'Virgin Islands, U.S.'),
(107, 'Yemen'),
(108, 'Yugoslavia'),
(109, 'Zambia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_tecnicos`
--

CREATE TABLE IF NOT EXISTS `reportes_tecnicos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `instancia` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE latin1_spanish_ci,
  `fecha` date DEFAULT NULL,
  `objetivo` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `autores` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  `keywords` varchar(400) COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_user` int(10) unsigned DEFAULT NULL,
  `file` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `img` varchar(400) COLLATE latin1_spanish_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `no_pagina` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reporte_tecnico_user` (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `reportes_tecnicos`
--

INSERT INTO `reportes_tecnicos` (`id`, `titulo`, `instancia`, `descripcion`, `fecha`, `objetivo`, `autores`, `keywords`, `id_user`, `file`, `img`, `updated_at`, `created_at`, `no_pagina`) VALUES
(1, 'Lámpara de LED''s', 'ITTG', 'EL presente reporte está basado en el diseño, desarrollo y pruebas en laboratorio de un luminario de LEDs para exterior...', '2014-10-07', 'Desarrollar un luminario con tecnología leds para exterior, cumpliendo las NOM''s.', 'Manuel Toalá,walter torres', 'gprs,leds,driver led', 10, '10CGIZAz2PwK_CATALOGO_MEXICO_LED.pdf', 'tBRDAhhwcl_logomexled.png', '2014-12-10 22:38:54', '2014-12-10 22:38:54', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE IF NOT EXISTS `sectores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE latin1_spanish_ci NOT NULL,
  `fec_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_curso`
--

CREATE TABLE IF NOT EXISTS `user_curso` (
  `id_curso` int(10) unsigned DEFAULT NULL,
  `id_usuario` int(10) unsigned DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') COLLATE latin1_spanish_ci DEFAULT '0',
  KEY `fk_curso_user_curso` (`id_curso`),
  KEY `fk_user_curso_cusro` (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `user_curso`
--

INSERT INTO `user_curso` (`id_curso`, `id_usuario`, `fecha_registro`, `status`) VALUES
(1, 9, '2014-12-05 05:00:00', '0'),
(0, 9, '2014-12-05 05:00:00', '0'),
(2, 9, '2014-12-05 05:00:00', '0'),
(2, 5, '2014-12-08 05:00:00', '0'),
(0, 5, '2014-12-08 05:00:00', '0'),
(1, 5, '2014-12-09 05:00:00', '0'),
(5, 9, '2014-12-19 05:00:00', '0'),
(3, 9, '2015-01-05 05:00:00', '0'),
(13, 9, '2015-01-06 05:00:00', '0'),
(3, 5, '2015-01-06 05:00:00', '0'),
(14, 5, '2015-01-22 05:00:00', '0'),
(14, 12, '2015-03-03 05:00:00', '0'),
(0, 12, '2015-03-03 05:00:00', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `ap_pat` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `ap_mat` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(14) COLLATE latin1_spanish_ci DEFAULT NULL,
  `estado_civil` varchar(14) COLLATE latin1_spanish_ci DEFAULT NULL,
  `password` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `img` varchar(30) COLLATE latin1_spanish_ci DEFAULT 'default.png',
  `id_facebook` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `progreso` tinyint(4) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `token_` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cp` int(10) unsigned DEFAULT NULL,
  `tipo` enum('Super','Admin','Cliente') COLLATE latin1_spanish_ci DEFAULT 'Cliente',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `ap_pat`, `ap_mat`, `email`, `telefono`, `estado_civil`, `password`, `img`, `id_facebook`, `remember_token`, `progreso`, `status`, `token_`, `updated_at`, `created_at`, `cp`, `tipo`) VALUES
(7, 'omar', 'vazquez', 'gordillo', 'red_blest@hotmail.com', NULL, NULL, '$2y$10$jXOMCvKduF21OEjmq4d5AuYwjIQ94AILuzV9aBhczraFoNA5lYw6a', 'default.png', NULL, 'ns0e6ssTSvIf8x31GS9TSdH0Zaet8NOYmPVwEjhmzMhLzpnSyUT46ajv23ug', NULL, 1, 'iWw4eRKnm22PDcp9Ohc4wpksj0C2qT4QtKFVKWTUS4xwT7tJkQEAp5aJiwRj6KiWg9Hwkc6kfzx8CL1sfV0sf1ze3bdO5inkUTu', '2014-12-10 04:34:32', '2014-12-05 09:38:47', NULL, 'Cliente'),
(5, 'Manuel de Jesus', 'Toala', 'Perez', 'toa.l@hotmail.com', '9616507156', 'Soltero', '$2y$10$V22dGEtvBawY.EbBPRnQvO9xx0jWOBuq9Fr80Lmi/fKKDrii0AU9O', '5TwVHxJnOSf_.jpeg', NULL, 'ieP7jZoOUluMtF0NFByLQgl8gWG2wI3CWYh8I2VX8GDLvKBnFewCp6P9BLHY', NULL, 1, 'VmtJpGXpZFYuZUUQdEiDQBrmVhDIZWGuTI1YtIGdQNkRodlOHeN8ihzWCow2XlhtQ5Kaj8xcoVK7YtRQ3qwMpOqoZ7bZdi9FBwO', '2015-03-17 16:14:24', '2014-12-05 09:38:07', 29096, 'Cliente'),
(13, 'Manuel de Jesus', 'Toala', 'Perez', 'mane.spak@gmail.com', NULL, NULL, '$2y$10$6szwqC0jcAwNc0UojDv1feVbj0UYx48JWf4YdC5QTyqlh1xJrzWTO', 'default.png', NULL, NULL, NULL, 0, 'elmEMnHzZASMlfE5yLSjPObkB9kCZGiquBNg4ESVxnj6UI4e9m8BbWJa54Xh08wlkEpWmmTCG66UdFScxRgw2kKTgA7b1bHdJpb', '2014-12-16 20:25:59', '2014-12-16 20:25:59', NULL, 'Cliente'),
(9, 'OMAR', 'Vazquez ', 'Gordillo', 'omarvazquezgordillo@gmail.com', '9611365052', 'Soltero', '$2y$10$EjDOuIGjh0DngUZnrnRbvebVdtHR7AF4Wz3I9.G3/ZRh5UmDqSrBy', '9qZ785X7VyE_.jpeg', NULL, 'muc3BotE81iH4KdnZrHbBXB7tZwcZXo16RXXaTcKToFaJdxZ69HCWIU0vIL6', NULL, 1, 'E5NaHjMkZnPPANBRGYTd2ySyuGtDb7ohqc9OqQRFXSSeHUaan3c5oiPJToy0u2gDIVGZCl1UVQXgt8gZG1M36PJK8gW7tOk2eyn', '2015-01-10 22:25:02', '2014-12-05 09:47:34', 29000, 'Cliente'),
(10, 'WALTER', 'TORRES', 'ROBLEDO', 'waltertorres@elgrupo.mx', '9611121331', 'Soltero', '$2y$10$wvH2jsrm4MFaIgR1ezp4N..UfbLM4sRGCnEUjWPy8bLXCBrQD15OO', '10cXzzbFQiSr_.jpeg', NULL, 'aB7ooFw623goHGJ5uo5MqYH38WAnMniZEUJgv8DMH0qnonAD4bteY3JuO9pe', NULL, 1, '74MUwdVota2UvtplcojoyRYDMgO1nz02nePhaOAyTvNV6n37EKAddbw7PXIrcfzlMGBf6Olr7mabKnpRHlwTSzbdEfjCO0FKFgR', '2014-12-10 22:46:11', '2014-12-09 18:56:41', 29000, 'Cliente'),
(11, 'omar', 'Vazquez ', 'Gordillo', 'isc.omar.vg@gmail.com', NULL, NULL, '$2y$10$CvUDL5AhVJiXQ75Wsfce0unZno8l20KW/15Akht8ERg/a6W7nGBEW', 'default.png', NULL, NULL, NULL, 0, 'O6Fdnot4zrmuk3T7uynbG7y1XdKYJw55Hf1p6yrq6ImMhvVVyzxlvKbVjQ5fG5D6JweKYMfdeDSL6JFdZgnfXBEBZFmccC26Vl1', '2014-12-10 04:32:58', '2014-12-10 04:32:58', NULL, 'Cliente'),
(12, 'luis alfredo', 'hernandez', 'mendoza', 'chico_genio_.17@hotmail.com', NULL, NULL, '$2y$10$tsBYyKrQAq.y0rpgcrc7t.W0Csfa7/s1JBCPhidxNE.GhBeLm.o0O', 'default.png', NULL, 'brxofmzEsr2GdXA1UyVjIyDQk95y9YMX1VtmNkJC4qw4QPgyrj2rNN5ToHLM', NULL, 1, 'eXWa7QGvxqNihexL626s2oOQDkzj7HTz3dmfgnXVojgtytIXDECdtvlartOAMSuy6PRAWyzvTEqnGqEveAIBrbik0tp877S5PUu', '2015-03-03 15:58:23', '2014-12-11 00:16:18', NULL, 'Cliente');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
