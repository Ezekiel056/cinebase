# Ciné-Base

Application web de gestion de films, développée en PHP (MVC maison, sans framework).

## Stack technique

- **PHP** — architecture MVC custom
- **MySQL** — base de données principale (films, utilisateurs, genres)
- **Docker** — environnement de développement

## Prérequis

- [Docker](https://www.docker.com/) et Docker Compose installés

## Installation

### 1. Cloner le projet

```bash
git clone https://github.com/Ezekiel056/cinebase.git cine-base
cd cine-base
```

### 2. Configurer les variables d'environnement

Copier le fichier d'exemple et le remplir :

```bash
cp .env.exemple .env
```

Éditer `.env` :

```env
DB_NAME=cinemadb
DB_USER=user
DB_USER_PASSWORD=password
DB_ROOT_PASSWORD=rootpassword
```

> Les valeurs sont libres, elles seront utilisées automatiquement par Docker pour créer la base MySQL et l'utilisateur.

### 3. Lancer les conteneurs

```bash
docker compose up -d
```

Le premier démarrage peut prendre quelques minutes (téléchargement des images, initialisation de la BDD).

### 4. Installer les dépendances PHP

```bash
cd app
composer install
```

---

## Accès

| Service     | URL                   | Description            |
| ----------- | --------------------- | ---------------------- |
| Application | http://localhost:8080 | Application principale |
| phpMyAdmin  | http://localhost:8081 | Interface MySQL        |

### Connexion phpMyAdmin

- **Serveur** : mysql
- **Utilisateur** : valeur de `DB_USER` dans `.env`
- **Mot de passe** : valeur de `DB_USER_PASSWORD` dans `.env`

---

## Base de données

Le schéma MySQL et les données de seed sont initialisés automatiquement au premier démarrage via les fichiers :

```
docker/databases_init/mysql/
├── 01_schema.sql   — création des tables
└── 02_seed.sql     — données de test
```

> Si la base existe déjà (dossier `databases/mysql/` non vide), les scripts d'init ne s'exécutent pas. Supprimer ce dossier pour réinitialiser.

---

## Structure du projet

```
cine-base/
├── app/
│   ├── public/          — point d'entrée (index.php), assets CSS/JS
│   └── src/
│       ├── Controllers/ — contrôleurs MVC
│       ├── Core/        — Router, Session, Layouts...
│       ├── Models/      — modèles (accès BDD)
│       └── Views/       — vues PHP + layouts
├── docker/              — configuration Docker (PHP, init BDD)
├── docker-compose.yaml
└── .env.exemple
```

## Utilisateur de test

login : test@mail.com
mot de passe : 123456
