-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-10-2022 a las 04:46:38
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18803800_databasenora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosPersonales`
--

CREATE TABLE `datosPersonales` (
  `idDP` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoPaterno` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoMaterno` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `correoE` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datosPersonales`
--

INSERT INTO `datosPersonales` (`idDP`, `idUsuario`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `edad`, `sexo`, `correoE`) VALUES
(3, 1, 'Andres Karim', 'Ruiz', 'Del Cid', 21, 'Masculino', 'example@gmail.com'),
(22, 66, 'Andres Karim', 'Ruiz', 'Del Cid', 21, 'Masculino', 'example@gmail.com'),
(23, 67, 'dfgdfsg', 'cvbfgh', 'fghfgdh', 23, 'Masculino', 'fgsdfg'),
(24, 70, 'jgkg', 'jkljhkl', 'jklhjl', 21, 'Prefiero no decir', 'example@gmail.com'),
(25, 64, 'dfg', 'vnvbn', 'tryerty', 21, 'Masculino', 'example@gmail.com'),
(26, 73, 'Mario', 'Lopez', 'Marquez', 26, 'Masculino', 'msmario264@gmail.com'),
(27, 74, 'Mauricio', 'Escobedo', 'Sanchez', 28, 'Masculino', 'mau.escobedo@gmail.com'),
(29, 76, 'Luis', 'Armando', 'Perez', 21, 'Masculino', 'example@gmail.com'),
(30, 77, 'Andres Karim', 'Ruiz', 'Del Cid', 33, 'Masculino', 'example@gmail.com'),
(31, 80, 'a', 'a', 'a', 25, 'Masculino', 'afafa'),
(32, 88, 'Israel', 'Ortiz', 'Garcia', 35, 'Masculino', 'israel_og@gmail.com'),
(33, 68, 'Daniel', 'Carrillo', 'Jimenez', 20, 'Masculino', 'daniel.carrillo@gmail.com'),
(34, 85, 'Tomas', 'Zamora', 'Sanchez', 25, 'Masculino', 'tomy4@gmail.com'),
(35, 92, 'Gonzalo6', '58462', 'perez', 25, 'Masculino', 'gonzalo34'),
(36, 108, 'Max', 'Perez', 'Nu&ntilde;ez', 23, 'Masculino', 'ejemplo@gmail.com'),
(37, 109, 'Doc', 'aaa', 'aaa', 35, 'Masculino', 'akmcac');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico_Paciente`
--

CREATE TABLE `medico_Paciente` (
  `idMP` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `idMedico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `medico_Paciente`
--

