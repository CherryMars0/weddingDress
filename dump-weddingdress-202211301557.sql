-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: weddingdress
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shop` (
  `name` varchar(100) NOT NULL,
  `keyworks` varchar(100) NOT NULL,
  `fabric` varchar(100) NOT NULL,
  `style` varchar(100) NOT NULL,
  `models` varchar(100) NOT NULL,
  `designer` varchar(100) NOT NULL,
  `illustrate` varchar(100) NOT NULL,
  `pic` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL,
  `ID` int NOT NULL AUTO_INCREMENT,
  `position` varchar(100) NOT NULL,
  `page` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop`
--

LOCK TABLES `shop` WRITE;
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;
INSERT INTO `shop` VALUES ('罗马','蕾丝、性感、纯色','蕾丝、雪纺','优雅','蕾丝裙','Lisa','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/444a8d72f84fc017702fae50486df223.jpg','6666',1,'444a8d72f84fc017702fae50486df223','index'),('欧式婚纱裙','束腰，蕾丝','蕾丝','简约','束腰裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/bannerShout1.png','1888',4,'bannerShout1','index'),('罗马式婚纱裙','蕾丝、性感、纯色','蕾丝、雪纺','优雅','蕾丝裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/luomaB.png','888',2,'luomaB','index'),('罗马式婚纱裙','蕾丝、性感、纯色','蕾丝、雪纺','优雅','蕾丝裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/luomaC.png','888',3,'luomaC','index'),('欧式婚纱裙','束腰，蕾丝','蕾丝','简约','束腰裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/bannerShout.png','1888',5,'bannerShout','index'),('欧式婚纱裙234','蕾丝、性感、纯色','蕾丝','优雅','蕾丝裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/87332690b87f732ce903feb4e89b85b8.jpg','1888234',6,'87332690b87f732ce903feb4e89b85b8','bridal'),('欧式婚纱裙','蕾丝、性感、纯色','蕾丝','优雅','蕾丝裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/hs_8.png','1888',7,'hs_8','bridal'),('欧式婚纱裙','蕾丝、性感、纯色','蕾丝','优雅','蕾丝裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/hs_9.png','1888',8,'hs_9','bridal'),('欧式婚纱裙','蕾丝、性感、纯色','蕾丝','优雅','蕾丝裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/hs_10.png','1888',9,'hs_10','bridal'),('欧式婚纱裙','蕾丝、性感、纯色','蕾丝','优雅','蕾丝裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/hs_11.png','1888',10,'hs_11','bridal'),('欧式婚纱裙','蕾丝、性感、纯色','蕾丝','优雅','蕾丝裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/hs_12.png','1888',11,'hs_12','bridal'),('欧式婚纱裙','蕾丝、性感、纯色','蕾丝','优雅','蕾丝裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/hs_13.png','1888',12,'hs_13','bridal'),('欧式婚纱裙','蕾丝、性感、纯色','蕾丝','优雅','蕾丝裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/hs_14.png','1888',13,'hs_14','bridal'),('欧式婚纱裙','蕾丝、性感、纯色','蕾丝','优雅','蕾丝裙','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/hs_16.png','1888',14,'hs_16','bridal'),('欧式水晶项链','项链','钻石，纯银','优雅','婚纱配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/ps12.jpg','1888',15,'ps12','bridal'),('欧式水晶项链','项链','钻石','优雅','婚纱配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/ps11.jpg','1888',16,'ps11','bridal'),('欧式水晶耳钉','耳钉','纯铜','简约','婚纱配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/ps10.jpg','1888',17,'ps10','bridal'),('欧式水晶耳钉','耳钉','钻石，纯银','简约','婚纱配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/ps9.jpg','1888',18,'ps9','bridal'),('中式婚纱','红色、简约','绣花、纯棉','喜庆','汉服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/21.jpg','1888',19,'21','chidal'),('中式婚纱','红色、简约','绣花、纯棉','喜庆','汉服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/22.jpg','1888',20,'22','chidal'),('中式婚纱','红色、简约','绣花、纯棉','喜庆','汉服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/23.png','1888',21,'23','chidal'),('中式婚纱','红色、简约','绣花、纯棉','喜庆','汉服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/24.png','1888',22,'24','chidal'),('中式婚纱','红色、简约','绣花、纯棉','喜庆','汉服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/xq2_1_1.jpg','1888',23,'xq2_1_1','chidal'),('中式婚纱','红色、简约','绣花、纯棉','喜庆','汉服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/xq2_four_4.png','1888',24,'xq2_four_4','chidal'),('中式婚纱','红色、简约','绣花、纯棉','喜庆','汉服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/xq2_four_2.png','1888',25,'xq2_four_2','chidal'),('中式婚纱','红色、简约','绣花、纯棉','喜庆','汉服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/xq_10.png','1888',26,'xq_10','chidal'),('中式婚纱','红色、简约','绣花、纯棉','喜庆','汉服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/54.png','1888',27,'54','chidal'),('中式婚纱','红色、简约','绣花、纯棉','喜庆','汉服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/25.png','1888',28,'25','chidal'),('中式婚纱','红色、简约','绣花、纯棉','喜庆','汉服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/zs_11.png','1888',29,'zs_11','chidal'),('绣花鞋','鞋','绣花、纯棉','喜庆','汉服配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/43.jpg','1888',30,'43','chidal'),('绣花鞋','鞋','绣花、纯棉','喜庆','汉服配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/44.png','1888',31,'44','chidal'),('镂空手镯','手镯','镂空，纯金','喜庆','汉服配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/53.png','1888',32,'53','chidal'),('婚礼红头盖','红头盖','丝质','喜庆','汉服配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/51.png','1888',33,'51','chidal'),('欧式晚礼服','蕾丝、性感、纯色','蕾丝','优雅','晚礼服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/14713356414628bfx0n.jpg','1888',34,'14713356414628bfx0n','formal'),('欧式晚礼服','蕾丝、性感、纯色','蕾丝','优雅','晚礼服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/14797115759216bhlcf.jpg','1888',35,'14797115759216bhlcf','formal'),('欧式晚礼服','蕾丝、性感、纯色','蕾丝','优雅','晚礼服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/14713355093504azopi.jpg','1888',36,'14713355093504azopi','formal'),('欧式晚礼服','蕾丝、性感、纯色','蕾丝','优雅','晚礼服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/14797116039519dgkz4.jpg','1888',37,'14797116039519dgkz4','formal'),('欧式晚礼服','蕾丝、性感、纯色','蕾丝','优雅','晚礼服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/14797116719918y1thm.jpg','1888',38,'14797116719918y1thm','formal'),('欧式晚礼服','蕾丝、性感、纯色','蕾丝','优雅','晚礼服','Rose','图片仅供参考，具体面料、花色请咨询门店','./static/shopImg/14800603735142ah684.jpg','1888',39,'14800603735142ah684','formal'),('高贵水晶项链','项链','钻石、镀铜','高贵','晚礼服配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/ps3.jpg','3456',40,'ps3','formal'),('高贵钻石耳环','耳钉','钻石、镀铜','高贵','晚礼服配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/ps4.jpg','5687',41,'ps4','formal'),('钻石项链','项链','钻石、纯银','高贵','晚礼服配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/ps5.jpg','3452',42,'ps5','formal'),('简约钻石耳环','耳钉','钻石、镀铜','高贵','晚礼服配件','Rose','图片仅供参考，具体用料、做工请咨询门店','./static/shopImg/ps6.jpg','1546',43,'ps6','formal');
/*!40000 ALTER TABLE `shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `shopping_info`
--

DROP TABLE IF EXISTS `shopping_info`;
/*!50001 DROP VIEW IF EXISTS `shopping_info`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `shopping_info` AS SELECT 
 1 AS `pic`,
 1 AS `ID`,
 1 AS `illustrate`,
 1 AS `shopName`,
 1 AS `count`,
 1 AS `price`,
 1 AS `userName`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shoppingcart` (
  `userName` varchar(100) NOT NULL,
  `ID` int NOT NULL,
  `count` int NOT NULL,
  `shopName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcart`
--

LOCK TABLES `shoppingcart` WRITE;
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Permissions` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Marvelous1','123123','Sellers'),(3,'luo','123','WarehouseAdministartor'),(5,'222','123','Buyers'),(16,'lisa','123','Buyers');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'weddingdress'
--

--
-- Final view structure for view `shopping_info`
--

/*!50001 DROP VIEW IF EXISTS `shopping_info`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `shopping_info` AS select `shop`.`pic` AS `pic`,`shoppingcart`.`ID` AS `ID`,`shop`.`illustrate` AS `illustrate`,`shoppingcart`.`shopName` AS `shopName`,`shoppingcart`.`count` AS `count`,`shop`.`price` AS `price`,`shoppingcart`.`userName` AS `userName` from (`shop` join `shoppingcart`) where (`shop`.`ID` = `shoppingcart`.`ID`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-30 15:57:39
