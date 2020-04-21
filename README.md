# FRUITIZ
Projet PHP/MySQL 
WISB2 2019/2020

**Fruitiz** est un site de smoothies customisables. 

Le principe est de sélectionner un recipient, un fruit, un jus et si besoin un supplément.

## Connexion

Le fichiier connexxion.php contient est nécessaire à toute connexion avec la base de donnée de **Fruitiz**.
Les paramètres de connexion à la base setrouve dans le fichier secret.php, disponible à la racine.

## Initialisation

Afin d'initialiser la base de données il existe deux étapes :

>Créer unebase de donnée sous PhPmyAdmin nommé 'Fruitiz'
>Chargé le fichier initialisation.php, situé dans le répertoire model, ce dernier contient : 
>>le fichier migration.php qui défini les tables.
>>le fichier fixtures.php qui rempli les tables.

