# Installation de laravel Grâce a Docker
Source : https://ianclemence.medium.com/setting-up-laravel-project-using-docker-step-by-step-guide-7c5720fbc2c8

## On install un Debian sur notre machine Windows grâce a WSL
```wsl --install -d Debian```
## On configure Debian par defaut
```wsl -s Debian```
## Il faut ensuite installer Docker pour Windows depuis leur site
---
## Un fois fait il faut se rendre dans le répertoire du projet et lancer la commande WSL
```wsl```
## On se retrouve donc dans une machine tournant sur debian. On va commencer par faire les mises à jour et installer curl
```sudo apt update && apt upgrade && apt install curl```
## On va ensuite crée le répertoire du projet grâce a la commande suivante
```curl -s https://laravel.build/ProjetLaravel | bash```
## On se rend dans le répertoire crée 
```cd ProjetLaravel```
## Et on active Sail
```./vendor/bin/sail up```
## On va passer a l'installation de Breeze qui va nous permettre de géré l'authentification
```
docker run --rm --interactive --tty --volume $PWD:/app composer require --dev laravel/breeze
./vendor/bin/sail artisan breeze:install
```
## Une fois l'installation terminé, 
```sail artisan migrate```
## J'ai ensuite décidé d'installer directement npm car j'ai rencontré des problème
```apt install npm```
## Cela m'a donc permis de faire les deux commande suivante
```sail npm install```
```sail npm run dev```
## Une fois les commandes faite, nous avons fini l'installation de laravel
---
# Lancement de la création du blog minimalist
Source : https://github.com/nicolas-sanch/creer-minimalist-blog

J'ai donc copier tout les fichier et trié au bon endroit et après quelques heures de débugage nous obtenons sur l'adresse http://localhost deux bouton un pour ce connecter et un pour s'enregistrer.

## Accès a l'interface Web
Suite a l'ensemble des manipulations, l'accès a l'interface web s'est faite depuis 
http://localhost/ ou http://127.0.0.1/

/login pour la connexion
/register pour l'enregistrement

Une fois tout cela fait je pouvais donc me connecter au 'dashboard'. J'ai donc voulu m'attaqué a la création du frontend. Cependant par manque de temps, je n'ai pas réussi a implémenté la partie visuelle pour l'utilisateur.
