-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 28, 2023 at 06:44 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ass`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverage`
--

DROP TABLE IF EXISTS `beverage`;
CREATE TABLE IF NOT EXISTS `beverage` (
  `photo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `beverage`
--

INSERT INTO `beverage` (`photo`, `id`, `name`, `price`, `quantity`) VALUES
('../img_food/cola.jpg', 'MAC010', 'Cola', 'RM2.50', 1),
('../img_food/pepsi.jpg', 'MAC011', 'Pepsi', 'RM2.50', 1),
('../img_food/Iced-Lemon-Tea.jpg', 'MAC012', 'Ice Lemon Tea', 'RM2.50', 1),
('../img_food/icecream.jpg', 'MAC013', 'Ice Cream', 'RM4.00', 1),
('../img_food/French_Fries.jpg', 'MAC014', 'Frence Fries', 'RM6.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `burger`
--

DROP TABLE IF EXISTS `burger`;
CREATE TABLE IF NOT EXISTS `burger` (
  `photo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `burger`
--

INSERT INTO `burger` (`photo`, `id`, `name`, `price`, `quantity`) VALUES
('../img_food/Chicken-Burger.jpg', 'MAC003', 'Chicken Burger', 'RM9.80', 1),
('../img_food/duoble_chicken_burger.jpg', 'MAC004', 'Double Chicken Burger', 'RM12.30', 1),
('../img_food/chess_burger.jpg', 'MAC005', 'Chess Burger', 'RM13.80', 1),
('../img_food/Double-Cheeseburger.jpg', 'MAC006', 'Double Cheese Burger', 'RM19.80', 1),
('../img_food/filet-o-fish.jpg', 'MAC007', 'Fillet o Fish', 'RM8.60', 1);

-- --------------------------------------------------------

--
-- Table structure for table `friedchicken`
--

DROP TABLE IF EXISTS `friedchicken`;
CREATE TABLE IF NOT EXISTS `friedchicken` (
  `photo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `friedchicken`
--

INSERT INTO `friedchicken` (`photo`, `id`, `name`, `price`, `quantity`) VALUES
('../img_food/hot&spicy.jpg', 'MAC008', 'Hot and Spicy', 'RM3.00', 1),
('../img_food/original.jpg', 'MAC009', 'Original', 'RM3.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `set`
--

DROP TABLE IF EXISTS `set`;
CREATE TABLE IF NOT EXISTS `set` (
  `photo` varchar(30) NOT NULL,
  `id` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `set`
--

INSERT INTO `set` (`photo`, `id`, `name`, `description`, `price`, `quantity`) VALUES
('../img_food/valueSet.jpg', 'MAC001', 'Mc Value set', '- Fries Chicken (3pcs)\n- Chicken Nuggets (5pcs)\n- French Fries\n- French Fries\n- Ice Lemon Tea\n- Ice Lemon Tea\n- Chocolate IceCream\n- Chocolate IceCream\n', 'RM35.60', 1),
('../img_food/familySet.jpg', 'MAC002', 'Mc Family set', '- Fries Chicken (2pcs)		\r\n- Chicken Burger (5pcs)\r\n- Chicken Nuggets (5pcs)\r\n- French Fries\r\n- French Fries\r\n- Ice Lemon Tea\r\n- Ice Lemon Tea\r\n', 'RM40.80', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
