<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class BusController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/buses/get",
     *     tags={"Bus"},
     *     summary="Lister tous les bus",
     *     description="Récupère la liste complète des bus avec leurs chauffeurs assignés",
     *     security={{"sanctum":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Liste des bus avec chauffeurs récupérée avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="buses", type="array", @OA\Items(
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="immatriculation", type="string", example="BENI-123"),
     *                 @OA\Property(property="marque", type="string", example="Toyota"),
     *                 @OA\Property(property="modele", type="string", example="Coaster"),
     *                 @OA\Property(property="couleur", type="string", example="Blanc"),
     *                 @OA\Property(property="status", type="string", example="actif"),
     *                 @OA\Property(property="chauffeur_id", type="integer", example=3),
     *                 @OA\Property(property="chauffeur", type="object",
     *                     @OA\Property(property="id", type="integer", example=3),
     *                     @OA\Property(property="name", type="string", example="Jean Dupont"),
     *                     @OA\Property(property="matricule", type="string", example="chauffeur001")
     *                 ),
     *                 @OA\Property(property="created_at", type="string", format="date-time", example="2025-06-27T10:30:00.000000Z"),
     *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2025-06-27T10:30:00.000000Z")
     *             ))
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Non autorisé",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Unauthenticated.")
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
     *     path="/api/buses/store",
     *     tags={"Bus"},
     *     summary="Créer un nouveau bus",
     *     description="Enregistre un nouveau bus dans le système avec un chauffeur assigné",
     *     security={{"sanctum":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"immatriculation", "chauffeur_id"},
     *             @OA\Property(property="immatriculation", type="string", example="BENI-123", description="Numéro d'immatriculation unique du bus"),
     *             @OA\Property(property="marque", type="string", example="Toyota", description="Marque du véhicule"),
     *             @OA\Property(property="modele", type="string", example="Coaster", description="Modèle du véhicule"),
     *             @OA\Property(property="couleur", type="string", example="Blanc", description="Couleur principale du bus"),
     *             @OA\Property(property="chauffeur_id", type="integer", example=3, description="ID du chauffeur assigné au bus")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Bus enregistré avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Bus enregistré avec succès."),
     *             @OA\Property(property="bus", type="object",
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="immatriculation", type="string", example="BENI-123"),
     *                 @OA\Property(property="marque", type="string", example="Toyota"),
     *                 @OA\Property(property="modele", type="string", example="Coaster"),
     *                 @OA\Property(property="couleur", type="string", example="Blanc"),
     *                 @OA\Property(property="chauffeur_id", type="integer", example=3),
     *                 @OA\Property(property="created_at", type="string", format="date-time", example="2025-06-27T10:30:00.000000Z"),
     *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2025-06-27T10:30:00.000000Z")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erreur de validation",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="The given data was invalid."),
     *             @OA\Property(property="errors", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Non autorisé",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Unauthenticated.")
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
