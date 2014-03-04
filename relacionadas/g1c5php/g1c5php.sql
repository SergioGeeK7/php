-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2013 at 01:16 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `g1c5php`
--

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`id`, `nombre`) VALUES
(1, 'gerente'),
(2, 'ventas'),
(3, 'secretaria'),
(4, 'supervisor'),
(5, 'Administrador'),
(6, 'Jefe Empresarial'),
(7, 'Lider');

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `correo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `correo`) VALUES
(7, 'mario rincon', 'jorgemariorincon@hotmail.com'),
(8, 'juan', 'juandfsdaf'),
(9, 'laura', 'lau@dfds.com'),
(10, 'laura', 'lau@dfds.com');

-- --------------------------------------------------------

--
-- Table structure for table `nomina`
--

CREATE TABLE IF NOT EXISTS `nomina` (
  `idempleado` int(3) NOT NULL,
  `idcargo` int(2) NOT NULL,
  `sueldo` double NOT NULL,
  KEY `idempleado` (`idempleado`),
  KEY `idcargo` (`idcargo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nomina`
--

INSERT INTO `nomina` (`idempleado`, `idcargo`, `sueldo`) VALUES
(7, 1, 4354354),
(8, 1, 324324),
(9, 3, 343243243),
(10, 3, 343243243);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nomina`
--
ALTER TABLE `nomina`
  ADD CONSTRAINT `nomina_ibfk_2` FOREIGN KEY (`idcargo`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nomina_ibfk_1` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
