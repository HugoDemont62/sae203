-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mar. 26 mars 2024 à 22:56
-- Version du serveur : 8.1.0
-- Version de PHP : 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `MY_DATABASE`
--

-- --------------------------------------------------------

--
-- Structure de la table `critere`
--

CREATE TABLE `critere` (
  `id` int NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `critere`
--

INSERT INTO `critere` (`id`, `titre`) VALUES
(1, 'Présentation'),
(2, 'Ponctualité - assiduité'),
(3, 'Adaptation au groupe'),
(4, 'Communication'),
(5, 'Organisation'),
(6, 'Décisions'),
(7, 'Connaissances et réalisations'),
(8, 'Appréciation générale'),
(9, 'Présence du maître de stage à la soutenance');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `adresse` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `adresse`, `email`) VALUES
(1, '3DDUO', '99A Boulevard Descat<br>59200 TOURCOING', 'contact@3dduo.com'),
(2, 'APRESTA', '18 rue drêve du Château<br>59184 SAINGHIN EN WEPPES', 'contact@apresta.com'),
(3, 'CERISE MEDIA', '278 Chaussée Fernand Forest<br>59203 TOURCOING CEDEX', 'contact@cerise_media.com'),
(4, 'COM N DESIGN', '86 Avenue Jean Lebas<br>59100 ROUBAIX', 'contact@com_n_design.com'),
(5, 'COMMUNAUTE D\'AGGLOMERATION DE SAINT OMER', '4 Rue Albert Camus<br>62219 LONGUENESSE', 'contact@saint_omer.fr'),
(6, 'EURALENS', '30/32 rue Casimir Beugnet<br>62300 LENS', 'contact@euralens.com'),
(7, 'EWILL', '60 Rue de la Vallée - Immeuble Terralia <br>80000 AMIENS', 'contact@ewill.com'),
(8, 'FACEM WEB', '9 rue des Agaches<br>62000 ARRAS', 'contact@facem.web.com'),
(9, 'FM MEDICAL', '280 rue Berthie Albrecht<br>62110 HENIN BEAUMONT', 'contact@fm_medical.com'),
(10, 'IMAP INSTITUT DES METIERS D\'ART ET DU PATRIMOINE', '14 Bis rue des Rosati<br>62000 ARRAS', 'contact@imap.com'),
(11, 'IUT DE LENS', 'Rue de l\'université SP 16<br>62307 LENS CEDEX', 'contact@iut_lens.com'),
(12, 'IZYLOC', '2 Rue du Maréchal Delattre de Tassigny<br>59420 MOUVAUX', 'contact@izyloc.com'),
(13, 'KACTUS COMMUNICATION', '71 Rue de la Cousinerie<br>59650 VILLENEUVE D\'ASCQ', 'contact@kactus.communication.com'),
(14, 'LES JARDINS D\'ARTOIS', 'Route de Béthune<br>62750 LOOS EN GOHELLE', 'contact@jardins_d_artois.com'),
(15, 'MON CV VIDEO', '125 Avenue Sainte Cécile<br>59130 LAMBERSART', 'contact@mon_cv_video.com'),
(16, 'NOSINO SAS', '294 route d\'outtersteene<br>59270 METEREN', 'contact@nosino.com'),
(17, 'NOZA Distribution / S - Factory', '8 rue Jean Moulin<br>62000 DAINVILLE', 'contact@noza_distribution.com'),
(18, 'PING FLOW', '165 Avenue de bretagne<br>59000 LILLE', 'contact@ping_flow.com'),
(19, 'PIXELIGHT', '130 Rue Racine<br>59200 TOURCOING', 'contact@pixelight.com'),
(20, 'PRINTWAY', '2, 1ère Avenue Zamin<br>59160 LOMME', 'contact@printway.com'),
(21, 'REFERENCE MOI ', '2 rue Voltaire<br>59000 LILLE', 'contact@reference_moi.com'),
(22, 'SARL BADMANIA', '7 Ter Rue de la Couronne<br>62218 LOISON SOUS LENS', 'contact@badmania.com'),
(23, 'SARL INSITACTION', '22 Rue de Bergues<br>59000 LILLE', 'contact@insitaction.com'),
(24, 'SILLIKER GROUP CORPORATION France', 'ZI du petit Pacault<br>59660 MERVILLE', 'contact@silliker_group.com'),
(25, 'SOCIETE DE L\'HOTEL CARLTON', '3 rue de Paris<br>5906 LILLE CEDEX', 'contact@carlton.com'),
(26, 'SOLUTIO CONSEIL', '27 Rue Voltaire<br>62220 CARVIN', 'contact@solutio.conseil.com'),
(27, 'TAMAWAC', '17 rue de la Passe d\'Armes<br>59700 MARCQ EN BAROEUL', 'contact@tamawac.com'),
(28, 'TOOL INVEST', 'Z. A Schumann<br>59560 COMINES', 'contact@tool.invest.com'),
(29, 'VEOLIA', '48 rue des canonniers<br>59000 LILLE', 'contact@veolia.com');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`) VALUES
(1, 'Clows', 'Beret'),
(2, 'Askem', 'Ermina'),
(3, 'Petrashkov', 'Torey'),
(4, 'Jellicorse', 'Abeu'),
(5, 'Drinnan', 'Fredrika'),
(6, 'Proback', 'Mickie'),
(7, 'Rozsa', 'Berta'),
(8, 'Gasnell', 'Alfy'),
(9, 'McKee', 'Blondelle'),
(10, 'Whitty', 'Misty'),
(11, 'Venn', 'Cello'),
(12, 'Loughrey', 'Filippa'),
(13, 'Skala', 'Victoria'),
(14, 'Naton', 'Garfield'),
(15, 'Thorndycraft', 'Lotte'),
(16, 'Hews', 'Camella'),
(17, 'Goburn', 'Henka'),
(18, 'Arnhold', 'Oliviero'),
(19, 'Georghiou', 'Saloma'),
(20, 'Solomonides', 'Michelle'),
(21, 'May', 'Jobey'),
(22, 'Newlands', 'Lucio'),
(24, 'Kirk', 'Noe'),
(25, 'Wickardt', 'Cory'),
(26, 'Rontsch', 'Cyrill'),
(27, 'Rammell', 'Susie'),
(29, 'Harrild', 'Elsinore');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `idStage` int NOT NULL,
  `idCritere` int NOT NULL,
  `valeur` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`idStage`, `idCritere`, `valeur`) VALUES
(2, 1, 4),
(2, 2, 3),
(2, 3, 3),
(2, 4, 4),
(2, 5, 3),
(2, 6, 4),
(2, 7, 3),
(2, 8, 4),
(2, 9, 2),
(3, 1, 3),
(3, 2, 4),
(3, 3, 4),
(3, 4, 3),
(3, 5, 4),
(3, 6, 4),
(3, 7, 3),
(3, 8, 4),
(3, 9, 2),
(4, 1, 4),
(4, 2, 3),
(4, 3, 4),
(4, 4, 3),
(4, 5, 2),
(4, 6, 2),
(4, 7, 2),
(4, 8, 4),
(4, 9, 2),
(8, 1, 4),
(8, 2, 3),
(8, 3, 4),
(8, 4, 3),
(8, 5, 3),
(8, 6, 4),
(8, 7, 3),
(8, 8, 5),
(8, 9, 2),
(9, 1, 2),
(9, 2, 3),
(9, 3, 4),
(9, 4, 3),
(9, 5, 4),
(9, 6, 3),
(9, 7, 3),
(9, 8, 4),
(9, 9, 2);

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `id` int NOT NULL,
  `idEtudiant` int NOT NULL,
  `idEntreprise` int NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `soutenance` date NOT NULL,
  `mission` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `maitre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stage`
--

INSERT INTO `stage` (`id`, `idEtudiant`, `idEntreprise`, `debut`, `fin`, `soutenance`, `mission`, `maitre`, `token`) VALUES
(2, 24, 3, '2024-04-22', '2024-06-21', '2024-06-24', 'Développeur Back end : comprendre le framework et l\'infrastructure de l\'entreprise, développement de fonctionnalités BACK OFFICE, création de scripts automatisés.', 'M. Tatincloux', 'lyxdNULWABpbcbMnA6s1'),
(3, 2, 21, '2024-04-22', '2024-06-21', '2024-06-24', 'Développement web', 'M. Nayet', 'sbT_Lkxd9mLVAbpwGSZ8'),
(4, 20, 3, '2024-04-22', '2024-06-21', '2024-06-24', 'Développeur Front end : maintenance de portail, développement de fonctionnalités Front-end.', 'M. Poix', 'W9YDbtblxyOa7lgbXrMd'),
(8, 3, 18, '2024-04-22', '2024-06-21', '2024-06-24', 'Intégration théme Wordpress - refonte de site web.', 'Mme Gautier', '3WryyirIok0EUE5Z7DJv'),
(9, 17, 7, '2024-04-22', '2024-06-21', '2024-06-24', 'Développer des sites sous environnement wordpress/prestashop', 'M. Rousseau', 'Mff1qd_fxjpA5Q3jUHt8');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mot_de_passe` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `edition` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `mot_de_passe`, `edition`) VALUES
(1, 'admin', '9cf95dacd226dcf43da376cdb6cbba7035218921', 1),
(2, 'prof', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0);

