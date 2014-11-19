<?php

http://imac.epfl.ch/files/content/sites/imac/files/Enseignement-Teaching/informatique/Aide3.1.pdf

http://startbootstrap.com/template-overviews/shop-homepage/
-> télécharger le css

abstract class MyAbstractClass

peut pas instancier la class directment

abstract public MyAbstractMethod()

fait sur class mere , forcer à définir les method ds class fille



***************************

LA BASE DE DONNES


categories
    idCategorie
    refCategorie
    nomCategorie
    descriptionCategorie

clients
    idClient
    nomClient
    prenomClient
    email
    adresseClient
    adresseLivraison

commandes
    idCommande
    idClient
    refProduit
    dateCommande
    quantiteProduitCommande

prixHT
    idPrix
    refProduit
    prixHT
    refTauxTVA

produits
    idProduit
    refProduit
    nomProduit
    descriptionProduit
    stock

tauxTVA
    idTauxTVA
    refTauxTVA
    valeurTauxTVA

panier
    idPanier
    idProduitAjoute
    quantiteProduitsAjoutes
    quantiteProduitsCommandes



