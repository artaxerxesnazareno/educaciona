-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: educacionaDB
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aulas`
--

DROP TABLE IF EXISTS `aulas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aulas` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `curso_id` int unsigned NOT NULL,
  `link` text NOT NULL,
  `descricao` text,
  `completada` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aulas_curso` (`curso_id`),
  CONSTRAINT `aulas_curso` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aulas`
--

/*!40000 ALTER TABLE `aulas` DISABLE KEYS */;
INSERT INTO `aulas` (`id`, `nome`, `curso_id`, `link`, `descricao`, `completada`) VALUES (1,'Aula 1',1,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/dLHlHTsFqvk?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_\" title=\"Esse curso de PHP serve pra mim? - @CursoemVideo  de PHP - Gustavo Guanabara\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>',NULL,1),(2,'Aula 1',2,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/dLHlHTsFqvk?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_\" title=\"Esse curso de PHP serve pra mim? - @CursoemVideo  de PHP - Gustavo Guanabara\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>',NULL,0),(3,'Aula 1',3,' <iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/dLHlHTsFqvk?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_\" title=\"Esse curso de PHP serve pra mim? - @CursoemVideo  de PHP - Gustavo Guanabara\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>',NULL,0),(4,'Aula 1',4,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/dLHlHTsFqvk?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_\" title=\"Esse curso de PHP serve pra mim? - @CursoemVideo  de PHP - Gustavo Guanabara\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>',NULL,0),(5,'Aula 1',5,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/dLHlHTsFqvk?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_\" title=\"Esse curso de PHP serve pra mim? - @CursoemVideo  de PHP - Gustavo Guanabara\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Prepare-se para mudar sua visão sobre a linguagem PHP com esta incrível aula do curso de PHP Moderno do Gustavo Guanabara. Com conteúdo atualizado e 100% gratuito, esta aula é a oportunidade perfeita para aprender as últimas novidades da linguagem mais utilizada na Web. Não perca mais tempo e comece agora mesmo a sua jornada rumo ao sucesso com o curso de PHP Moderno do Gustavo Guanabara!',1),(6,'Aula 2',5,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/dLHlHTsFqvk?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_\" title=\"Esse curso de PHP serve pra mim? - @CursoemVideo  de PHP - Gustavo Guanabara\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Prepare-se para mudar sua visão sobre a linguagem PHP com esta incrível aula do curso de PHP Moderno do Gustavo Guanabara. Com conteúdo atualizado e 100% gratuito, esta aula é a oportunidade perfeita para aprender as últimas novidades da linguagem mais utilizada na Web. Não perca mais tempo e comece agora mesmo a sua jornada rumo ao sucesso com o curso de PHP Moderno do Gustavo Guanabara!',1),(7,'Aula 3',5,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/dLHlHTsFqvk?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_\" title=\"Esse curso de PHP serve pra mim? - @CursoemVideo  de PHP - Gustavo Guanabara\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Prepare-se para mudar sua visão sobre a linguagem PHP com esta incrível aula do curso de PHP Moderno do Gustavo Guanabara. Com conteúdo atualizado e 100% gratuito, esta aula é a oportunidade perfeita para aprender as últimas novidades da linguagem mais utilizada na Web. Não perca mais tempo e comece agora mesmo a sua jornada rumo ao sucesso com o curso de PHP Moderno do Gustavo Guanabara!',1),(8,'Aula 4',5,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/dLHlHTsFqvk?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_\" title=\"Esse curso de PHP serve pra mim? - @CursoemVideo  de PHP - Gustavo Guanabara\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Prepare-se para mudar sua visão sobre a linguagem PHP com esta incrível aula do curso de PHP Moderno do Gustavo Guanabara. Com conteúdo atualizado e 100% gratuito, esta aula é a oportunidade perfeita para aprender as últimas novidades da linguagem mais utilizada na Web. Não perca mais tempo e comece agora mesmo a sua jornada rumo ao sucesso com o curso de PHP Moderno do Gustavo Guanabara!',0);
/*!40000 ALTER TABLE `aulas` ENABLE KEYS */;

--
-- Table structure for table `aulas_concluidas`
--

DROP TABLE IF EXISTS `aulas_concluidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aulas_concluidas` (
  `aula_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `aulas_concluidas___aulas` (`aula_id`),
  KEY `aulas_concluidas___users` (`user_id`),
  CONSTRAINT `aulas_concluidas___aulas` FOREIGN KEY (`aula_id`) REFERENCES `aulas` (`id`),
  CONSTRAINT `aulas_concluidas___users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aulas_concluidas`
--

/*!40000 ALTER TABLE `aulas_concluidas` DISABLE KEYS */;
INSERT INTO `aulas_concluidas` (`aula_id`, `user_id`, `id`) VALUES (5,5,1),(6,5,2);
/*!40000 ALTER TABLE `aulas_concluidas` ENABLE KEYS */;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `nome` varchar(30) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`nome`, `id`) VALUES ('programação',1);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `descricao` text,
  `imagen_capa` varchar(100) DEFAULT NULL,
  `nivel` varchar(50) NOT NULL,
  `categoria_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cursos_categorias` (`categoria_id`),
  CONSTRAINT `cursos_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`id`, `name`, `descricao`, `imagen_capa`, `nivel`, `categoria_id`) VALUES (1,'Java','','popular-01.jpg','Basico',1),(2,'HTML & CSS',NULL,'popular-02.jpg','Intermedirio',1),(3,'JavaScript',NULL,'popular-03.jpg','Intermediario',1),(4,'Python',NULL,'popular-04.jpg','Avançado',1),(5,'PHP','Aprenda PHP como nunca antes com o novo curso de PHP Moderno do renomado professor Gustavo Guanabara. Com conteúdo atualizado e 100% gratuito, este curso é a oportunidade perfeita para dominar as últimas novidades da linguagem PHP. Não perca mais tempo e comece agora mesmo a sua jornada rumo ao sucesso com o curso de PHP Moderno do Gustavo Guanabara!','popular-05.jpg','Basico',1);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

--
-- Table structure for table `inscritos`
--

DROP TABLE IF EXISTS `inscritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inscritos` (
  `curso_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  PRIMARY KEY (`curso_id`,`user_id`),
  KEY `matriculas_users` (`user_id`),
  CONSTRAINT `matriculas_cursos` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  CONSTRAINT `matriculas_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscritos`
--

/*!40000 ALTER TABLE `inscritos` DISABLE KEYS */;
INSERT INTO `inscritos` (`curso_id`, `user_id`) VALUES (1,5),(3,5),(5,5);
/*!40000 ALTER TABLE `inscritos` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES (5,'ana','111','ana@email.com'),(7,'Eldade Bondo','eldadebondo','eldadebondo@email.com'),(8,'Art','111','art@email.com'),(9,'Naz','111','naz@gmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-05 20:57:29
