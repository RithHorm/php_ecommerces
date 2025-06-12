-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2025 at 07:17 PM
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
-- Database: `php_rest_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_contents`
--

CREATE TABLE `contact_contents` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_contents`
--

INSERT INTO `contact_contents` (`id`, `content`, `created_at`) VALUES
(5, '<p><strong>Contact Us</strong></p>\r\n\r\n<p><em>tele: 0191872782</em></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2025-04-20 10:09:46'),
(6, '<h2><strong>Contact&nbsp; Us</strong></h2>\r\n\r\n<h3><em>Telephone: +855 127167212</em></h3>\r\n\r\n<h2>Location</h2>\r\n\r\n<h3><em>st 240 khan duan Penh Phnom Penh</em></h3>\r\n', '2025-04-20 10:31:39'),
(7, '<h2><strong>contact us</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>+855 01234455</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Location</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>st 240</h3>\r\n\r\n<p>&nbsp;</p>\r\n', '2025-04-21 10:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `payer_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(50) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `picture`, `created_at`, `updated_at`, `name`) VALUES
(1, 'Lightweight, stretchy AirSense Jacket', 'Lightweight, stretchy, and quick-drying fabric jointly developed by UNIQLO and Toray. Buttons at the cuffs. Practical design with inner pockets on both sides.', 59.00, '67c3a06e2a551Zip-Up Blouson Jacket(59$).avif', '2025-03-20 12:46:01', '2025-03-20 12:46:01', 'AirSense Jacket'),
(2, 'A stretchy knit with a perfectly crisp feel.', 'A stretchy knit with a perfectly crisp feel. Refined silhouette and knit fabric suitable for both business and casual wear. Machine-washable. Meticulous design details include a ribbed collar that joins seamlessly to the body for comfort.', 19.00, '67c3a0ce05aa6Washable Milano Ribbed Sweater(19$).avif', '2025-03-20 12:48:59', '2025-03-20 12:48:59', 'Washable Milano Ribbed Sweater'),
(3, 'Comfort and Style Combined: The Washable Milano Ribbed Sweater for Effortless Elegance', 'nmatched Comfort and Flexibility: Discover the Ezy Ultra Stretch Jeans', 59.00, '67c3a129383a6EZY Ultra Stretch Jeans(69$).avif', '2025-03-02 00:07:05', '2025-03-06 08:32:00', 'EZY Ultra Stretch Jeans'),
(4, 'Stay Warm Without the Weight: The Ultra Light Down Jacket for All-Day Comfort', 'Lightweight yet warm premium down with a fill power of 750+.\nWater-repellent finish. *The fabric is coated with a water-repellent agent so the effect lasts longer. The finish is not permanent.', 69.00, '67c3a161e7117Ultra Light Down Jacket (69$).avif', '2025-03-02 00:08:01', '2025-03-06 08:32:56', 'Ultra Light Down Jacket'),
(5, 'Effortless Warmth and Freedom: The Ultra Light Down Vest for Every Adventure', 'Convenient pocketable design. The storage pouch fastens with a buckle and can be attached or removed with a single touch.', 29.00, '67c3a1ab99c6dUltra Light Down Vest(29$).avif', '2025-03-02 00:09:15', '2025-03-06 08:33:08', 'Ultra Light Down Vest'),
(6, 'Timeless Comfort and Style: The Classic Flannel Shirt for Any Season', 'Fine 100% cotton brushed for a smooth feel on the outside and soft and cozy warmth on the inside.\nRounded buttons for easy fastening.', 29.00, '67c3a1d500747Flannel Shirt (29$).avif', '2025-03-02 00:09:57', '2025-03-06 08:33:18', 'Flannel Shirt '),
(7, 'Art Meets Fashion: The Open Collar Shirt with Hokusai Print for a Bold Statement', 'Hokusai Blue\nFounded in Kyoto during the Meiji Period (1868-1912), Unsodo is Japan\'s only publishing company that makes traditional Japanese books with hand -printed woodblock prints.', 39.00, '67c3a383e90a0Stretch Selvedge Slim Jeans(49$).avif', '2025-03-02 00:17:07', '2025-03-06 08:33:30', 'Open Collar Shirt Hokusai Print'),
(8, 'Breathable Elegance: The Cotton Linen Shirt Jacket for Effortless Style', 'The softness of cotton plus the cool feel of linen.\nLeft chest pocket plus waist pockets on both sides, making this a great outer layer.', 49.00, '67c3a3b0ee0b2Cotton Linen Shirt Jacket(49$).avif', '2025-03-02 00:17:52', '2025-03-06 08:33:54', 'Cotton Linen Shirt Jacket'),
(9, 'Utility Meets Style: The Ultimate Cargo Pants for Everyday Wear', 'Cotton fabric for a casual look.\nWide tapered cut with a relaxed feel.', 59.00, '67c3a3f6c42b0Cargo Pants(59$).avif', '2025-03-02 00:19:02', '2025-03-06 08:34:04', 'Cargo Pants'),
(10, 'Comfort Redefined: The Perfect Sweatpants for Lounging and Beyond', 'Smooth touch on the inside and out.\nRibbed waist and hems for a comfortable fit.\nInner waist drawstring for size adjustment.', 39.00, '67c3a41dbc481Sweatpants(39$).avif', '2025-03-02 00:19:41', '2025-03-06 08:34:19', 'sweatpants'),
(21, 'dasdadasdsassssssssssssssssss', 'asdasdasdasssssssssssssssssss', 290.00, 'IMG_6803470de33d87.96331884.avif', '2025-04-19 03:55:10', '2025-04-19 03:55:10', 'not latest'),
(22, 'test', 'Based on a design inspired by vintage workwear, but with a modern relaxed silhouette', 99.00, 'IMG_680360ef7d4068.37488583.avif', '2025-04-19 03:54:51', '2025-04-19 03:54:51', 'successful Test1'),
(23, 'nice cotton', 'Lightweight, stretchy, and quick-drying fabric jointly developed by UNIQLO and Toray. Buttons at the cuffs. Practical design with inner pockets on both sides.', 199.00, 'IMG_6803651c467cd7.86409122.avif', '2025-04-21 09:30:02', '2025-04-21 09:30:02', 'latest one yet');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `subtitle`, `description`, `image`, `link`, `status`, `created_at`) VALUES
(1, 'Men\'s Linen Wear', 'Linen: Quality, by Nature', 'Experience the refreshing and breezy comfort of premium 100% linen and linen-blend styles in your favorite seasonal colors.', '1745248226_banner.jpg', '', 1, '2025-04-21 08:54:49'),
(3, 'Polo Shirts', 'Polo: Quality, by Nature', 'A polo shirt is a type of short-sleeved, collared shirt typically made of knitted cotton or a cotton-blend fabric. It features a button-down collar, a placket with two or three buttons, and a comfortable, relaxed fit.', '1745229228_banner3.jpg', 'idk', 1, '2025-04-21 09:53:48'),
(4, 'Men\'s Shorts', 'Day-to-day shorts for your every move.', 'Essential designs that are versatile for a variety of occasions.zz', '1745229972_banner2.jpg', '', 1, '2025-04-21 10:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$9qN7.b9B0kJ874eDV6uGhuojHdqh26qcLQgqkdGkhOBv5QCDAs4di', '2025-02-27 06:18:09', 'admin'),
(2, 'hengly', 'hengly@gmail.com', '$2y$10$i8YyM1uM/5vGmaAviDjesuXj5RlRyT9RJjvLUgaECQlyQs1UmsNc.', '2025-02-27 06:26:47', 'user'),
(4, 'zai', 'zai@gmail.com', '$2y$10$L38uKp1vUWjjbYxQ3N6iVOs7i2ebCOOZAEMLlBwiOHhJxPhb9nyiS', '2025-02-27 07:18:35', 'user'),
(5, 'aksjdkasj', 'rith@gmail.com', '$2y$10$hdT5lNCfAF8YCRkv/pAhlOo/oB/PTVS5DveKl/A7CLv6icO7gwzG.', '2025-04-19 07:44:08', 'user'),
(6, 'kakboy', 'boy@gmail.com', '$2y$10$QWvXbJmg9d/TUu0hgAVl8.2LXBXMW7sbMoW5tnCSsohLiZ4dgfNly', '2025-04-24 15:42:40', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_contents`
--
ALTER TABLE `contact_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_contents`
--
ALTER TABLE `contact_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
