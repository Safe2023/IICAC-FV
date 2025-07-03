<?php

namespace App\Http\Controllers;

use App\Models\PublicCible;
use Illuminate\Http\Request;

class CibleController extends Controller
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
    public function creats()
    {
        return view('cible');
    }

    public function stor(Request $request)
    {
        $request->validate([
            'cible' => 'required|string|max:255',
        ]);

        PublicCible::create(['cible' => $request->cible]);

        return redirect()->back()->with('success', 'Public cible ajouté avec succès.');
    }
    public function edite(string $id)
    {
        $cible = PublicCible::findOrFail($id);
        return view('update_cible', compact('cible'));
    }

    public function updat(Request $request, string $id)
    {
        $request->validate([
            'cible' => 'required|string|max:255',
        ]);

        $cible = PublicCible::findOrFail($id);
        $cible->cible = $request->cible;
        $cible->save();

        return redirect()->route('table_cible')->with('success', 'Public cible modifié avec succès.');
    }

    public function destroys($id)
    {
        PublicCible::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Catégorie supprimée.');
    }
    public function table_cible()
    {
        $table_cible = PublicCible::all();
        return view('table_cible', ['table_cible' => $table_cible]);
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


    /**
     * Update the specified resource in storage.
     */
}