INSERT INTO `medico_Paciente` (`idMP`, `idPaciente`, `idMedico`) VALUES
(25, 66, 64),
(26, 70, 64),
(28, 73, 74),
(29, 68, 74),
(30, 77, 64);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Paciente1_Preguntas`
--

CREATE TABLE `Paciente1_Preguntas` (
  `pregID` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `respuesta` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `bandera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Paciente1_Preguntas`
--

INSERT INTO `Paciente1_Preguntas` (`pregID`, `idPregunta`, `idUsuario`, `respuesta`, `valor`, `bandera`) VALUES
(1, 1, 66, NULL, NULL, 1),
(2, 2, 66, NULL, NULL, 1),
(3, 3, 66, NULL, NULL, 1),
(4, 4, 66, NULL, NULL, 1),
(5, 5, 66, NULL, NULL, 1),
(6, 6, 66, NULL, NULL, 1),
(7, 7, 66, NULL, NULL, 1),
(8, 8, 66, NULL, NULL, 1),
(9, 9, 66, NULL, NULL, 1),
(10, 10, 66, NULL, NULL, 1),
(11, 11, 66, NULL, NULL, 1),
(12, 12, 66, NULL, NULL, 1),
(13, 13, 66, NULL, NULL, 1),
(14, 14, 66, NULL, NULL, 1),
(15, 15, 66, NULL, NULL, 1),
(16, 16, 66, NULL, NULL, 1),
(17, 17, 66, NULL, NULL, 1),
(18, 18, 66, NULL, NULL, 1),
(19, 19, 66, NULL, NULL, 1),
(20, 20, 66, NULL, NULL, 1),
(21, 21, 66, NULL, NULL, 1),
(22, 22, 66, NULL, NULL, 1),
(23, 23, 66, NULL, NULL, 1),
(24, 24, 66, NULL, NULL, 1),
(25, 25, 66, NULL, NULL, 1),
(26, 26, 66, NULL, NULL, 1),
(27, 27, 66, NULL, NULL, 1),
(28, 28, 66, NULL, NULL, 1),
(29, 29, 66, NULL, NULL, 1),
(30, 30, 66, NULL, NULL, 1),
(31, 31, 66, NULL, NULL, 1),
(32, 32, 66, NULL, NULL, 1),
(33, 33, 66, NULL, NULL, 1),
(34, 34, 66, NULL, NULL, 1),
(35, 35, 66, NULL, NULL, 1),
(36, 36, 66, NULL, NULL, 1),
(37, 37, 66, NULL, NULL, 1),
(38, 38, 66, NULL, NULL, 1),
(39, 39, 66, NULL, NULL, 1),
(40, 40, 66, NULL, NULL, 1),
(41, 41, 66, NULL, NULL, 1),
(42, 42, 66, NULL, NULL, 1),
(43, 43, 66, NULL, NULL, 1),
(44, 44, 66, NULL, NULL, 1),
(45, 45, 66, NULL, NULL, 1),
(46, 46, 66, NULL, NULL, 1),
(47, 47, 66, NULL, NULL, 1),
(48, 48, 66, NULL, NULL, 1),
(49, 49, 66, NULL, NULL, 1),
(50, 50, 66, NULL, NULL, 1),
(51, 51, 66, NULL, NULL, 1),
(52, 52, 66, NULL, NULL, 1),
(53, 53, 66, NULL, NULL, 1),
(54, 54, 66, NULL, NULL, 1),
(55, 55, 66, NULL, NULL, 1),
(56, 56, 66, NULL, NULL, 1),
(57, 57, 66, NULL, NULL, 1),
(58, 58, 66, NULL, NULL, 1),
(59, 59, 66, NULL, NULL, 1),
(60, 60, 66, NULL, NULL, 1),
(61, 61, 66, NULL, NULL, 1),
(62, 62, 66, NULL, NULL, 1),
(63, 63, 66, NULL, NULL, 1),
(64, 64, 66, NULL, NULL, 1),
(65, 65, 66, NULL, NULL, 1),
(66, 66, 66, NULL, NULL, 1),
(67, 67, 66, NULL, NULL, 1),
(68, 68, 66, NULL, NULL, 1),
(69, 69, 66, NULL, NULL, 1),
(70, 70, 66, NULL, NULL, 1),
(71, 71, 66, NULL, NULL, 1),
(72, 72, 66, NULL, NULL, 1),
(73, 73, 66, NULL, NULL, 1),
(74, 74, 66, NULL, NULL, 1),
(75, 75, 66, NULL, NULL, 1),
(76, 76, 66, NULL, NULL, 1),
(77, 77, 66, NULL, NULL, 1),
(78, 78, 66, NULL, NULL, 1),
(79, 79, 66, NULL, NULL, 1),
(80, 80, 66, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Paciente2_Preguntas`
--

