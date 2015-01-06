-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2015 a las 07:59:29
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u791284268_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `titulo` varchar(32) NOT NULL,
  `url` varchar(128) NOT NULL,
  `imagen` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`titulo`, `url`, `imagen`) VALUES
('Asus', 'http://www.asus.com/mx/', 'http://www.asus.com/es/websites/global/products/Z9zboGSUuWyLgwXV/top_banner.jpg'),
('Movistar', 'http://www.movistar.com.mx', 'http://t3.gstatic.com/images?q=tbn:ANd9GcS0rYCImmlXKWx77xCfNTfVD5c_N3kbNhdkGaFTISGcMsEl0Dt6'),
('Nvidia', 'http://www.nvidia.com.mx/page/home.html', 'http://img1.meristation.com/files/imagenes/general/ngf2013_banner.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `titulo` varchar(32) NOT NULL,
  `url` varchar(128) NOT NULL,
  `tipo` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`titulo`, `url`, `tipo`) VALUES
('Admin', 'admin.php', '_blank'),
('Github', 'https://github.com/OscarBUG/ExamenAbargon', '_blank'),
('Google', 'https://www.google.com.mx', '_blank');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `titulo` varchar(32) NOT NULL,
  `contenido` mediumtext,
  `tipo` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`titulo`, `contenido`, `tipo`) VALUES
('#CES2015: El Sony Walkman estÃ¡ ', 'Se estimaba que la firma podrÃ­a presentar un nuevo equipo Sony Walkman en el CES 2015, y asÃ­ fue. El nuevo ZX2 Walkman es real, esto es "el fruto del continuo perfeccionamiento de las tecnologÃ­as de alta calidad de audio" menciona la compaÃ±Ã­a.\n\nA mucha gente le gusta el diseÃ±o del ZX1, buque insignia anterior de Sony Walkman. Su carcasa tiene un color negro mate. Sus botones de reproducciÃ³n se encuentran tallados en su lado curvo.', '0'),
('Lo mejor de YouTube en 2014', 'Este aÃ±o, la plataforma mÃ¡s conocida de videos por Internet, nos sorprendiÃ³ con un perro araÃ±a en Polonia, aprendimos lo que se siente caminar por la calle durante 10 horas como una mujer en Nueva York y vimos cÃ³mo extraÃ±os compartieron un primer beso.\n\nAsimismo, muchos cantaron "Let It Go" el tema musical de la pelÃ­cula "Frozen de Disney, mientras que en MÃ©xico, cantamos con los pollitos, bailamos banda y aprendimos todo lo necesario para sobrevivir a un apocalipsis zombie.', '1'),
('Samsung presenta smart tvs y ele', 'La empresa ha confirmado que sus equipos de televisores inteligentes, Tizen, el cual presenta algunas diferencias, como un formato minimalista, sin relaciÃ³n aparente con el Tizen que hemos visto en otros dispositivos.\n\nAsimismo, estos equipos permitirÃ¡n la conexiÃ³n con Playstation Now, el cual fue presentado con el juego NBA 2K14. Este servicio se lanzarÃ¡ con un modelo de suscripciÃ³n mensual o trimestral en Estados Unidos', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`) VALUES
('admin', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
 ADD PRIMARY KEY (`titulo`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
 ADD PRIMARY KEY (`titulo`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
 ADD PRIMARY KEY (`titulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
