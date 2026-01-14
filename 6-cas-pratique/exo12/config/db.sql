-- =================
-- Création de la db
-- =================
CREATE DATABASE IF NOT EXISTS lpw_animal
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE lpw_animal;

-- ====================
-- Création des tables
-- ====================
-- Table TYPE
CREATE TABLE type (
    idType TINYINT UNSIGNED AUTO_INCREMENT,
    libelle VARCHAR(30) NOT NULL,
    PRIMARY KEY (IdType)
) ENGINE=InnoDB;

-- Table ANIMAL
CREATE TABLE animal (
    idAnimal TINYINT UNSIGNED AUTO_INCREMENT,
    nom VARCHAR(30) NOT NULL,
    age TINYINT UNSIGNED NOT NULL,
    sexe CHAR(1) NOT NULL,
    `Num Type` TINYINT UNSIGNED NOT NULL,
    PRIMARY KEY (idAnimal),
    CONSTRAINT fk_animal_type
        FOREIGN KEY (`Num Type`)
        REFERENCES type(idType)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- Table IMAGE
CREATE TABLE image (
    idImage TINYINT UNSIGNED AUTO_INCREMENT,
    libelle VARCHAR(30) NOT NULL,
    url VARCHAR(100) NOT NULL,
    PRIMARY KEY (idImage)
) ENGINE=InnoDB;

-- Table de liaison IMAGE_ANIMAL
CREATE TABLE image_animal (
    `Num Animal` TINYINT UNSIGNED NOT NULL,
    `Num Image` TINYINT UNSIGNED NOT NULL,
    PRIMARY KEY (`Num Animal`, `Num Image`),
    CONSTRAINT fk_image_animal_animal
        FOREIGN KEY (`Num Animal`)
        REFERENCES animal(idAnimal)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT fk_image_animal_image
        FOREIGN KEY (`Num Image`)
        REFERENCES image(idImage)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;
