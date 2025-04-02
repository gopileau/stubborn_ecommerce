# Documentation de l'Application

## Introduction
Cette application est un système de commerce électronique développé avec Symfony. Elle permet aux utilisateurs de naviguer à travers une boutique en ligne, de visualiser des produits, et de passer des commandes. Les fonctionnalités incluent la gestion des utilisateurs, la gestion des produits, et un système de paiement intégré.

## Architecture
L'application utilise les technologies suivantes :
- **Symfony** : Framework PHP pour le développement web.
- **PHP** : Langage de programmation utilisé pour développer l'application.
- **Node.js** : Utilisé pour exécuter des scripts côté serveur, notamment pour la génération de PDF.
- **Puppeteer** : Bibliothèque Node.js pour contrôler un navigateur Chrome, utilisée pour générer des documents PDF à partir de pages web.
- **MySQL** : Base de données relationnelle pour stocker les données de l'application.

### Structure du Projet
- **src/** : Contient le code source de l'application, y compris les contrôleurs, les entités, et les services.
- **templates/** : Contient les fichiers de template Twig pour le rendu des pages.
- **public/** : Contient les fichiers accessibles publiquement, comme les images et les fichiers CSS/JS.
- **config/** : Contient les fichiers de configuration de l'application.

## Installation
Instructions sur la manière d'installer et de configurer l'application (à compléter).

## Utilisation
Comment utiliser l'application, avec des exemples pour les fonctionnalités principales (à compléter).

## API
Documentation des routes de l'API (si applicable) (à compléter).

## Tests
Information sur les tests unitaires et d'intégration (à compléter).

## Déploiement
### Étapes pour déployer l'application sur Heroku
1. Créez un compte Heroku et installez le Heroku CLI.
2. Connectez-vous à Heroku en utilisant le CLI.
3. Créez une nouvelle application Heroku.
4. Poussez le code vers Heroku en utilisant Git.
5. Configurez les variables d'environnement et les configurations de base de données.
6. Exécutez les migrations et semez la base de données si nécessaire.
7. Ouvrez l'application dans le navigateur.
