---
title: Symfony
---

#Doctrine et Symfony
<a href="https://www.youtube.com/watch?v=UTusmVpwJXo">Vidéo SYMFONY 1/4 : 1H POUR COMPRENDRE LE FRAMEWORK !</a>    
##Classe avec propriétés -> Table avec champs
! ##create -> entity -> migration
###Entity
Représente une table
###Manager
Permet de manipuler une ligne
Insertion  
Mise à jour  
Suppression  
###Repository
Permet de faire des selections

###Controller<br>
selection -> Repository<br>
manipulations -> Manager<br

###Création de base de données
####Configuration
 .env 
 DATABASE_URL=mysql://dbname:password@127.0.0.1:3306/symfony?serverVersion=5.7<br>

###cmd Création Database Table
php bin/console doctrine:database:create<br>
php bin/console make:entity<br>
php bin/console make:migration<br>
php bin/console doctrine:migrations:migrate<br>

###installer module fixture créer importer
composer require orm-fixtures --dev<br>
php bin/console make:fixtures<br>
php bin/console doctrine:fixtures:load<br>
 
 ##Object-Relational Mapping
<a href="https://fr.wikipedia.org/wiki/Mapping_objet-relationnel">Wikipédia php bin/console make:Mapping objet-relationnel</a>
 Un mapping objet-relationnel (en anglais object-relational mapping ou ORM) est un type de programme informatique qui se place en interface entre un programme applicatif et une base de données relationnelle pour simuler une base de données orientée objet.
 Ce programme définit des correspondances entre les schémas de la base de données et les classes du programme applicatif. On pourrait le désigner par là, « comme une couche d'abstraction entre le monde objet et monde relationnel ». Du fait de sa fonction, on retrouve ce type de programme dans un grand nombre de frameworks sous la forme de composant ORM qui a été soit développé, soit intégré depuis une solution externe.

