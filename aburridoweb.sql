-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-11-2012 a las 20:08:18
-- Versión del servidor: 5.5.28
-- Versión de PHP: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aburridoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_vid` int(11) NOT NULL,
  `mensaje` text,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `id_user`, `id_vid`, `mensaje`, `fecha`) VALUES
(1, 1, 21, 'hey', '2012-11-13 17:46:29'),
(2, 1, 21, 'dfeer', '2012-11-13 17:46:36'),
(3, 1, 21, 'werrwe', '2012-11-13 17:46:40'),
(4, 1, 21, 'wer', '2012-11-13 17:46:43'),
(5, 1, 21, '', '2012-11-13 17:46:44'),
(6, 1, 21, 'sadfsadf', '2012-11-14 12:59:39'),
(7, 1, 21, 'dsfasadf', '2012-11-14 12:59:44'),
(8, 1, 21, 'sadfasdf', '2012-11-14 12:59:47'),
(9, 1, 21, 'asdfsadf', '2012-11-14 12:59:51'),
(10, 1, 21, 'asdfsdfsdaee', '2012-11-14 12:59:56'),
(11, 1, 21, 'werewerwewrwer', '2012-11-14 13:00:00'),
(12, 1, 21, 'werwerwer', '2012-11-14 13:00:09'),
(13, 1, 21, 'werwer', '2012-11-14 13:00:14'),
(14, 1, 21, '', '2012-11-14 13:00:16'),
(15, 1, 21, 'wwrewer', '2012-11-14 13:00:19'),
(16, 1, 20, 'kkeke', '2012-11-14 13:17:11'),
(17, 1, 20, 'kkeke', '2012-11-14 13:26:06'),
(18, 1, 20, 'sdffa', '2012-11-14 13:26:09'),
(19, 1, 20, 'sdfsdf', '2012-11-14 13:26:12'),
(20, 1, 20, 'sadfsdf', '2012-11-14 13:26:16'),
(21, 1, 20, 'sadfsdaf', '2012-11-14 13:26:19'),
(22, 1, 20, 'sdafsdf', '2012-11-14 13:26:24'),
(23, 1, 20, 'eeeeee', '2012-11-14 13:26:29'),
(24, 1, 20, 'ererer', '2012-11-14 13:26:32'),
(25, 1, 20, 'werwerwer', '2012-11-14 13:26:37'),
(26, 1, 20, '', '2012-11-14 13:26:38'),
(27, 1, 20, '', '2012-11-14 13:26:42'),
(28, 1, 20, 'werwer', '2012-11-14 13:26:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments_fotos`
--

CREATE TABLE IF NOT EXISTS `comments_fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mensaje` varchar(150) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `comments_fotos`
--

