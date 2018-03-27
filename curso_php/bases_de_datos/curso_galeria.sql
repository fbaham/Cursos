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


-- Volcando estructura de base de datos para curso_galeria
CREATE DATABASE IF NOT EXISTS `curso_galeria` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `curso_galeria`;

-- Volcando estructura para tabla curso_galeria.fotos
CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla curso_galeria.fotos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT INTO `fotos` (`id`, `titulo`, `imagen`, `texto`) VALUES
	(1, 'Primera', 'arch1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(2, 'Segunda', 'arch2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(3, 'Tercera', 'arch3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(4, 'Cuarta', 'arch4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(5, 'Quinta', 'arch5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(6, 'Sexta', 'arch6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(7, 'Septima', 'arch7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(8, 'Octava', 'grayscale1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(9, 'Novena', 'grayscale2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(10, 'Decima', 'nature1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(11, 'Decimoprimera', 'nature2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(12, 'Decimosegunda', 'nature3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(13, 'Decimotercera', 'nature4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(14, 'Decimocuarta', 'sepia1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(15, 'Decimoquinta', 'sepia2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(16, 'Decimosexta', 'sepia3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(17, 'Decimoseptima', 'sepia4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.'),
	(18, 'Decimoctava', 'tech1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque orci at mi fringilla ullamcorper. Morbi lobortis molestie facilisis. Mauris vitae faucibus nibh. Morbi a tortor lectus. Aenean congue enim vulputate, dictum quam a, auctor leo. Quisque non arcu efficitur, placerat sapien eu, aliquet quam.');
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
