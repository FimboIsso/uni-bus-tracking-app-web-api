<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conditions d'utilisation - UniTracker API</title>
    <meta name="description" content="Conditions d'utilisation de l'API UniTracker pour le suivi des bus universitaires">

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
            <h1 class="text-3xl font-bold text-gray-900 mb-8">Conditions d'utilisation</h1>

            <div class="prose prose-lg max-w-none">
                <p class="text-gray-600 mb-6">
                    <strong>Dernière mise à jour :</strong> 27 juin 2025
                </p>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">1. Acceptation des conditions</h2>
                    <p class="text-gray-600 mb-4">
                        En utilisant l'API UniTracker, vous acceptez d'être lié par ces conditions d'utilisation.
                        Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser notre service.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">2. Description du service</h2>
                    <p class="text-gray-600 mb-4">
                        UniTracker est une API développée par les étudiants de l'Université Catholique du Bukavu (UCBC)
                        pour le suivi en temps réel des bus universitaires. Le service comprend :
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Géolocalisation en temps réel des véhicules</li>
                        <li>Gestion des utilisateurs (étudiants, chauffeurs, administrateurs)</li>
                        <li>Système de notifications intelligentes</li>
                        <li>Carnet de bord des trajets</li>
                        <li>Analytiques et rapports</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">3. Utilisation acceptable</h2>
                    <p class="text-gray-600 mb-4">Vous vous engagez à :</p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Utiliser l'API uniquement à des fins légales et légitimes</li>
                        <li>Respecter les limites de taux d'utilisation</li>
                        <li>Ne pas tenter de compromettre la sécurité du système</li>
                        <li>Ne pas utiliser l'API pour des activités malveillantes</li>
                        <li>Maintenir la confidentialité de vos clés d'accès</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">4. Authentification et sécurité</h2>
                    <p class="text-gray-600 mb-4">
                        L'accès à l'API nécessite une authentification via Laravel Sanctum.
                        Vous êtes responsable de la sécurité de vos tokens d'accès et devez les garder confidentiels.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">5. Propriété intellectuelle</h2>
                    <p class="text-gray-600 mb-4">
                        L'API UniTracker et sa documentation sont la propriété intellectuelle de l'équipe de
                        développement UCBC
                        et d'UZASHOP SARLU. Tous droits réservés.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">6. Limitation de responsabilité</h2>
                    <p class="text-gray-600 mb-4">
                        Le service est fourni "en l'état". Nous ne garantissons pas que le service sera ininterrompu
                        ou exempt d'erreurs. Notre responsabilité est limitée dans la mesure permise par la loi.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">7. Modifications</h2>
                    <p class="text-gray-600 mb-4">
                        Nous nous réservons le droit de modifier ces conditions à tout moment.
                        Les modifications prennent effet dès leur publication sur cette page.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">8. Contact</h2>
                    <p class="text-gray-600 mb-4">
                        Pour toute question concernant ces conditions d'utilisation, contactez-nous à :
                    </p>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-600">
                            <strong>Email :</strong> support@unitrack.uzashop.org<br>
                            <strong>Équipe :</strong> Développeurs UCBC<br>
                            <strong>Partenaire :</strong> UZASHOP SARLU
                        </p>
                    </div>
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