INSERT INTO `comments_fotos` (`id`, `id_user`, `id_foto`, `fecha`, `mensaje`) VALUES
(1, 0, 184, '0000-00-00 00:00:00', 'jdererelr'),
(2, 1, 184, '0000-00-00 00:00:00', 'sdafdsdafsfd pruevecillla'),
(3, 1, 10, '2012-11-22 19:54:58', 'vaaaask  kjwehrwer asdwe wekwerjwerkjh wer'),
(4, 1, 190, '2012-11-23 16:12:50', 'carlos ha hecho un ultimo comentario'),
(5, 1, 1, '2012-11-23 16:31:11', 'Otro comentario añadido a fotos'),
(6, 1, 184, '2012-11-23 16:51:05', 'no he puesto yo ningun comentario en la puta foto esta?'),
(7, 1, 184, '2012-11-23 16:51:26', 'que extraño. Yo me figuraba que si'),
(8, 1, 184, '2012-11-23 16:53:12', 'ahora me voy a decicar a escribir tonterias hasta'),
(9, 1, 184, '2012-11-23 16:53:17', 'ahora me voy a decicar a escribir tonterias hasta'),
(10, 1, 184, '2012-11-23 16:53:28', 'sdffa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_vid` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `Descripcion` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=199 ;

--
-- Volcado de datos para la tabla `img`
--

INSERT INTO `img` (`id`, `id_vid`, `tipe`, `name`, `Descripcion`) VALUES
(1, 8, 3, 'IMG_5172.jpg', ''),
(2, 8, 3, 'IMG_5181.jpg', ''),
(3, 8, 3, 'IMG_5227.jpg', ''),
(4, 8, 3, 'IMG_5251.jpg', ''),
(5, 8, 3, 'IMG_5297.jpg', ''),
(6, 8, 3, 'IMG_5329.jpg', ''),
(7, 8, 3, 'IMG_5332.jpg', ''),
(8, 8, 3, 'IMG_5336.jpg', ''),
(9, 8, 3, 'IMG_5348-.jpg', ''),
(10, 8, 3, 'IMG_5351.jpg', ''),
(11, 8, 3, 'IMG_5361.jpg', ''),
(12, 8, 3, 'IMG_5365.jpg', ''),
(13, 8, 3, 'IMG_5376.jpg', ''),
(14, 8, 3, '_MG_5149.jpg', ''),
(15, 8, 3, '_MG_5263.jpg', ''),
(16, 8, 3, '_MG_5266.jpg', ''),
(17, 8, 3, '_MG_5279.jpg', ''),
(18, 24, 3, 'LasDalias1.jpg', ''),
(19, 24, 3, 'LasDalias2.jpg', ''),
(20, 24, 3, 'LasDalias3.jpg', ''),
(21, 24, 3, 'LasDalias4.jpg', ''),
(22, 24, 3, 'LasDalias5.jpg', ''),
(23, 24, 3, 'LasDalias6.jpg', ''),
(24, 24, 3, 'LasDalias7.jpg', ''),
(25, 24, 3, 'LasDalias8.jpg', ''),
(26, 24, 3, 'LasDalias9.jpg', ''),
(27, 24, 3, 'LasDalias10.jpg', ''),
(38, 24, 3, 'LasDalias11.jpg', ''),
(39, 37, 6, 'IMG_9650.jpg', ''),
(40, 37, 6, 'IMG_9654.jpg', ''),
(41, 37, 6, 'IMG_9668.jpg', ''),
(42, 37, 6, 'IMG_9671.jpg', ''),
(43, 37, 6, 'IMG_9674.jpg', ''),
(44, 37, 6, 'IMG_9685.jpg', ''),
(45, 37, 6, 'IMG_9687.jpg', ''),
(46, 37, 6, 'IMG_9706.jpg', ''),
(47, 37, 6, 'IMG_9715.jpg', ''),
(48, 37, 6, 'IMG_9721.jpg', ''),
(49, 37, 6, 'IMG_9883.jpg', ''),
(50, 37, 6, 'IMG_9886.jpg', ''),
(51, 9, 1, 'image(2).jpg', ''),
(52, 9, 1, 'image(3).jpg', ''),
(53, 9, 1, 'image(4).jpg', ''),
(54, 9, 1, 'image(5).jpg', ''),
(55, 18, 1, 'a_MG_4014.jpg', ''),
(56, 18, 1, 'IMG_4021.jpg', ''),
(57, 18, 1, 'IMG_4026.jpg', ''),
(58, 18, 1, 'IMG_4031.jpg', ''),
(59, 18, 1, 'IMG_4039.jpg', ''),
(60, 18, 1, 'IMG_4046.jpg', ''),
(61, 18, 1, 'IMG_4050.jpg', ''),
(62, 18, 1, 'IMG_4052.jpg', ''),
(63, 18, 1, 'IMG_4059.jpg', ''),
(64, 18, 1, 'IMG_4060.jpg', ''),
(65, 18, 1, 'IMG_4065.jpg', ''),
(66, 18, 1, 'IMG_4066.jpg', ''),
(67, 18, 1, 'IMG_4067.jpg', ''),
(68, 18, 1, 'IMG_4070.jpg', ''),
(69, 18, 1, 'IMG_4071.jpg', ''),
(70, 18, 1, 'IMG_4072.jpg', ''),
(71, 18, 1, 'IMG_4104.jpg', ''),
(72, 18, 1, 'IMG_4107.jpg', ''),
(73, 18, 1, 'IMG_4108.jpg', ''),
(74, 18, 1, 'IMG_4121.jpg', ''),
(75, 18, 1, '_MG_3990.jpg', ''),
(76, 18, 1, '_MG_3991.jpg', ''),
(77, 18, 1, '_MG_3992.jpg', ''),
(78, 18, 1, '_MG_3999.jpg', ''),
(79, 18, 1, '_MG_4013.jpg', ''),
(80, 18, 1, '_MG_4014.jpg', ''),
(81, 18, 1, '_MG_4015.jpg', ''),
(82, 18, 1, '_MG_4024.jpg', ''),
(83, 18, 1, '_MG_4025.jpg', ''),
(84, 44, 7, '_MG_0258.jpg', ''),
(85, 44, 7, '_MG_0268.jpg', ''),
(86, 44, 7, '_MG_0273.jpg', ''),
(87, 44, 7, '_MG_0290.jpg', ''),
(88, 45, 7, 'IMG_0345.jpg', ''),
(89, 45, 7, 'IMG_0347.jpg', ''),
(90, 45, 7, 'IMG_0348.jpg', ''),
(91, 45, 7, 'IMG_0354.jpg', ''),
(92, 45, 7, 'IMG_0360.jpg', ''),
(93, 45, 7, 'IMG_0368.jpg', ''),
(94, 45, 7, 'IMG_0383.jpg', ''),
(95, 45, 7, 'IMG_0424.jpg', ''),
(96, 42, 7, '_MG_02141.jpg', ''),
(97, 6, 1, '038.jpg', ''),
(98, 6, 1, '039.jpg', ''),
(99, 6, 1, '041.jpg', ''),
(100, 6, 1, '044.jpg', ''),
(101, 6, 1, '053.jpg', ''),
(102, 6, 1, '058.jpg', ''),
(103, 6, 1, '062.jpg', ''),
(104, 6, 1, '065.jpg', ''),
(105, 6, 1, '072.jpg', ''),
(106, 6, 1, '074.jpg', ''),
(107, 6, 1, '077.jpg', ''),
(108, 6, 1, '081.jpg', ''),
(109, 6, 1, 'image.jpg', ''),
(110, 6, 1, 'image(1).jpg', ''),
(111, 29, 4, 'IMG_5426.jpg', ''),
(112, 29, 4, 'IMG_5446.jpg', ''),
(113, 29, 4, 'IMG_5466.jpg', ''),
(114, 29, 4, 'IMG_5473.jpg', ''),
(115, 29, 4, 'IMG_5554.jpg', ''),
(116, 29, 4, 'IMG_5561.jpg', ''),
(117, 29, 4, 'IMG_5562.jpg', ''),
(118, 29, 4, 'IMG_5591.jpg', ''),
(119, 29, 4, 'IMG_5628.jpg', ''),
(120, 29, 4, 'IMG_5638.jpg', ''),
(121, 29, 4, '_MG_5502.jpg', ''),
(122, 29, 4, '_MG_5506.jpg', ''),
(123, 29, 4, '_MG_5512.jpg', ''),
(124, 29, 4, '_MG_5514.jpg', ''),
(125, 29, 4, '_MG_5519.jpg', ''),
(126, 29, 4, '_MG_5523.jpg', ''),
(127, 29, 4, '_MG_5527.jpg', ''),
(128, 29, 4, '_MG_5531.jpg', ''),
(129, 29, 4, '_MG_5533.jpg', ''),
(130, 29, 4, '_MG_5534.jpg', ''),
(131, 33, 6, 'IMG_9412.jpg', ''),
(132, 33, 6, 'IMG_9467.jpg', ''),
(133, 33, 6, '_MG_9439.jpg', ''),
(134, 33, 6, '_MG_9464.jpg', ''),
(135, 33, 6, '_MG_9497.jpg', ''),
(136, 33, 6, '_MG_9501.jpg', ''),
(137, 33, 6, '_MG_9600.jpg', ''),
(138, 33, 6, '_MG_9605.jpg', ''),
(139, 35, 6, 'image(20).jpg', ''),
(140, 35, 6, 'image(23).jpg', ''),
(141, 35, 6, 'IMG_9612.jpg', ''),
(142, 35, 6, 'IMG_9613.jpg', ''),
(143, 35, 6, '_MG_9555.jpg', ''),
(144, 35, 6, '_MG_9594.jpg', ''),
(145, 35, 6, '_MG_9596.jpg', ''),
(146, 35, 6, '_MG_9603.jpg', ''),
(147, 15, 1, '_MG_0309.jpg', ''),
(148, 15, 1, '_MG_0310.jpg', ''),
(149, 15, 1, '_MG_0316.jpg', ''),
(150, 15, 1, '_MG_0319.jpg', ''),
(151, 31, 4, 'image(15).jpg', ''),
(152, 31, 4, 'image(16).jpg', ''),
(153, 31, 4, 'image(17).jpg', ''),
(154, 31, 4, 'image(18).jpg', ''),
(155, 41, 7, '_MG_0169.jpg', ''),
(156, 41, 7, '_MG_0176.jpg', ''),
(157, 41, 7, '_MG_0194.jpg', ''),
(158, 41, 7, '_MG_01902.jpg', ''),
(159, 4, 1, 'Chirincana1.jpg', ''),
(160, 4, 1, 'Chirincana2.jpg', ''),
(161, 4, 1, 'Chirincana3.jpg', ''),
(162, 4, 1, 'Chirincana4.jpg', ''),
(163, 4, 1, 'Chirincana5.jpg', ''),
(164, 4, 1, 'Chirincana6.jpg', ''),
(165, 17, 1, 'Alameda1.jpg', ''),
(166, 17, 1, 'Alameda2.jpg', ''),
(167, 17, 1, 'Alameda3.jpg', ''),
(168, 17, 1, 'Alameda4.jpg', ''),
(169, 17, 1, 'Alameda5.jpg', ''),
(170, 17, 1, 'Alameda6.jpg', ''),
(171, 10, 1, '010.jpg', ''),
(172, 10, 1, '015.jpg', ''),
(173, 10, 1, '019.jpg', ''),
(174, 10, 1, '541.jpg', ''),
(175, 10, 1, '542.jpg', ''),
(176, 10, 1, '545.jpg', ''),
(177, 10, 1, '547.jpg', ''),
(178, 10, 1, '554.jpg', ''),
(179, 10, 1, '563.jpg', ''),
(180, 10, 1, '565.jpg', ''),
(181, 10, 1, '568.jpg', ''),
(182, 10, 1, '573.jpg', ''),
(183, 20, 1, 'IMG_5895.JPG', ''),
(184, 20, 1, 'IMG_5897.JPG', ''),
(185, 20, 1, 'IMG_5898.JPG', ''),
(186, 20, 1, 'IMG_5900.JPG', ''),
(187, 20, 1, 'IMG_5903.JPG', ''),
(188, 20, 1, 'IMG_5905.JPG', ''),
(189, 20, 1, 'IMG_5910.JPG', ''),
(190, 20, 1, 'IMG_5922.JPG', ''),
(191, 20, 1, 'IMG_5929.JPG', ''),
(192, 20, 1, 'IMG_5935.JPG', ''),
(193, 20, 1, 'IMG_5936.JPG', ''),
(194, 20, 1, 'IMG_5937.JPG', ''),
(195, 20, 1, 'IMG_5953.JPG', ''),
(196, 20, 1, 'IMG_5955.JPG', ''),
(197, 20, 1, 'IMG_5959.JPG', ''),
(198, 20, 1, '_MG_5887.JPG', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pr_information`
--

CREATE TABLE IF NOT EXISTS `pr_information` (
  `id` int(11) NOT NULL,
  `sex` char(1) NOT NULL,
  `provincia` varchar(60) NOT NULL,
  `ocuppation` varchar(90) NOT NULL,
  `feast_location` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pr_information`
--

INSERT INTO `pr_information` (`id`, `sex`, `provincia`, `ocuppation`, `feast_location`) VALUES
(1, 'M', 'Alicante', 'sdafsadf', 'sadff asdfsadff asdfsad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pr_interest`
--

CREATE TABLE IF NOT EXISTS `pr_interest` (
  `id` int(11) NOT NULL,
  `Foto` tinyint(4) NOT NULL DEFAULT '0',
  `TV` tinyint(4) NOT NULL DEFAULT '0',
  `Music` tinyint(4) NOT NULL DEFAULT '0',
  `Teatro` tinyint(4) NOT NULL DEFAULT '0',
  `Disco` tinyint(4) NOT NULL DEFAULT '0',
  `Fest` tinyint(4) NOT NULL DEFAULT '0',
  `Moda` tinyint(4) NOT NULL DEFAULT '0',
  `Net` tinyint(4) NOT NULL DEFAULT '0',
  `Mobile` tinyint(4) NOT NULL DEFAULT '0',
  `Motor` tinyint(4) NOT NULL DEFAULT '0',
  `Rock` tinyint(4) NOT NULL DEFAULT '0',
  `Techno` tinyint(4) NOT NULL DEFAULT '0',
  `Latino` tinyint(4) NOT NULL DEFAULT '0',
  `Reggae` tinyint(4) NOT NULL DEFAULT '0',
  `Trance` tinyint(4) NOT NULL DEFAULT '0',
  `Urban` tinyint(4) NOT NULL DEFAULT '0',
  `Otra` tinyint(4) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pr_interest`
--

INSERT INTO `pr_interest` (`id`, `Foto`, `TV`, `Music`, `Teatro`, `Disco`, `Fest`, `Moda`, `Net`, `Mobile`, `Motor`, `Rock`, `Techno`, `Latino`, `Reggae`, `Trance`, `Urban`, `Otra`) VALUES
(1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sharem`
--

CREATE TABLE IF NOT EXISTS `sharem` (
  `id_orig` int(11) NOT NULL,
  `id_dest` int(11) NOT NULL,
  `id_med` int(11) NOT NULL,
  `tipe` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `user_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nac` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `user_name`, `fecha_nac`) VALUES
(1, 'hesselek@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'hesselek', '1980-01-07'),
(2, 'niko_pibe_199@hotmail.com', '', 'nicolas', '0000-00-00'),
(3, 'selu_92_5@hotmail.com', '', 'luismicros', '0000-00-00'),
(4, 'nahuelapk@hotmail.com', '', 'nahuepk', '0000-00-00'),
(5, 'danina3@msn.com', '', 'nico1', '0000-00-00'),
(6, 'nacla21@hotmail.com', '', 'NADIA CARO', '0000-00-00'),
(7, 'yolijp_22@yahoo.es', '', 'yoli', '0000-00-00'),
(8, 'inmaluna@rocketmail.com', '', 'LUNITA', '0000-00-00'),
(9, 'cocos_al_bote@hotmail.com', '', 'josevilla', '0000-00-00'),
(10, 'juandiegomartin91@gmail.com', '', 'jdm', '0000-00-00'),
(11, 'djal_l123@hotmail.com', '', 'DJALL', '0000-00-00'),
(12, 'Damiane82@me.com', '', 'Damiane', '0000-00-00'),
(13, 'igprr@hotmail.com', '', 'IsaaK46', '0000-00-00'),
(14, 'djelsevi@hotmail.com', '', 'elsevi', '0000-00-00'),
(15, 'djbenjimix@hotmail.com', '', 'Benji Estévez', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(120) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `title` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipe` tinyint(4) DEFAULT NULL,
  `reproducciones` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `video`
--

INSERT INTO `video` (`id`, `link`, `title`, `date`, `tipe`, `reproducciones`) VALUES
(1, 'http://www.youtube.com/embed/lQPyZTX6Q0k', 'Presentacion "Esta es mi casa" (Noche de Relámpagos)', '2012-11-03 08:15:02', 1, 3),
(2, 'http://www.youtube.com/embed/54OjPxTAryE', 'Fiesta Salar (Granada) ', '2012-11-03 15:29:18', 1, 2),
(4, 'http://www.youtube.com/embed/MYyqbNRvtfM', 'Concierto étnico (Chirincana, Ibiza) ', '2012-11-03 15:32:03', 1, 3),
(6, 'http://www.youtube.com/embed/QDbZNX-KMiQ', 'Timbalada (Ibiza) ', '2012-11-03 15:33:32', 1, 2),
(7, 'http://www.youtube.com/embed/1hQBEky7Rf0', 'Paseando en limusina (Destino Miss Kittin) - Parte 1', '2012-11-03 15:34:44', 3, 4),
(8, 'http://www.youtube.com/embed/tw-nzZDUeuI', 'Paseando en limusina (Destino Miss Kittin) - Parte 2 ', '2012-11-03 15:36:09', 3, 23),
(9, 'http://www.youtube.com/embed/plUxck8gh64', 'Las Dalias (Fiesta Namasté - Ibiza) ', '2012-11-03 15:37:39', 1, 3),
(10, 'http://www.youtube.com/embed/T7Z2NdLDobg', 'Festival Santa Gertrudis y Noche de San Juan (Ibiza) ', '2012-11-03 15:38:43', 1, 2),
(11, 'http://www.youtube.com/embed/kWWzqMfkX7o', 'Sala Boss (DJ Session) ', '2012-11-03 15:41:03', 4, 2),
(12, 'http://www.youtube.com/embed/3_lN210k8D8', 'Resumen Territorios Sevilla 2012 ', '2012-11-03 15:42:10', 6, 2),
(13, 'http://www.youtube.com/embed/7PVHNulfdqY', 'Monólogo Jorge García (Sala E)', '2012-11-04 18:29:24', 1, 3),
(14, 'http://www.youtube.com/embed/0ToD9-GDrrg', '2 planes, 1 minuto (El Naranjo/Las Dalias - Ibiza) ', '2012-11-04 18:30:12', 1, 2),
(15, 'http://www.youtube.com/embed/ytF3iaaNwIE', 'Estrella Sublime Sala Cero', '2012-11-04 18:33:22', 1, 8),
(16, 'http://www.youtube.com/embed/R-vhIfB0y7c', 'Navidad 2011 en Montequinto ', '2012-11-04 18:33:22', 1, 3),
(17, 'http://www.youtube.com/embed/W4R440b5Wf4', 'Nochevieja 2011-12 (Alameda de Hércules) ', '2012-11-04 18:36:25', 1, 5),
(18, 'http://www.youtube.com/embed/7xTzKZEPOKw', 'Fiesta Erotika (Sala Versalles)', '2012-11-04 18:36:25', 1, 13),
(19, 'http://www.youtube.com/embed/Gp4odiiTeec', 'Fiesta Sala Cosmos', '2012-11-04 18:37:27', 1, 10),
(20, 'http://www.youtube.com/embed/0_09X1xVeqg', 'Concierto Juan Diego Martín (Sala Bravo)', '2012-11-04 18:38:33', 1, 128),
(21, 'http://www.youtube.com/embed/004GvJeA52A', 'DH Festival', '2012-11-04 18:40:43', 1, 7),
(22, 'http://www.youtube.com/embed/wYR6jbhv5cA', 'Promo ', '2012-11-04 18:40:43', 3, 1),
(23, 'http://www.youtube.com/embed/oEWyXVdbMmc', '2º Aniversario Sala E', '2012-11-04 18:44:30', 1, 29),
(24, 'http://www.youtube.com/embed/p4SzqyXbTvM', 'Las Dalias (Ibiza)', '2012-11-04 18:44:30', 3, 3),
(25, 'http://www.youtube.com/embed/MdYGyG2niPc', 'Maratón de la tapa (Benalúa . Granada) ', '2012-11-04 18:48:45', 1, 9),
(26, 'http://www.youtube.com/embed/TjnXUNGFzoM', 'El Naranjo (Santa Eulalia, Ibiza)', '2012-11-04 18:50:40', 3, 3),
(28, 'http://www.youtube.com/embed/xRbfJ5q0_eU', 'Tráiler "Ibiza 2013: Una nueva visión"', '2012-11-04 18:52:18', 3, 9),
(29, 'http://www.youtube.com/embed/RGjpRiJxleY', 'Sala Custom', '2012-11-04 18:53:35', 4, 4),
(30, 'http://www.youtube.com/embed/MnDyWDIB5k8', 'Rueda de Prensa SFDK (Territorios 2012) ', '2012-11-04 18:56:23', 5, 3),
(31, 'http://www.youtube.com/embed/yOZnoUc3wmA', 'Carl Cox (Ibiza Global Radio) ', '2012-11-04 18:59:01', 4, 5),
(33, 'http://www.youtube.com/embed/YY4OVXA-CuE', 'Creamfields (Dubstep) ', '2012-11-04 19:01:08', 6, 4),
(34, 'http://www.youtube.com/embed/xMOvwdRYt7g', 'Pasacalles Privilege (Parte I - Maquillaje y vestuario)', '2012-11-04 19:02:59', 4, 7),
(35, 'http://www.youtube.com/embed/zQm11f8fN6M', 'Creamfields (Techno y Electropop)', '2012-11-04 19:04:19', 6, 3),
(36, 'http://www.youtube.com/embed/oA6bFAPnE54', 'Concierto Mojinos Escozíos (Sala Custom) ', '2012-11-04 19:05:27', 7, 4),
(37, 'http://www.youtube.com/embed/s495Jittr3k', 'Alhambra Sound Festival ', '2012-11-04 19:06:15', 6, 5),
(38, 'http://www.youtube.com/embed/bqlXlT0lwWc', 'Pasacalles Privilege (Parte II - Fiesta "The Face of Ibiza")', '2012-11-04 19:09:35', 4, 6),
(39, 'http://www.youtube.com/embed/5Wku59disw8', 'Concierto de Juan Diego Martín', '2012-11-04 19:10:49', 7, 5),
(40, 'http://www.youtube.com/embed/7wWYsuGJN9Y', 'Amnesia Opening Party 2012 (Ibiza)', '2012-11-04 19:11:31', 4, 3),
(41, 'http://www.youtube.com/embed/4FBFVI2PMOs', 'Cine mudo en Casa de la Provincia ', '2012-11-04 19:12:52', 7, 5),
(42, 'http://www.youtube.com/embed/53hZ7FK1lcM', 'Concierto en directo Raúl Micó La imperdible ', '2012-11-04 19:14:24', 7, 6),
(43, 'http://www.youtube.com/embed/qp1C3iQlEdU', 'Los Fonotarecos (Festival de las Naciones)', '2012-11-06 18:05:24', 1, 9),
(44, 'http://www.youtube.com/embed/L_b_6Is6R3Y', 'Yacara en Teatro Quintero', '2012-11-07 20:48:32', 7, 63),
(45, 'http://www.youtube.com/embed/doVHOXPPCvE', 'Concierto en directo "Fuel Fandango" Sala Custom Sevilla', '2012-11-07 20:50:57', 7, 6),
(50, 'http://www.youtube.com/embed/n_0sjpUamOE?list=UU11l_I-hy0j2FKidrE6SdzQ', 'Presentación disco " Sin trampa ni cartón" Juan Palma en Fna', '2012-11-13 17:03:56', 7, 1),
(51, 'http://www.youtube.com/embed/b-uj2hwq-gY?list=UU11l_I-hy0j2FKidrE6SdzQ&amp;hl=es_ES', 'Halloween', '2012-11-13 17:08:45', 3, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
