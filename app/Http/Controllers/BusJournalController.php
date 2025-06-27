<?php

namespace App\Http\Controllers;

use App\Models\BusJournal;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="BusJournal",
 *     description="Carnet de bord des trajets de bus"
 * )
 */
class BusJournalController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/bus-journals/get",
     *     tags={"BusJournal"},
     *     summary="Lister les trajets du carnet de bord",
     *     description="Récupère la liste des trajets avec les informations du bus et du chauffeur",
     *     security={{"sanctum":{}}},
     *     @OA\RequestBody(
     *         required=false,
     *         @OA\JsonContent(
     *             @OA\Property(property="bus_id", type="integer", example=1, description="Filtrer par ID de bus"),
     *             @OA\Property(property="chauffeur_id", type="integer", example=3, description="Filtrer par ID de chauffeur")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Liste des journaux récupérée avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="journaux", type="array", @OA\Items(
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="bus_id", type="integer", example=1),
     *                 @OA\Property(property="chauffeur_id", type="integer", example=3),
     *                 @OA\Property(property="depart", type="string", example="Campus UCBC"),
     *                 @OA\Property(property="destination", type="string", example="Faculté de Médecine"),
     *                 @OA\Property(property="statut", type="string", example="en_route"),
     *                 @OA\Property(property="heure_depart", type="string", format="date-time", example="2025-06-27T08:00:00.000000Z"),
     *                 @OA\Property(property="heure_arrivee", type="string", format="date-time", example="2025-06-27T08:30:00.000000Z"),
     *                 @OA\Property(property="remarques", type="string", example="Départ à l'heure"),
     *                 @OA\Property(property="bus", type="object",
     *                     @OA\Property(property="id", type="integer", example=1),
     *                     @OA\Property(property="immatriculation", type="string", example="BENI-123")
     *                 ),
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
        $journaux = BusJournal::with([
            'bus:id,immatriculation',
            'chauffeur:id,name,matricule'
        ])->latest()->get();

        return response()->json([
            'journaux' => $journaux
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * @OA\Post(
     *     path="/api/bus-journals/store",
     *     tags={"BusJournal"},
     *     summary="Créer un nouveau trajet dans le carnet de bord",
     *     description="Enregistre un nouveau trajet de bus avec les détails du départ et de la destination",
     *     security={{"sanctum":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"bus_id", "chauffeur_id", "depart", "destination", "heure_depart"},
     *             @OA\Property(property="bus_id", type="integer", example=1, description="ID du bus effectuant le trajet"),
     *             @OA\Property(property="chauffeur_id", type="integer", example=3, description="ID du chauffeur responsable"),
     *             @OA\Property(property="depart", type="string", example="Campus UCBC", description="Point de départ"),
     *             @OA\Property(property="destination", type="string", example="Faculté de Médecine", description="Point d'arrivée"),
     *             @OA\Property(property="heure_depart", type="string", format="date-time", example="2025-06-27T08:00:00Z", description="Heure prévue de départ"),
     *             @OA\Property(property="remarques", type="string", example="Départ à l'heure", description="Remarques optionnelles")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Trajet enregistré avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="message", type="string", example="Trajet enregistré dans le carnet de bord."),
     *             @OA\Property(property="journal", type="object",
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="bus_id", type="integer", example=1),
     *                 @OA\Property(property="chauffeur_id", type="integer", example=3),
     *                 @OA\Property(property="statut", type="string", example="en_route"),
     *                 @OA\Property(property="depart", type="string", example="Campus UCBC"),
     *                 @OA\Property(property="destination", type="string", example="Faculté de Médecine"),
     *                 @OA\Property(property="heure_depart", type="string", format="date-time", example="2025-06-27T08:00:00.000000Z"),
     *                 @OA\Property(property="remarques", type="string", example="Départ à l'heure"),
     *                 @OA\Property(property="created_at", type="string", format="date-time", example="2025-06-27T10:30:00.000000Z"),
     *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2025-06-27T10:30:00.000000Z")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erreur de validation",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Erreur de validation")
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
        try {
            $validated = $request->validate([
                'bus_id'       => 'required|exists:buses,id',
                'chauffeur_id' => 'required|exists:users,id',
                'depart'       => 'required|string|max:100',
                'destination'  => 'required|string|max:100',
                'heure_depart' => 'required|date',
                'remarques'    => 'nullable|string',
            ]);

            $journal = BusJournal::create([
                ...$validated,
                'statut' => 'en_route',
            ]);

            return response()->json([
                'success'=>true,
                'message' => 'Trajet enregistré dans le carnet de bord.',
                'journal' => $journal
            ]);
        } catch (\Exception $e){
            return  response()->json([
                'success'=>false,
                'message'=>$e->getMessage()
            ]);
        }
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
