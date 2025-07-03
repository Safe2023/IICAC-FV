<?php

namespace App\Http\Controllers;

use App\Mail\EnvoieMail;
use App\Models\Newsletter;
use App\Models\Categorie;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function envoie_mail(Request $request)
    {
        $request->validate([
            'nom_prenom' => 'required',
            'email' => 'required',
            'numero' => 'required',
            'suject' => 'required',
            'message' => 'required',
        ]);

        try {
            Mail::to('beresaf@gmail.com')->send(new EnvoieMail($request->all()));
            return redirect()->back()->with('success', 'Votre message a bien été envoyé !');
        } catch (\Throwable $th) {
            Log::error("Erreur lors de l'envoi du mail : " . $th->getMessage());
            return back()->with("error", "Une erreur s'est produit. Veuillez reesayer plus tard.");
        }
    }
    public function newsletter(Request $request)
    {
        $request->validate([
            'mail' => 'required|email'
        ]);

        Newsletter::create([
            'mail' => $request->mail
        ]);

        return redirect()->back()->with('success', 'Merci pour votre inscription à notre newsletter !');
    }

    public function create()
    {
        return view('categorie');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_categorie' => 'required|string|max:255|unique:categories',
        ]);

        Categorie::create([
            'name_categorie' => $request->name_categorie,
        ]);

        return redirect()->back()->with('success', 'Catégorie ajoutée avec succès.');
    }
    /* public function evenement($id)
    {
        $categories = Categorie::findOrFail($id);
        $evenements = Evenement::where('categorie_id', $id)->get();

        return view('evenement.index', compact('categories', 'evenements'));
    } */
    /*  public function event_Categorie($id)
    {
        $categories = Categorie::findOrFail($id);
        $evenements = $categories->evenements()->latest()->get();

        return view('event_Categorie', compact('categories', 'evenements'));
    } */

    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('update_categorie', compact('categorie'));
    }
    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $request->validate([
            "name_categorie" => "required"
        ]);
        $categorie->name_categorie = $request->name_categorie;

        $categorie->save();
      
        return redirect()->route('table_categorie')->with('success', 'Catégorie mise à jour');

    }

    public function destroy($id)
    {
        Categorie::findOrFail($id)->delete();
        return redirect()->route('table_categorie')->with('success', 'Catégorie supprimée.');
    }
    public function table_categorie()
    {
        $table_categorie = Categorie::all();
        return view('table_categorie', ['table_categorie' => $table_categorie]);
    }
    public function index()
    {
        //
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
    
    
     * Update the specified resource in storage.
     */
}
