-- Active: 1750235329113@@127.0.0.1@3306@librairie

DROP DATABASE IF EXISTS librairie;

CREATE DATABASE librairie;  

USE librairie

CREATE TABLE admins 
(

id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(30),
prenom VARCHAR(30),
mail VARCHAR(50) UNIQUE,
mdp VARCHAR(10)

);

INSERT INTO admins VALUES 
(

NULL,
'CATOIO',
'Julien',
'julien.catoio@ecf.com',
'123456'

);

CREATE TABLE livres 
(

id INT PRIMARY KEY AUTO_INCREMENT,
auteur_id INT,
admin_id INT,
added DATETIME,
titre VARCHAR(30) UNIQUE,
categories VARCHAR(30),
annee_publication INT,
resumes TEXT,
Foreign Key (admin_id) REFERENCES admins(id),
Foreign Key (auteur_id) REFERENCES auteurs(id)

);
CREATE TABLE auteurs 
(

id INT PRIMARY KEY AUTO_INCREMENT,
nom_complet VARCHAR(50),
nationalite VARCHAR(20)

);


INSERT INTO auteurs VALUES 
(

NULL,
"Eric Vain",
"Dislexique"


);
INSERT INTO auteurs VALUES 
(

NULL,
"Panndin Spi",
"Epuisé"


);
INSERT INTO auteurs VALUES 
(

NULL,
"Maldec Rane",
"Fatigué"


);