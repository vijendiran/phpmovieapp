-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 31, 2017 at 02:33 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kidsmovielist`
--

CREATE TABLE `kidsmovielist` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `boxoffice` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `bgimage` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidsmovielist`
--

INSERT INTO `kidsmovielist` (`id`, `name`, `year`, `director`, `boxoffice`, `poster`, `bgimage`) VALUES
(6, 'Zootopia', '2016', 'Byron Howard', '1.024 billion USD', 'http://www.moviespros.com/images/c2.jpg', 'http://static.srcdn.com/wp-content/uploads/zoootpia-box-office-record.jpg'),
(7, 'Minions', '2015', 'Pierre Coffin', '1.159 billion USD', 'https://s-media-cache-ak0.pinimg.com/564x/60/07/e1/6007e15b62afaae704c5673d39a00672.jpg', 'http://d3dfib2axrgjas.cloudfront.net/generated/images/minions-movie-2015-poster_large.jpg'),
(8, 'The Secret Life of Pets', '2016', 'Chris Renaud', '875.5 million USD', 'http://www.newmovie9x.com/wp-content/uploads/2017/02/The-Secret-Life-of-Pets-2016-250x300.jpg', 'https://i.ytimg.com/vi/eWI_Jsw9qUs/maxresdefault.jpg'),
(9, 'The Karate Kid', '1984', 'Harald Zwart', '360 million USD', 'http://www.filmxy.cc/wp-content/uploads/2015/04/The-Karate-Kid-2010-cover-250x350.jpg', 'http://i.onionstatic.com/avclub/5107/50/16x9/960.jpg'),
(10, 'How to Train Your Dragon', '2010', 'Dean DeBlois', '494.9 million USD', 'http://images.desimartini.com/media/versions/main/original/2013-2/5a7be182-b90d-4746-b1cc-9f70cbc31bb4_gallery_image_350_350.jpg', 'http://www.designbolts.com/wp-content/uploads/2014/05/how-to-train-your-dragon-2-hd-wallpaper-1920x10801.jpg'),
(11, 'Inside Out', '2015', 'Pete Docter', '857.6 million USD', 'http://t11.deviantart.net/PTm4GcZUonXwGbq1qbwSQ4PinW4=/fit-in/700x350/filters:fixed_height(100,100):origin()/pre15/1b8d/th/pre/i/2015/175/c/e/inside_out_movie_poster_by_alliezanne-d8ymtiv.png', 'https://lumiere-a.akamaihd.net/v1/images/rich_insideout_footer_33eb9119.jpeg?region=0,0,1024,442'),
(12, 'The Lion King', '1994', 'Roger Allers', '968.5 million USD', 'http://img.zaixiandy.com/2011-9/20119102393734464.jpg', 'http://www.twitrcovers.com/wp-content/uploads/2014/02/The-Lion-King-l.jpg'),
(13, 'The Jungle Book', '2016', 'Jon Favreau', '966.6 million USD', 'http://saqrstore.com/images/THE%20JUNGLE%20BOOK%202%20(%20SPECIAL%20EDITION_B.jpg', 'https://intofilm-resources-production.s3.amazonaws.com/intofilm-production/1720/scaledcropped/870x489/resources/1720/the-jungle-book-ep-disney.jpg'),
(49, 'Frozen', '2013', 'Jennifer Lee,', '1.276 billion USD', 'https://s-media-cache-ak0.pinimg.com/originals/9e/5e/b8/9e5eb8911baf2426df13a87acfa43ebd.jpg', 'https://i.ytimg.com/vi/qFpZPg5oKpI/maxresdefault.jpg'),
(50, 'Spark', '2016', 'Aaron Woodley', 'Woo-Kyung Jung', 'https://img.movietimes.com/unsafe/250x350/http://assets.movietimes.com/v1/posters/384/204334H1.jpg', 'https://mspoweruser.com/wp-content/uploads/2015/09/project-spark.jpg'),
(53, 'Diary of a Wimpy Kid: The Long Haul', '2017', 'David Bowers', '600 USD Dollars', 'https://i2.wp.com/www.myboysandtheirtoys.com/wp-content/uploads/2017/05/Diary-of-a-Whimpy-Kid.jpg?resize=250%2C350', 'https://i.ytimg.com/vi/Hjq9EUfU69I/maxresdefault.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kidsmovielist`
--
ALTER TABLE `kidsmovielist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kidsmovielist`
--
ALTER TABLE `kidsmovielist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
