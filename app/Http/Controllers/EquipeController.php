<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_equipe()
    {
        return view('ajout_equipe');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store_equipe(Request $request)
{
    $request->validate([
        "nom_equipe" => "required|string|max:255",
        "poste_equipe" => "required|string|max:255",
        "photo_equipe" => "required|image|mimes:jpeg,png,webp,jpg,gif|max:5020",
        "lien_facebook" => "nullable|url",
        "lien_instagram" => "nullable|url",
        "lien_linkedin" => "nullable|url",
    ]);

    $photoPath = $request->file('photo_equipe')->store('equipes', 'public');

    Equipe::create([
        'nom_equipe' => $request->nom_equipe,
        'poste_equipe' => $request->poste_equipe,
        'photo_equipe' => $photoPath,
        'lien_facebook' => $request->lien_facebook,
        'lien_instagram' => $request->lien_instagram,
        'lien_linkedin' => $request->lien_linkedin,
    ]);

    return redirect()->back()->with('success', 'Un membre de l’équipe a été ajouté avec succès !');
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
    public function edit_equipe(string $id)
    {
        $equipe = Equipe::findOrFail($id);
        return view('update_equipe', compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     */
  public function update_equipe(Request $request, string $id)
{
    $equipe = Equipe::findOrFail($id);

    $data = $request->validate([
        "nom_equipe" => "required",
        "poste_equipe" => "required",
        "photo_equipe" => "nullable|file|mimes:jpeg,png,webp,jpg,gif|max:5020",
        "lien_facebook" => "nullable|url",
        "lien_instagram" => "nullable|url",
        "lien_linkedin" => "nullable|url",
    ]);

    // Gestion du fichier image si envoyé
    if ($request->hasFile('photo_equipe')) {
        // Supprimer l'ancienne image si elle existe
        if ($equipe->photo_equipe && Storage::disk('public')->exists($equipe->photo_equipe)) {
            Storage::disk('public')->delete($equipe->photo_equipe);
        }

        // Sauvegarder la nouvelle image
        $imagePath = $request->file('photo_equipe')->store('equipe', 'public');
        $data['photo_equipe'] = $imagePath;
    }

    $equipe->update($data);

    return redirect()->route('table_equipe')->with('success', 'Membre de l’équipe mis à jour.');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy_equipe(string $id)
    {
        $equipe = Equipe::findOrFail($id);
        $equipe->delete();
        return redirect()->route('table_equipe')->with('success', 'membre de lequipe supprimer.');
    }
    public function table_equipe()
    {
        $equipe = Equipe::all();
        return view('table_equipe', ['equipe' => $equipe]);
    }
}
