-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2024 a las 15:12:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
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
  `Sexo` varchar(3) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Semestre` varchar(10) NOT NULL,
  `ClaveCarrera` varchar(50) NOT NULL,
  `idRol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idAlumno`, `ApellidoP`, `ApellidoM`, `Nombre`, `NumeroControl`, `Sexo`, `Telefono`, `Correo`, `Semestre`, `ClaveCarrera`, `idRol`) VALUES
(18, 'RIVAS', 'SOTO', 'CESAR ENRIQUE', 15680393, 'H', '735-218-35-97', '15680393@cuautla.tecnm.mx', 'DECIMO', 'INGENIERÍA MECATRÓNICA', 3),
(4, 'APARICIO ', 'SANCHEZ ', 'LAURA', 17680627, 'H', '735-175-11-44', '17680627@cuautla.tecnm.mx', 'ONCEAVO', 'INGENIERIA EN GESTIÓN EMPRESARIAL', 3),
(15, 'PEREZ', 'MENDOZA', 'ALMA YAMINA', 17680842, 'M', '735-165-11-87', '17680842@cuautla.tecnm.mx', 'ONCEAVO', 'INGENIERIA EN GESTIÓN EMPRESARIAL', 3),
(28, 'ANGELES', 'MARTINEZ', 'VICTORIA', 18680071, 'M', '', '18680071@cuautla.tecnm.mx', 'DECIMO', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 3),
(30, 'AVILA', 'GARIBAY', 'AXEL SURIEL', 18680077, 'H', '7351656023', '18680077@cuautla.tecnm.mx', 'ONCEAVO', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 3),
(5, 'BASALDUA', 'DE LOS SANTOS', 'ANGEL ISRAEL', 18680082, 'H', '735-235-01-18', '18680082@cuautla.tecnm.mx', 'NOVENO', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 3),
(16, 'PEREZ', 'OLIVEROS', 'FREDI', 18680193, 'H', '735-176-31-22', '18680193@cuautla.tecnm.mx', 'NOVENO', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 3),
(11, 'SANTIAGO', 'SILVA', 'MARTHA', 18680232, 'M', '735-206-11-49', '18680232@cuautla.tecnm.mx', 'NOVENO', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 3),
(26, 'SOSA', 'MARTINEZ', 'HECTOR DE JESUS', 18680236, 'H', '735-173-90-78', '18680236@cuautla.tecnm.mx', 'DECIMO', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 3),
(27, 'ZAMBRANO', 'TRUJILLO ', 'IRIS MARGARITA', 18680254, 'M', '735-115-09-70', '18680254@cuautla.tecnm.mx', 'NOVENO', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 3),
(12, 'MORAN', 'SILVA', 'KEVIN EFRAIN', 18680495, 'H', '735-186-09-29', '18680495@cuautla.tecnm.mx', 'NOVENO', 'INGENIERIA MECATRONICA', 3),
(10, 'MARINEZ', 'POZOS', 'GRECIA', 18680629, 'M', '735-102-89-71', '18680629@cuautla.tecnm.mx', 'NOVENO', 'INGENIERIA EN GESTIÓN EMPRESARIAL', 3),
(14, 'PERCIL', 'BAZAN', 'YAZMIN', 18680645, 'M', '735-205-09-71', '18680645@cuautla.tecnm.mx', 'NOVENO', 'INGENIERIA EN GESTIÓN EMPRESARIAL', 3),
(29, 'ARENAS', 'GARCIA', 'EMANUEL', 19680099, 'H', '7354380047', '19680099@cuautla.tecnm.mx', 'OCTAVO', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 3),
(24, 'URIOSTEGUI', 'CASTAÑEDA', 'MARITZA', 19680780, 'M', '735-136-91-21', '19680780@cuautla.tecnm.mx', 'SEPTIMO', 'INGENIERIA EN GESTIÓN EMPRESARIAL', 3),
(21, 'SANDOVAL', 'BRAVO', 'BRAYAN', 20680509, 'H', '735-132-09-11', '20680509@cuautla.tecnm.mx', 'TERCER', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 3),
(8, 'ESPITIA', 'GARCIA', 'CARLOS EDUARDO', 21680244, 'H', '735-175-11-44', '21680244@cuautla.tecnm.mx', 'SEPTIMO', 'INGENIERÍA INDUSTRIAL', 3),
(9, 'GAYOSSO', 'RAMIREZ', 'ANDREA KIMBERLY', 21680573, 'M', '735-276-71-29', '21680573@cuautla.tecnm.mx', 'SEPTIMO', 'CONTADOR PÚBLICO', 3),
(19, 'RODRIGUEZ', 'RAMOS', 'ALEXA DANAY', 21680610, 'M', '735-175-11-44', '21680610@cuautla.tecnm.mx', 'SEPTIMO', 'CONTADOR PÚBLICO', 3),
(22, 'SANDOVAL', 'BRAVO', 'LUIS ALBERTO', 21680697, 'H', '735-116-71-29', '21680697@cuautla.tecnm.mx', 'TERCERO', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 3),
(1, 'AGUILAR', 'BETANCOURT', 'JOSE CARLOS', 22680058, 'H', '735-176-31-21', '22680058@cuautla.tecnm.mx', 'PRIMERO', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 3),
(13, 'MONTERO', 'ROSAS', 'LUIS GERARDO', 22680218, 'H', '735-138-35-80', '22680218@cuautla.tecnm.mx', 'PRIMERO', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 3),
(23, 'SILVA', 'PEREZ', 'JAIME', 22680284, 'H', '735-135-11-18', '22680285@cuautla.tecnm.mx', 'PRIMERO', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 3),
(25, 'ZAPOTITLA', 'JIMENEZ', 'JORGE LUIS', 22680320, 'H', '', '22680320@cuautla.tecnm.mx', 'PRIMERO', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 3),
(7, 'CRUZ', 'CALEMDARIA', 'ARIADNA', 22680389, '', '735-175-11-44', '22680389@cuautla.tecnm.mx', 'PRIMERO', 'INGENIERÍA INDUSTRIAL', 3),
(17, 'PLIEGO', 'RAMIREZ', 'JESUS DIDIER', 22680505, '', '735-218-50-90', '22680505@cuautla.tecnm.mx', 'PRIMERO', 'CONTADOR PÚBLICO', 3),
(3, 'ALCANTAR', 'GARCIA', 'VIVIANA', 22680698, '', '735-132-09-71', '22680698@cuautla.tecnm.mx', 'PRIMERO', 'INGENIERÍA EN GESTIÓN EMPRESARIAL', 3),
(20, 'ROSENDO', 'HEREDIA', 'MELCHOR', 22680808, '', '735-276-71-28', '22680808@cuautla.tecnm.mx', 'PRIMERO', 'INGENIERÍA EN GESTIÓN EMPRESARIAL', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnotaller`
--

