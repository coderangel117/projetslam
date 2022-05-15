-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 19 mai 2021 à 08:04
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetslam`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `IdClient` int(2) NOT NULL AUTO_INCREMENT,
  `Prenom` char(32) DEFAULT NULL,
  `Nom` char(32) DEFAULT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;


-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `IdCommande` int(2) NOT NULL AUTO_INCREMENT,
  `IdFournisseur` int(2) NOT NULL,
  `DateCommande` date DEFAULT NULL,
  `DateLivraison` date DEFAULT NULL,
  `PrixCommande` int(2) DEFAULT NULL,
  PRIMARY KEY (`IdCommande`),
  KEY `I_FK_COMMANDE_FOURNISSEUR` (`IdFournisseur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commandeclient`
--

DROP TABLE IF EXISTS `commandeclient`;
CREATE TABLE IF NOT EXISTS `commandeclient` (
  `IdFacture` int(2) NOT NULL AUTO_INCREMENT,
  `IdClient` int(2) NOT NULL,
  `DateFacture` date DEFAULT NULL,
  PRIMARY KEY (`IDFACTURE`),
  KEY `I_FK_COMMANDECLIENT_CLIENT` (`IdClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compose`
--

DROP TABLE IF EXISTS `compose`;
CREATE TABLE IF NOT EXISTS `compose` (
  `IdCommande` int(2) NOT NULL AUTO_INCREMENT,
  `IdProduit` int(2) NOT NULL,
  `QuantiteProduit` int(2) DEFAULT NULL,
  PRIMARY KEY (`IdCommande`,`IdProduit`),
  KEY `I_FK_COMPOSE_COMMANDE` (`IdCommande`),
  KEY `I_FK_COMPOSE_PRODUITS` (`IdProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facturation`
--

DROP TABLE IF EXISTS `facturation`;
CREATE TABLE IF NOT EXISTS `facturation` (
  `IdFacture` int(2) NOT NULL AUTO_INCREMENT,
  `IdProduit` int(2) NOT NULL,
  `QuantiteProduit` int(2) DEFAULT NULL,
  PRIMARY KEY (`IdFacture`,`IdProduit`),
  KEY `I_FK_FACTURATION_COMMANDECLIENT` (`IdFacture`),
  KEY `I_FK_FACTURATION_PRODUITS` (`IdProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `IdFournisseur` int(2) NOT NULL AUTO_INCREMENT,
  `NomFournisseur` char(32) DEFAULT NULL,
  `Adresse` char(32) DEFAULT NULL,
  `Telephone` char(32) DEFAULT NULL,
  `Mail` char(32) DEFAULT NULL,
  PRIMARY KEY (`IdFournisseur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`IdFournisseur`, `NomFournisseur`, `Adresse`, `Telephone`, 'Mail') VALUES
(1, 'NOM', 'adresse', '\'+33 06 15 89 23 45', 'mail@mail.fr'),
(2, 'NOM', 'adresse', '\'+33 06 15 89 23 45', 'mail@mail.fr'),
(3, 'NOM', 'adresse', '\'+33 06 15 89 23 45', 'mail@mail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `IdProduit` int(2) NOT NULL AUTO_INCREMENT,
  `IdRayon` int(2) NOT NULL,
  `NomProduit` char(32) DEFAULT NULL,
  `PrixVente` int(2) DEFAULT NULL,
  `PrixAchat` int(2) DEFAULT NULL,
  `QuantiteStock` int(2) DEFAULT NULL,
  PRIMARY KEY (`IdProduit`),
  KEY `I_FK_PRODUITS_RAYON` (`IdRayon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rayon`
--

DROP TABLE IF EXISTS `rayon`;
CREATE TABLE IF NOT EXISTS `rayon` (
  `IdRayon` int(2) NOT NULL AUTO_INCREMENT,
  `NomRayon` char(32) DEFAULT NULL,
  PRIMARY KEY (`IdRayon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`IdFournisseur`) REFERENCES `fournisseur` (`IdFournisseur`);

--
-- Contraintes pour la table `commandeclient`
--
ALTER TABLE `commandeclient`
  ADD CONSTRAINT `commandeclient_ibfk_1` FOREIGN KEY (`IdClient`) REFERENCES `client` (`IdClient`);

--
-- Contraintes pour la table `compose`
--
ALTER TABLE `compose`
  ADD CONSTRAINT `compose_ibfk_1` FOREIGN KEY (`IdCommande`) REFERENCES `commande` (`IdCommande`),
  ADD CONSTRAINT `compose_ibfk_2` FOREIGN KEY (`IdProduit`) REFERENCES `produits` (`IdProduit`);

--
-- Contraintes pour la table `facturation`
--
ALTER TABLE `facturation`
  ADD CONSTRAINT `facturation_ibfk_1` FOREIGN KEY (`IdFacture`) REFERENCES `commandeclient` (`IdFacture`),
  ADD CONSTRAINT `facturation_ibfk_2` FOREIGN KEY (`IdProduit`) REFERENCES `produits` (`IdProduit`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`IdRayon`) REFERENCES `rayon` (`IdRayon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
