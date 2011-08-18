-- MySQL dump 10.13  Distrib 5.5.14, for Linux (x86_64)
--
-- Host: localhost    Database: oiad
-- ------------------------------------------------------
-- Server version	5.5.14

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
-- Table structure for table `sites`
--

DROP TABLE IF EXISTS `sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `active` char(1) DEFAULT NULL,
  `category__tmp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=432 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sites`
--

LOCK TABLES `sites` WRITE;
/*!40000 ALTER TABLE `sites` DISABLE KEYS */;
INSERT INTO `sites` VALUES (1,'1 Daily Deal','http://www.1dailydeal.com/','F',NULL),(2,'1 Day Sports','http://www.1daysports.com/','T',NULL),(3,'1 Sale A Day','https://1saleaday.com/','T',NULL),(4,'1 Sale A Day Family','https://1saleaday.com/family','T',NULL),(5,'1 Sale A Day Jewelry','https://1saleaday.com/jewelry','T',NULL),(6,'1 Sale A Day Watch','https://1saleaday.com/watch','T',NULL),(7,'1 Sale A Day Wireless','https://1saleaday.com/wireless','T',NULL),(8,'13 Deals','http://www.13deals.com/','T',NULL),(9,'13 Deals Pets','http://pets.13deals.com/','T',NULL),(10,'2 Daily Deals','http://www.2dailydeals.com/','T',NULL),(11,'2Days Bargain','http://www.2daysbargain.com/','T',NULL),(12,'4imprint','http://promotions.4imprint.com/dealoftheday/','T',NULL),(13,'5 Star Deal','http://www.5stardeal.com/','T',NULL),(14,'6th Ave Electronics','http://www.6ave.com/shop/SickDealProduct.aspx','T',NULL),(15,'800-Ski-Shop','http://www.800-ski-shop.com/','T',NULL),(16,'98 Main','http://www.98main.com/','T',NULL),(17,'A Side of Peaches','http://www.asideofpeaches.com/','T',NULL),(18,'A Steal A Day','http://www.astealaday.com','T',NULL),(19,'A Watch For You','http://awatchforyou.com/','T',NULL),(20,'Abazias','http://www.abazias.com/dealoftheday.asp','T',NULL),(21,'Abt','http://www.abt.com/','T',NULL),(22,'Airguns Daily','http://www.airgunsdaily.com/','T',NULL),(23,'Alfred E Bike','http://aebike.com/get/deal/','T',NULL),(24,'allheart','http://www.allheart.com/ko123clearance.html?_s_icmp=DOTD','T',NULL),(25,'Alpaca Direct','http://www.alpacadirect.com/results~Sweaters~Clearance~category~26~secondary~2.htm','T',NULL),(26,'AlphaShark','http://www.alphashark.com/','T',NULL),(27,'Altrec','http://outlet.altrec.com/','T',NULL),(28,'Amazon Freebie','http://www.amazon.com/dp/B004G2LUXO/','T',NULL),(29,'Amazon Gold Box','http://www.amazon.com/gp/goldbox','T',NULL),(30,'Amazon MP3','http://www.amazon.com/MP3-Music-Download/b/ref=topnav_storetab_dmusic?ie=UTF8&node=163856011','T',NULL),(31,'Amazon Video Game','http://www.amazon.com/gp/feature.html/ref=amb_link_85826191_2?ie=UTF8&docId=1000208101&pf_rd_m=ATVPDKIKX0DER&pf_rd_s=right-blog-0&pf_rd_r=1839MMT7K9ZBZ5PT4YEE&pf_rd_t=101&pf_rd_p=1277833802&pf_rd_i=468642','T',NULL),(32,'American Musical Supply','http://www.americanmusical.com/RSS_Feeds/Ndnd.aspx','T',NULL),(33,'Animal Rescue','https://www.theanimalrescuesite.com/store/item.do?siteId=310&ddSourceId=31841&ddSourceClass=Item','T',NULL),(34,'AnimeBug','http://www.animebug.com/','T',NULL),(35,'Anita\'s Arts','http://www.anitasarts.com/specials.html','T',NULL),(36,'Another Smokin\' Deal','http://anothersmokingdeal.com/','T',NULL),(37,'Apple DOD','http://appledod.com/','T',NULL),(38,'Apress','http://www.apress.com/dailydeal/','T',NULL),(39,'ATG Stores','http://www.atgstores.com/dailyDeals/','T',NULL),(40,'Augason Farms','http://www.augasonfarms.com/dealofday','T',NULL),(41,'AwesomeDeals911','http://www.awesomedeals911.com/Store/Tab.aspx?tabid=1','T',NULL),(42,'azulio','http://www.azulio.com/dailydeal/','T',NULL),(43,'Babs Beads','http://babsbeadwarehouse.dodshops.com/','T',NULL),(44,'Baby Age','http://www.babyage.com/deal_of_the_day.aspx','T',NULL),(45,'Baby Half Off','http://www.babyhalfoff.com/','T',NULL),(46,'Baby Steals','http://www.babysteals.com/','T',NULL),(47,'Back To Basics Toys','http://www.backtobasicstoys.com/item/productid/dealoftheday/','T',NULL),(48,'Ballistic Reload','http://www.ballisticreload.com/','T',NULL),(49,'Bargain Bags Daily','http://bargainbagsdaily.com/','T',NULL),(50,'Bargain Station','http://www.bargainstation.com/DailyDeal','T',NULL),(51,'Bargaincell','http://www.bargaincell.com/bargaincell_daily_deal.html','T',NULL),(52,'Barnes & Noble','http://www.barnesandnoble.com/best-deals.asp','T',NULL),(53,'Bauble of the Day','http://www.baubleoftheday.com/','T',NULL),(54,'BeDeals Midnight','http://www.bedeals.com/index.php/midnight-deal/','T',NULL),(55,'BeDeals Noon','http://www.bedeals.com/index.php/noon-bedeal/','T',NULL),(56,'Best Deal Magazines','http://www.bestdealmagazines.com/deal.asp','T',NULL),(57,'bfiz','http://www.bfiz.com','T',NULL),(58,'Big Bear Outlet','http://www.bigbearoutlet.com/servlet/StoreFront','T',NULL),(59,'Big Daily Sale','http://www.bigdailysale.com','T',NULL),(60,'Big Fat Dad','http://www.bigfatdad.com/','T',NULL),(61,'BikeWagon','http://www.bikewagon.com/','T',NULL),(62,'Birkenstock Express','http://www.birkenstockexpress.com/Outlet/birkenstock-deal-of-the-day.cfm','T',NULL),(63,'Bits Du Jour','http://www.bitsdujour.com/','T',NULL),(64,'Bling Daily','http://blingdaily.com/','T',NULL),(65,'Boarders Best Buy','http://www.boardersbestbuy.com/','T',NULL),(66,'Bolt Athletics','http://www.boltathletics.com/','T',NULL),(67,'BombDeez','http://www.bombdeez.com/','T',NULL),(68,'BonkTown','http://www.bonktown.com','T',NULL),(69,'Bowlingball.com','http://www.bowlingball.com/','T',NULL),(70,'Bowtie Expressions','http://www.bowtie-expressions.com/assorted-bow-ties.html','T',NULL),(71,'Budo Bargain','http://www.budovideos.com/shop/customer/bargain.php','T',NULL),(72,'Bump Bargains','http://www.bumpbargains.com/','T',NULL),(73,'Buy.com','http://www.buy.com/retail/clearance/todays_deals.asp','T',NULL),(74,'Buzzer Beater','http://www.thebuzzerbeater.com/','T',NULL),(75,'Caddies Bag','https://www.caddiesbag.com/','T',NULL),(76,'CamoFire','https://www.camofire.com/','T',NULL),(77,'CandiesDelight','http://www.candiesdelight.com/Deal_Of_The_Day_s/111.htm','T',NULL),(78,NULL,'http://www.cellfreeks.com/dealoftheday.asp','T',NULL),(79,'CellHut','http://www.cellhut.com/','T',NULL),(80,'Chainlove','http://www.chainlove.com/','T',NULL),(81,'Choxster','http://www.choxster.com/','T',NULL),(82,'ChronoShark','http://www.chronoshark.com/','T',NULL),(83,'Cigar Monster','http://www.cigarmonster.com','T',NULL),(84,'Cinderella Wine','http://cinderellawine.com/','T',NULL),(85,'CloseoutMania','http://www.closeoutmania.com/','T',NULL),(86,'Collections Etc.','http://www.collectionsetc.com/Products/Sale/category.aspx/_/N-nd1s','T',NULL),(87,'Copy Fax Deals','http://www.copyfaxdeals.com/','T',NULL),(88,'CowBoom','http://www.cowboom.com/deal-of-the-day.cfm','T',NULL),(89,'Crazy DOD','http://crazydod.com/','T',NULL),(90,'Creative Brains','http://www.creativebrainsonline.com/DEAL-OF-THE-DAY_c_22.html','T',NULL),(91,'Croton Watch','http://www.crotonwatchdod.com/','T',NULL),(92,'Cuff-Daddy','http://www.cuff-daddy.com/','T',NULL),(93,'Daily Checkout','http://dailycheckout.com/','T',NULL),(94,'Daily Cigar Deal','http://dailycigardeal.com/','T',NULL),(95,'Daily Gem Deals','http://www.dailygemdeals.com/','T',NULL),(96,'Daily Imprint','http://www.dailyimprint.com/','T',NULL),(97,'Daily Memoires','http://www.dailymemories.com/','T',NULL),(98,'Daily Sales For You Mens','http://www.dailysalesforyou.com/Mens-Watch-Deal','T',NULL),(99,'Daily Sales For You Special','http://www.dailysalesforyou.com/Special-Watch-Deal','T',NULL),(100,'Daily Sales For You Womens','http://www.dailysalesforyou.com/Womens-Watch-Deal','T',NULL),(101,'Daily Shades','http://www.dailyshades.com/','T',NULL),(102,'Daily Steals','http://www.dailysteals.com/','T',NULL),(103,'Daily Steals Home','http://home.dailysteals.com/','T',NULL),(104,'Daily Steals Luxury','http://luxury.dailysteals.com/','T',NULL),(105,'Daily Steals Mobile','http://mobile.dailysteals.com/','T',NULL),(106,'Daily Steals Toys','http://toys.dailysteals.com/','T',NULL),(107,'dailydeals.net','http://www.dailydeals.net/','T',NULL),(108,'Deal a Day','http://www.dealaday.org/','T',NULL),(109,'Deal a Day Golf','http://dealadaygolf.com/','T',NULL),(110,'Deal a Day Golf Past','http://dealadaygolf.com/pastdeals.php','T',NULL),(111,'Deal A Day Golf Weekly','http://dealadaygolf.com/weeklydeals.php','T',NULL),(112,'Deal a Day Wake','http://www.dealadaywake.com/','T',NULL),(113,'Deal Only','http://www.dealonly.com/','T',NULL),(114,'dealdotcom','http://www.dealdotcom.com/home','T',NULL),(115,'DealExtreme','http://www.dealextreme.com/','T',NULL),(116,'Dealko','http://www.dealko.com/sale','T',NULL),(117,'DealPulp','http://dealpulp.com/','T',NULL),(118,'Deals Click','http://www.dealsclick.com/','T',NULL),(119,'dealxpress','http://www.dealxpress.us/','T',NULL),(120,'Deep Discount','http://www.deepdiscount.com/deals_daily-deep-deal/','T',NULL),(121,'Delight','http://www.delight.com/','T',NULL),(122,'Dell','http://accessories.us.dell.com/sna/sna.aspx?c=us&cs=19&l=en&s=dhs&~topic=daily_deals_available&~srd=true&sk=Daily_Deals&scat=prod&~srd=true&sk=daily_deals&scat=prod','T',NULL),(123,'Denali','http://www.shop-denali.com/Default.aspx','T',NULL),(124,'Dept of Deals','http://www.deptofdeals.com/','T',NULL),(125,'Desert Shaman','http://onedaydeal.net/Ancient-Incense-Smoke-Shop/index.php','T',NULL),(126,'Design By Humans','http://www.designbyhumans.com/','T',NULL),(127,'DiamondShark','http://www.diamondshark.com/','T',NULL),(128,'dillyeo','http://www.dillyeo.com/','T',NULL),(129,'DinoDirect','http://www.dinodirect.com/DailyDeal','T',NULL),(130,'Direction','http://www.directron.com/','T',NULL),(131,'Discount Watch Store','http://dailydeal.discountwatchstore.com/cust/dailydealsteal.asp?d=0','T',NULL),(132,'DOD Genie','http://www.dodgenie.com','T',NULL),(133,'DOD Hero','http://www.dodhero.com','T',NULL),(134,'DOD Hero Sidekick','http://www.dodhero.com/index.php?main_page=index&cPath=9','T',NULL),(135,'DownLowTooSlow','http://www.downlowtooslow.com/','T',NULL),(136,'dtagifts','http://www.dtagifts.com/','T',NULL),(137,'EarlsTees','http://www.earlstees.com/shop/catalog/','T',NULL),(138,'Eastwood','http://www.eastwood.com/clearance.html/','T',NULL),(139,'EasyStreetDeals','http://www.easystreetdeals.com/','T',NULL),(140,'eBags','http://www.ebags.com/','T',NULL),(141,'eBay Daily Deals','http://deals.ebay.com/','T',NULL),(142,'Eco Baby Buys','https://www.ecobabybuys.com/','T',NULL),(143,'eCost','http://www.ecost.com/Email/HotSheet.aspx','T',NULL),(144,'Ecosteal','http://www.ecosteal.com/','T',NULL),(145,'EjectIT','http://www.ejectit.com/','T',NULL),(146,'Electronics Expo','http://www.electronics-expo.com/index.php?page=item&id=MONDLHDHSST8AC&source=DailyDeal','T',NULL),(147,'Eternal Snow','http://www.eternalsnow.com/steal-of-the-day.html','T',NULL),(148,'eWatches','http://www.ewatches.com/cust/dailydealsteal.asp?d=0','T',NULL),(149,'eWatches Hourly','http://www.ewatches.com/cust/hourlydeal.asp','T',NULL),(150,'fab','http://fab.com/deals/','T',NULL),(151,'Fabric.com','http://www.fabric.com/Index.aspx','T',NULL),(152,'Family Video','http://www.familyvideo.com/catalog/pod_history.php','T',NULL),(153,'Field Junky','http://www.fieldjunky.com/','T',NULL),(154,'Flowers to Flourishes','http://www.flowerstoflourishes.com/','T',NULL),(155,'Fourteen Stix','http://www.14stix.com/','T',NULL),(156,'Fraction Price','http://www.fractionprice.com/cust/dailydealsteal.asp','T',NULL),(157,'Fragrance Brand','http://www.fragrancebrand.com/','T',NULL),(158,'Friends and Family Circle','https://www.friendsandfamilycircle.com/','T',NULL),(159,'Froobi','http://www.froobi.com/','T',NULL),(160,'Froobi Watch','http://www.froobi.com/watch-1.html','T',NULL),(161,'Fruper!','http://fruper.com/','T',NULL),(162,'Fububling','http://www.fububling.com/','T',NULL),(163,'Game Access','http://gameaccess.ca/Game-Store-DealOfTheDay.htm','T',NULL),(164,'Game Deal Daily','http://www.gamedealdaily.com/','T',NULL),(165,'Game du jour','http://www.gamedujour.com/','T',NULL),(166,'Game Giveaway of the Day','http://game.giveawayoftheday.com/','T',NULL),(167,'Gardens Alive!','http://www.gardensalive.com/','T',NULL),(168,'gearSlash','http://www.gearslash.com/','T',NULL),(169,'GearXS','http://www.gearxs.com/store/','T',NULL),(170,'Geeks.com','http://www.geeks.com/one-day-deal/','T',NULL),(171,'Gemnation','http://www.gemnation.com/watches/Deal-Of-The-Day.html','T',NULL),(172,'Get A Jacket Now','http://www.getajacketnow.com/','T',NULL),(173,'Get a Rock','http://getarock.com/','T',NULL),(174,'getzs','http://www.getzs.com/','T',NULL),(175,'Giftsprings','http://www.giftsprings.com/Merchant2/merchant.mv?Screen=CTGY&Category_Code=daily-special','T',NULL),(176,'Give Me Jewels','http://www.givemejewels.com/','T',NULL),(177,'Giveaway of the Day','http://www.giveawayoftheday.com/','T',NULL),(178,'goingTODAY','http://www.goingtoday.com/','T',NULL),(179,'Golf Discount','http://www.golfdiscount.com/deal_of_the_day','T',NULL),(180,'golfballs.com','http://www.golfballs.com/DealADay.aspx','T',NULL),(181,'Golfsmith','http://www.golfsmith.com/','T',NULL),(182,'Good Deals 18','http://www.gooddeals18.com/category/deal_of_the_day/','T',NULL),(183,'Grab My Deal','http://www.grabmydeal.com/index.php/current-deal.html','T',NULL),(184,'GraveyardMall','http://www.graveyardmall.com/categories/Daily-Deal/','T',NULL),(185,'GreaTiming','http://www.greattiming.net/side_bar_special','T',NULL),(186,'GreenSteal','http://www.greensteal.com/','T',NULL),(187,'Handbag Steals','http://www.handbagsteals.com','T',NULL),(188,'Happy Home','http://www.ehappyhome.info/','T',NULL),(189,'Harbor Freight Tools','http://www.harborfreight.com/clearance','T',NULL),(190,'Hartford York','http://www.hartfordyork.com/category/daily-deal','T',NULL),(191,'HatADay','http://www.hataday.com/','T',NULL),(192,'Heartland America','http://www.heartlandamerica.com/browse/deal_of_day.asp','T',NULL),(193,'Heels.com','http://www.heels.com/deal-of-the-day','T',NULL),(194,'Heels.com','http://www.heels.com/heel-of-the-day','T',NULL),(195,'Hip Green Deals','http://www.hipgreendeals.com/','T',NULL),(196,'Hollywood Toys & Costumes','http://blog.hollywoodtoysandcostumes.com/','T',NULL),(197,'HorseLoverz','http://www.horseloverz.com/c-Deals-of-the-Day-1020.html','T',NULL),(198,'Housewares Deals','http://www.housewaresdeals.com/on/demandware.store/Sites-HousewaresDeals-Site/default/Home-Show','T',NULL),(199,'HSN','http://www.hsn.com/todays-special_xh.aspx','T',NULL),(200,'I Have To Have That','http://www.ihavetohavethat.com/','T',NULL),(201,'indie bike','http://www.indiebike.com/The-Peloton/Deal-of-the-Day','T',NULL),(202,'Indie Jewels','http://indiejewels.com/','T',NULL),(203,'Inspired Silver','http://www.inspiredsilver.com/deal-of-the-day.html','T',NULL),(204,'InvictaShark','http://invicta.chronoshark.com/','T',NULL),(205,'iomega','http://go.iomega.com/en-us/offer/deal-of-day/','T',NULL),(206,'J&R','http://www.jr.com/promotions/deal-of-the-day/','T',NULL),(207,'Jack Rabbit DealoftheDay','http://jackrabbitdealoftheday.dodshops.com/','T',NULL),(208,'Jewelry Shopping Club','http://www.jewelryshoppingclub.com/','T',NULL),(209,'JewelryDOD','http://www.jewelrydod.com/','T',NULL),(210,'Jizbee Daily','http://www.jizbee.com/','T',NULL),(211,'Jizbee Free','http://www.jizbee.com/free/','T',NULL),(212,'Jizbee Jewelry','http://www.jizbee.com/jewelry/','T',NULL),(213,'Jizbee Random','http://www.jizbee.com/random/','T',NULL),(214,'Jizbee Toy','http://www.jizbee.com/toy/','T',NULL),(215,'Jizbee Watch','http://www.jizbee.com/watch/','T',NULL),(216,'Joe Cigar','http://www.joecigar.com/index.asp','T',NULL),(217,'Joe\'s New Balance Outlet','http://www.joesnewbalanceoutlet.com/','T',NULL),(218,'Joma Deals Fashion','http://www.jomadeals.com/handbag/','T',NULL),(219,'Joma Deals Luxury','http://www.jomadeals.com/luxury/','T',NULL),(220,'Joma Deals Watches','http://www.jomadeals.com/','T',NULL),(221,'Joolwe','http://www.joolwe.com/steal-of-the-day.html','T',NULL),(222,'JoS A Bank','http://www.josbank.com/menswear/shop/SubCategory_11001_10050_9252000','T',NULL),(223,'JoyLot','http://www.joylot.com/store_pages/Joy-Of-The-Day.cfm','T',NULL),(224,'Judaica Bargains','http://www.judaicabargains.com/','T',NULL),(225,'justdeals','http://www.justdeals.com/','T',NULL),(226,'Kaching Kaching','http://www.kachingkachingstore.com/','T',NULL),(227,'Kid Steals','http://www.kidsteals.com/','T',NULL),(228,'kids.woot!','http://kids.woot.com/','T',NULL),(229,'Kindred Creations','http://www.kindredcreationsideas.blogspot.com/','T',NULL),(230,'L. L. Bean','http://www.llbean.com/bin/TMM/TMM.cgi','T',NULL),(231,'Lacrosse.com','http://www.lacrosse.com/Navigation.process?Ne=330&Srp=24&N=840','T',NULL),(232,'Last Chance Road','http://lastchanceroad.com/','T',NULL),(233,'Leather A Day','http://www.leatheraday.com/','T',NULL),(234,'Lingerie Deal of the Day','http://lingeriedealoftheday.com/','T',NULL),(235,'Liquidation Channel','http://www.liquidationchannel.com/','T',NULL),(236,'Loco Deal','http://www.locodeal.com/','T',NULL),(237,'LocoBuy','http://www.locobuy.com/','T',NULL),(238,'Loot Pig','http://www.lootpig.com/','T',NULL),(239,'Loving The Classics','http://www.lovingtheclassics.com/deal.html','T',NULL),(240,'Luggage Pros','http://www.luggagepros.com/','T',NULL),(241,'MacMall','http://www.macmall.com/n/Deal-Of-The-Day/macCustomPages-961?store=macmall','T',NULL),(242,'MacUpdate Promo','http://www.mupromo.com/','T',NULL),(243,'macZOT!','http://www.maczot.com/','T',NULL),(244,'Mama Bargains','http://www.mamabargains.com/','T',NULL),(245,'Meijer','http://www.meijer.com/s/big-steals/_/N-5io?icid=hpdsthu','T',NULL),(246,'Meritline','http://www.meritline.com/dailydeals.aspx','T',NULL),(247,'Micro Center','http://www.microcenter.com/','T',NULL),(248,'Midnight Box 3','http://www.midnightbox.com/','T',NULL),(249,'Midnight Steal','http://www.midnightsteal.com/','T',NULL),(250,'Mikasa','http://www.mikasa.com/','T',NULL),(251,'Mono Price','http://www.monoprice.com/home/index.asp','T',NULL),(252,'Montred','http://now.montred.com/','T',NULL),(253,'Moonlight Special','http://www.moonlightspecial.com/','T',NULL),(254,'More Beer!','http://morebeer.com/','T',NULL),(255,'Moshells.com','http://www.moshells.com/','T',NULL),(256,'Mountain Gear','http://www.mountaingear.com/pages/product/dod.asp?&N=0','T',NULL),(257,'Mr. Watch','http://www.mrwatch.com/Hot_Deal_of_the_Day-6_sale.html','T',NULL),(258,'Muscle & Strength','http://www.muscleandstrength.com/store/deal.html','T',NULL),(259,'Musician\'s Friend','http://www.musiciansfriend.com/stupid','T',NULL),(260,'My Bling Spot','http://myblingspot.dodshops.com/','T',NULL),(261,'My Jewelry Box','http://www.myjewelrybox.com/','T',NULL),(262,'My Safety Shield','http://www.mysafetyshield.com/','T',NULL),(263,'Nerdy Shirts','http://www.nerdyshirts.com/dailydeal','T',NULL),(264,'Netaya','http://deal.netaya.com/','T',NULL),(265,'New Day New Deal','https://www.newdaynewdeal.com/','T',NULL),(266,'NewDaVincis 30 Minute','http://www.newdavincis.com/specials.html','T',NULL),(267,'NewEgg','http://www.newegg.com/Special/ShellShocker.aspx','T',NULL),(268,'NewEgg Daily Deals','http://www.newegg.com/DailyDeal.aspx?name=DailyDeal','T',NULL),(269,'NewEgg Mall','http://www.neweggmall.com/Default.aspx','T',NULL),(270,'Next Day Watches','http://www.nextdaywatches.com/','T',NULL),(271,'Noon Day Deal','http://www.noondaydeal.com/','T',NULL),(272,'Nothing But Software','http://www.nothingbutsoftware.com/dailydeal.asp','T',NULL),(273,'nycloseout','http://nycloseout.dodshops.com/','T',NULL),(274,'Oh Buy It!','http://ohbuyit.com/','T',NULL),(275,'Oh Loot','http://www.ohloot.com/','T',NULL),(276,'Oh Loot Bonus','http://www.ohloot.com/bonusdeal/','T',NULL),(277,'Omaha Steaks','http://www.omahasteaks.com/servlet/OnlineShopping?Dsp=237','T',NULL),(278,'On Your Eyes','http://www.onyoureyes.com/','T',NULL),(279,'One A Day Deal','http://www.oneadaydeal.com/','T',NULL),(280,'One Call','http://www.onecall.com/','T',NULL),(281,'One Small Store','http://www.onesmallstore.com/catalog/193/1/Deal_of_the_Day!.html','T',NULL),(282,'One Tool A Day','http://www.onetooladay.com/','T',NULL),(283,'Orange Onions','http://www.orangeonions.com/category/peel_of_the_day/','T',NULL),(284,'Organize.com','http://www.organize.com/','T',NULL),(285,'Orion','http://www.telescope.com/control/product/~category_id=HP_DealDayZone/~pcategory=HOMEPAGE/~product_id=09925','T',NULL),(286,'ORS Direct','http://www.orsdirect.com/','T',NULL),(287,'Out In Style','http://www.outinstyle.com/','T',NULL),(288,'Outdoor Daily','http://www.outdoordaily.com/','T',NULL),(289,'OverstockDrugstore','http://www.overstockdrugstore.com/index.php','T',NULL),(290,'PacificGeek','http://www.pacificgeek.com/nooner.asp','T',NULL),(291,'PacSun Womens','http://shop.pacsun.com/content.jsp?pageName=sale','T',NULL),(292,'Paws 4 Deals','http://www.paws4deals.com/','T',NULL),(293,'Paws Choice','http://www.pawschoice.com/deal-of-the-day.aspx','T',NULL),(294,'Peachy Cheap','http://www.peachycheap.com/','T',NULL),(295,'Pennywise','http://www.pennywise.biz/','T',NULL),(296,'Performance Bicycle','http://www.performancebike.com/','T',NULL),(297,'Perfume A Day','http://www.perfumeaday.org/','T',NULL),(298,'Pet Simply','http://petsimply.com/deal/','T',NULL),(299,'Pfaltzgraff','http://www.pfaltzgraff.com/','T',NULL),(300,'Price Plunge','http://www.priceplunge.com/','T',NULL),(301,'ProHealth','http://www.prohealth.com/index.cfm','T',NULL),(302,'Projector People','http://www.projectorpeople.com/deal/default.asp','T',NULL),(303,'Property Room','http://propertyroom.com/Catalog.aspx?Category=Steal%20of%20the%20Day&CategoryId=355','T',NULL),(304,'PulseTV','http://deal.pulsetv.com/','T',NULL),(305,'PulseTV 2','http://www2.pulsetv.com/deals.asp','T',NULL),(306,'QLIQO','http://www.qliqo.com/','T',NULL),(307,'QuickFire!','http://www.quickfiredeal.com/','T',NULL),(308,'QVC','http://www.qvc.com/qic/qvcapp.aspx/app.detail/params.item.tsv!.tpl.tsv.CM_SCID.TSV','T',NULL),(309,'Razor Dog Deals','http://www.razordogdeals.com/','T',NULL),(310,'Red Tag Crazy','http://redtagcrazy.com/','T',NULL),(311,'Red Tag Sports','http://www.redtagsports.com/','T',NULL),(312,'Reel A Deal','http://reeladeal.com/','T',NULL),(313,'REI Outlet','http://www.rei.com/cj/outlet/deal-of-the-day','T',NULL),(314,'RIPT','http://riptapparel.com/','T',NULL),(315,'Roast of the Day','http://www.roastoftheday.com/','T',NULL),(316,'Rock Bottom Golf','http://search.rockbottomgolf.com/dealoftheday.html','T',NULL),(317,'Roozt','http://www.roozt.com/','T',NULL),(318,'rubybag','http://www.rubybag.com/','T',NULL),(319,'RugSale','http://www.rugsale.com/rug_sale_deal_of_the_day.html','T',NULL),(320,'ScoobyDeal','http://www.scoobydeal.com/','T',NULL),(321,'Scope A Day','http://www.scopeaday.com/','T',NULL),(322,'Scrapbook Steals','http://www.scrapbooksteals.com/','T',NULL),(323,'Scrappin Deals \'n Steals','http://www.scrappindealsnsteals.com/','T',NULL),(324,'Sears','http://www.sears.com/shc/s/dap_10153_12605_DAP_WOW+Specials?storeId=10153&vName=WOW+Specials&catalogInd=DAP&catalogId=12605&i_cntr=1299622707723','T',NULL),(325,'Sears Outlet','http://www.searsoutlet.com/','T',NULL),(326,'Secondipity','http://www.secondipity.com/info/dotd','T',NULL),(327,'sellout.woot!','http://sellout.woot.com/','T',NULL),(328,'Selloutz','https://www.selloutz.com','T',NULL),(329,'Server A Day','http://www.serveraday.com/','T',NULL),(330,'ShadeShark','http://www.shadeshark.com/','T',NULL),(331,'Shindigz','http://www.shindigz.com/dod.cfm','T',NULL),(332,'shirt.woot!','http://shirt.woot.com/','T',NULL),(333,'ShirtADay','http://www.shirtaday.com/','T',NULL),(334,'Shnoop','http://www.shnoop.com/','T',NULL),(335,'Shopping Channel','http://www.theshoppingchannel.com/home.do','T',NULL),(336,'Sierra Trading Post','http://www.sierratradingpost.com/BarnBurners/','T',NULL),(337,'SkinStore.com','http://www.skinstore.com/the-daily-special.aspx','T',NULL),(338,'Sky Auction','http://www.skyauction.com/deal-of-the-day.do','T',NULL),(339,'Slippery Rock Cigars','http://www.slipperyrockcigars.com/','T',NULL),(340,'SnaffStuff','http://www.snaggstuff.com/','T',NULL),(341,'SneakaDeal','http://www.sneakadeal.com/','T',NULL),(342,'Sobongo','http://www.sobongo.com/daily-deal','T',NULL),(343,'Soccer.com','http://www.soccer.com/Navigation.process?Ne=330&Srp=24&N=837','T',NULL),(344,'Sonia B Finds','http://www.soniablive.com/','T',NULL),(345,'Sparkle Cartel','http://www.sparklecartel.com/','T',NULL),(346,'SparkleShark','http://www.sparkleshark.com/','T',NULL),(347,'Specialty Store Services','http://www.specialtystoreservices.com/special.aspx','T',NULL),(348,'Sports Zone Apparel','http://www.sportszoneapparel.com/','T',NULL),(349,'Sportsmans Deal','http://www.sportsmansgeardaily.com/','T',NULL),(350,'Start The Cart','http://startthecart.dodshops.com/','T',NULL),(351,'Steal1','http://www.steal1.com/','T',NULL),(352,'Steep And Cheap','http://www.steepandcheap.com','T',NULL),(353,'Summit Online','http://sale.summitonline.com/','T',NULL),(354,'Super Cute','http://www.supercutedod.com/','T',NULL),(355,'Super Jeweler','http://www.superjeweler.com/IOD/default.asp','T',NULL),(356,'SuperBiiz','http://www.superbiiz.com/landing.php?id=0bc97b49879ca7e6b738a4aa36dda39d5530dbe1ead148365f1a2880d5035923','T',NULL),(357,'SZUL','http://www.szul.com/szd','T',NULL),(358,'T&T','http://www.tandtdailydeals.com/','T',NULL),(359,'Tack of the Day','http://www.tackoftheday.com/','T',NULL),(360,'Tack of the Day Bonus','http://www.tackoftheday.com/extra/default.aspx','T',NULL),(361,'Tahoe Mountain Sports','http://www.tahoemountainsports.com/','T',NULL),(362,'TakeTours','http://www.taketours.com/tour-of-the-day/','T',NULL),(363,'Tanga T-Shirts','http://www.tanga.com/','T',NULL),(364,'Tanzanite.com','http://www.tanzanite.com/item/?id=68&deal','T',NULL),(365,'Target','http://dailydeals.target.com/','T',NULL),(366,'Tech For Less','http://www.techforless.com/cgi-bin/tech4less/hot_deal.html','T',NULL),(367,'Teediculous','http://www.teediculous.com/','T',NULL),(368,'TeeFury','http://www.teefury.com/','T',NULL),(369,'TGIFriday','http://fridays.qrs1.net/greatdealsapp/19qske9t.html','T',NULL),(370,'The Golf Store','http://www.thegolfstoreonline.com/t-dealoftheday.aspx','T',NULL),(371,'The House Boardshop','http://www.the-house.com/dealoftheday.html','T',NULL),(372,'The Now Deal','http://www.thenowdeal.com/','T',NULL),(373,'The Watchery','http://www.thewatchery.com/watch-of-the-day','T',NULL),(374,'The Wine Spies','http://thewinespies.com/','T',NULL),(375,'TheDeallio','http://thedeallio.com/','T',NULL),(376,'TheraBreath','http://www.therabreath.com/deal-of-the-day.asp','T',NULL),(377,'Thing Fling','http://www.thingfling.com/','T',NULL),(378,'Thing Fling Closeouts','http://closeout.thingfling.com/','T',NULL),(379,'Thing Fling House','http://house.thingfling.com/','T',NULL),(380,'Thing Fling Watches','http://watches.thingfling.com/','T',NULL),(381,'Things From Another World','http://www.tfaw.com/dod/','T',NULL),(382,'Thong A Day','http://thongaday.com/','T',NULL),(383,'Tick.Qliqo','http://tick.qliqo.com/','T',NULL),(384,'TigZoo','http://tigzoo.com/','T',NULL),(385,'Titan Toys','http://www.titantoys.com/','T',NULL),(386,'Tomo Buys','http://www.tomobuys.com/servlet/StoreFront','T',NULL),(387,'Tooliday','http://www.tooliday.com/','T',NULL),(388,'Tooliday Accessory','http://accessory.tooliday.com/','T',NULL),(389,'Tooliday Closeout','http://closeout.tooliday.com/','T',NULL),(390,'Tooliday Recon','http://recon.tooliday.com/','T',NULL),(391,'Totally Anything','http://www.totallyanything.com/','T',NULL),(392,'Totally Cards','http://www.totally-cards.com/','T',NULL),(393,'Trailblazer','http://www.shoptrailblazer.com/Default.aspx','T',NULL),(394,'Triple Clicks','http://www.tripleclicks.com/','T',NULL),(395,'uDealBest','http://www.udealbest.com/deal-of-the-day.html','T',NULL),(396,'uDealBest Watch','http://www.udealbest.com/watch-special.html','T',NULL),(397,'uDealBest Wireless','http://www.udealbest.com/wireless-special.html','T',NULL),(398,'uneetee','http://www.uneetee.com/categories/Today%27s-Insaneetee-Deal/','T',NULL),(399,'Upscale Time','http://www.upscaletime.com/','T',NULL),(400,'Vann\'s','http://www.vanns.com/shop/servlet/dealoftheday','T',NULL),(401,'VitaBase','http://www.vitabase.com/supplements/daily-deal.aspx','T',NULL),(402,'VM Innovations','http://www.vminnovations.com/','T',NULL),(403,'VolumeVote','http://www.volumevote.com/','T',NULL),(404,'Walmart','http://www.walmart.com/cp/Value-of-the-Day/1058864?povid=cat14503-env172199-module101210-lLink1_VOD','T',NULL),(405,'WatchDiscounters','http://www.watchdiscounters.com/cust/dailydealsteal.asp','T',NULL),(406,'WatchDOD','http://www.watchdealofday.com/','T',NULL),(407,'Watchismo','http://www.watchismo.com/','T',NULL),(408,'WeeklyCloseOuts','http://www.weeklycloseouts.com/page/en/home.aspx','T',NULL),(409,'WengerWatchDOD','http://www.wengerwatchdod.com/','T',NULL),(410,'Whey 2 Buy','http://www.whey2buy.com/','T',NULL),(411,'wheycheap','http://www.wheycheap.com/','T',NULL),(412,'Whiskey Militia','http://www.whiskeymilitia.com','T',NULL),(413,'Wild Ties','http://www.wildties.com/ties/WS225687.html','T',NULL),(414,'Wine Express','http://www.wineexpress.com/','T',NULL),(415,'Wine Twits','http://www.winetwitsdeals.com/','T',NULL),(416,'wine.woot!','http://wine.woot.com/','T',NULL),(417,'Wired for Wine','http://www.wiredforwine.com/Featured_Wine.htm','T',NULL),(418,'Womens Suits','http://www.womensuits.com/','T',NULL),(419,'woot!','http://www.woot.com/','T',NULL),(420,'World of Bags','http://www.worldofbags.com/D-O-W','T',NULL),(421,'World of Watches','http://www.worldofwatches.com/cust/dailydealsteal.asp','T',NULL),(422,'World of Watches for Her','http://www.worldofwatches.com/cust/dailydealladies.asp','T',NULL),(423,'wozofoto','http://www.wozofoto.com/www/','T',NULL),(424,'Writer\'s Digest Shop','http://www.writersdigestshop.com/category/deal_day','T',NULL),(425,'Wuslu','http://www.wuslu.com/','T',NULL),(426,'Yugster','http://www.yugster.com/default.aspx','T',NULL),(427,'Yugster Watch','http://www.watches.yugster.com/default.aspx','T',NULL),(428,'Yugster YUG','http://www.yugster.com/dspYoursUntilGone.aspx','T',NULL),(429,'Zalmar','http://www.zalmar.com/','T',NULL),(430,'ZipZoomfly','http://www.zipzoomfly.com/jsp/Special/FlyBuyDeal.jsp','T',NULL),(431,'zooblu','http://www.zooblu.com/','T',NULL);
/*!40000 ALTER TABLE `sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deals`
--

DROP TABLE IF EXISTS `deals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_link` varchar(255) DEFAULT NULL,
  `pictures` longtext,
  `desc_short` varchar(255) DEFAULT NULL,
  `desc_long` longtext,
  `price` varchar(255) DEFAULT NULL,
  `shipping` varchar(255) DEFAULT NULL,
  `pub_date` date DEFAULT NULL,
  `site` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `site__idx` (`site`),
  CONSTRAINT `deals_ibfk_1` FOREIGN KEY (`site`) REFERENCES `sites` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deals`
