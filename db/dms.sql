-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 12:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `ID` int(11) NOT NULL,
  `Asset_No` int(11) NOT NULL,
  `Asset_Type` varchar(512) DEFAULT NULL,
  `Asset_Brand` varchar(512) DEFAULT NULL,
  `Asset_Model` varchar(512) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `OS_Version` varchar(512) DEFAULT NULL,
  `Asset_SerialNo` varchar(512) DEFAULT NULL,
  `Auto_Update` varchar(512) DEFAULT NULL,
  `Asset_Ownership` varchar(512) DEFAULT NULL,
  `Asset_Location` varchar(512) DEFAULT NULL,
  `Asset_Availability` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`ID`, `Asset_No`, `Asset_Type`, `Asset_Brand`, `Asset_Model`, `Year`, `OS_Version`, `Asset_SerialNo`, `Auto_Update`, `Asset_Ownership`, `Asset_Location`, `Asset_Availability`) VALUES
(893, 1, 'TV', 'SAMSUNG', 'SAMSUNG 32\"/ UA32T4350BKXXL', 2022, 'Tyzen os /T-KTS2UABC-2400.9', '4TUB39BT509777H', 'Disabled', 'LTIM', 'India', 'Available'),
(894, 2, 'TV', 'SAMSUNG', 'SAMSUNG 32\"/ UA32T4350BKXXL', 2020, 'Tyzen os /T-KTS2UABC-2400.9', '4TUB39BTB09893V', 'Disabled', 'LTIM', 'India', 'Available'),
(895, 3, 'TV', 'SAMSUNG', 'SAMSUNG 43\" / UA43AUE65AKXXL', 2020, 'Tyzen/T-KSU2EUABC-2130.8,BT-S', '5EZB36TW205160J', 'Disabled', 'LTIM', 'India', 'Available'),
(896, 4, 'TV', 'SAMSUNG', 'SAMSUNG 43\" / UA43AUE60AKLXL', 2021, 'Tyzen/T-KSU2EUABC-2130.8', '0ALG3PAW204470P', 'Disabled', 'LTIM', 'India', 'Available'),
(897, 5, 'TV', 'SAMSUNG', 'SAMSUNG 43\" / UA43TE50FAKXXL', 2021, 'Tyzen/T-KTS2UABC-2400.9,BT-S', '0AX836TT401367P', 'Disabled', 'LTIM', 'India', 'Available'),
(898, 6, 'TV', 'SAMSUNG', 'SAMSUNG 43\" / UA43AUE65AKXXL', 2020, 'Tyzen/T-KSU2EUABC-2112.0,BT-S', '5EZB36TW305869T', 'Disabled', 'LTIM', 'India', 'Available'),
(899, 7, 'TV', 'SAMSUNG', 'SAMSUNG 43\" / UA43AUE60AKLXL', 2021, 'Tyzen/T-KSU2EUABC-2130.8', 'OALG3PAW203655W', 'Disabled', 'LTIM', 'India', 'Available'),
(900, 8, 'TV', 'LG', 'LG 43\" / 43UM7790PTA', 2021, 'Web-os/ v-05.30.30', '303PLVC162807', 'Disabled', 'LTIM', 'India', 'Available'),
(901, 9, 'TV', 'LG', 'LG 32\" / 32LQ570BPSA', 2019, 'Web-os/ v-03.30.73', '301PLSY156342', 'Disabled', 'LTIM', 'India', 'Available'),
(902, 10, 'TV', 'LG', 'LG 43\" / 43UQ7500PSF', 2023, 'Web-os/ v-03.30.71', '302PLQN114900', 'Disabled', 'LTIM', 'India', 'Available'),
(903, 11, 'TV', 'LG', 'LG 32\" / 32LM560BPTC', 2023, 'Web-os/ v-05.30.25', '007PLGE174151', 'Disabled', 'LTIM', 'India', 'Available'),
(904, 12, 'TV', 'LG', 'LG 43\" / 43LM5600PTC', 2023, 'Web-os/ v-05.30.25', '302PLNB163967', 'Disabled', 'LTIM', 'India', 'Available'),
(905, 13, 'TV', 'LG', 'LG 32\" / 32LM560BPTC', 2020, 'Web-os/ v-05.30.25', '301PLWR197033', 'Disabled', 'LTIM', 'India', 'Available'),
(906, 14, 'TV', 'SONY', 'Sony Bravia 32\" / KD-32W820K', 2023, 'Android TV OS - 11', 'qaezcxxq07006075', 'Auto Update disable unavailable', 'LTIM', 'India', 'Available'),
(907, 15, 'TV', 'HISENSE', 'Hisense VIDAA 55\" / 55U7H', 2022, 'V0000.06.20T.M1220', '3TE55G22403P01BFQA50185', 'Disabled', 'LTIM', 'India', 'Available'),
(908, 16, 'TV', 'HISENSE', 'Hisense VIDAA 55\" / 55U7H', 2021, 'V0000.06.20T.M1221', '3TE55G22354C01B6JA50087', 'Disabled', 'LTIM', 'India', 'Available'),
(909, 17, 'TV', 'HISENSE', 'Hisense VIDAA 55\" / 55U7H', 2021, 'V0000.06.20T.M122O', '3TE55G22522K01ABNA50062', 'Disabled', 'LTIM', 'India', 'Available'),
(910, 18, 'MOBILE', 'SAMSUNG', 'SAMSUNG Galaxy  / S21 FE 5G', 0, '', 'RZCW112AT5K', '', 'LTIM', 'India', 'Available'),
(911, 19, 'MOBILE', 'SAMSUNG', 'SAMSUNG Galaxy  / A14 5G', 0, 'Android Version- 13', 'RZCW308LA0W', 'Disabled', 'LTIM', 'India', 'Available'),
(912, 20, 'MOBILE', 'SAMSUNG', 'SAMSUNG Galaxy / M04', 2023, 'android version- 13', 'R9ZW20G11GE', 'Disabled', 'LTIM', 'India', 'Available'),
(913, 21, 'MOBILE', 'SAMSUNG', 'SAMSUNG Galaxy /M32', 2023, 'Android Version- 13', 'RZ8W2040GQR', 'Disabled', 'LTIM', 'India', 'Available'),
(914, 22, 'MOBILE', 'ONEPLUS', 'ONEPLUS Nord / CE 2 LITE 5G', 2023, 'Android Versiono-13', 'A9B4D3C3', 'Disabled', 'LTIM', 'India', 'Available'),
(915, 23, 'TAB', 'IKAL', 'I KALL / N7', 0, 'android version- 6.0', '0123456789ABCDEF', 'Auto Update disable unavailable', 'LTIM', 'India', 'Available'),
(916, 24, 'TAB', 'IKAL', 'I KALL / N7', 2023, 'android version- 6.0', '0123456789ABCDEF', 'Auto Update disable unavailable', 'LTIM', 'India', 'Available'),
(917, 25, 'TAB', 'LENOVO', 'LENOVO / M8', 2023, 'android version- 10', 'HA1Q3805', 'Disabled', 'LTIM', 'India', 'Available'),
(918, 26, 'TAB', 'LENOVO', 'LENOVO / M8', 2022, 'android version- 11', 'HNPOG8GK', 'Disabled', 'LTIM', 'India', 'Available'),
(919, 27, 'TAB', 'LENOVO', 'LENOVO / M10', 2022, 'android version- 10', 'HGAMVMZC', 'Disabled', 'LTIM', 'India', 'Available'),
(920, 28, 'CASTING DEVICE', 'GOOGLE CHROMECAST', 'Google CHROMECAST / NC2-6A5', 2022, 'android version - 12', '1416ADQL3T0', 'Auto-Disable Unavailable', 'LTIM', 'India', 'Available'),
(921, 29, 'CASTING DEVICE', 'GOOGLE CHROMECAST', 'Google CHROMECAST / GZRNL', 2021, 'android version - 12', '27131HFDD77CZB', 'Auto- Disable Unavailable', 'LTIM', 'India', 'Available'),
(922, 32, 'MOBILE', 'APPLE', 'APPLE iphone 12 64gb / MGJ53HN/A', 2017, 'ios version 16.5', 'HT2W6500F0N', 'Disabled', 'LTIM', 'India', 'Available'),
(923, 33, 'MOBILE', 'APPLE', 'APPLE iphone 12 256gb / MJNQ3HN/A', 2020, 'ios version 16.4.1', 'N32V746JY', 'Disabled', 'LTIM', 'India', 'Available'),
(924, 34, 'IPAD', 'APPLE', 'APPLE ipad Air/ MM713HN/A', 2020, 'iPadOS Version 16', 'CPQVMJFYH5', 'Disabled', 'LTIM', 'India', 'Available'),
(925, 35, 'IPAD', 'APPLE', 'APPLE ipad Air/ A2588', 2022, 'iPadOS Version 16.2', 'LFMJXM6HX2', 'Disabled', 'LTIM', 'India', 'Available'),
(926, 36, 'IPAD', 'APPLE', 'APPLE ipad Pro / MNXU3HN/A', 2022, 'iPadOS 16.1.1', 'JV21QK27X9', 'Disabled', 'LTIM', 'India', 'Available'),
(927, 37, 'IPAD', 'APPLE', 'APPLE ipad Pro / MNXU3HN/A', 2022, 'ipadOS 16.4.1', 'G29G3HDCJG', 'Disabled', 'LTIM', 'India', 'Available'),
(928, 38, 'STREAMING DEVICE', 'APPLE', 'APPLE TV / MXGY2LL/A', 2021, 'AppleTV-OS16.5(20L563)', 'K24XG6LXYQ', 'Disabled', 'LTIM', 'India', 'Available'),
(929, 39, 'STREAMING DEVICE', 'APPLE', 'APPLE TV / MHY93HN/A', 2021, 'AppleTV-OS16.4.1(20L498)', 'CO7FMCV40FNL', 'Disabled', 'LTIM', 'India', 'Available'),
(930, 40, 'STREAMING DEVICE', 'APPLE', 'APPLE TV / MY93HN/A', 2021, 'AppleTV-OS16.5(20L563)', 'CO7G95WCOFNL', 'Disabled', 'LTIM', 'India', 'Available'),
(931, 41, 'LAPTOP', 'APPLE', 'APPLE MAC Book Pro / A2442', 0, 'macOS Ventura Version 13.0', 'YXWTGH6T7M', 'Disabled', 'LTIM', 'India', 'Available'),
(932, 42, 'LAPTOP', 'APPLE', 'APPLE MAC Book Pro / A2442', 2022, 'macOs Ventura Version 13.4', 'R0J20J1704', 'Disabled', 'LTIM', 'India', 'Available'),
(933, 43, 'LAPTOP', 'APPLE', 'APPLE MAC Book Pro / A2442', 2022, '', 'FMVQ66RWPM', 'Disabled', 'LTIM', 'India', 'Available'),
(934, 44, 'LAPTOP', 'APPLE', 'APPLE MAC Book Pro / A2442', 2022, 'macOS Ventura Version 13.0', 'DT9Q2MQHQN', 'Disabled', 'LTIM', 'India', 'Available'),
(935, 45, 'LAPTOP', 'APPLE', 'APPLE MAC Book Pro / A2442', 2022, 'macOS Ventura Version 13.4', 'W1QKXRKDOQP', 'Disabled', 'LTIM', 'India', 'Available'),
(936, 46, 'TAB', 'AMAZON', 'AMAZON / Fire HD 8 (12gen)', 2022, 'Fire OS 8.3.1.8', 'GCC1XE03229401LV', 'Auto-Update Disable Unavailable', 'LTIM', 'India', 'Available'),
(937, 47, 'TAB', 'AMAZON', 'AMAZON / Fire HD 8 (12gen)', 0, 'Fire OS 8.3.1.9', 'GCC1XE0323550NRD', 'Auto-Update Disable Unavailable', 'LTIM', 'India', 'Available'),
(938, 48, 'STREAMING DEVICE', 'AMAZON', 'AMAZON / FIRE TV stick 4K 3rd Gen', 0, 'Fire OS 6.2.9.7', 'G070VM2421231EXK', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(939, 49, 'STREAMING DEVICE', 'AMAZON', 'AMAZON / FIRE TV stick 4K 3rd Gen', 2022, 'Fire OS 6.2.9.7', 'G070VM2421231E8G', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(940, 50, 'STREAMING DEVICE', 'AMAZON', 'AMAZON / FIRE TV stick 4K 3rd Gen', 2022, 'Fire OS 6.2.9.7', 'G070VM25233305W1', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(941, 51, 'STREAMING DEVICE', 'AMAZON', 'AMAZON / FIRE TV stick 4K 3rd Gen', 2022, 'Fire OS 6.2.9.7', 'G070VM2421231F7N', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(942, 52, 'STREAMING DEVICE', 'AMAZON', 'AMAZON / FIRE TV stick 4K 3rd Gen', 2022, 'Fire OS 5.2.9.4', 'G070L80971242X1P', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(943, 53, 'STREAMING DEVICE', 'MI', 'Mi Box androidtv 4K/ MDZ-22-AG', 0, 'Android Version 9', '33498/800000198279', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(944, 54, 'STREAMING DEVICE', 'ROKU', 'ROKU Streaming Stick/ 3821X', 2022, 'Roku OS version-12.0.0.build 4184-CU', 'X01700CP6WAT', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(945, 55, 'STREAMING DEVICE', 'ROKU', 'ROKU Streaming Stick/ 3821X', 0, 'Roku OS version-12.0.0.build 4184-CU', 'S09T421PG53U', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(946, 56, 'STREAMING DEVICE', 'ROKU', 'ROKU Streaming Stick/ 3821X', 0, 'Roku OS version-12.0.0.build 4184-CU', 'S09T4215CUN8', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(947, 57, 'TV', 'LG', 'LG42\" / 43UQ7500PSF', 0, 'Web OS 03.30.71', '303PLSY120022', 'Disabled', 'LTIM', 'India', 'Available'),
(948, 58, 'STREAMING DEVICE', 'ROKU', 'ROKU Streambar 4K HD', 2023, 'Roku OS version-12.0.0.build 4184-95', '2A1182160662', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(949, 59, 'STREAMING DEVICE', 'ROKU', 'ROKU Ultra', 0, 'Roku OS version-12.0.0.build 4184-C2', 'S0DA2260F6XG', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(950, 60, 'STREAMING DEVICE', 'ROKU', 'ROKU  streaming stick 4k', 0, 'Roku OS version-12.0.0.build 4184-CU', 'S08Y42651840', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(951, 61, 'STREAMING DEVICE', 'ROKU', 'ROKU  streaming stick 4k', 0, 'Roku OS version-12.0.0.build 4184-CU', 'S08Y4261RDK1', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(952, 62, 'MOBILE', 'APPLE', 'APPLE IPHONE 8-64gb/ MQ6M2HN/A', 0, 'ios Version 16.0.2', 'F4GX3PZZJC6F', 'disabled', 'LTIM', 'India', 'Available'),
(953, 63, 'MOBILE', 'APPLE', 'APPLE IPHONE Xs-64 GB/MT9E2HN/A', 2019, 'ios Version 16.1.1', 'C39XHL2CKPG1', 'Disabled', 'LTIM', 'India', 'Available'),
(954, 64, 'MOBILE', 'APPLE', 'APPPLE IPHONE 12 X-64GB/MQA52HN/A', 2018, '', 'FK1XTLCRJCLF', 'Disable unavailable', 'LTIM', 'India', 'Available'),
(955, 65, 'TAB', 'IKALL', 'IKALL/ N7', 0, 'android version- 6.0', '0123456789ABCDEF', 'Disable unavailable', 'LTIM', 'India', 'Available'),
(956, 66, 'STREAMING DEVICE', 'AMAZON', 'AMAZON / FIRE TV stick 3rd Gen', 2023, 'Fire OS 7.6.3.3', 'GEB1TX11142406LT', '', 'LTIM', 'India', 'Available'),
(957, 67, 'TAB', 'SAMSUNG', 'Galaxy tab A7 Lite', 2021, 'android version 13', 'R9PW30J974N', 'Disabled', 'LTIM', 'India', 'Available'),
(958, 68, 'TAB', 'SAMSUNG', 'Galaxy tab A7 Lite', 2023, 'android version 13', 'R9PW30J8XAR', 'Disabled', 'LTIM', 'India', 'Available'),
(959, 69, 'TV', 'VIZIO', 'VIZIO D40F-J09', 2023, '3.520.28.1-2', 'LINID4MY0614700', 'Auto Update disable unavailable', 'LTIM', 'India', 'Available'),
(960, 70, 'TV', 'VIZIO', 'VIZIO D40F-J09', 2023, '3.520.28.1-2', 'LINID4PY4327579', 'Auto Update disable unavailable', 'LTIM', 'India', 'Available'),
(961, 71, 'TV', 'VIZIO', 'VIZIO D40F-J09', 2023, '3.520.28.1-2', 'LINID4PY4414919', 'Auto Update disable unavailable', 'LTIM', 'India', 'Available'),
(962, 72, 'TV', 'VIZIO', 'VIZIO M43Q6-JO4', 2023, '1.520.24.2-2', 'LBVAG5LY5104353', 'Auto Update disable unavailable', 'LTIM', 'India', 'Available'),
(963, 73, 'TV', 'VIZIO', 'VIZIO M43Q6-JO4', 2023, '1.520.24.2-2', 'LBVAG5KX4805035', 'Auto Update disable unavailable', 'LTIM', 'India', 'Available'),
(964, 77, 'VR', 'META QUEST 2', '', 0, '', '', '', 'LTIM', 'India', 'Available'),
(965, 125, 'XBOX', 'XBOX ONE S', '1681', 0, '10.0.22621.4480', '6024284816', '', 'LTIM', 'India', 'Available'),
(966, 126, 'XBOX', 'XBOX ONE S', '', 0, '10.0.22621.4912', '6.10884E+11', 'Disabled', 'LTIM', 'India', 'Available'),
(967, 127, 'XBOX', 'XBOX SERIES S', '1681', 0, '10.0.22621.4480', '6350785016', 'Disabled', 'LTIM', 'India', 'Available'),
(968, 131, 'STREAMING DEVICE', 'Roku', 'Roku Express HD', 2021, '12.0.0 build 4184-AE', 'S008315YKYRM', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(969, 132, 'STREAMING DEVICE', 'Roku', 'Roku Streaming stick/4k+', 2022, '12.0.0 build 4184-E6', 'S0JD333G9CY9', 'Disable Unavailable', 'LTIM', 'India', 'Available'),
(970, 134, 'STREAMING DEVICE', 'Roku', 'Roku Premiere HD 4k', 2021, '', 'X0018018K5', '', 'LTIM', 'India', 'Available'),
(971, 146, 'TV', 'Sony', 'Sony Bravia 32\" / KD-32W820K', 2023, 'Android TV OS - 11', 'qaezcxxq07008464', 'Auto-Update disable Unavailable', 'LTIM', 'India', 'Available'),
(972, 147, 'TV', 'Sony ', 'Sony Bravia 32\" / KD-32W820K', 2023, 'Android TV OS - 11', 'qaezcxxq07008455', 'Auto-Update disable Unavailable', 'LTIM', 'India', 'Available'),
(973, 148, 'TV', 'Sony', 'Sony Bravia 32\" / KD-32W820K', 2023, 'Android TV OS - 11', 'qaezcxxq07008466', 'Auto-Update disable Unavailable', 'LTIM', 'India', 'Available'),
(974, 149, 'TV', 'Vizio TV (V-Series)', 'VIZIOCastDisplay8796/V435-J01', 2021, '1.520.24.2-2', 'LTC5E6VY4652999', 'Auto-Update disable Unavailable', 'LTIM', 'India', 'Available'),
(975, 150, 'TV', 'Vizio TV (V-Series)', 'VIZIOCastDisplay2430/V435-J01', 2021, '1.510.24.2-1', '42LTC5E6VY56322', 'Auto-Update disable Unavailable', 'LTIM', 'India', 'Available'),
(976, 151, 'Tv', 'Vizio TV (V-Series)', 'VIZIOCastDisplay2944/V435-J01', 2021, '1.520.24.2-2', 'LTC5E6VY3951424', 'Auto-Update disable Unavailable', 'LTIM', 'India', 'Available'),
(977, 152, 'STREAMING DEVICE', 'AMAZON', 'AMAZON / FIRE TV stick 4K 3rd Gen', 2022, 'Fire OS 6.2.8.9 (NS6289/3905)', 'G070VM25234309BA', 'Auto-Update disable Unavailable', 'LTIM', 'India', 'Available'),
(978, 153, 'STREAMING DEVICE', 'AMAZON', 'AMAZON / FIRE TV stick 4K 3rd Gen', 2022, 'Fire OS 6.2.9.7 (NS6297/4655)', 'G070VM2523330PDU', 'Auto-Update disable Unavailable', 'LTIM', 'India', 'Available'),
(979, 154, 'STREAMING DEVICE', 'AMAZON', 'AMAZON / FIRE TV stick 4K 3rd Gen', 2022, '', 'GO70VM2523240F5P', '', 'LTIM', 'India', 'Available'),
(980, 155, 'STREAMING DEVICE', 'ROKU ', 'ROKU Express HD', 2018, '', 'C43959222915', '', 'LTIM', 'India', 'Available'),
(981, 173, 'CASTING DEVICE', 'GOOGLE CHROMECAST', 'Google CHROMECAST / NC2-6A5', 2022, '', '21191HFADND2EM', '', 'LTIM', 'India', 'Available'),
(982, 174, 'STREAMING DEVICE', 'Roku', 'ROKU EXPRESS HD', 2022, '', 'SOKD32CAR100', '', 'LTIM', 'India', 'Available'),
(983, 175, 'STREAMING DEVICE', 'Roku', 'ROKU ', 0, '', 'JF288C903960', '', 'LTIM', 'India', 'Available'),
(984, 176, 'STREAMING DEVICE', 'AMAZON', 'AMAZON FIRE TV STICK', 2023, 'Fire OS 5.2.8.8 (676742620)', 'G070L809722213XC', 'Auto Update Disabled', 'LTIM', 'India', 'Available'),
(985, 177, 'CASTING DEVICE', 'GOOGLE CHROMECAST', 'Google CHROMECAST/GL0402', 0, '', '19451C0540572G', '', 'LTIM', 'India', 'Available'),
(986, 178, 'STREAMING DEVICE', 'ROKU ', 'Roku Premiere HD 4K HDR', 2022, '12.0.0 build 4184-91', 'JF528J898087', 'Autoupdate not available', 'LTIM', 'India', 'Available'),
(987, 179, 'STREAMING DEVICE', 'ROKU ', 'Roku Premiere HD 4K HDR', 2022, '12.0.0 build 4184-91', 'JF528V864775', '', 'LTIM', 'India', 'Available'),
(988, 180, 'STREAMING DEVICE', 'ROKU', 'Roku Premiere HD 4K HDR', 2022, '12.0.0 build 4184-91', 'JF528R216792', 'Autoupdate not available', 'LTIM', 'India', 'Available'),
(989, 181, 'STREAMING DEVICE', 'ROKU', 'Roku Premiere HD 4K HDR', 2022, '12.0.0 build 4184-91', 'JF528V028701', 'Autoupdate not available', 'LTIM', 'India', 'Available'),
(990, 182, 'STREAMING DEVICE', 'ROKU', 'Roku Premiere HD 4K HDR', 2022, '12.0.0 build 4184-91', 'JF528Y999637', 'Autoupdate not available', 'LTIM', 'India', 'Available'),
(991, 183, 'CASTING DEVICE', 'GOOGLE CHROMECAST', 'Google CHROMECAST/NC2-6A5', 2022, '', '21271HFGU35GNV', '', 'LTIM', 'India', 'Available'),
(992, 184, 'STREAMING DEVICE', 'APPLE', 'APPLE TV 4K', 2018, 'tvOS 13.4.8(17M61)', 'DY5DVNKDJ1WF', 'Autoupdate disabled', 'LTIM', 'India', 'Available'),
(993, 185, 'STREAMING DEVICE', 'ROKU', 'Roku Express HD 4K +', 2022, '', 'S0HCK2AWXSEM', '', 'LTIM', 'India', 'Available'),
(994, 186, 'CASTING DEVICE', 'GOOGLE CHROMECAST', 'Google CHROMECAST', 0, '', '', '', 'LTIM', 'India', 'Available'),
(995, 187, 'TV', 'LG', 'LG TV/ UQ9000PUD', 2022, '03.30.68', '301MXMT70787', 'Auto Update disabled', 'LTIM', 'India', 'Available'),
(996, 188, 'TV', 'TCL ', 'TCL/ S455', 2022, 'OS 12.0.0  build 4190-CG', 'X01200X38JV9', 'Auto update unavailable', 'LTIM', 'India', 'Available'),
(997, 189, 'TV', 'SAMSUNG', 'SAMSUNG/UN32M4500BFXZA', 2021, 'T-KTS2AKUC-2085.2', 'BZ8434SR719302', 'Auto Update disabled', 'LTIM', 'India', 'Available'),
(998, 190, 'TV', 'TCL ', 'TCL/ S355', 2022, '12.0.0 build 4182-DD', 'X020000E8RPA', 'Auto update unavailable', 'LTIM', 'India', 'Available'),
(999, 191, 'TV', 'SAMSUNG', 'SAMSUNG/UN32M4500BF', 2018, 'T-KTS2AKUC-2401.0', 'BZ8434ST501362', 'Auto update disabled', 'LTIM', 'India', 'Available'),
(1000, 192, 'TV', 'LG', 'LG/32LM577BZUA', 2022, '05.30.40', '208MXTCD8969', 'Auto update disabled', 'LTIM', 'India', 'Available'),
(1001, 193, 'TV', 'VIZIO', 'VIZIO/M43Q6-K04', 2022, '1.520.23.2-2', '52LBVAG5KX08874', 'Auto update unavailable', 'LTIM', 'India', 'Available'),
(1002, 194, 'TV', 'SAMSUNG', 'SAMSUNG/UN32M4500BFXZA', 2022, 'T-KTS2AKUC-2401.0', 'BZ8434ST501101R', 'Auto update disabled', 'LTIM', 'India', 'Available'),
(1003, 195, 'TV', 'SAMSUNG', 'SAMSUNG/UN32M4500BFXZA', 2017, 'T-KTS2AKUC-2401.0', 'BZ8434SR700075N', 'Auto update disabled', 'LTIM', 'India', 'Available'),
(1004, 196, 'TV', 'HISENSE', 'Hisense VIDAA 40\" /40A4GV', 2023, 'V0000.06.12G.NO408', '40G22536JH06296', 'Auto Update disabled', 'LTIM', 'India', 'Available'),
(1005, 197, 'TV', 'SAMSUNG', 'SAMSUNG/UN40N5200AFXZA', 2020, 'T-KTS2AKUC-2401.0', '095N3CENA04095W', 'Auto update disabled', 'LTIM', 'India', 'Available'),
(1006, 198, 'TV', 'TOSHIBA', 'TOSHIBA/43C350KU', 2023, 'Fire OS 7.6.4.6', '43N225327H10372', 'Auto update unavailable', 'LTIM', 'India', 'Available'),
(1007, 199, 'TV', 'SAMSUNG', 'SAMSUNG/UN40N5200AF', 2018, 'T-KTS2AKUC-2401.0', '095N3CPW109263T', 'Auto update disabled', 'LTIM', 'India', 'Available'),
(1008, 200, 'STREAMING DEVICE', 'AMAZON', 'AMAZON/ FIRE TV STICK', 0, '', '', '', 'LTIM', 'India', 'Available'),
(1009, 201, 'MOBILE', 'APPLE', 'APPLE/iPhone XR', 0, '', 'DX4D2DHUKXKN', '', 'LTIM', 'India', 'Available'),
(1010, 202, 'TV', 'LG', 'LG/55UP7500PTZ', 2022, '03.21.30', '203PLMB122879', 'Disabled', 'LTIM', 'India', 'Available'),
(1011, 203, 'MOBILE', 'APPLE', 'APPPLE IPHONE 7  32GB', 0, '', '', '', 'LTIM', 'India', 'Available'),
(1012, 204, 'TAB', 'AMAZON', 'AMAZON / Fire HD 8 (9th gen)', 0, '', '', '', 'LTIM', 'India', 'Available'),
(1013, 205, 'STREAMING DEVICE', 'TIVO', 'TIVO EDGE / 6 TUNERS 2TB Storage', 0, '', 'MV2111VN2129', '', 'LTIM', 'India', 'Available'),
(1014, 206, 'TV', 'HISENSE', 'Hisense Android 32\" /32A4H', 0, '', '', '', 'LTIM', 'India', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `ps_no` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `grade` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `LTIM_mail` varchar(255) NOT NULL,
  `Pluto_mail` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `ps_no`, `firstname`, `lastname`, `gender`, `dob`, `grade`, `role`, `contact`, `address`, `LTIM_mail`, `Pluto_mail`, `status`) VALUES
(118, '10684245', 'Abhinash', 'Malakar', 'Male', '2000-04-03', 'P1', 'Quality Engineer', '7005341668', 'India', '', '', 'Active'),
(119, '61083101', 'Aishwarya', 'T', 'Female', '2001-06-16', 'ED1', 'Associate Trainee', '9345335921', 'India', '', '', 'Active'),
(120, '61082963', 'Arun ', 'E M', 'Male', '2000-03-06', 'ED1', 'Associate Trainee', '9074547020', 'India', '', '', 'Active'),
(121, '10723370', 'Balaji ', 'Sengamalai', 'Male', '1970-01-01', 'M4', 'Senior Manager - Program & Project Management', '8056028555', 'India', '', '', 'Active'),
(122, '61076499', 'Bandaru ', 'Sunitha', 'Female', '2001-04-14', 'ED1', 'Associate Trainee', '8919129906', 'India', '', '', 'Active'),
(123, '61076498', 'Barsharani', 'Mantry', 'Female', '2001-03-10', 'ED1', 'Associate Trainee', '7682874837', 'India', '', '', 'Active'),
(124, '10721485', 'Bharath', 'Manikandan', 'Male', '1990-02-08', 'P3', 'Specialist- Quality Engineering', '9789365739', 'India', '', '', 'Active'),
(125, '10714004', 'BhavaniSivaSai', 'Betanabhotla', 'Male', '2001-04-24', 'P1', 'Software Engineer', '7893831572', 'India', '', '', 'Active'),
(126, '61083106', 'Chinnapatla', 'Rishika', 'Female', '1999-12-25', 'ED1', 'Associate Trainee', '9908624135', 'India', '', '', 'Active'),
(127, '10714082', 'Dhaanvaanth', 'Sundar', 'Male', '2001-09-14', 'P1', 'Software Engineer', '9487403709', 'India', '', '', 'Active'),
(128, '10717992', 'Dhinakaran', 'Thiruganasekar', 'Male', '1996-05-20', 'P2', 'Senior Quality Engineer', '9003818291', 'India', '', '', 'Active'),
(129, '61094973', 'Divya', 'K', 'Female', '2002-04-28', 'ED0', 'Graduate Apprentice', '7823998538', 'India', '', '', 'Active'),
(130, '10712048', 'Divya', 'Marikanti', 'Female', '2001-07-05', 'P2', 'Senior Software Engineer', '7095527018', 'India', '', '', 'Active'),
(131, '10714157', 'Enukonda', 'Sri', 'Female', '2002-10-18', 'P1', 'Software Engineer', '9346053671', 'India', '', '', 'Active'),
(132, '61070393', 'Gaja Meenakshi', 'Ramarajagopal', 'Female', '1999-08-21', 'P1', 'Quality Engineer', '9626866302', 'India', '', '', 'Active'),
(133, '10723999', 'Gobi', 'Pandurangan', 'Male', '1970-10-16', 'M4', 'Senior Manager-Program & Project Management', '9884088403', 'India', '', '', 'Active'),
(134, '61083043', 'Gokul', 'Gopalakrishnan', 'Male', '1970-01-01', 'ED1', 'Associate Trainee', '', 'India', '', '', 'Active'),
(135, '61083071', 'Helen ', 'Jenifer', 'Female', '2001-04-04', 'ED1', 'Associate Trainee', '6385596792', 'India', '', '', 'Active'),
(136, '10702882', 'Jeba', 'Kumar', 'Male', '1999-10-25', 'P1', 'Software Engineer', '7092070266', 'India', '', '', 'Active'),
(137, '10721527', 'Jenith babu ', 'Shanmugam', 'Male', '1987-09-14', 'P3', 'Specialist - Quality Engineering', '9003383138', 'India', '', '', 'Active'),
(138, '61083052', 'Kalaiarasi', 'L', 'Female', '2001-02-05', 'ED1', 'Associate Engineer', '6379165353', 'India', '', '', 'Active'),
(139, '61082944', 'Kavana', 'KS', 'Female', '1999-07-13', 'ED1', 'Associate Engineer', '8431184348', 'India', '', '', 'Active'),
(140, '10637846', 'Latha Baburao', 'Jadhav', 'Female', '1970-01-01', 'P4', 'Senior Specialist - Quality Engineering', '9967240708', 'India', '', '', 'Active'),
(141, '10699195', 'Manesh', 'Lokare', 'Male', '1997-05-10', 'P1', 'Software Engineer', '7057933124', 'India', '', '', 'Active'),
(142, '10717722', 'Mohanraj', 'I', 'Male', '1991-07-15', 'P2', 'Senior Quality Engineer', '9344023817', 'India', '', '', 'Active'),
(143, '10698902', 'Narapureddy', 'Sree', 'Female', '1999-05-25', 'P1', 'Software Engineer', '8919593780', 'India', '', '', 'Active'),
(144, '61083051', 'Patan', 'Gulshan', 'Female', '2000-07-20', 'ED1', 'Associate Engineer', '7893404843', 'India', '', '', 'Active'),
(145, '10692788', 'Praveen', 'Raj', 'Male', '2000-07-06', 'P1', 'Software Engineer', '9087190998', 'India', '', '', 'Active'),
(146, '61084168', 'Rajalaxmi', 'K', 'Female', '2000-01-01', 'P1', 'Quality Engineer', '6374423445', 'India', '', '', 'Active'),
(147, '10713174', 'Rajesh Kumar', 'Nagaraj', 'Male', '1995-03-31', 'P2', 'Senior Quality Engineer', '9363325773', 'India', '', '', 'Active'),
(148, '61094971', 'Ramyanjali', 'ramyanjali', 'Female', '2001-10-17', 'ED0', 'Graduate Apprentice', '8778208473', 'India', '', '', 'Active'),
(150, '10714054', 'Sanjay', 'Kumar', 'Male', '2002-05-10', 'P1', 'Software Engineer', '6383833862', 'India', '', '', 'Active'),
(151, '61094860', 'Sanjeevi', 'T', 'Female', '2001-07-13', 'ED0', 'Graduate Apprentice', '6385691371', 'India', '', '', 'Active'),
(152, '10723101', 'Sathasivam ', 'Thamizhselvam', 'Male', '1995-11-15', 'P2', 'Senior Quality Engineer', '8056547299', 'India', '', '', 'Active'),
(153, '61094862', 'Sathya ', 'Selvam', 'Female', '2002-01-21', 'ED0', 'Graduate Apprentice', '7603837921', 'India', '', '', 'Active'),
(154, '10711351', 'SHAIK', 'SARFRAZ', 'Male', '2000-07-13', 'P1', 'Software Engineer', '9866552663', 'India', '', '', 'Active'),
(155, '61076414', 'Shaik Mohammad ', 'Ismail', 'Male', '1999-03-30', 'ED1', 'Associate Trainee', '9014060182', 'India', '', '', 'Active'),
(156, '61094981', 'Sonam ', 'Priya', 'Female', '1999-08-20', 'ED0', 'Graduate Apprentice', '9031291280', 'India', '', '', 'Active'),
(157, '61094907', 'Sumithra', 'T', 'Female', '2002-07-30', 'ED0', 'Graduate Apprentice', '9788926653', 'India', '', '', 'Active'),
(158, '10710702', 'Sundar rajan', 'S', 'Female', '1996-09-08', 'P2', 'Senior Quality Engineer', '8148581590', 'India', '', '', 'Active'),
(159, '10709580', 'Suriyakumar', 'Chandrasekaran', 'Male', '1970-01-01', 'M5', 'Associate Director - Program & Project Management', '7825821809', 'India', '', '', 'Active'),
(160, '10756343', 'Venkatesh', 'Nagaraj', 'Male', '1994-12-17', 'Z1', 'Junior Consultant', '8072369359', 'India', '', '', 'Active'),
(161, '10692856', 'Vigneshwaran', 'Babu', 'Male', '1997-06-22', 'P2', 'Senior Quality Engineer', '7305894175', 'India', '', '', 'Active'),
(162, '10714625', 'Vikram', 'Kumar', 'Male', '1990-01-26', 'P2', 'Senior Quality Engineer', '7542920636', 'India', '', '', 'Active'),
(165, '10692821', 'Sai', 'Amaragani', 'Male', '1999-05-10', 'P1', 'Quality Engineer', '9959823792', 'India', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(255) NOT NULL,
  `ps_no` int(255) NOT NULL,
  `Asset_No` int(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `date_borrowed` datetime NOT NULL,
  `date_returned` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `ps_no`, `Asset_No`, `serial_no`, `date_borrowed`, `date_returned`, `status`) VALUES
(237, 10721485, 18, 'RZCW112AT5K', '2023-10-09 15:04:19', '2023-10-09 15:04:21', 'returned');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Test', 'Admin', '95bd161c3ed99caa23bff1e7d96d3335', 'admin'),
(118, 'AishwaryaT', '61083101', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(119, 'Arun E M', '61082963', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(120, 'Balaji Sengamalai', '10723370', '95bd161c3ed99caa23bff1e7d96d3335', 'admin'),
(121, 'Bandaru Sunitha', '61076499', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(123, 'BharathManikandan', '10721485', '95bd161c3ed99caa23bff1e7d96d3335', 'admin'),
(124, 'BhavaniSivaSaiBetanabhotla', '10714004', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(125, 'ChinnapatlaRishika', '61083106', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(126, 'DhaanvaanthSundar', '10714082', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(127, 'DhinakaranThiruganasekar', '10717992', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(128, 'DivyaK', '61094973', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(129, 'DivyaMarikanti', '10712048', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(130, 'EnukondaSri', '10714157', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(131, 'Gaja MeenakshiRamarajagopal', '61070393', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(132, 'GobiPandurangan', '10723999', '95bd161c3ed99caa23bff1e7d96d3335', 'admin'),
(133, 'GokulGopalakrishnan', '61083043', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(134, 'Helen Jenifer', '61083071', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(135, 'JebaKumar', '10702882', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(136, 'Jenith babu Shanmugam', '10721527', '95bd161c3ed99caa23bff1e7d96d3335', 'admin'),
(137, 'KalaiarasiL', '61083052', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(138, 'KavanaKS', '61082944', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(139, 'Latha BaburaoJadhav', '10637846', '95bd161c3ed99caa23bff1e7d96d3335', 'admin'),
(140, 'ManeshLokare', '10699195', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(141, 'MohanrajI', '10717722', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(142, 'NarapureddySree', '10698902', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(143, 'PatanGulshan', '61083051', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(144, 'PraveenRaj', '10692788', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(145, 'RajalaxmiK', '61084168', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(146, 'Rajesh KumarNagaraj', '10713174', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(147, 'Ramyanjaliramyanjali', '61094971', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(149, 'SanjayKumar', '10714054', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(150, 'SanjeeviT', '61094860', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(151, 'Sathasivam Thamizhselvam', '10723101', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(152, 'Sathya Selvam', '61094862', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(153, 'SHAIKSARFRAZ', '10711351', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(154, 'Shaik Mohammad Ismail', '61076414', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(155, 'Sonam Priya', '61094981', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(156, 'SumithraT', '61094907', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(157, 'Sundar rajanS', '10710702', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(158, 'SuriyakumarChandrasekaran', '10709580', '95bd161c3ed99caa23bff1e7d96d3335', 'admin'),
(159, 'VenkateshNagaraj', '10756343', '95bd161c3ed99caa23bff1e7d96d3335', 'admin'),
(160, 'VigneshwaranBabu', '10692856', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(161, 'VikramKumar', '10714625', '95bd161c3ed99caa23bff1e7d96d3335', 'user'),
(162, 'Sai Amaragani', '10692821', '95bd161c3ed99caa23bff1e7d96d3335', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Asset_No` (`Asset_No`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
