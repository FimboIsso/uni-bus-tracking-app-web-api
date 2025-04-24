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
     * @OA\Get(
     *     path="/api/bus-journals",
     *     tags={"BusJournal"},
     *     summary="Lister les trajets du carnet de bord",
     *     security={{"sanctum":{}}},
     *     @OA\Parameter(
     *         name="bus_id",
     *         in="query",
     *         description="Filtrer par ID de bus",
     *         required=false,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         name="chauffeur_id",
     *         in="query",
     *         description="Filtrer par ID de chauffeur",
     *         required=false,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Liste des journaux",
     *         @OA\JsonContent(
     *             @OA\Property(property="journaux", type="array", @OA\Items(
     *                 @OA\Property(property="id", type="integer"),
     *                 @OA\Property(property="bus_id", type="integer"),
     *                 @OA\Property(property="chauffeur_id", type="integer"),
     *                 @OA\Property(property="depart", type="string"),
     *                 @OA\Property(property="destination", type="string"),
     *                 @OA\Property(property="statut", type="string"),
     *                 @OA\Property(property="heure_depart", type="string", format="date-time"),
     *                 @OA\Property(property="heure_arrivee", type="string", format="date-time"),
     *                 @OA\Property(property="remarques", type="string")
     *             ))
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
     *     path="/api/bus-journals",
     *     tags={"BusJournal"},
     *     summary="Créer un nouveau trajet dans le carnet de bord",
     *     security={{"sanctum":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"bus_id", "chauffeur_id", "depart", "destination", "heure_depart"},
     *             @OA\Property(property="bus_id", type="integer", example=1),
     *             @OA\Property(property="chauffeur_id", type="integer", example=3),
     *             @OA\Property(property="depart", type="string", example="Campus UCBC"),
     *             @OA\Property(property="destination", type="string", example="Faculté de Médecine"),
     *             @OA\Property(property="heure_depart", type="string", format="date-time", example="2025-04-15T08:00:00Z"),
     *             @OA\Property(property="remarques", type="string", example="Départ à l'heure")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Trajet enregistré avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean"),
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="journal", type="object",
     *                 @OA\Property(property="id", type="integer"),
     *                 @OA\Property(property="statut", type="string"),
     *                 @OA\Property(property="depart", type="string"),
     *                 @OA\Property(property="destination", type="string"),
     *                 @OA\Property(property="heure_depart", type="string", format="date-time")
     *             )
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
