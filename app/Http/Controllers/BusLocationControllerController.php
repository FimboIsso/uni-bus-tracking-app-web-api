<?php

namespace App\Http\Controllers;

use App\Models\BusLocation;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="BusLocation",
 *     description="Coordonnées GPS des bus en temps réel"
 * )
 */
class BusLocationControllerController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    /**
     * @OA\Post(
     *     path="/api/bus-locations/store",
     *     tags={"BusLocation"},
     *     summary="Enregistrer la position GPS actuelle d’un bus",
     *     security={{"sanctum":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"bus_id", "latitude", "longitude"},
     *             @OA\Property(property="bus_id", type="integer", example=1),
     *             @OA\Property(property="latitude", type="number", format="float", example=-1.6345623),
     *             @OA\Property(property="longitude", type="number", format="float", example=29.1245891)
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Coordonnées enregistrées avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="data", type="object",
     *                 @OA\Property(property="id", type="integer"),
     *                 @OA\Property(property="bus_id", type="integer"),
     *                 @OA\Property(property="latitude", type="number"),
     *                 @OA\Property(property="longitude", type="number"),
     *                 @OA\Property(property="captured_at", type="string", format="date-time")
     *             )
     *         )
     *     )
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bus_id'    => 'required|exists:buses,id',
            'latitude'  => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
        ]);

        $location = BusLocation::create([
            ...$validated,
            'captured_at' => now(),
        ]);

        return response()->json([
            'message' => 'Coordonnées enregistrées.',
            'data'    => $location
        ]);
    }

    /**
     * @OA\Get(
     *     path="/api/bus/{id}/last-location",
     *     tags={"BusLocation"},
     *     summary="Afficher la dernière position connue d’un bus",
     *     security={{"sanctum":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID du bus",
     *         required=true,
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Dernière position du bus",
     *         @OA\JsonContent(
     *             @OA\Property(property="bus_id", type="integer"),
     *             @OA\Property(property="latitude", type="number"),
     *             @OA\Property(property="longitude", type="number"),
     *             @OA\Property(property="captured_at", type="string", format="date-time")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Aucune position trouvée pour ce bus",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string")
     *         )
     *     )
     * )
     */
    public function lastLocation($bus_id)
    {
        $location = BusLocation::where('bus_id', $bus_id)
            ->latest('captured_at')
            ->first();

        if (!$location) {
            return response()->json([
                'message' => 'Aucune position trouvée pour ce bus.'
            ], 404);
        }

        return response()->json([
            'bus_id'     => $location->bus_id,
            'latitude'   => $location->latitude,
            'longitude'  => $location->longitude,
            'captured_at'=> $location->captured_at
        ]);
    }
}
