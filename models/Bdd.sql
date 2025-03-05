-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 07 avr. 2022 à 01:36
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `summary` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `year`, `summary`) VALUES
(1, 'Le monde s\'effondre', 'Chinua Achebe', 1958, 'Le protagoniste du roman, Okonkwo, est célèbre dans les villages d\'Umuofia pour ses talents de lutteur, battant un lutteur surnommé Amalinze le chat (parce qu\'il ne tombe jamais sur le dos). Okonkwo est fort, travailleur et s\'efforce de ne montrer aucune faiblesse. Il veut faire oublier le souvenir de son père Unoka, de ses dettes impayées, de sa négligence envers sa femme et ses enfants, et de sa lâcheté à la vue du sang. Okonkwo travaille à bâtir sa richesse entièrement seul, car Unoka est mort d\'une mort honteuse et ne lui a laissé que de nombreuses dettes. Il est aussi obsédé par sa masculinité, et tout petit compromis à ce sujet est rapidement renié. Par conséquent, il bat souvent ses femmes et ses enfants, et il est méchant avec ses voisins. Sa volonté d\'échapper à l\'héritage de son père le conduit à être riche, courageux et puissant parmi les gens de son village. C\'est un leader de son village. Il a atteint une position dans sa société pour laquelle il s\'est battu toute sa vie.'),
(2, 'Contes', 'Hans Christian Andersen', 1835, 'Les cent cinquante-six contes d\'Andersen ont tous été traduits en français, mais les titres varient d\'une édition à l\'autre. Ainsi Le Stoïque Soldat de plomb, peut devenir L\'Intrépide soldat de plomb ou L\'Inébranlable soldat de plomb. La Petite Sirène porte aussi le titre de La Petite ondine.'),
(3, 'Orgueil et Préjugés', 'Jane Austen', 1813, 'À Longbourn, petit bourg du Hertfordshire, sous le règne du roi George III, Mrs Bennet est déterminée à marier ses cinq filles afin d\'assurer leur avenir53, compromis par certaines dispositions testamentaires. Lorsqu\'un riche jeune homme, Mr Bingley, loue Netherfield, le domaine voisin, elle espère vivement qu\'une de ses filles saura lui plaire assez pour qu\'il l\'épouse. Malheureusement il est accompagné de ses deux sœurs, Caroline et Louisa, plutôt imbues d\'elles-mêmes, et d\'un ami très proche, Mr Darcy, jeune homme immensément riche, propriétaire d\'un grand domaine dans le Derbyshire, mais très dédaigneux et méprisant envers la société locale. '),
(4, 'Le Père Goriot', 'Honoré de Balzac', 1835, 'Le roman s\'ouvre en 1819, avec la description sordide et répugnante du quartier du Val-de-Grâce et de la Maison-Vauquer, une pension parisienne située dans la rue Neuve-Sainte-Geneviève et appartenant à la veuve madame Vauquer. Plusieurs résidents s\'y côtoient, dont : Eugène de Rastignac, jeune étudiant en droit, ambitieux, à l\'esprit sagace et d\'origine modeste ; un mystérieux personnage au physique imposant et aux manières un peu rustres et grossières, nommé Vautrin ; et un ancien vermicellier ayant fait fortune pendant la Révolution, maintenant retraité, complètement désargenté et veuf, surnommé le père Goriot. À l\'époque où ce dernier est arrivé à la pension, lorsqu\'il était encore riche, la veuve Vauquer nourrissait le désir quelque peu intéressé de se marier avec lui. Mais après une malheureuse affaire dont la veuve Vauquer a injustement rejeté la faute sur M. Goriot, celle-ci s\'est mise à développer une certaine aversion pour lui et à entreprendre quelques mesquineries à son égard. C\'est elle, en particulier, qui lui a donné le surnom de \"Père Goriot\" en remplacement de \"M. Goriot\". Les médisances répétées de la veuve Vauquer à son sujet feront de lui le souffre-douleur de la pension. Son caractère taciturne n\'arrange pas les choses et laisse le champ libre aux allégations les plus fantaisistes, comme un supposé libertinage  ou une prétendue déficience mentale. Logent également dans la pension d\'autres personnes, comme mademoiselle Michonneau ou Horace Bianchon. '),
(5, 'Les Hauts de Hurlevent', 'Emily Brontë', 1847, 'Une histoire d\'amour et de vengeance dans un paysage sauvage de l\'Angleterre : Mr Earnshaw, père d\'Hindley et de Catherine, adopte Heathcliff qui tombe amoureux de Catherine tandis qu\'une rivalité s\'instaure entre lui et Hindley...'),
(6, 'L\'Étranger', 'Albert Camus', 1942, 'Le roman met en scène un personnage-narrateur nommé Meursault, vivant à Alger en Algérie française. Le roman est découpé en deux parties.\r\n\r\nAu début de la première partie, Meursault reçoit un télégramme annonçant que sa mère, qu\'il a placée à l’hospice de Marengo, vient de mourir. Il se rend en autocar à l’asile de vieillards, situé près d’Alger. Veillant la morte toute la nuit, il assiste le lendemain à la mise en bière et aux funérailles, sans avoir l\'attitude attendue d’un fils endeuillé ; le protagoniste ne pleure pas, il ne veut pas simuler un chagrin qu\'il ne ressent pas. '),
(7, 'Voyage au bout de la nuit', 'Louis-Ferdinand Céline', 1932, 'Voyage au bout de la nuit est un récit à la première personne dans lequel le personnage principal raconte son expérience de la Première Guerre mondiale, du colonialisme en Afrique, des États-Unis de l\'entre-deux guerres et de la condition sociale en général.\r\nFerdinand Bardamu a vécu la Grande Guerre et vu de près l\'ineptie meurtrière de ses supérieurs dans les tranchées. C\'est la fin de son innocence. C\'est aussi le point de départ de sa descente aux enfers sans retour. Ce long récit est d\'abord une dénonciation des horreurs de la guerre, dont le pessimisme imprègne toute l\'œuvre. Il part ensuite pour l\'Afrique, où le colonialisme est le purgatoire des Européens sans destinée. Pour lui c\'est même l\'Enfer, et il s\'enfuit vers l\'Amérique de Ford, du dieu Dollar et des bordels. Bardamu n\'aime pas les États-Unis, mais c\'est peut-être le seul lieu où il ait pu rencontrer un être (Molly) qu\'il aima (et qui l\'aima) jusqu\'au bout de son voyage sans fond.\r\n\r\nMais la vocation de Bardamu n\'est pas de travailler sur les machines des usines de Détroit ; c\'est de côtoyer la misère humaine, quotidienne et éternelle. Il retourne donc en France pour terminer ses études de médecine et devenir médecin des pauvres. Il exerce alors dans la banlieue parisienne, où il rencontre la même détresse qu\'en Afrique ou dans les tranchées de la Première Guerre mondiale. ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;