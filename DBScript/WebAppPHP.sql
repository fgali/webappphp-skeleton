-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: webappphp
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuarios` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nombre` varchar(45) DEFAULT NULL,
  `usu_apellidoPaterno` varchar(45) DEFAULT NULL,
  `usu_apellidoMaterno` varchar(45) DEFAULT NULL,
  `usu_celular` varchar(45) DEFAULT NULL,
  `usu_telefono` varchar(45) DEFAULT NULL,
  `usu_email` varchar(45) DEFAULT NULL,
  `usu_idSexo` varchar(45) DEFAULT NULL,
  `usu_fechaNacimiento` varchar(45) DEFAULT NULL,
  `usu_status` varchar(45) DEFAULT NULL,
  `usu_usuario` varchar(45) DEFAULT NULL,
  `usu_contrasena` varchar(45) DEFAULT NULL,
  `usu_foto` varchar(45) DEFAULT NULL,
  `usu_urlFoto` varchar(45) DEFAULT NULL,
  `usu_fechaAlta` varchar(45) DEFAULT NULL,
  `usu_idUsuarioAlta` varchar(45) DEFAULT NULL,
  `usu_fechaModifica` varchar(45) DEFAULT NULL,
  `usu_idUsuarioModifica` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` (`usu_id`, `usu_nombre`, `usu_apellidoPaterno`, `usu_apellidoMaterno`, `usu_celular`, `usu_telefono`, `usu_email`, `usu_idSexo`, `usu_fechaNacimiento`, `usu_status`, `usu_usuario`, `usu_contrasena`, `usu_foto`, `usu_urlFoto`, `usu_fechaAlta`, `usu_idUsuarioAlta`, `usu_fechaModifica`, `usu_idUsuarioModifica`) VALUES (1,'Francisco','Gali','Mendez','04242306143','02392327245','f.gali.18@gmail.com','1','1987-08-29 19:15:00','1','fgali','1234',' ',' ','2016-10-16 20:33:23','1','2016-10-16 20:33:23','\'2016-10-16 20:33:23\'');
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-16 20:54:11
