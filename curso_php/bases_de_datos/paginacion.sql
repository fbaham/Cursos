-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.30-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para paginacion
CREATE DATABASE IF NOT EXISTS `paginacion` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `paginacion`;

-- Volcando estructura para tabla paginacion.articulos
CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articulo` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla paginacion.articulos: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` (`id`, `articulo`) VALUES
	(null, 'Lorem ipsum dolor sit amet'),
	(null, 'consectetur adipisicing elit'),
	(null, 'Ut, voluptate pariatur.'),
	(null, 'Nemo aliquid asperiores'),
	(null, 'perferendis ab voluptates soluta'),
	(null, 'quas magnam suscipit'),
	(null, 'earum vitae id dolor beatae '),
	(null, 'nisi totam, eligendi neque.'),
	(null, 'Lorem ipsum dolor sit amet'),
	(null, 'consectetur adipisicing elit'),
	(null, 'Ut, voluptate pariatur.'),
	(null, 'Nemo aliquid asperiores'),
	(null, 'perferendis ab voluptates soluta'),
	(null, 'quas magnam suscipit '),
	(null, 'earum vitae id dolor beatae '),
	(null, 'nisi totam, eligendi neque.'),
	(null, 'Lorem ipsum dolor sit amet'),
	(null, 'consectetur adipisicing elit'),
	(null, 'Ut, voluptate pariatur.'),
	(null, 'Nemo aliquid asperiores'),
	(null, 'perferendis ab voluptates soluta'),
	(null, 'quas magnam suscipit '),
	(null, 'earum vitae id dolor beatae '),
	(null, 'nisi totam, eligendi neque.');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
