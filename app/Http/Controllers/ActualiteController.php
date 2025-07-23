<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function actu()
    {
          $actualite = Actualite::latest()->paginate(6);
        return view('actualite', compact('actualite'));
    }

    public function creatx()
    {
        return view('ajout_actualite');
    }

    public function storex(Request $request)
{
    $request->validate([
        'image_actu' => 'required|image',
        'titre_actu' => 'required|string|max:255',
        'description_actu' => 'required|string',
        'lien_actu' => 'nullable|url',
        'date_actu' => 'required|date',
    ]);

    // Correction : récupérer le fichier avec le bon nom de champ
    $imagePath = $request->file('image_actu')->store('actualites', 'public');

    Actualite::create([
        'image_actu' => $imagePath,
        'titre_actu' => $request->titre_actu,
        'description_actu' => $request->description_actu,
        'lien_actu' => $request->lien_actu,
        'date_actu' => $request->date_actu,
    ]);

    return redirect()->back()->with('success', 'Actualité ajoutée.');
}


    public function editx($id)
    {
       $actualite = Actualite::findOrFail($id);
    return view('update_actualite', compact('actualite'));
    }

    public function updatex(Request $request, $id)
{
    $actualite = Actualite::findOrFail($id);

    $data = $request->validate([
        'titre_actu' => 'required',
        'description_actu' => 'required',
        'lien_actu' => 'nullable|url',
        'date_actu' => 'required|date',
    ]);

    if ($request->hasFile('image_actu')) {
        if ($actualite->image_actu && Storage::disk('public')->exists($actualite->image_actu)) {
            Storage::disk('public')->delete($actualite->image_actu);
        }
        $data['image_actu'] = $request->file('image_actu')->store('actualite', 'public');
    }

    $actualite->update($data);

    return redirect()->route('table_actu')->with('success', 'Actualité mise à jour.');
}


    public function destroyx($id)
    {
        $actualite = Actualite::findOrFail($id);

        $actualite->delete();
        return redirect()->route('table_actu')->with('success', 'Actualité supprimée.');
    }
    public function table_actu()
    {
         $actualite = Actualite::all(); 
        return view('table_actu', ['actualite' => $actualite]);
    }
    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */


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
