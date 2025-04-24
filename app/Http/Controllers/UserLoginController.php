<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = User::query();
        $users = $query->select('id', 'name', 'matricule',
            'role', 'created_at')->orderBy('created_at', 'desc')->get();
        return response()->json([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricule' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('matricule', $request->matricule)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'success'=>false,
                'message' => 'Identifiants invalides.'],
                401);
        }
        return response()->json([
            'success'=>true,
            'message'=>'Connexion réussie',
            'user' => $user,
        ]);
    }


    public function register(Request $request)
    {
        try {

            $validated = $request->validate([
                'name'      => 'required|string|max:70',
                'matricule' => 'required|string|max:40|unique:users',
                'password'  => 'required|string|min:6|confirmed', // attend `password_confirmation`
                'role'      => 'in:etudiant,chauffeur,admin'
            ]);

            $user = User::create([
                'name'      => $validated['name'],
                'matricule' => $validated['matricule'],
                'password'  => Hash::make($validated['password']),
                'role'      => $validated['role'] ?? 'etudiant',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Utilisateur enregistré avec succès.',
                'user'    => $user,
            ], 201);

        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de l\'enregistrement de l\'utilisateur.',
                'error'   => $e->getMessage()
            ], 500);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
