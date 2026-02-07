CREATE DATABASE  IF NOT EXISTS `bienesraices` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bienesraices`;
-- MySQL dump 10.13  Distrib 8.0.44, for Win64 (x86_64)
--
-- Host: localhost    Database: bienesraices
-- ------------------------------------------------------
-- Server version	8.0.44

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propiedades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` longtext,
  `habitaciones` int NOT NULL,
  `wc` int DEFAULT NULL,
  `estacionamiento` int DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `vendedores_id` int NOT NULL,
  PRIMARY KEY (`id`,`habitaciones`),
  KEY `fk_propiedades_vendedores_idx` (`vendedores_id`),
  CONSTRAINT `fk_propiedades_vendedores` FOREIGN KEY (`vendedores_id`) REFERENCES `vendedores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedades`
--

LOCK TABLES `propiedades` WRITE;
/*!40000 ALTER TABLE `propiedades` DISABLE KEYS */;
INSERT INTO `propiedades` VALUES (1,'actualizada',12350000.00,'1e29d173b6b252151f84a87b4c524810.jpg','Descubre el equilibrio perfecto entre comodidad, diseño y ubicación en esta hermosa residencia frente al mar, pensada para quienes buscan un estilo de vida relajado sin renunciar al confort. Su arquitectura aprovecha al máximo la luz natural y las vistas abiertas, creando espacios que invitan al descanso y la convivencia.\r\n\r\nLa casa cuenta con amplias áreas sociales, ideales para disfrutar en familia o con amigos. La sala y el comedor se integran de forma armónica con la terraza exterior, permitiendo una conexión directa con el entorno natural y la brisa marina. Cada espacio ha sido diseñado para ofrecer funcionalidad y una sensación constante de amplitud.\r\n\r\nEn el área privada, las recámaras ofrecen privacidad y tranquilidad, con acabados de calidad y una distribución pensada para el descanso. La recámara principal destaca por su vista al mar, baño completo y clóset amplio, convirtiéndose en un refugio personal al final del día.\r\n\r\nUbicada en una zona privilegiada, esta propiedad permite un acceso rápido a la playa, así como cercanía a restaurantes, servicios y zonas recreativas. Una excelente opción tanto para vivir permanentemente como para invertir en una propiedad con alto valor y gran atractivo turístico.',5,4,4,'2026-01-11',1),(2,'Casa Minimalista',9500000.00,'dea5ee57efad01f5acf1fe8637fb0d83.jpg','Esta casa minimalista destaca por su diseño limpio, líneas rectas y una arquitectura pensada para ofrecer equilibrio, funcionalidad y elegancia. Cada espacio ha sido cuidadosamente planeado para maximizar la iluminación natural y crear una sensación constante de orden y amplitud.\r\n\r\nLas áreas sociales se desarrollan en un concepto abierto que integra sala, comedor y cocina, generando un ambiente práctico y armonioso. Los materiales y acabados en tonos neutros refuerzan el estilo contemporáneo, aportando una estética atemporal y fácil de personalizar.\r\n\r\nEn el área privada, las recámaras ofrecen un entorno tranquilo y bien proporcionado, ideal para el descanso. La recámara principal cuenta con baño propio y un diseño que prioriza la comodidad y la privacidad, manteniendo la coherencia del estilo minimalista en cada detalle.\r\n\r\nUna propiedad ideal para quienes valoran el diseño moderno, la eficiencia de los espacios y un estilo de vida práctico dentro de un entorno residencial.',3,2,2,'2026-01-13',3),(3,'Casa Vista al Lago',9800000.00,'c85107ac526d444387aa4ca3db032dfc.jpg','Ubicada en un entorno natural privilegiado, esta residencia ofrece una vista panorámica inigualable hacia el lago y las montañas, creando un ambiente de tranquilidad y privacidad. Su diseño armoniza con el paisaje, aprovechando la elevación del terreno para maximizar las vistas y la iluminación natural.\r\n\r\nLa vivienda cuenta con espacios interiores cálidos y bien distribuidos, ideales para disfrutar tanto en familia como en reuniones sociales. Las áreas comunes se conectan visualmente con el exterior, generando una sensación constante de amplitud y contacto con la naturaleza.\r\n\r\nUna opción ideal para quienes buscan un hogar exclusivo en un entorno natural, perfecto como residencia permanente o casa de descanso con alto valor residencial.',4,3,2,'2026-01-14',2),(4,'Residencia Moderna',7450000.00,'187363341c55fccb5b021a8bdb98f66c.jpg','Esta propiedad destaca por su arquitectura contemporánea, líneas limpias y acabados minimalistas. Los amplios ventanales y terrazas permiten una excelente entrada de luz natural, además de ofrecer vistas abiertas y una sensación de modernidad en cada nivel.\r\n\r\nEl diseño prioriza la funcionalidad y el confort, con áreas sociales bien definidas y una distribución pensada para un estilo de vida actual. Los balcones y espacios exteriores complementan la experiencia, ideales para relajarse o convivir.\r\n\r\nUbicada en una zona residencial atractiva, esta casa es perfecta para quienes buscan diseño, comodidad y una imagen moderna con gran presencia arquitectónica.',2,3,2,'2026-01-14',4),(5,'Residencia Campestre',11200000.00,'056d4fd018c0926536a17ef477cd6a03.jpg','Con un estilo rústico contemporáneo, esta residencia ofrece una experiencia de vida cálida y acogedora, rodeada de materiales naturales como la madera y la piedra. La alberca central se convierte en el punto de reunión ideal, integrando perfectamente los espacios interiores y exteriores.\r\n\r\nLas áreas sociales están diseñadas para la convivencia y el descanso, con amplios ventanales que permiten disfrutar del entorno en todo momento. Cada detalle aporta carácter y una sensación de exclusividad sin perder la comodidad.\r\n\r\nIdeal para quienes buscan un hogar con personalidad, perfecto para escapadas de descanso o como inversión en un entorno natural y privado.',6,4,5,'2026-01-14',3),(6,'Casa Familiar Moderna',5650000.00,'94e649f956e88f4d7a2dfb18a6057fc0.jpg','Esta casa de dos niveles presenta una fachada equilibrada y moderna, ideal para familias que buscan comodidad y funcionalidad en una zona residencial consolidada. Su diseño transmite orden, amplitud y una imagen actual.\r\n\r\nEn el interior, los espacios están pensados para el día a día, con áreas sociales bien iluminadas y una distribución práctica que favorece la convivencia. Las recámaras ofrecen privacidad y confort, adaptándose a las necesidades familiares.\r\n\r\nUna excelente opción para quienes desean un hogar estable, bien ubicado y con un diseño atractivo.',2,2,2,'2026-01-14',1);
/*!40000 ALTER TABLE `propiedades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'admin@example.com', '$2y$10$examplehashnotrealexamplehashnotreal1234567890');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendedores`
--

DROP TABLE IF EXISTS `vendedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendedores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendedores`
--

LOCK TABLES `vendedores` WRITE;
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
INSERT INTO `vendedores` (`id`, `nombre`, `apellido`, `telefono`) VALUES
(1, 'Juan', 'Pérez', '5551234567'),
(2, 'María', 'López', '5559876543'),
(3, 'Carlos', 'Hernández', '5554567890'),
(4, 'Ana', 'García', '5553210987');

/*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-02-06 19:43:00
