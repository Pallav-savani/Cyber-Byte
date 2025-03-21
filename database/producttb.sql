-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2024 at 12:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberbyte`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(200) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `qyt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`, `category`, `qyt`) VALUES
(1, 'Apple 2023 MacBook Pro Intel i9 9th Gen - (16 GB/1 TB SSD/Mac OS/4 GB Graphics) Silver', 215990, 'macbookpro-laptop.png', 'laptop', 9),
(2, 'MSI Titan 18 HX intel core i9-14900HX GeForce RTX 4080 18-inch 120Hz', 188090, 'msi-laptop.jpg', 'laptop', 10),
(3, 'Samsung Galaxy Book4 Pro Evo intel Core ultra 7 155H (16 GB/512 GB SSD) Moonstone Gray', 134990, 'samsung-laptop.png', 'laptop', 4),
(4, 'Asus ZenBook 14 Flip OLED i5-1340p 13th gen with intel Iris Xe Graphics', 84090, 'asus-laptop.jpg', 'laptop', 8),
(5, 'Lenovo Legion Pro 5 i7 14th Gen 14650HX - GeForce RTX 4060', 155990, 'lenovo-laptop.jpg', 'laptop', 14),
(6, 'Apple iPhone 15 pro max (Black Titanium, 256 GB) A17 Bionic Chip', 139990, 'iphone-15-pro-max.png', 'mobile', 3),
(7, 'Samsung Galaxy S24 ultra 5G (Titanium Gray, 512 GB) (12 GB RAM)', 130999, 's24-mobile.jpg', 'mobile', 4),
(8, 'Vivo X100 Pro 5G (Asteroid Orange, 512GB) (16 GB RAM)', 89999, 'vivox100-mobile.jpg', 'mobile', 13),
(9, 'Apple iPhone 12 (Purple, 256 GB) A14 Bionic Chip', 54999.3, 'iphone-12.png', 'mobile', 4),
(10, 'Realme GT 2 Pro (Paper White, 256 GB) (12 GB RAM)', 39999, 'realme-gt-2-pro-mobile.jpg', 'mobile', 10),
(11, 'Apple 2022 iPad Pro (6th Gen) 512 GB ROM 12.9 inch with Wi-Fi Only (Space Grey)', 108334, 'ipad-pro.png', 'tablet', 13),
(12, 'Samsung Galaxy Tab S9 (12 GB RAM) (256 GB ROM) 11.0 inch with Wi-Fi+5G Tablet (Beige)', 97190, 's9-tablet.webp', 'tablet', 15),
(13, 'Xiaomi Pad 5 (Multi Color, 256GB) (6/8GB RAM) 2.6Ghz', 29999, 'xiaomipad5-tablet.jpg', 'tablet', 8),
(14, 'Realme Pad 2 (8 GB RAM) (256 GB ROM) 11.5 inch with Wi-Fi+4G Tablet (Imagination Gery)', 23999, 'ralme-tablet.jpg', 'tablet', 10),
(15, 'OnePlus Pad GO (8 GB RAM) (256 GB ROM) 11.35 inch with Wi-Fi 4G Tablet (Twin Mint)', 24999, 'onplus-tablet.png', 'tablet', 10),
(16, 'LG UQ7500 139 cm (55 Inch) Ultra HD (4K) Smart LED TV & Active HDR (Black)', 43990, 'lg-tv.jpg', 'tv', 10),
(17, 'Sony BRAVIA 55 Inch (139 cm) Ultra HD (4K) Smart Google TV (KD-55X74X)', 55990, 'sony-tv.jpg', 'tv', 10),
(18, 'iFFALCON 55 inches 4K Ultra HD Smart LED Google TV (Black)', 39990, 'falcon-tv.jpg', 'tv', 10),
(19, 'SAMSUNG New D Series Brighter Crystal 4K Vivid (2024 Edition) 138 cm (55 inch) UHD (4K) LED TV', 46990, 'samsung-tv.jpg', 'tv', 10),
(20, 'SONY Bravia 126 cm (50 inch) Ultra HD (4K) LED Smart TV (KD-50X75)', 56890, 'sony-tv2.jpg', 'tv', 8),
(21, 'Autel Robotics EVO Lite  Premium Bundle, CMOS Sensor with 6K HDR Camera', 127320, 'autel-drone.jpg', 'drone', 10),
(22, 'DJI Avata 2 Fly More Combo (1 Battery) FPV Drone with 4K Camera', 82087, 'djiavata-drone.jpg', 'drone', 10),
(23, 'DJI Mini 2 Ultralight and Foldable Drone Quadcopter with 4K Camera', 34499, 'djimini2-drone.jpg', 'drone', 10),
(24, 'DJI Mini 4 Pro, Folding Mini-Drone with 4K HDR Video Camera', 112499, 'djimini4-drone.webp', 'drone', 10),
(25, 'DJI Mavic 3 Classic Drone camera with, 5.1K Video Recording', 236500, 'djimivic3-drone.jpeg', 'drone', 3),
(26, 'Canon EOS R7, EOS R Technology meets APS-C Design Fast and Powerful', 159499, 'canon-camera.png', 'camera', 7),
(27, 'SONY Alpha ILCE-6400l 24.2 MP Mirror-less Digital SLR Camera (Black) with 16-50 mm Power Lens', 90990, 'sony-camera.jpg', 'camera', 10),
(28, 'Nikon D5600 Digital SLR Camera with AF-P DX NIKKOR 18-55 mm VR Lens - VBA500K001', 42499, 'nikon-camera.png', 'camera', 10),
(29, 'Apple Watch SE (GPS, 44mm) - Gold Aluminium Case with Starlight Sport Band - Regular', 29999, 'apple-watch.png', 'watch', 10),
(30, 'Fossil Gen 6 Digital Gray Dial Mens Watch-FTW4059', 12498, 'fosil-watch.jpg', 'watch', 10),
(31, 'Fitbit Versa 4 Fitness Watch (Waterfall Blue/Platinum Aluminium)', 20499, 'fitbit-watch.jpg', 'watch', 10),
(32, 'Samsung Galaxy Watch 5 Bluetooth (44 mm, Graphite, Compatible with Android only)', 22999, 'samsung-watch.jpg', 'watch', 10),
(33, 'Fire-Boltt Smartwatch Brand Talk 2 Bluetooth Calling Smartwatch with Dual Button', 1499, 'firebolt-watch.jpg', 'watch', 10),
(34, 'Amazon Echo Dot (4th Gen) | Smart speaker with Bigger sound (White)', 5499, 'echo-speaker.jpg', 'speaker', 10),
(35, 'Amazon Echo Dot (5th Gen) | Premium sound powered by Dolby and Alexa (Black)', 6499, 'alexa-speaker.png', 'speaker', 10),
(36, 'SONOS Era 100 (Next Gen) with Built-in Alexa Smart Wi-Fi Speaker (Touch Control, White) ', 29999, 'sonos-speaker.jpeg', 'speaker', 10),
(37, 'Google Home with Google Assistant Smart Speaker (White)', 9450, 'google-speaker.jpg', 'speaker', 10),
(38, 'SONOS Roam SL with Alexa & Google Voice Assistant Smart Wi-Fi Speaker (Shadow Black)', 19999, 'sonos2-speaker.png', 'speaker', 10),
(39, 'Bose QuietComfort Ultra Wireless Noise Cancelling Over Ear Headphones (White Smoke)', 35900, 'bose-headphone.jpg', 'headphone', 10),
(40, 'SONY WH-1000XM4/LM Bluetooth Headset  (Blue, On the Ear)', 22990, 'sony-head.jpg', 'headphone', 10),
(41, 'Apple AirPods Pro (2nd gen) with MagSafe Case (USB-C) Bluetooth Headset (White, True Wireless)', 18999, 'apple-aripods.jpg', 'headphone', 10),
(42, 'Sennheiser HD 800s Wired without Mic Headset (Silver, Black, On the Ear)', 124990, 'sennheiser-head.jpg', 'headphone', 10),
(43, 'Sony PlayStation Elite PLUS Wireless Headset with Dual Noise-Cancellation', 12335, 'playstation-head.jpg', 'headphone', 10),
(44, 'AnkerWork C3 10 Webcam, 4K Webcam, 12 MP, AI Auto Focus, 1080p@60FPS HDR', 17999, 'anker-camera.jpg', 'camera', 10),
(45, 'Creative Live! Cam Sync V3 2K QHD USB Webcam with 4K Digital Zoom (Black)', 3999, 'creative-camera.jpg', 'camera', 10),
(46, 'DJI Phantom 3 Advanced Quadcopter Drone With 2.7K HD Video Camera', 83405, 'drone.png', 'drone', 2),
(47, 'JAMMY ZONES DZ09 Smartwatch Compatible with All Smart Phones J23 Smartwatch', 1387, 'smart-watch.png', 'watch', 10),
(48, 'AMAZON Echo Plus (2nd Gen) - Premium sound powered by Dolby (Black)', 7851.47, 'speker.png', 'speaker', 1),
(49, 'Logitech PTZ Pro 2 Video Camera for Conference Rooms, HD 1080p Video with Auto-Focus', 11999.4, 'camera.png', 'camera', 10),
(50, 'Sony MDR-V55 Red Extra Bass & Dj Headphone Without Mic (Black, On the Ear)', 4890.43, 'sony.png', 'headphone', 10),
(51, 'Acer Swift Go 14 EVO OLED Intel Core i5 13th Gen 13500H - (16 GB/512 GB SSD)', 56990, 'Acer-laptop.jpg', 'laptop', 6),
(52, 'ASUS ROG Strix SCAR 16 Intel Core i9 14th Gen 14900HX - (32 GB/2 TB SSD)', 339990, 'ASUS-rog-laptop.jpg', 'laptop', 10),
(53, 'Dell XPS 9530 Intel Core i7 13th Gen 13700H - (32 GB/1 TB SSD)', 279690, 'Dell-XPS-laptop.jpg', 'laptop', 10),
(54, 'Google Pixel 8 pro (Bay, 256 GB) (12 GB RAM)', 105999, 'GooglePixel8.jpg', 'mobile', 10),
(55, 'iQOO 12 5G (Legend, 256GB Storage) (12 GB RAM) Snapdragon® 8 Gen 3', 59990, 'iQOO.webp', 'mobile', 5),
(56, 'OnePlus 12 (Flowy Emerald, 512GB Storage) (16 GB RAM)', 69990, 'OnePlus12.jpg', 'mobile', 5),
(57, 'MI Xiaomi Pad 6 (8 GB RAM) (256 GB ROM) 11.0 inch with Wi-Fi Only Tablet (Graphite Grey)', 28999, 'xiaomi-pad-6-tablet.webp', 'tablet', 10),
(58, 'HONOR Pad 9 (8 GB RAM) (256 GB ROM) 12.1 Inch with free Bluetooth Keyboard (Gray', 24999, 'HONOR9-tablet.jpg', 'tablet', 10),
(59, 'OPPO Pad Air (4 GB RAM) (128 GB ROM) 10.36 inch with Wi-Fi Only Tablet (Grey)', 12899, 'OPPO-tablet.jpg', 'tablet', 10),
(60, 'Panasonic 139 cm (55 inches) Ultra HD (4K) LED Smart Google TV (TH-55MX660DX)', 42990, 'Panasonic-tv.jpg', 'tv', 10),
(61, 'OnePlus 163 cm (65 inches) Q Series 4K Ultra HD QLED Smart Google TV 65 Q2 Pro (Black)', 59990, 'OnePlus-tv.jpg', 'tv', 10),
(62, 'Hisense 164 cm (65 inches) 4K Ultra HD Smart Mini LED QLED TV 65U7K (Black)', 84999, 'Hisense-tv.jpg', 'tv', 0),
(63, 'Lorcan GPS Quadcopter Drone with 4k Camera for Adults, RC Quadcopter', 13340, 'lorcan-drone.jpg', 'drone', 10),
(64, 'NUMOO Drone with 8K Camera, 5GHz FPV Transmission, GPS 3 - Axis, Obstacle Avoidance', 122777, 'DARK-Drone.jpg', 'drone', 10),
(65, 'Panasonic Lumix S5 FullFrame Mirrorless Camera with Lumix S 20-60mm Lens (Body Only)', 109990, 'Panasonic-camera.jpg', 'camera', 10),
(66, 'Canon EOS R5 Full-Frame Mirrorless Camera with 8K Video, 45 MP Full-Frame CMOS Sensor', 479419, 'canon1-camera.jpg', 'camera', 10),
(67, 'NoiseFit Halo 1.43 inch AMOLED Display, Bluetooth Calling Smartwatch (Vintage Brown)', 2799, 'NoiseFit-watch.jpg', 'watch', 10),
(68, 'Amazfit GTR 2 (New Version) 46mm Smart Watch with HD AMOLED Display (Thunder Black)', 7999, 'Amazfit-watch.jpg', 'watch', 10),
(69, 'JBL Partybox Encore Essential | Portable Bluetooth Party Speaker | Built-in Powerbank (Black)', 20990, 'JBL-Speaker.jpg', 'speaker', 10),
(70, 'boAt Stone 1200F with upto 9 Hours Battery, 14 W Bluetooth Speaker (Grey Hound)', 3999, 'boAt-Speaker.jpg', 'speaker', 10),
(71, 'OnePlus Buds 3 TWS Earbuds with 49dB ANC Bluetooth Gaming Headset (Metallic Gray)', 5499, 'OnePlus-buts.jpg', 'headphone', 10),
(72, 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic 40MM Drivers (Hazel Beige)', 1699.67, 'boAt-headphone.jpg', 'headphone', 10),
(73, 'NVIDIA GeForce RTX 4090 Founders Edition Graphics Card 24GB GDDR6X', 279990, 'RTX-4090.jpg', 'graphic', 10),
(74, 'NVIDIA GeForce RTX 3090 Founders Edition Graphics Card, pci_e, GDDR6, 24 GB', 249000, 'rtx-3090.jpg', 'graphic', 10),
(75, 'Zotac Gaming Geforce GTX 1650 Amp Core Gddr6 4Gb 128Bit Pcie 3.0', 13053, 'rtx-1650.jpg', 'graphic', 10),
(76, 'GIGABYTE NVIDIA GeForce RTX 3060 Wind-force Fan 12GB, pci_e_x16, GDDR6', 31770.7, 'rtx-3060.jpg', 'graphic', 10),
(77, 'GALAX PC Case Revolution-06 (REV-06W) White Gaming Cabinet | 4 RGB Cooling Fans', 3899.23, 'Galax-case.jpg', 'cabinet', 7),
(78, 'ASUS ROG Strix Helios GX601 White Edition RGB Mid-Tower Computer Case', 24200.4, 'ASUS-case.jpg', 'cabinet', 10),
(79, 'Antec TORQUE Mid Tower Aluminium Gaming Cabinet | Computer Case', 37930.6, 'Antec-case.jpg', 'cabinet', 10),
(80, 'Fractal Design Torrent Compact White Tempered Glass TG Clear Tint Window', 16919.6, 'Fractal-case.jpg', 'cabinet', 10),
(81, 'AULA F3287 Mechanical | Rainbow Backlight, Anti-ghosting (Gray, White)', 2498, 'AULA-key.jpg', 'keyboard', 10),
(82, 'Ant Esports Gaming Keyboard MK1000 Mechanical Multicolor LED Backlit Keyboard (Black)', 1649.64, 'Ant-key.jpg', 'keyboard', 10),
(83, 'RPM Euro Games Gaming Keyboard Wired | 87 Keys & RGB Backlit (Black)', 699, 'RPM-key.jpg', 'keyboard', 10),
(84, 'Massdrop CTRL Mechanical Keyboard — Tenkeyless TKL (87 Key) Gaming Keyboard', 64090, 'Massdrop-key.jpg', 'keyboard', 10),
(85, 'Kreo (Limited Edition) Chimera Lucid USB Wireless Gaming Mouse (Transparent)', 2999.43, 'Kreo-mous.jpg', 'mouse', 10),
(86, 'Logitech G304 Lightspeed Wireless Gaming Mouse, Hero Sensor, 12,000 DPI (White)', 3095.54, 'Logitech-mouse.jpg', 'mouse', 10),
(87, 'Razer Basilisk V3 Pro Customizable Wired Gaming Mouse -- Classic Black', 11130.7, 'Razer-mouse.jpg', 'mouse', 10),
(88, 'ASUS ROG Spatha X Wireless Gaming Mouse (Magnetic Charging Stand) (Aura RGB Lighting)', 17939.3, 'ASUS-mouse.jpg', 'mouse', 10),
(89, 'GIGABYTE B450M DS3H V2 (AMD Ryzen AM4/USB 3.1/DDR4/Motherboard)', 6210.23, 'GIGABYTE-motherbord.jpg', 'motherboard', 10),
(90, 'MSI PRO H610M-E DDR4 Motherboard, Micro-ATX Supports 14th/13th/12th Gen Intel Core Processors', 6195.54, 'MSI-Motherboard.jpg', 'motherboard', 10),
(91, 'ASUS Pro WS WRX80E-SAGE SE WIFI AMD Threadripper Pro EATX workstation motherboard', 99999.6, 'Asus-motherbord.jpg', 'motherboard', 10),
(92, 'ASUS ROG Maximus Z790 Hero LGA 1700 ATX Motherboard with 20+1 Power Stages', 100420, 'ROG-motherbord.jpg', 'motherboard', 10),
(93, 'Amazon basics 4G LTE Wireless Dongle with All Sim Network Support - Upto 150Mbps', 2699.54, 'amazon-wifi.jpg', 'wifi', 10),
(94, 'ASUS ROG Rapture GT-AX11000 Pro Tri-Band WiFi 6 Extendable Gaming Router', 48299.4, 'ASUS-wifi.jpg', 'wifi', 10),
(95, 'NETGEAR Orbi Whole Home Tri-Band Wi-Fi 6 Mesh System (RBK852), Wi-Fi 6', 70300, 'NETGEAR-wifi.jpg', 'wifi', 10),
(96, 'JioFi M2S Black | 4G Router from Jio | On The Go Device | Video & HD Voice Calls', 2349.53, 'JIO-wifi.jpg', 'wifi', 10),
(97, 'Crucial P3 Plus 1TB PCIe 4.0 3D NAND NVMe M.2 SSD, up to 5000MB/s', 5941, 'Crucial-ssd.jpg', 'ssd', 10),
(98, 'Crucial BX500 240 GB Laptop, Desktop Internal Solid State Drive (SSD) (CT240BX500SSD1)', 1896, 'Crucial1-ssd.jpg', 'ssd', 7),
(99, 'Intel SSD SSDPED1K015TA01 P4800X 1 2Heigh 1.5TB PCIex4 20nm 3D XPoint', 1003960, 'Intel-SSD.jpg', 'ssd', 10),
(100, 'Apple SSD Kit for Mac Pro (8TB) Laptop USB Type C Class 2 SSD', 237288, 'Apple-SSD.jpg', 'ssd', 10),
(101, 'Crucial RAM 16GB DDR5 4800MHz CL40 Desktop Memory CT16G48C40U5 (Black)', 3909, 'Crucial-RAM.jpg', 'RAM', 10),
(102, 'Corsair Vengeance LPX 16GB (1x16GB) DDR4 3200MHZ Desktop RAM (Black)', 3440, 'Corsair-ram.jpg', 'RAM', 10),
(103, 'NEMIX RAM 256GB (2X128GB) DDR5 4800MHZ PC5-38400 4Rx4 ECC RDIMM KIT', 93774.9, 'NEMIX-RAM.jpg', 'RAM', 10),
(104, 'G.SKILL Zeta R5 NEO Series (AMD Expo) DDR5 RAM 192GB (4x48GB) 6400MT/s', 223127, 'G-ram.jpg', 'RAM', 10),
(105, 'GAMDIAS Aura GP550 Atom Series Fully Black Power Supply', 4457.16, 'GAMDIAS-power.jpg', 'power', 10),
(106, 'Ant Esports VS500L NonModular High Efficiency Gaming Power Supply/PSU', 2151, 'Ant-power.jpg', 'power', 10),
(107, 'Seasonic PRIME Ultra Gold 1000W (80+Gold, ATX 12V) PSU/Power Supply', 76605, 'Seasonic-power.jpg', 'power', 10),
(108, '860W Turbo Cool X ATX PSU', 111135, 'Turbo-power.jpg', 'power', 10),
(109, 'Intel Core i5-12400F Upto 4.4 GHz with 6 Cores 12 Threads Desktop Processor (Blue)', 9998, 'Intel-processor.jpg', 'processor', 10),
(110, 'AMD Ryzen 3 3200G with RadeonVega 8 Graphics Desktop Processor up to 4GHz', 5829, 'AMD-processor.jpg', 'processor', 10),
(111, 'Intel® Core™ i9-14900KS Desktop Processor 24 cores / 32 Thread (8 P-cores & 16 E-cores)', 68099, 'Intel1-processor.jpg', 'processor', 10),
(112, 'AMD 7000 Series Ryzen 9 7950X 3D Desktop Processor 16 cores 32 Threads (4.2 GHz Upto 5.7 GHz)', 58999, 'AMD1-processor.jpg', 'processor', 10),
(113, 'LG 27SR50F MyView Smart Monitor (68.6cm) FHD IPS Display (1920 x 1080) with webOS', 16990, 'LG-monotor.jpg', 'monitor', 10),
(114, 'SAMSUNG 32 inch M80C UHD HDR Smart Computer Monitor Screen with Streaming TV', 55634.6, 'Samsung-monitor.jpg', 'monitor', 10),
(115, 'DELL Alienware 27 Gaming Monitor AW2721D 240Hz, 27 inches, (2560 x 1440) - White', 108343, 'Dell-monitor.jpg', 'monitor', 10),
(116, 'Apple Pro Display XDR (32-inch with Retina 6K Display, Standard Glass)', 519900, 'apple-monitor.jpg', 'monitor', 10),
(117, 'Acer ALG Intel Core i5 12th Gen 12450 Gaming Laptop (16GB RAM/512GB SSD/6GB RTX 3050 Graphics)', 62990, 'acer-alg-laptop.jpeg', 'laptop', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
