-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2018 at 07:58 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mobShop`
--

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(145) NOT NULL,
  `Price` int(15) NOT NULL,
  `Old_Price` int(9) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Images` varchar(1050) NOT NULL,
  `Description` varchar(2045) NOT NULL,
  `Short_Description` varchar(1087) NOT NULL,
  `Reviews` varchar(783) NOT NULL,
  `BuyedUser` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`ID`, `Name`, `Price`, `Old_Price`, `Brand`, `Images`, `Description`, `Short_Description`, `Reviews`, `BuyedUser`) VALUES
(1, 'Honor 7X (Blue, 4GB RAM + 32GB memory)', 12999, 0, 'HONOR', 'https://images-na.ssl-images-amazon.com/images/I/91V89Qmb5YL._SL1500_.jpg , https://images-na.ssl-images-amazon.com/images/I/817yerhkBDL._SL1500_.jpg , https://images-na.ssl-images-amazon.com/images/I/81TAnBzqhuL._SL1500_.jpg', 'OS	Android\r\nRAM	4 GB\r\nItem Weight	163 g\r\nProduct Dimensions	15.7 x 0.8 x 7.5 cm\r\nBatteries:	1 Lithium Polymer batteries required. (included)\r\nItem model number	BND-AL10\r\nWireless communication technologies	Bluetooth, WiFi Hotspot\r\nConnectivity technologies	GSM, (1800/900 MHz), HSPA+, 3G, (2100/900 MHz), 4G, LTE, FDD, TDD, GPRS, EDGE, WiFi 802.11 b/g/n 2.4 GHz\r\nSpecial features	Dual SIM, GPS, Music Player, Video Player, E-mail\r\nOther camera features	8MP\r\nForm factor	Touchscreen Phone\r\nWeight	163 Grams\r\nColour	Blue\r\nBattery Power Rating	3340\r\nWhats in the box	Handset, Charging Cable, Charging Adapter, PC Cover, SIM Ejecting Tool and Quick Start Guide', '16MP + 2MP dual primary camera and 8MP front facing camera / \r\n15.06 centimeters (5.93-inch) capacitive touchscreen, FHD+ 18:9 display with 1080 x 2160 pixels resolution and 407 ppi pixel density Android v7.0 Nougat EMUI 5.1 operating system with 2.36GHz Kirin 659 octa core processor, Mali-T830 GPU, 4GB RAM, / 32GB internal memory expandable up to 256GB and dual SIM (nano+nano) dual-standby (4G+4G) / \r\nUser can use any SIM slot for 4G (In-fact he can insert two 4G SIM cards in both the slots), / Based on which SIM he choose for Data Connection, other SIM goes onto 2G for Voice; 3340mAh lithium-polymer battery\r\n1 year manufacturer warranty for device, 6 months manufacturer warranty for in-box accessories including batteries and 3 months warranty for data/USB cable from the date of purchase. / Honor Mobiles Helpline Customer Service Toll Free Number:- 1800-209-6555 / \r\nFinger print sensor that unlocks in up to 0.25 seconds', '0', ''),
(2, '\r\nNubia M2 Lite (Black-Gold, 4 GB RAM + 32GB Memory)', 7390, 13999, 'NUBIA', 'https://images-na.ssl-images-amazon.com/images/I/711bL4xHMJL._SL1500_.jpg , https://images-na.ssl-images-amazon.com/images/I/71lvN2aXHxL._SL1500_.jpg , https://images-na.ssl-images-amazon.com/images/I/61mCSkJSZ1L._SL1439_.jpg , https://images-na.ssl-images-amazon.com/images/I/71qgpeXgIQL._SL1500_.jpg', 'Android\r\nRAM	4 GB\r\nItem Weight	163 g\r\nProduct Dimensions	15.6 x 0.8 x 7.7 cm\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	NX573J\r\nWireless communication technologies	Bluetooth, WiFi Hotspot\r\nConnectivity technologies	VoLTE, GSM, (850/900/1800/1900 MHz), CDMA, TD-SCDMA, (B34/B39), WCDMA 850/900/1900/2100, 4G LTE, TD, (B38/39/40/41), FDD, (B1/3/5/7/8/20)\r\nSpecial features	Dual SIM, GPS, Music Player, Video Player, FM Radio, Electronic compass, G-sensor, Light sensor, Gyro-sensor, Proximity sensor, Hall sensor, E-mail\r\nOther camera features	16MP\r\nForm factor	Touchscreen Phone\r\nWeight	163 Grams\r\nColour	Black-Gold\r\nBattery Power Rating	3000\r\nPhone Talk Time	21 Hours\r\nPhone Standby Time (with data)	288 Hours\r\nWhats in the box	Handset, Battery, Micro USB Cable, Charger, Quick Start Guide and Warranty Card', '13MP primary camera with Stacked CMOS, high-transparency organic glass lens, 5-pieces motor drive lens, f2.2 Aperture and 16MP front facing camera with BSI CMOS, 5P lens. f2.0 Aperture, 79.8 degree wide angle, skin retouching 2.0\r\n13.97 centimeters (5.5-inch) TFT HD capacitive touchscreen with 1280 x 720 pixels resolution and 267 ppi pixel density\r\nAndroid v6.0 Marshmallow operating system with 1.5GHz + 1GHz MTK 6750 A53 octa core processor, Mali T860 520MHz GPU, 4GB RAM, 32GB internal memory expandable up to 128GB and dual SIM (nano+nano) dual-standby (4G+4G)\r\n3000mAH lithium-ion battery providing talk-time of 21 hours and standby time of 288 hours\r\n1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase\r\nFIT (Frame Interactive Technology)\r\nNeovision camera (Different camera mode)', '0', ''),
(3, 'Samsung On7 Pro (Gold)', 7990, 9490, 'SAMSUNG', 'https://images-na.ssl-images-amazon.com/images/I/81mKtZOvUmL._SL1500_.jpg , https://images-na.ssl-images-amazon.com/images/I/91--IqvrtoL._SL1500_.jpg , https://images-na.ssl-images-amazon.com/images/I/71qKswEAT-L._SL1500_.jpg , https://images-na.ssl-images-amazon.com/images/I/71lB-nbJaDL._SL1500_.jpg , https://images-na.ssl-images-amazon.com/images/I/61iX54cPXJL._SL1250_.jpg', 'OS	Android\r\nRAM	2 GB\r\nItem Weight	172 g\r\nProduct Dimensions	7.8 x 15.2 x 0.8 cm\r\nItem model number	G-600FY\r\nWireless communication technologies	Bluetooth, WiFi Hotspot\r\nConnectivity technologies	GSM, (850/900/1800/1900 MHz), 4G LTE, (2600/2100/2300/1900/1800/850/900/800 MHz)\r\nSpecial features	Dual SIM, GPS, Music Player, Video Player, FM Radio, Accelerometer, Proximity sensor, E-mail\r\nOther camera features	13MP Primary & 5MP front\r\nForm factor	Touchscreen Phone\r\nWeight	172 Grams\r\nColour	Gold\r\nBattery Power Rating	3000\r\nWhats in the box	Handset, Travel Adaptor, USB Cable and User Guide', '13MP primary camera with auto mode, beauty face, continuous shot, interval shot, panorama mode and 5MP front facing camera with palm gesture selfie and 120 degree selfie mode\r\n13.86 centimeters (5.5-inch) TFT capacitive touchscreen with 720 x 1280 pixels HD display\r\nAndorid v6.0 Marshmallow operating system with 1.2GHz Qualcomm Snapdragon quad core processor, 2GB RAM, 16GB internal memory expandable up to 128GB and dual SIM (micro+micro) dual-standby (4G+4G)\r\nRemovable Li-Ion 3000 mAh battery.\r\n1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase', '', ''),
(4, 'Samsung Galaxy On7 Prime (Black, 4GB RAM + 64GB Memory)', 13990, 0, 'SAMSUNG', 'https://images-na.ssl-images-amazon.com/images/I/61EM4uS-5iL._SL1200_.jpg , https://images-na.ssl-images-amazon.com/images/I/61kAmTWfcIL._SL1200_.jpg , https://images-na.ssl-images-amazon.com/images/I/51LXgb-qFPL._SL1200_.jpg , https://images-na.ssl-images-amazon.com/images/I/51BEfdJZ9sL._SL1200_.jpg , https://images-na.ssl-images-amazon.com/images/I/81A7HRm2sXL._SL1500_.jpg', 'OS	Android\r\nRAM	4 GB\r\nItem Weight	168 g\r\nProduct Dimensions	0.8 x 15.2 x 7.5 cm\r\nBatteries:	1 Lithium ion batteries required. (included)\r\nItem model number	SM-G611FG\r\nWireless communication technologies	Bluetooth, WiFi Hotspot\r\nConnectivity technologies	2G, GSM, 3G, WCDMA, 4G LTE, FDD, TDD\r\nSpecial features	Dual SIM, GPS, Music Player, Video Player\r\nOther camera features	13MP\r\nForm factor	Touchscreen Phone\r\nWeight	168 Grams\r\nColour	Black\r\nBattery Power Rating	3300\r\nWhats in the box	Handset, Travel Adapter, USB Cable and User Manual (Earphones are to be purchased separately)', '13MP primary camera with f1.9 with auto focus and rear flash and 13MP front facing camera\r\n13.88 centimeters (5.5-inch) FHD Display with 1080 x 1920 pixels resolution\r\nAndroid v7.1 Nougat operating system with 1.6GHz Exynos 7870 octa core processor\r\n4GB RAM, 64GB internal memory expandable up to additional 256GB and dual SIM (nano+nano) dual-standby (4G+3G)\r\n3300mAH lithium-ion battery\r\n1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase\r\nEarphones to be purchased separately', '', ''),
(5, 'Moto X4 (Super Black, 64GB)', 22999, 23999, 'MOTOROLA', 'https://images-na.ssl-images-amazon.com/images/I/91PHUiX6%2BKL._SL1500_.jpg , https://images-na.ssl-images-amazon.com/images/I/71VxdZl5VBL._SL1500_.jpg , https://images-na.ssl-images-amazon.com/images/I/91PBxi2JL1L._SL1500_.jpg , https://images-na.ssl-images-amazon.com/images/I/81PaLQSKKkL._SL1500_.jpg', 'OS	Android\r\nRAM	4 GB\r\nItem Weight	163 g\r\nProduct Dimensions	14.8 x 0.8 x 7.3 cm\r\nBatteries:	1 Lithium Polymer batteries required. (included)\r\nItem model number	XT1900-2\r\nWireless communication technologies	Bluetooth, WiFi Hotspot\r\nConnectivity technologies	GSM, (2/3/5/8), 3G, WCDMA, (1/2/4/5/8), UMTS, HSPA+, 4G LTE, FDD, (1/3/4/5/7/8/20/28), TDD, (38/40/41)\r\nSpecial features	Dual SIM, GPS, Music Player, Video Player, Fingerprint reader, Proximity sensor, Gravity sensor, Accelerometer, Ambient light sensor, Magnetometer, Gyroscope, Sensor Hub, E-mail\r\nOther camera features	16MP\r\nForm factor	Touchscreen Phone\r\nWeight	163 Grams\r\nColour	Super Black\r\nBattery Power Rating	3000\r\nWhats in the box	Handset, User Manual, Headset, 15W Turbo Charger and USB Cable', '12MP + 8MP dual back camera (f2.2) with PDAF and 16MP front facing camera / \r\n4GB RAM and 64GB internal memory expandable up to 2TB / \r\nIP68 rated water resistance, safe from accidental spills and splashes / \r\n13.2 cms (5.2-inch) Full HD (1080 x 1920) capacitive touchscreen; Fingerprint reader / \r\nAndroid v7.1 Nougat operating system (Upgradable to v8.0 Oreo) with 2.2GHz Snapdragon 630 octa core processor / \r\n3000mAH battery with 15W Turbo Charging / \r\n1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including battery from the date of purchase', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;