--

LOCK TABLES `deals` WRITE;
/*!40000 ALTER TABLE `deals` DISABLE KEYS */;
INSERT INTO `deals` VALUES (1,'http://www.1daysports.com/','http://d3d71ba2asa5oz.cloudfront.net/22001014/images/nikmch2blks81w-square-eb0111.jpg','Nike SQ Mach Speed Square Black STR8-FIT Driver','Nike has engineered their SQ Mach Speed STR8-FIT driver to utilize their innovative square clubhead geometry, which provides additional stability at impact for greater accuracy and distance. STR8-FIT allows you to adjust the face angle 8 different ways, optimizing your setup and dialing in the correct angle. The new aerodynamic Mach Speed head shape reduces drag on the sole allowing for increased swing speeds and enhanced trajectory. Nikes trademark technology optimizes CG and MOI to provide tremendous drives.\r\n- These are Mens Right Hand only\r\n- SQ Mach Speed STR8-FIT Driver\r\n- Loft is 10.5 Degrees\r\n- The shafts are Graphite\r\n- The Flex is Regular\r\n- We include a Free Protective Head cover\r\n- These are First Quality, Brand New clubs\r\n- Normal retail for these drivers is $359.99\r\n- Your 1DaySports price is $149.99\r\n- $11.99 shipping\r\n- Happy Golfing!','Price: $149.99','See description','2011-08-12',2),(2,'https://1saleaday.com/wireless','https://s3.amazonaws.com/1saleaday/images/4212/original/6_ft_optical_component_cable.jpg?1313163995','$1 + Free Shipping! 6 Foot Digital Audio Optical Cable!','Dinner was wonderful, Sylvia! Sam and I were absolutely delighted when we received your invitation! Weren\'t we Sam?\"Yes dear. I was delighted. Anything to get out of the house.\"Oh, ha ha! He doesn\'t mean that… do you Sam? No, of course he doesn\'t. Why… what\'s this? My goodness! Chocolate soufflé for desert? Sylvia you\'ve outdone yourself! Hasn’t she Sam?\"Well, this is certainly the best dinner I\'ve had since we got married.\"Oh Sam, you big kidder! Seriously though… speaking of outdoing, did I ever tell you the story of how I saved Sam from a gigantic snake?  \"It wasn\'t a snake dear.\"Oh hush Sam. You always say that, but I know better. What\'s that Sylvia? I haven\'t told you? Well! One day I walked into the living room to see Sam, crouched behind the TV, struggling with a gigantic, six foot snake!What did I do? Well, I just so happened to have been cleaning chickens in the kitchen, and I was still carrying the poultry shears. So I gave a fierce battle cry -\"More like a panicked shriek.\"- and lopped that nasty snake\'s head right off!\"It wasn\'t a snake dear.\"Thank you Sylvia. I think I was very brave too. I wish I had been a little quicker though. The snake must have bit through some wires before I got to it. Our TV still doesn\'t work.\r\n \r\n- - - - - - - - - - - - - - -\r\n \r\nHook up your TV and audio components with digital sound quality digital audio optical audio cables. Compatible with all devices outfitted with an optical audio jack, the digital audio optical cable transmits audio without sound distortion from electric or magnetic interference.Measuring 6 feet long, the cable has Toslink connectors with polished optical tips. Packaged with plastic tip protectors to protect the fiber optic\'s integrity, these audio cables can transmit a full digital signal between your audio devices.','Price:\n$1.00','','2011-08-13',7),(3,'http://www.1daysports.com/','http://d3d71ba2asa5oz.cloudfront.net/22001014/images/nikmch2blks81w-square-eb0111.jpg','Nike SQ Mach Speed Square Black STR8-FIT Driver','Nike has engineered their SQ Mach Speed STR8-FIT driver to utilize their innovative square clubhead geometry, which provides additional stability at impact for greater accuracy and distance. STR8-FIT allows you to adjust the face angle 8 different ways, optimizing your setup and dialing in the correct angle. The new aerodynamic Mach Speed head shape reduces drag on the sole allowing for increased swing speeds and enhanced trajectory. Nikes trademark technology optimizes CG and MOI to provide tremendous drives.\r\n- These are Mens Right Hand only\r\n- SQ Mach Speed STR8-FIT Driver\r\n- Loft is 10.5 Degrees\r\n- The shafts are Graphite\r\n- The Flex is Regular\r\n- We include a Free Protective Head cover\r\n- These are First Quality, Brand New clubs\r\n- Normal retail for these drivers is $359.99\r\n- Your 1DaySports price is $149.99\r\n- $11.99 shipping\r\n- Happy Golfing!','Price: $149.99','See description','2011-08-13',2);
/*!40000 ALTER TABLE `deals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'sport'),(2,'fashion'),(3,'electronics');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_sites`
--

DROP TABLE IF EXISTS `categories_sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `site_id__idx` (`site_id`),
  KEY `category_id__idx` (`category_id`),
  CONSTRAINT `categories_sites_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`) ON DELETE CASCADE,
  CONSTRAINT `categories_sites_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_sites`
--

LOCK TABLES `categories_sites` WRITE;
/*!40000 ALTER TABLE `categories_sites` DISABLE KEYS */;
INSERT INTO `categories_sites` VALUES (1,2,2),(2,20,2),(3,2,1),(5,20,3);
/*!40000 ALTER TABLE `categories_sites` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-08-18 18:17:51
