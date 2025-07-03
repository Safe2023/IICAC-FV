<?php

namespace App\Http\Controllers;

use App\Models\Visiteur;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function visiteur()
    {
       
        $today = Visiteur::whereDate('created_at', Carbon::today())->count();

        $month = Visiteur::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();

        $year = Visiteur::whereYear('created_at', Carbon::now()->year)->count();

        return view('home', compact('today', 'month', 'year'));
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
        //
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
