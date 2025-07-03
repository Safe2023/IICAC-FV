<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Galerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeries = Galerie::with('categorie')->paginate(10);
        return view('welcome', compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createes()
    {
        $categories = Categorie::all();
        return view('galerie', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storees(Request $request)
    {
        $validated = $request->validate([
            'nom_galerie' => 'required|string|max:255',
            'description_court' => 'nullable|string',
            'date_debut' => 'nullable|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('galeries', 'public');
        }

        Galerie::create($validated);

        return redirect()->back()->with('success', 'Galerie créée avec succès !');
    }


    /**
     * Display the specified resource.
     */
    public function show(Galerie $galerie)
    {
        return view('galeries.show', compact('galerie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edites($id)
    {
        $categories = Categorie::all();
        $galerie = Galerie::findOrFail($id);
        return view('update_galerie', compact('galerie', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updates(Request $request, $id)
    {
        $galerie = Galerie::findOrFail($id);
        $validated = $request->validate([
            'nom_galerie' => 'required|string|max:255',
            'description_court' => 'nullable|string',
            'date_debut' => 'nullable|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('photo')) {
            if ($galerie->photo && Storage::disk('public')->exists($galerie->photo)) {
                Storage::disk('public')->delete($galerie->photo);
            }
            $validated['photo'] = $request->file('photo')->store('galeries', 'public');
        }

        $galerie->update($validated);

        return redirect()->route('table_galerie')->with('success', 'Galerie mise à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function suprimer(string $id)
    {/* 
        if ($galerie->photo && Storage::disk('public')->exists($galerie->photo)) {
            Storage::disk('public')->delete($galerie->photo);
        } */

        $galerie = Galerie::findOrFail($id);
        $galerie->delete();
        return redirect()->route('table_galerie')->with('success', 'Galerie supprimée avec succès !');
    }

    public function table_galerie()
    {
        $table_galerie = Galerie::all();
        $categories = Categorie::all();
        return view('table_galerie', compact('table_galerie', 'categories'));
    }
}
