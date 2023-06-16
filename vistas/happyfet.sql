-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: happyfeet
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `happyfeet`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `happyfeet` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `happyfeet`;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL,
  `nombre_de_marca` text NOT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (1,'adidas'),(2,'NB'),(3,'under_armor');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marca` (
  `id_imagen` int(11) DEFAULT NULL,
  `nombre_de_marca` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` VALUES (1,'ADIDAS'),(2,'PUMA'),(3,'NIKE'),(4,'VANS'),(5,'CONVERSE'),(6,'REEBOK'),(7,'UNDER_ARMOR'),(8,'NB'),(0,'');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `entrega_producto` text DEFAULT NULL,
  `estado_factura` text DEFAULT NULL,
  `fecha_facturacion` text DEFAULT NULL,
  `hora_factura` text DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `numero_factura` text DEFAULT NULL,
  `valor_factura` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES ('entregado','pagada','4/09/2022','10:42:00',88198848,'FAC0001',235900),('pendiente','generada','5/09/2022','14:10:00',7553797,'FAC0002',560000),('entregado','pagada','6/09/2022','15:18:00',94160060,'FAC0003',735900),('pendiente','generada','7/09/2022','16:35:00',98629072,'FAC0004',560000),('entregado','pagada','8/09/2022','8:01:00',94516737,'FAC0005',560000),('','','','',0,'',0),('','pagada','27/09/2022','19:00',123,'FAC0010',150000),('','pagada','27/09/22','18:00',1234,'FAC0011',250000),('','pagadaa','28/07/22','17:00',547839,'FAC008',300000);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `categoria` text DEFAULT NULL,
  `color_producto` text DEFAULT NULL,
  `descripcion_producto` text DEFAULT NULL,
  `id_imagen` int(11) DEFAULT NULL,
  `id_marca` text DEFAULT NULL,
  `id_producto` text DEFAULT NULL,
  `nombre_producto` text DEFAULT NULL,
  `precio_producto` int(11) DEFAULT NULL,
  `stock_producto` int(11) DEFAULT NULL,
  `talla_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES ('DEPORTIVO ','negro','Tenis Running Negro-Blanco adidas Performance Coreracer para travesia urbana,juvenil',1,'adidas','P001','Tenis Running Negro-Blanco adidas Performance Coreracer',235900,6,8),('ALPINISMO','verde','mounblank, bota termica apta para actividades de alpinismo y sendero',3,'under_armor','P002','mounblank',560000,2,7),('DEPORTIVO ','amarillo','Tenis Running Men\'s Fresh Foam Hierro V6, apta para actividades de deporte de ruta',2,'NB','P003','Men\'s Fresh Foam Hierro V6',735900,3,7),('','','',0,'','','',0,0,0),('','morado','zapatos_morados',6,'reebok','P005','ments giro',500000,9,38),('','gris','zapatos gris',10,'nike','P008','for_one',200000,10,31),('','azul','zapatos azules',8,'puma','P015','jordan',250000,15,42),('','blanco','zapatos_blancos',9,'croido','P007','jordan blanca',500000,12,37);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) DEFAULT NULL,
  `nombres` text DEFAULT NULL,
  `apellidos` text DEFAULT NULL,
  `direccion_entrega` text DEFAULT NULL,
  `ciudad_de_entrega` text DEFAULT NULL,
  `correo_electronico` text DEFAULT NULL,
  `numero_de_contacto` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (88198848,'ARIAS OQUENDO','FRANCISCO JOSE','KRA 3 No. 3-55','cali','ARIAS.QUE25@GMAIL.COM',3314086989),(7553797,'MANGA MARIN','DAIRO ALEXANDER','KRA 8 No. 3-56','BOGOTA','DAIU521521@HOTMAIL.COM',3005889658),(94160060,'MAZO CALLE','JOER GONZALO','KRA 13 No. 3-03','BOGOTA','X25544@GMAIL.COM',3007721509),(98629072,'OSORIO DITTER','ANDREY','KRA 27 SUR No. 5-27','CALI','OSO89635@YAHOO.COM',3158985623),(94516737,'OSORIO RONDON','NICOLAI ANTONI','KRA 50 No. 46-59','BUCARAMANGA','NIKOL585@GMAIL.COM',3108975652),(0,'julian','betancourth','bogota','bogota','julian@gmail.com',321),(8183,'','guarnizo','medellin','medellin','juancarlos@gmail.com',3155192508),(56,'','hernandezJOSE','manizales','manizales','henan@gmail.com',3155334147);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-11 20:35:36
