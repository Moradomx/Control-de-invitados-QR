-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.25 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bd_evento
CREATE DATABASE IF NOT EXISTS `bd_evento` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bd_evento`;

-- Volcando estructura para tabla bd_evento.tb_invitados
CREATE TABLE IF NOT EXISTS `tb_invitados` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID AUTOMATICO',
  `telefono` varchar(10) NOT NULL COMMENT 'TELEFONO DEL INVITADO',
  `nombre` text NOT NULL COMMENT 'NOMBRE DEL INVITADO',
  `email` text COMMENT 'CORREO AL CUAL SE ENVIARA LA IMAGEN QR',
  `pregunta` text COMMENT 'RESPUESTA DE COMO O DONDE ME CONOCISTE',
  `personas` int(11) DEFAULT NULL COMMENT 'NUMERO DE PERSONAS QUE PUEDEN LLEVAR',
  `asistieron` int(11) DEFAULT NULL,
  `hora_llegada` time DEFAULT NULL COMMENT 'HORA A LA LLEGO AL EVENTO',
  `asistio` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'SI ES VERDADERO SIGNIFICA QUE SI LLEGO A LA FIESTA',
  `registro` tinyint(4) NOT NULL DEFAULT '0',
  `mostrar` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'SI ES VERDADERO SE MOSTRARA EN EL SLIDER LA RESPUESTA A LA PERGUNTA',
  PRIMARY KEY (`id`,`telefono`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bd_evento.tb_invitados: ~2 rows (aproximadamente)
DELETE FROM `tb_invitados`;
/*!40000 ALTER TABLE `tb_invitados` DISABLE KEYS */;
INSERT INTO `tb_invitados` (`id`, `telefono`, `nombre`, `email`, `pregunta`, `personas`, `asistieron`, `hora_llegada`, `asistio`, `registro`, `mostrar`) VALUES
	(1, '325325', 'YHOSYMAR MARTINEZ MARCIAL', 'moradomx@gmail.com', 'cafe', 3, 0, '23:33:59', 0, 0, 0),
	(3, '21212', 'YHOSYMAR MARTINEZ MARCIAL', 'svsvd', 'autobus', 7, 0, '23:32:11', 0, 0, 0);
/*!40000 ALTER TABLE `tb_invitados` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
