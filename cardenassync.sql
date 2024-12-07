-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2024 at 03:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cardenassync`
--

-- --------------------------------------------------------

--
-- Table structure for table `barco`
--

CREATE TABLE `barco` (
  `id_barco` int(11) NOT NULL,
  `nombre_barco` varchar(30) DEFAULT NULL,
  `tipo_barco` varchar(20) DEFAULT NULL,
  `nacionalidad_barco` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barco`
--

INSERT INTO `barco` (`id_barco`, `nombre_barco`, `tipo_barco`, `nacionalidad_barco`) VALUES
(12, 'Barco Sync', 'Quimiquero', 'JapÃ³n'),
(15, 'La nina', 'Petrolero', 'MÃ©xico'),
(16, 'La pinta', 'Granelero', 'Brazil'),
(17, 'El sunny', 'Gasero', 'Rusia'),
(18, 'Galeon', 'Portacontenedores', 'Argentina'),
(19, 'Elizabeth II', 'Portacontenedores', 'MÃ©xico'),
(20, 'mk1', 'Petrolero', 'Islas Marshall');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(20) DEFAULT NULL,
  `apellido_cliente` varchar(30) DEFAULT NULL,
  `fecha_nacimiento_cliente` date DEFAULT NULL,
  `correo_cliente` varchar(60) DEFAULT NULL,
  `contrasena_cliente` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `apellido_cliente`, `fecha_nacimiento_cliente`, `correo_cliente`, `contrasena_cliente`) VALUES
(9, 'Lenin Yael', 'Gomez Vega', '2007-10-25', 'lenin346yael@gmail.com', '123'),
(11, 'Abraham', 'Garcia', '2007-06-29', 'lenin346yael@gmail.com', '123'),
(12, 'Ivan', 'Jimenez Perez', '2001-08-29', 'abcdefg@gail.com', '12345'),
(13, 'Juan Carlos', 'Diaz Alvarado', '1998-02-11', 'jcdaaa@gmail.com', '09878'),
(14, 'Leonardo', 'Bucio Luna', '1987-12-12', 'leonardobucioluna@gmail.com', 'leo123'),
(15, 'Nadia Itzel', 'Cardenas', '1980-02-19', 'correo@gmail.com', '123456'),
(16, 'ANDREA YAMILETH', 'CARRILLO BOLAÃ‘OS', '2024-12-11', 'ejemplo@gmail.com', '123'),
(17, 'Maria Elizabeth', 'Gonzalez', '2024-12-11', 'ely@gmail.com', 'ely123');

-- --------------------------------------------------------

--
-- Table structure for table `contenedor`
--

