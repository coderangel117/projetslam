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
  `IDCLIENT` int(2) NOT NULL AUTO_INCREMENT,
  `PRENOM` char(32) DEFAULT NULL,
  `NOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDCLIENT`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;


-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `IDCOMMANDE` int(2) NOT NULL AUTO_INCREMENT,
  `IDFOURNISSEUR` int(2) NOT NULL,
  `DATECOMMANDE` date DEFAULT NULL,
  `DATELIVRAISON` date DEFAULT NULL,
  `PRIXCOMMANDE` int(2) DEFAULT NULL,
  PRIMARY KEY (`IDCOMMANDE`),
  KEY `I_FK_COMMANDE_FOURNISSEUR` (`IDFOURNISSEUR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commandeclient`
--

DROP TABLE IF EXISTS `commandeclient`;
CREATE TABLE IF NOT EXISTS `commandeclient` (
  `IDFACTURE` int(2) NOT NULL AUTO_INCREMENT,
  `IDCLIENT` int(2) NOT NULL,
  `DATEFACTURE` date DEFAULT NULL,
  PRIMARY KEY (`IDFACTURE`),
  KEY `I_FK_COMMANDECLIENT_CLIENT` (`IDCLIENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compose`
--

DROP TABLE IF EXISTS `compose`;
CREATE TABLE IF NOT EXISTS `compose` (
  `IDCOMMANDE` int(2) NOT NULL AUTO_INCREMENT,
  `IDPRODUIT` int(2) NOT NULL,
  `QUANTIT?PRODUIT` int(2) DEFAULT NULL,
  PRIMARY KEY (`IDCOMMANDE`,`IDPRODUIT`),
  KEY `I_FK_COMPOSE_COMMANDE` (`IDCOMMANDE`),
  KEY `I_FK_COMPOSE_PRODUITS` (`IDPRODUIT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facturation`
--

DROP TABLE IF EXISTS `facturation`;
CREATE TABLE IF NOT EXISTS `facturation` (
  `IDFACTURE` int(2) NOT NULL AUTO_INCREMENT,
  `IDPRODUIT` int(2) NOT NULL,
  `QUANTIT?PRODUITS` int(2) DEFAULT NULL,
  PRIMARY KEY (`IDFACTURE`,`IDPRODUIT`),
  KEY `I_FK_FACTURATION_COMMANDECLIENT` (`IDFACTURE`),
  KEY `I_FK_FACTURATION_PRODUITS` (`IDPRODUIT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `IDFOURNISSEUR` int(2) NOT NULL AUTO_INCREMENT,
  `NOMFOURNISSEUR` char(32) DEFAULT NULL,
  `ADRESSE` char(32) DEFAULT NULL,
  `TELEPHONE` char(32) DEFAULT NULL,
  `MAIL` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDFOURNISSEUR`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`IDFOURNISSEUR`, `NOMFOURNISSEUR`, `ADRESSE`, `TELEPHONE`, `MAIL`) VALUES
(1, 'NOM', 'adresse', '\'+33 06 15 89 23 45', 'mail@mail.fr'),
(2, 'NOM', 'adresse', '\'+33 06 15 89 23 45', 'mail@mail.fr'),
(3, 'NOM', 'adresse', '\'+33 06 15 89 23 45', 'mail@mail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `IDPRODUIT` int(2) NOT NULL AUTO_INCREMENT,
  `IDRAYON` int(2) NOT NULL,
  `NOMPRODUIT` char(32) DEFAULT NULL,
  `PRIXVENTE` int(2) DEFAULT NULL,
  `PRIXACHAT` int(2) DEFAULT NULL,
  `QUANTIT?STOCK` int(2) DEFAULT NULL,
  PRIMARY KEY (`IDPRODUIT`),
  KEY `I_FK_PRODUITS_RAYON` (`IDRAYON`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rayon`
--

DROP TABLE IF EXISTS `rayon`;
CREATE TABLE IF NOT EXISTS `rayon` (
  `IDRAYON` int(2) NOT NULL AUTO_INCREMENT,
  `NOMRAYON` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDRAYON`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`IDFOURNISSEUR`) REFERENCES `fournisseur` (`IDFOURNISSEUR`);

--
-- Contraintes pour la table `commandeclient`
--
ALTER TABLE `commandeclient`
  ADD CONSTRAINT `commandeclient_ibfk_1` FOREIGN KEY (`IDCLIENT`) REFERENCES `client` (`IDCLIENT`);

--
-- Contraintes pour la table `compose`
--
ALTER TABLE `compose`
  ADD CONSTRAINT `compose_ibfk_1` FOREIGN KEY (`IDCOMMANDE`) REFERENCES `commande` (`IDCOMMANDE`),
  ADD CONSTRAINT `compose_ibfk_2` FOREIGN KEY (`IDPRODUIT`) REFERENCES `produits` (`IDPRODUIT`);

--
-- Contraintes pour la table `facturation`
--
ALTER TABLE `facturation`
  ADD CONSTRAINT `facturation_ibfk_1` FOREIGN KEY (`IDFACTURE`) REFERENCES `commandeclient` (`IDFACTURE`),
  ADD CONSTRAINT `facturation_ibfk_2` FOREIGN KEY (`IDPRODUIT`) REFERENCES `produits` (`IDPRODUIT`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`IDRAYON`) REFERENCES `rayon` (`IDRAYON`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
