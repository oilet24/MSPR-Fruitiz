-- FRUITIZ 

--  Définition des tables


CREATE DATABASE IF NOT EXISTS FRUITIZ DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE FRUITIZ;

CREATE TABLE compte(
  id_use INT(10) AUTO_INCREMENT NOT NULL,
  nom_use VARCHAR(10) NOT NULL,
  mail_use VARCHAR(20) NOT NULL,
  tel_use INT(12),
  adr_use VARCHAR(42),
  vil_use VARCHAR(20),
  mdp_use VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_use)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE recipient (
  id_rec INT(1) AUTO_INCREMENT NOT NULL,
  nom_rec VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_rec)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE fruit (
  id_fru INT(5) AUTO_INCREMENT NOT NULL, 
  nom_fru VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_fru)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE jus (
  id_jus INT(5) AUTO_INCREMENT NOT NULL, 
  nom_jus VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_jus)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE supplement (
  id_sup INT(5) AUTO_INCREMENT NOT NULL, 
  nom_sup VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_sup)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE smoothie (
  id_smo INT(10) AUTO_INCREMENT NOT NULL, 
  id_rec INT(3) NOT NULL,
  id_fru INT(5) NOT NULL,
  id_jus INT(5) NOT NULL,
  id_sup INT(5),
  PRIMARY KEY (id_smo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE recette (
  id_rec INT(5) AUTO_INCREMENT NOT NULL, 
  nom_rec VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_rec)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE historique (
  id_hist INT(10) AUTO_INCREMENT NOT NULL, 
  id_use INT(10) NOT NULL, 
  date_hi DATE NOT NULL, 
  PRIMARY KEY (id_hist)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Clé étrangère

ALTER TABLE smoothie ADD FOREIGN KEY (id_rec) REFERENCES recipient (id_rec);
ALTER TABLE smoothie ADD FOREIGN KEY (id_fru) REFERENCES fruit (id_fru);
ALTER TABLE smoothie ADD FOREIGN KEY (id_jus) REFERENCES jus (id_jus);
ALTER TABLE smoothie ADD FOREIGN KEY (id_sup) REFERENCES supplement (id_sup);
ALTER TABLE recette ADD FOREIGN KEY (id_rec) REFERENCES smoothie (id_smo);
ALTER TABLE historique ADD FOREIGN KEY (id_hist) REFERENCES smoothie (id_smo);
ALTER TABLE historique ADD FOREIGN KEY (id_use) REFERENCES compte (id_use);
