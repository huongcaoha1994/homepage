-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: avahome
-- ------------------------------------------------------
-- Server version	8.1.0

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_date` date DEFAULT (curdate()),
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'../image/bietthu1.jpg','BIỆT THỰ 12X25M ANH HOÀNG','NINH BÌNH','BIỆT THỰ','2023-11-03'),(2,'../image/bietthu2.jpg','BIỆT THỰ 15X10M HIỆN ĐẠI','ANH VIỆT','BIỆT THỰ','2023-11-03'),(3,'../image/bietthu3.jpg','BIỆT THỰ TÂN CỔ 7X16M','CHÚ HOÀN','BIỆT THỰ','2023-11-03'),(4,'../image/bietthu4.jpg','BIỆT THỰ ĐỒI CHÈ12x20M','CHỊ THỦY','BIỆT THỰ','2023-11-03'),(5,'../image/bietthu5.jpg','BIỆT THỰ ĐỒNG MÔ','.','BIỆT THỰ','2023-11-03'),(6,'../image/bietthu6.jpg','BIỆT THỰ D21','.','BIỆT THỰ','2023-11-03'),(7,'../image/nhapho1.jpg','THIẾT KẾ SPA 10X17M TP. NAM ĐỊNH','2 MẶT TIỀN TRƯỚC SAU','NHÀ PHỐ','2023-11-03'),(8,'../image/nhapho2.jpg','NHÀ PHỐ 7X15M','ANH HOÀNG DIỄM CHÂU - NGHỆ AN','NHÀ PHỐ','2023-11-03'),(9,'../image/nhapho3.jpg','NHÀ PHỐ 6.4X17.6M KẾT HỢP KINH DOANH CÀ PHÊ','LÀO CAI','NHÀ PHỐ','2023-11-03'),(10,'../image/nhapho4.jpg','NHÀ PHỐ 4X20M HIỆN ĐẠI','ANH MINH','NHÀ PHỐ','2023-11-03'),(11,'../image/nhapho5.jpg','NHÀ PHỐ 4.5X17M KẾT HỢP KINH DOANH CÀ PHÊ','.','NHÀ PHỐ','2023-11-03'),(12,'../image/nhapho6.jpg','NHÀ PHỐ HIỆN ĐẠI 6.5X15M','QUẢNG NINH','NHÀ PHỐ','2023-11-03'),(13,'../image/noithat1.jpg','&gt;NỘI THẤT NHÀ PHỐ 5X16M HIỆN ĐẠI','.','NỘI THẤT','2023-11-03'),(14,'../image/noithat2.jpg','NỘI THẤT NHÀ PHỐ 4X14M HIỆN ĐẠI','TIỆN NGHI','NỘI THẤT','2023-11-03'),(15,'../image/noithat3.jpg','NỘI THẤT NHÀ PHỐ 6.8X12M PHONG CÁCH GỖ ÓC CHÓ','.','NỘI THẤT','2023-11-03'),(16,'../image/noithat4.jpg','NỘI THẤT BIỆT THỰ ĐỒI CHÈ 12X20M','.','NỘI THẤT','2023-11-03'),(17,'../image/noithat5.jpg','NỘI THẤT NHÀ PHỐ 5M MẶT TIỀN','TP.TUYÊN QUANG','NỘI THẤT','2023-11-03'),(18,'../image/noithat6.jpg','NỘI THẤT BIỆT THỰ VƯỜN 150M2','THÁI NGUYÊN','NỘI THẤT','2023-11-03'),(19,'../image/bietthu7.jpg','BIỆT THỰ ĐƯƠNG ĐẠI','.','BIỆT THỰ','2023-11-03'),(20,'../image/bietthu8.jpg','BIỆT THỰ CHỊ THANH','.','BIỆT THỰ','2023-11-03'),(21,'../image/bietthu9.jpg','BIỆT THỰ NGHỈ DƯỠNG','.','BIỆT THỰ','2023-11-03'),(22,'../image/bietthu10.jpg','CẢNH QUAN BIỆT THỰ HÀ ĐÔ CHARM','KĐT AN KHÁNH','BIỆT THỰ','2023-11-03'),(23,'../image/bietthu11.jpg','BIỆT THỰ ANH KHÁNH','.','BIỆT THỰ','2023-11-03'),(24,'../image/bietthu12.jpg','BIỆT THỰ BẮC QUANG','HÀ GIANG','BIỆT THỰ','2023-11-03'),(25,'../image/bietthu13.jpg','BIỆT THỰ ANH TRÌNH','.','BIỆT THỰ','2023-11-03'),(26,'../image/bietthu14.jpg','BIỆT THỰ VĨNH YÊN','.','BIỆT THỰ','2023-11-03'),(27,'../image/bietthu15.jpg','BIỆT THỰ ECO','.','BIỆT THỰ','2023-11-03'),(28,'../image/nhapho7.jpg','NHÀ PHỐ HIỆN ĐẠI 5X27M','HẢI DƯƠNG','NHÀ PHỐ','2023-11-03'),(29,'../image/nhapho8.jpg','NHÀ PHỐ HIỆN ĐẠI 4.4 X 11M','PHAN ĐÌNH GIÓT','NHÀ PHỐ','2023-11-03'),(30,'../image/nhapho9.jpg','NHÀ PHỐ 6X25M HÀ ĐÔNG','.','NHÀ PHỐ','2023-11-03'),(31,'../image/nhapho10.jpg','NHÀ LÔ 4X13M HIỆN ĐẠI','ANH TUẤN','NHÀ PHỐ','2023-11-03'),(32,'../image/nhapho11.jpg','NHÀ PHỐ 4X15M NỞ HẬU 5.5M HIỆN ĐẠI','A THẮNG','NHÀ PHỐ','2023-11-03'),(33,'../image/nhapho12.jpg','NHÀ PHỐ HIỆN ĐẠI 6.8 X 12M','CÔ NỤ','NHÀ PHỐ','2023-11-03'),(34,'../image/nhapho13.jpg','NHÀ PHỐ GIA LÂM 7X12M','.','NHÀ PHỐ','2023-11-03'),(35,'../image/nhapho14.jpg','NHÀ PHỐ 9.6X10.8M','.','NHÀ PHỐ','2023-11-03'),(36,'../image/nhapho15.jpg','NHÀ PHỐ ANH TUẤN 5.2X15M','.','NHÀ PHỐ','2023-11-03'),(37,'../image/nhapho16.jpg','NHÀ PHỐ ANH DŨNG 6X15M','.','NHÀ PHỐ','2023-11-03'),(38,'../image/nhapho17.jpg','NHÀ Ở QUÊ GIÁ RẺ 8X10M','CHỊ PHƯƠNG','NHÀ PHỐ','2023-11-03'),(39,'../image/nhapho18.jpg','NHÀ HƯỚNG TÂY 10X16M','.','NHÀ PHỐ','2023-11-03'),(40,'../image/nhapho19.jpg','NHÀ PHỐ TROPICAL 6X20M NINH BÌNH','.','NHÀ PHỐ','2023-11-03'),(41,'../image/nhapho20.jpg','NGÔI NHÀ NHỎ 4.2X16M','.','NHÀ PHỐ','2023-11-03'),(42,'../image/nhapho21.jpg','THE SISTERS SPA','.','NHÀ PHỐ','2023-11-03'),(43,'../image/nhapho22.jpg','NHÀ Ở SÓC SƠN 8X10M','.','NHÀ PHỐ','2023-11-03'),(44,'../image/nhapho23.jpg','NHÀ PHỐ KẾT HỢP KINH DOANH 7X22M','.','NHÀ PHỐ','2023-11-03'),(45,'../image/nhapho24.jpg','NHÀ LÔ PHỐ KẾT HỢP KINH DOANH 7X15M','.','NHÀ PHỐ','2023-11-03'),(46,'../image/noithat7.jpg','NỘI THẤT CĂN HỘ CHUNG CƯ DV4 ROSE TOWN','79 NGỌC HỒI','NỘI THẤT','2023-11-03'),(47,'../image/noithat8.jpg','NỘI THẤT CHUNG CƯ PARKHILL 5','.','NỘI THẤT','2023-11-03'),(48,'../image/noithat9.jpg','BIỆT THỰ NINH HIỆP','BẮC NINH','NỘI THẤT','2023-11-03'),(49,'../image/noithat10.jpg','NỘI THẤT BIỆT THỰ HÀ ĐÔ CHARM','KĐT AN KHÁNH','NỘI THẤT','2023-11-03'),(50,'../image/noithat11.jpg','NỘI THẤT NHÀ PHỐ GIA LÂM 3.5X20M','ANH PHƯƠNG','NỘI THẤT','2023-11-03'),(51,'../image/noithat12.jpg','NỘI THẤT BIỆT THỰ BẮC QUANG','.','NỘI THẤT','2023-11-03'),(52,'../image/noithat13.jpg','NỘI THẤT NHÀ LÔ PHỐ 5X18M','ANH HÀ','NỘI THẤT','2023-11-03'),(53,'../image/noithat14.jpg','NỘI THẤT BIỆT THỰ HIỆN ĐẠI','TUYÊN QUANG','NỘI THẤT','2023-11-03'),(54,'../image/noithat15.jpg','Chung cư Vinsmart Tây Mỗ','Căn Hộ 80m2','NỘI THẤT','2023-11-03'),(55,'../image/noithat16.jpg','NỘI THẤT NHÀ PHỐ HIỆN ĐẠI','LONG BIÊN','NỘI THẤT','2023-11-03'),(56,'../image/noithat17.jpg','NỘI THẤT NHÀ LÔ PHỐ','TROPICAL','NỘI THẤT','2023-11-03'),(57,'../image/noithat18.jpg','NỘI THẤT CĂN HỘ CHUNG CƯ','HDI TOWER','NỘI THẤT','2023-11-03'),(58,'../image/noithat19.jpg','NỘI THẤT HIỆN ĐẠI KẾT HỢP GỖ TỰ NHIÊN','.','NỘI THẤT','2023-11-03'),(59,'../image/noithat20.jpg','NỘI THẤT NHÀ LÔ PHỐ ANH THẮNG','.','NỘI THẤT','2023-11-03'),(60,'../image/noithat21.jpg','NỘI THẤT NHÀ PHỐ GIA LÂM','.','NỘI THẤT','2023-11-03');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-03 16:20:20
