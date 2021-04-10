SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Redmi''One Plus Nord', 29999.00, 'D:\TASK\assets\products\oneplus.jpg', '2021-04-10 11:08:57'), -- NOW()
(2, 'Apple', 'iphone 12pro max', 1,59,900, 'D:\TASK\assets\products\iphone.jpg', '2021-04-10 11:08:57'),
(3, 'Samsung', 'Samsung Galaxy M 02s', 8999.00, 'D:\TASK\assets\products\samsung.jpg', '2021-04-10 11:08:57'),
(4, 'Redmi', 'Poco f1', 23,999.00, 'D:\TASK\assets\products\pocof1.jpg', '2021-04-10 11:08:57'),
(5, 'Redmi', 'Mi 10i', 21,999.00, 'D:\TASK\assets\products\mi.jpg', '2021-04-10 11:08:57'),
(6, 'Redmi', 'Redmi 7', 9999.00, 'D:\TASK\assets\products\redmi.jpg', '2021-04-10 11:08:57'),
(7, 'Redmi', 'Redmi 9', 8799.00, 'D:\TASK\assets\products\mi9.jpg', '2020-03-28 11:08:57'),
(8, 'Samsung', 'Samsung Galaxy A52', 26,499.00, 'D:\TASK\assets\products\samsung1.jpg', '2021-04-10 11:08:57'),
(9, 'Apple', 'Apple MacBook Air', 89,704.00, 'D:\TASK\assets\products\iphonelap1.jpg', '2021-04-10 11:08:57'),
(10, 'Dell', 'Dell inspiron 3505',36,190 .00, 'D:\TASK\assets\products\dell.jpg', '2021-04-10 11:08:57'),
(11, 'Asus', 'Asus Rog Strix G17', 1,09,990.00, 'D:\TASK\assets\products\asus.jpg', '2021-04-10 11:08:57'),
(12, 'Hp', 'HP Chromebook 14a-na0003TU', 24,480.00, 'D:\TASK\assets\products\hp.jpg', '2021-04-10 11:08:57'),
(13, 'Apple', 'Apple macbook pro', 120,076.00, 'D:\TASK\assets\products\apple2.jpg', '2021-04-10 11:08:57');
(14, 'Lenovo', 'Lenovo ideapad gaming', 68,990.00, 'D:\TASK\assets\products\lenovo.jpg', '2021-04-10 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
