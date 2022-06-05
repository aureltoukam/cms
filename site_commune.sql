-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 05 juin 2022 à 19:16
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_commune`
--

-- --------------------------------------------------------

--
-- Structure de la table `Activité`
--

CREATE TABLE `Activité` (
  `id` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Activité`
--

INSERT INTO `Activité` (`id`, `Titre`, `description`, `image`) VALUES
(3, 'mariage', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolorum, laborum dolorem commodi neque maxime nesciunt aliquid totam, natus dolor recusandae esse, itaque sed a inventore ea voluptatem quidem magnam.', '5467756-abstract-lines-for-company-logo-smartphone-app-logos-community-logos-wallpapers-and-more-gratuit-vectoriel.jpg'),
(4, 'réinsertion', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolorum, laborum dolorem commodi neque maxime nesciunt aliquid totam, natus dolor recusandae esse, itaque sed a inventore ea voluptatem quidem magnam.', 'Capture d’écran de 2022-06-03 05-13-18.png'),
(6, 'hexibition', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolorum, laborum dolorem commodi neque maxime nesciunt aliquid totam, natus dolor recusandae esse, itaque sed a inventore ea voluptatem quidem magnam.', 'depositphotos_14006320-stock-illustration-teamwork-union-logo-vector.jpg'),
(7, 'destitution', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolorum, laborum dolorem commodi neque maxime nesciunt aliquid totam, natus dolor recusandae esse, itaque sed a inventore ea voluptatem quidem magnam.', 'Capture d’écran de 2022-06-03 05-13-18.png');

-- --------------------------------------------------------

--
-- Structure de la table `Annonce`
--

CREATE TABLE `Annonce` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Annonce`
--

INSERT INTO `Annonce` (`id`, `titre`, `description`, `image`) VALUES
(3, 'réinsertion', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolorum, laborum dolorem commodi neque maxime nesciunt aliquid totam, natus dolor recusandae esse, itaque sed a inventore ea voluptatem quidem magnam.', 'system_software_update.png');

-- --------------------------------------------------------

--
-- Structure de la table `conseil`
--

CREATE TABLE `conseil` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `conseil`
--

INSERT INTO `conseil` (`id`, `nom`, `prenom`, `qualification`, `photo`) VALUES
(1, 'dimitri', 'tailor', 'sécrétaire', 'erreur.png'),
(4, 'philipe', 'achebest', 'cuisinier en chef', 'EMAG_balanced_meal_shutterstock_54369673_TOP_0_0.jpg'),
(5, 'ghqfsqg', 'xwgfgwh', 'wxhfw', 'CONSEILLÉ.png');

-- --------------------------------------------------------

--
-- Structure de la table `Mission`
--

CREATE TABLE `Mission` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Mission`
--

INSERT INTO `Mission` (`id`, `titre`, `contenu`, `image`) VALUES
(3, 'réinsertion', 'ceci sera donc la réabilitaion de notre cammarade', 'photo_2022-02-28_03-07-35.jpg'),
(6, 'evenementiel', 'restoaration evenementiel historique', 'photo_2022-02-28_03-09-22.jpg'),
(7, 'wxvxhwg', 'wbxxgw', 'designer.png');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`id`, `nom`, `Prenom`, `email`, `fonction`, `cv`, `image`) VALUES
(1, 'arnold', 'jeuneviene', 'tacleur@gmail.com', 'architecte ', '', 'Capture d’écran de 2022-06-03 04-20-49.png'),
(2, 'arnold', 'azerty', 'azerty@gmail.com', 'fonctionnaire', '', 'photo_2022-02-28_03-09-10.jpg'),
(6, 'richard', 'montier', 'montier@gmail.com', 'agriculteur', '', 'bootstrap.png'),
(7, 'paul', 'hassan', 'staf@gmail.com', 'modérateur', '', 'photo_2022-02-21_02-20-57.jpg'),
(8, 'pierre', 'stagiaire', 'pierre@gmail.com', 'pharmacien  0', '', 'depositphotos_14006320-stock-illustration-teamwork-union-logo-vector.jpg'),
(13, 'Jean', 'pierre', 'jeanbernard@gmail.com', 'Expert comptable', '', 'Capture d’écran de 2022-06-03 04-39-19.png'),
(14, 'albert', 'camus', 'alfred@gmail.com', 'ministre', '', 'COVID-19-Relief_Small-Farms-.jpg'),
(15, 'hfsfsd', 'qhhfq', 'wxcwgh@gmail.com', 'qsgfqghs', 'Et3-2CasUtilisation.pdf', 'depositphotos_14006320-stock-illustration-teamwork-union-logo-vector.jpg'),
(16, 'julien', 'celmen', 'celman@gmail.com', 'public', 'listaexerciciosMachineLearning06.pdf', '5467756-abstract-lines-for-company-logo-smartphone-app-logos-community-logos-wallpapers-and-more-gratuit-vectoriel.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `id` int(11) NOT NULL,
  `nom_Mairie` varchar(255) NOT NULL,
  `Story` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `nom_Mairie`, `Story`, `image`) VALUES
(4, 'comune de yaoundé 7', '<p><b>C’est en 1472 que le portugais Fernando Pô, au cours d’un périple le long de la côte Ouest africaine, découvre l’estuaire du Wouri au fond de la baie de Biafra. Il donne le nom de Rio dos Camaroes au fleuve à cause de la présence de nombreux crustacés qui flottent sur les eaux. En 1508, un certain Duarte Pacheco Pereira affirme que les gens du Rios dos Camaroes disposent de pêcheries, mais ne donne aucune indication sur la présence d’une agglomération importante sur le Rio. Il faut attendre trois siècles plus tard, en 1810 pour entendre le britannique Roberton parler de deux villes situées sur le Rio, l’une en face de l’autre à 15miles de l’entrée de l’estuaire. L’une des deux villes située sur la rive gauche est la ville commerçante; il l’appelle Cameroontown. Sur la rive droite, il n’y a aucune activité commerciale; la ville est appelée Hickorytown. C’est Richard Mother Jackson qui, le premier en 1826, donne tous les détails sur Cameroontown. D’après lui, Cameroontown comprend de nombreux quartiers construits le long des berges du fleuve sur les plateaux qui le dominent. En fait, ce que Jackson appelle quartiers, ce sont les villages regroupant les différents sous lignages des lignages des descendants d’un même ancêtre: “Ewalè a Mbedi”, Ewalè qui est l’éponyme de Douala. Les villages de chaque sous lignage sont disposés en bandes perpendiculaires au fleuve, sur le plateau appartenant au lignage regroupé en clan.</b></p>', '');

-- --------------------------------------------------------

--
-- Structure de la table `Projet`
--

CREATE TABLE `Projet` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `debut` date NOT NULL,
  `fin` date DEFAULT NULL,
  `deroulement` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Projet`
--

INSERT INTO `Projet` (`id`, `nom`, `debut`, `fin`, `deroulement`, `image`) VALUES
(1, 'gdgfdg', '2022-02-01', '2024-04-25', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolorum, laborum dolorem commodi neque maxime nesciunt aliquid totam, natus dolor recusandae esse, itaque sed a inventore ea voluptatem quidem magnam.', 'facebook.png');

-- --------------------------------------------------------

--
-- Structure de la table `pub`
--

CREATE TABLE `pub` (
  `id` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pub`
--

INSERT INTO `pub` (`id`, `contenu`, `image`) VALUES
(2, 'bvwbxnwvhjx', 'Capture d’écran de 2022-06-03 04-20-49.png');

-- --------------------------------------------------------

--
-- Structure de la table `Site`
--

CREATE TABLE `Site` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `thème_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Tourisme`
--

CREATE TABLE `Tourisme` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Tourisme`
--

INSERT INTO `Tourisme` (`id`, `nom`, `description`, `image`) VALUES
(2, 'bxwgcxw', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, quidem error! Alias modi natus, non, officiis quaerat odit vitae cupiditate, placeat minima nam consequatur mollitia fuga ea ipsam! Voluptas laborum aperiam, neque distinctio rerum et iure maxime natus tempore doloribus!', 'Capture d’écran de 2022-06-03 04-39-29.png');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profil_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`id`, `username`, `nom`, `email`, `password`, `profil_pic`) VALUES
(1, 'darkness', 'dsd', 'takoubrown@gmail.com', 'sdsfdsfsdf', NULL),
(2, 'azerty', 'lol', 'takmlsrown@gmail.com', 'azerty3456', NULL),
(4, 'gefeg', 'hqjsgq', 'jdhsmlsrown@gmail.com', '$2y$10$E9SWIihWUQXOmkBwWJ86VuHMsu4DDB9CTBhmQEn1T/2BGl0VJ6TqO', NULL),
(8, 'fitler', 'afred', 'martialtop@gamil.com', '$2y$10$s10Degy3BCyaL1n1lzDhF.CviCt9aRuYXkgGt113s0d5nn06KarzO', NULL),
(9, 'martin', 'paul', 'allan@gmail.com', '$2y$10$gi.Fb./2HsVDjW5d637D8.aL0phiapzxptqa5AMU.O4P3eRkBJX3O', NULL),
(10, 'gshds', 'xgfsd', 'sdsgh@gmail.com', '$2y$10$faQdhM0YwIgPRxT400yxM.s4tNdVZfSVS.PMQn4niDDiJfhqLhD1a', NULL),
(11, 'armel', 'thoma', 'azerty@gmail.com', '$2y$10$IEo3nhD9TEEdnvRDY0FumeP8wFdDGso0EklIyrrMHuRNGvK3/Epka', NULL),
(12, 'vnvwnbx', 'nwnwvx', 'wxvn@gmail.com', '$2y$10$AOMd903ps2iesVTPvrMrIu1PuHNMdTUGDDotDp3oh.lVfzVIZS/.C', 'Capture d’écran de 2022-06-03 04-20-49.png'),
(13, 'bcbc', 'vx vx', 'vxv@gmail.com', '$2y$10$MmeBgAM8/wiVtPbCsMDjf./OefA88mCJdTZQZirLtIOPh4oITzXRa', 'Flat Boy With Glasses Vector Illustration-02.jpg'),
(14, 'bonjour', 'seinsei', 'morning@gmail.com', '$2y$10$57mvZ2DoC/tXs8Acx3KF3.tgHQFegGmuNNDXwpZprs2cIqcKTqbyS', ''),
(15, 'alfred', 'saker', 'sakeralfred@gmail.com', '$2y$10$3MNyOBCHMGerOd71Xcf8ReH7S8H6qiBRwgDARuT4D6idTwZjaPFqO', ''),
(16, 'j', 'fdf', 'morning@gmail.com', '$2y$10$mT/3TwLo2ZSX9TdfyZ38v.ksyBOWZgrx04eA.aqfb3wdh8cl5j59y', 'bug bug .png'),
(17, 'PPO', 'dsd', 'jdhsmlsrown@gmail.com', '$2y$10$yDlbiEGbpWzDBF7tPK2/5.YkF/LAQCTZmuyKI.Bimg/srZEjUB0nm', 'bootstrap.png'),
(18, 'PO', 'H', 'jdhsmlsrown@gmail.com', '$2y$10$ikYcMyebDjU88XBGQE2r2eB9elwg/bELOnWHnxKWk612dOR2m57CC', 'bootstrap.png'),
(19, 'jkkwxwx', 'xxxsx', 'poax', '$2y$10$21QeYJDhmUvjpjZMDiiyHe7kanR.j1AISGu0MyUvEOF94J2CGQ2UG', 'Capture d’écran de 2022-06-03 04-39-19.png'),
(20, 'hjgcsc', 'qshxvqhs', 'vxqhsvqq', '$2y$10$5mNw/t5xojHKcxha3S3MjuGM0RqKM8r80hfGH6SD2igoNKXUzhW5i', 'Capture d’écran de 2022-06-03 04-21-24.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Activité`
--
ALTER TABLE `Activité`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Annonce`
--
ALTER TABLE `Annonce`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `conseil`
--
ALTER TABLE `conseil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Mission`
--
ALTER TABLE `Mission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Projet`
--
ALTER TABLE `Projet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pub`
--
ALTER TABLE `pub`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Site`
--
ALTER TABLE `Site`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Tourisme`
--
ALTER TABLE `Tourisme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Activité`
--
ALTER TABLE `Activité`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Annonce`
--
ALTER TABLE `Annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `conseil`
--
ALTER TABLE `conseil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Mission`
--
ALTER TABLE `Mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Projet`
--
ALTER TABLE `Projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pub`
--
ALTER TABLE `pub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Site`
--
ALTER TABLE `Site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Tourisme`
--
ALTER TABLE `Tourisme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
