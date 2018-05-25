-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: votaciones
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `candidato`
--

DROP TABLE IF EXISTS `candidato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidato` (
  `id_candidato` int(12) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `id_organo` int(2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_candidato`),
  KEY `id_organo` (`id_organo`),
  KEY `id_candidato` (`id_candidato`),
  CONSTRAINT `candidato_ibfk_1` FOREIGN KEY (`id_organo`) REFERENCES `organo` (`id_organo`),
  CONSTRAINT `candidato_ibfk_2` FOREIGN KEY (`id_candidato`) REFERENCES `usuario` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidato`
--

LOCK TABLES `candidato` WRITE;
/*!40000 ALTER TABLE `candidato` DISABLE KEYS */;
INSERT INTO `candidato` VALUES (12135,'2',1,'imagenes/usuario.jpg'),(121350,'3',1,'imagenes/usuario4.jpg'),(121351,'4',2,'imagenes/usuario3.jpg'),(121352,'5',2,'imagenes/usuario.jpg'),(121353,'6',2,'imagenes/usuario4.jpg'),(121354,'7',3,'imagenes/usuario3.jpg'),(121355,'8',3,'imagenes/usuario.jpg'),(121356,'9',3,'imagenes/usuario4.jpg'),(121357,'10',4,'imagenes/usuario3.jpg'),(121358,'11',4,'imagenes/usuario.jpg'),(121359,'12',4,'imagenes/usuario4.jpg'),(95114011,'1',1,'imagenes/usuario3.jpg');
/*!40000 ALTER TABLE `candidato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_usuario`
--

DROP TABLE IF EXISTS `estado_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_usuario` (
  `id_estado_usuario` int(1) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  PRIMARY KEY (`id_estado_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_usuario`
--

LOCK TABLES `estado_usuario` WRITE;
/*!40000 ALTER TABLE `estado_usuario` DISABLE KEYS */;
INSERT INTO `estado_usuario` VALUES (1,'No voto','El usuario no ha votado'),(2,'autorizado','autorizado por jurado'),(3,'votando','usuario votando'),(4,'voto','finalizo el proceso votacion');
/*!40000 ALTER TABLE `estado_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facultad`
--

DROP TABLE IF EXISTS `facultad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facultad` (
  `id_facultad` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_facultad`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facultad`
--

LOCK TABLES `facultad` WRITE;
/*!40000 ALTER TABLE `facultad` DISABLE KEYS */;
INSERT INTO `facultad` VALUES (1,'Ciencias Básicas'),(2,'Ciencias de la Educación'),(3,'Ciencias de la Salud'),(4,'Ciencias Empresariales y Económicas'),(5,'Humanidades'),(6,'Ingeniería');
/*!40000 ALTER TABLE `facultad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugar`
--

DROP TABLE IF EXISTS `lugar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lugar` (
  `id_lugar` int(2) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id_lugar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugar`
--

LOCK TABLES `lugar` WRITE;
/*!40000 ALTER TABLE `lugar` DISABLE KEYS */;
INSERT INTO `lugar` VALUES (1,'Hemiciclo - Helado de Leche'),(2,'Bloque Norte  - Piso 1'),(3,'Bloque Norte - Piso 2');
/*!40000 ALTER TABLE `lugar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa`
--

DROP TABLE IF EXISTS `mesa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa` (
  `id_mesa` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `id_lugar` int(11) NOT NULL,
  PRIMARY KEY (`id_mesa`),
  KEY `id_lugar` (`id_lugar`),
  CONSTRAINT `mesa_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `lugar` (`id_lugar`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa`
--

LOCK TABLES `mesa` WRITE;
/*!40000 ALTER TABLE `mesa` DISABLE KEYS */;
INSERT INTO `mesa` VALUES (1,'1',2),(100,'100',1);
/*!40000 ALTER TABLE `mesa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organo`
--

DROP TABLE IF EXISTS `organo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organo` (
  `id_organo` int(2) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id_organo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organo`
--

LOCK TABLES `organo` WRITE;
/*!40000 ALTER TABLE `organo` DISABLE KEYS */;
INSERT INTO `organo` VALUES (1,'Consejo Superior',NULL),(2,'Consejo Academico',NULL),(3,'Consejo de Facultad',NULL),(4,'Consejo de Programa',NULL);
/*!40000 ALTER TABLE `organo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa`
--

DROP TABLE IF EXISTS `programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa` (
  `id_programa` int(2) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `id_facultad` int(2) NOT NULL,
  PRIMARY KEY (`id_programa`),
  KEY `id_facultad` (`id_facultad`),
  CONSTRAINT `programa_ibfk_1` FOREIGN KEY (`id_facultad`) REFERENCES `facultad` (`id_facultad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa`
--

LOCK TABLES `programa` WRITE;
/*!40000 ALTER TABLE `programa` DISABLE KEYS */;
INSERT INTO `programa` VALUES (14,'Ingeniería de Sistemas',6);
/*!40000 ALTER TABLE `programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id_rol` varchar(1) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES ('A','ADMINISTRADOR','Es el super usuario....'),('D','DELEGADO',NULL),('J','JURADO','Es el JURADO de votacion'),('V','VOTANTE',NULL);
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` varchar(3) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` VALUES ('DOC','DOCENTE',NULL),('EGR','EGRESADO',NULL),('EST','ESTUDIANTE',NULL);
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `codigo` int(12) NOT NULL,
  `nombre1` varchar(30) NOT NULL,
  `nombre2` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_tipo_usuario` varchar(3) NOT NULL,
  `id_rol` varchar(1) NOT NULL,
  `id_programa` int(2) NOT NULL,
  `id_mesa` int(3) DEFAULT NULL,
  `id_estado_usuario` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`codigo`),
  KEY `idRol` (`id_rol`),
  KEY `id_programa` (`id_programa`),
  KEY `id_mesa` (`id_mesa`),
  KEY `id_tipo_usuario` (`id_tipo_usuario`),
  KEY `id_estado_usuario` (`id_estado_usuario`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id_programa`),
  CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`id_mesa`) REFERENCES `mesa` (`id_mesa`),
  CONSTRAINT `usuario_ibfk_5` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`),
  CONSTRAINT `usuario_ibfk_6` FOREIGN KEY (`id_estado_usuario`) REFERENCES `estado_usuario` (`id_estado_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (0,'Yohan','Borna','Lasso','Lasso','1234567','DOC','J',14,100,1),(12135,'aNombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,3),(121350,'Nombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,2),(121351,'Nombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,2),(121352,'Nombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,1),(121353,'Nombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,1),(121354,'Nombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,1),(121355,'Nombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,1),(121356,'Nombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,1),(121357,'Nombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,1),(121358,'Nombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,1),(121359,'Nombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,1),(123456,'Alex','Ivan','Bornachera','Lasso','123456','DOC','A',14,100,1),(1213512,'Nombre1','Nombre2','Ape1','Ape2','123','DOC','V',14,100,1),(4651654,'Maigel','Andres','Gutierrez','Martinez','5191','DOC','V',14,100,1),(15156165,'Andres','Jose','Martinez','Perez','251515','DOC','V',14,100,1),(95114011,'Johan','Alberto','Robless','Solano','95114011','DOC','V',14,100,1),(2147483647,'Nombre1','Nombre2','Ape1','Ape2','nkjñ','DOC','V',14,100,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voto`
--

DROP TABLE IF EXISTS `voto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voto` (
  `id_voto` int(5) NOT NULL AUTO_INCREMENT,
  `id_mesa` int(2) NOT NULL,
  `id_candidato` int(12) NOT NULL,
  `cantidad` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_voto`),
  KEY `id_mesa` (`id_mesa`),
  KEY `id_candidato` (`id_candidato`),
  CONSTRAINT `voto_ibfk_1` FOREIGN KEY (`id_mesa`) REFERENCES `mesa` (`id_mesa`),
  CONSTRAINT `voto_ibfk_2` FOREIGN KEY (`id_candidato`) REFERENCES `candidato` (`id_candidato`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voto`
--

LOCK TABLES `voto` WRITE;
/*!40000 ALTER TABLE `voto` DISABLE KEYS */;
INSERT INTO `voto` VALUES (1,100,12135,NULL),(2,100,121352,NULL),(3,100,12135,NULL),(4,100,12135,NULL),(5,100,12135,NULL),(6,100,121352,NULL),(7,100,121350,NULL),(8,100,121352,NULL),(9,100,121350,NULL),(10,100,121352,NULL),(53,100,121350,NULL),(54,100,121353,NULL),(55,100,121356,NULL),(56,100,121357,NULL),(57,100,12135,NULL),(58,100,121353,NULL),(59,100,121354,NULL),(60,100,121358,NULL);
/*!40000 ALTER TABLE `voto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-24 19:44:22