CREATE TABLE `alumnotaller` (
  `idAlumnoT` int(10) NOT NULL,
  `nombre_actividad` varchar(100) NOT NULL,
  `tipo_actividad` varchar(100) NOT NULL,
  `NumeroControl` int(10) NOT NULL,
  `correo_institucional` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `nombre_carrera` varchar(50) NOT NULL,
  `Estatus` varchar(30) NOT NULL,
  `Credito` varchar(200) NOT NULL,
  `horario` varchar(30) NOT NULL,
  `periodo` varchar(30) NOT NULL,
  `valor_numerico` double NOT NULL,
  `desempeno` varchar(12) NOT NULL,
  `P1` int(1) NOT NULL,
  `P2` int(1) NOT NULL,
  `P3` int(1) NOT NULL,
  `P4` int(1) NOT NULL,
  `P5` int(1) NOT NULL,
  `P6` int(1) NOT NULL,
  `P7` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnotaller`
--

INSERT INTO `alumnotaller` (`idAlumnoT`, `nombre_actividad`, `tipo_actividad`, `NumeroControl`, `correo_institucional`, `departamento`, `nombre_carrera`, `Estatus`, `Credito`, `horario`, `periodo`, `valor_numerico`, `desempeno`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`) VALUES
(4, 'FUTBOL SOCCER VARONIL', 'TALLER DEPORTIVO', 21680244, '21680244@cuautla.tecnm.mx', 'Departamento de Actividades Extraescolares', 'INGENIERIA INDUSTRIAL', 'ACREDITADO', '', '', 'AGOSTO - DICIEMBRE 2022', 2.71, 'BUENO', 1, 2, 2, 3, 3, 4, 4),
(42, 'Ciclo de conferencias del cambio climático.', 'EVENTO ACADÉMICO', 18680236, '18680236@cuautla.tecnm.mx', 'Departamento de Ciencias Básicas', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', '', 'ENERO - JUNIO 2023', 1.71, 'SUFICIENTE', 0, 0, 0, 0, 0, 0, 0),
(46, 'APOYO EN CENTRO DE INFORMACIÓN', 'PRODUCTIVIDAD LABORAL', 18680254, '18680254@cuautla.tecnm.mx', 'Centro de Información', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'ACREDITADO', '', '', 'ENERO - JUNIO 2023', 1.86, 'BUENO', 0, 0, 0, 0, 0, 0, 0),
(49, 'Cursos y Talleres', 'EVENTO ACADÉMICO', 18680254, '18680254@cuautla.tecnm.mx', 'Departamento de Sistemas y Computación', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'FINALIZADO', '', '', 'AGOSTO - DICIEMBRE 2022', 0, '', 0, 0, 0, 0, 0, 0, 0),
(50, 'Diplomados CONDUSEF', 'EVENTO ACADÉMICO', 21680573, '21680573@cuautla.tecnm.mx', 'Departamento de Ciencias Económico-Administrativas', 'CONTADOR PÚBLICO', 'CURSANDO', '', '', 'ENERO - JUNIO 2023', 0, '', 0, 0, 0, 0, 0, 0, 0),
(51, 'Cursos y Talleres del Colegio de Contadores', 'EVENTO ACADÉMICO', 21680610, '21680610@cuautla.tecnm.mx', 'Departamento de Ciencias Económico-Administrativas', 'CONTADOR PÚBLICO', 'CURSANDO', '', '', 'ENERO - JUNIO 2023', 0, '', 0, 0, 0, 0, 0, 0, 0),
(52, 'APOYO EN CENTRO DE INFORMACIÓN', 'PRODUCTIVIDAD LABORAL', 18680236, '18680236@cuautla.tecnm.mx', 'Centro de Información', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', '', 'ENERO - JUNIO 2022', 0, '', 0, 0, 0, 0, 0, 0, 0),
(56, 'BASQUETBOL', 'TALLER DEPORTIVO', 18680236, '18680236@cuautla.tecnm.mx', 'Departamento de Actividades Extraescolares', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', '09:00 - 10:00 Mar/Jue', 'ENERO - JUNIO 2022', 0, '', 0, 0, 0, 0, 0, 0, 0),
(57, 'Concurso de Ciencias Básicas en su etapa local.', 'EVENTO ACADÉMICO', 18680254, '18680254@cuautla.tecnm.mx', 'Departamento de Ciencias Básicas', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', 'n/a', 'PENDIENTE', 0, '', 0, 0, 0, 0, 0, 0, 0),
(58, '2. “Presentaciones efectivas”', 'EVENTO ACADÉMICO', 18680254, '18680254@cuautla.tecnm.mx', 'Departamento de Metal Mecánica', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', 'n/a', 'PENDIENTE', 0, '', 0, 0, 0, 0, 0, 0, 0),
(59, '6. “Requisitos para elaborar una línea de producción”', 'EVENTO ACADÉMICO', 18680236, '18680236@cuautla.tecnm.mx', 'Departamento de Metal Mecánica', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', 'n/a', 'PENDIENTE', 0, '', 0, 0, 0, 0, 0, 0, 0),
(60, 'BASQUETBOL', 'TALLER DEPORTIVO', 18680254, '18680254@cuautla.tecnm.mx', 'Departamento de Actividades Extraescolares', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', '09:00 - 10:00 Mar/Jue', '', 0, '', 0, 0, 0, 0, 0, 0, 0),
(61, '8. “QC Story”', 'EVENTO ACADÉMICO', 18680254, '18680254@cuautla.tecnm.mx', 'Departamento de Metal Mecánica', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', 'n/a', 'PENDIENTE', 0, '', 0, 0, 0, 0, 0, 0, 0),
(62, 'CANTO Y CORO', 'TALLER CULTURAL', 18680254, '18680254@cuautla.tecnm.mx', 'Departamento de Actividades Extraescolares', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', '10:00 - 12:00 Mar', 'ENERO - JUNIO 2023', 0, '', 0, 0, 0, 0, 0, 0, 0),
(63, 'Asesoría Académicas', 'EVENTO ACADÉMICO', 18680236, '18680236@cuautla.tecnm.mx', 'Departamento de Ciencias Básicas', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', 'n/a', 'PENDIENTE', 0, '', 0, 0, 0, 0, 0, 0, 0),
(64, 'PINTURA', 'TALLER CULTURAL', 18680254, '18680254@cuautla.tecnm.mx', 'Departamento de Actividades Extraescolares', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 'ACREDITADO', '', '11:00 - 12:00 Mar/Jue', '', 0, '', 0, 0, 0, 0, 0, 0, 0),
(65, 'Asesoría Académica', 'EVENTO ACADÉMICO', 18680236, '18680236@cuautla.tecnm.mx', 'Departamento de Sistemas y Computación', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', 'n/a', 'ENERO - JUNIO 2023', 0, '', 0, 0, 0, 0, 0, 0, 0),
(66, 'CARTONERÍA (ALEBRÍJES)', 'TALLER CULTURAL', 18680254, '18680254@cuautla.tecnm.mx', 'Departamento de Actividades Extraescolares', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 'ACREDITADO', '', '11:00 - 12:00 Lun/Mie', '', 0, '', 0, 0, 0, 0, 0, 0, 0),
(67, 'DIBUJO', 'TALLER CULTURAL', 18680254, '18680254@cuautla.tecnm.mx', 'Departamento de Actividades Extraescolares', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 'FINALIZADO', '', '13:00 - 14:00 Mar/ Jue', '', 0, '', 0, 0, 0, 0, 0, 0, 0),
(68, 'Impartición de Cursos y/o Talleres', 'EVENTO ACADÉMICO', 18680236, '18680236@cuautla.tecnm.mx', 'Departamento de Sistemas y Computación', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', 'n/a', 'AGOSTO - DICIEMBRE 2023', 3.57, 'EXCELENTE', 0, 0, 0, 0, 0, 0, 0),
(69, 'CALISTENIA', 'TALLER DEPORTIVO', 18680254, '18680254@cuautla.tecnm.mx', 'Departamento de Actividades Extraescolares', 'INGENIERIA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', '13:00 - 14:00 Mie/Jue', 'ENERO - JUNIO 2023', 0, '', 0, 0, 0, 0, 0, 0, 0),
(70, 'Emprendedurismo', 'EVENTO ACADÉMICO', 18680236, '18680236@cuautla.tecnm.mx', 'Departamento de Ciencias Económico-Administrativas', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', 'n/a', 'PENDIENTE', 0, '', 0, 0, 0, 0, 0, 0, 0),
(71, '4. “Líneas de producción”', 'EVENTO ACADÉMICO', 19680099, '19680099@cuautla.tecnm.mx', 'Departamento de Metal Mecánica', 'INGENIERÍA INDUSTRIAL', 'CURSANDO', '', 'n/a', 'PENDIENTE', 0, '', 0, 0, 0, 0, 0, 0, 0),
(72, 'Ciclo de conferencias del cambio climático.', 'EVENTO ACADÉMICO', 18680254, '18680254@cuautla.tecnm.mx', 'Departamento de Ciencias Básicas', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'CURSANDO', '', 'n/a', 'PENDIENTE', 0, '', 0, 0, 0, 0, 0, 0, 0),
(73, 'CLUB DE AJEDREZ (NO PRINCIPIANTES)', 'TALLER DEPORTIVO', 15680393, '15680393@cuautla.tecnm.mx', 'Departamento de Actividades Extraescolares', 'INGENIERÍA MECATRÓNICA', 'CURSANDO', '', '11:00 - 12:00 Lun/Mie', '', 0, '', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `idCarrera` int(10) NOT NULL,
  `ClaveCarrera` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `idDepartamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`idCarrera`, `ClaveCarrera`, `Nombre`, `idDepartamento`) VALUES
(6, 'LC', 'CONTADOR PÚBLICO', 'Departamento de Ciencias Económico-Administrativas'),
(2, 'IE', 'INGENIERÍA ELECTRONICA', 'Departamento de Electrica y Electrónica'),
(3, 'IGE', 'INGENIERÍA EN GESTIÓN EMPRESARIAL', 'Departamento de Gestión Tecnología y Vinculación'),
(1, 'ISC', 'INGENIERÍA EN SISTEMAS COMPUTACIONALES', 'Departamento de Sistemas y Computación'),
(4, 'II', 'INGENIERÍA INDUSTRIAL', 'Departamento de Metal Mecánica'),
(5, 'IM', 'INGENIERÍA MECATRÓNICA', 'Departamento de Metal Mecánica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `idDepartamento` varchar(10) NOT NULL,
  `Departamento` varchar(50) NOT NULL,
  `NombreJD` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `Departamento`, `NombreJD`, `Correo`) VALUES
('CB005', 'Departamento de Ciencias Básicas', 'Ing. Noel Morales Muñiz', 'basicas@cuautla.tecnm.mx'),
('AE006', 'Departamento de Actividades Extraescolares', 'Lic. Roberto Marcio Cuauhtle Pluma', 'c.informacion@cuautla.tecnm.mx	'),
('CI008', 'Departamento de Centro de Información', 'Lic. Norma Angélica Morales Tablas', 'ci_cuautla@tecnm.mx'),
('DA009', 'Departamento de Desarrollo Académico', 'Mtra. Elizabeth Linzaga Medina', 'desarrollo@cuautla.tecnm.mx'),
('DCE002', 'Departamento de Ciencias Económico-Administrativas', 'Mtro. Omar Oswaldo Torres Fernández', 'economico@cuautla.tecnm.mx'),
('EE003', 'Departamento de Electrica y Electrónica', 'Mtra. Marlem Flores Montiel', 'electronica@cuautla.tecnm.mx'),
('SE010', 'Departamento de Servicios Escolares', 'M. C. Moisés Román Sedeño', 'escolares@cuautla.tecnm.mx'),
('GTV007', 'Departamento de Gestión Tecnología y Vinculación', 'M.F.G. Areli Soledad Ruíz Martínez', 'gestion@cuautla.tecnm.mx'),
('MM004', 'Departamento de Metal Mecánica', 'Ing. María del Rubí Hernández Andrade', 'metal@cuautla.tecnm.mx'),
('SC001', 'Departamento de Sistemas y Computación', 'Mtro. Víctor Manuel Ayala Lara', 'sistemas@cuautla.tecnm.mx');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `intentos` int(10) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `idpermiso` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`idpermiso`, `nombre`) VALUES
(1, 'Home'),
(2, 'Información_Escolar'),
(3, 'Informacion'),
(4, 'control_acceso'),
(5, 'Act Complementarias'),
(6, 'ActividadesDisponibles'),
(7, 'Departamentos'),
(8, 'Reporte'),
(9, 'Creditos'),
(10, 'Disponibilidad'),
(11, 'Historial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_rol`
--

CREATE TABLE `permisos_rol` (
  `id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `permisos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos_rol`
--

INSERT INTO `permisos_rol` (`id`, `rol_id`, `permisos_id`) VALUES
(1, 1, 1),
(2, 3, 1),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 7),
(7, 1, 8),
(8, 1, 9),
(9, 1, 10),
(10, 3, 2),
(11, 3, 3),
(12, 3, 7),
(14, 1, 11),
(15, 3, 11),
(20, 2, 3),
(21, 2, 11),
(22, 2, 5),
(23, 2, 7),
(24, 2, 9),
(25, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(10) NOT NULL,
  `Rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `tipo_actividad` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Grupo` int(10) NOT NULL,
  `Turno` varchar(50) NOT NULL,
  `horario` varchar(30) NOT NULL,
  `Condicion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`idTaller`, `tipo_actividad`, `Nombre`, `Tipo`, `Grupo`, `Turno`, `horario`, `Condicion`) VALUES
(1, 'ACTIVIDAD EXTRAESCOLAR', 'CLUB DE AJEDREZ (NO PRINCIPIANTES)', 'TALLER DEPORTIVO', 1, 'MATUTINO', '11:00 - 12:00 Lun/Mie', 0),
(2, 'ACTIVIDAD EXTRAESCOLAR', 'CLUB DE AJEDREZ (NO PRINCIPIANTES)', 'TALLER DEPORTIVO', 1, 'VESPERTINO', '11:00 - 12:00 Lun/Mie', 1),
(3, 'ACTIVIDAD EXTRAESCOLAR', 'BASQUETBOL', 'TALLER DEPORTIVO', 1, 'MATUTINO', '09:00 - 10:00 Mar/Jue', 1),
(4, 'ACTIVIDAD EXTRAESCOLAR', 'ELABORACIÓN Y RESTAURACIÓN DE UTILERÍA', 'TALLER CULTURAL', 1, 'VESPERTINO', '15:00 - 16:00 Vie', 1),
(5, 'ACTIVIDAD EXTRAESCOLAR', 'VOLEIBOL', 'TALLER DEPORTIVO', 1, 'MATUTINO', '08:00 - 10:00 Lun/Mie', 1),
(6, 'ACTIVIDAD EXTRAESCOLAR', 'VOLEIBOL', 'TALLER DEPORTIVO', 1, 'VESPERTINO', '14:00 - 16:00 Lun/Mie', 1),
(7, 'ACTIVIDAD EXTRAESCOLAR', 'BANDA DE GUERRA', 'TALLER CIVICO', 1, 'MATUTINO', '10:00 - 12:00 Lun', 1),
(9, 'ACTIVIDAD EXTRAESCOLAR', 'CANTO Y CORO', 'TALLER CULTURAL', 1, 'MATUTINO', '10:00 - 12:00 Mar', 1),
(10, 'ACTIVIDAD EXTRAESCOLAR', 'CANTO Y CORO', 'TALLER CULTURAL', 1, 'VESPERTINO', '13:00 - 14:00 Mié/jue', 1),
(11, 'ACTIVIDAD EXTRAESCOLAR', 'PINTURA', 'TALLER CULTURAL', 1, 'MATUTINO', '10:00 - 11:00 Lun/Mie', 1),
(12, 'ACTIVIDAD EXTRAESCOLAR', 'DIBUJO', 'TALLER CULTURAL', 1, 'MATUTINO', '11:00 - 12:00 Mar/Jue', 1),
(13, 'ACTIVIDAD EXTRAESCOLAR', 'FUTBOL SOCCER VARONIL', 'TALLER DEPORTIVO', 1, 'MATUTINO', '11:00 - 12:00 Mar/ Jue', 1),
(14, 'ACTIVIDAD EXTRAESCOLAR', 'FUTBOL SOCCER FEMENIL', 'TALLER DEPORTIVO', 1, 'MATUTINO', '10:00 - 11:00 Mar/ Jue', 1),
(15, 'ACTIVIDAD EXTRAESCOLAR', 'FUTBOL SOCCER VARONIL', 'TALLER DEPORTIVO', 2, 'MATUTINO', '09:00 - 10:00 Mar/ Jue', 1),
(16, 'ACTIVIDAD EXTRAESCOLAR', 'DIBUJO AVANZADO (NO PRINCIPIANTES)', 'TALLER CULTURAL', 2, 'MATUTINO', '11:00 - 12:00 Vie', 1),
(17, 'ACTIVIDAD EXTRAESCOLAR', 'PINTURA', 'TALLER CULTURAL', 2, 'MATUTINO', '11:00 - 12:00 Mar/Jue', 1),
(18, 'ACTIVIDAD EXTRAESCOLAR', 'CARTONERÍA (ALEBRIJES)', 'TALLER CULTURAL', 1, 'MATUTINO', '09:00 - 10:00 Lun/Mie', 1),
(19, 'ACTIVIDAD EXTRAESCOLAR', 'CARTONERÍA (ALEBRÍJES)', 'TALLER CULTURAL', 2, 'MATUTINO', '11:00 - 12:00 Lun/Mie', 1),
(20, 'ACTIVIDAD EXTRAESCOLAR', 'ELABORACIÓN Y RESTAURACIÓN DE UTILERÍA', 'TALLER CULTURAL', 1, 'MATUTINO', '09:00 - 11:00 Vie', 1),
(21, 'ACTIVIDAD EXTRAESCOLAR', 'INSTRUMENTOS VARIOS', 'TALLER CULTURAL', 1, 'MATUTINO', '10:00 - 12:00 Jue', 1),
(22, 'ACTIVIDAD EXTRAESCOLAR', 'ESCOLTA', 'TALLER CÍVICO', 1, 'MATUTINO', '10:00 - 12:00 Mie', 1),
(23, 'ACTIVIDAD EXTRAESCOLAR', 'BANDA GUERRA', 'TALLER CÍVICO', 1, 'MATUTINO', '10:00 - 12:00 Lun', 1),
(24, 'ACTIVIDAD EXTRAESCOLAR', 'CLUB DE AJEDREZ (NO PRINCIPIANTES)', 'TALLER DEPORTIVO', 2, 'VESPERTINO', '13:00 - 14:00 Lun/Vie', 1),
(25, 'ACTIVIDAD EXTRAESCOLAR', 'FUTBOL SOCCER FEMENIL', 'TALLER DEPORTIVO', 1, 'VESPERTINO', '13:00 - 14:00 Mar/ Jue', 1),
(26, 'ACTIVIDAD EXTRAESCOLAR', 'FUTBOL SOCCER VARONIL', 'TALLER DEPORTIVO', 1, 'VESPERTINO', '14:00 - 15:00 Mar/Jue', 1),
(27, 'ACTIVIDAD EXTRAESCOLAR', 'CALISTENIA', 'TALLER DEPORTIVO', 1, 'VESPERTINO', '13:00 - 14:00 Mie/Jue', 1),
(28, 'ACTIVIDAD EXTRAESCOLAR', 'DIBUJO', 'TALLER CULTURAL', 1, 'VESPERTINO', '13:00 - 14:00 Mar/ Jue', 1),
(29, 'ACTIVIDAD EXTRAESCOLAR', 'DIBUJO', 'TALLER CULTURAL', 2, 'VESPERTINO', '14:00 - 15:00 Mar/Jue', 1),
(30, 'ACTIVIDAD EXTRAESCOLAR', 'DIBUJO AVANZADO ( NO PRINCIPIANTES)', 'TALLER CULTURAL', 3, 'VESPERTINO', ' 13:00 - 15:00 Vie', 0),
(31, 'ACTIVIDAD EXTRAESCOLAR', 'PINTURA', 'TALLER CULTURAL', 1, 'VESPERTINO', '14:00 - 15:00 Lun/Mie', 1),
(32, 'ACTIVIDAD EXTRAESCOLAR', 'PINTURA', 'TALLER CULTURAL', 2, 'VESPERTINO', '15:00 - 16:00 Lun/Mie', 1),
(33, 'ACTIVIDAD EXTRAESCOLAR', 'CARTONERÍA (ALEBRIJES)', 'TALLER CULTURAL', 1, 'VESPERTINO', '13:00 - 14:00 Lun/Mie', 1),
(34, 'ACTIVIDAD EXTRAESCOLAR', 'CARTONERÍA (ALEBRIJES)', 'TALLER CULTURAL', 2, 'VESPERTINO', '15:00 - 16:00 Mar/Jue', 1),
(35, 'ACTIVIDAD EXTRAESCOLAR', 'INSTRUMENTOS VARIOS', 'TALLER CULTURAL', 1, 'VESPERTINO', '14:00 - 16:00 Jue', 1),
(36, 'ACTIVIDAD EXTRAESCOLAR', 'ESCOLTA', 'TALLER CÍVICO', 1, 'VESPERTINO', '14:00 - 16:00 Mie', 1),
(37, 'ACTIVIDAD EXTRAESCOLAR', 'BANDA DE GUERRA', 'TALLER CÍVICO', 1, 'VESPERTINO', '13:00 - 15:00 Lun', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `idRol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(22, '21680697@cuautla.tecnm.mx', 'Sistemas2022', 3),
(23, '22680058@cuautla.tecnm.mx', 'Sistemas2022', 3),
(24, '22680218@cuautla.tecnm.mx', 'Sistemas2022', 3),
(25, '22680285@cuautla.tecnm.mx', 'Sistemas2022', 3),
(26, '22680320@cuautla.tecnm.mx', 'Sistemas2022', 3),
(27, '22680389@cuautla.tecnm.mx', 'Industrial2022', 3),
(28, '22680505@cuautla.tecnm.mx', 'Industrial2022', 3),
(29, '22680698@cuautla.tecnm.mx', 'Gestion2022', 3),
(30, '22680808@cuautla.tecnm.mx', 'Gestion2022', 3),
(31, 'admin@cuautla.tecnm.mx', 'admin', 1),
(32, '18680236@cuautla.tecnm.mx', 'Sistemas2022', 3),
(33, '18680254@cuautla.tecnm.mx', 'Sistemas2022', 3),
(34, '18680071@cuautla.tecnm.mx', 'n3pq8PDO', 3),
(35, '19680099@cuautla.tecnm.mx', '6u8CE4La', 3),
(36, '18680077@cuautla.tecnm.mx', 'Sistemas2023\r', 3);

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
  ADD KEY `NumeroControl` (`NumeroControl`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`Nombre`),
  ADD UNIQUE KEY `idCarrera` (`idCarrera`),
  ADD KEY `departamento-iddepartamento-carreras` (`idDepartamento`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Correo`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
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
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`idpermiso`);

--
-- Indices de la tabla `permisos_rol`
--
ALTER TABLE `permisos_rol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`rol_id`),
  ADD KEY `permisos_id` (`permisos_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `talleres`
--
ALTER TABLE `talleres`
  ADD UNIQUE KEY `idTaller` (`idTaller`),
  ADD KEY `tipo_actividad` (`tipo_actividad`,`Nombre`,`Tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idAlumno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `alumnotaller`
--
ALTER TABLE `alumnotaller`
  MODIFY `idAlumnoT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

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
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `permisos_rol`
--
ALTER TABLE `permisos_rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `talleres`
--
ALTER TABLE `talleres`
  MODIFY `idTaller` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`);

--
-- Filtros para la tabla `alumnotaller`
--
ALTER TABLE `alumnotaller`
  ADD CONSTRAINT `alumnotaller_ibfk_2` FOREIGN KEY (`NumeroControl`) REFERENCES `alumnos` (`NumeroControl`);

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
-- Filtros para la tabla `permisos_rol`
--
ALTER TABLE `permisos_rol`
  ADD CONSTRAINT `id_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permisos_id` FOREIGN KEY (`permisos_id`) REFERENCES `permiso` (`idpermiso`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
