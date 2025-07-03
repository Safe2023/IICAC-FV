<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Evenement;
use App\Models\Galerie;
use App\Models\PublicCible;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        $cible = PublicCible::all();
        $evenements = Evenement::latest()->paginate(3);
        $galeries = Galerie::with('categorie')->paginate(3);
        $actualite = Galerie::with('categorie')->paginate(3);
        return view('welcome', compact('evenements', 'categories', 'cible', 'galeries','actualite'));
    }
    /* public function event_Categorie($id)
{
    $categories = Categorie::findOrFail($id);
    $evenements = $categories->evenements()->latest()->get();

    return view('evenements.event_Categorie', compact('categories', 'evenements'));
} */

    public function creates()
    {
        $categories = Categorie::all();
        $cible = PublicCible::all();
        return view('ajout_event', compact('categories', 'cible'));
    }

    /**
     * Enregistre un nouvel événement.
     */
    public function stores(Request $request)
    {

        $data = $request->validate([
            'nom_event' => 'required|string|max:255',
            'petite_description' => 'required|string',
            'description_complete' => 'nullable|string',
            'lieu' => 'nullable|string',
            'date_debut' => 'nullable|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
            'heure_debut' => 'nullable|date_format:H:i',
            'heure_fin' => 'nullable|date_format:H:i|after_or_equal:heure_debut',
            'prix' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'categorie_id' => 'required|exists:categories,id',
            'public_cible_id' => 'required|exists:public_cibles,id',
        ]);


        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('evenements', 'public');
        }


        Evenement::create($data);

        return redirect()->back()->with('success', 'Événement ajouté avec succès.');
    }
    public function detail($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('evenements.show', compact('evenement'));
    }
    public function event_Categorie(Request $request, $id)
    {

        $categorieActive = Categorie::findOrFail($id);

        $query = $categorieActive->evenements();

        if ($request->filled('public_cible_id')) {
            $query->where('public_cible_id', $request->public_cible_id);
        }

        $evenements = $query->latest()->paginate(12);
        $categories = Categorie::all();
        $cible = PublicCible::all();

        return view('event_Categorie', compact('evenements', 'categories', 'cible', 'categorieActive'));
    }


    public function evenement(Request $request)
    {
        $categories = Categorie::all();
        $cible = PublicCible::all();
        $galeries = Galerie::all();

        $query = Evenement::query();

        if ($request->filled('categorie_id')) {
            $query->where('categorie_id', $request->categorie_id);
        }

        if ($request->filled('public_cible_id')) {
            $query->where('public_cible_id', $request->public_cible_id);
        }

        $evenements = $query->with(['categorie', 'publicCible'])->latest()->paginate(6);
        /* $galeries = $query->with(['categorie'])->latest()->paginate(6);
 */
        return view('evenement', compact('evenements', 'categories', 'cible', 'galeries'));
    }
    public function editees($id)
    {
        $evenements = Evenement::findOrFail($id);
        $cible = PublicCible::all();
        $categories = Categorie::all();
        return view('update_event', compact('evenements', 'categories', 'cible'));
    }

    public function updatees(Request $request,  $id)
    {
        $evenements = Evenement::findOrFail($id);
        $data = $request->validate([
            'nom_event' => 'required|string|max:255',
            'petite_description' => 'required|string',
            'description_complete' => 'required|string',
            'lieu' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
            'heure_debut' => 'nullable',
            'heure_fin' => 'nullable',
            'image' => 'nullable|image',
            'prix' => 'nullable|numeric',
            'categorie_id' => 'required|exists:categories,id',
            'public_cible_id' => 'required|exists:public_cibles,id',
        ]);

        if ($request->hasFile('image')) {
            if ($evenements->image && Storage::disk('public')->exists($evenements->image)) {
                Storage::disk('public')->delete($evenements->image);
            }
            $data['image'] = $request->file('image')->store('evenements', 'public');
        }

        $evenements->update($data);

        return redirect()->route('table_evenement')->with('success', 'Événement mis à jour.');
    }

    public function destroyes($id)
    {


        /*   if ($evenement->image && Storage::disk('public')->exists($evenement->image)) {
            Storage::disk('public')->delete($evenement->image);
        } */
        $evenement = Evenement::findOrFail($id);
        $evenement->delete();

        return redirect()->route('table_evenement')->with('success', 'Événement supprimé.');
    }

    public function table_evenement()
    {
        $table_evenement = Evenement::with(['categorie', 'publicCible'])->get();
        $categories = Categorie::all();
        $cible = PublicCible::all();

        return view('table_evenement', compact('table_evenement', 'categories', 'cible'));
    }
    /**
     * Remove the specified resource from storage.
     */
}
