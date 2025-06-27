# Documentation Swagger UniTracker API

## 📋 Résumé des améliorations

J'ai mis à jour la documentation Swagger complète pour votre API UniTracker avec votre base URL : `https://unitrack.uzashop.org/`

## 🔧 Modifications apportées

### 1. Configuration principale (`app/Swagger/OAServer.php`)

-   ✅ Mise à jour de la base URL vers `https://unitrack.uzashop.org/`
-   ✅ Ajout d'un serveur de développement local (`http://localhost:8000`)
-   ✅ Configuration de l'authentification Sanctum
-   ✅ Informations de contact et licence mises à jour

### 2. Contrôleurs mis à jour avec documentation complète

#### `UserLoginController.php`

-   ✅ **GET** `/api/users/get` - Récupérer tous les utilisateurs
-   ✅ **POST** `/api/user/login` - Connexion utilisateur
-   ✅ **POST** `/api/user/register` - Inscription utilisateur

#### `BusController.php`

-   ✅ **GET** `/api/buses/get` - Lister tous les bus avec chauffeurs
-   ✅ **POST** `/api/buses/store` - Créer un nouveau bus

#### `BusJournalController.php`

-   ✅ **POST** `/api/bus-journals/get` - Lister les trajets du carnet de bord
-   ✅ **POST** `/api/bus-journals/store` - Créer un nouveau trajet

#### `BusLocationControllerController.php`

-   ✅ **POST** `/api/bus-locations/store` - Enregistrer position GPS
-   ✅ **GET** `/api/bus/{id}/last-location` - Dernière position d'un bus

## 📚 Améliorations de la documentation

### Chaque endpoint inclut maintenant :

-   ✅ Description détaillée de la fonctionnalité
-   ✅ Paramètres requis et optionnels avec exemples
-   ✅ Réponses complètes avec codes de statut (200, 401, 422, 404, 500)
-   ✅ Exemples de données JSON
-   ✅ Authentification Sanctum configurée
-   ✅ Tags organisés par fonctionnalité

### Structure des réponses standardisée :

-   ✅ Messages d'erreur explicites
-   ✅ Format des données cohérent
-   ✅ Timestamps au format ISO 8601
-   ✅ Validation des données d'entrée documentée

## 🌐 URLs de production

**API Base URL :** `https://unitrack.uzashop.org/`
**Documentation Swagger :** `https://unitrack.uzashop.org/api/documentation`

## 📱 Endpoints disponibles

### Utilisateurs

-   `GET /api/users/get` - Liste tous les utilisateurs
-   `POST /api/user/login` - Connexion
-   `POST /api/user/register` - Inscription

### Bus

-   `GET /api/buses/get` - Liste tous les bus
-   `POST /api/buses/store` - Créer un bus

### Carnets de bord

-   `POST /api/bus-journals/get` - Liste des trajets
-   `POST /api/bus-journals/store` - Nouveau trajet

### Localisation GPS

-   `POST /api/bus-locations/store` - Enregistrer position
-   `GET /api/bus/{id}/last-location` - Dernière position

## 🔐 Authentification

L'API utilise Laravel Sanctum pour l'authentification. Ajoutez le token dans l'en-tête :

```
Authorization: Bearer YOUR_TOKEN_HERE
```

## ✅ Tests

La documentation a été générée avec succès et tous les endpoints sont documentés selon les standards OpenAPI 3.0.
