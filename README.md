 # Laravel CRUD

Petit projet CRUD développé avec Laravel.

## Prérequis

- PHP 8.3
- Composer
- Node.js et npm (optionnel pour les assets)
- Une base de données (MySQL, MariaDB, SQLite, ...)

## Installation

1. Cloner le dépôt et se placer dans le dossier :

```bash
git clone https://github.com/winklerstrauss8/Laravel-CRUD
cd app-crud
```

2. Installer les dépendances PHP :

```bash
composer install
```

3. (Optionnel) Installer les dépendances JavaScript :

```bash
npm install
```

4. Copier le fichier d'environnement et générer la clé d'application :

Sur Linux/macOS :

```bash
cp .env.example .env
```

Sur Windows (PowerShell) :

```powershell
Copy-Item .env.example .env
```

Puis :

```bash
php artisan key:generate
```

5. Configurer la connexion à la base de données dans le fichier `.env`, puis lancer les migrations :

```bash
php artisan migrate
```

## Utilisation

- Démarrer le serveur de développement :

```bash
php artisan serve
```

- Ouvrir votre navigateur à l'adresse : `http://localhost:8000`

## Tests

Exécuter la suite de tests (Pest / PHPUnit) :

```bash
./vendor/bin/pest
```