-- --------------------------------------------------------

--
-- Structure de la table `valeur`
--

CREATE TABLE `valeur` (
  `idCritere` int NOT NULL,
  `valeur` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `valeur`
--

INSERT INTO `valeur` (`idCritere`, `valeur`, `description`) VALUES
(1, 1, 'Négligée'),
(1, 2, 'Moyenne'),
(1, 3, 'Bonne'),
(1, 4, 'Excellente'),
(2, 1, 'retards fréquents'),
(2, 2, 'Quelques retards'),
(2, 3, 'Régulier'),
(2, 4, 'Ne ménage pas son temps'),
(3, 1, 'Négatif'),
(3, 2, 'Collabore sans plus'),
(3, 3, 'S\'adapte avec facilité'),
(3, 4, 'Stimule le groupe'),
(4, 1, 'Ne sait pas transmettre'),
(4, 2, 'Déforme souvent'),
(4, 3, 'Comprend et transmet'),
(4, 4, 'Comprend et transmet très rigoureusement'),
(5, 1, 'Ne sait pas s\'organiser'),
(5, 2, 'Manque de méthodes'),
(5, 3, 'S\'organise'),
(5, 4, 'Sens de l\'organisation et autonomie'),
(6, 1, 'Commet des erreurs graves'),
(6, 2, 'Ne sait pas interpréter les demandes'),
(6, 3, 'Doit être assisté'),
(6, 4, 'Prends des décisions efficaces'),
(7, 1, 'Est incapable de réaliser'),
(7, 2, 'Réalise lentement'),
(7, 3, 'Réalise correctement'),
(7, 4, 'Réalise avec efficacité'),
(8, 0, 'Très insuffisant'),
(8, 1, 'Médiocre'),
(8, 2, 'Assez bien'),
(8, 3, 'Bien'),
(8, 4, 'Très bien'),
(8, 5, 'Exceptionnel'),
(9, 1, 'Non'),
(9, 2, 'Oui');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `critere`
--
ALTER TABLE `critere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`idStage`,`idCritere`),
  ADD KEY `idCritere` (`idCritere`),
  ADD KEY `idStage` (`idStage`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEtudiant` (`idEtudiant`),
  ADD KEY `idEntreprise` (`idEntreprise`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `valeur`
--
ALTER TABLE `valeur`
  ADD PRIMARY KEY (`idCritere`,`valeur`),
  ADD KEY `idCritere` (`idCritere`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `critere`
--
ALTER TABLE `critere`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `stage`
--
ALTER TABLE `stage`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`idCritere`) REFERENCES `critere` (`id`),
  ADD CONSTRAINT `reponse_ibfk_2` FOREIGN KEY (`idStage`) REFERENCES `stage` (`id`);

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `stage_ibfk_1` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`id`),
  ADD CONSTRAINT `stage_ibfk_2` FOREIGN KEY (`idEtudiant`) REFERENCES `etudiant` (`id`);

--
-- Contraintes pour la table `valeur`
--
ALTER TABLE `valeur`
  ADD CONSTRAINT `valeur_ibfk_1` FOREIGN KEY (`idCritere`) REFERENCES `critere` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
