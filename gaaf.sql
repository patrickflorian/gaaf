-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 26 juil. 2018 à 16:59
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gaaf`
--

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

CREATE TABLE `action` (
  `idAction` int(11) NOT NULL,
  `libelleAction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `codeActivite` varchar(30) NOT NULL,
  `idAction` int(11) DEFAULT NULL,
  `libelleActivite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `idAgent` int(11) NOT NULL,
  `nomAgent` varchar(50) NOT NULL,
  `poste` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `annee`
--

CREATE TABLE `annee` (
  `annee` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `art`
--

CREATE TABLE `art` (
  `codeArt` int(11) NOT NULL,
  `codeChapitre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `beneficiaire`
--

CREATE TABLE `beneficiaire` (
  `idBeneficiaire` int(11) NOT NULL,
  `nom` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

CREATE TABLE `chapitre` (
  `codeChapitre` int(11) NOT NULL,
  `codeSection` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dotation`
--

CREATE TABLE `dotation` (
  `idDotation` int(11) NOT NULL,
  `idTache` int(11) DEFAULT NULL,
  `idExercice` int(11) DEFAULT NULL,
  `valeur` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `engagement`
--

CREATE TABLE `engagement` (
  `idEngagement` int(11) NOT NULL,
  `dateEngagement` date NOT NULL,
  `montant` double DEFAULT NULL,
  `observation` varchar(250) DEFAULT NULL,
  `idBeneficiaire` int(11) DEFAULT NULL,
  `idTache` int(11) DEFAULT NULL,
  `idObjet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exercice`
--

CREATE TABLE `exercice` (
  `idExercice` int(11) NOT NULL,
  `annee` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

CREATE TABLE `objet` (
  `idObjet` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paragraphe`
--

CREATE TABLE `paragraphe` (
  `idParagraphe` int(11) NOT NULL,
  `codeParagraphe` int(11) DEFAULT NULL,
  `codeArt` int(11) DEFAULT NULL,
  `codeActivite` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE `section` (
  `codeSection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `idParagraphe` int(11) DEFAULT NULL,
  `idTache` int(11) NOT NULL,
  `libelleTache` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`idAction`);

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`codeActivite`),
  ADD KEY `idAction` (`idAction`);

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`idAgent`);

--
-- Index pour la table `annee`
--
ALTER TABLE `annee`
  ADD PRIMARY KEY (`annee`);

--
-- Index pour la table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`codeArt`),
  ADD KEY `codeChapitre` (`codeChapitre`);

--
-- Index pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  ADD PRIMARY KEY (`idBeneficiaire`);

--
-- Index pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD PRIMARY KEY (`codeChapitre`),
  ADD KEY `codeSection` (`codeSection`);

--
-- Index pour la table `dotation`
--
ALTER TABLE `dotation`
  ADD PRIMARY KEY (`idDotation`),
  ADD KEY `idTache` (`idTache`),
  ADD KEY `idExercice` (`idExercice`);

--
-- Index pour la table `engagement`
--
ALTER TABLE `engagement`
  ADD PRIMARY KEY (`idEngagement`),
  ADD KEY `idBeneficiaire` (`idBeneficiaire`),
  ADD KEY `idTache` (`idTache`),
  ADD KEY `idObjet` (`idObjet`);

--
-- Index pour la table `exercice`
--
ALTER TABLE `exercice`
  ADD PRIMARY KEY (`idExercice`),
  ADD KEY `annee` (`annee`);

--
-- Index pour la table `objet`
--
ALTER TABLE `objet`
  ADD PRIMARY KEY (`idObjet`);

--
-- Index pour la table `paragraphe`
--
ALTER TABLE `paragraphe`
  ADD PRIMARY KEY (`idParagraphe`),
  ADD KEY `codeArt` (`codeArt`),
  ADD KEY `codeActivite` (`codeActivite`);

--
-- Index pour la table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`codeSection`);

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`idTache`),
  ADD KEY `idParagraphe` (`idParagraphe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `action`
--
ALTER TABLE `action`
  MODIFY `idAction` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `idAgent` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  MODIFY `idBeneficiaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `dotation`
--
ALTER TABLE `dotation`
  MODIFY `idDotation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `engagement`
--
ALTER TABLE `engagement`
  MODIFY `idEngagement` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `objet`
--
ALTER TABLE `objet`
  MODIFY `idObjet` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`idAction`) REFERENCES `action` (`idAction`);

--
-- Contraintes pour la table `art`
--
ALTER TABLE `art`
  ADD CONSTRAINT `art_ibfk_1` FOREIGN KEY (`codeChapitre`) REFERENCES `chapitre` (`codeChapitre`);

--
-- Contraintes pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD CONSTRAINT `chapitre_ibfk_1` FOREIGN KEY (`codeSection`) REFERENCES `section` (`codeSection`);

--
-- Contraintes pour la table `dotation`
--
ALTER TABLE `dotation`
  ADD CONSTRAINT `dotation_ibfk_1` FOREIGN KEY (`idTache`) REFERENCES `tache` (`idTache`),
  ADD CONSTRAINT `dotation_ibfk_2` FOREIGN KEY (`idExercice`) REFERENCES `exercice` (`idExercice`);

--
-- Contraintes pour la table `engagement`
--
ALTER TABLE `engagement`
  ADD CONSTRAINT `engagement_ibfk_1` FOREIGN KEY (`idBeneficiaire`) REFERENCES `beneficiaire` (`idBeneficiaire`),
  ADD CONSTRAINT `engagement_ibfk_2` FOREIGN KEY (`idTache`) REFERENCES `tache` (`idTache`),
  ADD CONSTRAINT `engagement_ibfk_3` FOREIGN KEY (`idObjet`) REFERENCES `objet` (`idObjet`);

--
-- Contraintes pour la table `exercice`
--
ALTER TABLE `exercice`
  ADD CONSTRAINT `exercice_ibfk_1` FOREIGN KEY (`annee`) REFERENCES `annee` (`annee`);

--
-- Contraintes pour la table `paragraphe`
--
ALTER TABLE `paragraphe`
  ADD CONSTRAINT `paragraphe_ibfk_1` FOREIGN KEY (`codeArt`) REFERENCES `art` (`codeArt`),
  ADD CONSTRAINT `paragraphe_ibfk_2` FOREIGN KEY (`codeActivite`) REFERENCES `activite` (`codeActivite`);

--
-- Contraintes pour la table `tache`
--
ALTER TABLE `tache`
  ADD CONSTRAINT `tache_ibfk_1` FOREIGN KEY (`idParagraphe`) REFERENCES `paragraphe` (`idParagraphe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
