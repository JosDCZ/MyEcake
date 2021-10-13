-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2021 a las 02:27:22
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecakebd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idcarrito` int(11) NOT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `idpresentacion` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `idtelefono` int(11) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `correo` varchar(100) DEFAULT '',
  `contraseña` varchar(50) DEFAULT NULL,
  `iddireccion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `iddetallepedido` int(11) NOT NULL,
  `idpedido` int(11) DEFAULT NULL,
  `idpresentacion` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleproducto`
--

CREATE TABLE `detalleproducto` (
  `iddetalleproducto` int(11) NOT NULL,
  `fechafabricacion` date DEFAULT NULL,
  `diasvidautil` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `iddireccion` int(11) NOT NULL,
  `nombrerecibe` varchar(200) DEFAULT NULL,
  `direccionentrega` varchar(350) DEFAULT NULL,
  `referenciadireccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `idmunicipio` int(11) DEFAULT NULL,
  `idcliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idempleado` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `apellido` varchar(60) DEFAULT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `contraseña` varchar(60) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `administrador` tinyint(4) DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `horario` varchar(200) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `idmunicipio` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `costoenvio` float DEFAULT NULL,
  `iddepartamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Idpedido` int(11) NOT NULL,
  `iddireccion` int(11) DEFAULT NULL,
  `fecharealizacion` date DEFAULT NULL,
  `fechaentrega` date DEFAULT NULL,
  `idformadepago` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `idempleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `idpresentacion` int(11) NOT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `Tamanio` varchar(100) DEFAULT '',
  `Precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `tiempoprocesamiento` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `idimagen` int(11) DEFAULT NULL,
  `idrelleno` int(11) DEFAULT NULL,
  `idremojo` int(11) DEFAULT NULL,
  `idsabortorta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relleno`
--

CREATE TABLE `relleno` (
  `idrelleno` int(11) NOT NULL,
  `saborrelleno` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remojo`
--

CREATE TABLE `remojo` (
  `idremojo` int(11) NOT NULL,
  `saborremojo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sabortorta`
--

CREATE TABLE `sabortorta` (
  `idsabortorta` int(11) NOT NULL,
  `sabortorta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idcarrito`),
  ADD KEY `fk_idpresentacion` (`idpresentacion`),
  ADD KEY `fk_idcliente` (`idcliente`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`iddetallepedido`),
  ADD KEY `idpedido` (`idpedido`);

--
-- Indices de la tabla `detalleproducto`
--
ALTER TABLE `detalleproducto`
  ADD PRIMARY KEY (`iddetalleproducto`),
  ADD KEY `fk_idproductod` (`idproducto`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`iddireccion`),
  ADD KEY `fk_idmunicipio` (`idmunicipio`),
  ADD KEY `fk_idcliented` (`idcliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idempleado`),
  ADD KEY `fk_idempresa` (`idempresa`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`idmunicipio`),
  ADD KEY `fk_iddepartamento` (`iddepartamento`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Idpedido`),
  ADD KEY `fk_direccion` (`iddireccion`),
  ADD KEY `fk_idempleado` (`idempleado`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`idpresentacion`),
  ADD KEY `fk_idproducto` (`idproducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `fk_relleno` (`idrelleno`),
  ADD KEY `fk_remojo` (`idremojo`),
  ADD KEY `fk_sabortorta` (`idsabortorta`);

--
-- Indices de la tabla `relleno`
--
ALTER TABLE `relleno`
  ADD PRIMARY KEY (`idrelleno`);

--
-- Indices de la tabla `remojo`
--
ALTER TABLE `remojo`
  ADD PRIMARY KEY (`idremojo`),
  ADD KEY `saborremojo` (`saborremojo`);

--
-- Indices de la tabla `sabortorta`
--
ALTER TABLE `sabortorta`
  ADD PRIMARY KEY (`idsabortorta`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `fk_idcliente` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`),
  ADD CONSTRAINT `fk_idpresentacion` FOREIGN KEY (`idpresentacion`) REFERENCES `presentacion` (`idpresentacion`);

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `fk_idpedido` FOREIGN KEY (`idpedido`) REFERENCES `pedido` (`Idpedido`);

--
-- Filtros para la tabla `detalleproducto`
--
ALTER TABLE `detalleproducto`
  ADD CONSTRAINT `fk_idproductod` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `fk_idcliented` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`),
  ADD CONSTRAINT `fk_idmunicipio` FOREIGN KEY (`idmunicipio`) REFERENCES `municipio` (`idmunicipio`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_idempresa` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`idempresa`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `fk_iddepartamento` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`iddepartamento`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_direccion` FOREIGN KEY (`iddireccion`) REFERENCES `direccion` (`iddireccion`),
  ADD CONSTRAINT `fk_idempleado` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`);

--
-- Filtros para la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD CONSTRAINT `fk_idproducto` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_relleno` FOREIGN KEY (`idrelleno`) REFERENCES `relleno` (`idrelleno`),
  ADD CONSTRAINT `fk_remojo` FOREIGN KEY (`idremojo`) REFERENCES `remojo` (`idremojo`),
  ADD CONSTRAINT `fk_sabortorta` FOREIGN KEY (`idsabortorta`) REFERENCES `sabortorta` (`idsabortorta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
