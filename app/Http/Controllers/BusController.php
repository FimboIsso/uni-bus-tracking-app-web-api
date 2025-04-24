<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\OpenApi(
 *     @OA\Info(
 *         title="UniTracker API",
 *         version="1.0",
 *         description="L'API UniTracker permet de suivre en temps réel les bus universitaires, planifier les trajets, et recevoir des notifications intelligentes. Elle facilite la gestion des transports pour les étudiants et les chauffeurs via des requêtes HTTP sécurisées.",
 *         termsOfService="https://unitracker.ucbc.cd/terms",
 *         @OA\Contact(
 *             email="support@unitracker.cd",
 *             name="Équipe Support UniTracker"
 *         ),
 *         @OA\License(
 *             name="UCBC / UniTracker",
 *             url="https://unitracker.ucbc.cd/license"
 *         )
 *     ),
 *     @OA\Server(
 *         url="https://unitracker.ucbc.cd",
 *         description="Serveur de production"
 *     )
 * )
 */

class BusController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/buses",
     *     tags={"Bus"},
     *     summary="Lister tous les bus",
     *     security={{"sanctum":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Liste des bus avec chauffeurs",
     *         @OA\JsonContent(
     *             @OA\Property(property="buses", type="array", @OA\Items(
     *                 @OA\Property(property="id", type="integer"),
     *                 @OA\Property(property="immatriculation", type="string"),
     *                 @OA\Property(property="marque", type="string"),
     *                 @OA\Property(property="modele", type="string"),
     *                 @OA\Property(property="couleur", type="string"),
     *                 @OA\Property(property="status", type="string"),
     *                 @OA\Property(property="chauffeur_id", type="integer"),
     *                 @OA\Property(property="created_at", type="string", format="date-time"),
     *                 @OA\Property(property="updated_at", type="string", format="date-time")
     *             ))
     *         )
     *     )
     * )
     */
    public function index()
    {
        $buses = Bus::with('chauffeur:id,name,matricule')->get();

        return response()->json([
            'buses' => $buses
        ]);
    }

    /**
     * @OA\Post(
     *     path="/api/buses",
     *     tags={"Bus"},
     *     summary="Créer un nouveau bus",
     *     security={{"sanctum":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"immatriculation", "chauffeur_id"},
     *             @OA\Property(property="immatriculation", type="string", example="BENI-123"),
     *             @OA\Property(property="marque", type="string", example="Toyota"),
     *             @OA\Property(property="modele", type="string", example="Coaster"),
     *             @OA\Property(property="couleur", type="string", example="Blanc"),
     *             @OA\Property(property="chauffeur_id", type="integer", example=3)
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Bus enregistré avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="bus", type="object",
     *                 @OA\Property(property="id", type="integer"),
     *                 @OA\Property(property="immatriculation", type="string"),
     *                 @OA\Property(property="marque", type="string"),
     *                 @OA\Property(property="modele", type="string"),
     *                 @OA\Property(property="couleur", type="string"),
     *                 @OA\Property(property="chauffeur_id", type="integer"),
     *                 @OA\Property(property="created_at", type="string", format="date-time"),
     *                 @OA\Property(property="updated_at", type="string", format="date-time")
     *             )
     *         )
     *     )
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'immatriculation' => 'required|string|max:30|unique:buses',
            'marque'          => 'nullable|string|max:50',
            'modele'          => 'nullable|string|max:50',
            'couleur'         => 'nullable|string|max:30',
            'chauffeur_id'    => 'required|exists:users,id',
        ]);

        $bus = Bus::create([
            'immatriculation' => $validated['immatriculation'],
            'marque'          => $validated['marque'] ?? null,
            'modele'          => $validated['modele'] ?? null,
            'couleur'         => $validated['couleur'] ?? null,
            'chauffeur_id'    => $validated['chauffeur_id'],
        ]);

        return response()->json([
            'message' => 'Bus enregistré avec succès.',
            'bus'     => $bus
        ]);
    }

    public function create()
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
