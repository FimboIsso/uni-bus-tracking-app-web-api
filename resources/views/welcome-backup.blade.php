<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UniTracker API</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">
<div class="min-h-screen flex flex-col items-center justify-center">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">🚍 UniTracker API</h1>
        <p class="text-gray-600 dark:text-gray-300 text-lg mb-6 max-w-2xl mx-auto">
            Bienvenue dans l’API officielle de <strong>UniTracker</strong>, une solution intelligente pour suivre les bus universitaires en temps réel, planifier ses trajets et recevoir des notifications personnalisées.
        </p>
    </div>

    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-5xl px-4">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">📍 Suivi en Temps Réel</h2>
            <p class="text-gray-600 dark:text-gray-300 text-sm">Les utilisateurs peuvent visualiser la position exacte des bus via Google Maps, à tout moment.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">🔔 Notifications</h2>
            <p class="text-gray-600 dark:text-gray-300 text-sm">Recevez des alertes quand le bus est proche ou lorsqu’un trajet est activé.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">🧑‍🎓 Rôles Sécurisés</h2>
            <p class="text-gray-600 dark:text-gray-300 text-sm">Chauffeurs, étudiants et admins disposent chacun d’un accès personnalisé et sécurisé.</p>
        </div>
    </div>

    <div class="text-sm text-gray-500 dark:text-gray-400 mt-12">
        <a href="/api/documentation">API DOCUMMENTATION</a>
    </div>
    <div class="text-sm text-gray-500 dark:text-gray-400 mt-12">
        UNI TRACK 1.0
    </div>
</div>
</body>
</html>
