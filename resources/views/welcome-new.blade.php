<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UniTracker API - Suivi Intelligent des Bus Universitaires</title>
    <meta name="description"
        content="API officielle UniTracker pour le suivi en temps réel des bus universitaires. Solution intelligente avec notifications et géolocalisation.">

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
                        },
                        'accent': {
                            500: '#f59e0b',
                            600: '#d97706',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .glass-effect {
            backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body class="antialiased font-sans">
    <!-- Hero Section -->
    <div class="min-h-screen gradient-bg relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-72 h-72 bg-white/10 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute top-1/2 left-1/3 w-64 h-64 bg-purple-400/15 rounded-full blur-2xl"></div>
        </div>

        <!-- Navigation -->
        <nav class="relative z-10 flex justify-between items-center p-6 lg:px-12">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center glass-effect">
                    <i class="fas fa-bus text-white text-xl"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-white font-bold text-xl">UniTracker</span>
                    <span class="text-white/70 text-xs">by UCBC Students</span>
                </div>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#features" class="text-white/80 hover:text-white transition-colors">Fonctionnalités</a>
                <a href="#api" class="text-white/80 hover:text-white transition-colors">API</a>
                <a href="#stats" class="text-white/80 hover:text-white transition-colors">Statistiques</a>
                <a href="#ucbc-team" class="text-white/80 hover:text-white transition-colors">Équipe UCBC</a>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="relative z-10 flex flex-col items-center justify-center min-h-[80vh] px-4">
            <div class="text-center max-w-4xl mx-auto">
                <!-- Animated Icon -->
                <div class="mb-8 animate-float">
                    <div
                        class="w-24 h-24 mx-auto bg-white/20 rounded-2xl flex items-center justify-center glass-effect">
                        <i class="fas fa-route text-white text-4xl"></i>
                    </div>
                </div>

                <!-- Title -->
                <h1 class="text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                    🚍 <span
                        class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">UniTracker</span>
                    <br><span class="text-3xl lg:text-4xl font-medium">API Intelligente</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl lg:text-2xl text-white/90 mb-8 leading-relaxed max-w-3xl mx-auto">
                    La solution complète développée par les étudiants UCBC pour suivre les bus universitaires en temps
                    réel,
                    optimiser vos trajets et recevoir des notifications intelligentes.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                    <a href="/api/documentation"
                        class="inline-flex items-center px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl hover:bg-gray-50 transition-all transform hover:scale-105 shadow-lg">
                        <i class="fas fa-book mr-3"></i>
                        Documentation API
                    </a>
                    <a href="#features"
                        class="inline-flex items-center px-8 py-4 glass-effect text-white font-semibold rounded-xl hover:bg-white/20 transition-all transform hover:scale-105">
                        <i class="fas fa-play mr-3"></i>
                        Découvrir les fonctionnalités
                    </a>
                </div>

                <!-- API Status -->
                <div class="flex flex-col items-center justify-center space-y-3 text-white/80">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                        <span class="text-sm">API en ligne • Version 1.0.0</span>
                    </div>
                    <div class="px-4 py-2 glass-effect rounded-full text-sm font-medium">
                        <i class="fas fa-graduation-cap mr-2"></i>
                        Développé par les étudiants UCBC
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Fonctionnalités Avancées</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Une API complète et sécurisée pour répondre à tous
                    vos besoins de suivi de transport universitaire</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-100">
                    <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-map-marker-alt text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Géolocalisation en Temps Réel</h3>
                    <p class="text-gray-600 mb-4">Suivez la position exacte de chaque bus universitaire avec une
                        précision GPS et des mises à jour en temps réel.</p>
                    <div class="flex items-center text-primary-600 text-sm font-medium">
                        <span>Précision ±5 mètres</span>
                        <i class="fas fa-check-circle ml-2"></i>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-100">
                    <div class="w-14 h-14 bg-accent-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-bell text-accent-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Notifications Intelligentes</h3>
                    <p class="text-gray-600 mb-4">Recevez des alertes personnalisées : bus en approche, retards,
                        changements d'itinéraire, et plus encore.</p>
                    <div class="flex items-center text-accent-600 text-sm font-medium">
                        <span>Push & Email</span>
                        <i class="fas fa-mobile-alt ml-2"></i>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-100">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Sécurité Renforcée</h3>
                    <p class="text-gray-600 mb-4">Authentification multi-niveaux avec rôles spécifiques : étudiants,
                        chauffeurs et administrateurs.</p>
                    <div class="flex items-center text-green-600 text-sm font-medium">
                        <span>Laravel Sanctum</span>
                        <i class="fas fa-lock ml-2"></i>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-100">
                    <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Analytiques Avancées</h3>
                    <p class="text-gray-600 mb-4">Tableaux de bord détaillés avec statistiques d'utilisation, temps de
                        trajet et optimisation des parcours.</p>
                    <div class="flex items-center text-purple-600 text-sm font-medium">
                        <span>Rapports en temps réel</span>
                        <i class="fas fa-analytics ml-2"></i>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-100">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-route text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Planification Intelligente</h3>
                    <p class="text-gray-600 mb-4">Optimisation automatique des itinéraires basée sur le trafic, les
                        horaires et la demande étudiante.</p>
                    <div class="flex items-center text-blue-600 text-sm font-medium">
                        <span>IA intégrée</span>
                        <i class="fas fa-brain ml-2"></i>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-100">
                    <div class="w-14 h-14 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-clock text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Historique Complet</h3>
                    <p class="text-gray-600 mb-4">Carnet de bord détaillé de tous les trajets avec horodatage,
                        incidents
                        et performances.</p>
                    <div class="flex items-center text-red-600 text-sm font-medium">
                        <span>Archivage automatique</span>
                        <i class="fas fa-database ml-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- API Stats Section -->
    <section id="stats" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Performance de l'API</h2>
                <p class="text-xl text-gray-600">Des chiffres qui parlent de notre fiabilité</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary-600 mb-2">99.9%</div>
                    <div class="text-gray-600">Disponibilité</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-accent-600 mb-2">&lt;50ms</div>
                    <div class="text-gray-600">Temps de réponse</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">24/7</div>
                    <div class="text-gray-600">Support technique</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-purple-600 mb-2">100+</div>
                    <div class="text-gray-600">Endpoints disponibles</div>
                </div>
            </div>
        </div>
    </section>

    <!-- API Section -->
    <section id="api" class="py-20 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">API Documentation</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">Explorez notre API RESTful complète avec Swagger UI
                    intégré</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-6">Endpoints Principaux</h3>

                    <div class="space-y-4">
                        <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                            <div class="flex items-center mb-2">
                                <span class="px-3 py-1 bg-green-600 text-white text-xs font-medium rounded">GET</span>
                                <code class="ml-3 text-green-400">/api/users/get</code>
                            </div>
                            <p class="text-gray-400 text-sm">Récupérer tous les utilisateurs</p>
                        </div>

                        <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                            <div class="flex items-center mb-2">
                                <span class="px-3 py-1 bg-blue-600 text-white text-xs font-medium rounded">POST</span>
                                <code class="ml-3 text-blue-400">/api/buses/store</code>
                            </div>
                            <p class="text-gray-400 text-sm">Créer un nouveau bus</p>
                        </div>

                        <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                            <div class="flex items-center mb-2">
                                <span class="px-3 py-1 bg-green-600 text-white text-xs font-medium rounded">GET</span>
                                <code class="ml-3 text-green-400">/api/bus/{id}/last-location</code>
                            </div>
                            <p class="text-gray-400 text-sm">Position GPS du bus</p>
                        </div>

                        <div class="bg-gray-800 p-4 rounded-lg border border-gray-700">
                            <div class="flex items-center mb-2">
                                <span class="px-3 py-1 bg-blue-600 text-white text-xs font-medium rounded">POST</span>
                                <code class="ml-3 text-blue-400">/api/bus-journals/store</code>
                            </div>
                            <p class="text-gray-400 text-sm">Nouveau trajet carnet de bord</p>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="/api/documentation"
                            class="inline-flex items-center px-6 py-3 bg-primary-600 text-white font-semibold rounded-lg hover:bg-primary-700 transition-colors">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Voir la documentation complète
                        </a>
                    </div>
                </div>

                <div class="bg-gray-800 p-6 rounded-xl border border-gray-700">
                    <h4 class="text-lg font-semibold text-white mb-4">Exemple de réponse API</h4>
                    <pre class="text-sm text-gray-300 overflow-x-auto"><code>{
  "users": [
    {
      "id": 1,
      "name": "Jean Dupont",
      "matricule": "ETU001",
      "role": "etudiant",
      "created_at": "2025-06-27T10:30:00Z"
    },
    {
      "id": 2,
      "name": "Marie Martin",
      "matricule": "CHAUF001",
      "role": "chauffeur",
      "created_at": "2025-06-27T09:15:00Z"
    }
  ]
}</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- UCBC Team Section -->
    <section id="ucbc-team" class="py-20 bg-gradient-to-r from-blue-600 to-purple-700">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center text-white">
                <div class="mb-8">
                    <div
                        class="w-20 h-20 mx-auto bg-white/20 rounded-2xl flex items-center justify-center glass-effect mb-6">
                        <i class="fas fa-graduation-cap text-white text-3xl"></i>
                    </div>
                    <h2 class="text-4xl font-bold mb-4">Projet Étudiant UCBC</h2>
                    <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                        UniTracker est né de l'initiative des étudiants de l'Université Catholique du Bukavu (UCBC)
                        pour résoudre les défis quotidiens du transport universitaire avec des solutions technologiques
                        innovantes.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="glass-effect p-6 rounded-xl">
                        <i class="fas fa-lightbulb text-yellow-400 text-3xl mb-4"></i>
                        <h3 class="text-xl font-semibold mb-3">Innovation</h3>
                        <p class="text-white/80">Des solutions créatives pensées par et pour les étudiants</p>
                    </div>

                    <div class="glass-effect p-6 rounded-xl">
                        <i class="fas fa-users text-green-400 text-3xl mb-4"></i>
                        <h3 class="text-xl font-semibold mb-3">Collaboration</h3>
                        <p class="text-white/80">Travail d'équipe multidisciplinaire entre étudiants UCBC</p>
                    </div>

                    <div class="glass-effect p-6 rounded-xl">
                        <i class="fas fa-rocket text-red-400 text-3xl mb-4"></i>
                        <h3 class="text-xl font-semibold mb-3">Impact</h3>
                        <p class="text-white/80">Amélioration concrète de la vie étudiante au quotidien</p>
                    </div>
                </div>

                <div class="mt-12 p-6 glass-effect rounded-xl max-w-4xl mx-auto">
                    <p class="text-lg text-white/90 italic">
                        "Ce projet démontre la capacité des étudiants congolais à développer des solutions
                        technologiques
                        de niveau international pour répondre aux besoins locaux."
                    </p>
                    <p class="mt-4 font-semibold">- Équipe de développement UCBC</p>
                    <p class="mt-4 text-sm text-white/70">
                        En partenariat avec <span class="font-semibold text-white">UZASHOP SARLU</span> pour
                        l'hébergement et le support technique
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-3 mb-4 md:mb-0">
                    <div class="w-8 h-8 bg-primary-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-bus text-white"></i>
                    </div>
                    <span class="font-bold text-gray-900">UniTracker API v1.0.0</span>
                </div>

                <div class="flex items-center space-x-6 text-gray-600">
                    <a href="https://unitrack.uzashop.org/terms"
                        class="hover:text-primary-600 transition-colors">Conditions d'utilisation</a>
                    <a href="https://unitrack.uzashop.org/privacy"
                        class="hover:text-primary-600 transition-colors">Confidentialité</a>
                    <a href="https://unitrack.uzashop.org/contact"
                        class="hover:text-primary-600 transition-colors">Contact</a>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-200 text-center text-gray-500">
                <p>&copy; 2025 UniTracker. Développé avec ❤️ par les étudiants UCBC pour améliorer le transport
                    universitaire.</p>
                <p class="text-sm mt-2">Université Catholique du Bukavu (UCBC) - Innovation étudiante</p>
                <p class="text-sm mt-2 flex items-center justify-center">
                    <span>Powered by</span>
                    <span class="mx-2 font-semibold text-primary-600">UZASHOP SARLU</span>
                    <i class="fas fa-bolt text-yellow-500 ml-1"></i>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>
