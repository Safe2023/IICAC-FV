<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function restaurant()
    {
        $plats = Restaurant::latest()->paginate(8); 
    return view('restaurant', compact('plats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function creation()
    {
        return view('ajout_resto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function creations(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'prix' => 'required|numeric',
        'image' => 'required|image|mimes:jpeg,webp,png,jpg|max:2048',
    ]);

    $imagePath = $request->file('image')->store('restos', 'public');

    Restaurant::create([
        'image' => $imagePath,
        'nom' => $request->nom,
        'prix' => $request->prix,
    ]);

    return redirect()->back()->with('success', 'Plat ajouté avec succès');
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
    public function edit_resto(string $id)
    {
        $plat = Restaurant::findOrFail($id);

        return view('update_resto', compact('plat'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update_resto(Request $request, string $id)
{
    $plat = Restaurant::findOrFail($id);

    $data = $request->validate([
        'nom' => 'required|string|max:255',
        'prix' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('restos', 'public');
        $data['image'] = $imagePath;
    }

    $plat->update($data);

    return redirect()->route('table_resto')->with('success', 'Plat mis à jour');
}


    /**
     * Remove the specified resource from storage.
     */
    public function delete_resto(string $id)
    {
        $plat = Restaurant::findOrFail($id);
        $plat->delete();
        return redirect()->back()->with('success', 'Plat supprimé');
    }
    public function table_resto()
    {
        $table_resto = Restaurant::all();
        return view('table_resto', ['table_resto' => $table_resto]);
    }
}
