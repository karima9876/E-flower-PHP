-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 10:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-flowerphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `blogId` int(255) NOT NULL,
  `cName` varchar(255) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `blogId`, `cName`, `mail`, `message`, `comment_time`) VALUES
(60, 38, 'ashish026', 'ashish026@gmail.com', 'Really Lovely Website', '2020-09-24 20:56:57'),
(59, 18, 'rifat022', 'rifat022@gmail.com', 'I am so appreciating this Blog. Really Helpful. Highly Recommended. Easy to Understand. Thanks.', '2020-09-24 20:56:57'),
(56, 18, 'ratul087', 'ratul@gmail.com', 'Very Very Nice Blog. I am admiring of this Blog. Every Person will know good about Picture from this Blog, I seem. ', '2020-09-24 20:56:57'),
(58, 18, 'rifat022', 'rifat022@gmail.com', 'I am so appreciating this Blog. Really Helpful. Highly Recommended. Easy to Understand. Thanks.', '2020-09-24 20:56:57'),
(61, 18, 'ashish026', 'ashish026@gmail.com', 'Really Lovely Website', '2020-09-24 20:57:31'),
(62, 18, 'murad087', 'murad087@gmail.com', 'This is very helpful those person who love Flower and  also want to know about Flower. Thanks for keeping this Blog.', '2020-09-24 21:00:52'),
(76, 43, 'karima', 'karimajaman9876@gmail.com', 'very nice', '2020-11-28 19:21:12'),
(75, 37, 'jinia', 'jinia@gmail.com', 'Your Flower Blog are the definition of â€œBeautyâ€', '2020-11-25 12:58:41'),
(74, 37, 'laboni', 'laboni9876@gmail.com', 'one of the best flowers blog,i have never seen ever.', '2020-11-25 12:50:12'),
(68, 38, 'jamila', 'jamila@gmail.com', 'i love this flower. Very Informational  resources. Good Carry On.', '2020-10-22 17:41:37'),
(69, 33, 'karima', 'karimajaman9876@gmail.com', 'Nice', '2020-10-23 14:18:01'),
(70, 36, 'Moon', 'moon@gmail.com', 'i love this flower. Very Informational  resources. Good Carry On.\r\n', '2020-10-24 04:02:31'),
(73, 41, 'karima', 'karimajaman9876@gmail.com', 'Nice', '2020-10-24 20:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `flower`
--

CREATE TABLE `flower` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flower`
--

INSERT INTO `flower` (`id`, `title`, `description`, `image`) VALUES
(33, 'Rose', 'A rose is a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bear', 'pictures/images.jpg'),
(43, 'Mustard Flower', 'Nice flower', 'pictures/gettyimages-170478216-612x612.jpg'),
(34, 'Marigold', 'Marigolds have few pests or problems overall, but spider mites and aphids sometimes infest the plants. Usually a spray of water or the application of an insecticidal soap, repeated every other day for a week or two, will solve the problem. Occasionally, marigolds will be affected by fungal diseases such as powdery mildew if conditions are too wet. ', 'pictures/images (10).jpg'),
(36, 'Mustard Flower', 'While the table condiment mustard does indeed come from the mustard seed, the leaves, flowers, seed pods and roots are also edible. ... As the plant ages, it becomes strong and sometimes the leaves are too bitter to eat. Tender young seeds pods can be added to salads, but are peppery.', 'pictures/1.webp'),
(37, 'Rose', 'A rose is a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bears. There are over three hundred species and tens of thousands of cultivars.They form a group of plants that can be erect shrubs, climbing, or trailing, with stems that are often armed with sharp prickles.Flowers vary in size and shape and are usually large and showy, in colours ranging from white through yellows and reds.[1] Most species are native to Asia, with smaller numbers native to Europe, North America, and northwestern Africa. Species, cultivars and hybrids are all widely grown for their beauty and often are fragrant. Roses have acquired cultural significance in many societies.Rose plants range in size from compact, miniature roses, to climbers that can reach seven meters in height. Different species hybridize easily, and this has been used in the development of the wide range of garden roses.', 'pictures/shannon-ferguson-Z33hpeePdyc-unsplash.jpg'),
(38, 'Dhutura', 'flower', 'pictures/Sacred_datura_(Datura_wrightii)_(14212557338).jpg'),
(39, 'Sun Flower', 'Sunflowers symbolize adoration, loyalty and longevity. Much of the meaning of sunflowers stems from its namesake, the sun itself. These flowers are unique in that they have the ability to provide energy in the form of nourishment and vibrancyâ€”attributes which mirror the sun and the energy provided by its heat and light.  Sunflowers are known for being â€œhappyâ€ flowers, making them the perfect gift to bring joy to someoneâ€™s (or your) day.  The History of Sunflowers  Sunflowers originated in the Americas in 1,000 B.C., and were then cultivated as a valuable food source for centuries. With the European exploration of the New World, the flowerâ€™s popularity spread, as the rest of the world began to appreciate its beauty and sustenance.  Artists throughout history loved the sunflowerâ€™s unique splendorâ€”those of the Impressionist era were especially fixated on the flower. The use of sunflower images as religious symbols has also been documented in some native societies.  Wild sunflowers are often photographed with their tall stalks and bright petals stretched towards the sun. This interesting behavior, known as phototropism, inspired a motif that has appeared in many ancient works.  Today, sunflowers remain a highly recognized flower, admired for its sunny charm and delightful disposition. These beauties are also still sourced for their seeds, as well as oils used for cooking and skin emollients. For a flower that reflects so many of the sunâ€™s positive characteristics, it isnâ€™t surprising that people enjoy basking in the sunflowerâ€™s warming glow so much.   ', 'pictures/th.jpg'),
(40, 'Summer Flower', 'Summer Flowers add brilliant color and beauty to the landscape through the heat of summer and until frost, with only minimum care. Summer is a time of beauty and abundance with Summer Flowers in the garden.  Though, many Summer Flowering Plants are likely to suffer winter injury and need the tender care of spring, the magnificence, color and fragrance of Summer Flowers are a valuable addition to any garden.  Summer time is a time of brilliance and beauty with Summer Flowers in the garden. The season requires special care and attention for the maintanance of Summer Flower plants.  For flower lovers, hearts beat faster in summertime. Summer is also peak season for buying bunches of cut summer flowers. It is best to plant containers in early summer.  Summer Flowers and in patio pots, window boxes, and hanging baskets are breathtakingly beautiful. The containers can be placed outdoors but should be fed well as the summer progresses.  There are number of Summer flowering bulbs. Summer Flowering bulbs can add beauty to the home landscape. Many bulbs bloom with small flowers and should be planted in groups or beds to best show off their flowers.  Some Summer Flowering bulbs have large flowers and may need to be staked to be properly displayed.  There are a great number of plants that bloom with Summer Flowers from late June into September through several light frosts. Listed below are some of the Summer flowers of the season to help you prioritize your flower and act accordingly.  Amaranthus Asters Carnation Chrysanthemum Cockscomb Freesia Ginger Gladiolus Heather Hydrangea Iris Lisianthus References Used - Thanks: Summer Flowering Plants Extend Seasonal Color Summer cut flower care Season Flowers - Summer Summer Flowers - Dot flowers Summer flowers - The helpful gardener Summer Flowering Bulbs Interesting information on this topic Preserve Your Summer Flowers Spring & Summer Flowers Summer Flower - flower pictures The Lazy Texas Gardener - Summer flowers Haiku seasons My best flower pictures Summer - flowers Summer - flowers - Bouquets Shopping Summer Flowers & Gifts', 'pictures/gettyimages-897463978-612x612.jpg'),
(41, 'Red Rose', 'A rose is a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bears.[1] There are over three hundred species and tens of thousands of cultivars.[1] They form a group of plants that can be erect shrubs, climbing, or trailing, with stems that are often armed with sharp prickles.[1] Flowers vary in size and shape and are usually large and showy, in colours ranging from white through yellows and reds.[1] Most species are native to Asia, with smaller numbers native to Europe, North America, and northwestern Africa.[1] Species, cultivars and hybrids are all widely grown for their beauty and often are fragrant. Roses have acquired cultural significance in many societies.[1] Rose plants range in size from compact, miniature roses, to climbers that can reach seven meters in height.[1] Different species hybridize easily, and this has been used in the development of the wide range of garden roses.', 'pictures/Love Rose HD Wallpapers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `total_amount` bigint(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'incomplete',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `phone`, `description`, `transaction_id`, `total_amount`, `address`, `delivery_status`, `date`) VALUES
(6, 'karima', '01703986069', 'Nice flower, I want to purchase 50 pieces flowers,as soon as possible i have to need those flowers', '7765r', 200, 'Faridpur ', 'complete', '2022-04-04 12:57:00'),
(7, 'Moon', '01703986068', 'I need some flowers for wedding party,300 flowers i have to need.', '456732', 500, 'Gopalganj', 'incomplete', '2022-04-04 13:00:19'),
(8, 'Aminul', '01703986064', 'I need some flowers for wedding party,500  rose flowers i have to need.', '57890asd', 300, 'Faridpur ', 'incomplete', '2022-04-04 13:06:06'),
(9, 'shopon', '01703986032', 'I need some flowers for wedding party,Marigold 300 flowers i have to need.', '4567311', 400, 'Jamalpur', 'incomplete', '2022-04-04 13:07:07'),
(10, 'Nomlanga Frederick', '+1 (392) 653-2521', 'Voluptatem Veritati', 'Aut voluptatem Quia', 0, 'Dolorum qui nihil pe', 'incomplete', '2022-04-04 13:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `image`) VALUES
(30, 'ratul', 'ratul@gmail.com', '123@abc', 'pic/5cb8b133b8342c1b45130629.jpg'),
(29, 'jinia', 'jinia@gmail.com', 'jinia123', 'pic/5cb8b133b8342c1b45130630.jpg'),
(28, 'karima_jaman', 'karimajaman9876@gmail.com', '12345', 'pic/black.png');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `rName` varchar(255) DEFAULT NULL,
  `rMail` varchar(255) DEFAULT NULL,
  `rMessage` text DEFAULT NULL,
  `reply_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `comment_id`, `rName`, `rMail`, `rMessage`, `reply_time`) VALUES
(29, 76, 'murdy', 'murdy@gmail.com', 'Thank you', '2020-11-28 19:21:43'),
(28, 74, 'jinia', 'jinia@gmail.com', 'you are right. Really This site is very helful for me. It enlarges my Knowledge about Flower. Also I want to purchase this Flower', '2020-11-25 13:16:09'),
(25, 75, 'karima_jaman', 'karimajaman9876@gmail.com', 'Thank you so much for your good support .', '2020-11-25 13:07:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flower`
--
ALTER TABLE `flower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `flower`
--
ALTER TABLE `flower`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
