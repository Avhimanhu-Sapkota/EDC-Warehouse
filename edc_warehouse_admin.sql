-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 05:08 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edc_warehouse_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` int(11) NOT NULL,
  `CATEGORY_NAME` varchar(32) NOT NULL,
  `CATEGORY_DESCRIPTION` text DEFAULT NULL,
  `CATEGORY_IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `CATEGORY_NAME`, `CATEGORY_DESCRIPTION`, `CATEGORY_IMAGE`) VALUES
(1, 'Technology', '<p>This category contains all the tech supplies that can be used as EDC.</p>\r\n', 'cat-technology.jpg'),
(2, 'Stationary', '<p>This category contains stationary supplies that are used by people as their EDC</p>\r\n', 'cat-stationary.jpg'),
(3, 'Fashion', '<p>This category contains fashion products that are used by modles and professional fashion freaks.</p>\r\n', 'cat-fashion.jpg'),
(4, 'Survival', '<p>This category contains the survival essentials that an individual requires during their survival mission.</p>\r\n', 'cat-survival.jpg'),
(5, 'Cosmetics', '<p>This category contains all cosmetics products that people use as their EDC.</p>\r\n', 'cat-cosmetics.jpg'),
(6, 'Health & Fitness', '<p>This category contains Health and Fitness related products that can be yours EDC.</p>\r\n', 'cat-health.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `JOURNAL_NO` int(11) NOT NULL,
  `JOURNAL_TITLE` varchar(120) NOT NULL,
  `JOURNAL_BODY` text NOT NULL,
  `JOURNAL_AUTHOR` varchar(32) DEFAULT NULL,
  `JOURNAL_RELEASEDATE` date NOT NULL,
  `JOURNAL_CATEGORY` varchar(20) NOT NULL,
  `JOURNAL_IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`JOURNAL_NO`, `JOURNAL_TITLE`, `JOURNAL_BODY`, `JOURNAL_AUTHOR`, `JOURNAL_RELEASEDATE`, `JOURNAL_CATEGORY`, `JOURNAL_IMAGE`) VALUES
(1, 'A Deeper Look into Every-Day Carry', '<p>When I look across the Internet, I find that many groups use this term. Knives, Flashlights, Cameras, Pens, Handguns, and a great many other things often have the label of EDC attached to them. Many interest groups claim that it originated with them. I have no idea when this term came into being or where it came from.<br />\r\n<br />\r\nEveryday carry seem obvious enough but when you look closer you will see that the definition can be quite loose.<br />\r\n<br />\r\nIf we carry a certain Item 5 days out of the week, is it EDC? I think it still is.<br />\r\n<br />\r\nWhat if we carry an item all of the time except under special conditions when we substitute it with a more specialized tool or larger tool? I still think it is EDC but this is open to debate.<br />\r\n<br />\r\nI generally think of an EDC item as a smaller than normal item that is carried with an individual most of the time but I can see how that does not always hold.<br />\r\n<br />\r\nEDC I think is different things to different people in one way or another. I have seen people debate about this subject but sometimes they only see if from their point of view. A person in a rural area might have different needs than a person from a city. One person&rsquo;s life might depend on his EDC one day while another person just likes to have the item. EDC might be different for people depending on their occupation or hobbies. One person may EDC a full sized item where other carries a small item. I am not sure how tight or how loose the boundaries of EDC should be. Perhaps we can figure this out or maybe there is no perfect answer.<br />\r\n<br />\r\nWhy would a person EDC? My thoughts are that there are many reasons that people would do so. It could be that it is really useful and practical to EDC many items for daily use. Some items may be carried a lot but used little awaiting some need that might occur. Several EDC items are functional or non-functional luxury items or status symbols. An EDC item can be a comfort item or just fun to have and play with. I am sure there are many other reasons besides these.<br />\r\n<br />\r\nIf it is in your car everyday, is that another level of EDC? I don&#39;t know what I think on this but have had the thought many times. Maybe there are levels of EDC.<br />\r\n<br />\r\nIt is my hope that we will have people from all walks of life from diverse groups by occupation, hobby, region, lifestyle, and any other thing that might make our look at EDC more well rounded. If I get the kind of group I would like to see, I think we run the risk of many disagreements on things but also the opportunity to learn from each other as well.</p>\r\n', 'JonSidney', '2019-11-01', 'EDC', 'journal1.jpg'),
(2, 'Everyday Carry – EDC Essentials for the Discerning Gentleman', '<p>There are three essential items that almost every man carries.</p>\r\n\r\n<ol>\r\n	<li>Wallet</li>\r\n	<li>Cellphone</li>\r\n	<li>Keys</li>\r\n</ol>\r\n\r\n<p>After that, it tends to be a mix. Whatever they happen to need that day or items that serve them well in their job or their lifestyle.</p>\r\n\r\n<p>Some men might opt to carry a little and others a lot. So where do they store them? We know that filling out suit pockets with heavy items can harm the suit and stretch the fabric. So here are a few bags that you might find can help keep all of your EDC gear in an organized fashion.</p>\r\n\r\n<p>Wallet</p>\r\n\r\n<p>The&nbsp;<a href=\"https://www.gentlemansgazette.com/mens-wallet-billfold-guide/\" target=\"_blank\">wallet</a>&nbsp;has long been used as a method of carrying cheques, bills, coins and credit cards. Today, men are using their wallets as fashionable accessories. Whether you prefer a classic billfold, a slim sleeve or a coat wallet that slides neatly into your breast pocket, there is an extensive range of wallets available for the discerning gentleman, however most use cheap leather that ages poorly. Also, the colors available are usually limited to brown and black and the nylon and plastic liners just don&rsquo;t do a custom suit justice. &nbsp;Therefore we recommend wallets made of all aniline dyed leather because they will age well, develop a patina and bring your pleasure for years to come. Take a look at out&nbsp;<a href=\"https://www.gentlemansgazette.com/shop/accessories/leather-goods/leather-wallets\" target=\"_blank\">favorite wallets</a>.</p>\r\n\r\n<p>Phone</p>\r\n\r\n<p>A&nbsp;<a href=\"https://www.gentlemansgazette.com/cell-phone-etiquette/\">cell phone</a>&nbsp;has become a staple of everyday life. The most used item in EDC, the smartphone is a lifeline for emergencies, a&nbsp;<a href=\"https://www.gentlemansgazette.com/leica-100-years-photography/\">camera</a>&nbsp;for memories and a database of information. We can check email, send instant messages and even do our banking with it. With millions of apps, there is no limit to what can be achieved via cell phone. Of course, the only limit is what we place upon ourselves. For that, take a look at our&nbsp;<a href=\"https://www.gentlemansgazette.com/cell-phone-etiquette/\">cell phone etiquette guide</a>.</p>\r\n\r\n<p>Keys</p>\r\n\r\n<p>Keys are a necessity. We use them to drive our cars, enter and lock our homes and gain access to a variety of other things like offices, boats, cabins, even bicycles. What a gentleman hangs his keys on is often a direct reflection of who he is. Is the keychain a plastic&nbsp;<a href=\"https://www.gentlemansgazette.com/beer-guide/\">beer</a>&nbsp;can? Perhaps a rubber Homer Simpson? Maybe it&rsquo;s a simple rhodium key ring. A lot can be told by the accessories a man chooses. Here are two key holders we recommend for very different gents.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'J.A. Shapira', '2019-11-20', 'Discerning Gentleman', 'journal2.jpg'),
(3, 'Everyday carry for beginners (Top 10 Things you should be carrying)', '<p>Are you new to EDC?</p>\r\n\r\n<p>You&#39;ve probably seen these 3 letters all over the internet by now. And you may honestly&nbsp;be&nbsp;wondering, what in the world does &quot;EDC&quot; stand for? It stands for&nbsp;&quot;Every Day Carry&quot;.</p>\r\n\r\n<p>A person&#39;s EDC Gear is exactly what it sounds like...It&#39;s the stuff they&nbsp;carry every day. Often times it&#39;s in&nbsp;their&nbsp;pockets or on their&nbsp;belts. But this gear can sometimes&nbsp;spill over into backpacks,&nbsp;<a href=\"http://recycledfirefighter.com/blogs/news/edc-gear-storage-ideas-2016\" target=\"_blank\">organizers</a>&nbsp;and more (especially if you&#39;re like us!).</p>\r\n\r\n<h3><strong>WHY WOULD I NEED TO &quot;EVERYDAY CARRY&quot; A BUNCH OF STUFF?</strong></h3>\r\n\r\n<p>Good question! The short answer is, the items in this list are going to make your life a lot easier, allow you to deal with emergencies and to complete everyday tasks more efficiently.&nbsp;Now,&nbsp;let&#39;s go ahead and get started on our top 10 list of everyday carry items...</p>\r\n\r\n<p>1. A good, sharp knife:<br />\r\nIf you&nbsp;are new to knives we recommend starting with a small knife like the<a href=\"http://recycledfirefighter.com/blogs/news/top-edc-folding-knives-under-100\" target=\"_blank\">Victorinox Cadet</a>. This little knife has a great blade on it, but also has some other great tools on board that can come in handy for everyday purposes (nail file, bottle opener, screwdriverand more).</p>\r\n\r\n<p>A knife is the most important part of anyone&#39;s everyday carry, because of all the versatility it adds to your life.&nbsp;Which is why we&#39;ve included it at #1 on our list.</p>\r\n\r\n<p>Common EDC Tasks for a Knife:&nbsp;Opening Packages | Cutting Threads or Rope | Maintenance of tools or other every day items | Food Prep | Emergency Tool |&nbsp;First Aid | Self Defense</p>\r\n\r\n<p><em>Looking for some other great&nbsp;knives suited for EDC?&nbsp;<a href=\"http://recycledfirefighter.com/blogs/news/top-edc-folding-knives-under-100\" target=\"_blank\">View our top 7 EDC Knives under $100 here</a>.</em><br />\r\n2. A slimmed down wallet:<br />\r\nWe&#39;re obviously very passionate about this one...And it&#39;s not because we sell slim wallets. It&#39;s&nbsp;because we believe a slim wallet is the only wallet worth carrying.&nbsp;And you can read why we believe a slimmed down wallet is so important&nbsp;<a href=\"http://recycledfirefighter.com/blogs/news/slim-down-your-wallet-more-carry-options-less-back-pain\" target=\"_blank\">here</a>. No one needs to be carrying around a big &#39;ole trifold that is 4 inches thick. Ditch the junk, carry only the essentials and get into a<a href=\"http://recycledfirefighter.com/collections/wallets\" target=\"_blank\">nice slim wallet</a>.</p>\r\n\r\n<p>Common EDC Tasks for a Wallet:&nbsp;Carrying your identification | Carrying your means to pay for Goods &amp; Services | And looking like a total boss if said wallet is from&nbsp;Recycled Firefighter<br />\r\n3. Cash:<br />\r\nNow that you&#39;ve got yourself a killer slimmed down wallet, fill that bad boy up<em>with only the essentials</em>&nbsp;and somecash. Yes, cash.&nbsp;It&#39;s alarming how few people carry cash on them these days.</p>\r\n\r\n<p>Here are a few reasons why you should &quot;every day carry&quot; cash:</p>\r\n\r\n<ul>\r\n	<li>Cards aren&#39;t accepted everywhere.</li>\r\n	<li>Leaving tips for servers or someone who has done a particular service for you (hair cuts, valet, etc).</li>\r\n	<li>Cash has more bargaining power in some cases (resulting in you getting a better deal).</li>\r\n	<li>Your bank could put a hold on your account for some reason.</li>\r\n	<li>Power or card readers could fail, leaving you with no way to pay. For that matter, your actual card could fail as well.</li>\r\n	<li>A disaster could occur leaving&nbsp;cash as&nbsp;the only way of paying for items.</li>\r\n</ul>\r\n\r\n<p>Carry&nbsp;along a decent amount of cash so you&#39;re ready if you can&#39;t use your card, or if the situation is better suited for cash.<br />\r\n4. Flashlight:<br />\r\nBeing able to illuminate a dark situation is crucial. Let&#39;s say you get a flat tire and you&#39;re stuck on the side of a dark road&nbsp;at 2am - Do you want to attempt to change that tire in the dark? Or let&#39;s say you went out for a hike with only what was on you&nbsp;(which we don&#39;t advise) and it got dark before you&nbsp;were finished...Do you want to hike out in the pitch black?</p>\r\n\r\n<p>A flashlight can come in handy for a variety&nbsp;of emergency reasons. But I find myself using my flashlight in my everyday life as well. Find something reliable and compact that uses common batteries and clip it to your pocket.</p>\r\n\r\n<p>Common EDC Tasks for a Flashlight:&nbsp;Lighting up dark rooms or the outdoors | Spotlighting something to show someone what you&#39;re talking about (if you&#39;re too lazy to get up) | Gently illuminating a dark room when others are asleep (instead of turning the light on) | Emergency Lighting | Self Defense Tool (threat identification) | Signaling<br />\r\n5. Your cell phone:<br />\r\nThis is something 99.9% of us already EDC, but it&#39;s worth mentioning. If you feel like you&#39;re not suited for carrying gear everyday, take a pause here. You&#39;re already carrying your phone everyday. Just imagine how much of your life you&#39;ve based around it.</p>\r\n\r\n<p>Now with that same logic, apply it&nbsp;to the other items in this article. Before too long you&#39;ll push your phone down the list of priorities and your other items will be more important&nbsp;to you.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Jacob Starr', '2019-12-10', 'Beginners guide', 'journal3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `OFFER_ID` int(11) NOT NULL,
  `OFFER_NAME` varchar(32) NOT NULL,
  `OFFER_DESCRIPTION` text DEFAULT NULL,
  `OFFER_STARTDATE` date NOT NULL,
  `OFFER_ENDDATE` date DEFAULT NULL,
  `DISCOUNT_PERCENT` int(11) NOT NULL,
  `OFFER_IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`OFFER_ID`, `OFFER_NAME`, `OFFER_DESCRIPTION`, `OFFER_STARTDATE`, `OFFER_ENDDATE`, `DISCOUNT_PERCENT`, `OFFER_IMAGE`) VALUES
