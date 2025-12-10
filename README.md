# Bibliothèque en Ligne

Un projet de gestion de bibliothèque en ligne développé avec **HTML/CSS/JavaScript** pour le front-end et **PHP** avec une architecture **MVC** pour le back-end. Le projet utilise **Composer** pour la gestion des dépendances et une base de données **SQL** pour stocker les informations sur les livres.

---

## Fonctionnalités Implémentées

### Front-End
- **Page d'accueil (Home)** : Affiche la liste des livres disponibles.
- **Création de livre** : Bouton "Create Book" permettant d'ajouter un nouveau livre à la bibliothèque.
- **Affichage des livres** : Chaque livre peut être affiché en détail (titre, description, etc.).
- **Suppression de livre** : Possibilité de supprimer un livre directement depuis la page d'accueil.

### Back-End
- **Architecture MVC** : Séparation des responsabilités entre les modèles, vues et contrôleurs.
- **Base de données SQL** : Stockage des informations sur les livres (titre, description, pages, etc.).
- **Gestion des livres** : Logique pour ajouter, afficher et supprimer des livres.

---

## Fonctionnalités Non Implémentées
- **Modification des livres** : Bouton pour modifier les informations d'un livre depuis la page d'affichage.
- **Système de connexion (Login)** : Authentification des utilisateurs pour accéder à certaines fonctionnalités.
- **Pagination des livres** : Affichage des livres par pages dans la partie détaillée.

---

## Prérequis
- PHP (version 8.0 ou supérieure)
- Composer (pour gérer les dépendances PHP)
- Serveur MySQL (ou MariaDB)
- Serveur Web (Apache, Nginx, etc.)

---

## Installation et Configuration

### 1. Cloner le projet
```bash
git clone https://github.com/votre-utilisateur/bibliotheque-en-ligne.git
cd bibliotheque-en-ligne
```

### 2. Installer les dépendances avec Composer
```bash
composer install
```

### 3. Configurer la base de données
- Importez le fichier `db.sql` dans votre serveur MySQL pour créer la structure de la base de données.
- Modifiez le fichier `src/config.php` pour configurer les informations de connexion à votre base de données.

### 4. Configurer le serveur web
- Placez le projet dans le répertoire racine de votre serveur web (par exemple, `htdocs` pour Apache).
- Assurez-vous que le serveur est configuré pour exécuter des fichiers PHP.

### 5. Lancer le projet
- Accédez à l'URL de votre projet dans un navigateur web (par exemple, `http://localhost/bibliotheque-en-ligne/public`).

---

## Structure du Projet

```bash
bibliotheque-en-ligne/
├── public/               # Fichiers accessibles publiquement
│   ├── style.css         # Styles CSS
│   ├── index.php         # Point d'entrée du projet
│   └── ...
├── src/
│   ├── Controllers/      # Contrôleurs MVC
│   ├── Models/           # Modèles MVC
│   ├── Views/            # Vues MVC
│   ├── config.php        # Configuration de la base de données
│   └── ...
├── db.sql                # Script SQL pour la base de données
├── composer.json         # Dépendances PHP
└── README.md             # Ce fichier
```

---

## Utilisation

1. **Accéder à la page d'accueil** : Vous verrez la liste des livres disponibles.
2. **Ajouter un livre** : Cliquez sur le bouton "Create Book" et remplissez le formulaire.
3. **Afficher un livre** : Cliquez sur le bouton "Afficher" pour voir les détails du livre.
4. **Supprimer un livre** : Cliquez sur le bouton "Supprimer" pour retirer un livre de la bibliothèque.

---

## Améliorations Futures

- Implémenter le système de connexion pour sécuriser l'accès.
- Ajouter la fonctionnalité de modification des livres.
- Améliorer l'interface utilisateur pour une meilleure expérience.
- Ajouter la pagination pour les livres détaillés.

---

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENCE](LICENCE) pour plus d'informations.
