-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 02:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halyk`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `kek` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `img`, `kek`) VALUES
(1, 'Телефоны и гаджеты', 'mobile', NULL),
(2, 'Фото и видео', 'camera', NULL),
(3, 'Товары для дома и дачи', 'home', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `img` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `img`, `category_id`) VALUES
(1, 'Смартфон Huawei P50 256Gb Gold', 389990, 'huawei_p50.jpg', 1),
(2, 'Электронная книга Ritmix RBK-677FL Черная', 48740, 'ritmix_rbk.jpg', 1),
(3, 'Смартфон Poco M5 6/128Gb Black', 87990, 'poco_m5.jpg', 1),
(4, 'Фотоаппарат Fujifilm Instax Mini 11 TH EX D Blush Pink', 59990, 'instax_mini11.jpg', 2),
(5, 'Штатив NiceFoto Magic Arm 11 Articulated Черный', 11990, 'nicefoto_magic_arm.jpg', 2),
(6, 'Квадрокоптер Syma X5SW Белый', 44990, 'syma_x5sw.jpg', 2),
(7, 'Набор посуды In House 710M4 4шт', 3600, 'in_house_710m4.jpeg', 3),
(8, 'Перчатки Nastah ORDAtrade 10 пар Желтые', 9500, 'nastah_ordatrade.jpg', 3),
(9, 'Полотенце Самойловский Текстиль 761441 50х90 Розовое', 1900, '761441.jpg ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_body` text NOT NULL,
  `stars` int(11) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `product_id`, `review_body`, `stars`, `author`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore vero, exercitationem nesciunt laudantium enim dolores omnis qui cumque ducimus dicta molestias eos, esse iusto doloremque voluptas repudiandae beatae sint. Delectus?', 4, 'Test'),
(2, 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum provident eaque, illo quia quod impedit quo ex eos obcaecati molestias esse commodi recusandae sint maxime eveniet voluptas perferendis autem cum!', 5, 'Test2'),
(3, 4, 'Фотоаппарат отлично работает и успешно выполняет свои функции. Он очень удобен и можно легко переключиться в режим селфи. Вспышка не портит кадры, фотографии выходят быстро и качественно. Владелец такой фотокарточки окружен приятными ценными воспоминаниями своей жизни. Дизайн и цвета очень приятные, нет ничего лишнего. Фотоаппарат вообще стал более интуитивным, в Instax его считают самым простым и понятным из всех фотокамер мгновенной печати когда-либо выпущенных японской компанией.', 5, 'Макпал'),
(4, 4, 'Это чудо мне подарили. Чему я неимоверно обрадовалась, так как ранее присматривалась к таким фотоаппаратам моментальной печати. Но тогда я эту идею оставила, так как стоят эти фотоаппараты дорого и позволить себе его купить я не могла. И вот получив это чудо в подарок - первая моя эмоция - восторг и счастье. Как же обидно, что очень быстро все сменилось разочарованием, когда я узнала, сколько стоят расходники к этому фотику.', 1, 'Александра'),
(5, 5, 'Жесткости кронштейна вполне хватает для удержание телефона (думаю легкого фотоаппарата или светильника) достаточно. Сам принцип работы этого кронштейна достаточно интересен.', 5, 'Кайрат'),
(6, 5, 'В целом работает и это уже хорошо. Качество конечно так себе, но он и не дорогой.', 4, 'Дарын'),
(7, 6, 'Качество - отличное. Крепкая конструкция с пластиковыми ограничителями. Камеру можно снять и таким образом увеличить время автономной работы . Батареи хватает минут на 8-10 при отключенной камере. Время автономной работы также можно увеличить, поставив более емкую батарею из Китая с ALI.Из-за несбалансированной чувствительности управления дети за 3 дня не смогли освоить управление. Разрешение камеры - плохое, 0,3 Mp максимум.', 3, 'Эдуард'),
(8, 6, 'Хороший и качественный квадрокоптер. Долго разбирались как его запустить, не сразу произошло сопряжение с пультом.', 5, 'Айна'),
(9, 7, 'Если вы ищите красивую посуду, то это именно она!', 5, 'Элиза'),
(10, 8, 'ЛЁГКИЕ И ПРОЧНЫЕ??? ДА! :)) КЛАССНЫЕ И МОИ ЛЮБИМЫЕ! :) ХВАТИТ ОДНОЙ ПАРЫ НА ДОЛГО!', 4, 'Артем'),
(11, 9, 'Чувствуется качество полотенца сразу же при получении,не вынимая из упаковки.Насыщенный глубокий цвет, интересный принт по всему периметру изделия и окантовка, достаточно набитый ворс придают полотенцу достойный и богатый вид.', 5, 'Даяночка123'),
(12, 9, 'Хорошее полотенце. Плотность средняя, поэтому полотенце не тяжелое. Впитывает воду хорошо. После стирки немножко подсело. Покупкой довольна.', 4, 'Оля');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `card_number` bigint(11) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `bonus` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `card_number`, `balance`, `bonus`) VALUES
(1, 'First', 'Test', 'test@test.com', 'test', 4176619214187350, '264241.40', '964.00'),
(2, 'Казыбек', 'Бокейхан', 'k0zibek@test.com', 'test', 4176649935295968, '408987.45', '454.00'),
(3, 'Нурали', 'Дуйсекеев', 'please_love_our_little_friends@test.com', 'test', 4856346690242858, '366692.89', '893.00'),
(4, 'Самрат', 'Аскаров', 'aferrius@test.com', 'test', 4627815100456868, '416759.68', '156.00'),
(5, 'Биназир', 'Салим', 'binazek@test.com', 'test', 4627819589825981, '401461.49', '616.00'),
(6, 'Ерасыл', 'Тастыбай', 'Oe3o5@test.com', 'test', 4856343411550586, '248943.21', '425.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_ibfk_1` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