(1, 'New Year Sale', '<p>This is a New Year 2020 Offer for EDC Warehouse customers.</p>\r\n', '2019-12-01', '2020-01-31', 10, 'offer1.jpg'),
(2, 'Warehouse Offer', '<p>This contains offers&nbsp; provided by EDC Warehouse for gentle customers.</p>\r\n', '2020-01-15', '2020-02-15', 12, 'offer2.jpg'),
(3, 'Valentine Discount', '<p>This is offered during the valentines so that lovers gift a productive EDC to their loved ones.</p>\r\n', '2020-02-01', '2020-02-20', 9, 'offer3.jpg'),
(4, 'Festive Offer', '<p>This offer is offered to the loyal customers of EDC Warehouse, during festivals .</p>\r\n', '2020-02-01', '2020-04-01', 10, 'offer4.jpg'),
(5, 'Stock Clearance', '<p>This offer is offered in order to clear the stock.</p>\r\n', '2020-02-01', '2020-04-01', 32, 'offer5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` int(11) NOT NULL,
  `PRODUCT_NAME` varchar(64) NOT NULL,
  `PRODUCT_DESCRIPTION` varchar(500) NOT NULL,
  `PRODUCT_QUANTITY` int(11) NOT NULL,
  `PRODUCT_PRICE` int(11) NOT NULL,
  `PRODUCT_RATING` float DEFAULT NULL,
  `QUANTITY_SOLD` int(11) DEFAULT NULL,
  `PRODUCT_RELEASEDATE` date NOT NULL,
  `PRODUCT_IMAGE_NAME` varchar(64) NOT NULL,
  `fk1_CATEGORY_ID` int(11) NOT NULL,
  `fk3_PROFESSION_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_NAME`, `PRODUCT_DESCRIPTION`, `PRODUCT_QUANTITY`, `PRODUCT_PRICE`, `PRODUCT_RATING`, `QUANTITY_SOLD`, `PRODUCT_RELEASEDATE`, `PRODUCT_IMAGE_NAME`, `fk1_CATEGORY_ID`, `fk3_PROFESSION_ID`) VALUES