CREATE TABLE `contenedor` (
  `id_contenedor` int(11) NOT NULL,
  `tipo_contenedor` varchar(20) DEFAULT NULL,
  `tamano_contenedor` varchar(20) DEFAULT NULL,
  `capacidad_contenedor` varchar(10) DEFAULT NULL,
  `id_viaje` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contenedor`
--

INSERT INTO `contenedor` (`id_contenedor`, `tipo_contenedor`, `tamano_contenedor`, `capacidad_contenedor`, `id_viaje`) VALUES
(13, 'Seco', '10ft', '10', 15),
(14, 'Seco', '10ft', '23', 15),
(15, 'Seco', '10ft', '1', 15),
(16, 'Seco', '10ft', '10', 15),
(17, 'Seco', '10ft', '10', 15),
(18, 'Aislante', '10ft', '20', 15),
(19, 'Lado abierto', '40ft', '35', 15),
(20, 'Carga a granel', '20ft', '25', 15),
(21, 'Carga no paletizada', '40ft', '50', 15),
(22, 'Tanque', '10ft', '20', 18),
(23, 'Tanque', '10ft', '15', 15),
(24, 'Plataforma', '40ft', '32', 15);

-- --------------------------------------------------------

--
-- Table structure for table `contenedor_cliente`
--

CREATE TABLE `contenedor_cliente` (
  `id_cc` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_contenedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contenedor_cliente`
--

INSERT INTO `contenedor_cliente` (`id_cc`, `id_cliente`, `id_contenedor`) VALUES
(4, NULL, 13),
(3, NULL, 14),
(8, 9, 15),
(11, 9, 16),
(10, 9, 18),
(32, 9, 20),
(17, 11, 13),
(15, 11, 14),
(14, 11, 16),
(16, 11, 17),
(13, 11, 18),
(21, 12, 13),
(23, 12, 14),
(24, 12, 18),
(25, 13, 15),
(29, 13, 17),
(26, 13, 18),
(34, 13, 20),
(27, 14, 14),
(28, 14, 16),
(33, 15, 19),
(30, 15, 23);

-- --------------------------------------------------------

--
-- Table structure for table `muelle`
--

CREATE TABLE `muelle` (
  `id_muelle` int(11) NOT NULL,
  `nombre_muelle` varchar(30) DEFAULT NULL,
  `ubicacion_muelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muelle`
--

INSERT INTO `muelle` (`id_muelle`, `nombre_muelle`, `ubicacion_muelle`) VALUES
(6, 'Santa Maria Cruz', 'Sector 2'),
(7, 'Loredo', 'Sector 1'),
(9, 'San Blas', 'Sector 2'),
(10, 'Canario', 'Sector 3'),
(11, 'San Lucas', 'Sector 1'),
(12, 'San Blas', 'Sector 1'),
(13, 'San Loredo', 'Sector 2');

-- --------------------------------------------------------

--
-- Table structure for table `trabajador`
--

CREATE TABLE `trabajador` (
  `id_trabajador` int(11) NOT NULL,
  `nombre_trabajador` varchar(20) DEFAULT NULL,
  `apellido_trabajador` varchar(30) DEFAULT NULL,
  `puesto_trabajador` varchar(30) DEFAULT NULL,
  `fecha_nacimiento_trabajador` date DEFAULT NULL,
  `telefono_trabajador` varchar(14) DEFAULT NULL,
  `correo_trabajador` varchar(60) DEFAULT NULL,
  `contrasena_trabajador` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trabajador`
--

INSERT INTO `trabajador` (`id_trabajador`, `nombre_trabajador`, `apellido_trabajador`, `puesto_trabajador`, `fecha_nacimiento_trabajador`, `telefono_trabajador`, `correo_trabajador`, `contrasena_trabajador`) VALUES
(12, 'Juan', 'Perez Lopez', 'Capitan', '1999-10-12', '1122334455', 'juan@gmail.com', 'changeme'),
(13, 'Marco', 'Solis Perez', 'Capitan', '2000-09-06', '5566774488', 'Marco@gmail.com', 'changeme'),
(14, 'Lucas', 'Lopez Mateos', 'Contramaestre', '1991-09-06', '2233445566', 'lucas22@gmail.com', '123'),
(15, 'Andres', 'Garza Cruz', 'Inspector de carga', '1998-08-06', '4499220011', 'Andres34@gmail.com', 'changeme'),
(16, 'Carlos', 'Albarado Soto', 'Supervisor de logistica', '1998-07-06', '7466339922', 'Carlos678@gmail.com', 'changeme'),
(17, 'Lenin', 'Yael', 'Contramaestre', '2024-12-25', '4433903868', 'ferg@gmail.com', 'changeme');

-- --------------------------------------------------------

--
-- Table structure for table `viaje`
--

CREATE TABLE `viaje` (
  `id_viaje` int(11) NOT NULL,
  `fecha_inicio_viaje` date DEFAULT NULL,
  `fecha_fin_viaje` date DEFAULT NULL,
  `hora_inicio_viaje` time(6) DEFAULT NULL,
  `hora_fin_viaje` time(6) DEFAULT NULL,
  `origen_viaje` varchar(30) DEFAULT NULL,
  `estado_viaje` varchar(20) DEFAULT NULL,
  `tiempo_estimado_viaje` varchar(10) DEFAULT NULL,
  `id_barco` int(11) DEFAULT NULL,
  `id_muelle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `viaje`
--

INSERT INTO `viaje` (`id_viaje`, `fecha_inicio_viaje`, `fecha_fin_viaje`, `hora_inicio_viaje`, `hora_fin_viaje`, `origen_viaje`, `estado_viaje`, `tiempo_estimado_viaje`, `id_barco`, `id_muelle`) VALUES
(15, '2024-12-03', '2024-12-20', '23:01:00.000000', '19:58:00.000000', 'China', 'Finalizado', '54', 12, 6),
(18, '2024-12-10', NULL, '19:46:00.000000', NULL, 'China', 'En proceso', '2', 15, 9),
(19, '2023-11-23', NULL, '10:00:00.000000', NULL, 'Brazil', 'En proceso', '22', 15, 10),
(20, '2024-12-01', NULL, '08:00:00.000000', NULL, 'Ecuador', 'En espera', '10', 12, 6),
(21, '2024-02-29', '2024-04-25', '05:30:00.000000', '17:30:00.000000', 'Argentina', 'Finalizado', NULL, 17, 6),
(22, '2024-12-05', NULL, '14:00:00.000000', NULL, 'Mexico', 'En espera', '5', 18, 11),
(23, '2024-12-10', NULL, '19:56:00.000000', NULL, 'China', NULL, '5', 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `viaje_trabajador`
--

CREATE TABLE `viaje_trabajador` (
  `id_vt` int(11) NOT NULL,
  `id_viaje` int(11) DEFAULT NULL,
  `id_trabajador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `viaje_trabajador`
--

INSERT INTO `viaje_trabajador` (`id_vt`, `id_viaje`, `id_trabajador`) VALUES
(2, 15, NULL),
(5, 15, 13),
(10, 18, 15),
(8, 19, 16),
(13, 20, 12),
(11, 20, 14),
(12, 21, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barco`
--
ALTER TABLE `barco`
  ADD PRIMARY KEY (`id_barco`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `contenedor`
--
ALTER TABLE `contenedor`
  ADD PRIMARY KEY (`id_contenedor`),
  ADD KEY `id_viaje` (`id_viaje`);

--
-- Indexes for table `contenedor_cliente`
--
ALTER TABLE `contenedor_cliente`
  ADD PRIMARY KEY (`id_cc`),
  ADD KEY `id_cliente` (`id_cliente`,`id_contenedor`),
  ADD KEY `id_contenedor` (`id_contenedor`);

--
-- Indexes for table `muelle`
--
ALTER TABLE `muelle`
  ADD PRIMARY KEY (`id_muelle`);

--
-- Indexes for table `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id_trabajador`);

--
-- Indexes for table `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`id_viaje`),
  ADD KEY `id_barco` (`id_barco`,`id_muelle`),
  ADD KEY `id_muelle` (`id_muelle`);

--
-- Indexes for table `viaje_trabajador`
--
ALTER TABLE `viaje_trabajador`
  ADD PRIMARY KEY (`id_vt`),
  ADD KEY `id_viaje` (`id_viaje`,`id_trabajador`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barco`
--
ALTER TABLE `barco`
  MODIFY `id_barco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contenedor`
--
ALTER TABLE `contenedor`
  MODIFY `id_contenedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contenedor_cliente`
--
ALTER TABLE `contenedor_cliente`
  MODIFY `id_cc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `muelle`
--
ALTER TABLE `muelle`
  MODIFY `id_muelle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `viaje`
--
ALTER TABLE `viaje`
  MODIFY `id_viaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `viaje_trabajador`
--
ALTER TABLE `viaje_trabajador`
  MODIFY `id_vt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contenedor`
--
ALTER TABLE `contenedor`
  ADD CONSTRAINT `contenedor_ibfk_1` FOREIGN KEY (`id_viaje`) REFERENCES `viaje` (`id_viaje`) ON DELETE SET NULL;

--
-- Constraints for table `contenedor_cliente`
--
ALTER TABLE `contenedor_cliente`
  ADD CONSTRAINT `contenedor_cliente_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE SET NULL,
  ADD CONSTRAINT `contenedor_cliente_ibfk_2` FOREIGN KEY (`id_contenedor`) REFERENCES `contenedor` (`id_contenedor`) ON DELETE SET NULL;

--
-- Constraints for table `viaje`
--
ALTER TABLE `viaje`
  ADD CONSTRAINT `viaje_ibfk_1` FOREIGN KEY (`id_barco`) REFERENCES `barco` (`id_barco`) ON DELETE SET NULL,
  ADD CONSTRAINT `viaje_ibfk_2` FOREIGN KEY (`id_muelle`) REFERENCES `muelle` (`id_muelle`) ON DELETE SET NULL;

--
-- Constraints for table `viaje_trabajador`
--
ALTER TABLE `viaje_trabajador`
  ADD CONSTRAINT `viaje_trabajador_ibfk_2` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id_trabajador`) ON DELETE SET NULL,
  ADD CONSTRAINT `viaje_trabajador_ibfk_3` FOREIGN KEY (`id_viaje`) REFERENCES `viaje` (`id_viaje`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
