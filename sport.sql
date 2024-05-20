-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 07:57 PM
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
-- Database: `sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `point` int(100) NOT NULL,
  `win` int(100) NOT NULL,
  `position` int(18) NOT NULL,
  `Logo` varchar(500) NOT NULL,
  `draw` int(100) NOT NULL,
  `losee` int(100) NOT NULL,
  `goalScored` int(200) NOT NULL,
  `matches` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `name`, `point`, `win`, `position`, `Logo`, `draw`, `losee`, `goalScored`, `matches`) VALUES
(72, 'Leverkusen', 169, 56, 0, 'https://github.com/luukhopman/football-logos/blob/master/logos/L1/Bayer%2004%20Leverkusen.png?raw=true', 1, 3, 103, 0),
(73, 'Leverkusen', 221, 55, 0, 'https://github.com/luukhopman/football-logos/blob/master/logos/L1/Bayer%2004%20Leverkusen.png?raw=true', 56, 0, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Feedback` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `Email`, `Feedback`, `created_at`) VALUES
(1, 'sarh asare hw', 'arg qry', 'hfhgjljl\'k;', '2024-05-13 20:56:18'),
(2, 'sarh asare hw', 'arg qry', 'hfhgjljl\'k; nmbj', '2024-05-13 20:56:18'),
(3, 'sarh asare hw', 'arg qry', 'hfhgjljl\'k; nmbj', '2024-05-13 20:56:18'),
(4, '', '', '', '2024-05-13 20:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `name` varchar(70) NOT NULL,
  `image` varchar(100) NOT NULL,
  `detail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `SecondTeam` varchar(100) NOT NULL,
  `Time-clock` datetime NOT NULL,
  `ID` int(100) NOT NULL,
  `TeamSecondLogo` varchar(500) NOT NULL,
  `Location` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`SecondTeam`, `Time-clock`, `ID`, `TeamSecondLogo`, `Location`) VALUES
('parsi', '2024-06-01 17:57:00', 18, 'https://github.com/luukhopman/football-logos/blob/master/logos/FR1/Paris%20Saint-Germain.png?raw=true', 'Santigo '),
('Aresenal FC', '2024-06-04 15:37:30', 21, 'https://github.com/luukhopman/football-logos/blob/master/logos/GB1/Arsenal%20FC.png?raw=true', 'santiago bernabio'),
('Intermilan', '2024-06-06 15:44:00', 22, 'https://github.com/luukhopman/football-logos/blob/master/logos/IT1/Inter%20Milan.png?raw=true', 'Stadio Giuseppe Meazza'),
('chelese ', '2024-06-22 15:41:08', 24, 'https://github.com/luukhopman/football-logos/blob/master/logos/GB1/Chelsea%20FC.png?raw=true', 'stamford bridge ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `position` varchar(100) NOT NULL,
  `Role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`ID`, `name`, `number`, `img`, `position`, `Role`) VALUES
