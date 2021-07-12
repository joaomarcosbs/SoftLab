-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Dez-2020 às 03:53
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojaweb2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`id`, `name`, `details`) VALUES
(1, 'surfboard', 'A surfboard is not just a prank for catching waves.'),
(2, 'wetsuit', 'Surfing wetsuits provide warmth, protection, and comfort for surface watersports.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `password`) VALUES
(4, 'leonildo', 'leo@sousa', '$2y$10$O17b4C6YE1v4ApCiPbdFk.yoKXUfbZRDZbHkucJU3dPiz6ALjX04O'),
(5, 'leo', 'leo.sousa.11@hotmail.com', '$2y$10$YEau74HwNHE8PUwm5RA1B.D7F0tMIoM32KDc3/TySXz5anLNSO5VS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(300) NOT NULL,
  `category` int(11) NOT NULL,
  `highlight` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `title`, `details`, `price`, `image`, `category`, `highlight`) VALUES
(1, 'Surfboard Pukas Spicy by Axel Lorentz', 'This is the third board from a High-Performance Collection developed by Axel Lorentz compound by 3 surfboards; The Pukas Juicy, the Pukas Tasty and the Pukas Spicy.\r\nFits better when waves are pumping. Think of overhead Hossegor, classic Mundaka, a trip to the Canar y Islands, endless classy Moroccan right-handers … It’s made to accelerate as you take of f on any of those demanding waves .\r\nIt features a more pronounced rocker than the Pukas Tasty, a nar rower outline and lower rails . \r\nA single concave to a slight double concave in the end to generate speed. The board has a combo f in system, meaning you can jump f rom a thruster to a four-f in set-up if desired .\r\nTips: If it’s glassy with long sections that demand speed, go for the four-f in set up. You might want to surf it as a thruster if you are going to f ind some wind chop (it will hold better).\r\nFins  //  Tri fin. Combo if requested.\r\nTail  //  Round', 600.00, 'https://pukassurf.com/wp-content/uploads/sites/3/sites/3/2016/02/Pukas_Surfboards_Axel_Lorentz_Spicy_01_320.png', 1, 1),
(2, 'Surfboard Pukas Flying Piston by Axel Lorentz', 'Gave a modern twist to my mini simmons inspiration to make a fun summer toy or small wave surf board.\r\nChanged the bottom as also increased rocker in tail to add reactivity and performance. Also made it with a concave deck for a better control and feeling under feet .\r\nBe careful , it really hides a lot of volume .\r\nFins  //  Tri fin. Combo if requested.\r\nTail  //  Round pin\r\nWaves  //  Knee to Overhead\r\nSurfer Level  //  Average to expert', 500.00, 'https://pukassurf.com/wp-content/uploads/sites/3/sites/3/2016/02/Pukas_Surfboards_Axel_Lorentz_Flying_Piston_Camo_01_320.png', 1, 1),
(3, 'Surfboard Pukas Tasty Treat by Axel Lorentz', 'This eye-catching design is inspired by the new trend of the volume-performance ra- tio. A wider outline with a high-performance approach. Rails that hold. Lots of speed and plenty of drive.\r\nThe Pukas La Loca by Axel Lorentz features a lowered rocker in tail and a thinner tail. A full concave continues all the way to the ns where it switches to a V-tail. Very responsive. Fun. A must have board.\r\nWe feel that the single channel in the bottom gives extra control and hold when doing radi- cal turns with the bonus of making huge sprays.', 650.00, 'https://pukassurf.com/wp-content/uploads/sites/3/sites/3/2018/07/2018_07_1-PUKAS-SURF-Tasty-Treat.png', 1, 1),
(4, 'Body Glove Pr1me 3/2mm Slant-Zip Men Fullsuit', 'Minimal Seam Design Nano Tritec kneepads, Articulated Leg, Paneling Hydrophobic, Exterior Print High-Performance, Evo Flex Materials, Drain Holes In Chest And Back Panels\r\nUnfinished Collar, Wrist, & Ankle Cuffs Ultra-Light X-Dry Plush Woven Fabric For Superior Warmth & Quick-Dry Properties, 3/2mm | Made for cool water: 56-65°F / 13-18°C', 290.00, 'https://cdn.shopify.com/s/files/1/0103/0448/7482/products/18124-blkgry__back_2_9ba223c5-2789-4a32-97b3-8e6db762ca2e.jpg', 2, 0),
(5, 'Body Glove Red Cell 5/4/3mm Men Chest-Zip Hooded Fullsuit', 'Minimal Seam Design Nano Tritec kneepads, Articulated Leg, Paneling Hydrophobic, Exterior Print High-Performance, Evo Flex Materials, Drain Holes In Chest And Back Panels, Unfinished Collar, Wrist, & Ankle Cuffs Ultra-Light X-Dry Plush Woven Fabric For Superior Warmth & Quick-Dry Properties, 3/2mm Made for cool water: 56-65°F / 13-18°C', 490.00, 'https://cdn.shopify.com/s/files/1/0103/0448/7482/products/19137-blk__red-cell-5-4-3mm-mens-chest-zip-hooded-fullsuit-black__front_600x.jpg', 2, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