CREATE TABLE `Paciente2_Preguntas` (
  `pregID` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `respuesta` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `bandera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Paciente2_Preguntas`
--

INSERT INTO `Paciente2_Preguntas` (`pregID`, `idPregunta`, `idUsuario`, `respuesta`, `valor`, `bandera`) VALUES
(1, 1, 67, NULL, NULL, 1),
(2, 2, 67, NULL, NULL, 1),
(3, 3, 67, NULL, NULL, 1),
(4, 4, 67, NULL, NULL, 1),
(5, 5, 67, NULL, NULL, 1),
(6, 6, 67, NULL, NULL, 1),
(7, 7, 67, NULL, NULL, 1),
(8, 8, 67, NULL, NULL, 1),
(9, 9, 67, NULL, NULL, 1),
(10, 10, 67, NULL, NULL, 1),
(11, 11, 67, NULL, NULL, 1),
(12, 12, 67, NULL, NULL, 1),
(13, 13, 67, NULL, NULL, 1),
(14, 14, 67, NULL, NULL, 1),
(15, 15, 67, NULL, NULL, 1),
(16, 16, 67, NULL, NULL, 1),
(17, 17, 67, NULL, NULL, 1),
(18, 18, 67, NULL, NULL, 1),
(19, 19, 67, NULL, NULL, 1),
(20, 20, 67, NULL, NULL, 1),
(21, 21, 67, NULL, NULL, 1),
(22, 22, 67, NULL, NULL, 1),
(23, 23, 67, NULL, NULL, 1),
(24, 24, 67, NULL, NULL, 1),
(25, 25, 67, NULL, NULL, 1),
(26, 26, 67, NULL, NULL, 1),
(27, 27, 67, NULL, NULL, 1),
(28, 28, 67, NULL, NULL, 1),
(29, 29, 67, NULL, NULL, 1),
(30, 30, 67, NULL, NULL, 1),
(31, 31, 67, NULL, NULL, 1),
(32, 32, 67, NULL, NULL, 1),
(33, 33, 67, NULL, NULL, 1),
(34, 34, 67, NULL, NULL, 1),
(35, 35, 67, NULL, NULL, 1),
(36, 36, 67, NULL, NULL, 1),
(37, 37, 67, NULL, NULL, 1),
(38, 38, 67, NULL, NULL, 1),
(39, 39, 67, NULL, NULL, 1),
(40, 40, 67, NULL, NULL, 1),
(41, 41, 67, NULL, NULL, 1),
(42, 42, 67, NULL, NULL, 1),
(43, 43, 67, NULL, NULL, 1),
(44, 44, 67, NULL, NULL, 1),
(45, 45, 67, NULL, NULL, 1),
(46, 46, 67, NULL, NULL, 1),
(47, 47, 67, NULL, NULL, 1),
(48, 48, 67, NULL, NULL, 1),
(49, 49, 67, NULL, NULL, 1),
(50, 50, 67, NULL, NULL, 1),
(51, 51, 67, NULL, NULL, 1),
(52, 52, 67, NULL, NULL, 1),
(53, 53, 67, NULL, NULL, 1),
(54, 54, 67, NULL, NULL, 1),
(55, 55, 67, NULL, NULL, 1),
(56, 56, 67, NULL, NULL, 1),
(57, 57, 67, NULL, NULL, 1),
(58, 58, 67, NULL, NULL, 1),
(59, 59, 67, NULL, NULL, 1),
(60, 60, 67, NULL, NULL, 1),
(61, 61, 67, NULL, NULL, 1),
(62, 62, 67, NULL, NULL, 1),
(63, 63, 67, NULL, NULL, 1),
(64, 64, 67, NULL, NULL, 1),
(65, 65, 67, NULL, NULL, 1),
(66, 66, 67, NULL, NULL, 1),
(67, 67, 67, NULL, NULL, 1),
(68, 68, 67, NULL, NULL, 1),
(69, 69, 67, NULL, NULL, 1),
(70, 70, 67, NULL, NULL, 1),
(71, 71, 67, NULL, NULL, 1),
(72, 72, 67, NULL, NULL, 1),
(73, 73, 67, NULL, NULL, 1),
(74, 74, 67, NULL, NULL, 1),
(75, 75, 67, NULL, NULL, 1),
(76, 76, 67, NULL, NULL, 1),
(77, 77, 67, NULL, NULL, 1),
(78, 78, 67, NULL, NULL, 1),
(79, 79, 67, NULL, NULL, 1),
(80, 80, 67, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Paciente3_Preguntas`
--

CREATE TABLE `Paciente3_Preguntas` (
  `pregID` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `respuesta` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `bandera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Paciente3_Preguntas`
--

INSERT INTO `Paciente3_Preguntas` (`pregID`, `idPregunta`, `idUsuario`, `respuesta`, `valor`, `bandera`) VALUES
(1, 1, 68, NULL, NULL, 1),
(2, 2, 68, NULL, NULL, 1),
(3, 3, 68, NULL, NULL, 1),
(4, 4, 68, NULL, NULL, 1),
(5, 5, 68, NULL, NULL, 1),
(6, 6, 68, NULL, NULL, 1),
(7, 7, 68, NULL, NULL, 1),
(8, 8, 68, NULL, NULL, 1),
(9, 9, 68, NULL, NULL, 1),
(10, 10, 68, NULL, NULL, 1),
(11, 11, 68, NULL, NULL, 1),
(12, 12, 68, NULL, NULL, 1),
(13, 13, 68, NULL, NULL, 1),
(14, 14, 68, NULL, NULL, 1),
(15, 15, 68, NULL, NULL, 1),
(16, 16, 68, NULL, NULL, 1),
(17, 17, 68, NULL, NULL, 1),
(18, 18, 68, NULL, NULL, 1),
(19, 19, 68, NULL, NULL, 1),
(20, 20, 68, NULL, NULL, 1),
(21, 21, 68, NULL, NULL, 1),
(22, 22, 68, NULL, NULL, 1),
(23, 23, 68, NULL, NULL, 1),
(24, 24, 68, NULL, NULL, 1),
(25, 25, 68, NULL, NULL, 1),
(26, 26, 68, NULL, NULL, 1),
(27, 27, 68, NULL, NULL, 1),
(28, 28, 68, NULL, NULL, 1),
(29, 29, 68, NULL, NULL, 1),
(30, 30, 68, NULL, NULL, 1),
(31, 31, 68, NULL, NULL, 1),
(32, 32, 68, NULL, NULL, 1),
(33, 33, 68, NULL, NULL, 1),
(34, 34, 68, NULL, NULL, 1),
(35, 35, 68, NULL, NULL, 1),
(36, 36, 68, NULL, NULL, 1),
(37, 37, 68, NULL, NULL, 1),
(38, 38, 68, NULL, NULL, 1),
(39, 39, 68, NULL, NULL, 1),
(40, 40, 68, NULL, NULL, 1),
(41, 41, 68, NULL, NULL, 1),
(42, 42, 68, NULL, NULL, 1),
(43, 43, 68, NULL, NULL, 1),
(44, 44, 68, NULL, NULL, 1),
(45, 45, 68, NULL, NULL, 1),
(46, 46, 68, NULL, NULL, 1),
(47, 47, 68, NULL, NULL, 1),
(48, 48, 68, NULL, NULL, 1),
(49, 49, 68, NULL, NULL, 1),
(50, 50, 68, NULL, NULL, 1),
(51, 51, 68, NULL, NULL, 1),
(52, 52, 68, NULL, NULL, 1),
(53, 53, 68, NULL, NULL, 1),
(54, 54, 68, NULL, NULL, 1),
(55, 55, 68, NULL, NULL, 1),
(56, 56, 68, NULL, NULL, 1),
(57, 57, 68, NULL, NULL, 1),
(58, 58, 68, NULL, NULL, 1),
(59, 59, 68, NULL, NULL, 1),
(60, 60, 68, NULL, NULL, 1),
(61, 61, 68, NULL, NULL, 1),
(62, 62, 68, NULL, NULL, 1),
(63, 63, 68, NULL, NULL, 1),
(64, 64, 68, NULL, NULL, 1),
(65, 65, 68, NULL, NULL, 1),
(66, 66, 68, NULL, NULL, 1),
(67, 67, 68, NULL, NULL, 1),
(68, 68, 68, NULL, NULL, 1),
(69, 69, 68, NULL, NULL, 1),
(70, 70, 68, NULL, NULL, 1),
(71, 71, 68, NULL, NULL, 1),
(72, 72, 68, NULL, NULL, 1),
(73, 73, 68, NULL, NULL, 1),
(74, 74, 68, NULL, NULL, 1),
(75, 75, 68, NULL, NULL, 1),
(76, 76, 68, NULL, NULL, 1),
(77, 77, 68, NULL, NULL, 1),
(78, 78, 68, NULL, NULL, 1),
(79, 79, 68, NULL, NULL, 1),
(80, 80, 68, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Paciente5_Preguntas`
--

CREATE TABLE `Paciente5_Preguntas` (
  `pregID` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `respuesta` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `bandera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Paciente5_Preguntas`
--

INSERT INTO `Paciente5_Preguntas` (`pregID`, `idPregunta`, `idUsuario`, `respuesta`, `valor`, `bandera`) VALUES
(1, 1, 70, 'Si', 1, 0),
(2, 2, 70, 'No', 0, 0),
(3, 3, 70, 'Si', 1, 0),
(4, 4, 70, 'No', 0, 0),
(5, 5, 70, 'Si', 1, 0),
(6, 6, 70, NULL, NULL, 1),
(7, 7, 70, NULL, NULL, 1),
(8, 8, 70, NULL, NULL, 1),
(9, 9, 70, NULL, NULL, 1),
(10, 10, 70, NULL, NULL, 1),
(11, 11, 70, NULL, NULL, 1),
(12, 12, 70, NULL, NULL, 1),
(13, 13, 70, NULL, NULL, 1),
(14, 14, 70, NULL, NULL, 1),
(15, 15, 70, NULL, NULL, 1),
(16, 16, 70, NULL, NULL, 1),
(17, 17, 70, NULL, NULL, 1),
(18, 18, 70, NULL, NULL, 1),
(19, 19, 70, NULL, NULL, 1),
(20, 20, 70, NULL, NULL, 1),
(21, 21, 70, NULL, NULL, 1),
(22, 22, 70, NULL, NULL, 1),
(23, 23, 70, NULL, NULL, 1),
(24, 24, 70, NULL, NULL, 1),
(25, 25, 70, NULL, NULL, 1),
(26, 26, 70, NULL, NULL, 1),
(27, 27, 70, NULL, NULL, 1),
(28, 28, 70, NULL, NULL, 1),
(29, 29, 70, NULL, NULL, 1),
(30, 30, 70, NULL, NULL, 1),
(31, 31, 70, NULL, NULL, 1),
(32, 32, 70, NULL, NULL, 1),
(33, 33, 70, NULL, NULL, 1),
(34, 34, 70, NULL, NULL, 1),
(35, 35, 70, NULL, NULL, 1),
(36, 36, 70, NULL, NULL, 1),
(37, 37, 70, NULL, NULL, 1),
(38, 38, 70, NULL, NULL, 1),
(39, 39, 70, NULL, NULL, 1),
(40, 40, 70, NULL, NULL, 1),
(41, 41, 70, NULL, NULL, 1),
(42, 42, 70, NULL, NULL, 1),
(43, 43, 70, NULL, NULL, 1),
(44, 44, 70, NULL, NULL, 1),
(45, 45, 70, NULL, NULL, 1),
(46, 46, 70, NULL, NULL, 1),
(47, 47, 70, NULL, NULL, 1),
(48, 48, 70, NULL, NULL, 1),
(49, 49, 70, NULL, NULL, 1),
(50, 50, 70, NULL, NULL, 1),
(51, 51, 70, NULL, NULL, 1),
(52, 52, 70, NULL, NULL, 1),
(53, 53, 70, NULL, NULL, 1),
(54, 54, 70, NULL, NULL, 1),
(55, 55, 70, NULL, NULL, 1),
(56, 56, 70, NULL, NULL, 1),
(57, 57, 70, NULL, NULL, 1),
(58, 58, 70, NULL, NULL, 1),
(59, 59, 70, NULL, NULL, 1),
(60, 60, 70, NULL, NULL, 1),
(61, 61, 70, NULL, NULL, 1),
(62, 62, 70, NULL, NULL, 1),
(63, 63, 70, NULL, NULL, 1),
(64, 64, 70, NULL, NULL, 1),
(65, 65, 70, NULL, NULL, 1),
(66, 66, 70, NULL, NULL, 1),
(67, 67, 70, NULL, NULL, 1),
(68, 68, 70, NULL, NULL, 1),
(69, 69, 70, NULL, NULL, 1),
(70, 70, 70, NULL, NULL, 1),
(71, 71, 70, NULL, NULL, 1),
(72, 72, 70, NULL, NULL, 1),
(73, 73, 70, NULL, NULL, 1),
(74, 74, 70, NULL, NULL, 1),
(75, 75, 70, NULL, NULL, 1),
(76, 76, 70, NULL, NULL, 1),
(77, 77, 70, NULL, NULL, 1),
(78, 78, 70, NULL, NULL, 1),
(79, 79, 70, NULL, NULL, 1),
(80, 80, 70, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Preguntas`
--

CREATE TABLE `Preguntas` (
  `idPregunta` int(11) NOT NULL,
  `pregunta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valorSi` int(11) DEFAULT NULL,
  `valorNo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Preguntas`
--

INSERT INTO `Preguntas` (`idPregunta`, `pregunta`, `valorSi`, `valorNo`) VALUES
(1, '¿Eres arrogante? (Presumido o altanero)', 1, 0),
(2, '¿Has tenido dificultades porque consumes drogas o bebidas alcohólicas en la escuela?', 1, 0),
(3, '¿Se aburren tus amigos en las fiestas donde no sirven bebidas alcohólicas?', 1, 0),
(4, '¿Discuten demasiado tus padres o tutores?', 1, 0),
(5, '¿Te cansas con frecuencia? (Fácil o muy frecuentemente)', 1, 0),
(6, '¿Te asustas con facilidad?', 1, 0),
(7, '¿Tienes menos energía de la que crees que deberías tener?', 1, 0),
(8, '¿Te sientes frustrado(a) con facilidad? (Que te molestes o te sientas mal cuando no tienes o logras lo que quieres)', 1, 0),
(9, '¿Amenazas a otros con hacerles daño?', 1, 0),
(10, '¿Te sientes solo(a) la mayor parte del tiempo?', 1, 0),
(11, '¿Dices groserías o vulgaridades?', 1, 0),
(12, '¿Escuchas atentamente cuando alguien te habla?', 0, 1),
(13, '¿Son tus amigos del agrado de tus padres o tutores?', 0, 1),
(14, '¿Se niegan tus padres o tutores a hablarte cuando se enfadan contigo?', 1, 0),
(15, '¿Actúas impulsivamente y sin pensar en las consecuencias que tendrán tus actos?', 1, 0),
(16, '¿Te has hecho daño o le has hecho daño a otra persona accidentalmente estando bajo el efecto del alcohol o de drogas?', 1, 0),
(17, '¿Tienes buena ortografía?', 0, 1),
(18, '¿Tienes amigos que causan daño o destrucción intencionalmente?', 1, 0),
(19, 'La mayoría de las veces, ¿saben tus padres o tutores dónde estás y lo que estás haciendo?', 0, 1),
(20, '¿Sueles perderte actividades o acontecimientos por que has gastado demasiado dinero endrogas o bebidas alcohólicas?', 1, 0),
(21, '¿Participas en muchas actividades en compañía de tus padres o tutores?', 0, 1),
(22, '¿Te sientes nervioso(a) la mayor parte del tiempo?', 1, 0),
(23, '¿Has robado alguna vez?', 1, 0),
(24, '¿Has sentido que eres adicto(a) al alcohol o las drogas?', 1, 0),
(25, '¿Sabes leer bien?', 0, 1),
(26, '¿Has estado ausente o llegado tarde a tu trabajo o escuela con frecuencia?', 1, 0),
(27, '¿Sientes que la gente está en contra tuya?', 1, 0),
(28, '¿Llevan tus amigos drogas a las fiestas?', 1, 0),
(29, '¿Peleas a menudo o muchas veces?', 1, 0),
(30, '¿Tienes mal genio? (Mal humor)', 1, 0),
(31, '¿Te prestan atención tus padres o tutores cuando les hablas?', 0, 1),
(32, '¿Has comenzado a consumir mayores cantidades de drogas o alcohol para obtener el efecto que deseas?', 1, 0),
(33, '¿Te dice la gente que eres descuidado(a)? (Desordenado o poco atento)', 1, 0),
(34, '¿Eres testarudo(a)? (Necio o terco)', 1, 0),
(35, '¿Has tenido alguna vez o tienes actualmente un empleo?', 1, 0),
(36, '¿Has amenazado alguna vez a alguien con un arma?', 1, 0),
(37, '¿Te vas a veces de las fiestas por que no hay en ellas bebidas alcohólicas o drogas?', 1, 0),
(38, '¿Saben realmente tus padres o tutores cómo piensas o te sientes?', 0, 1),
(39, '¿Actúas impulsivamente con frecuencia?', 1, 0),
(40, '¿Sientes un deseo constante de consumir bebidas alcohólicas o drogas?', 1, 0),
(41, '¿Pierdes el hilo del pensamiento con mucha frecuencia? (Se van las ideas o te distraes fácilmente)', 1, 0),
(42, '¿Tienes dificultades para concentrarte?', 1, 0),
(43, '¿Has tenido alguna vez un empleo con sueldo que haya durado por lo menos un mes?', 1, 0),
(44, '¿Discutes frecuentemente con tus padres o tutores, levantando la voz y gritando?', 1, 0),
(45, '¿Has tenido un accidente automovilístico estando bajo el efecto del alcohol o de drogas?', 1, 0),
(46, '¿Olvidas lo que haces cuando bebes o te drogas?', 1, 0),
(47, 'El mes pasado, ¿manejaste un automóvil estando borracho(a) o drogado(a)?', 1, 0),
(48, '¿Levantas la voz más que los demás muchachos (as) de tu edad?', 1, 0),
(49, '¿Has ocasionado daños a la propiedad ajena intencionalmente?', 1, 0),
(50, '¿Has dejado un empleo sencillamente por que no te interesaban las consecuencias de dejarlo?', 1, 0),
(51, '¿A tus padres o tutores les gusta hablar y estar contigo?', 0, 1),
(52, '¿Has pasado alguna noche fuera de tu casa sin que tus padres o tutores supieran dónde estabas?', 1, 0),
(53, '¿El uso de alcohol o drogas te produce cambios repentinos de humor, como pasar de estar contento(a) a estar triste, o viceversa?', 1, 0),
(54, '¿Te sientes triste la mayor parte del tiempo?', 1, 0),
(55, '¿Pierdes días de clase o llegas tarde a la escuela por haber consumido bebidas alcohólicas o drogas?', 1, 0),
(56, '¿Te han dicho alguna vez tus familiares o amigos que debes reducir el uso de bebidas alcohólicas o drogas?', 1, 0),
(57, '¿Discutes seriamente con tus amigos o familiares por el uso que haces de bebidas alcohólicas o drogas?', 1, 0),
(58, '¿Molestas mucho a tus amigos?', 1, 0),
(59, '¿Tienes dificultades para dormir?', 1, 0),
(60, '¿Tienes dificultades para hacer trabajos escritos?', 1, 0),
(61, '¿Las bebidas alcohólicas o las drogas te han inducido a hacer algo que normalmente no harías, como desobedecer alguna regla o ley, o la hora de llegar a casa, o a tener relaciones sexuales con alguien?', 1, 0),
(62, '¿Sientes que a veces pierdes el control de ti mismo(a) y terminas peleando?', 1, 0),
(63, '¿Faltaste a la escuela sin autorización el mes pasado?', 1, 0),
(64, '¿Tienes dificultades en tus relaciones con alguno de tus amigos debido a las bebidas alcohólicas o drogas que consumes?', 1, 0),
(65, '¿Tienes dificultades en seguir instrucciones?', 1, 0),
(66, '¿Tienes amigos que han golpeado o amenazado a alguien sin razón?', 1, 0),
(67, '¿Discutes seriamente con tus amigos o familiares por el uso que haces de bebidas alcohólicas o drogas?', 1, 0),
(68, '¿Tienes buena memoria?', 0, 1),
(69, '¿Tienen tus padres o tutores una idea relativamente buena de lo que te interesa?', 0, 1),
(70, '¿Están tus padres o tutores de acuerdo en cuanto a la forma en que te deben manejar?', 1, 0),
(71, '¿Se te hace difícil hacer planes u organizar tus actividades?', 1, 0),
(72, '¿Faltan tus amigos a la escuela sin autorización con mucha frecuencia?', 1, 0),
(73, '¿Te hace la escuela sentirte tonto (a) a veces?', 1, 0),
(74, '¿Sientes deseos de llorar frecuentemente?', 1, 0),
(75, '¿Te da miedo estar con la gente?', 1, 0),
(76, '¿Tienes amigos que han robado?', 1, 0),
(77, '¿Has reprobado algún año en la escuela?', 1, 0),
(78, '¿Es difícil la escuela para ti?', 1, 0),
(79, '¿Eres una persona nerviosa, de las que no pueden estar sentadas mucho tiempo?', 1, 0),
(80, '¿Gritas mucho?', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tipoUsuario` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `clave`, `tipoUsuario`) VALUES
(1, 'root', '123', 'Administrador'),
(64, 'Doctor1', '123', 'Doctor'),
(66, 'Paciente1', '123456', 'Paciente'),
(67, 'Paciente2', '23', 'paciente'),
(68, 'Paciente3', '123', 'paciente'),
(69, 'Paciente4', '44', 'Paciente'),
(70, 'Paciente5', '77', 'Paciente'),
(71, 'Administrador1', '1', 'Administrador'),
(73, 'Paciente6', '14789', 'Paciente'),
(74, 'Doctor2', '456', 'Doctor'),
(76, 'Paciente7', '1', 'Paciente'),
(77, 'Paciente8', '1', 'Paciente'),
(78, 'Paciente9', 'usu1', 'Paciente'),
(79, 'Paciente10', 'lala1', 'Paciente'),
(80, 'Doctor3', 'lolo1', 'Doctor'),
(81, '1', '123', ''),
(82, '2', '123', ''),
(83, 'Paciente11', '123', 'Paciente'),
(84, 'Doctor4', '123', 'Doctor'),
(85, 'Paciente12', '123', 'Paciente'),
(86, 'Paciente13', '123', 'Paciente'),
(87, 'Paciente14', '1234', 'Paciente'),
(88, 'Doctor5', '123456', 'Doctor'),
(89, 'Paciente15', '123', 'Paciente'),
(90, 'Paciente16', '123', 'Paciente'),
(91, 'Paciente17', '123', 'Paciente'),
(92, 'Doctor6', '123', 'Doctor'),
(93, 'Doctor7', '123', 'Doctor'),
(94, 'Doctor8', '123', 'Doctor'),
(95, 'Doctor9', '123', 'Doctor'),
(96, 'Paciente18', 'asd', 'Paciente'),
(97, 'Doctor10', '123', 'Doctor'),
(98, 'Paciente19', '123', 'Paciente'),
(99, 'Paciente20', '123', 'Paciente'),
(100, 'Doctor11', '123', 'Doctor'),
(101, 'Doctor12', '123', 'Doctor'),
(102, 'Doctor13', '123', 'Doctor'),
(103, 'Doctor14', 'password', 'Doctor'),
(104, 'Paciente21', 'password', 'Paciente'),
(105, 'Doctor15', '123', 'Doctor'),
(106, 'Paciente22', '1', 'Paciente'),
(107, 'Paciente23', '1234', 'Paciente'),
(108, 'Paciente24', 'Max123', 'Paciente'),
(109, 'Doctor16', 'doc123', 'Doctor'),
(110, 'Doctor17', '123', 'Doctor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_Paciente`
--

CREATE TABLE `_Paciente` (
  `idP` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `_Paciente`
--

INSERT INTO `_Paciente` (`idP`, `idUsuario`, `nombre`) VALUES
(44, 67, 'Paciente2'),
(50, 76, 'Paciente7'),
(52, 78, 'Paciente9'),
(53, 79, 'Paciente10'),
(54, 83, 'Paciente11'),
(55, 85, 'Paciente12'),
(56, 86, 'Paciente13'),
(57, 87, 'Paciente14'),
(58, 89, 'Paciente15'),
(59, 90, 'Paciente16'),
(60, 91, 'Paciente17'),
(61, 96, 'Paciente18'),
(62, 98, 'Paciente19'),
(63, 99, 'Paciente20'),
(64, 104, 'Paciente21'),
(65, 106, 'Paciente22'),
(66, 107, 'Paciente23'),
(67, 108, 'Paciente24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosPersonales`
--
ALTER TABLE `datosPersonales`
  ADD PRIMARY KEY (`idDP`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `medico_Paciente`
--
ALTER TABLE `medico_Paciente`
  ADD PRIMARY KEY (`idMP`),
  ADD KEY `idPaciente` (`idPaciente`),
  ADD KEY `idMedico` (`idMedico`);

--
-- Indices de la tabla `Paciente1_Preguntas`
--
ALTER TABLE `Paciente1_Preguntas`
  ADD PRIMARY KEY (`pregID`),
  ADD KEY `idPregunta` (`idPregunta`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `Paciente2_Preguntas`
--
ALTER TABLE `Paciente2_Preguntas`
  ADD PRIMARY KEY (`pregID`),
  ADD KEY `idPregunta` (`idPregunta`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `Paciente3_Preguntas`
--
ALTER TABLE `Paciente3_Preguntas`
  ADD PRIMARY KEY (`pregID`),
  ADD KEY `idPregunta` (`idPregunta`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `Paciente5_Preguntas`
--
ALTER TABLE `Paciente5_Preguntas`
  ADD PRIMARY KEY (`pregID`),
  ADD KEY `idPregunta` (`idPregunta`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `Preguntas`
--
ALTER TABLE `Preguntas`
  ADD PRIMARY KEY (`idPregunta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `_Paciente`
--
ALTER TABLE `_Paciente`
  ADD PRIMARY KEY (`idP`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosPersonales`
--
ALTER TABLE `datosPersonales`
  MODIFY `idDP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `medico_Paciente`
--
ALTER TABLE `medico_Paciente`
  MODIFY `idMP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `Paciente1_Preguntas`
--
ALTER TABLE `Paciente1_Preguntas`
  MODIFY `pregID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `Paciente2_Preguntas`
--
ALTER TABLE `Paciente2_Preguntas`
  MODIFY `pregID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `Paciente3_Preguntas`
--
ALTER TABLE `Paciente3_Preguntas`
  MODIFY `pregID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `Paciente5_Preguntas`
--
ALTER TABLE `Paciente5_Preguntas`
  MODIFY `pregID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `_Paciente`
--
ALTER TABLE `_Paciente`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datosPersonales`
--
ALTER TABLE `datosPersonales`
  ADD CONSTRAINT `datosPersonales_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `medico_Paciente`
--
ALTER TABLE `medico_Paciente`
  ADD CONSTRAINT `medico_Paciente_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `medico_Paciente_ibfk_2` FOREIGN KEY (`idMedico`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `Paciente1_Preguntas`
--
ALTER TABLE `Paciente1_Preguntas`
  ADD CONSTRAINT `Paciente1_Preguntas_ibfk_1` FOREIGN KEY (`idPregunta`) REFERENCES `Preguntas` (`idPregunta`),
  ADD CONSTRAINT `Paciente1_Preguntas_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `Paciente2_Preguntas`
--
ALTER TABLE `Paciente2_Preguntas`
  ADD CONSTRAINT `Paciente2_Preguntas_ibfk_1` FOREIGN KEY (`idPregunta`) REFERENCES `Preguntas` (`idPregunta`),
  ADD CONSTRAINT `Paciente2_Preguntas_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `Paciente3_Preguntas`
--
ALTER TABLE `Paciente3_Preguntas`
  ADD CONSTRAINT `Paciente3_Preguntas_ibfk_1` FOREIGN KEY (`idPregunta`) REFERENCES `Preguntas` (`idPregunta`),
  ADD CONSTRAINT `Paciente3_Preguntas_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `Paciente5_Preguntas`
--
ALTER TABLE `Paciente5_Preguntas`
  ADD CONSTRAINT `Paciente5_Preguntas_ibfk_1` FOREIGN KEY (`idPregunta`) REFERENCES `Preguntas` (`idPregunta`),
  ADD CONSTRAINT `Paciente5_Preguntas_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `_Paciente`
--
ALTER TABLE `_Paciente`
  ADD CONSTRAINT `_Paciente_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