(9, 'Carlo Anceloti ', 0, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--c225f3fe-237f-4aea-a2f0-4dfcf71b1830/ancelotti_carita_380x501.app.png?preferwebp=true', '1', 'Coach'),
(10, 'David Anceloti', 0, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--d299793d-1ec3-4e17-bf71-7bcf732decab/DAVIDE_ANCELOTTI_Carita_380x501.app.png?preferwebp=true', '1', 'Assitant Coach'),
(11, 'Antonio Pintus ', 0, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--cf3f70cd-4cde-4388-9e0d-601d825afbcf/_330736052690.app.png?preferwebp=true', '1', 'Head Fitneess Coach'),
(12, 'Courtois', 1, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--2394d229-13bc-494c-afbb-48ef94a40206/COURTOIS_carita_380x501.app.png?preferwebp=true', '2', ''),
(13, 'Lunin', 13, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--42fe343a-4c5c-4c7f-b286-727374ad3bfc/_80X501_LUNIN.app.png?preferwebp=true', '2', ''),
(14, 'Carvajal', 2, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--a740e082-589b-4f04-ad04-8aaa47b8fb03/_80X501_CARVAJAL.app.png?preferwebp=true', '4', ''),
(19, 'Rudiger', 22, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--c47b32e2-7efd-43cb-aec1-e1303ff8eb64/_80X501_RUDIGER.app.png?preferwebp=true', '4', ''),
(20, 'Nacho', 6, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--aa46fb6e-29e8-4fbf-bc72-4f4e627ba94d/NACHO_carita_380x501.app.png?preferwebp=true', '4', ''),
(21, 'Beligham', 5, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--0a9e21fb-3646-411f-abed-b372915ed2fe/_80X501_BELLINGHAM.app.png?preferwebp=true', '1', ''),
(22, 'Valverde ', 15, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--dec8ffe6-da1d-4cc9-95c1-3e4e6dfd5a21/_80X501_VALVERDE.app.png?preferwebp=true', '3', ''),
(23, 'Modric', 9, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--d2dead4a-81e1-4bfb-81fd-748c72bd20b3/_80X501_MODRIC.app.png?preferwebp=true', '3', ''),
(24, 'Vini. Jr', 7, 'https://publish-p47754-e237306.adobeaemcloud.com/adobe/dynamicmedia/deliver/dm-aid--07308c80-aaac-4856-9e12-9f045a794eed/_80X501_VINI.app.png?preferwebp=true&width=288&height=384', '5', '');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `numTitiles` int(6) NOT NULL,
  `year` text NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`ID`, `Name`, `numTitiles`, `year`, `img`) VALUES
(1, 'La Liga', 34, ' 21/22 ,  19/20 ,  16/17 ,  11/12 ,  07/08 ,  06/07 ,  02/03 ,  00/01 ,  96/97 ,  94/95 ,  89/90 ,  88/89 ,  87/88 ,  86/87 ,  85/86 ,  79/80 ,  78/79 ,  77/78 ,  75/76 ,  74/75 ,  71/72 ,  68/69 ,  67/68 ,  66/67 ,  64/65 ,  63/64 ,  62/63 ,  61/62 ,  60/61 ,  57/58 ,  56/57 ,  54/55 ,  53/54 ,  32/33 ,  31/32', 'https://th.bing.com/th/id/OIP.bagNfSkhq8BCKSj7u9dLogAAAA?rs=1&pid=ImgDetMain'),
(2, ' UEFA Champions League ', 10, '17/18 , 16/17,21/22 , \r\n', 'https://i.imgflip.com/51gntm.png');

-- --------------------------------------------------------

--
-- Table structure for table `squad`
--

CREATE TABLE `squad` (
  `squad_id` int(11) NOT NULL,
  `position_squad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `squad`
--

INSERT INTO `squad` (`squad_id`, `position_squad`) VALUES
(1, 'coach '),
(2, 'goalKeeper '),
(3, 'Midfeilder'),
(4, 'defender'),
(5, 'attacker');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `ID` int(100) NOT NULL,
  `Name` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  `Image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `password`, `created_at`) VALUES
(6, 'barham.200269674190', 'barhambaper6@gmail.com', '7a345ba5e18955831fb1f543443b78bac5a823eeb8d5747e8fcb2c5591b31313', '2024-05-13 20:52:59'),
(7, 'mirawdali', 'barhampc6@gmail.com', '7a345ba5e18955831fb1f543443b78bac5a823eeb8d5747e8fcb2c5591b31313', '2024-05-13 20:54:13'),
(8, 'Manager@admin.com', 'Manager@admin.com', '7a345ba5e18955831fb1f543443b78bac5a823eeb8d5747e8fcb2c5591b31313', '2024-05-14 14:18:52'),
(9, 'agha123Aaa', 'barham.200269674190@gmail.com', '7a345ba5e18955831fb1f543443b78bac5a823eeb8d5747e8fcb2c5591b31313', '2024-05-14 14:41:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `squad`
--
ALTER TABLE `squad`
  ADD PRIMARY KEY (`squad_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `squad`
--
ALTER TABLE `squad`
  MODIFY `squad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
