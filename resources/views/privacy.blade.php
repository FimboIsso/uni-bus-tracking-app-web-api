<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Politique de Confidentialité - UniTracker API</title>
    <meta name="description"
        content="Politique de confidentialité de l'API UniTracker pour le suivi des bus universitaires">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                    },
                    colors: {
                        'primary': {
                            50: '#eff6ff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="antialiased font-sans bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-primary-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-bus text-white"></i>
                    </div>
                    <span class="font-bold text-gray-900">UniTracker API</span>
                </div>
                <a href="/" class="text-gray-600 hover:text-primary-600 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Retour à l'accueil
                </a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-4xl mx-auto py-12 px-4">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-8">Politique de Confidentialité</h1>

            <div class="prose prose-lg max-w-none">
                <p class="text-gray-600 mb-6">
                    <strong>Dernière mise à jour :</strong> 27 juin 2025
                </p>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">1. Introduction</h2>
                    <p class="text-gray-600 mb-4">
                        Cette politique de confidentialité explique comment UniTracker, développé par les étudiants de
                        l'UCBC
                        en partenariat avec UZASHOP SARLU, collecte, utilise et protège vos informations personnelles.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">2. Informations collectées</h2>
                    <p class="text-gray-600 mb-4">Nous collectons les types d'informations suivants :</p>

                    <h3 class="text-xl font-semibold text-gray-900 mb-3">2.1 Informations d'identification</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Nom complet</li>
                        <li>Matricule étudiant ou identifiant employé</li>
                        <li>Adresse email</li>
                        <li>Rôle (étudiant, chauffeur, administrateur)</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-gray-900 mb-3">2.2 Données de géolocalisation</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Position GPS des véhicules en temps réel</li>
                        <li>Historique des trajets</li>
                        <li>Horodatage des positions</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-gray-900 mb-3">2.3 Données d'utilisation</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Logs d'API et métriques d'utilisation</li>
                        <li>Préférences de notification</li>
                        <li>Historique des interactions</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">3. Utilisation des données</h2>
                    <p class="text-gray-600 mb-4">Nous utilisons vos données pour :</p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Fournir le service de suivi des bus en temps réel</li>
                        <li>Envoyer des notifications pertinentes</li>
                        <li>Améliorer la qualité du service</li>
                        <li>Générer des statistiques anonymisées</li>
                        <li>Assurer la sécurité et la maintenance du système</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">4. Partage des données</h2>
                    <p class="text-gray-600 mb-4">
                        Nous ne vendons pas vos données personnelles. Les données peuvent être partagées uniquement dans
                        les cas suivants :
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Avec votre consentement explicite</li>
                        <li>Pour la fourniture du service (exemple : position des bus visible par les utilisateurs)</li>
                        <li>Avec les autorités universitaires pour des raisons de sécurité</li>
                        <li>En cas d'obligation légale</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">5. Sécurité des données</h2>
                    <p class="text-gray-600 mb-4">
                        Nous mettons en place des mesures de sécurité appropriées pour protéger vos données :
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Chiffrement des communications (HTTPS/TLS)</li>
                        <li>Authentification sécurisée via Laravel Sanctum</li>
                        <li>Accès limité selon les rôles utilisateurs</li>
                        <li>Surveillance et logs de sécurité</li>
                        <li>Sauvegardes régulières et sécurisées</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">6. Conservation des données</h2>
                    <p class="text-gray-600 mb-4">
                        Nous conservons vos données personnelles aussi longtemps que nécessaire pour fournir le service.
                        Les données de géolocalisation sont conservées pendant 2 ans maximum à des fins d'amélioration
                        du service.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">7. Vos droits</h2>
                    <p class="text-gray-600 mb-4">Vous avez le droit de :</p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Accéder à vos données personnelles</li>
                        <li>Corriger des informations inexactes</li>
                        <li>Demander la suppression de vos données</li>
                        <li>Vous opposer au traitement de vos données</li>
                        <li>Demander la portabilité de vos données</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">8. Cookies et technologies similaires</h2>
                    <p class="text-gray-600 mb-4">
                        Notre API utilise des tokens d'authentification pour maintenir les sessions.
                        Aucun cookie de suivi n'est utilisé à des fins publicitaires.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">9. Contact</h2>
                    <p class="text-gray-600 mb-4">
                        Pour toute question concernant cette politique de confidentialité ou pour exercer vos droits :
                    </p>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-600">
                            <strong>Email :</strong> privacy@unitrack.uzashop.org<br>
                            <strong>Équipe :</strong> Développeurs UCBC<br>
                            <strong>Partenaire technique :</strong> UZASHOP SARLU<br>
                            <strong>Délégué à la protection des données :</strong> support@unitrack.uzashop.org
                        </p>
                    </div>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">10. Modifications</h2>
                    <p class="text-gray-600 mb-4">
                        Cette politique peut être mise à jour périodiquement.
                        Nous vous informerons des modifications importantes par email ou via l'API.
                    </p>
                </section>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t py-8">
        <div class="max-w-7xl mx-auto px-4 text-center text-gray-500">
            <p>&copy; 2025 UniTracker. Développé par les étudiants UCBC - Powered by UZASHOP SARLU</p>
        </div>
    </footer>
</body>

</html>
