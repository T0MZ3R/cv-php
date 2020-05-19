-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2020 at 03:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `competences`
--

CREATE TABLE `competences` (
  `id_competence` int(3) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `pourcentage` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competences`
--

INSERT INTO `competences` (`id_competence`, `nom`, `pourcentage`) VALUES
(10, 'html', 95),
(11, 'css', 85),
(12, 'js', 90),
(13, 'php', 88),
(14, 'sql', 85),
(15, 'C', 85),
(16, 'c++', 92),
(17, 'python', 75),
(18, 'bash', 75),
(19, 'linux', 95);

-- --------------------------------------------------------

--
-- Table structure for table `heroText`
--

CREATE TABLE `heroText` (
  `id_phrase` int(3) NOT NULL,
  `phrase` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heroText`
--

INSERT INTO `heroText` (`id_phrase`, `phrase`) VALUES
(24, 'developpeur web'),
(53, 'developpeur logiciel'),
(55, 'freelance'),
(58, 'etudiant');

-- --------------------------------------------------------

--
-- Table structure for table `paragraphe`
--

CREATE TABLE `paragraphe` (
  `id_paragraphe` int(3) NOT NULL,
  `paragraphe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paragraphe`
--

INSERT INTO `paragraphe` (`id_paragraphe`, `paragraphe`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est tempora ut enim, reiciendis consectetur nihil fugiat quod rerum asperiores modi dolore animi! Aut exercitationem consequatur itaque reiciendis maiores ipsa nesciunt?'),
(2, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum voluptas adipisci provident harum iure natus, dignissimos iste quisquam aut cupiditate hic totam ut reprehenderit error. Cupiditate fuga delectus eos inventore?'),
(3, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab libero voluptatem, deleniti, labore quidem assumenda illo sit minima provident expedita commodi rem quas, ipsa molestias odit consequuntur! Quod, rem minima?'),
(4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi culpa asperiores reprehenderit? Aliquam distinctio, aperiam magni asperiores optio suscipit amet commodi nobis dolor tenetur nostrum ad esse ea ex doloremque?'),
(5, 'UI/UX Designer & Web Developer.');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id_resume` int(3) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `date_debut` varchar(4) NOT NULL,
  `date_fin` varchar(4) DEFAULT NULL,
  `paragraphe` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id_resume`, `nom`, `date_debut`, `date_fin`, `paragraphe`) VALUES
(1, 'Bac', '2015', '2017', 'J\'ai arreté les cours en première.'),
(2, 'Bachechol 1', '2019', NULL, 'Première année de bachelor 1 à paris ynov campus.');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(3) NOT NULL,
  `nom` varchar(35) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `website` varchar(40) NOT NULL,
  `numero_de_telephone` varchar(10) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `diplome` varchar(35) NOT NULL,
  `permis` varchar(25) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `photo_hero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `date_de_naissance`, `website`, `numero_de_telephone`, `ville`, `email`, `diplome`, `permis`, `photo`, `photo_hero`) VALUES
(1, 'Aït', 'Tom', '2000-01-16', 'www.exemple.com', '0611044227', 'Rouen', 'tom.aitouarab@ynov.com', 'BTS - Réseau', 'Voiture', 'assets/vendor/pdp2.jpeg', 'assets/vendor/hero.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id_competence`);

--
-- Indexes for table `heroText`
--
ALTER TABLE `heroText`
  ADD PRIMARY KEY (`id_phrase`);

--
-- Indexes for table `paragraphe`
--
ALTER TABLE `paragraphe`
  ADD PRIMARY KEY (`id_paragraphe`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id_resume`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competences`
--
ALTER TABLE `competences`
  MODIFY `id_competence` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `heroText`
--
ALTER TABLE `heroText`
  MODIFY `id_phrase` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `paragraphe`
--
ALTER TABLE `paragraphe`
  MODIFY `id_paragraphe` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id_resume` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
