<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - UniTracker API</title>
    <meta name="description" content="Contactez l'équipe UniTracker pour support, questions ou partenariats">

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
    <div class="max-w-6xl mx-auto py-12 px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Contactez-nous</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                L'équipe UniTracker est à votre disposition pour toute question, support technique ou opportunité de
                collaboration.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Informations de contact</h2>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-primary-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Email Support</h3>
                                <p class="text-gray-600 mb-2">Pour le support technique et les questions générales</p>
                                <a href="mailto:support@unitrack.uzashop.org"
                                    class="text-primary-600 hover:text-primary-700">
                                    support@unitrack.uzashop.org
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-graduation-cap text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Équipe UCBC</h3>
                                <p class="text-gray-600 mb-2">Développeurs étudiants de l'Université Catholique du
                                    Bukavu</p>
                                <a href="mailto:dev.ucbc@unitrack.uzashop.org"
                                    class="text-primary-600 hover:text-primary-700">
                                    dev.ucbc@unitrack.uzashop.org
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-handshake text-accent-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Partenariats</h3>
                                <p class="text-gray-600 mb-2">Pour les collaborations et partenariats techniques</p>
                                <a href="mailto:partnership@unitrack.uzashop.org"
                                    class="text-primary-600 hover:text-primary-700">
                                    partnership@unitrack.uzashop.org
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-shield-alt text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Sécurité & Confidentialité</h3>
                                <p class="text-gray-600 mb-2">Pour les questions de sécurité et protection des données
                                </p>
                                <a href="mailto:privacy@unitrack.uzashop.org"
                                    class="text-primary-600 hover:text-primary-700">
                                    privacy@unitrack.uzashop.org
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-blue-600 to-purple-700 rounded-lg shadow-lg p-8 text-white">
                    <h2 class="text-2xl font-semibold mb-4">UZASHOP SARLU</h2>
                    <p class="text-white/90 mb-4">
                        Partenaire technique pour l'hébergement et le support infrastructure
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-globe text-white/80"></i>
                            <span>uzashop.org</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-white/80"></i>
                            <a href="mailto:tech@uzashop.org" class="hover:text-white/80 transition-colors">
                                tech@uzashop.org
                            </a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-white/80"></i>
                            <span>Bukavu, République Démocratique du Congo</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-6">Envoyez-nous un message</h2>

                <form class="space-y-6" action="#" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">
                                Prénom *
                            </label>
                            <input type="text" id="first_name" name="first_name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">
                                Nom *
                            </label>
                            <input type="text" id="last_name" name="last_name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email *
                        </label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                            Sujet *
                        </label>
                        <select id="subject" name="subject" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                            <option value="">Sélectionnez un sujet</option>
                            <option value="support">Support technique</option>
                            <option value="api">Question sur l'API</option>
                            <option value="partnership">Partenariat</option>
                            <option value="feature">Demande de fonctionnalité</option>
                            <option value="bug">Signalement de bug</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>

                    <div>
                        <label for="organization" class="block text-sm font-medium text-gray-700 mb-2">
                            Organisation/Université
                        </label>
                        <input type="text" id="organization" name="organization"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                            Message *
                        </label>
                        <textarea id="message" name="message" rows="6" required
                            placeholder="Décrivez votre demande ou question en détail..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors resize-vertical"></textarea>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="privacy" name="privacy" required
                            class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                        <label for="privacy" class="ml-2 block text-sm text-gray-700">
                            J'accepte la <a href="/privacy"
                                class="text-primary-600 hover:text-primary-700 underline">politique de
                                confidentialité</a> *
                        </label>
                    </div>

                    <button type="submit"
                        class="w-full bg-primary-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-700 transition-colors transform hover:scale-105 shadow-lg">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-16">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-8 text-center">Questions Fréquentes</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Comment obtenir un accès à l'API ?</h3>
                        <p class="text-gray-600 text-sm">
                            Contactez-nous via le formulaire ci-dessus en précisant vos besoins.
                            Nous fournirons les clés d'accès après validation de votre demande.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">L'API est-elle gratuite ?</h3>
                        <p class="text-gray-600 text-sm">
                            L'API est actuellement gratuite pour les universités et établissements d'enseignement.
                            Contactez-nous pour les usages commerciaux.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Quelle est la disponibilité du service ?</h3>
                        <p class="text-gray-600 text-sm">
                            Nous garantissons une disponibilité de 99.9% avec un support technique 24/7
                            assuré par UZASHOP SARLU.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Puis-je contribuer au projet ?</h3>
                        <p class="text-gray-600 text-sm">
                            Absolument ! Ce projet étudiant accueille les contributions.
                            Contactez l'équipe UCBC pour plus d'informations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t py-8">
        <div class="max-w-7xl mx-auto px-4 text-center text-gray-500">
            <p>&copy; 2025 UniTracker. Développé par les étudiants UCBC - Powered by UZASHOP SARLU</p>
        </div>
    </footer>

    <script>
        // Simple form validation feedback
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Simulate form submission
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.innerHTML;

            button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Envoi en cours...';
            button.disabled = true;

            setTimeout(() => {
                alert('Message envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');
                button.innerHTML = originalText;
                button.disabled = false;
                this.reset();
            }, 2000);
        });
    </script>
</body>

</html>
