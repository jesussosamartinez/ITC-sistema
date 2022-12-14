-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2022 a las 20:22:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idAlumno` int(10) NOT NULL,
  `ApellidoP` varchar(50) NOT NULL,
  `ApellidoM` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `NumeroControl` int(10) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Semestre` varchar(10) NOT NULL,
  `ClaveCarrera` varchar(10) NOT NULL,
  `idRol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idAlumno`, `ApellidoP`, `ApellidoM`, `Nombre`, `NumeroControl`, `Telefono`, `Correo`, `Semestre`, `ClaveCarrera`, `idRol`) VALUES
(18, 'RIVAS', 'SOTO', 'CESAR ENRIQUE', 15680393, '735-218-35-97', '15680393@cuautla.tecnm.mx', '-', 'IM', 3),
(4, 'APARICIO ', 'SANCHEZ ', 'LAURA', 17680627, '735-175-11-44', '17680627@cuautla.tecnm.mx', 'ONCEAVO', 'IGE', 3),
(15, 'PEREZ', 'MENDOZA', 'ALMA YAMINA', 17680842, '735-165-11-87', '17680842@cuautla.tecnm.mx', 'ONCEAVO', 'IGE', 3),
(5, 'BASALDUA', 'DE LOS SANTOS', 'ANGEL ISRAEL', 18680082, '735-235-01-18', '18680082@cuautla.tecnm.mx', 'NOVENO', 'ISC', 3),
(16, 'PEREZ', 'OLIVEROS', 'FREDI', 18680193, '735-176-31-22', '18680193@cuautla.tecnm.mx', 'NOVENO', 'ISC', 3),
(11, 'SANTIAGO', 'SILVA', 'MARTHA', 18680232, '735-206-11-49', '18680232@cuautla.tecnm.mx', 'NOVENO', 'ISC', 3),
(26, 'SOSA', 'MARTINEZ', 'HECTOR DE JESUS', 18680236, '735-116-33-21', '18680236@cuautla.tecnm.mx', 'NOVENO', 'ISC', 3),
(27, 'ZAMBRANO', 'TRUJILLO ', 'IRIS MARGARITA', 18680254, '735-115-09-70', '18680254@cuautla.tecnm.mx', 'NOVENO', 'ISC', 3),
(12, 'MORAN', 'SILVA', 'KEVIN EFRAIN', 18680495, '735-186-09-29', '18680495@cuautla.tecnm.mx', 'NOVENO', 'IM', 3),
(10, 'MARINEZ', 'POZOS', 'GRECIA', 18680629, '735-102-89-71', '18680629@cuautla.tecnm.mx', 'NOVENO', 'IGE', 3),
(14, 'PERCIL', 'BAZAN', 'YAZMIN', 18680645, '735-205-09-71', '18680645@cuautla.tecnm.mx', 'NOVENO', 'IGE', 3),
(24, 'URIOSTEGUI', 'CASTAÑEDA', 'MARITZA', 19680780, '735-136-91-21', '19680780@cuautla.tecnm.mx', 'SEPTIMO', 'IGE', 3),
(21, 'SANDOVAL', 'BRAVO', 'BRAYAN', 20680509, '735-132-09-11', '20680509@cuautla.tecnm.mx', 'TERCER', 'ISC', 3),
(8, 'ESPITIA', 'GARCIA', 'CARLOS EDUARDO', 21680244, '735-175-11-44', '21680244@cuautla.tecnm.mx', 'SEPTIMO', 'II', 3),
(9, 'GAYOSSO', 'RAMIREZ', 'ANDREA KIMBERLY', 21680573, '735-276-71-29', '21680573@cuautla.tecnm.mx', 'SEPTIMO', 'LC', 3),
(19, 'RODRIGUEZ', 'RAMOS', 'ALEXA DANAY', 21680610, '735-175-11-44', '21680610@cuautla.tecnm.mx', 'SEPTIMO', 'LC', 3),
(22, 'SANDOVAL', 'BRAVO', 'LUIS ALBERTO', 21680697, '735-116-71-29', '21680697@cuautla.tecnm.mx', 'TERCER', 'ISC', 3),
(1, 'AGUILAR', 'BETANCOURT', 'JOSE CARLOS', 22680058, '735-176-31-21', '22680058@cuautla.tecnm.mx', 'PRIMER', 'ISC', 3),
(13, 'ONTERO', 'ROSAS', 'LUIS GERARDO', 22680218, '735-138-35-80', '22680218@cuautla.tecnm.mx', 'PRIMER', 'ISC', 3),
(23, 'SILVA', 'PEREZ', 'JAIME', 22680284, '735-135-11-18', '22680285@cuautla.tecnm.mx', 'PRIMER', 'ISC', 3),
(25, 'ZAPOTITLA', 'JIMENEZ', 'JORGE LUIS', 22680320, '735-218-35-44', '22680320@cuautla.tecnm.mx', 'PRIMER', 'ISC', 3),
(7, 'CRUZ', 'CALEMDARIA', 'ARIADNA', 22680389, '735-175-11-44', '22680389@cuautla.tecnm.mx', 'PRIMER', 'II', 3),
(17, 'PLIEGO', 'RAMIREZ', 'JESUS DIDIER', 22680505, '735-218-50-90', '22680505@cuautla.tecnm.mx', 'PRIMER', 'II', 3),
(3, 'ALCANTAR', 'GARCIA', 'VIVIANA', 22680698, '735-132-09-71', '22680698@cuautla.tecnm.mx', 'PRIMER', 'IGE', 3),
(20, 'ROSENDO', 'HEREDIA', 'MELCHOR', 22680808, '735-276-71-28', '22680808@cuautla.tecnm.mx', 'PRIMER', 'IGE', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnotaller`
--

CREATE TABLE `alumnotaller` (
  `idAlumnoT` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `NumeroControl` int(10) NOT NULL,
  `ClaveTaller` varchar(10) NOT NULL,
  `idDepartamento` varchar(10) NOT NULL,
  `ClaveCarrera` varchar(10) NOT NULL,
  `ClaveDocente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `idCarrera` int(10) NOT NULL,
  `ClaveCarrera` varchar(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `idDepartamento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`idCarrera`, `ClaveCarrera`, `Nombre`, `idDepartamento`) VALUES
(2, 'IE', 'Electronica', 'EE003'),
(3, 'IGE', 'Gestion Empresarial ', 'GTV007'),
(4, 'II', 'Industrial', 'MM004'),
(5, 'IM', 'Mecatronica', 'MM004'),
(1, 'ISC', 'Sistemas Computacionales', 'SC001'),
(6, 'LC', 'Contador Publico', 'DCE002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `constancias`
--

CREATE TABLE `constancias` (
  `idConstancia` int(10) NOT NULL,
  `Participante` varchar(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `NumeroControl` int(10) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `diaInicio` varchar(10) NOT NULL,
  `mesInicio` varchar(10) NOT NULL,
  `añoInicio` varchar(10) NOT NULL,
  `diaTermino` varchar(10) NOT NULL,
  `mesTermino` varchar(10) NOT NULL,
  `añoTermino` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `idDepartamento` varchar(10) NOT NULL,
  `Departamento` varchar(50) NOT NULL,
  `NombreJD` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `Departamento`, `NombreJD`, `Correo`) VALUES
('AE006', 'Departamento de Actividades Extraescolares', 'Lic. Roberto Marcio Cuauhtle Pluma', 'c.informacion@cuautla.tecnm.mx	'),
('CB005', 'Departamento de Ciencias Básicas', 'Mtra. Ma. de los Ángeles Alcántara Barrera', 'basicas@cuautla.tecnm.mx'),
('DCE002', 'Departamento de Ciencias Económico-Administrativas', 'Mtro. Omar Oswaldo Torres Fernández', 'economico@cuautla.tecnm.mx'),
('EE003', 'Electrica y ELectrónica', 'Mtra. Marlem Flores Montiel', 'electronica@cuautla.tecnm.mx'),
('GTV007', 'Departamento de Gestión Tecnología y Vinculación', 'M.F.G. Areli Soledad Ruíz Martínez', 'gestion@cuautla.tecnm.mx'),
('MM004', 'Departamento de Metal Mecánica', 'Ing. María del Rubí Hernández Andrade', 'metal@cuautla.tecnm.mx'),
('SC001', 'Sistemas y Computación', 'Ing. Gisela Vega Torres', 'sistemas@cuautla.tecnm.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `idDocente` int(10) NOT NULL,
  `ClaveDocente` varchar(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoP` varchar(50) NOT NULL,
  `ApellidoM` varchar(50) NOT NULL,
  `idRol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`idDocente`, `ClaveDocente`, `Nombre`, `ApellidoP`, `ApellidoM`, `idRol`) VALUES
(1, 'CD-001', 'LEONOR', 'ANGELES', 'HERNANDEZ', 4),
(2, 'CD-002', 'KATIA', 'AMARO', 'ALVARADO', 4),
(3, 'CD-003', 'GUILLERMINA', 'SANCHEZ', 'MARINO', 4),
(4, 'CD-004', 'SAUL', 'MONDRAGON', 'ULLOA', 4),
(5, 'CD-005', 'IAN', 'HERNANDEZ', 'SILVA', 4),
(6, 'CD-006', 'YAMIL', 'JIMENEZ', 'OSORIO', 4),
(7, 'CD-007', 'RUTH', 'CASBIS', 'HERNANDEZ', 4),
(8, 'CD-008', 'GUILLERMO', 'URZUA', 'SANCHEZ', 4),
(9, 'CD-009', 'OSCAR', 'CABRERA', 'FLORES', 4),
(10, 'CD-010', 'JOSE', 'CALVARIO', 'HERRERA', 4),
(11, 'CD-011', 'ALEJANDRO ', 'SILVA', 'VARGAS', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intentosfallidos`
--

CREATE TABLE `intentosfallidos` (
  `idIF` int(10) NOT NULL,
  `idUsuario` int(10) NOT NULL,
  `intentos` int(10) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `intentos` int(10) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(10) NOT NULL,
  `Rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `Rol`) VALUES
(1, 'Admin'),
(2, 'JDepto'),
(3, 'Alumno'),
(4, 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres`
--

CREATE TABLE `talleres` (
  `idTaller` int(10) NOT NULL,
  `ClaveTaller` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Grupo` int(10) NOT NULL,
  `Turno` varchar(50) NOT NULL,
  `Condicion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`idTaller`, `ClaveTaller`, `Nombre`, `Tipo`, `Grupo`, `Turno`, `Condicion`) VALUES
(1, 'AE001', 'AJEDREZ', 'TALLER DEPORTIVO', 1, 'MATUTINO', 1),
(2, 'AE002', 'AJEDREZ', 'TALLER DEPORTIVO', 2, 'VESPERTINO', 0),
(3, 'AE003', 'BASQUETBOL', 'TALLER DEPORTIVO', 1, 'MATUTINO', 1),
(4, 'AE004', 'BASQUETBOL', 'TALLER DEPORTIVO', 2, 'VESPERTINO', 1),
(5, 'AE005', 'VOLEIBOL', 'TALLER DEPORTIVO', 1, 'MATUTINO', 0),
(6, 'AE006', 'VOLEIBOL', 'TALLER DEPORTIVO', 2, 'VESPERTINO', 1),
(7, 'AE007', 'BANDA DE GUERRA', 'TALLER CIVICO', 1, 'MATUTINO', 1),
(8, 'AE008', 'JIU-JITSU', 'TALLER DEPORTIVO', 1, 'MATUTINO', 1),
(9, 'AE009', 'CANTO', 'TALLER CULTURAL', 1, 'MATUTINO', 1),
(10, 'AE010', 'CANTO', 'TALLER CULTURAL', 2, 'VESPERTINO', 0),
(11, 'AE011', 'PINTURA', 'TALLER CULTURAL', 1, 'MATUTINO', 1),
(12, 'AE012', 'DIBUJO', 'TALLER CULTURAL', 1, 'MATUTINO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `idRol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `email`, `Password`, `idRol`) VALUES
(1, 'basicas@cuautla.tecnm.mx', 'Depto2022', 2),
(2, 'c.informacion@cuautla.tecnm.mx	', 'Depto2022', 2),
(3, 'economico@cuautla.tecnm.mx', 'Depto2022', 2),
(4, 'electronica@cuautla.tecnm.mx', 'Depto2022', 2),
(5, 'gestion@cuautla.tecnm.mx', 'Depto2022', 2),
(6, 'metal@cuautla.tecnm.mx', 'Depto2022', 2),
(7, 'sistemas@cuautla.tecnm.mx', 'Depto2022', 2),
(8, '15680393@cuautla.tecnm.mx', 'Mecatronica2022', 3),
(9, '21680573@cuautla.tecnm.mx', 'Contabilidad2022', 3),
(10, '21680610@cuautla.tecnm.mx', 'Contabilidad2022', 3),
(11, '21680697@cuautla.tecnm.mx', 'Sistemas2022', 3),
(12, '22680058@cuautla.tecnm.mx', 'Sistemas2022', 3),
(13, '22680218@cuautla.tecnm.mx', 'Sistemas2022', 3),
(14, '22680285@cuautla.tecnm.mx', 'Sistemas2022', 3),
(15, '22680320@cuautla.tecnm.mx', 'Sistemas2022', 3),
(16, '22680389@cuautla.tecnm.mx', 'Industrial2022', 3),
(17, '22680505@cuautla.tecnm.mx', 'Industrial2022', 3),
(18, '22680698@cuautla.tecnm.mx', 'Gestion2022', 3),
(19, '21680244@cuautla.tecnm.mx', 'Industrial2022', 3),
(20, '21680573@cuautla.tecnm.mx', 'Contabilidad2022', 3),
(21, '21680610@cuautla.tecnm.mx', 'Contabilidad2022', 3),
(22, '21680697@cuautla.tecnm.mx', 'Sistemas2022', 3),
(23, '22680058@cuautla.tecnm.mx', 'Sistemas2022', 3),
(24, '22680218@cuautla.tecnm.mx', 'Sistemas2022', 3),
(25, '22680285@cuautla.tecnm.mx', 'Sistemas2022', 3),
(26, '22680320@cuautla.tecnm.mx', 'Sistemas2022', 3),
(27, '22680389@cuautla.tecnm.mx', 'Industrial2022', 3),
(28, '22680505@cuautla.tecnm.mx', 'Industrial2022', 3),
(29, '22680698@cuautla.tecnm.mx', 'Gestion2022', 3),
(30, '22680808@cuautla.tecnm.mx', 'Gestion2022', 3),
(31, '17680627@cuautla.tecnm.mx', 'Gestion2022', 3),
(32, '17680842@cuautla.tecnm.mx', 'Gestion2022', 3),
(33, '18680082@cuautla.tecnm.mx', 'Sistemas2022', 3),
(34, '18680193@cuautla.tecnm.mx', 'Sistemas2022', 3),
(35, '18680232@cuautla.tecnm.mx', 'Sistemas2022', 3),
(36, '18680236@cuautla.tecnm.mx', 'Sistemas2022', 3),
(37, '18680254@cuautla.tecnm.mx', 'Sistemas2022', 3),
(38, '18680495@cuautla.tecnm.mx', 'Mecatronica2022', 3),
(39, '18680629@cuautla.tecnm.mx', 'Gestion2022', 3),
(40, '18680645@cuautla.tecnm.mx', 'Gestion2022', 3),
(41, '19680780@cuautla.tecnm.mx', 'Gestion2022', 3),
(42, '20680509@cuautla.tecnm.mx', 'Sistemas2022', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`NumeroControl`),
  ADD UNIQUE KEY `1` (`idAlumno`),
  ADD KEY `ClaveCarrera` (`ClaveCarrera`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `Correo` (`Correo`);

--
-- Indices de la tabla `alumnotaller`
--
ALTER TABLE `alumnotaller`
  ADD PRIMARY KEY (`idAlumnoT`),
  ADD KEY `idDepartamento` (`idDepartamento`),
  ADD KEY `NumeroControl` (`NumeroControl`),
  ADD KEY `ClaveTaller` (`ClaveTaller`),
  ADD KEY `ClaveDocente` (`ClaveDocente`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`ClaveCarrera`),
  ADD UNIQUE KEY `idCarrera` (`idCarrera`),
  ADD UNIQUE KEY `ClaveCarrera` (`ClaveCarrera`),
  ADD KEY `departamento-iddepartamento-carreras` (`idDepartamento`);

--
-- Indices de la tabla `constancias`
--
ALTER TABLE `constancias`
  ADD PRIMARY KEY (`idConstancia`),
  ADD KEY `NumeroControl` (`NumeroControl`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`idDepartamento`),
  ADD KEY `Correo` (`Correo`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`ClaveDocente`),
  ADD UNIQUE KEY `idDocente` (`idDocente`),
  ADD KEY `idRol` (`idRol`);

--
-- Indices de la tabla `intentosfallidos`
--
ALTER TABLE `intentosfallidos`
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`ClaveTaller`),
  ADD UNIQUE KEY `idTaller` (`idTaller`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idAlumno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `alumnotaller`
--
ALTER TABLE `alumnotaller`
  MODIFY `idAlumnoT` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `idCarrera` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `idDocente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `talleres`
--
ALTER TABLE `talleres`
  MODIFY `idTaller` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`ClaveCarrera`) REFERENCES `carreras` (`ClaveCarrera`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`);

--
-- Filtros para la tabla `alumnotaller`
--
ALTER TABLE `alumnotaller`
  ADD CONSTRAINT `alumnotaller_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`),
  ADD CONSTRAINT `alumnotaller_ibfk_2` FOREIGN KEY (`NumeroControl`) REFERENCES `alumnos` (`NumeroControl`),
  ADD CONSTRAINT `alumnotaller_ibfk_3` FOREIGN KEY (`ClaveTaller`) REFERENCES `talleres` (`ClaveTaller`),
  ADD CONSTRAINT `alumnotaller_ibfk_4` FOREIGN KEY (`ClaveDocente`) REFERENCES `docentes` (`ClaveDocente`);

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `departamento-iddepartamento-carreras` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`);

--
-- Filtros para la tabla `constancias`
--
ALTER TABLE `constancias`
  ADD CONSTRAINT `constancias_ibfk_1` FOREIGN KEY (`NumeroControl`) REFERENCES `alumnos` (`NumeroControl`);

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`);

--
-- Filtros para la tabla `intentosfallidos`
--
ALTER TABLE `intentosfallidos`
  ADD CONSTRAINT `intentosfallidos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
