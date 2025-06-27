<?php

namespace App\Swagger;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="UniTracker API",
 *     description="L'API UniTracker permet de suivre en temps réel les bus universitaires, planifier les trajets, et recevoir des notifications intelligentes. Elle facilite la gestion des transports pour les étudiants et les chauffeurs via des requêtes HTTP sécurisées.",
 *     termsOfService="https://unitrack.uzashop.org/terms",
 *     @OA\Contact(
 *         email="support@unitrack.uzashop.org",
 *         name="Équipe Support UniTracker",
 *         url="https://unitrack.uzashop.org/contact"
 *     ),
 *     @OA\License(
 *         name="MIT License",
 *         url="https://opensource.org/licenses/MIT"
 *     )
 * )
 *
 * @OA\Server(
 *     url="https://unitrack.uzashop.org",
 *     description="Serveur de production"
 * )
 *
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="Serveur de développement local"
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="sanctum",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     description="Authentification via Laravel Sanctum"
 * )
 */

// This class exists solely to hold the OpenAPI annotations above
class OAServer
{
    // Empty class for swagger annotations
}
