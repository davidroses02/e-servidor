-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2022 a las 13:28:12
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dwes_centromedico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `medicos_id` int(11) NOT NULL,
  `pacientes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `fecha_hora`, `medicos_id`, `pacientes_id`) VALUES
(1, '2022-06-15 11:00:00', 1, 1),
(2, '2022-06-16 12:46:54', 2, 2),
(3, '2022-06-16 12:58:48', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `medicos_id` int(11) NOT NULL,
  `pacientes_id` int(11) NOT NULL,
  `diagnostico` varchar(255) DEFAULT NULL,
  `tratamiento` varchar(255) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `citas_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `fecha_hora`, `medicos_id`, `pacientes_id`, `diagnostico`, `tratamiento`, `observaciones`, `citas_id`) VALUES
(1, '2022-06-16 11:29:34', 3, 1, 'laal', 'papa', 'lulu', 1),
(2, '2022-06-16 11:32:51', 3, 1, 'muy mal', 'paracetamol', 'fatal', 1),
(3, '2022-06-16 13:37:59', 3, 1, 'cansancio', 'reposoTotal', 'muchas horas prog', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `especialidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id`, `especialidad`) VALUES
(5, 'ALERGOLOGÍA'),
(2, 'CARDIOLOGÍA'),
(8, 'DERMATOLOGÍA'),
(7, 'OFTALMOLOGÍA'),
(6, 'REUMATOLOGÍA'),
(1, 'TRAUMATOLOGÍA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `especialidades_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `usuarios_id`, `especialidades_id`) VALUES
(1, 3, 1),
(2, 4, 2),
(3, 12, 5),
(4, 14, 5),
(5, 15, 6),
(6, 16, 7),
(7, 17, 8),
(8, 18, 7),
(9, 19, 7),
(10, 20, 2),
(11, 22, 8),
(12, 23, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `codigo_asegurado` varchar(45) NOT NULL,
  `usuarios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `codigo_asegurado`, `usuarios_id`) VALUES
(1, 'COD-3981928', 1),
(2, 'COD-3290129', 2),
(3, 'COD328127', 5),
(5, 'COD328121', 6),
(8, 'COD328123', 8),
(9, 'COD328124', 9),
(10, 'COD328125', 10),
(11, 'COD328126', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nombre` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`) VALUES
(1, 'paciente1', 'paciente1', 'Manolo Gafotas'),
(2, 'paciente2', 'paciente2', 'Mafalda Quino'),
(3, 'medico1', 'medico1', 'Dr. Guillermo García'),
(4, 'medico2', 'medico2', 'Dra. Patricia Pedrajas'),
(5, 'paciente3', 'paciente3', 'Mortadelo Ibáñez'),
(6, 'paciente4', 'paciente4', 'Capitán Trueno'),
(8, 'paciente5', 'paciente5', 'Roberto Alcázar'),
(9, 'paciente6', 'paciente6', 'Susana Zipi'),
(10, 'paciente7', 'paciente7', 'Mercedes Percebe'),
(11, 'paciente8', 'paciente8', 'Salvador Guerrero'),
(12, 'medico3', 'medico3', 'Dra. Leblanc'),
(14, 'medico4', 'medico4', 'Dra. Lea'),
(15, 'medico5', 'medico5', 'Dr. Martín'),
(16, 'medico6', 'medico6', 'Dra. Serrano'),
(17, 'medico7', 'medico7', 'Dra. Salud'),
(18, 'medico8', 'medico8', 'Dr. Bruto'),
(19, 'medico9', 'medico9', 'Dra. Masa'),
(20, 'medico10', 'medico10', 'Dra. Amigo'),
(21, 'admin', 'admin', 'admin'),
(22, 'Aurora', 'c153d42e', 'Aurora'),
(23, 'David', 'c297bf0f', 'David');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_citas_medicos1_idx` (`medicos_id`),
  ADD KEY `fk_citas_pacientes1_idx` (`pacientes_id`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_citas_medicos1_idx` (`medicos_id`),
  ADD KEY `fk_citas_pacientes1_idx` (`pacientes_id`),
  ADD KEY `fk_consultas_citas1_idx` (`citas_id`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `especialidad_UNIQUE` (`especialidad`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pacientes_usuarios_idx` (`usuarios_id`),
  ADD KEY `fk_medicos_especialidades1_idx` (`especialidades_id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo_asegurado_UNIQUE` (`codigo_asegurado`),
  ADD UNIQUE KEY `fk_pacientes_usuarios_idx` (`usuarios_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `fk_citas_medicos1` FOREIGN KEY (`medicos_id`) REFERENCES `medicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_citas_pacientes1` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `fk_citas_medicos10` FOREIGN KEY (`medicos_id`) REFERENCES `medicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_citas_pacientes10` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_consultas_citas1` FOREIGN KEY (`citas_id`) REFERENCES `citas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD CONSTRAINT `fk_medicos_especialidades1` FOREIGN KEY (`especialidades_id`) REFERENCES `especialidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pacientes_usuarios0` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `fk_pacientes_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
