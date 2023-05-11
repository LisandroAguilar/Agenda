-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2023 a las 06:08:17
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdagendalis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `idcarrera` varchar(4) NOT NULL,
  `nomcarrera` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idcarrera`, `nomcarrera`) VALUES
('LITS', 'LICENCIATURA EN INGENIERIA EN TECNOLOGIAS DE SOFTWARE'),
('LSC', 'LICENCIATURA EN SISTEMAS COMPUTACIONALES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `idlugar` varchar(4) NOT NULL,
  `nomlugar` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`idlugar`, `nomlugar`) VALUES
('1', 'Salón A1'),
('2', 'Salón A2'),
('3', 'Salón A3'),
('4', 'Salón A4'),
('5', 'Salón A5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `idmateria` varchar(4) NOT NULL,
  `nommateria` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`idmateria`, `nommateria`) VALUES
('1', 'ADMINISTRACION DE BASES DE DATOS'),
('2', 'COMPILADORES'),
('3', 'CONTABILIDAD'),
('4', 'INGLES V'),
('5', 'INVESTIGACION DE OPERACIONES II');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `idprofesor` varchar(4) NOT NULL,
  `nomprofesor` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idprofesor`, `nomprofesor`) VALUES
('1', 'NURICUMBO CASTRO HECTOR ROBERTO, D'),
('2', 'TEVERA MANDUJANO JUAN JOSE, DR.'),
('3', 'CRUZ GOMEZ JOSE CARLOS, MTRO.'),
('4', 'MORALES GALDAMEZ SANDRA GUADALUPE, '),
('5', 'VELAZQUEZ TRUJILLO SABINO, DR.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idcalendario` int(5) NOT NULL,
  `idmateria` varchar(4) DEFAULT NULL,
  `idprofesor` varchar(4) DEFAULT NULL,
  `idlugar` varchar(4) DEFAULT NULL,
  `temas` varchar(50) DEFAULT NULL,
  `gradogrupo` varchar(2) DEFAULT NULL,
  `idcarrera` varchar(4) DEFAULT NULL,
  `idusuario` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idcalendario`, `idmateria`, `idprofesor`, `idlugar`, `temas`, `gradogrupo`, `idcarrera`, `idusuario`) VALUES
(1, '1', '1', '1', 'Conexión de base de datos', '5J', 'LSC', 1),
(2, '2', '2', '2', 'Analizador léxico', '5J', 'LSC', 2),
(3, '3', '3', '3', 'Las NIF\'S', '5J', 'LSC', 3),
(4, '4', '4', '4', 'Presente Simple', '5J', 'LSC', 4),
(5, '5', '5', '5', 'Método simplex', '5J', 'LSC', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_grupos`
--

CREATE TABLE `t_grupos` (
  `id` int(11) NOT NULL,
  `grado` varchar(2) DEFAULT NULL,
  `grupo` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `t_grupos`
--

INSERT INTO `t_grupos` (`id`, `grado`, `grupo`) VALUES
(1, '1', 'J'),
(2, '1', 'k'),
(3, '2', 'J'),
(4, '2', 'k'),
(5, '3', 'J'),
(6, '3', 'k'),
(7, '4', 'J'),
(8, '4', 'k'),
(9, '5', 'J'),
(10, '6', 'J'),
(11, '7', 'J'),
(12, '8', 'J'),
(13, '9', 'J');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `clave` varchar(72) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`idusuario`, `usuario`, `clave`) VALUES
(1, 'hector.nuricumbo@unach.mx', 'NUCH69'),
(7, 'hector.nuricumbo@gmail.com', '$2y$12$/fr8rfuMZVj.16y1KBSLtOWDGDAiQzjNSm5PZhWdV9n7hMJHEhlgm'),
(8, 'bernardo.lopez@unach.mx', '$2y$12$YKNo2M0kURenyN0uNKixnOPp/zyf5qzWNhFJ4Our67tOBlCXfdjS.'),
(9, 'hectorroberto.nuricumbo@unach.mx', '$2y$12$PZve.B0IN.edug1in5omTucQw12duCMaCvJGsPmOewvjxgxgVjUK2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(7) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `cliente`, `pass`) VALUES
(1, 'Lisandro', '12345'),
(2, 'Jerry', '12345'),
(3, 'Chepe', '12345'),
(4, 'Lucho', '12345'),
(5, 'Italiano', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idcarrera`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`idlugar`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`idmateria`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idprofesor`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idcalendario`),
  ADD KEY `idlugar` (`idlugar`),
  ADD KEY `idmateria` (`idmateria`),
  ADD KEY `idprofesor` (`idprofesor`),
  ADD KEY `idcarrera` (`idcarrera`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `t_grupos`
--
ALTER TABLE `t_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idcalendario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_grupos`
--
ALTER TABLE `t_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`idlugar`) REFERENCES `lugar` (`idlugar`),
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`),
  ADD CONSTRAINT `registro_ibfk_3` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`),
  ADD CONSTRAINT `registro_ibfk_4` FOREIGN KEY (`idcarrera`) REFERENCES `carrera` (`idcarrera`),
  ADD CONSTRAINT `registro_ibfk_5` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
