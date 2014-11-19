**************************************************************
***********************************************************
http://sqlpro.developpez.com/cours/sqlaz/sousrequetes/

****************************************************
********************************************************

phpMyAdmin : gestionnaire de MySQL ecrit en php
acceder à apache de l'ordi

http://localhost

puis appeler phpmyadmin -> ajouter son nom

http://localhost/phpmyadmin

il va chercher index.php

clé étrangère : est la clé secondaire de la table 1 qui est la clé primaire
 de la tab2 -> de la tab1 on peut appeler id tab2


sql :

nom tab = miniscule
nom colone: minuscule
les command : majuscule
*= all
on est ds 1 tab -> *=toutes les colonnes

(on est ds 1 tab, colone à droite ns affcihe tous les nom de cet tab->2click il va ajouter
à l'endroit où on veut

SELECT * FROM student -> executer
SELECT id FROM student -> executer
SELECT id,name FROM student -> executer
SELECT id,name FROM student LIMIT 0 , 2-> executer

1er chiffre : poitn départ ds la liste des résultat
2è :le nbr delignes à affichier

SELECT * FROM student ORDER BY name ASC limit 0,10 -> ascendant (default )
SELECT * FROM student ORDER BY name DESC limit 0,10 -> descendant

SELECT * FROM student WHERE name LIKE "%a%" : ts les etudeient dont le nom contient "a"
SELECT * FROM student WHERE name LIKE "W%" : ts les etudeient dont le nom commence par "W"
SELECT * FROM student WHERE name LIKE "%e" : ts les etudeient dont le nom fini par "e"

monter zone SQL : pr retourner en arrière pr modif qc sans refaire tout



WHERE id= 24 : TROUVER QQUE ID =24
WHERE id != 24 :  id #  de 24
WHERE id > 24 :  id >  de 24
WHERE id >= 24 :  id >=  de 24
WHERE id < 24 :  id <  de 24
WHERE id <= 24 :  id <=  de 24

WHERE birthday < "1964-10-10" :

WHERE birthday > "1964-10-10"  AND birthday > "2014-10-10"  : fo 2 fois birthday

WHERE ( birthday >   "1964-10-10"  AND birthday > "1974-10-10")
OR    ( birthday > "1994-10-10"  AND birthday > "2014-10-10" )
ORDER BY birthday ASC






*******
Ivan
********

SELECT departement.name , sum(city.surface)
FROM departement , city
WHERE city.department=departement.number AND departement.name = "Gironde"
GROUP BY city.department


remplace 'departement.name' par *
enlever la clause : AND departement.name = "Gironde"
ajouter : ORDER BY sum(city.surface)

=> affichier les surdface de tos les department en lordre croissant
si on ajoute DESC =>affichier les surdface de tos les department en lordre décroissant


chercher ds department le name , calcul sum de surface ds city , cstocker ds  1tan de
2 colone

*******************

EXEMPLE 2 de BGroup by :

SELECT city.name, city.department
FROM city
GROUP BY city.name ASC
*******************************

exemplE 3

SELECT departement.name , sum(city.surface)
FROM departement , city
WHERE city.department=departement.number AND departement.name = "Gironde"
GROUP BY city.department

IL Y A BCP DES CHOSES QUI REPETE , DELACERER VARIABLE DANS FROM pr simplifier les nom de tab , pas pr les nom des colonnes car après on ne sais plus quel variable c'est

FROM departement AS d , city AS c
// prend department comme variable d, city comme variable c


donc, nouvelle requete :

SELECT d.name , sum(c.surface)

FROM departement AS d , city AS c

WHERE c.department=d.number AND d.name = "Gironde"

GROUP BY c.department


*********************

les fonction :

sum() , min() , max(), avr(), count(*)


ex :
SELECT* FROM student
WHERE birthday BETWEEN "1984-10-10" AND "1984-10-10"  ( ENTRE CES  VALEURS COMPRIS)

IN = racourci type SWITCH

ex :

WHERE city.department IN(75,77,78,91,92,93,94,95)

SELECT d.name ,sum(c.surface)

FROM departement AS d , city AS c

WHERE c.department IN(75,77,78,91,92,93,94,95) ORDER

BY c.department ;


***********


Exercice SQL 1 : requêtes

Dans cet exercice, nous voulons les requêtes permettant d'afficher :

1* les numéros et noms des départements par ordre alphabétique

SELECT `number`,`name` FROM `departement` ORDER BY `name` ASC ;

2* les départements dont le numéro est entre 1 et 15
SELECT * FROM `departement` WHERE `number` > 1 AND `number` < 15;

3* le nombre total de villes en france

SELECT count(*) FROM `city`;

4* le nombre de départements en aquitaine

SELECT number FROM region WHERE name= "Aquitaine";

5* le nombre de villes en france de plus de 200.000 habitants

SELECT count(*) FROM `city` WHERE population > 200000 ;


6* la superficie totale de la gironde :

SELECT d.name , sum(c.surface)

FROM departement AS d , city AS c

WHERE c.department=d.number AND d.name = "Gironde"

GROUP BY c.department


7* le département le plus vaste en france


8* la supérficie du département le plus vaste de france
9* le plus vaste département d'ile de france
10* la région ayant le plus de villes, sa ville la plus vaste, sa ville la plus peuplée
11* les étudiants nés avant 1940
12* le nombre d'étudiants de plus de 70 ans?
13* la ville rassemblant le plus d'etudiants

Modifié le: mardi 3 juin 2014, 11:54



///////////*************************************/////////////////

EX SQL1

SELECT * FROM `departement` WHERE region_id =2 ;SELECT count(*) FROM `city` WHERE population > 200000 ;



SELECT numer FROM `departement` WHERE name = " Gironde" ;

SELECT region_id FROM `departement` WHERE name = "Gironde" ;

SELECT sum(surface) FROM `city` WHERE department = 2 ;








