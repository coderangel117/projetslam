DROP DATABASE IF EXISTS projetslam;

CREATE DATABASE IF NOT EXISTS projetslam;
USE projetslam;
# -----------------------------------------------------------------------------
#       TABLE : FOURNISSEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FOURNISSEUR
 (
   IDFOURNIISSEUR CHAR(32) NOT NULL  ,
   NOMFOURNISSEUR CHAR(32) NULL  ,
   ADRESSE CHAR(32) NULL  ,
   TELEPHONE INTEGER(2) NULL  ,
   MAIL CHAR(32) NULL  
   , PRIMARY KEY (IDFOURNIISSEUR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : COMMANDE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMMANDE
 (
   IDCOMMANDE INTEGER(2) NOT NULL AUTO_INCREMENT ,
   IDFOURNIISSEUR CHAR(32) NOT NULL  ,
   DATECOMMANDE DATE NULL  ,
   DATELIVRAISON DATE NULL  ,
   PRIXCOMMANDE INTEGER(2) NULL  
   , PRIMARY KEY (IDCOMMANDE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE COMMANDE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_COMMANDE_FOURNISSEUR
     ON COMMANDE (IDFOURNIISSEUR ASC);

# -----------------------------------------------------------------------------
#       TABLE : COMMANDECLIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMMANDECLIENT
 (
   IDFACTURE INTEGER(2) NOT NULL AUTO_INCREMENT ,
   IDCLIENT CHAR(32) NOT NULL  ,
   DATEFACTURE DATE NULL  
   , PRIMARY KEY (IDFACTURE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE COMMANDECLIENT
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_COMMANDECLIENT_CLIENT
     ON COMMANDECLIENT (IDCLIENT ASC);

# -----------------------------------------------------------------------------
#       TABLE : CLIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLIENT
 (
   IDCLIENT CHAR(32) NOT NULL  ,
   PRENOM CHAR(32) NULL  ,
   NOM CHAR(32) NULL  
   , PRIMARY KEY (IDCLIENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PRODUITS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PRODUITS
 (
   IDPRODUIT CHAR(32) NOT NULL  ,
   IDRAYON CHAR(32) NOT NULL  ,
   NOMPRODUIT CHAR(32) NULL  ,
   PRIXVENTE INTEGER(2) NULL  ,
   PRIXACHAT INTEGER(2) NULL  ,
   QUANTITÉSTOCK INTEGER(2) NULL  
   , PRIMARY KEY (IDPRODUIT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PRODUITS
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PRODUITS_RAYON
     ON PRODUITS (IDRAYON ASC);

# -----------------------------------------------------------------------------
#       TABLE : RAYON
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RAYON
 (
   IDRAYON CHAR(32) NOT NULL  ,
   NOMRAYON CHAR(32) NULL  
   , PRIMARY KEY (IDRAYON) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : FACTURATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FACTURATION
 (
   IDFACTURE INTEGER(2) NOT NULL  ,
   IDPRODUIT CHAR(32) NOT NULL  ,
   QUANTITÉPRODUITS INTEGER(2) NULL  
   , PRIMARY KEY (IDFACTURE,IDPRODUIT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE FACTURATION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_FACTURATION_COMMANDECLIENT
     ON FACTURATION (IDFACTURE ASC);

CREATE  INDEX I_FK_FACTURATION_PRODUITS
     ON FACTURATION (IDPRODUIT ASC);

# -----------------------------------------------------------------------------
#       TABLE : COMPOSE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMPOSE
 (
   IDCOMMANDE INTEGER(2) NOT NULL  ,
   IDPRODUIT CHAR(32) NOT NULL  ,
   QUANTITÉPRODUIT INTEGER(2) NULL  
   , PRIMARY KEY (IDCOMMANDE,IDPRODUIT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE COMPOSE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_COMPOSE_COMMANDE
     ON COMPOSE (IDCOMMANDE ASC);

CREATE  INDEX I_FK_COMPOSE_PRODUITS
     ON COMPOSE (IDPRODUIT ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE COMMANDE 
  ADD FOREIGN KEY FK_COMMANDE_FOURNISSEUR (IDFOURNIISSEUR)
      REFERENCES FOURNISSEUR (IDFOURNIISSEUR) ;


ALTER TABLE COMMANDECLIENT 
  ADD FOREIGN KEY FK_COMMANDECLIENT_CLIENT (IDCLIENT)
      REFERENCES CLIENT (IDCLIENT) ;


ALTER TABLE PRODUITS 
  ADD FOREIGN KEY FK_PRODUITS_RAYON (IDRAYON)
      REFERENCES RAYON (IDRAYON) ;


ALTER TABLE FACTURATION 
  ADD FOREIGN KEY FK_FACTURATION_COMMANDECLIENT (IDFACTURE)
      REFERENCES COMMANDECLIENT (IDFACTURE) ;


ALTER TABLE FACTURATION 
  ADD FOREIGN KEY FK_FACTURATION_PRODUITS (IDPRODUIT)
      REFERENCES PRODUITS (IDPRODUIT) ;


ALTER TABLE COMPOSE 
  ADD FOREIGN KEY FK_COMPOSE_COMMANDE (IDCOMMANDE)
      REFERENCES COMMANDE (IDCOMMANDE) ;


ALTER TABLE COMPOSE 
  ADD FOREIGN KEY FK_COMPOSE_PRODUITS (IDPRODUIT)
      REFERENCES PRODUITS (IDPRODUIT) ;

