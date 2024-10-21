-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 20 août 2024 à 21:56
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ma_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id_agent` int(5) NOT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id_agent`, `user_name`, `password`) VALUES
(1, 'noella', '7ecd103d7a073893a78cbe43aa0aae44');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(5) NOT NULL,
  `poster_commentaire` varchar(255) DEFAULT NULL,
  `date_commentaire` timestamp NULL DEFAULT current_timestamp(),
  `id_publication` int(5) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `poster_commentaire`, `date_commentaire`, `id_publication`, `email`) VALUES
(1, 'wow une bonne initiative', '2022-09-29 16:07:08', 4, 'divinbadidi@gmail.com'),
(2, 'BRAVO', '2022-10-22 14:54:43', 6, 'noe@gmail.com'),
(3, 'test', '2022-10-31 14:21:35', 6, 'DJIKANGA()'),
(4, 'tete', '2022-10-31 14:23:01', 4, 'DJIKANGA(noe@gmail.com)');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `num_evenement` int(5) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `annee_scolaire` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `individuel`
--

CREATE TABLE `individuel` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `individuel`
--

INSERT INTO `individuel` (`id`, `nom`, `description`, `email`, `date`) VALUES
(2, 'test2', 'test3						\r\n					', '46BFE08/24', '2024-08-20 19:04:47');

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

CREATE TABLE `parent` (
  `code_parent` varchar(15) NOT NULL,
  `nom_de_famille` varchar(25) DEFAULT NULL,
  `sexe` varchar(1) NOT NULL,
  `classes_eleve` varchar(50) DEFAULT NULL,
  `adresse_residence` varchar(50) DEFAULT NULL,
  `telephone_parent` varchar(15) DEFAULT NULL,
  `email_parent` varchar(50) DEFAULT NULL,
  `annee` varchar(25) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `parent`
--

INSERT INTO `parent` (`code_parent`, `nom_de_famille`, `sexe`, `classes_eleve`, `adresse_residence`, `telephone_parent`, `email_parent`, `annee`, `dates`) VALUES
('46BFE08/24', 'BADIDI KAZIMALI', 'M', '7ème', 'kinshasa/01', '243817767357', 'divinbadidi081@gmail.com', '2023-2024', '2024-08-19 17:56:49');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id_publication` int(5) NOT NULL,
  `id_evenement` varchar(255) DEFAULT NULL,
  `description` varchar(550) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `id_agent` int(5) DEFAULT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id_publication`, `id_evenement`, `description`, `image`, `id_agent`, `dates`) VALUES
(4, 'LA RENTREE SCOLAIRE', '						Chers parents, la rentrÃ©e scolaire pour l\'annÃ©e scolairre 2022-2023 est prevue pour le 03 Septembre 2022 Ã  07h 00\'. Tout retard est justifiÃ© Ã  la direction		\r\n										', '631a2e7606b9e2.92740098.jpeg', NULL, '2022-10-31 14:26:59'),
(5, 'reunion de parent', 'chers parents	\r\n					', '633305101ff535.27183186.jpg', NULL, '2022-10-31 14:26:59'),
(6, 'Avis aux parents', '																																										             Chers parents,\r\n              La direction du collÃ¨ge des gÃ©nies Ruta remercie tous les parents qui nous font confiance pour la qualitÃ© de la formation de leurs enfants. A cet effet, pour le bon fonctionnement, nous vous invitons Ã  rÃ©pondre prÃ©sent Ã  l\'assemblÃ©e gÃ©nÃ©rale des parents, ce samedi 05 novembre 2022 Ã  11h30\'. La prÃ©sence de tous est vivement souhaitÃ©e.\r\n\r\n                                                     Franche co', '6342958da45171.10390562.jpeg', NULL, '2022-10-31 14:26:59'),
(7, 'COMMUNIQUE AUX PARENTS', '                    Chers parents,\r\n                     La direction du collÃ¨ge des GÃ©nies Ruta vous informe , le congÃ© de dÃ©tente du premier trimrstre dÃ©bute ce mardi 29/11/2022 et prend fin le samedi 03/11/2022. La reprise des cours est prÃ©vu le lundi 05/11/2022 Ã  07h00\' pour ceux de l\'avant midi. 						\r\n					', '637bd23fbcf595.69115549.jpeg', NULL, '2022-11-21 19:32:15'),
(8, 'avis aux parents', 'chers parents, la direction du collÃ¨ge des gÃ©nies Ruta organise un match de football ce lundi 12 dÃ©cembre 2022 Ã  10h00\' la prÃ©sence de tous nos Ã©lÃ¨ves est souhaitÃ©e. 				', '638cc82a0f93f5.92931899.jpeg', NULL, '2022-12-04 16:17:46'),
(9, 'avis aux parents', 'frg					\r\n					', '638df237d810e3.63843992.jpg', NULL, '2022-12-05 13:29:27');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id_reponse` int(5) NOT NULL,
  `reponse` varchar(500) DEFAULT NULL,
  `date_reponse` date DEFAULT NULL,
  `id_commentaire` int(5) DEFAULT NULL,
  `code_patent` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id_agent`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_publication` (`id_publication`),
  ADD KEY `code_parent` (`email`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`num_evenement`);

--
-- Index pour la table `individuel`
--
ALTER TABLE `individuel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`code_parent`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_publication`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_evenement` (`id_evenement`),
  ADD KEY `id_evenement_2` (`id_evenement`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id_reponse`),
  ADD KEY `id_commentaire` (`id_commentaire`,`code_patent`),
  ADD KEY `code_patent` (`code_patent`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id_agent` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `individuel`
--
ALTER TABLE `individuel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id_publication` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id_reponse` int(5) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_publication`) REFERENCES `publication` (`id_publication`);

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id_agent`);

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_2` FOREIGN KEY (`id_commentaire`) REFERENCES `commentaire` (`id_commentaire`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