(1, 'Ultimate Minimal Backpack Gear', '<p>This 1680 Denier ballistic nylon constructed backpack features a spacious main pocket with a compartmentalized system thats perfect for all your tech &ndash; from your 15&Prime; Macbook Pro, to your external hard drive, to your mini tablet &ndash; and will keep it safe and sound. The polyester lining is durable and moisture resistant and &ndash; if you tend to hit the gym on the go &ndash; there&rsquo;s a separate ventilated compartment for your shoes and/or clothing that wont intrude upon yo', 10, 5500, 4, 9, '2019-10-05', 'pro-backpack.jpg', 3, 1),
(2, 'Bolt Mini Flashlight', '<p>About the same size as a standard pen, this EDC flashlight offers an output range of 5 to 100 lumens, is constructed from aircraft-grade anodized type 3 aluminum, and runs on a single AAA battery. Most importantly, however, this small-form flashlight offers a runtime of up to 20 hours on a single battery &ndash; which is especially helpful in unforeseen emergency situations. It also features three brightness modes and 5 different configurations &ndash; including an SOS beacon.</p>\r\n\r\n<p>&nbsp', 10, 4599, 4, 8, '2019-10-15', 'pro-flashlight.jpg', 4, 2),
(3, 'Mauron Musy Survival Watch', '<p>Mauron Musy acts as a mini survival tin on your wrist. All these survival watches have similar features. They tell time and often include a fire starter, whistle, and compass. Then the wristband is made out of paracord.</p>\r\n', 10, 22000, 5, 9, '2019-10-25', 'pro-watch.jpg', 3, 3),
(4, 'All Natural Hand Sanitizer', '<p>Protection on the go without soap. Kills 99.9% of germs without soap or water. Keeps you and your family protected, anywhere and anytime.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 10, 999, 3, 4, '2019-12-03', 'pro-sanitizer.jpg', 5, 4),
(5, 'Lady Fashion Scarves - 100% Cotton.', '<p>Soft and close to the skin, the manufacturers commitment does not fade, no pilling.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 10, 1880, 3, 4, '2019-12-16', 'pro-scraves.JPG', 3, 5),
(6, 'Chocolate Espresso Energy Bar', '<p>Delicious &amp; Gluten Free: Pure Protein Bars feature the combination of high quality protein and great taste. This delicious, gluten free, chewy chocolate chip bar has 20 grams of protein to help fuel your super busy day.</p>\r\n', 10, 250, 4, 4, '2019-12-30', 'pro-energybar.jpg', 6, 6),
(7, 'Anker PowerCore Portable Charger', '<p>A little bit larger than a tube of chapstick, this USB charger has what many of its brethren lack: the ability to actually put it in your pocket. And it doesn&rsquo;t lack in charge ability either, as it can add up to 14 hours of talk time to an iPhone 6 or almost a full charge to a Samsung Galaxy 6S or virtually any other Android or Windows phones. For the price, there&rsquo;s none better.</p>\r\n', 10, 3999, 3, 5, '2019-10-30', 'pro-protablecharger.jpg', 1, 2),
(8, 'Cocoon Grid-It Organizer', '<p>Like&nbsp;tactical military webbing for everyday situations, this rubberized woven elastic pad allows you to store all of your cables, devices, accessories, and whatever else you can fit in an organized fashion. No longer will you need to fish through a messy pack in order to find your portable hard drive. Just strap all your stuff onto the Grid-It, put it in your pack, and go.</p>\r\n', 10, 1599, 4, 9, '2019-10-31', 'pro-organizer.jpg', 1, 5),
(9, 'Heavy Duty Colorful Duct Tape ', '<ul>\r\n	<li>STRONG original silver duct tape 5 ROLL MULTI-PACK. We offer bulk case savings and value in every pack you buy.</li>\r\n	<li>Now you can afford to use a whole lot of heavy duty duct tape for packing boxes, leather repair, insulation, warts removal or whatever your industrial engineer or average person needs may be. Keep some refills rolls handy!</li>\r\n	<li>Each 2 INCH wide grey tape roll is TEAR BY HAND, strong, water resistant, no residue and okay for outdoor use. The adhesive is EXTRA', 10, 800, 2, 2, '2019-11-02', 'pro-ducttape.jpg', 2, 5),
(10, 'Digital Neo  N2 Fountain Pen', '<p>This pen, which uses a pressure sensor to turn on whenever it is in use, can store up to 1,000 pages of notes remotely &ndash; until they can be uploaded to Evernote or Google Drive. The sleek aluminum body is as comfortable as a normal pen and offers up a great amount of strength and durability, so you won&rsquo;t break it through normal use. And you can upload your words and pictures directly to third-party programs like the Adobe suite.</p>\r\n', 10, 3599, 4, 9, '2019-11-04', 'pro-fountainpen.jpg', 2, 6),
(11, 'The Classic Leather Wallet', '<p>Wallets are flat, small cases that are often used to carry smaller personal items. This can include credit cards, cash, photographs, identification documents, business cards, or any other types of cards. Wallets are pocket-sized and are typically made of leather since it is a durable material.</p>\r\n', 10, 2999, 4, 6, '2019-11-07', 'pro-wallet.jpg', 3, 3),
(12, 'Victorinox Huntsman Swiss Army Knife', '<p>The swiss army knife is&nbsp;a favored tool of outdoorsmen for its versatility. And this one has it in spades. It is equipped with 15 tools that include a knife,saw, scissors, bottle opener, can opener, screwdriver, corkscrew, and more. While we wouldn&rsquo;t suggest that you replace your favorite EDC</p>\r\n', 10, 2500, 3, 9, '2019-11-09', 'pro-swissknife.jpg', 4, 2),
(13, 'Mont Royal Bathroom Tissue ', '<p>Metro Paper Mont Royal 2-Ply Bathroom Tissue - 4.25&quot; x 3.1&quot; , 96/cs #BT500 Metro Paper Mont Royal 2-Ply Bathroom Tissue - 4.25&quot; x 3.1&quot; , 96/cs, 15BT500, Metro Paper Industries. This toilet paper is awesome for daily use, specially in hospitals.</p>\r\n', 10, 700, 3, 2, '2019-11-09', 'pro-toiletpaper.jpg', 5, 4),
(14, 'Mastercool Curve 900 ml Bottle', '<ul>\r\n	<li>All parts top rack dishwasher-safe</li>\r\n	<li>Certified BPA, Phthalates, PVC free</li>\r\n	<li>Leak-proof, protected flip lid</li>\r\n	<li>Odor-free, stain-free, impact-resistant</li>\r\n	<li>Car cup/exercise equipment-friendly</li>\r\n</ul>\r\n', 10, 1880, 4, 9, '2019-11-12', 'pro-waterbottle.jpg', 6, 6),
(15, 'SanDisk Wireless 32 GB Flash Drive', '<p>If you frequently find yourself without any free space on your phone, you know how much of a pain it is to sync your data and clear up some space, especially if you are nowhere near your home computer (e.g. it&rsquo;s nigh impossible). This flash drive, while it can be plugged into a USB slot, can also transfer data wirelessly from any compatible device &ndash; so you won&rsquo;t have to delete all those pictures you took of your pets the next time you want to download an app.</p>\r\n', 10, 7999, 5, 9, '2019-11-15', 'pro-flashdrive.jpg', 1, 1),
(16, 'Jaybird X2 Wireless Earbuds', '<p>Eliminate the need to tether your ears to your devices with these wireless earbuds&nbsp;from Jaybird. Compatible with anything Bluetooth enabled &ndash; your phone, your iPad, your computer, whatever &ndash; you can stream music (or books on tape, if you&rsquo;re into that) directly into your ears without having to lug that device around with you. And, in one charge, they&rsquo;ll last for up to 8 hours straight.</p>\r\n', 10, 4599, 4, 8, '2019-11-16', 'pro-earbuds.jpg', 1, 2),
(17, 'Early Buy Sticky Notes 6 Pads Self-Stick', '<ul>\r\n	<li>Medium size, easy to use, portable, bright color, making your message more noticeable, not easy to be ignored.</li>\r\n	<li>Made with high quality paper and adhesive, easy to use and peel, super sticky, removes cleanly.</li>\r\n	<li>Use for school, office, family. Great for leaving notes or reminders on walls, doors, monitors, or other surfaces.</li>\r\n</ul>\r\n', 10, 200, 3, 1, '2019-11-17', 'pro-stickynotes.jpg', 2, 6),
(18, 'Exotac Waterproof Match Case', '<p>If you don&rsquo;t want to carry around a lighter with you, you should at least have some matches. And the best way to haul those fire starters is in this waterproof match case. It has room enough for up to 20 matches, is&nbsp;<a href=\"https://hiconsumption.com/best-waterproof-everyday-carry-gear/\" target=\"_blank\">water resistant</a>&nbsp;up to 5 meters, and is built from very sturdy and lightweight 6061 anodized aluminum. It also has a loop attachment that fits 550 paracord or any traditiona', 10, 2500, 4, 5, '2019-11-27', 'pro-matches.jpg', 4, 2),
(19, 'Tru Nord Key Ring Compass', '<p>Bottom line: everyone should own and know how to use a compass. Because if you&rsquo;re ever lost out in the wilderness and your technology fails you, it can be the difference between surviving and dying. And while that might seem like an unnecessarily grim prospect, it&rsquo;s true. This key ring attachable compass from Tru Nord is made from tough 360 brass, is water resistant, has a reliable space-age cobalt steel magnet within, and has a phosphorescent dial for easy reading even in the dar', 10, 5000, 4, 9, '2019-11-30', 'pro-keycompass.jpg', 4, 2),
(20, 'Cottonelle FreshFeel Flushable Wet Wipes for Adults', '<ul>\r\n	<li>100% flushable &amp; the No. 1 Flushable Wipe Brand among national flushable wipes brands</li>\r\n	<li>Immediately Starts to Break Down After Flushing &ndash; sewer safe &amp; septic-safe with SafeFlush Technology</li>\r\n	<li>Moist wipes made from fibers that are 100% biodegradable</li>\r\n	<li>Superior Clean - CleaningRipples texture provides softness while removing more , cleans better versus using dry bath tissue alone</li>\r\n</ul>\r\n', 10, 499, 3, 4, '2019-12-01', 'pro-wetwipes.jpg', 5, 4),
(21, 'Grenades Strong Mint ', '<p>Grenades Gum is the newest, coolest, most explosive chewing gum that will leave you breathless! From the moment you pop a gum ball into your mouth, you&#39;ll start to feel a sensation that starts in your mouth and explodes into your head like an icy hurricane of monumental proportions. It will shock the senses and leave you with a fresh breath unlike anything you&#39;ve experienced before. Grenades Gum is perfect for all types of situations and best used when you&#39;re in &quot;close quarte', 10, 359, 4, 9, '2019-12-06', 'pro-mints.jpg', 5, 1),
(23, 'Garmin Vívosmart Fitness Tracker', '<p>For many people, staying active has become an integral part of everyday life. One of the best ways to keep track of your personal fitness journey is by getting a device that will do it for you. Garmin&rsquo;s&nbsp;<a href=\"https://hiconsumption.com/best-fitness-trackers-for-2016/\">fitness tracker</a>&nbsp;features GPS integration and will keep track of your running metrics (like distance, time, personal records, etc.) automatically. And it features 24/7 heart rate monitoring, so you can even ', 10, 9999, 5, 9, '2019-12-20', 'pro-fitbit.jpg', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

CREATE TABLE `profession` (
  `PROFESSION_ID` int(11) NOT NULL,
  `PROFESSION_NAME` varchar(40) NOT NULL,
  `PROFESSION_DESC` varchar(150) DEFAULT NULL,
  `PROFESSION_IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`PROFESSION_ID`, `PROFESSION_NAME`, `PROFESSION_DESC`, `PROFESSION_IMAGE`) VALUES
(1, 'Businessman', '<p>This profession contains EDC supplies carried by professional Businessmen.</p>\r\n', 'prof-business.jpg'),
(2, 'Traveler', '<p>This profession contains EDC essentials used by Travelers.</p>\r\n', 'prof-traveler.jpg'),
(3, 'Models', '<p>This profession contains EDC materials used by successful Models.</p>\r\n', 'prof-model.jpg'),
(4, 'Doctor', '<p>This profession has EDC essentials used by Doctors in their day to day lifestyle.</p>\r\n', 'prof-doctor.jpg'),
(5, 'Designer', '<p>This profession contains EDC supplies carried by Digital Designers nowadays.</p>\r\n', 'prof-designer.jpg'),
(6, 'Students', '<p>This contains EDC materials utilized by successful students during their study.</p>\r\n', 'prof-student.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `system_user`
--

CREATE TABLE `system_user` (
  `USER_ID` int(8) NOT NULL,
  `USER_FULLNAME` varchar(32) DEFAULT NULL,
  `USER_EMAIL` varchar(40) NOT NULL,
  `USER_NAME` varchar(20) NOT NULL,
  `USER_PASSWORD` varchar(32) NOT NULL,
  `USER_CONTACTNO` varchar(10) NOT NULL,
  `USER_AGEGROUP` varchar(8) DEFAULT NULL,
  `USER_TYPE` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_user`
--

INSERT INTO `system_user` (`USER_ID`, `USER_FULLNAME`, `USER_EMAIL`, `USER_NAME`, `USER_PASSWORD`, `USER_CONTACTNO`, `USER_AGEGROUP`, `USER_TYPE`) VALUES
(1, 'AV Sapkota', 'av.sapkota999@gmail.com', 'avsapkota', 'f925916e2754e5e03f75dd58a5733251', '9860970274', '19-30', 1),
(4, 'test', 'test@gmail.com', 'test', 'f925916e2754e5e03f75dd58a5733251', '9860970270', '19-30', 0),
(5, 'AV Sapkota', 'avi.saps999@gmail.com', 'av_sapkota', 'bee6fcc9d54cb3a566c384889fa701a3', '9860970274', '19-30', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`JOURNAL_NO`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`OFFER_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRODUCT_ID`);

--
-- Indexes for table `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`PROFESSION_ID`);

--
-- Indexes for table `system_user`
--
ALTER TABLE `system_user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `JOURNAL_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `OFFER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PRODUCT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `profession`
--
ALTER TABLE `profession`
  MODIFY `PROFESSION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `system_user`
--
ALTER TABLE `system_user`
  MODIFY `USER_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
