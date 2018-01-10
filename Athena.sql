-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2018 at 01:34 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Athena`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `All`
-- (See below for the actual view)
--
CREATE TABLE `All` (
`id` int(9)
,`firstname` varchar(255)
,`surname` varchar(255)
,`email` varchar(255)
,`password` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1025) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `description`) VALUES
(1, 'Richard Feynman', 'Richard Phillips Feynman was an American physicist known for the path integral formulation of quantum mechanics, the theory of quantum electrodynamics and the physics of the superfluidity of supercooled liquid helium, as well as work in particle physics (he proposed the parton model). For his contributions to the development of quantum electrodynamics, Feynman was a joint recipient of the Nobel Prize in Physics in 1965, together with Julian Schwinger and Sin-Itiro Tomonaga. '),
(2, 'J.K. Rowling', 'Born in Yate, Gloucestershire, England, Rowling was working as a researcher and bilingual secretary for Amnesty International when she conceived the idea for the Harry Potter series while on a delayed train from Manchester to London in 1990. The seven-year period that followed saw the death of her mother, birth of her first child, divorce from her first husband and relative poverty until the first novel in the series, Harry Potter and the Philosopher\'s Stone, was published in 1997. '),
(3, 'Dan Brown', 'The son of a mathematics teacher and a church organist, Brown was raised on a prep school campus where he developed a fascination with the paradoxical interplay between science and religion. These themes eventually formed the backdrop for his books. He is a graduate of Amherst College and Phillips Exeter Academy, where he later returned to teach English before focusing his attention full time to writing.\r\nDan Brown is the author of numerous #1 bestselling novels, including The Da Vinci Code, which has become one of the best selling novels of all time as well as the subject of intellectual debate among readers and scholars. '),
(4, 'George R.R. Martin', 'George R.R. Martin was born September 20, 1948, in Bayonne, New Jersey. His father was Raymond Collins Martin, a longshoreman, and his mother was Margaret Brady Martin. Martin attended Mary Jane Donohoe School and Marist High School. He began writing very young, selling monster stories to other neighborhood children for pennies, dramatic readings included. Martin became a full-time writer in 1979. He was writer-in-residence at Clarke College from 1978-79. Martin\'s present home is Santa Fe, New Mexico. '),
(5, 'Lois Lowry', 'My books have varied in content and style. Yet it seems that all of them deal, essentially, with the same general theme: the importance of human connections. A Summer to Die, my first book, was a highly fictionalized retelling of the early death of my sister, and of the effect of such a loss on a family. Number the Stars, set in a different culture and era, tells the same story: that of the role that we humans play in the lives of our fellow beings.\r\n\r\nThe Giver - and the two books that follow it and make a trilogy (soon to be a quartet! (From Lois Lowry\'s website)'),
(6, 'Suzanne Collins', 'Since 1991, Suzanne Collins has been busy writing for children’s television. She has worked on the staffs of several Nickelodeon shows, including the Emmy-nominated hit Clarissa Explains it All and The Mystery Files of Shelby Woo. For preschool viewers, she penned multiple stories for the Emmy-nominated Little Bear and Oswald. The books she is most successful for in teenage eyes are The Hunger Games, Catching Fire and Mockingjay. These books have won several awards, including the GA Peach Award.'),
(7, 'J.D. Salinger', 'Jerome David Salinger was an American author, best known for his 1951 novel The Catcher in the Rye, as well as his reclusive nature. His last original published work was in 1965; he gave his last interview in 1980. Raised in Manhattan, Salinger began writing short stories while in secondary school, and published several stories in the early 1940s before serving in World War II. Salinger died of natural causes on January 27, 2010, at his home in Cornish, New Hampshire.');

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `pages` int(11) NOT NULL,
  `date_published` date NOT NULL,
  `date_added` date NOT NULL DEFAULT '2018-01-01',
  `description` varchar(1025) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`id`, `title`, `author`, `image`, `availability`, `pages`, `date_published`, `date_added`, `description`) VALUES
(1, 'Surely You\'re Joking Mr Feynman', 'Richard Feynman', 'images/cover_1.jpg', 0, 391, '1997-04-12', '2018-01-01', 'Richard Feynman (1918-1988), winner of the Nobel Prize in physics, thrived on outrageous adventures. Here he recounts in his inimitable voice his experience trading ideas on atomic physics with Einstein and Bohr and ideas on gambling with Nick the Greek; cracking the uncrackable safes guarding the most deeply held nuclear secrets; painting a naked female toreador - and much else of an eyebrow-raising nature.\r\n\r\nIn short, here is Feynman\'s life in all its eccentric glory - a combustible mixture of high intelligence, unlimited curiosity, and raging chutzpah.'),
(2, 'A Song of Ice and Fire', 'George R.R. Martin', 'images/cover_2.jpg', 1, 848, '1996-08-06', '2018-01-01', 'Summers span decades. Winter can last a lifetime. And the struggle for the Iron Throne has begun.\r\n\r\nAs Warden of the north, Lord Eddard Stark counts it a curse when King Robert bestows on him the office of the Hand. His honour weighs him down at court where a true man does what he will, not what he must and where a dead enemy is a thing of beauty.\r\n\r\nThe old gods have no power in the south, Stark\'s family is split and there is treachery at court. Worse, the vengeance-mad heir of the deposed Dragon King has grown to maturity in exile in the Free Cities. He claims the Iron Throne.'),
(3, 'Angels and Demons', 'Dan Brown', 'images/cover_3.jpg', 0, 736, '2000-05-01', '2018-01-01', 'An ancient secret brotherhood.\r\nA devastating new weapon of destruction.\r\nAn unthinkable target... \r\n\r\nWhen world-renowned Harvard symbologist Robert Langdon is summoned to a Swiss research facility to analyze a mysterious symbol -- seared into the chest of a murdered physicist -- he discovers evidence of the unimaginable: the resurgence of an ancient secret brotherhood known as the Illuminati... the most powerful underground organization ever to walk the earth. The Illuminati has surfaced from the shadows to carry out the final phase of its legendary vendetta against its most hated enemy... the Catholic Church. '),
(4, 'The Da Vinci Code', 'Dan Brown', 'images/cover_4.jpg', 1, 481, '2003-03-18', '2018-01-01', 'A fascinating and absorbing thriller -- perfect for history buffs, conspiracy nuts, puzzle lovers or anyone who appreciates a great, riveting story.\r\n\r\nWhile in Paris on business, Harvard symbologist Robert Langdon receives an urgent late-night phone call: the elderly curator of the Louvre has been murdered inside the museum. Near the body, police have found a baffling cipher. While working to solve the enigmatic riddle, Langdon is stunned to discover it leads to a trail of clues hidden in the works of Da Vinci -- clues visible for all to see -- yet ingeniously disguised by the painter.'),
(5, 'The Hunger Games', 'Suzanne Collins', 'images/cover_5.jpg', 1, 374, '2008-08-14', '2018-01-01', 'Winning will make you famous. \r\nLosing means certain death.\r\n\r\nThe nation of Panem, formed from a post-apocalyptic North America, is a country that consists of a wealthy Capitol region surrounded by 12 poorer districts. Early in its history, a rebellion led by a 13th district against the Capitol resulted in its destruction and the creation of an annual televised event known as the Hunger Games. In punishment, and as a reminder of the power and grace of the Capitol, each district must yield one boy and one girl between the ages of 12 and 18 through a lottery system to participate in the games. '),
(6, 'The Giver', 'Lois Lowry', 'images/cover_6.jpg\r\n', 1, 208, '2006-01-24', '2018-01-01', 'Twelve-year-old Jonas lives in a seemingly ideal world. Not until he is given his life assignment as the Receiver does he begin to understand the dark secrets behind this fragile community.\r\n\r\n1994 Newbery Medal winner. Twelve-year-old Jonas lives in a seemingly ideal world. Not until he is given his life assignment as the Receiver does he begin to understand the dark secrets behind this fragile community.'),
(7, 'The Catcher in The Rye', 'J.D. Salinger', 'images/cover_7.jpg\r\n', 1, 277, '2001-01-30', '2018-01-01', '\r\nJ.D. Salinger\'s classic novel of teenage angst and rebellion was first published in 1951. The novel was included on Time\'s 2005 list of the 100 best English-language novels written since 1923. It was named by Modern Library and its readers as one of the 100 best English-language novels of the 20th century. It has been frequently challenged in the court for its liberal use of profanity and portrayal of sexuality and in the 1950\'s and 60\'s it was the novel that every teenage boy wants to read.'),
(8, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 'images/cover_8.jpg\r\n', 1, 320, '1997-06-26', '2018-01-01', 'Harry Potter\'s life is miserable. His parents are dead and he\'s stuck with his heartless relatives, who force him to live in a tiny closet under the stairs. But his fortune changes when he receives a letter that tells him the truth about himself: he\'s a wizard. A mysterious visitor rescues him from his relatives and takes him to his new home, Hogwarts School of Witchcraft and Wizardry.\r\nFull of sympathetic characters, wildly imaginative situations, and countless exciting details, the first installment in the series assembles an unforgettable magical world and sets the stage for many high-stakes adventures to come.');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author-gender` varchar(1) NOT NULL DEFAULT 'M',
  `comment_body` text NOT NULL,
  `book_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `author`, `author-gender`, `comment_body`, `book_id`, `parent_id`, `created_at`) VALUES
(525, 0, 'Jon Snow', 'M', 'Spoiler Alert : I die.', 2, 0, '2017-12-31 00:00:00'),
(526, 5, 'Daenerys Targaryen', 'F', 'Spoiler Alert : He bends the knee.', 2, 0, '2018-01-01 16:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(9) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL DEFAULT 'M',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `surname`, `gender`, `email`, `password`) VALUES
(5, 'Jon', 'Snow', 'M', 'dragonass@gmail.com', '$2y$10$trp3ssv8oY6KGjaGMXpkvO11.Czen7nPXKq/NP1evOKj9yb9i03oG'),
(6, 'Daenerys', 'Targaryen', 'F', 'bendtheknee@gmail.com', '$2y$10$RZ6OH.xMI7IK0GEtSPjpaOcno7agPlYbJXNl52FCpgkrNVPTGnrvK'),
(8, 'Big', 'Woman', 'F', 'savesansa@gmail.com', '$2y$10$LBQns2BPGlFIkTwUpfALROK61b.7ufu7oo8FKO5CMTDO8VE3n0gJa');

-- --------------------------------------------------------

--
-- Structure for view `All`
--
DROP TABLE IF EXISTS `All`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `All`  AS  select `registration`.`id` AS `id`,`registration`.`firstname` AS `firstname`,`registration`.`surname` AS `surname`,`registration`.`email` AS `email`,`registration`.`password` AS `password` from `registration` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=527;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD CONSTRAINT `catalogue_ibfk_1` FOREIGN KEY (`author`) REFERENCES `author` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
